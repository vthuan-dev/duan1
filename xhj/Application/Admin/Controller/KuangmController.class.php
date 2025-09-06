<?php
namespace Admin\Controller;

class KuangmController extends AdminController
{

	public function __construct()
	{
		parent::__construct();
	}
	//矿机收益列表
	public function djprofit($username = null){
	   if($username != ''){
	        $where['username'] = array('eq',$username);
	    }
	    $count = M('djprofit')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('djprofit')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
	    $this->display(); 
	}
	
	//矿机收益列表
	public function kjsylist($username = null){
	   if($username != ''){
	        $where['username'] = array('eq',$username);
	    }
	    $count = M('kjprofit')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('kjprofit')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
	    $this->display(); 
	}
	
	//启用会员矿机，停用会员矿机，删除会员矿机
	public function userkjStatus($id = NULL, $type = NULL, $mobile = 'User'){
	    if($mobile != "Admin"){
	       $this->error("参数错误"); 
	    }
	    $where['id'] = array('in', $id);
	    switch (strtolower($type)) {
	    case 1:
	        $result = M("kjorder")->where($where)->save(array('status'=>1));
			break;
		case 2:
	        $result = M("kjorder")->where($where)->save(array('status'=>2));
			break;
		case 3:
	        $result = M("kjorder")->where($where)->delete();
			break;
		default:
			$this->error('操作失败！');	
	    }
	    
	    if($result){
	        $this->success('操作成功！');
	    }else{
	        $this->error('操作失败！');
	    }
	}
	
	//会员过期的矿机列表
	public function overlist(){
	    $where['status'] = array('eq',3);
	    $count = M('kjorder')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('kjorder')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
	    $this->display();
	}
	
	//会员运行中的矿机列表
	public function kjlist($username = null){
	    if($username != ''){
	        $where['username'] = array('eq',$username);
	    }
	    $where['status'] = array('lt',3);
	    $count = M('kjorder')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('kjorder')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
	    $this->display();
	}
	
	//启用，停用矿机，删除矿机
	public function kuangjStatus($id = NULL, $type = NULL, $mobile = 'User'){
	    if($mobile != "Admin"){
	       $this->error("参数错误"); 
	    }
	    $where['id'] = array('in', $id);
	    switch (strtolower($type)) {
	    case 1:
	        $result = M("kuangji")->where($where)->save(array('status'=>1));
			break;
		case 2:
	        $result = M("kuangji")->where($where)->save(array('status'=>2));
			break;
		case 3:
	        $result = M("kuangji")->where($where)->delete();
			break;
		default:
			$this->error('操作失败！');	
	    }
	    
	    if($result){
	        $this->success('操作成功！');
	    }else{
	        $this->error('操作失败！');
	    }
	}


    //矿机列表页面
	public function index(){
	    
	    $count = M('kuangji')->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('kuangji')->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);

		$this->display();
	}
	
	
	//添加矿机
	public function addkj(){
	    if($_POST){
	        $data['title'] = trim($_POST['title']);
	        $data['rtype'] = trim($_POST['rtype']);
	        $data['type'] = trim($_POST['type']);
	        if($data['type'] == 1){
	            $data['sharebl'] = 0;
	            $data['sharecode'] = '';
	        }elseif($data['type'] == 2){
	            $data['sharebl'] = trim($_POST['sharebl']);
	            $data['sharecode'] = creat_sharecode(13);
	        }
	        $data['content'] = trim($_POST['content']);
	        $data['imgs'] = trim($_POST['imgs']); 
	        $data['dayoutnum'] = trim($_POST['dayoutnum']); 
	        $data['outtype'] = trim($_POST['outtype']); 
	        $data['outcoin'] = trim($_POST['outcoin']); 
	        $data['pricenum'] = trim($_POST['pricenum']); 
	        $data['pricecoin'] = trim($_POST['pricecoin']); 
	        $data['buymax'] = trim($_POST['buymax']); 
	        $data['cycle'] = trim($_POST['cycle']); 
	        $data['suanl'] = trim($_POST['suanl']); 
	        $data['allnum'] = trim($_POST['allnum']); 
	        $data['ycnum'] = trim($_POST['ycnum']); 
	        $data['jlnum'] = trim($_POST['jlnum']); 
	        $data['jlcoin'] = trim($_POST['jlcoin']); 
	        $data['status'] = 1; 
	        $data['buyask'] = trim($_POST['buyask']); 
	        $data['asknum'] = trim($_POST['asknum']);
	        $data['djout'] = trim($_POST['djout']); 
	        if(trim($_POST['djout']) == 2){
	            $data['djday'] = trim($_POST['djday']); 
	        }else{
	            $data['djday'] = trim($_POST['djday']); 
	        }
	        
	        $data['addtime'] = date("Y-m-d H:i:s",time()); 
	        $kid = trim($_POST['kid']); 

	        if($kid > 0){
	            $result = M("kuangji")->where(array('id'=>$kid))->save($data);
	            $msg = "编辑成功";
	        }else{
	            $result = M("kuangji")->add($data);
	            $msg = "添加成功";
	        }
	        if($result){
	            $this->success($msg);
	        }else{
	            $this->error($msg);
	        }
	    }else{
	        $this->error("非法操作");exit();
	    }
	}
	
	
	
	//添加矿机页面
	public function addkuangj(){
	    $id = trim(I('get.id'));
	    $info = M("kuangji")->where(array('id'=>$id))->find();
	    if(!empty($info)){
	        $list = M("coin")->where(array('status'=>1))->field("id,name,title")->select();
	        $data = array();
	        foreach($list as $k=>$v){
	            $data[$k]['id'] = $v['id']; 
	            $data[$k]['name'] = trim($v['name']); 
	            $data[$k]['title'] = $v['title']; 
	        }
	        $this->assign('coind',$data);
	        $this->assign('data',$info);
	    }else{
	        $list = M("coin")->where(array('status'=>1))->field("id,name,title")->select();
	        $data = array();
	        foreach($list as $k=>$v){
	            $data[$k]['id'] = $v['id']; 
	            $data[$k]['name'] = trim($v['name']); 
	            $data[$k]['title'] = $v['title']; 
	        }
	        $this->assign('coind',$data);
	    }
	    $this->display();
	}
	
	//上传矿机图片
	public function image(){
		$upload = new \Think\Upload();
		$upload->maxSize = 3145728;
		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');
		$upload->rootPath = './Upload/public/';
		$upload->autoSub = false;
		$info = $upload->upload();
		foreach ($info as $k => $v) {
			$path = $v['savepath'] . $v['savename'];
			echo $path;
			exit();
		}
	}
	


}
?>