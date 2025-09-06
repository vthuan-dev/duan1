<?php
namespace Home\Controller;

class UserController extends HomeController
{
	protected function _initialize()
	{
		parent::_initialize();
		$allow_action=array("index","addresslist","deladdress","upplusaddress","authrz","recharge_img","upauthrz","respwd","sub_respwd","tgcode","notice","readnoticeone","delonenotice","allread","allnoticedel","online","getlineinfo","uptxt","mybill","getbilllist");
		if(!in_array(ACTION_NAME,$allow_action)){
			$this->error(L("非法操作！"));
		}
	}
	//获取我的账号
	public function getbilllist(){
	    //$uid = userid();
	   // $list = M("bill")->where(array('uid'=>$uid))->order("id desc")->limit(50)->select();
	    
	    
	}
	
	
	//我的账单
	public function mybill(){
	    $uid = userid();
	    if($uid <= 0){
	        $this->redirect('Login/index');
	    }
	    $uid = userid();
	    $fields = "id,username,rzstatus,logintime,loginip,invit";
		$uinfo = M("user")->where(array('id'=>$uid))->field($fields)->find();
		$uarr = explode("@",$uinfo['username']);
		$uinfo['name'] = substr($uarr[0],0,4)."***@".$uarr[1];
		$uinfo['uid'] = '7012'.$uinfo['id'];
		$uheader = substr($uinfo['username'],0,2);
		$this->assign('uheader',$uheader);
		$this->assign('uinfo',$uinfo);
	    
	    $list = M("bill")->where(array('uid'=>$uid))->order("id desc")->limit(50)->select();
	    $this->assign('list',$list);
	    
	    $this->display();
	}
	
	//提交聊天内容
	public function uptxt($txt = null){

	    if (checkstr($txt) ) {
			$this->ajaxReturn(['code'=>0,'info'=>L('您输入的信息有误')]);
		}
		$uid = userid();
		$uinfo = M("user")->where(array('id'=>$uid))->field("id,username")->find();
		if($uid <= 0){
		    $this->ajaxReturn(['code'=>0,'info'=>L('请先登陆')]);
		}
		
		if($txt == ''){
		    $this->ajaxReturn(['code'=>0,'info'=>L('请输入信息内容')]);
		}
		
		$data['uid'] = $uid;
		$data['username'] = $uinfo['username'];
		$data['type'] = 2;
		$data['content'] = $txt;
		$data['addtime'] = date("Y-m-d H:i:s",time());
		$result = M("online")->add($data);
		if($result){
		    $this->ajaxReturn(['code'=>1]);
		}else{
		    $this->ajaxReturn(['code'=>0,'info'=>L('信息发送失败')]);
		}
	}
	
	//获取聊天记录
	public function getlineinfo(){
		$uid = userid();
		$list = M("online")->where(array('uid'=>$uid))->order('id asc')->field("type,content")->limit(20)->select();
		$this->ajaxReturn(['code'=>1,'data'=>$list]);exit();

	}
	
	//在线客服
	public function online(){
	    $uid = userid();
	    if($uid <= 0){
	        $this->redirect('Login/index');
	    }
	    
	    $this->display();
	}
	
	//我的通知全部删除
	public function allnoticedel(){
	    if($_POST){
	        $st = trim($_POST['st']);
	        if($st != 1){
	            $this->ajaxReturn(['code'=>0,'info'=>L('缺少重要参数')]);
	        }
	        $uid = userid();
	        if($uid <= 0){
	            redirect('/Login/index.html');
	        }
	        $list = M("notice")->where(array('uid'=>$uid))->select();
	        if(!empty($list)){
	            foreach($list as $key => $vo){
	                $id = $vo['id'];
	                M("notice")->where(array('id'=>$id))->delete();
	            }
	            $this->ajaxReturn(['code'=>1,'info'=>L('删除成功')]);
	        }else{
	            $this->ajaxReturn(['code'=>1,'info'=>L('操作成功')]);
	        }
	        
	    }else{
	        $this->ajaxReturn(['code'=>0,'info'=>L('非法操作')]);
	    }
	}
	
