<?php
namespace Home\Controller;

class HomeController extends \Think\Controller
{
	protected function _initialize(){
		$allow_controller=array("Index","Ajax","Api","Orepool","Finance","Login","Queue","Trade","User","Chart", "Issue","Ajaxtrade","Contract");
		if(!in_array(CONTROLLER_NAME,$allow_controller)){
			$this->error("非法操作");
		}
		$clist = M("config")->where(array('id'=>1))->field("webname")->find();
        $webname = $clist['webname'];
        $this->assign("webname",$webname);

		if (!session('userId')) {
			session('userId', 0);

		} else if (CONTROLLER_NAME != 'Login') {
            $uid = userid();
		    $uinfo = M("user")->where(array('id'=>$uid))->field("id,username,rzstatus")->find();
		    $namearr = explode("@",$uinfo['username']);
		    $name1 = substr($namearr[0],0,4);
		    $username = $name1."***@".$namearr[1];
		    $this->assign('username',$username);
		    $this->assign('rzstatus',$uinfo['rzstatus']);
		    if($uid <= 0 || $uid == ''){
		        $uid = 0;
		    }
		    
		    $this->assign('uid',$uid);
		    
		    if($uid > 0){
                $sum = M("notice")->where(array('uid'=>$uid,'status'=>1))->count();
            }else{
                $sum = 0;
            }
            $this->assign('sum',$sum);
		}
        
	}
	
	public function __construct(){
        
		parent::__construct();
	}
}
?>