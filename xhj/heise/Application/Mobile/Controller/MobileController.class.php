<?php
namespace Mobile\Controller;

class MobileController extends \Think\Controller
{
	protected function _initialize()
	{
		$allow_controller=array("Ajax","Ajaxtrade","Api","Article","Chart","Finance","Index","Login","Pay","Queue","Trade","User","Issue",  "Morefind","Financing","Exchange","Orepool","Contract");
		if(!in_array(CONTROLLER_NAME,$allow_controller)){
			$this->error("非法操作");
		}
		
        $clist = M("config")->where(array('id'=>1))->field("webname")->find();
        $webname = $clist['webname'];
        $this->assign("webname",$webname);
		if (!session('userId')) {
			session('userId', 0);
			
		} else if (CONTROLLER_NAME != 'Login') {

		}
	}


}

?>