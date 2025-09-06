<?php
namespace Agent\Controller;
use Think\Controller;
class AgentController extends Controller
{
    
    protected function _initialize(){

    }

    ////OK
    public function __construct(){
        
        parent::__construct();


        if (!session('agent_id')) {
            $this->redirect('Agent/Login/index');
        }
        define('AID', session('agent_id'));
        
        $access = $this->accessControl();
        if ($access === false) {
            $this->error('403:禁止访问');
        } else if ($access === null) {
            $dynamic = $this->checkDynamic();
            if ($dynamic === null) {
                $rule = strtolower(MODULE_NAME . '/' . CONTROLLER_NAME . '/' . ACTION_NAME);
                 if (!$this->checkRule($rule, array('in', '1,2'))) {
                     $this->error('未授权访问!');
                 }
            } else if ($dynamic === false) {
                $this->error('未授权访问!');
            }
        }


    }

    ////OK
    public function index()
    {
        $this->redirect('Agent/Index/index');
    }

    ////OK
    final protected function checkRule($rule, $type = \Common\Model\AuthRuleModel::RULE_URL, $mode = 'url')
    {
        if (IS_ROOT) {
            return true;
        }
        static $Auth;
        if (!$Auth) {
            $Auth = new \Think\Auth();
        }
        if (!$Auth->check($rule, UID, $type, $mode)) {
            return false;
        }
        return true;
    }
    
    ////OK
    function addtime($time = NULL, $type = NULL){
	    if (empty($time)) {
	    	return '---';
	    }
	    if (($time < 2545545) && (1893430861 < $time)) {
	    	return '---';
	    }
	    if (empty($type)) {
	    	$type = 'Y-m-d H:i:s';
	    }
	    return date($type, $time);
    }

    
    

    final protected function editRow($model, $data, $where, $msg)
    {
        $id = array_unique((array)I('id', 0));
        $id = (is_array($id) ? implode(',', $id) : $id);
        $where = array_merge(array(
            'id' => array('in', $id)
        ), (array)$where);
        $msg = array_merge(array('success' => '操作成功！', 'error' => '操作失败！', 'url' => '', 'ajax' => IS_AJAX), (array)$msg);

        if (M($model)->where($where)->save($data) !== false) {
            $this->success($msg['success'], $msg['url'], $msg['ajax']);
        } else {
            $this->error($msg['error'], $msg['url'], $msg['ajax']);
        }
    }

    protected function forbid($model, $where = array(), $msg = array('success' => '状态禁用成功！', 'error' => '状态禁用失败！'))
    {
        $data = array('status' => 0);
        $this->editRow($model, $data, $where, $msg);
    }

    protected function resume($model, $where = array(), $msg = array('success' => '状态恢复成功！', 'error' => '状态恢复失败！'))
    {
        $data = array('status' => 1);
        $this->editRow($model, $data, $where, $msg);
    }

    protected function restore($model, $where = array(), $msg = array('success' => '状态还原成功！', 'error' => '状态还原失败！'))
    {
        $data = array('status' => 1);
        $where = array_merge(array('status' => -1), $where);
        $this->editRow($model, $data, $where, $msg);
    }

    protected function delete($model, $where = array(), $msg = array('success' => '删除成功！', 'error' => '删除失败！'))
    {
        $data['status'] = -1;
        $data['update_time'] = NOW_TIME;
        $this->editRow($model, $data, $where, $msg);
    }

    public function setStatus($Model = CONTROLLER_NAME)
    {
        $ids = I('request.ids');
        $status = I('request.status');

        if (empty($ids)) {
            $this->error('请选择要操作的数据');
        }

        $map['id'] = array('in', $ids);

        switch ($status) {
            case -1:
                $this->delete($Model, $map, array('success' => '删除成功', 'error' => '删除失败'));
                break;

            case 0:
                $this->forbid($Model, $map, array('success' => '禁用成功', 'error' => '禁用失败'));
                break;

            case 1:
                $this->resume($Model, $map, array('success' => '启用成功', 'error' => '启用失败'));
                break;

            default:
                $this->error('参数错误');
                break;
        }
    }

    protected function checkDynamic()
    {
        if (IS_ROOT) {
            return true;
        }

        return null;
    }
    
    
    
    ////OK
    final protected function accessControl()
    {
        if (IS_ROOT) {
            return true;
        }

        $allow = C('ALLOW_VISIT');
        $deny = C('DENY_VISIT');
        $check = strtolower(CONTROLLER_NAME . '/' . ACTION_NAME);

        if (!empty($deny) && in_array_case($check, $deny)) {
            return false;
        }
        if (!empty($allow) && in_array_case($check, $allow)) {
            return true;
        }

        return null;
    }

