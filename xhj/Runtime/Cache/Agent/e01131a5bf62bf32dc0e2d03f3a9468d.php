<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>代理中心</title>
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/base.css" media="all">
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/common.css" media="all">
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/module.css">
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/default_color.css" media="all">
	<script type="text/javascript" src="/Public/Admin/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/layer/layer.js"></script>
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/flat-ui.css">
	<script src="/Public/Admin/js/flat-ui.min.js"></script>
	<script src="/Public/Admin/js/application.js"></script>
</head>
<body style="margin:0px;padding:0px; margin-top:100px;">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="navbar-header" style="background-color:#3c434d;">
		<a class="navbar-brand" style="width:200px;text-align:center;background-color:#3c434d;" href="<?php echo U('Agent/Index/index');?>">
		    <span>代理系统</span>	
		</a>
	</div>
	<div class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
			<li> 
			    <a href="<?php echo U('Agent/Index/index');?>">会员列表</a>
			</li>
			
			<li> 
				<a href="<?php echo U('Agent/Index/jclist');?>">合约建仓订单</a>
			</li>
			
			<li>
			    <a href="<?php echo U('Agent/Index/pclist');?>">合约平仓订单</a>
			</li>
			
			<li >
			    <a href="<?php echo U('Agent/Index/recharge');?>">充值列表</a>
			</li>
			
			<li  class="active">
			    <a href="<?php echo U('Agent/Index/withdraw');?>">提现列表</a>
			</li>
			
			<li>
			    <a href="<?php echo U('Agent/Index/property');?>">用户财产</a>
			</li>
		</ul>
		
		<ul class="nav navbar-nav navbar-rights" style="margin-right:10px;">
			<li>
				<a class="dropdown-toggle" title="<?php echo L('退出');?>" href="<?php echo U('Agent/Login/loginout');?>" target="_blank">
					<span class="glyphicon glyphicon-share" aria-hidden="true"></span>
				</a>
			</li>
		</ul>
	</div>

</div>
<div id="main-content">
	<div id="top-alert" class="fixed alert alert-error" style="display: none;">
		<button class="close fixed" style="margin-top: 4px;">&times;</button>
		<div class="alert-content"><?php echo L('警告内容');?></div>
	</div>
	<div id="main" class="main">
		<div class="main-title-h">
			<span class="h1-title">提现列表</span>
			<a class="btn btn-warning" onClick="location.href='<?php echo U('Agent/Index/withdraw');?>'">初始化搜索</a>
		</div>
		
		<div class="cf">

			<div class="search-form fl cf" style="float: none !important;">
				<div class="sleft">
					<form name="formSearch" id="formSearch" method="get" name="form1">
						<select style=" width: 100px; float: left; margin-right: 10px;" name="field" class="form-control">
							<option value="username" <?php if(($_GET['field']) == "username"): ?>selected<?php endif; ?>>用户名</option>
						</select>
						<input type="text" name="name" class="search-input form-control  " value="<?php echo ($_GET['name']); ?>" placeholder="请输入查询内容" style="">
						<a class="sch-btn" href="javascript:;" id="search"> <i class="btn-search"></i> </a>
					</form>
					<script>
						//搜索功能
						$(function () {
							$('#search').click(function () {
								$('#formSearch').submit();
							});
						});
						//回车搜索
						$(".search-input").keyup(function (e) {
							if (e.keyCode === 13) {
								$("#search").click();
								return false;
							}
						});
					</script>
				</div>
			</div>
		</div>
		
		<div class="data-table table-striped">
            <table class="">
                <thead>
                <tr>
                    <th class="">ID</th>
                    <th class="">用户名</th>
                    <th class="">币种名称</th>
                    <th width="">申请时间</th>
                    <th width="">审核时间</th>
                    <th width="">提币地址</th>
                    <th width="">提币数量</th>
                    <th class="">提现手续费</th>
                    <th class="">实际到账</th>
                    <th width="">状态</th>
                    <th width="">操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(!empty($list)): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($vo["id"]); ?></td>
                            <td><?php echo ($vo["username"]); ?> </td>
                            <td><?php echo strtoupper($vo['coinname']);?></td>
                            <td><?php echo ($vo["addtime"]); ?></td>
                            <td><?php echo ($vo["endtime"]); ?></td>
                            <td><?php echo ($vo["address"]); ?></td>
                            <td><?php echo ($vo["num"]); ?></td>
                            <td><?php echo ($vo["fee"]); ?></td>
                            <td><?php echo ($vo["mum"]); ?></td>
                            <td>
                                <?php if(($vo["status"]) == "1"): ?><span style="color:blue;">待审核</span><?php endif; ?>
                                <?php if(($vo["status"]) == "2"): ?><span style="color:green;">完成</span><?php endif; ?>
                                <?php if(($vo["status"]) == "3"): ?><span style="color:red;">未通过</span><?php endif; ?>
                            </td>
                            <td>
                                <?php if(($vo["status"]) == "1"): ?><input type="button" class="ajax-get btn btn-primary btn-xs" value="确认提币" onclick="Upzc('<?php echo ($vo['id']); ?>');"/>
                                    <input type="button" class="ajax-get btn btn-primary btn-xs" value="驳回提币" onclick="Upbh('<?php echo ($vo['id']); ?>');"/><?php endif; ?>
                                <?php if(($vo["status"]) == "2"): ?><span style="color:blue;">已处理</span><?php endif; ?>
                                <?php if(($vo["status"]) == "3"): ?><span style="color:blue;">已处理</span><?php endif; ?>
                                <input type="button" class="ajax-get btn btn-primary btn-xs" value="删除" onclick="del('<?php echo ($vo['id']); ?>');"/>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    <?php else: ?>
                    <td colspan="12" class="text-center empty-info"><i class="glyphicon glyphicon-exclamation-sign"></i>暂无数据</td><?php endif; ?>
                </tbody>
            </table>
            <div class="page">
                <div><?php echo ($page); ?></div>
            </div>
        </div>
	</div>
