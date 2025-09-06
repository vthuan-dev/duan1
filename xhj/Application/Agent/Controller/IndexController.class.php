<?php
namespace Agent\Controller;

class IndexController extends AgentController
{
	protected function _initialize()
	{
		parent::_initialize();
	}


	//代理中心会员管理
	public function index($name=NULL){
        if (!session('agent_id')) {
			$this->redirect('Agent/Login/index');
		}
		$uid = session('agent_id');
		$where = "";

		if ($name != '') {

            $map_3 = "username like '%{$name}%' and (invit_1 = $uid or invit_2 = $uid or invit_3 = $uid)";
 
		}else{
		    $map_3 = "invit_1 = $uid or invit_2 = $uid or invit_3 = $uid";
		}
		

		$count = M('User')->where($map_3)->count();

		$Page = new \Think\Page($count, 15);
		$show = $Page->show();

		$list = M('User')->where($map_3)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

        foreach ($list as $k => $v) {
			$list[$k]['invit_1'] = M('User')->where(array('id' => $v['invit_1']))->getField('username');
			$list[$k]['invit_2'] = M('User')->where(array('id' => $v['invit_2']))->getField('username');
			$list[$k]['invit_3'] = M('User')->where(array('id' => $v['invit_3']))->getField('username');
		}
        
        
		$this->assign('list', $list);
		$this->assign('page', $show);
       
	    $this->display();
	}
	
	
	
	
	
	//编辑或新增会员
	public function edit($id = NULL)
	{
	    $uid = session('agent_id');
		if (empty($_POST)) {
			if (empty($id)) {
				$this->data = '';
			} else {
				$this->data = M('User')->where(array('id' => trim($id)))->find();
			}
			$this->display();
		} else {
		    //新增会员
		    if($id <= 0 || $id == null){
		        $username = trim($_POST['username']);
		        if($username == ''){
		            $this->error("请输入会员账号");exit();
		        }else{
		            $add['username'] = $username;
		        }
		        
		        if($_POST['password'] == ""){
		            $this->error("请输入登陆密码");exit();
		        }else{
		            $add['password'] = md5($_POST['password']);
		        }
		        if($_POST['paypassword'] != ""){
		            $add['paypassword'] = md5($_POST['paypassword']);
		        }
		        
	        	$add['invit_1'] = $uid;
		    	$add['invit_2'] = 0;
		    	$add['invit_3'] = 0;
		    	$add['path'] = ','.$uid;
			    
		        $add['addtime'] = time();
		        $add['addip'] = get_client_ip();
		        $add['addr'] = get_city_ip();
                $add['invit']  = tradenoa();
                $add['status']  =1;
                $add['txstate']  = 1;

                $re = M("user")->add($add);
		        if($re){
		            M('user_coin')->add(array('userid' => $re));
		             $this->success("新增成功");exit();
		        }else{
		            $this->error("新增失败");exit();
		        }
		    //编辑会员   
		    }else{
		   
		       if ($_POST['password']) {
				    $_POST['password'] = md5($_POST['password']);
			    } else {
			    	unset($_POST['password']);
			    }
			    if ($_POST['paypassword']) {
			    	$_POST['paypassword'] = md5($_POST['paypassword']);
			    } else {
			    	unset($_POST['paypassword']);
			    }
		        
		        $result = M("user")->where(array('id'=>$id))->save($_POST);
		        if($result){
		            $this->success("编辑成功");exit();
		        }else{
		            $this->error("编辑失败");exit();
		        }
		    }

		}
	}
	
    //实名认证页面
	public function authrz($id){
	    
	    $klist = M("kuangji")->where(array('rtype'=>2))->field("id,title")->select();
	    $this->assign("klist",$klist);
	    $info = M("user")->where(array('id'=>$id))->field("id,username,phone,cardzm,cardfm,rztime")->find();
	    $this->assign('info',$info);
	    $this->display();
	}
	
