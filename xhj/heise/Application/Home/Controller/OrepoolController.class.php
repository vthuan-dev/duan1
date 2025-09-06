<?php
namespace Home\Controller;

class OrepoolController extends HomeController
{
	protected function _initialize()
	{
		parent::_initialize();	$allow_action=array("index","kjinfo","kjshare","buydzmining","buygxmining","profitline","profitlist","normalmin","overduemin");
		if(!in_array(ACTION_NAME,$allow_action)){
			$this->error(L("非法操作"));
		}
		
	}
	//我的运行中的矿机
	public function normalmin(){
	    $uid = userid();
	    if($uid <= 0){
	        $this->redirect('Login/index');
	    }
	    $list = M("kjorder")->where(array('uid'=>$uid,'status'=>1))->select();
	    $this->assign('list',$list);
	    $this->display();
	}
	//我的过期的矿机
	public function overduemin(){
	    $uid = userid();
	    if($uid <= 0){
	        $this->redirect('Login/index');
	    }
	    $where['uid'] = $uid;
	    $where['status'] = array('neq',1);

	    $list = M("kjorder")->where($where)->select();

	    $this->assign('list',$list);
	    $this->display();
	}
	
	//矿机收益列表
	public function profitlist(){
	    $uid = userid();
	    if($uid <= 0){
	        $this->redirect('Login/index');
	    }
	    $list = M("kjprofit")->where(array('uid'=>$uid))->order("day desc")->limit(50)->select();
	    $nowtime = date("Y-m-d",time());
	    foreach($list as $key =>$vo){
	        if($vo['day'] < $nowtime){
	            $list[$key]['status'] = 1;
	        }else{
	            $list[$key]['status'] = 2;
	        }
	    }
	    $this->assign('list',$list);
	    $this->display();
	}
	
	//矿机收益曲线图
	public function profitline(){
	    $id = trim(I('get.id'));
	    $uid = userid();
	    $d_arr = array();
		$t_arr = array();
		$profitobj = M("kjprofit");
	    $list = $profitobj->where(array('uid'=>$uid,'kid'=>$id))->order("day asc")->limit(7)->select();
	    foreach($list as $k=>$v){
			foreach($v as $key => $value){
				if($key == 'num'){
					$d_arr[] =  $value;
				}
				if($key == 'day'){
					$t_arr[] =   date("m-d",strtotime($value));
					
				}
			}
		}
		$this->assign("d_arr",$d_arr);
		$this->assign("t_arr",$t_arr);
		$polist = $profitobj->where(array('uid'=>$uid,'kid'=>$id))->order("day desc")->select();
		$this->assign('polist',$polist);
		
		$total = $profitobj->where(array('uid'=>$uid,'kid'=>$id))->sum(num);
		if($total <= 0){
		    $total = "0.00"; 
		}
		$this->assign("total",$total);
		$info = $profitobj->where(array('uid'=>$uid,'kid'=>$id))->find();
		$coinname = strtoupper($info['coin']);
		$this->assign("coinname",$coinname);
	    $this->display();
	}
	
