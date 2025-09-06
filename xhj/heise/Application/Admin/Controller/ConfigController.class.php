<?php
namespace Admin\Controller;

class ConfigController extends AdminController
{
	protected function _initialize()
	{
		parent::_initialize();
		$allow_action=array("index","edit","image","coin","coinEdit","coinStatus","textStatus","coinImage","text","textEdit","qita","qitaEdit","daohang","daohangEdit","daohangStatus","dhfooter","dhfooterEdit","dhfooterStatus","dhadmin","dhadminEdit","dhadminStatus","ctmarket","ctmarketEdit","marketo","marketoEdit","marketoEdit2","marketoEdit3","marketoStatus","ctmarketoStatus","mining","miningEdit");
		if(!in_array(ACTION_NAME,$allow_action)){
			$this->error("页面不存在！".ACTION_NAME);
		}
	}

    //系统设置首页
	public function index(){
		$this->data = M('Config')->where(array('id' => 1))->find();
		$this->display();
	}

    //编加网站基本配置
	public function edit(){
        $data = I('post.');

		if (M('Config')->where(array('id' => 1))->save($data)) {
            $config = M('Config')->where(['id' => 1])->find();
            session('sys_config', $config);
			$this->success('修改成功！');
		} else {
			$this->error('修改失败');
		}
	}


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
	


