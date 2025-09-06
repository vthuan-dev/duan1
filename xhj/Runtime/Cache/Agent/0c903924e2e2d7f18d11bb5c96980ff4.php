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
			<li class="active"> 
			    <a href="<?php echo U('Agent/Index/index');?>">会员列表</a>
			</li>
			
			<li> 
				<a href="<?php echo U('Agent/Index/jclist');?>">合约建仓订单</a>
			</li>
			
			<li>
			    <a href="<?php echo U('Agent/Index/pclist');?>">合约平仓订单</a>
			</li>
			
						<li>
			    <a href="<?php echo U('Agent/Index/recharge');?>">充值列表</a>
			</li>
			
			<li>
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
			<span class="h1-title"><?php echo L('会员管理');?></span>
			<a class="btn btn-warning" onClick="location.href='<?php echo U('Agent/Index/index');?>'"><?php echo L('初始化搜索');?></a>
		</div>
		
		<div class="cf">
		    <div class="fl">
				<a class="btn btn-success  " href="<?php echo U('Index/edit');?>">新 增</a>
			</div>
		    
			<div class="search-form cf">
				<div class="sleft">
					<form name="formSearch" id="formSearch" method="get" name="form1">
						<select style="width:120px;float:left;margin-right:10px;" name="field" class="form-control">
							<option value="username"
							<?php if(empty($_GET['field'])): ?>selected<?php endif; ?>
							><?php echo L('邮箱账号');?></option>
						</select>

						<script type="text/javascript" src="/Public/layer/laydate/laydate.js"></script>

						<input type="text" name="name" class="search-input form-control" value="<?php echo ($_GET['name']); ?>" placeholder="<?php echo L('请输入邮箱账号');?>" style="width: 380px;">
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
					<th class="row-selected row-selected"><input class="check-all" type="checkbox"/></th>
					<th>ID</th>
					<th><?php echo L('会员账号');?></th>
					<th><?php echo L('登陆');?></th>
					<th><?php echo L('注册IP');?>/<?php echo L('时间');?></th>
					<th><?php echo L('地址');?></th>
					<th><?php echo L('推荐人');?></th>
					<th><?php echo L('认证状态');?></th>
					<th><?php echo L('邀请码');?></th>
					<th>操作</th>
				</tr>
				</thead>
				<tbody>
                    <?php if(!empty($list)): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td>
									<input class="ids" type="checkbox" name="id[]" value="<?php echo ($vo["id"]); ?>"/>
								</td>
								<td><?php echo ($vo["id"]); ?></td>
								<td title="登录该用户"><?php echo ($vo["username"]); ?></td>
								<td><span><?php echo ($vo["logins"]); ?></span>次</td>
								<td>
								    <span>IP：<?php echo ($vo["addip"]); ?></span><br />
								    <span>时间：<?php echo date("Y-m-d H:i:s",$vo['addtime']);?></span>
								</td>
								<td><span><?php echo ($vo["addr"]); ?></span></td>
                                <td>
									<?php if(($vo["invit_1"]) != ""): ?>1代：<?php echo ($vo['invit_1']); ?><br/><?php endif; ?>
									<?php if(($vo["invit_2"]) != ""): ?>2代：<?php echo ($vo['invit_2']); ?><br/><?php endif; ?>
									<?php if(($vo["invit_3"]) != ""): ?>3代：<?php echo ($vo['invit_3']); ?><br/><?php endif; ?>
								</td>
								
								<td>
								    <?php if(($vo["rzstatus"]) == "0"): ?>未提交<?php endif; ?>
								    <?php if(($vo["rzstatus"]) == "1"): ?><span style="color:blue;">待审核</span><?php endif; ?>
								    <?php if(($vo["rzstatus"]) == "2"): ?><span style="color:green;">认证成功</span><?php endif; ?>
								    <?php if(($vo["rzstatus"]) == "3"): ?><span style="color:red;">认证驳回</span><?php endif; ?>
								    
								    
								</td>

                                <td><span><?php echo ($vo["invit"]); ?></span></td>
                                
                                <td>
						            <a class="btn btn-primary btn-xs" href="<?php echo U('Index/edit');?>?id=<?php echo ($vo["id"]); ?>">编辑</a>
						             <?php if(($vo["rzstatus"]) == "1"): ?><a class="btn btn-primary btn-xs" href="<?php echo U('Index/authrz');?>?id=<?php echo ($vo["id"]); ?>">审核认证</a><?php endif; ?>
						        </td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    <?php else: ?>
					<td colspan="12" class="text-center empty-info">
					    <i class="glyphicon glyphicon-exclamation-sign"></i>暂无数据
					</td><?php endif; ?>
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
    $(function(){
        setInterval("tzfc()",2000);
    });
    
    function tzfc(){
        var st = 1;
        $.post("<?php echo U('Admin/Trade/gethyorder');?>",
        {'st':st},
        function(data){
            if(data.code == 1){
                layer.confirm('有新的合约订单', {
                  btn: ['知道了'] //按钮
                }, function(){
                    
                    $.post("<?php echo U('Admin/Trade/settzstatus');?>",
                    function(data){
                        if(data.code == 1){
                            window.location.reload();  
                        } 
                    });
                });
            }   
        });
    }
</script>