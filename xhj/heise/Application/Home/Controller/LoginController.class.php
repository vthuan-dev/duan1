<?php

namespace Home\Controller;

class LoginController extends HomeController
{
	protected function _initialize()
	{
		parent::_initialize();	$allow_action=array("index","register","upregister","loginsubmit","loginout","findpwd","findpaypwd","webreg","loption","setlang","lhelp","sendcode","findsendcode","resetpwd");
		if(!in_array(ACTION_NAME,$allow_action)){
			$this->error(L("非法操作"));
		}
	}
	
	

	//未登陆状态的选项页面
	public function loption(){


		$this->display();
	}

	//未登陆状态的设置语言
	public function setlang(){

		$this->display();
	}

	//帮助中心
	public function lhelp(){
		$uid = userid();
		$this->assign('uid',$uid);
		$this->display();
	}

	
	// 用户协议
	public function webreg()
	{
		$this->display();
	}
	
	public function index()
	{
	    $uid = userid();
	    if($uid >= 1){
	       $this->redirect("Index/index"); 
	    }
		$this->display();
	}

	//注册页面
	public function register(){

		$qrcode = I("get.qr");
		if($qrcode != ''){
			$this->assign('qrcode',$qrcode);
		}

		$this->display();
	}


    //提交重置密码
    public function resetpwd($email=null,$ecode=null,$lpwd=null){
//         if (checkstr($email) || checkstr($lpwd) || checkstr($ecode)) {
// 			$this->ajaxReturn(['code'=>0,'info'=>L('您输入的信息有误')]);
// 		}
		if($email == ''){
		    $this->ajaxReturn(['code'=>0,'info'=>L('请输入邮箱')]);
		}
		if($ecode == ''){
		    $this->ajaxReturn(['code'=>0,'info'=>L('请输入邮箱验证码')]);
		}
		if($lpwd == ''){
		    $this->ajaxReturn(['code'=>0,'info'=>L('请输入密码')]);
		}
		$findcode = session("findcode");
		if($findcode != $ecode){
		    $this->ajaxReturn(['code'=>0,'info'=>L('邮箱验证码错误')]);
		}
		
		$uinfo = M("user")->where(array('username'=>$email))->field("id,username")->find();
		if(empty($uinfo)){
		    $this->ajaxReturn(['code'=>0,'info'=>L('邮箱未注册')]);
		}
		
		$password = md5($lpwd);
		$result = M("user")->where(array('username'=>$email))->save(array('password'=>$password));
		if($result){
		    $data['uid'] = $uinfo['id'];
		    $data['account'] = $uinfo['username'];
		    $data['title'] = L('重置密码');
		    $data['content'] = L('登陆密码重置成功');
		    $data['addtime'] = date("Y-m-d H:i:s",time());
		    $data['status'] = 1;
		    M("notice")->add($data);
		    $this->ajaxReturn(['code'=>1,'info'=>L('登陆密码重置成功')]);
		}else{
		    $this->ajaxReturn(['code'=>0,'info'=>L('密码重置失败')]);
		}
		
    }

	// 登录提交处理
	public function loginsubmit($email=null,$lpwd=null,$vcode=null){
// 	    if (checkstr($email) || checkstr($lpwd) || checkstr($vcode)) {
// 			$this->ajaxReturn(['code'=>0,'info'=>L('您输入的信息有误')]);
// 		}
	
	    
		if (!check_verify(strtoupper($vcode),'1')) {
			$this->ajaxReturn(['code'=>0,'info'=>L('图形验证码错误!')]);
		}
		
		$user = M('User')->where(array('username' => $email))->find();
		if(empty($user)){
			$this->ajaxReturn(['code'=>0,'info'=> L('用户不存在')]);
		}
		if (md5($lpwd) != $user['password']){
			$this->ajaxReturn(['code'=>0,'info'=> L('登录密码错误')]);
		}
		
		if (isset($user['status']) && $user['status'] != 1) {
			$this->ajaxReturn(['code'=>0,'info'=> L('你的账号已冻结请联系管理员')]);
		}
		//增加登陆次数
		$incre = M("user")->where(array('id' => $user['id']))->setInc('logins', 1);
		
		//新增登陆记录
		$data['userid'] = $user['id'];
		$data['type'] = L('登录');
		$data['remark'] = L('邮箱登录');
		$data['addtime'] = time();
		$data['addip'] = get_client_ip();
		$data['addr'] = get_city_ip();
		$data['status'] = 1;
		$dre = M("user_log")->add($data);
		
		if($incre && $dre){
		    $lgdata['lgtime'] = date("Y-m-d",time());
		    $lgdata['loginip'] = get_client_ip();
		    $lgdata['loginaddr'] = get_city_ip();
		    $lgdata['logintime'] = date("Y-m-d H:i:s",time());
	    	M("user")->where(array('id' => $user['id']))->save($lgdata);
		    session('userId', $user['id']);
			session('userName', $user['username']);
			$this->ajaxReturn(['code'=>1,'info'=>L('登录成功')]);
		}else{
		    $this->ajaxReturn(['code'=>0,'info'=>L('登录失败')]);
		}
	}