	public function coin($name = NULL, $field = NULL, $status = NULL)
	{
		$where = array();

		if ($field && $name) {
			if ($field == 'username') {
				$where['userid'] = M('User')->where(array('username' => $name))->getField('id');
			} else {
				$where[$field] = $name;
			}
		}

		if ($status) {
			$where['status'] = $status - 1;
		}

		$count = M('Coin')->where($where)->count();
		$Page = new \Think\Page($count, 100);
		$show = $Page->show();
		$list = M('Coin')->where($where)->order('sort asc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->display();
	}
	
	
    ////增加币名称OK
	public function coinEdit($id = NULL)
	{
		if (empty($_POST)) {
			if (empty($id)) {
				$this->data = array();
			} else {
				$this->data = M('Coin')->where(array('id' => trim($_GET['id'])))->find();
			}

			$this->display();
		} else {
		    
			if ($_POST['id']) {
			    
			    $_POST['addtime'] = date("Y-m-d H:i:s",time());
				$rs = M('Coin')->save($_POST);
				
			} else {
			    
				if (!check($_POST['name'], 'n')) {
					$this->error('币种简称只能是小写字母！');
				}

				$_POST['name'] = strtolower($_POST['name']);

				if (check($_POST['name'], 'username')) {
					$this->error('币种名称格式不正确！');
				}

				if (M('Coin')->where(array('name' => $_POST['name']))->find()) {
					$this->error('币种存在！');
				}
				
				$_POST['addtime'] = date("Y-m-d H:i:s",time());

				$rea = M()->execute('ALTER TABLE  `tw_user_coin` ADD  `' . $_POST['name'] . '` DECIMAL(20,8) UNSIGNED NOT NULL DEFAULT 0.00000000');
				$reb = M()->execute('ALTER TABLE  `tw_user_coin` ADD  `' . $_POST['name'] . 'd` DECIMAL(20,8) UNSIGNED NOT NULL DEFAULT 0.00000000');
				$rec = M()->execute('ALTER TABLE  `tw_user_coin` ADD  `' . $_POST['name'] . 'b` VARCHAR(200) NOT NULL DEFAULT 0');

				$rs = M('Coin')->add($_POST);
			}

			if ($rs) {
				$this->success('操作成功！',U('Config/coin'));
			} else {
				$this->error('数据未修改！');
			}
		}
	}

	public function coinStatus()
	{
		if (IS_POST) {
			$id = array();
			$id = implode(',', $_POST['id']);
		} else {
			$id = $_GET['id'];
		}

		if (empty($id)) {
			$this->error('请选择要操作的数据!');
		}

		$where['id'] = array('in', $id);
		$method = $_GET['type'];
		// $this->error($method);
		switch (strtolower($method)) {
			case 'forbid':
				$data = array('status' => 0);
				break;

			case 'resume':
				$data = array('status' => 1);
				break;

			case 'delt':
				$rs = M('Coin')->where($where)->select();

				foreach ($rs as $k => $v) {
					$rs[] = M()->execute('ALTER TABLE  `tw_user_coin` DROP COLUMN ' . $v['name']);
					$rs[] = M()->execute('ALTER TABLE  `tw_user_coin` DROP COLUMN ' . $v['name'] . 'd');
					$rs[] = M()->execute('ALTER TABLE  `tw_user_coin` DROP COLUMN ' . $v['name'] . 'b');
				}

				if (M('Coin')->where($where)->delete()) {
					$this->success('操作成功！');
				} else {
					$this->error('操作失败！');
				}

				break;

			default:

			$this->error('参数非法');
		}

		if (M('Coin')->where($where)->save($data)) {
			$this->success('操作成功！');
		} else {
			$this->error('操作失败！');
		}
	}


	public function coinImage()
	{
		$upload = new \Think\Upload();
		$upload->maxSize = 3145728;
		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');
		$upload->rootPath = './Upload/coin/';
		$upload->autoSub = false;
		
		$info = $upload->upload();
		foreach ($info as $k => $v) {
			$path = $v['savepath'] . $v['savename'];
			echo $path;
			exit();
		}
	}

    //系统参数设置
	public function qita(){
		$this->data = M('Config')->where(array('id' => 1))->find();
		$this->display();
	}

    //系统参数编辑
	public function qitaEdit(){
		$data = I('post.');
		if (M('Config')->where(array('id' => 1))->save($data)) {
			$this->success('修改成功！');
		} else {
			$this->error('修改失败');
		}
	}
	

	
	// 前端导航配置
	public function daohang($name = NULL, $field = NULL, $status = NULL, $lang = NULL)
	{
		$where = array();

		if ($field && $name) {
			if ($field == 'username') {
				$where['userid'] = M('User')->where(array('username' => $name))->getField('id');
			} else if ($field == 'title') {
				$where['title'] = array('like', '%' . $name . '%');
			} else {
				$where[$field] = $name;
			}
		}

		if ($status) {
			$where['status'] = $status - 1;
		}
		if ($lang) {
			$where['lang'] = $lang;
		}
		
		$count = M('Daohang')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('Daohang')->where($where)->order('sort asc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->display();
	}

	public function daohangEdit($id = NULL)
	{
	    //dump($_POST);
		if (empty($_POST)) {
			if ($id) {
				$this->data = M('Daohang')->where(array('id' => trim($id)))->find();
			} else {
				$this->data = null;
			}

			$this->display();
		} else {
			if (APP_DEMO) {
				$this->error('测试站暂时不能修改！');
			}

			if ($_POST['id']) {
				$rs = M('Daohang')->save($_POST);
			} else {
				$_POST['addtime'] = time();
				$rs = M('Daohang')->add($_POST);
			}

			if ($rs) {
                $closeUrl = S('closeUrl');
			    if($_POST['get_login']) {
                    $closeUrl[] = $_POST['url'];
                } else {
                    if($key = array_search($_POST['url'], $closeUrl)) {
                        unset($closeUrl[$key]);
                    }
                }
                $closeUrl = array_unique($closeUrl);
                sort($closeUrl);
                S('closeUrl', $closeUrl);

				$this->success('编辑成功！',U('Config/daohang'));
			} else {
				$this->error('编辑失败！');
			}
		}
	}

	public function daohangStatus($id = NULL, $type = NULL, $mobile = 'Daohang')
	{
		if (APP_DEMO) {
			$this->error('测试站暂时不能修改！');
		}

		if (empty($id)) {
			$this->error('参数错误！');
		}
		if (empty($type)) {
			$this->error('参数错误1！');
		}

		if (strpos(',', $id)) {
			$id = implode(',', $id);
		}

		$where['id'] = array('in', $id);

		switch (strtolower($type)) {
		case 'forbid':
			$data = array('status' => 0);
			break;

		case 'resume':
			$data = array('status' => 1);
			break;

		case 'repeal':
			$data = array('status' => 2, 'endtime' => time());
			break;

		case 'del':
			$data = array('status' => -1);
			break;

		case 'delete':
			if (M($mobile)->where($where)->delete()) {
				$this->success('操作成功！');
			} else {
				$this->error('操作失败！');
			}

			break;

		default:
			$this->error('操作失败！');
		}

		if (M($mobile)->where($where)->save($data)) {
			$this->success('操作成功！');
		} else {
			$this->error('操作失败！');
		}
	}
	
	// 页脚导航配置
	public function dhfooter($name = NULL, $field = NULL, $status = NULL)
	{
		$where = array();

		if ($field && $name) {
			if ($field == 'username') {
				$where['userid'] = M('User')->where(array('username' => $name))->getField('id');
			} else if ($field == 'title') {
				$where['title'] = array('like', '%' . $name . '%');
			} else {
				$where[$field] = $name;
			}
		}
		
		if ($status) {
			$where['status'] = $status - 1;
		}

		$count = M('footer')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('footer')->where($where)->order('sort asc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->display();
	}
	
	public function dhfooterEdit($id = NULL)
	{
		if (empty($_POST)) {
			if ($id) {
				$this->data = M('footer')->where(array('id' => trim($id)))->find();
			} else {
				$this->data = null;
			}

			$this->display();
		} else {
			if ($_POST['id']) {
				$rs = M('footer')->save($_POST);
			} else {
				$_POST['addtime'] = time();
				$rs = M('footer')->add($_POST);
			}

			if ($rs) {
                $closeUrl = S('closeUrl');
                if($_POST['get_login']) {
                    $closeUrl[] = $_POST['url'];
                } else {
                    if($key = array_search($_POST['url'], $closeUrl)) {
                        unset($closeUrl[$key]);
                    }
                }
                $closeUrl = array_unique($closeUrl);
                sort($closeUrl);
                S('closeUrl', $closeUrl);
				$this->success('编辑成功！',U('Config/dhfooter'));
			} else {
				$this->error('编辑失败！');
			}
		}
	}

	public function dhfooterStatus($id = NULL, $type = NULL, $mobile = 'footer')
	{
		if (empty($id)) {
			$this->error('参数错误！');
		}
		if (empty($type)) {
			$this->error('参数错误1！');
		}

		if (strpos(',', $id)) {
			$id = implode(',', $id);
		}

		$where['id'] = array('in', $id);

		switch (strtolower($type)) {
		case 'forbid':
			$data = array('status' => 0);
			break;

		case 'resume':
			$data = array('status' => 1);
			break;

		case 'repeal':
			$data = array('status' => 2, 'endtime' => time());
			break;

		case 'del':
			$data = array('status' => -1);
			break;

		case 'delete':
			if (M($mobile)->where($where)->delete()) {
				$this->success('操作成功！');
			} else {
				$this->error('操作失败！');
			}

			break;

		default:
			$this->error('操作失败！');
		}

		if (M($mobile)->where($where)->save($data)) {
			$this->success('操作成功！');
		} else {
			$this->error('操作失败！');
		}
	}
	
	// 后端导航配置
	public function dhadmin($name = NULL, $field = NULL, $status = NULL, $hide = NULL)
	{
		$where = array();

		if ($field && $name) {
			if ($field == 'username') {
				$where['userid'] = M('User')->where(array('username' => $name))->getField('id');
			} else if ($field == 'title') {
				$where['title'] = array('like', '%' . $name . '%');
			} else {
				$where[$field] = $name;
			}
		}

		if ($status) {
			$where['status'] = $status - 1;
		}
		if ($hide) {
			$where['hide'] = $hide;
		}
		
		$where_1 = $where;
		$where_1['pid'] = 0;
		$where_2 = $where;
		
		$list = M('menu')->where($where_1)->order('sort asc')->select();
		foreach ($list as $k => $v) {
			$where_2['pid'] = $v['id'];
			$list[$k]['voo'] = M('menu')->where($where_2)->order('sort asc')->select();
		}
		
		$this->assign('list', $list);
		$this->display();
	}
	
	public function dhadminEdit($id = NULL)
	{
		if (empty($_POST)) {
			$liste = '';
			
			if ($id) {
				$this->data = M('menu')->where(array('id' => trim($id)))->find();
			} else {
				$this->data = null;
			}
			
			$liste = M('menu')->where('pid = 0')->order('sort asc')->select();
			$this->assign('liste', $liste);
			$this->display();
		} else {
			if (APP_DEMO) {
				$this->error('测试站暂时不能修改！');
			}
			
			if (empty($_POST['title'])) {
				$this->error('标题错误');
			}

			if ($_POST['id']) {
				$rs = M('menu')->save($_POST);
			} else {
				$_POST['addtime'] = time();
				$rs = M('menu')->add($_POST);
			}

			if ($rs) {
				$this->success('编辑成功！',U('Config/dhadmin'));
			} else {
				$this->error('编辑失败！');
			}
		}	
	}

	public function dhadminStatus($id = NULL, $type = NULL, $mobile = 'menu')
	{
		if (APP_DEMO) {
			$this->error('测试站暂时不能修改！');
		}

		if (empty($id)) {
			$this->error('参数错误！');
		}
		if (empty($type)) {
			$this->error('参数错误1！');
		}

		if (strpos(',', $id)) {
			$id = implode(',', $id);
		}

		$where['id'] = array('in', $id);
		switch (strtolower($type)) {
			case 'forbid':
				$data = array('hide' => 1);
				break;

			case 'resume':
				$data = array('hide' => 0);
				break;

			case 'repeal':
				$data = array('hide' => 2);
				break;
				
			case 'delete':
				$data = array('status' => -1);
				break;

			case 'del':
				if (M($mobile)->where($where)->delete()) {
					$this->success('操作成功！');
				} else {
					$this->error('操作失败！');
				}
				break;

			default:
			$this->error('操作失败！');
		}

		if (M($mobile)->where($where)->save($data)) {
			$this->success('操作成功！');
		} else {
			$this->error('操作失败！');
		}
	}
	
	////市场配置OK
	public function ctmarket(){
	    $count = M('ctmarket')->count();
		$Page = new \Think\Page($count, 100);
		$show = $Page->show();
		$list = M('ctmarket')->order('sort asc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
	    $this->display();
	}

    /////OK
	public function marketo($field = NULL, $name = NULL)
	{
		$where = array();

		if ($field && $name) {
			if ($field == 'username') {
				$where['userid'] = M('User')->where(array('username' => $name))->getField('id');
			} else {
				$where[$field] = $name;
			}
		}
		
		$count = M('Market')->where($where)->count();
		$Page = new \Think\Page($count, 100);
		$show = $Page->show();
		$list = M('Market')->where($where)->order('sort asc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->display();
	}
	
	
	///链上币种市场配置修改
	public function ctmarketEdit($id = NULL){
        if(empty($_POST)){
            $id = $_GET['id'];
            $this->data = M('ctmarket')->where(array('id' => $id))->find();
	        $this->display();
        }else{
            $coinname = $_POST['coinname'];
            $status = $_POST['status'];
            $state = $_POST['state'];
            $sort = $_POST['sort'];
            $id = $_POST['id'];
            $data['coinname'] = strtolower($coinname);
            $data['name'] = strtolower($coinname)."_usdt";
            $data['symbol'] = strtolower($coinname)."usdt";
            $data['title'] = strtoupper($coinname)."/USDT";
            $data['status'] = $status;
            $data['state'] = $state;
            $data['sort'] = $sort;
            $data['addtime'] = date("Y-m-d H:i:s",time());
            //编辑
            if($id > 0){
                $re = M("ctmarket")->where(array('id'=>$id))->save($data);
                if($re){
                    $this->success('操作成功！',U('Config/ctmarket'));
                }else{
                    $this->error('操作失败！');
                }
                
            }else{//新增
                $re =M("ctmarket")->add($data);
                if($re){
                    $this->success('操作成功！',U('Config/ctmarket'));
                }else{
                    $this->error('操作失败！');
                }
            }
            
        }
        
	}
	
	// 平台币市场配置修改
	public function marketoEdit($id = NULL)
	{
		$getCoreConfig = getCoreConfig();
		if(!$getCoreConfig){
			$this->error('核心配置有误');
		}

		if (empty($_POST)) {
			if (empty($id)) {
				$this->data = array();
			} else {
				$this->data = M('Market')->where(array('id' => $id))->find();
			}
			$time_arr = array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23');
			$time_minute = array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52','53','54','55','56','57','58','59');
			
			$this->assign('time_arr', $time_arr);
			$this->assign('time_minute', $time_minute);
			$this->assign('getCoreConfig',$getCoreConfig['indexcat']);
			$this->display();
		} else {
			if (APP_DEMO) {
				$this->error('测试站暂时不能修改！');
			}

			$round = array(0, 1, 2, 3, 4, 5, 6);
			if (!in_array($_POST['round'], $round)) {
				$this->error('小数位数格式错误！');
			}
			
			if(!$_POST['hou_price']){
				$_POST['hou_price'] = '0.00000000';
			}

			if ($_POST['id']) {
				$rs = M('Market')->save($_POST);
			} else {
				$buyname = $_POST['buyname'];
				$_POST['name'] = $_POST['sellname'] . '_' . $_POST['buyname'];
				unset($_POST['buyname']);
				unset($_POST['sellname']);

				if (M('Market')->where(array('name' => $_POST['name']))->find()) {
					$this->error('市场存在！');
				}
				
				$jiaoyiqu = strtolower($getCoreConfig['indexcat'][$_POST['jiaoyiqu']]);
				if ($buyname != $jiaoyiqu) {
					$this->error('所属交易区和买方币种不一致！'.$buyname);
				}
				$rs = M('Market')->add($_POST);
			}

			if ($rs) {
				$this->success('操作成功！',U('Config/marketo'));
			} else {
				$this->error('操作失败！');
			}
		}
	}
	
	// 市场配置2修改
	public function marketoEdit2($id = NULL)
	{
		$getCoreConfig = getCoreConfig();
		if(!$getCoreConfig){
			$this->error('核心配置有误');
		}
		if (empty($_POST)) {
			if (empty($id)) {
				$this->data = array();
			} else {
				$this->data = M('Market')->where(array('id' => $id))->find();
			}
			
			$time_arr = array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23');
			$time_minute = array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52','53','54','55','56','57','58','59');
			$this->assign('time_arr', $time_arr);
			$this->assign('time_minute', $time_minute);
			$this->assign('getCoreConfig',$getCoreConfig['indexcat']);
			$this->display();
		} else {
			if (APP_DEMO) {
				$this->error('测试站暂时不能修改！');
			}

			$round = array(0, 1, 2, 3, 4, 5, 6);
			if (!in_array($_POST['round'], $round)) {
				$this->error('小数位数格式错误！');
			}

			if ($_POST['id']) {
				$rs = M('Market')->save($_POST);
			} else {
				$_POST['name'] = $_POST['sellname'] . '_' . $_POST['buyname'];
				unset($_POST['buyname']);
				unset($_POST['sellname']);

				if (M('Market')->where(array('name' => $_POST['name']))->find()) {
					$this->error('市场存在！');
				}
				$rs = M('Market')->add($_POST);
			}

			if ($rs) {
				$this->success('操作成功！',U('Config/marketo'));
			} else {
				$this->error('操作失败！');
			}
		}
	}
	
	// 市场配置3修改
	public function marketoEdit3($id = NULL)
	{
		$getCoreConfig = getCoreConfig();
		if(!$getCoreConfig){
			$this->error('核心配置有误');
		}
		if (empty($_POST)) {
			if (empty($id)) {
				$this->data = array();
			} else {
				$this->data = M('Market')->where(array('id' => $id))->find();
			}
			
			$time_arr = array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23');
			$time_minute = array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52','53','54','55','56','57','58','59');
			$this->assign('time_arr', $time_arr);
			$this->assign('time_minute', $time_minute);
			$this->assign('getCoreConfig',$getCoreConfig['indexcat']);
			
			$round = number_format("0",$this->data['round']-1).'1';
			$this->assign('round', $round);
			
			$this->display();
			
		} else {
			if (APP_DEMO) {
				$this->error('测试站暂时不能修改！');
			}

			$round = array(0, 1, 2, 3, 4, 5, 6);
			if (!in_array($_POST['round'], $round)) {
				$this->error('小数位数格式错误！');
			}

			if ($_POST['id']) {
				$rs = M('Market')->save($_POST);
			} else {
				$_POST['name'] = $_POST['sellname'] . '_' . $_POST['buyname'];
				unset($_POST['buyname']);
				unset($_POST['sellname']);

				if (M('Market')->where(array('name' => $_POST['name']))->find()) {
					$this->error('市场存在！');
				}

				$rs = M('Market')->add($_POST);
			}

			if ($rs) {
				$this->success('操作成功！',U('Config/marketo'));
			} else {
				$this->error('操作失败！');
			}
		}
	}
	
	public function marketoStatus($id = NULL, $type = NULL, $mobile = 'Market')
	{
		if (APP_DEMO) {
			$this->error('测试站暂时不能修改！');
		}

		if (empty($id)) {
			$this->error('参数错误！');
		}
		if (empty($type)) {
			$this->error('参数错误1！');
		}

		if (strpos(',', $id)) {
			$id = implode(',', $id);
		}

		$where['id'] = array('in', $id);

		switch (strtolower($type)) {
			case 'forbid':
				$data = array('status' => 0);
				break;

			case 'resume':
				$data = array('status' => 1);
				break;

			case 'repeal':
				$data = array('status' => 2, 'endtime' => time());
				break;

			case 'delete':
				$data = array('status' => -1);
				break;

			case 'del':
				if (M($mobile)->where($where)->delete()) {
					$this->success('操作成功！');
				} else {
					$this->error('操作失败！');
				}

				break;

			default:
				$this->error('操作失败！');
		}

		if (M($mobile)->where($where)->save($data)) {
			$this->success('操作成功！');
		} else {
			$this->error('操作失败！');
		}
	}
	
	////修改市场配置状态
	public function ctmarketoStatus($id = NULL, $type = NULL, $mobile = 'ctmarket'){
		if (empty($id)) {
			$this->error('参数错误！');
		}
		if (empty($type)) {
			$this->error('参数错误1！');
		}
		if (strpos(',', $id)) {
			$id = implode(',', $id);
		}
		$where['id'] = array('in', $id);
		switch (strtolower($type)) {
			case 'forbid':
				$data = array('status' => 2);
				break;
			case 'resume':
				$data = array('status' => 1);
				break;
			case 'del':
				if (M($mobile)->where($where)->delete()) {
					$this->success('操作成功！');
				} else {
					$this->error('操作失败！');
				}

				break;
			default:
				$this->error('操作失败！');
		}
		if (M($mobile)->where($where)->save($data)) {
			$this->success('操作成功！');
		} else {
			$this->error('操作失败！');
		}
	}
	

}
?>