	//我的通知全部标为已读
	public function allread(){
	    if($_POST){
	        $st = trim($_POST['st']);
	        if($st != 1){
	            $this->ajaxReturn(['code'=>0,'info'=>L('缺少重要参数')]);
	        }
	        $uid = userid();
	        if($uid <= 0){
	            redirect('/Login/index.html');
	        }
	        $list = M("notice")->where(array('uid'=>$uid,'status'=>1))->select();
	        if(!empty($list)){
	            foreach($list as $key => $vo){
	                $id = $vo['id'];
	                M("notice")->where(array('id'=>$id))->save(['status'=>2]);
	            }
	            $this->ajaxReturn(['code'=>1,'info'=>L('标记成功')]);
	        }else{
	            $this->ajaxReturn(['code'=>1,'info'=>L('操作成功')]);
	        }
	        
	    }else{
	        $this->ajaxReturn(['code'=>0,'info'=>L('非法操作')]);
	    }
	}
	
	//删除单条记录
	public function delonenotice($id = null){
	    if($_POST){
	        if(checkstr($id)){
	            $this->ajaxReturn(['code'=>0,'info'=>L('您输入的信息有误')]);
	        }
	        
	        if($id <= 0){
	            $this->ajaxReturn(['code'=>0,'info'=>L('缺少重要参数')]);
	        }
	        
	        $info = M("notice")->where(array('id'=>$id))->find();
	        if(empty($info)){
	            
	            $this->ajaxReturn(['code'=>0,'info'=>L('缺少重要参数')]);
	        }
	        
	        $result = M("notice")->where(array('id'=>$id))->delete();
	        
	        if($result){
	            $this->ajaxReturn(['code'=>1,'info'=>L('删除成功')]);
	        }else{
	            $this->ajaxReturn(['code'=>0,'info'=>L('删除失败')]);
	        }
	        
	    }else{
	        $this->ajaxReturn(['code'=>0,'info'=>L('非法操作')]);
	    }
	}
	
	//标记单条通知已读状态
	public function readnoticeone($id = null){
	    if($_POST){
	        
	        if(checkstr($id)){
	            $this->ajaxReturn(['code'=>0,'info'=>L('您输入的信息有误')]);
	        }
	        
	        if($id <= 0){
	            $this->ajaxReturn(['code'=>0,'info'=>L('缺少重要参数')]);
	        }
	        
	        $info = M("notice")->where(array('id'=>$id))->find();
	        if(empty($info)){
	            $this->ajaxReturn(['code'=>0,'info'=>L('缺少重要参数')]);
	        }
	        
	        $result = M("notice")->where(array('id'=>$id))->save(['status'=>2]);
	        if($result){
	            $this->ajaxReturn(['code'=>1,'info'=>L('操作成功')]);
	        }else{
	            $this->ajaxReturn(['code'=>0,'info'=>L('操作失败')]);
	        }
	    }else{
	        $this->ajaxReturn(['code'=>0,'info'=>L('非法操作')]);
	    }
	    
	}
	
	//我的通知
	public function notice(){
	    if (!userid()) {
			redirect('/Login/index.html');
		}
	    $uid = userid();
	    $fields = "id,username,rzstatus,logintime,loginip,invit";
		$uinfo = M("user")->where(array('id'=>$uid))->field($fields)->find();
		$uarr = explode("@",$uinfo['username']);
		$uinfo['name'] = substr($uarr[0],0,4)."***@".$uarr[1];
		$uinfo['uid'] = '7012'.$uinfo['id'];
		$uheader = substr($uinfo['username'],0,2);
		$this->assign('uheader',$uheader);
		$this->assign('uinfo',$uinfo);
	    
	    $list = M("notice")->where(array('uid'=>$uid))->order("id desc")->limit(50)->select();
	    $this->assign("list",$list);
	    $this->display();
	}
	