	//购买共享矿机
	public function buygxmining(){
	    if($_POST){
	        $st = trim(I('post.st'));
	        if($st != 8){
	           $this->ajaxReturn(['code'=>0,'msg'=> L('参数错误')]);
	       }
	       $uid = userid();
	       $uinfo = M("user")->where(array('id'=>$uid))->field("id,username,rzstatus")->find();
	       if($uid <= 0 || empty($uinfo)){
	           $this->ajaxReturn(['code'=>0,'msg'=> L('请先登陆')]);
	       }
	       
	       if($uinfo['rzstatus'] != 2){
		        $this->ajaxReturn(['code'=>0,'msg'=>L('请先完成实名认证')]);
		    }
		    
		   $sharbltxt = trim(I('post.sharbltxt'));
	       if($sharbltxt <= 0 || $sharbltxt == null){
	           $this->ajaxReturn(['code'=>0,'msg'=> L('参数错误')]);
	       }
	       
	       
	       
	       $kid = trim(I('post.kid'));
	       $minfo = M("kuangji")->where(array('id'=>$kid))->find();
	       if(empty($minfo)){
	           $this->ajaxReturn(['code'=>0,'msg'=> L('参数错误')]);
	       }
	       if($minfo['type'] != 2){
	           $this->ajaxReturn(['code'=>0,'msg'=> L('不是共享矿机')]);
	       }
	       $fearr = explode('|',$minfo['sharebl']);
	       
	       $gxfe = trim(I('post.gxfe'));
	       if($gxfe != $fearr[0] && $gxfe != $fearr[1]){
	           $this->ajaxReturn(['code'=>0,'msg'=> L('选择的占比份额不正确')]);
	       }
	       
	       $buyinfo = M("kjorder")->where(array('sharbltxt'=>$sharbltxt,'sharebl'=>$gxfe))->find();
	       if(!empty($buyinfo)){
	           $this->ajaxReturn(['code'=>0,'msg'=> L('不要重复购买')]);
	       }
	       //查矿机状态
	       if($minfo['status'] != 1){
	           $this->ajaxReturn(['code'=>0,'msg'=> L('矿机暂停出售')]);
	       }
	       if(($minfo['sellnum'] + $minfo['ycnum']) >= $minfo['allnum']){
	           $this->ajaxReturn(['code'=>0,'msg'=> L('售机已售罄')]);
	       }
	       
	       //查看该矿机购买上限
	       $minecount = M("kjorder")->where(array('kid'=>$kid,'uid'=>$uid,'status'=>1))->count();
	       if($minecount >= $minfo['buymax']){
	           $this->ajaxReturn(['code'=>0,'msg'=> L('已达到限购数量')]);
	       }
	       
	       //查会员购买资质
	       $umoney = M("user_coin")->where(array('userid'=>$uid))->find();
	       $buyask = $minfo['buyask'];
	       
	       //按持仓平台币数量
	       if($buyask == 1){
	            $ptcoin = strtolower(PT_COIN);
	            $ptcoind = $ptcoin."d";
	            if(($umoney[$ptcoin] +  $umoney[$ptcoind]) < $minfo['asknum']){
	                $this->ajaxReturn(['code'=>0,'msg'=> L('持有平台币额度不足')]);
	            }
	       //按直推人数   
	       }elseif($buyask == 2){
	           $tzcount = M("user")->where(array('invit_1'=>$uid))->count();
	           if($tzcount < $minfo['asknum']){
	                $this->ajaxReturn(['code'=>0,'msg'=> L('直推人数未达要求')]);
	            }
	       }
	       //查会员余额
	       $pricecoin = $minfo['pricecoin'];
	       $pricenum = $minfo['pricenum'];
	       $tprice = $pricenum * $gxfe / 100;

	       if($umoney[$pricecoin] < $tprice){
	           $this->ajaxReturn(['code'=>0,'msg'=> L('账户余额不足')]);
	       }
	       
	       
	       
	       //建仓矿机订单数据
	       $odate['kid'] = $minfo['id'];
	       $odate['type'] = 2;
	       $odate['sharbltxt'] = $sharbltxt;
	       $odate['sharebl'] = $gxfe;
	       $odate['uid'] = $uid;
	       $odate['username'] = $uinfo['username'];
	       $odate['kjtitle'] = $minfo['title'];
	       $odate['imgs'] = $minfo['imgs'];
	       $odate['status'] = 1;
	       $odate['cycle'] = $minfo['cycle'];
	       $odate['synum'] = $minfo['cycle'];
	       $odate['outtype'] = $minfo['outtype'];
	       $odate['outcoin'] = $minfo['outcoin'];
	       if($minfo['outtype'] == 1){//按产值收益
	          $odate['outnum'] = '';
	          $odate['outusdt'] = $minfo['dayoutnum'] * $gxfe / 100;
	       }elseif($minfo['outtype'] == 2){//按币量收益
	          $odate['outnum'] = $minfo['dayoutnum'] * $gxfe / 100;
	          $odate['outusdt'] = '';
	       }
	       $odate['djout'] = $minfo['djout'];
	       if($minfo['djout'] == 2){
	          $odate['djnum'] = $minfo['djday']; 
	       }else{
	          $odate['djnum'] = $minfo['djday']; 
	       }
	       $odate['addtime'] = date("Y-m-d H:i:s",time());
	       $odate['endtime'] = date("Y-m-d H:i:s",(time() + 86400 * $minfo['cycle']));
	       $odate['intaddtime'] = time();
	       $odate['intendtime'] = time() + 86400 * $minfo['cycle'];
           $adre = M("kjorder")->add($odate);
	       
	       //扣除会员额度
           $decre = M("user_coin")->where(array('userid'=>$uid))->setDec($pricecoin,$tprice);
	       
	       //写资金日志
	       $billdata['uid'] = $uid;
	       $billdata['username'] = $uinfo['username'];
	       $billdata['num'] = $tprice;
	       $billdata['coinname'] = $pricecoin;
	       $billdata['afternum'] = $umoney[$pricecoin] - $tprice;
	       $billdata['type'] = 5;
	       $billdata['addtime'] = date("Y-m-d H:i:s",time());
	       $billdata['st'] = 2;
	       $billdata['remark'] = L('购买矿机');
	       $billre = M("bill")->add($billdata);
	       
	       if($adre && $decre && $billre){
	            //查看有没有购买奖励
                if($minfo['jlnum'] > 0){
                    $jlcoin = $minfo['jlcoin'];
                    $jlnum = $minfo['jlnum'] * $gxfe / 100;
                    M("user_coin")->where(array('userid'=>$uid))->setInc($jlcoin,$jlnum);
                    $jlbilldata['uid'] = $uid;
	                $jlbilldata['username'] = $uinfo['username'];
	                $jlbilldata['num'] = $jlnum;
	                $jlbilldata['coinname'] = $jlcoin;
	                $jlbilldata['afternum'] = $umoney[$jlcoin] + $jlnum;
	                $jlbilldata['type'] = 6;
	                $jlbilldata['addtime'] = date("Y-m-d H:i:s",time());
	                $jlbilldata['st'] = 1;
	                $jlbilldata['remark'] = L('购机奖励');
	                M("bill")->add($jlbilldata);
	                
	                M("kuangji")->where(array('id'=>$kid))->setInc('sellnum',1);
                }
                $this->ajaxReturn(['code'=>1,'msg'=> L('购买成功')]);
	       }else{
	           $this->ajaxReturn(['code'=>1,'msg'=> L('购买失败')]);
	       }
  
	    }else{
	       $this->ajaxReturn(['code'=>0,'msg'=> L('网络错误')]); 
	    }
	}
	