	//实名认证处理
	public function upanthrz(){
	    $rzstatus = $_POST['rzstatus'];
	    $uid = $_POST['uid'];
	    if($uid <= 0 || $uid == ''){
	        $this->error("参数得要参数");
	    }
	    if($rzstatus== 2){//表示认证成功
	    
	        $result = M("user")->where(array('id'=>$uid))->save(array('rzstatus'=>2,'rzuptime'=>time()));
	        if($result){
	           // $kjid = $_POST['kjid'];
	        
	           // $minfo = M("kuangji")->where(array('id'=>$kjid))->find();
	        
	           // //建仓矿机订单数据
	           // $odate['kid'] = $minfo['id'];
	           // $odate['type'] = 1;
	           // $odate['sharebl'] = '';
	           // $odate['uid'] = $uid;
	           // $odate['username'] = $_POST['username'];
	           // $odate['kjtitle'] = $minfo['title'];
	           // $odate['imgs'] = $minfo['imgs'];
	           // $odate['status'] = 1;
	           // $odate['cycle'] = $minfo['cycle'];
	           // $odate['synum'] = $minfo['cycle'];
	           // $odate['outtype'] = $minfo['outtype'];
	           // $odate['outcoin'] = $minfo['outcoin'];
	           // if($minfo['outtype'] == 1){//按产值收益
	           //    $odate['outnum'] = '';
	           //    $odate['outusdt'] = $minfo['dayoutnum'];
	           // }elseif($minfo['outtype'] == 2){//按币量收益
	           //    $odate['outnum'] = $minfo['dayoutnum']; 
	           //    $odate['outusdt'] = '';
	           // }
	           // $odate['djout'] = $minfo['djout'];
	           // if($minfo['djout'] == 2){
	           //    $odate['djnum'] = $minfo['djday']; 
	           // }else{
	           //    $odate['djnum'] = $minfo['djday']; 
	           // }
	           // $odate['addtime'] = date("Y-m-d H:i:s",time());
	           // $odate['endtime'] = date("Y-m-d H:i:s",(time() + 86400 * $minfo['cycle']));
	           // $odate['intaddtime'] = time();
	           // $odate['intendtime'] = time() + 86400 * $minfo['cycle'];
	            
            //     $adre = M("kjorder")->add($odate);
	             
	            $notice['uid'] = $uid;
		        $notice['account'] = $_POST['username'];
		        $notice['title'] = L('Certification audit successful');
		        $notice['content'] = L('Your certification application has been reviewed successfully');
		        $notice['addtime'] = date("Y-m-d H:i:s",time());
		        $notice['status'] = 1;
		        M("notice")->add($notice);
		    
	            $this->success("认证成功");
	        }else{
	            $this->error("操作失败");
	        }

	    }elseif($rzstatus == 3){//表示驳回认证
            $result = M("user")->where(array('id'=>$uid))->save(array('rzstatus'=>3,'rzuptime'=>time()));
            if($result){
                $notice['uid'] = $uid;
		        $notice['account'] = $_POST['username'];
		        $notice['title'] = L('Certification rejected');
		        $notice['content'] = L('Your certification application was rejected by the administrator, please contact the administrator');
		        $notice['addtime'] = date("Y-m-d H:i:s",time());
		        $notice['status'] = 1;
		        M("notice")->add($notice);
                $this->success("操作成功");
                
            }else{
                $this->error("操作失败");
            }
	    }

	}	
	
