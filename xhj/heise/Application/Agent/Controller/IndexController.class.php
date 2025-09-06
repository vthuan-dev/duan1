<?php
namespace Agent\Controller;

class IndexController extends AgentController
{

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
	
	
}

?>