	//购买独资矿机
	public function buydzmining(){
	    if($_POST){
	       $st = trim(I('post.st'));
	       $kid = trim(I('post.kid'));
	       if($st != 7){
	           $this->ajaxReturn(['code'=>0,'msg'=> L('参数错误')]);
	       }
	       $uid = userid();
	       $uinfo = M("user")->where(array('id'=>$uid))->field("id,username,rzstatus")->find();
	       if($uid <= 0 || empty($uinfo)){
	           $this->ajaxReturn(['code'=>0,'msg'=> L('请先登陆')]);
	       }
	       
	       if($uinfo['rzstatus'] != 2){
		        $this->ajaxReturn(['code'=>0,'msg'=>L('请先完成实名认证')]);
		    }
	       
	       
	       $minfo = M("kuangji")->where(array('id'=>$kid))->find();
	       if(empty($minfo)){
	           $this->ajaxReturn(['code'=>0,'msg'=> L('参数错误')]);
	       }
	       
	       //查矿机状态
	       if($minfo['status'] != 1){
	           $this->ajaxReturn(['code'=>0,'msg'=> L('矿机暂停出售')]);
	       }
	       if(($minfo['sellnum'] + $minfo['ycnum']) >= $minfo['allnum']){
	           $this->ajaxReturn(['code'=>0,'msg'=> L('售机已售罄')]);
	       }
	       
	       //查看该矿机购买上限
	       $minecount = M("kjorder")->where(array('kid'=>$kid,'uid'=>$uid,'status'=>1))->count();
	       if($minecount >= $minfo['buymax']){
	           $this->ajaxReturn(['code'=>0,'msg'=> L('已达到限购数量')]);
	       }
	       
	       //查会员购买资质
	       $umoney = M("user_coin")->where(array('userid'=>$uid))->find();
	       $buyask = $minfo['buyask'];
	       
	       //按持仓平台币数量
	       if($buyask == 1){
	            $ptcoin = strtolower(PT_COIN);
	            $ptcoind = $ptcoin."d";
	            if($umoney[$ptcoin] + $umoney[$ptcoind] < $minfo['asknum']){
	                $this->ajaxReturn(['code'=>0,'msg'=> L('持有平台币额度不足')]);
	            }
	       //按直推人数   
	       }elseif($buyask == 2){
	           $tzcount = M("user")->where(array('invit_1'=>$uid))->count();
	           if($tzcount < $minfo['asknum']){
	                $this->ajaxReturn(['code'=>0,'msg'=> L('直推人数未达要求')]);
	            }
	       }
	       
	       //查会员余额
	       $pricecoin = $minfo['pricecoin'];
	       if($umoney[$pricecoin] < $minfo['pricenum']){
	           $this->ajaxReturn(['code'=>0,'msg'=> L('账户余额不足')]);
	       }
	       
	       
	       //建仓矿机订单数据
	       $odate['kid'] = $minfo['id'];
	       $odate['type'] = 1;
	       $odate['sharebl'] = '';
	       $odate['sharebl'] = '';
	       $odate['uid'] = $uid;
	       $odate['username'] = $uinfo['username'];
	       $odate['kjtitle'] = $minfo['title'];
	       $odate['imgs'] = $minfo['imgs'];
	       $odate['status'] = 1;
	       $odate['cycle'] = $minfo['cycle'];
	       $odate['synum'] = $minfo['cycle'];
	       $odate['outtype'] = $minfo['outtype'];
	       $odate['outcoin'] = $minfo['outcoin'];
	       if($minfo['outtype'] == 1){//按产值收益
	          $odate['outnum'] = '';
	          $odate['outusdt'] = $minfo['dayoutnum'];
	       }elseif($minfo['outtype'] == 2){//按币量收益
	          $odate['outnum'] = $minfo['dayoutnum']; 
	          $odate['outusdt'] = '';
	       }
	       $odate['djout'] = $minfo['djout'];
	       if($minfo['djout'] == 2){
	          $odate['djnum'] = $minfo['djday']; 
	       }else{
	          $odate['djnum'] = $minfo['djday']; 
	       }
	       $odate['addtime'] = date("Y-m-d H:i:s",time());
	       $odate['endtime'] = date("Y-m-d H:i:s",(time() + 86400 * $minfo['cycle']));
	       $odate['intaddtime'] = time();
	       $odate['intendtime'] = time() + 86400 * $minfo['cycle'];
           $adre = M("kjorder")->add($odate);
           //扣除会员额度
           $buyprice = $minfo['pricenum']; //单价的币量
           $buycoin = $minfo['pricecoin']; //单价的币种
           $decre = M("user_coin")->where(array('userid'=>$uid))->setDec($buycoin,$buyprice);
	       //写资金日志
	       $billdata['uid'] = $uid;
	       $billdata['username'] = $uinfo['username'];
	       $billdata['num'] = $buyprice;
	       $billdata['coinname'] = $buycoin;
	       $billdata['afternum'] = $umoney[$buycoin] - $buyprice;
	       $billdata['type'] = 5;
	       $billdata['addtime'] = date("Y-m-d H:i:s",time());
	       $billdata['st'] = 2;
	       $billdata['remark'] = L('购买矿机');
	       $billre = M("bill")->add($billdata);
	       if($adre && $decre && $billre){
	            //查看有没有购买奖励
                if($minfo['jlnum'] > 0){
                    $jlcoin = $minfo['jlcoin'];
                    $jlnum = $minfo['jlnum'];
                    
                    M("user_coin")->where(array('userid'=>$uid))->setInc($jlcoin,$jlnum);
                    $jlbilldata['uid'] = $uid;
	                $jlbilldata['username'] = $uinfo['username'];
	                $jlbilldata['num'] = $jlnum;
	                $jlbilldata['coinname'] = $jlcoin;
	                $jlbilldata['afternum'] = $umoney[$jlcoin] + $jlnum;
	                $jlbilldata['type'] = 6;
	                $jlbilldata['addtime'] = date("Y-m-d H:i:s",time());
	                $jlbilldata['st'] = 1;
	                $jlbilldata['remark'] = L('购机奖励');
	                M("bill")->add($jlbilldata);
	                
	                M("kuangji")->where(array('id'=>$kid))->setInc('sellnum',1);
	                
                }
                $this->ajaxReturn(['code'=>1,'msg'=> L('购买成功')]);
	       }else{
	           $this->ajaxReturn(['code'=>1,'msg'=> L('购买失败')]);
	       }
 
	    }else{
	        $this->ajaxReturn(['code'=>0,'msg'=> L('网络错误')]);
	    }
	}
	
	
	//共享矿机第二份额度详情页面
	public function kjshare(){
	    $oid = trim(I('get.oid'));
	    $fe = trim(I('get.fe')); 
	    $sharbltxt = trim(I('get.sharbltxt')); 
	    $info = M("kuangji")->where(array('id'=>$oid))->find();
	    $this->assign('info',$info);
	    
	    $kjorder = M("kjorder")->where(array('kid'=>$oid,'type'=>2))->find();
	    if(!empty($kjorder)){
	        $bfe = $kjorder['sharebl'];
	        $fe = 100 - $bfe;
	    }
	    $this->assign("fe",$fe);
	    $this->assign("sharbltxt",$sharbltxt);
	    $this->display();
	}
	