	//注册处理程序
	public function upregister($email,$ecode,$lpwd,$invit){
		if($_POST){
// 			if(checkstr($email) || checkstr($ecode) || checkstr($lpwd) || checkstr($invit)){
// 				$this->ajaxReturn(['code'=>0,'info'=>L('您输入的信息有误')]);
// 			}
			$checkus = M('User')->where(array('username' => $email))->find();
			if(!empty($checkus)){
				$this->ajaxReturn(['code'=>0,'info'=>L('用户名已存在')]);
			}

			$secode = session('regcode');
			if($secode != $ecode){
				$this->ajaxReturn(['code'=>0,'info'=>L('邮箱验证码错误')]);
			}

			if($lpwd == ''){
				$this->ajaxReturn(['code'=>0,'info'=>L('请输入密码')]);
			}
			
			if($invit == ''){
			    $this->ajaxReturn(['code'=>0,'info'=>L('请输入邀请码')]);
			}
            $config = M("config")->where(array('id'=>1))->field("tymoney")->find();
			if($invit != 0 || $invit != ''){
				$inv_user = M('User')->where(array('invit' => $invit))->field("id,username,invit_1,invit_2,path")->find();
				if(empty($inv_user)){
					$this->ajaxReturn(['code'=>0,'info'=>L('推荐人不存在')]);
				}
				$invit_1 = $inv_user['id'];
				$invit_2 = $inv_user['invit_1'];
				$invit_3 = $inv_user['invit_2'];
				$path = $inv_user['path'].','.$inv_user['id'];
			}else{
				$invit_1 = 0;
				$invit_2 = 0;
				$invit_3 = 0;
				$path = '';
			}

			for (; true; ) {
				$myinvit = tradenoa();
				if (!M('User')->where(array('invit' => $myinvit))->find()) {
					break;
				}
			}

			$mo = M();
			$mo->execute('set autocommit=0');
			$mo->execute('lock tables tw_user write , tw_user_coin write ');
			$rs = array();
			$rs[] = $mo->table('tw_user')->add(
				array(
				'username' => $email,
				'password' => md5($lpwd),
				'money' => $config['tymoney'],
				'invit' => $myinvit,
				'invit_1' => $invit_1,
				'invit_2' => $invit_2,
				'invit_3' => $invit_3,
				'path'=>$path,
				'addip' => get_client_ip(),
				'addr' => get_city_ip(),
				'addtime' => time(), 
				'status' => 1,
				'txstate' => 1,
				));
		
			$user_coin = array('userid' => $rs[0]);
			// 创建用户数字资产档案
			$rs[] = $mo->table('tw_user_coin')->add($user_coin);
			if (check_arr($rs)) {
				$mo->execute('commit');
				$mo->execute('unlock tables');			
				session('regcode', null); //初始化动态验证码			
				$user = $mo->table('tw_user')->where(array('id'=>$rs[0]))->find();
				$this->ajaxReturn(['code'=>1,'info'=>L('注册成功')]);
			} else {
		    	$mo->execute('rollback');
		    	$this->ajaxReturn(['code'=>0,'info'=>L('注册失败')]);
			}

		}else{
			$this->ajaxReturn(['code'=>0,'info'=>L('网络错误')]);
		}
	}