</div>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript">
    function Upbh(id) {
        var zcid = parseInt(id);
        if (zcid == "" || zcid == null || zcid <=0) {
            layer.alert('参数错误！');
            return false;
        }
        layer.load(0, {shade: [0.5,'#8F8F8F']});
        $.post("<?php echo U('Finance/reject');?>", {
            id: zcid
        }, function (data) {
            setTimeout("closetanchu()",2000);
            if (data.status == 1) {
                layer.msg(data.info, {
                    icon: 1
                });
                setTimeout("shuaxin()",1000);
            } else {
                layer.msg(data.info, {
                    icon: 2
                });
            }
        }, "json");
    }
    
    
    
    function del(id) {
        var zcid = parseInt(id);
        if (zcid == "" || zcid == null || zcid <=0) {
            layer.alert('参数错误！');
            return false;
        }
        layer.confirm('是否删除？', {
          btn: ['是','否'] //按钮
        }, function(){
            layer.load(0, {shade: [0.5,'#8F8F8F']});
             $.post("<?php echo U('Finance/delT');?>", {
                    id: zcid
                }, function (data) {
                    setTimeout("closetanchu()",2000);
                    if (data.status == 1) {
                        layer.msg(data.info, {
                            icon: 1
                        });
                        setTimeout("shuaxin()",1000);
                    } else {
                        layer.msg(data.info, {
                            icon: 2
                        });
                    }
                }, "json");          
        });
   
    }
</script>
<script type="text/javascript">
    function Upzc(id) {
        var zcid = parseInt(id);
        if (zcid == "" || zcid == null || zcid <=0) {
            layer.alert('参数错误！');
            return false;
        }
        layer.load(0, {shade: [0.5,'#8F8F8F']});
        $.post("<?php echo U('Finance/adopttb');?>", {
            id: zcid
        }, function (data) {
            setTimeout("closetanchu()",2000);
            if (data.status == 1) {
                layer.msg(data.info, {
                    icon: 1
                });
                setTimeout("shuaxin()",1000);
            } else {
                layer.msg(data.info, {
                    icon: 2
                });
            }
        }, "json");
    }
</script>
<script type="text/javascript">
    function closetanchu(){
        layer.closeAll('loading');
    }
    function shuaxin(){
        window.location.href=window.location.href;
    }
</script>

<script type="text/javascript">
    function showid(id){
        layer.open({
            type:1,
            skin:'layui-layer-rim', //加上边框
            area:['800px','100px'], //宽高
            title:'交易ID', //不显示标题
            closeBtn: 0,
            shadeClose: true,
            content:id
        });
    }
    //提交表单
    $('#submit').click(function () {
        $('#form').submit();
    });
</script>