	//分享推荐页面
	public function tgcode(){
	    if (!userid()) {
			redirect('/Login/index.html');
		}
		
		$uid = userid();
		$fields = "id,username,rzstatus,logintime,loginip,invit";
		$uinfo = M("user")->where(array('id'=>$uid))->field($fields)->find();
		$uarr = explode("@",$uinfo['username']);
		$uinfo['name'] = substr($uarr[0],0,4)."***@".$uarr[1];
		$uinfo['uid'] = '7012'.$uinfo['id'];
		$uheader = substr($uinfo['username'],0,2);
		$this->assign('uheader',$uheader);
		$this->assign('uinfo',$uinfo);
		
		//三代会员统计
		
		$count1_rz = M("user")->where("invit_1 = {$uid} and rzstatus = 2")->count();
		if($count1_rz <= 0){
		    $count1_rz = 0;
		}
		$count1_nrz = M("user")->where("invit_1 = {$uid} and rzstatus != 2")->count();
		if($count1_nrz <= 0){
		    $count1_nrz = 0;
		}
		
		
		
		$count2_rz = M("user")->where("invit_2 = {$uid} and rzstatus = 2")->count();
		if($count2_rz <= 0){
		    $count2_rz = 0;
		}
		
		$count2_nrz = M("user")->where("invit_2 = {$uid} and rzstatus != 2")->count();
		if($count2_nrz <= 0){
		    $count2_nrz = 0;
		}
		
		
		$count3_rz = M("user")->where("invit_3 = {$uid} and rzstatus = 2")->count();
		if($count3_rz <= 0){
		    $count3_rz = 0;
		}
		
		$count3_nrz = M("user")->where("invit_3 = {$uid} and rzstatus != 2")->count();
		if($count3_nrz <= 0){
		    $count3_nrz = 0;
		}
		
		
	    $allcount_rz = $count1_rz + $count2_rz + $count3_rz;
	    if($allcount_rz <= 0){
		    $allcount_rz = 0;
		}
		
		$allcount_nrz = $count1_nrz + $count2_nrz + $count3_nrz;
	    if($allcount_nrz <= 0){
		    $allcount_nrz = 0;
		}
		
		
	    $carr['one'] = $count1_rz;
	    $carr['two'] = $count2_rz;
	    $carr['three'] = $count3_rz;
	    
	    $carr['onen'] = $count1_nrz;
	    $carr['twon'] = $count2_nrz;
	    $carr['threen'] = $count3_nrz;
	    
	    $carr['allrz'] = $allcount_rz;
	    $carr['allnrz'] = $allcount_nrz;
	    
	    $this->assign('carr',$carr);
	    
	    
	    $invit = $uinfo['invit'];
		$url = 'https://' . $_SERVER['HTTP_HOST'] . u('/Login/register', array('qr'=>$invit));
		
		$drpath = './Public/Static/qrcode/';
        $imgma = $invit . '.png';
        $urel = './Public/Static/qrcode/' . $imgma;
        
        Vendor('phpqrcode.phpqrcode');
        $object = new \QRcode();
        $size = 3;
        $errorLevel = 16;
        $object->png($url, $drpath . '/' . $imgma, $errorLevel, $size);
        $object->scerweima1($url,$urel,$url);
        $this->assign('invit',$invit);
		$this->assign('url',$url);
	    
	    //登陆日志
	    $loglist = M("user_log")->where(array('userid'=>$uid))->order("id desc")->limit(20)->select();
	    $this->assign('loglist',$loglist);
		$this->display();
	}
	
	//修改密码页面
	public function respwd(){
		if (!userid()) {
			redirect('/Login/index.html');
		}
		
		$this->display();
	}
	