    public function findsendcode($email,$vcode){
//         if(checkstr($email) || checkstr($vcode)) {
// 			$this->ajaxReturn(['code'=>0,'info'=>L('您输入的信息有误')]);
// 		}
		$email =  I('post.email');
		$vcode =  I('post.vcode');

		if (!check_verify(strtoupper($vcode),'1')) {
			$this->ajaxReturn(['code'=>0,'info'=>L('图形验证码错误')]);
		}
		if($email == ''){
			$this->ajaxReturn(['code'=>0,'info'=>L('请输入邮箱')]);
		}
		$uinfo = M("user")->where(array('username'=>$email))->find();
		if(empty($uinfo)){
		    $this->ajaxReturn(['code'=>0,'info'=>L('邮箱未注册')]);
		}
		$code = rand(10000,99999);
		$result = $this->emailsend($code,$email);

		if($result){

			session('findcode',$code);

			$this->ajaxReturn(['code'=>1,'info'=>L('验证码发送成功')]);
		}else{
			$this->ajaxReturn(['code'=>0,'info'=>L('验证码发送失败')]);
		}
    }

	//邮箱发送验证码
	public function sendcode($email,$vcode){
		if($_POST){
// 			if(checkstr($email) || checkstr($vcode)) {
// 				$this->ajaxReturn(['code'=>0,'info'=>L('您输入的信息有误')]);
// 			}
			$email =  I('post.email');
			$vcode =  I('post.vcode');

			if (!check_verify(strtoupper($vcode),'1')) {
				$this->ajaxReturn(['code'=>0,'info'=>L('图形验证码错误')]);
			}

			if($email == ''){
				$this->ajaxReturn(['code'=>0,'info'=>L('请输入邮箱')]);
			}

			$uinfo = M("user")->where(array('username'=>$email))->find();
			if(!empty($uinfo)){
				$this->ajaxReturn(['code'=>0,'info'=>L('账号已存在')]);
			}
			$code = rand(10000,99999);
			$result = $this->emailsend($code,$email);

			if($result){

				session('regcode',$code);

				$this->ajaxReturn(['code'=>1,'info'=>L('验证码发送成功')]);
			}else{
				$this->ajaxReturn(['code'=>0,'info'=>L('验证码发送失败')]);
			}

		}else{
			$this->ajaxReturn(['code'=>0,'info'=>L('网络错误')]);
		}
		
	}

	//邮件发送验证码
	public function emailsend($desc_content, $toemail){	
	    
	    $config = $clist = M("config")->where(array('id'=>1))->field("smsemail,emailcode,smstemple")->find();
	    $smsemail = "wopverify888@gmail.com";
	    $emailcode = trim($config['emailcode']);
	    $smstemple = trim($config['smstemple']);
		Vendor('PHPMailer.src.PHPMailer');
		Vendor('PHPMailer.src.SMTP');
		$mail = new \PHPMailer();
		$mail->SMTPDebug = 0;
		$mail->isSMTP();        
		//$mail->CharSet = "utf8";
		$mail->Host = "smtp.gmail.com";
		$mail->SMTPAuth = true;
		$mail->Username = $smsemail; //@qq.com此账号仅供测试使用
		$mail->Password = "jkvfokndcozeafac";
		$mail->SMTPSecure = "ssl";
		$mail->Port = 465;
		$mail->CharSet = 'UTF-8';
		$mail->setFrom($smsemail,"Verification Code");
		$mail->addAddress($toemail,'');
		$mail->addReplyTo($smsemail,"Reply");
		$mail->Subject = L('Verification Code');
		$mail->Body = $smstemple.":".$desc_content;	
		if(!$mail->send()){  
			return 0;
		}else{
			return 1;
		}
		
	}



	public function loginout()
	{
		session(null);
		redirect('/');
	}
	
	// 找回密码页面
	public function findpwd(){

		$this->display();
	}

	// 找回交易密码
	public function findpaypwd(){

		$this->display();
	}

}
?>