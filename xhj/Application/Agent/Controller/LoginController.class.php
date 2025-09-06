<?php
namespace Agent\Controller;

class LoginController extends \Think\Controller
{

	public function index($username = NULL, $password = NULL, $verify = NULL, $urlkey = NULL)
	{
		if (IS_POST) {

			$uinfo = M('User')->where(array('username' => $username))->find();

			if ($uinfo['password'] != md5($password)) {
				$this->error(L('用户名或密码错误'));
			} else {
			    
			    if($uinfo['is_agent'] != 1){
			        $this->error(L('该账号不是代理'));exit();
			    }
			    
				session('agent_id', $uinfo['id']);
				$this->success(L('登陆成功'), U('Agent/Index/index'));
			}
		} else {
			if(session('agent_id')) {
				$this->redirect('Agent/Index/index');
			}
			$this->display();
		}
	}

	public function loginout()
	{
		session('agent_id',null);
		$this->redirect('Agent/Login/index');
	}

}
?>