	//矿机详情
	public function kjinfo(){
	    $oid = trim(I('get.id'));
	    $info = M("kuangji")->where(array('id'=>$oid))->find();
	    if($info['type'] == 2){
	        $typearr = explode("|",$info['sharebl']);
	        $info['fe1'] = $typearr[0];
	        $info['fe2'] = $typearr[1];
	    }

	    $this->assign('info',$info);
	    $uid = userid();
	    if($uid <= 0 || $uid == ''){
	        $uid = 0;
	    }
	    $this->assign('uid',$uid);
	    
	    $this->display();
	}

	//矿机首页面
	public function index(){
	    //全部
		$alist = M("kuangji")->where(array('status'=>1,'rtype'=>1))->order("id asc")->select();
		//独资
		$blist = M("kuangji")->where(array('status'=>1,'type'=>1,'rtype'=>1))->order("id asc")->select();
		//共享
		$clist = M("kuangji")->where(array('status'=>1,'type'=>2,'rtype'=>1))->order("id asc")->select();
		//我的矿机
		$uid = userid();
		$mylist = M("kjorder")->where(array('uid'=>$uid))->order('id desc')->select();
		$this->assign('mylist',$mylist);
		$this->assign('alist',$alist);
        $this->assign('blist',$blist);
        $this->assign('clist',$clist);
        
        $congif = M("config")->where(array('id'=>1))->field("webkj")->find();
        $webkj = $congif['webkj'];
        $this->assign('webkj',$webkj);
		$this->display();
	}
	

}
?>