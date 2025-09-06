<?php
namespace Home\Controller;

class IssueController extends HomeController
{
	protected function _initialize()
	{
		parent::_initialize();
		$allow_action=array("index","details","issuelog", "upbuynum","sendteamjl","normalissue","overdueissue");
		if(!in_array(ACTION_NAME,$allow_action)){
			$this->error(L("非法操作"));
		}
	}
	
	//认购冻结中的记录
	public function normalissue(){

	    if (!userid()) {
			$this->redirect('/Login/index');
		}
		
		$uid = userid();
		$list = M("issue_log")->where(array('uid'=>$uid,'status'=>1))->order("id desc")->select();
		$this->assign('list',$list);
		
		$this->display();
	}
	
	//认购已解冻结的记录
	public function overdueissue(){
	    if (!userid()) {
			$this->redirect('/Login/index');
		}
		$uid = userid();
		$list = M("issue_log")->where(array('uid'=>$uid,'status'=>2))->order("id desc")->select();
		$this->assign('list',$list);
		
		$this->display();
	}

    //认购首页
	public function index(){
	    
	    $list = M("issue")->where(array('status'=>1))->order("id desc")->select();
	    $this->assign('list',$list);
	    
		$this->display();
	}
	
	//认购项目详情
	public function details($id=NULL){
        $info = M("issue")->where(array('id'=>$id))->find();
		if(empty($info)){
		    $this->redirect('Issue/index');
		}
		$uid = userid();
		$buycoin = trim($info['buycoin']);
		$minfo = M("user_coin")->where(array('userid'=>$uid))->find();
		$this->assign("uid",$uid);
		$money = $minfo[$buycoin];
		if($money <= 0){
		    $money = 0;
		}
		$this->assign('info',$info);
		$this->assign("money",$money);

		$list = M("issue_log")->where(array('uid'=>$uid,'status'=>1))->order("id desc")->select();
		$this->assign('list',$list);
		
		
		$this->display();
	}
	
	
	public function upbuynum($pid=null,$num=null){
		if (checkstr($id) || checkstr($num)) {
			$this->ajaxReturn(['code'=>0,'info'=>L('参数错误')]);
		}
		$uid = userid();
		$uinfo = M("user")->where(array('id'=>$uid))->field("id,rzstatus,username,invit_1,invit_2,invit_3")->find();
		if(empty($uinfo)){
		    $this->ajaxReturn(['code'=>0,'info'=>L('请先登陆')]);
		}
		
		if($uinfo['rzstatus'] != 2){
		    $this->ajaxReturn(['code'=>0,'info'=>L('请先完成实名认证')]);
		}

		$issue = M("issue")->where(array('id'=>$pid))->find();
        if(empty($issue)){
            $this->ajaxReturn(['code'=>0,'info'=>L('参数错误')]);
        }
        
        if(time() < strtotime($issue['starttime'])){
            $this->ajaxReturn(['code'=>0,'info'=>L('认购未开始')]);
        }
        if(time() > strtotime($issue['finishtime'])){
            $this->ajaxReturn(['code'=>0,'info'=>L('认购已结束')]);
        }
        if($issue['state'] != 1){
            $this->ajaxReturn(['code'=>0,'info'=>L('禁止认购')]);
        }
        
        
        if($num <= 0){
            $this->ajaxReturn(['code'=>0,'info'=>L('请输入认购数量')]);
        }
        if($num < $issue['min']){
            $this->ajaxReturn(['code'=>0,'info'=>L('不能小于最低认购量')]);
        }
        if($num > $issue['max']){
            $this->ajaxReturn(['code'=>0,'info'=>L('不能高于最高认购量')]);
        }
        
        //查已经认购的量
        $allnum = M("issue_log")->where(array('uid'=>$uid,'pid'=>$id))->count("num");
        if(($allnum + $num) > $issue['allmax']){
            $this->ajaxReturn(['code'=>0,'info'=>L('已超出个人认购上限')]);
        }
        
        //计算发行剩余量
        $surplus = $issue['num'] - $issue['sellnum'] - $issue['ysnum'];
        if($surplus < $num){
            $this->ajaxReturn(['code'=>0,'info'=>L('超出发行总量')]);
        }
        
        //计算支付额度
        $allmoney = $num * $issue['price'];
        $buycoin = trim(strtolower($issue['buycoin']));
        
        //查会员余额
        $minfo = M("user_coin")->where(array('userid'=>$uid))->find();
        if($minfo[$buycoin] < $allmoney){
            $this->ajaxReturn(['code'=>0,'info'=>L('账户余额不足')]);
        }
        
        //组装认购记录
        $log['pid'] = $pid;
        $log['uid'] = $uid;
        $log['account'] = $uinfo['username'];
        $log['name'] = $issue['name'];
        $log['coinname'] = $issue['coinname'];
        $log['buycoin'] = $issue['buycoin'];
        $log['price'] = $issue['price'];
        $log['num'] = $num;
        $log['mum'] = $allmoney;
        $log['lockday'] = $issue['lockday'];
        $log['addtime'] = date("Y-m-d H:i:s",time());
        $log['endtime'] = date("Y-m-d H:i:s",(time() + 86400 *$issue['lockday']));
        $log['endday'] = date("Y-m-d",(time() + 86400 *$issue['lockday']));
        $log['status'] = 1;
        $logre = M("issue_log")->add($log);
        
        
        //修改项目已出售量
        $upre = M("issue")->where(array('id'=>$pid))->setInc('sellnum',$num);
        
        //扣除会员购买金额并写入日志
        $decre = M("user_coin")->where(array('userid'=>$uid))->setDec($buycoin,$allmoney);
        
        $decbill['uid'] = $uid;
        $decbill['username'] = $uinfo['username'];
        $decbill['num'] = $allmoney;
        $decbill['coinname'] = $buycoin;
        $decbill['afternum'] = $minfo[$buycoin] - $allmoney;
        $decbill['type'] = 11;
        $decbill['addtime'] = date("Y-m-d H:i:s",time());
        $decbill['st'] = 2;
        $decbill['remark'] = $issue['name'].L("认购");
        $decbillre = M("bill")->add($decbill);
        
        //增加会员认购币金额(冻结)并写入日志
        $coinnamed = $issue['coinname']."d";
        $incre = M("user_coin")->where(array('userid'=>$uid))->setInc($coinnamed,$num);
        
        $incbill['uid'] = $uid;
        $incbill['username'] = $uinfo['username'];
        $incbill['num'] = $num;
        $incbill['coinname'] = $issue['coinname'];
        $incbill['afternum'] = $minfo[$coinnamed] - $num;
        $incbill['type'] = 12;
        $incbill['addtime'] = date("Y-m-d H:i:s",time());
        $incbill['st'] = 1;
        $incbill['remark'] = $issue['name'].L("认购");
        $incbillre = M("bill")->add($incbill);
        
        if($logre && $upre && $decre && $decbillre && $incre && $incbillre){
            
            $jlcoin = $issue['jlcoin'];
            if($uinfo['invit_1'] > 0){
                $onebl = $issue['one_jl'];
                $onemoney = $num * $onebl / 100;
                if($onemoney > 0){
                    $this->sendteamjl($uinfo['invit_1'],$onemoney,$jlcoin,1);
                }
            }
            if($uinfo['invit_2'] > 0){
                $twobl = $issue['two_jl'];
                $twomoney = $num * $twobl / 100;
                $this->sendteamjl($uinfo['invit_2'],$twomoney,$jlcoin,2);
            }
            if($uinfo['invit_3'] > 0){
                $threebl = $issue['three_jl'];
                $threemoney = $num * $threebl / 100;
                $this->sendteamjl($uinfo['invit_3'],$threemoney,$jlcoin,3);
            }
            $this->ajaxReturn(['code'=>0,'info'=>L('认购成功')]);
        }else{
            $this->ajaxReturn(['code'=>0,'info'=>L('认购失败')]);
        }
        
	}
	