	//代理中心建仓订单
	public function jclist($username=NULL){
        if (!session('agent_id')) {
			$this->redirect('Agent/Login/index');
		}

		$uid = session('agent_id');

		if ($username != '') {

            $map_3 = "username like '%{$username}%' and (invit_1 = $uid or invit_2 = $uid or invit_3 = $uid)";
 
		}else{
		    $map_3 = "invit_1 = $uid or invit_2 = $uid or invit_3 = $uid";
		}
		
		
		$ulist = M('User')->where($map_3)->order('id desc')->field('id')->select();

		if(!empty($ulist)){
		    $list = array();
		    foreach($ulist as $key=>$vo){
		        $map['uid'] = $vo['id'];
		        $map['status'] = 1;
		        $orderlist = M("hyorder")->where($map)->select();
		        if(!empty($orderlist)){
		            foreach($orderlist as $k=>$v){
		                $list[$key][$k]['id'] = $v['id'];
		                $list[$key][$k]['username'] = $v['username'];
		                $list[$key][$k]['num'] = $v['num'];
		                $list[$key][$k]['hybl'] = $v['hybl'];
		                $list[$key][$k]['hyzd'] = $v['hyzd'];
		                $list[$key][$k]['coinname'] = $v['coinname'];
		                $list[$key][$k]['status'] = $v['status'];
		                $list[$key][$k]['is_win'] = $v['is_win'];
		                $list[$key][$k]['buytime'] = $v['buytime'];
		                $list[$key][$k]['selltime'] = $v['selltime'];
		                $list[$key][$k]['intselltime'] = $v['intselltime'];
		                $list[$key][$k]['buyprice'] = $v['buyprice'];
		                $list[$key][$k]['sellprice'] = $v['sellprice'];
		                $list[$key][$k]['ploss'] = $v['ploss'];
		                $list[$key][$k]['time'] = $v['time'];
		                $list[$key][$k]['kongyk'] = $v['kongyk'];
		            }
		        }

		    }
		}else{
		    $list = '';
		}
		
        if(!empty($list)){
            $arr[] = array();
            foreach($list as $key=>$vo){
                foreach($vo as $a=>$b){
                    $arr_1['id'] = $b['id'];
		            $arr_1['username'] = $b['username'];
		            $arr_1['num'] = $b['num'];
		            $arr_1['hybl'] = $b['hybl'];
		            $arr_1['hyzd'] = $b['hyzd'];
		            $arr_1['coinname'] = $b['coinname'];
		            $arr_1['status'] = $b['status'];
		            $arr_1['is_win'] = $b['is_win'];
		            $arr_1['buytime'] = $b['buytime'];
		            $arr_1['selltime'] = $b['selltime'];
		            $arr_1['intselltime'] = $b['intselltime'];
		            $arr_1['buyprice'] = $b['buyprice'];
		            $arr_1['sellprice'] = $b['sellprice'];
		            $arr_1['ploss'] = $b['ploss'];
		            $arr_1['time'] = $b['time'];
		            $arr_1['kongyk'] = $b['kongyk'];
		            $arr[] = $arr_1;
                }
            }
        }
       
        $arr = array_filter($arr);
       
        $this->assign('list', $arr);
		$this->assign('page', $show);
       
       
	    $this->display();
	}
	
	
	//单控盈亏
	public function setwinloss(){
	    if($_POST){
	        $id = trim(I('post.id'));
	        $kongyk = trim(I('post.kongyk'));
	        $info = M("hyorder")->where(array('id'=>$id))->find();
	        if(empty($info)){
	            $this->ajaxReturn(['code'=>0,'info'=>"参少重要参数"]);
	        }
	        
	        $result = M("hyorder")->where(array('id'=>$id))->save(array('kongyk'=>$kongyk));
	        if($result){
	            $this->ajaxReturn(['code'=>1,'info'=>"操作成功"]); 
	        }else{
	            $this->ajaxReturn(['code'=>0,'info'=>"操作失败"]);
	        }
	    }else{
	        $this->ajaxReturn(['code'=>0,'info'=>"网络错误"]);
	    }
	}
	
	
	//代理中心平仓订单
	public function pclist($username=NULL){
        if (!session('agent_id')) {
			$this->redirect('Agent/Login/index');
		}
		
		$uid = session('agent_id');

		if ($username != '') {

            $map_3 = "username like '%{$username}%' and (invit_1 = $uid or invit_2 = $uid or invit_3 = $uid)";
 
		}else{
		    $map_3 = "invit_1 = $uid or invit_2 = $uid or invit_3 = $uid";
		}
		
		
		$ulist = M('User')->where($map_3)->order('id desc')->field('id')->select();

		if(!empty($ulist)){
		    $list = array();
		    foreach($ulist as $key=>$vo){
		        $uid = $vo['id'];
		        $orderlist = M("hyorder")->where("uid = $uid and (status = 2 or status = 3)")->select();
		        if(!empty($orderlist)){
		            foreach($orderlist as $k=>$v){
		                $list[$key][$k]['id'] = $v['id'];
		                $list[$key][$k]['username'] = $v['username'];
		                $list[$key][$k]['num'] = $v['num'];
		                $list[$key][$k]['hybl'] = $v['hybl'];
		                $list[$key][$k]['hyzd'] = $v['hyzd'];
		                $list[$key][$k]['coinname'] = $v['coinname'];
		                $list[$key][$k]['status'] = $v['status'];
		                $list[$key][$k]['is_win'] = $v['is_win'];
		                $list[$key][$k]['buytime'] = $v['buytime'];
		                $list[$key][$k]['selltime'] = $v['selltime'];
		                $list[$key][$k]['intselltime'] = $v['intselltime'];
		                $list[$key][$k]['buyprice'] = $v['buyprice'];
		                $list[$key][$k]['sellprice'] = $v['sellprice'];
		                $list[$key][$k]['ploss'] = $v['ploss'];
		                $list[$key][$k]['time'] = $v['time'];
		                $list[$key][$k]['kongyk'] = $v['kongyk'];
		            }
		        }

		    }
		}else{
		    $list = '';
		}
		
        if(!empty($list)){
            $arr[] = array();
            foreach($list as $key=>$vo){
                foreach($vo as $a=>$b){
                    $arr_1['id'] = $b['id'];
		            $arr_1['username'] = $b['username'];
		            $arr_1['num'] = $b['num'];
		            $arr_1['hybl'] = $b['hybl'];
		            $arr_1['hyzd'] = $b['hyzd'];
		            $arr_1['coinname'] = $b['coinname'];
		            $arr_1['status'] = $b['status'];
		            $arr_1['is_win'] = $b['is_win'];
		            $arr_1['buytime'] = $b['buytime'];
		            $arr_1['selltime'] = $b['selltime'];
		            $arr_1['intselltime'] = $b['intselltime'];
		            $arr_1['buyprice'] = $b['buyprice'];
		            $arr_1['sellprice'] = $b['sellprice'];
		            $arr_1['ploss'] = $b['ploss'];
		            $arr_1['time'] = $b['time'];
		            $arr_1['kongyk'] = $b['kongyk'];
		            $arr[] = $arr_1;
                }
            }
        }
       
        $arr = array_filter($arr);
       
        
       
       
       
        $this->assign('list', $arr);
		$this->assign('page', $show);
       
       
		
       
	    $this->display();
	}
	
	
	
	
	/**
	 * 代理中心充币列表
	 */ 
	 public function recharge($name=null){
	   if (!session('agent_id')) {
			$this->redirect('Agent/Login/index');
		}
		
		$uid = session('agent_id');
	     
	    if($name != ''){
		    $where['username'] = $name;
		}
		

		$map_3 = "invit_1 = $uid or invit_2 = $uid or invit_3 = $uid";
		$ulist = M('User')->where($map_3)->order('id desc')->getField('id',true);
		
		$where['uid'] = ['in',$ulist];

		$count = M('recharge')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('recharge')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
	     $this->display();
	 }
	 
	 
	 	/**
	 * 代理中心提币列表
	 */ 
	 public function withdraw($name=null){
	   if (!session('agent_id')) {
			$this->redirect('Agent/Login/index');
		}
		
		$uid = session('agent_id');
	     
	    if($name != ''){
		    $where['username'] = $name;
		}
		

		$map_3 = "invit_1 = $uid or invit_2 = $uid or invit_3 = $uid";
		$ulist = M('User')->where($map_3)->order('id desc')->getField('id',true);
		
		$where['userid'] = ['in',$ulist];

		$count = M('myzc')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('myzc')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
	     $this->display();
	 }
	 
	 
	 /**
	  * 用户财产
	  */
	  public function property(){
	     if (!session('agent_id')) {
			$this->redirect('Agent/Login/index');
		}
		
		$uid = session('agent_id');
	     
	    if($name != ''){
		    $where['username'] = $name;
		}
	      
      	$map_3 = "invit_1 = $uid or invit_2 = $uid or invit_3 = $uid";
      	$ulist = M('User')->where($map_3)->order('id desc')->getField('id',true);
      	$where['userid'] = ['in',$ulist];

		$count = M('UserCoin')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('UserCoin')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

		foreach ($list as $k => $v) {
			$list[$k]['username'] = M('User')->where(array('id' => $v['userid']))->getField('username');
		}

		$this->assign('list', $list);
		$this->assign('page', $show);
		
		$coinlist = M("coin")->where("type = 1")->order("id desc")->field("name,title")->select();
        $this->assign("coinlist",$coinlist);
	      $this->display();
	  }
}

?>