    final public function getMenus($controller = CONTROLLER_NAME)
    {
        if (empty($menus)) {
            $where['pid'] = 0;
            $where['hide'] = 0;

            if (!C('DEVELOP_MODE')) {
                $where['is_dev'] = 0;
            }

            $menus['main'] = M('Menu')->where($where)->order('sort asc')->select();
            $menus['child'] = array();
            $current = M('Menu')->where('url like \'' . $controller . '/' . ACTION_NAME . '%\'')->field('id')->find();
            if (!$current) {
                $current = M('Menu')->where('url like \'' . $controller . '/%\'')->field('id')->find();
            }

            if ($current) {
                $nav = D('Menu')->getPath($current['id']);
                $nav_first_title = $nav[0]['title'];

                foreach ($menus['main'] as $key => $item) {
                    if (!is_array($item) || empty($item['title']) || empty($item['url'])) {
                        $this->error('控制器基类$menus属性元素配置有误');
                    }

                    if (stripos($item['url'], MODULE_NAME) !== 0) {
                        $item['url'] = MODULE_NAME . '/' . $item['url'];
                    }

                    if (!IS_ROOT && !$this->checkRule($item['url'], \Common\Model\AuthRuleModel::RULE_MAIN, null)) {
                        unset($menus['main'][$key]);
                        continue;
                    }

                    if ($item['title'] == $nav_first_title) {
                        $menus['main'][$key]['class'] = 'current';
                        $groups = M('Menu')->where('pid = ' . $item['id'])->distinct(true)->field('`group`')->select();
                        if ($groups) {
                            $groups = array_column($groups, 'group');
                        } else {
                            $groups = array();
                        }

                        $where = array();
                        $where['pid'] = $item['id'];
                        $where['hide'] = 0;
                        if (!C('DEVELOP_MODE')) {
                            $where['is_dev'] = 0;
                        }

                        $second_urls = M('Menu')->where($where)->getField('id,url');

                        if (!IS_ROOT) {
                            $to_check_urls = array();

                            foreach ($second_urls as $key => $to_check_url) {
                                if (stripos($to_check_url, MODULE_NAME) !== 0) {
                                    $rule = MODULE_NAME . '/' . $to_check_url;
                                } else {
                                    $rule = $to_check_url;
                                }

                                if ($this->checkRule($rule, \Common\Model\AuthRuleModel::RULE_URL, null)) {
                                    $to_check_urls[] = $to_check_url;
                                }
                            }
                        }

                        foreach ($groups as $g) {
                            $map = array('group' => $g);

                            if (isset($to_check_urls)) {
                                if (empty($to_check_urls)) {
                                    continue;
                                } else {
                                    $map['url'] = array('in', $to_check_urls);
                                }
                            }

                            $map['pid'] = $item['id'];
                            $map['hide'] = 0;

                            if (!C('DEVELOP_MODE')) {
                                $map['is_dev'] = 0;
                            }

                            $menuList = M('Menu')->where($map)->field('id,pid,title,url,tip,ico_name')->order('sort asc')->select();
                            $menus['child'][$g] = list_to_tree($menuList, 'id', 'pid', 'operater', $item['id']);
                        }

                        if ($menus['child'] === array()) {}
                    }
                }
            }
        }

        return $menus;
    }


    protected function lists($model, $where = array(), $order = '', $base = array('status' => array('egt', 0)), $field = true)
    {
        $options = array();
        $REQUEST = (array)I('request.');

        if (is_string($model)) {
            $model = M($model);
        }

        $OPT = new \ReflectionProperty($model, 'options');
        $OPT->setAccessible(true);
        $pk = $model->getPk();

        if ($order === null) {
        } else if (isset($REQUEST['_order']) && isset($REQUEST['_field']) && in_array(strtolower($REQUEST['_order']), array('desc', 'asc'))) {
            $options['order'] = '`' . $REQUEST['_field'] . '` ' . $REQUEST['_order'];
        } else if (($order === '') && empty($options['order']) && !empty($pk)) {
            $options['order'] = $pk . ' desc';
        } else if ($order) {
            $options['order'] = $order;
        }
		
        unset($REQUEST['_order']);
        unset($REQUEST['_field']);
        $options['where'] = array_filter(array_merge((array)$base, (array)$where), function ($val) {
            if (($val === '') || ($val === null)) {
                return false;
            } else {
                return true;
            }
        });

        if (empty($options['where'])) {
            unset($options['where']);
        }

        $options = array_merge((array)$OPT->getValue($model), $options);
        $total = $model->where($options['where'])->count();

        if (isset($REQUEST['r'])) {
            $listRows = (int)$REQUEST['r'];
        } else {
            $listRows = (0 < C('LIST_ROWS') ? C('LIST_ROWS') : 10);
        }

        $page = new \Think\Page($total, $listRows, $REQUEST);

        if ($listRows < $total) {
            $page->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        }

        $p = $page->show();
        $this->assign('_page', $p ? $p : '');
        $this->assign('_total', $total);
        $options['limit'] = $page->firstRow . ',' . $page->listRows;
        $model->setProperty('options', $options);
        return $model->field($field)->select();
    }

}

?>