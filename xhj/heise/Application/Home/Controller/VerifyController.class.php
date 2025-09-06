<?php
namespace Home\Controller;

class VerifyController extends \Think\Controller
{
	protected function _initialize()
	{
		$allow_action = array("code");
		if(!in_array(ACTION_NAME,$allow_action)){
			$this->error("非法操作！");
		}
	}

    //验证码
	public function code()
	{
		$config['useNoise'] = true; // 关闭验证码杂点
		$config['length'] = 4; // 验证码位数
		$config['codeSet'] = '123456789';
		ob_clean();
		$verify = new \Think\Verify($config);
		$verify->entry(1);
	}
	
	
	
	

}
?>