	//修改密码处理
	public function sub_respwd($oldpwd,$newpwd){
		if($_POST){
			if(checkstr($oldpwd) || checkstr($newpwd)){
				$this->ajaxReturn(['code'=>0,'info'=>L('您输入的信息有误')]);
			}
			$uid = userid();
			if($uid == ''){
				$this->ajaxReturn(['code'=>0,'info'=>L('请先登陆')]);
			}
			$info = M("user")->where(array('id'=>$uid))->field("id,username,password")->find();
			if(md5($oldpwd) != $info['password']){
				$this->ajaxReturn(['code'=>0,'info'=>L('旧密码不正确')]);
			}

			$result = M("user")->where(array('id'=>$uid))->save(array('password'=>md5($newpwd),'stoptime'=>time()));
			if($result){
				$this->ajaxReturn(['code'=>1,'info'=>L('密码修改成功')]);
			}else{
				$this->ajaxReturn(['code'=>0,'info'=>L('密码修改失败')]);
			}

		}else{
			$this->ajaxReturn(['code'=>0,'info'=>L('非法操作')]);
		}
	}


    //账户总览
	public function index()
	{
		if (!userid()) {
			redirect('/Login/index.html');
		}
		$uid = userid();
		$fields = "id,username,rzstatus,logintime,loginip";
		$uinfo = M("user")->where(array('id'=>$uid))->field($fields)->find();
		$uarr = explode("@",$uinfo['username']);
		$uinfo['name'] = substr($uarr[0],0,4)."***@".$uarr[1];
		$uinfo['uid'] = '7012'.$uinfo['id'];
		$uheader = substr($uinfo['username'],0,2);
		$this->assign('uheader',$uheader);
		$this->assign('uinfo',$uinfo);
        
        //USDT余额查询
        $minfo = M("user_coin")->where(array('userid'=>$uid))->find();
        $balance = $minfo['usdt'] + $minfo['usdtd'];
        $this->assign('balance',$balance);
        //公告查询
        $notice = M("content")->where(array('status'=>1))->order("id desc")->limit(2)->field("id,title,addtime")->select();
        $this->assign('notice',$notice);
        
        
        //未成效币币委托
        $where['ordertype'] = 1;
        $where['status'] = 1;
        $where['uid'] = $uid;
        $bblist = M("bborder")->where($where)->order("id desc")->select();
        $this->assign('bblist',$bblist);
        
        //未成交秒合约
        $hylist = M("hyorder")->where(array('uid'=>$uid,'status'=>1))->order("id desc")->limit(20)->select();
	    $this->assign("hylist",$hylist); 
        
		$this->display();
	}
	//实名认证处理
	public function upauthrz($phone,$cardzm,$cardfm){
	    if (checkstr($phone) || checkstr($cardzm) || checkstr($cardfm)) {
			$this->ajaxReturn(['code'=>0,'info'=>L('您输入的信息有误')]);
		}
		$uid = userid();
		
		$userinfo = M("user")->where(array('id'=>$uid))->find();
		if($uid <= 0){
		    $this->ajaxReturn(['code'=>0,'info'=>L('请先登陆')]);
		}
		$uinfo = M("user")->where(array('phone'=>$phone))->find();
		if(!empty($uinfo)){
		    $this->ajaxReturn(['code'=>0,'info'=>L('手机号已绑定')]);
		}
		if($uinfo['rzstatus'] == 1){
		    $this->ajaxReturn(['code'=>0,'info'=>L('不能重复认证')]);
		}
		
		if($cardzm == ""){
		    $this->ajaxReturn(['code'=>0,'info'=>L('请上传上传身份证正面')]);
		}
		if($cardfm == ""){
		    $this->ajaxReturn(['code'=>0,'info'=>L('请上传上传身份证背面')]);
		}
		
		$data['phone'] = $phone;
		$data['cardzm'] = $cardzm;
		$data['cardfm'] = $cardfm;
		$data['rzstatus'] = 1;
		$data['rztime'] = time();
		
		$re = M("user")->where(array('id'=>$uid))->save($data);
		if($re){
		    $notice['uid'] = $uid;
		    $notice['account'] = $userinfo['username'];
		    $notice['title'] = L('认证资料提交成功');
		    $notice['content'] = L('实名资料提成功，耐心等待管理员审核');
		    $notice['addtime'] = date("Y-m-d H:i:s",time());
		    $notice['status'] = 1;
		    M("notice")->add($notice);
		    $this->ajaxReturn(['code'=>1,'info'=>L('认证资料提交成功')]);
		}else{
		    $this->ajaxReturn(['code'=>0,'info'=>L('认证资料提交失败')]);
		}
		
	}
	//实名认证页面
	public function authrz(){
	    $uid = userid();
	    if($uid <= 0){
	        redirect('/Login/index.html');
	    }
	    
	    $userinfo = M("user")->where(array('id'=>$uid))->find();
	    $this->assign("info",$userinfo);
	    $this->display();
	}
	
