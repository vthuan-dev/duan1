<?php
namespace Agent\Controller;

class VerifyController extends \Think\Controller
{
	public function code()
	{
		$config['useNoise'] = true;
		$config['length'] = 4;
		$config['codeSet'] = '1234567890';
		$verify = new \Think\Verify($config);
		$verify->entry('.cn');
	}

}

?>