	//派发团队奖励
	public function sendteamjl($uid,$money,$coinanme,$invit){
	    $coinnamed = $coinanme."d";
	    $uinfo = M("user")->where(array('id'=>$uid))->field("id,username")->find();
	    $minfo = M("user_coin")->where(array('userid'=>$uid))->find();
	    M("user_coin")->where(array('userid'=>$uid))->setInc($coinnamed,$money);
	    if($invit == 1){
	        $type = 13;
	        $str = L('一代会员认购奖励');
	    }elseif($invit == 2){
	        $type = 14;
	        $str = L('二代会员认购奖励');
	    }elseif($invit == 3){
	        $type = 15;
	        $str = L('三代会员认购奖励');
	    }
	    $incbill['uid'] = $uid;
        $incbill['username'] = $uinfo['username'];
        $incbill['num'] = $money;
        $incbill['coinname'] = $coinanme;
        $incbill['afternum'] = $minfo[$coinnamed] + $money;
        $incbill['type'] = $type;
        $incbill['addtime'] = date("Y-m-d H:i:s",time());
        $incbill['st'] = 1;
        $incbill['remark'] = $str;
        M("bill")->add($incbill);
	}
	
	//认购记录
	public function issuelog(){
		if (!userid()) {
			redirect('/Login/index');
		}
		
		$uid = userid();
		//全部认购
		$alllist = M("issue_log")->where(array('uid'=>$uid))->order("id desc")->select();
		$this->assign('alllist',$alllist);
		//冻结中的认购
		$djllist = M("issue_log")->where(array('uid'=>$uid,'status'=>1))->order("id desc")->select();
		$this->assign('djllist',$djllist);
		//已解冻
		$jdllist = M("issue_log")->where(array('uid'=>$uid,'status'=>2))->order("id desc")->select();
		$this->assign('jdllist',$jdllist);

		$this->display();
	}



}
?>