	//提币地址管理
	public function addresslist()
	{
		if (!userid()) {
			redirect('/Login/index.html');
		}
		
		//获取币种
		$filds = "id,name,czline,title";
		$coinlist = M("coin")->where(array('txstatus'=>1))->field($filds)->select();
		$this->assign("coinlist",$coinlist);
		//获取用户地址列表
		$uid = userid();
		$qblist = M("user_qianbao")->where(array('userid'=>$uid))->select();
		$this->assign("qblist",$qblist);
		$this->display();
	}
	
	//删除提币地址
	public function deladdress($aid){
	    $uid = userid();
	    if($uid <= 0){
	        redirect('/Login/index.html');
	    }
	    
	    $ainfo = M("user_qianbao")->where(array('id'=>$aid))->find();
	    if(empty($ainfo)){
	        $this->ajaxReturn(['code'=>0,'info'=> L('提币地址不存在')]);
	    }
	    $delre = M("user_qianbao")->where(array('id'=>$aid))->delete();
	    
	    if($delre){
	       $this->ajaxReturn(['code'=>1,'info'=> L('删除成功')]);
	    }else{
	       $this->ajaxReturn(['code'=>0,'info'=> L('删除失败')]); 
	    }
	    $this->display();
	}
	
	//添加地址处理
	public function upplusaddress(){
	    if($_POST){
	        $uid = userid();
	        if($uid <= 0){
	            $this->ajaxReturn(['code'=>0,'msg'=> L('请先登陆')]);
	        }
	        $uinfo = M("user")->where(array('id'=>$uid))->field("id,username")->find();
	        $address = trim(I('post.address'));
	        $remark = trim(I('post.remark'));
	        $oid = trim(I('post.oid'));
	        if($oid <= 0){
	            $this->ajaxReturn(['code'=>0,'msg'=> L('缺少重要参数')]);
	        }
	        
	        if($address == ''){
	            $this->ajaxReturn(['code'=>0,'msg'=> L('请输入提币地址')]);
	        }
	        if($remark == ''){
	            $this->ajaxReturn(['code'=>0,'msg'=> L('请输入备注')]);
	        }
	        
	        $cinfo = M("coin")->where(array('id'=>$oid))->find();
	        
	        $data['userid'] = $uid;
	        $data['coinname'] = $uinfo['username'];
	        $data['czline'] = trim(I('post.czline'));
	        $data['name'] = $cinfo['name'];
	        $data['remark'] = $remark;
	        $data['addr'] = $address;
	        $data['sort'] = 1;
	        $data['addtime'] = date("Y-m-d H:i:s",time());
	        $data['status'] = 1;
	        
	        $result = M('user_qianbao')->add($data);
	        if($result){
	            $this->ajaxReturn(['code'=>1,'msg'=> L('添加成功')]);
	        }else{
	            $this->ajaxReturn(['code'=>0,'msg'=> L('添加失败')]);
	        }
	        
	    }else{
	        
	    }
	}
	//上传图片
	public function recharge_img(){
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728;
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
        $upload->rootPath = './Public/Static/payimgs/';
        $upload->autoSub = false;
        $info = $upload->upload();

        $host = $_SERVER['HTTP_HOST'];
        foreach ($info as $k => $v) {
            $path = $v['savepath'] . $v['savename'];
            $response = array(
                'code' => 0,
                'msg' => L('上传成功'),
                'data' => array(
                    'src' => 'http://'.$host.'/Public/Static/payimgs/'.$path,
                    'img' => $path
                )
            );
            echo json_encode($response);
            exit();
        }
    }
	
	










}
?>