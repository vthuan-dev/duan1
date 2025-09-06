<?php
namespace Mobile\Controller;

class IndexController extends MobileController
{

	protected function _initialize()
	{

		parent::_initialize();
		$allow_action=array("index","uoption","notice","respwd","sub_respwd","tgcode","noticeinfo","readall","delall","gglist","gginfo","aboutus",'msb','spwd','withdrawpwd','sub_withdrawpwd');
		if(!in_array(ACTION_NAME,$allow_action)){
			$this->error(L("非法操作"));
		}

	}
	
	
	
	//公告列表
	public function gglist(){
	    $list = M("content")->where(array('status'=>1))->select();
	    $this->assign("list",$list);
	    $this->display();
	}
	
	//公告详情
	public function gginfo($id = null){
	    $info = M("content")->where(array('id'=>$id))->find();
	    $this->assign('info',$info);
	    $this->display();
	}

	//删除通知记录
	public function delall(){
	   $uid = userid();
	    $list = M("notice")->where(array('uid'=>$uid))->select();
	    if(!empty($list)){
	        foreach($list as $k=>$v){
	            $id = $v['id'];
	            $re = M("notice")->where(array('id'=>$id))->delete();
	        }
	        $this->ajaxReturn(['code'=>1,'info'=> L("删除成功")]);
	    }else{
	        $this->ajaxReturn(['code'=>0,'info'=> L("没有记录")]);
	    } 
	}
	
	//通知标记已读
	public function readall(){
	    $uid = userid();
	    $list = M("notice")->where(array('uid'=>$uid,'status'=>1))->select();
	    if(!empty($list)){
	        foreach($list as $k=>$v){
	            $id = $v['id'];
	            $re = M("notice")->where(array('id'=>$id))->save(array('status'=>2));
	        }
	        $this->ajaxReturn(['code'=>1,'info'=> L("标注成功")]);
	    }else{
	        $this->ajaxReturn(['code'=>0,'info'=> L("全部已读")]);
	    }
	}

	//会员选项页面
	public function uoption(){


		$uid = userid();
		$info = M("user")->where(array('id'=>$uid))->field("id,username,invit")->find();
        $config = M("config")->where(array('id'=>1))->field('weblogo')->find();
        $waplogo = $config['weblogo'] ? '/Upload/public/'.$config['weblogo'] : '/xm/4558.png';
		$count = M("notice")->where(array('uid'=>$uid,'status'=>1))->count();

        $this->assign("info",$info);
		$this->assign("count",$count);
		$this->assign("waplogo",$waplogo);
		$this->display();
	}

	//通知页面
	public function notice(){
        $uid = userid();
        if($uid <= 0){
            $this->redirect('Trade/tradelist');
        }
        $list = M("notice")->where(array('uid'=>$uid))->order("id desc")->select();
        $this->assign('list',$list);
		$this->display();
	}
	
	//通知详情
	public function noticeinfo($id){
	    $info = M("notice")->where(array('id'=>$id))->find();
	    M("notice")->where(array('id'=>$id))->save(array('status'=>2));
	    $this->assign('info',$info);
	    $this->display();
	}

	//修改密码
	public function respwd(){

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

	//推广页面
	public function tgcode(){
	    

		header ( "Content-type: text/html; charset=utf-8" );
		$uid = userid();
		
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
		

		
		$uinfo = M("user")->where(array('id'=>$uid))->field("id,username,invit")->find();
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
		
		$clist = M("config")->where(array('id'=>1))->field("webtjimgs,tgtext")->find();
		$this->assign('clist',$clist);

		
		$this->display();
	}


	public function index()
	{
		$this->redirect('Trade/tradelist');
	}

	public function aboutus()
    {
        $config = M("config")->where(array('id'=>1))->field('weblogo')->find();
        $waplogo = $config['weblogo'] ? '/Upload/public/'.$config['weblogo'] : '/Public/Static/Icoinfont/icon/logo.png';
        $this->assign('waplogo',$waplogo);
        $this->display();
    }

    public function msb()
    {
        $this->display();
    }

    public function spwd()
    {
        $this->display();
    }

    public function withdrawpwd()
    {
        $uid = userid();
        if($uid <= 0){
            $this->redirect('Login/index');
        }
        $userInfo = M('user')->where(['id' => $uid])->find();
        $this->assign('userInfo',$userInfo);
        $this->display();
    }

    public function sub_withdrawpwd($oldpwd, $newpwd)
    {
        if($_POST){
            if(checkstr($oldpwd) || checkstr($newpwd)){
                $this->ajaxReturn(['code'=>0,'info'=>L('您输入的信息有误')]);
            }
            $uid = userid();
            if($uid == ''){
                $this->ajaxReturn(['code'=>0,'info'=>L('请先登陆')]);
            }
            $info = M("user")->where(array('id'=>$uid))->field("id,username,paypassword")->find();

            if(md5($oldpwd) != $info['paypassword'] && $info['paypassword'] != ''){
                $this->ajaxReturn(['code'=>0,'info'=>L('旧密码不正确')]);
            }

            $result = M("user")->where(array('id'=>$uid))->save(array('paypassword'=>md5($newpwd),'stoptime'=>time()));
            if($result){
                $this->ajaxReturn(['code'=>1,'info'=>L('密码修改成功')]);
            }else{
                $this->ajaxReturn(['code'=>0,'info'=>L('密码修改失败')]);
            }

        }else{
            $this->ajaxReturn(['code'=>0,'info'=>L('非法操作')]);
        }
    }

}