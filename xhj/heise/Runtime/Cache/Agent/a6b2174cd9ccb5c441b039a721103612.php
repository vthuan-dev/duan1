<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo L('代理中心');?></title>
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
		    <span><?php echo L('代理系统');?></span>	
		</a>
	</div>
	<div class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
			<li> 
			    <a href="<?php echo U('Agent/Index/index');?>"><?php echo L('会员列表');?></a>
			</li>
			
			<li class="active"> 
				<a href="<?php echo U('Agent/Index/jclist');?>"><?php echo L('合约建仓订单');?></a>
			</li>
			
			<li>
			    <a href="<?php echo U('Agent/Index/pclist');?>"><?php echo L('合约平仓订单');?></a>
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
			<span class="h1-title"><?php echo L('合约建仓订单列表');?></span>
			<a class="btn btn-warning" onClick="location.href='<?php echo U('Agent/Index/jclist');?>'"><?php echo L('初始化搜索');?></a>
			<span class="h1-title" style="color:red;"><?php echo L('如果用户ID被指定盈亏,不受单控影响');?></span>
		</div>
		<div class="cf">
			<div class="search-form fr cf" style="43px;float: none !important;">
				<div class="sleft">
					<form name="formSearch" id="formSearch" method="get" name="form1">
						<input type="text" name="username" class="search-input form-control" value="" placeholder="<?php echo L('请输入邮箱账号');?>" />
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
					<th class="">ID</th>
					<th class=""><?php echo L('会员账号');?></th>
					<th class=""><?php echo L('交易对');?></th>
					<th class=""><?php echo L('方向');?></th>
					<th class=""><?php echo L('状态');?></th>
					<th class=""><?php echo L('委托额度');?></th>
					<th class=""><?php echo L('建仓单价');?></th>
					<th class=""><?php echo L('平仓单价');?></th>
					<th class=""><?php echo L('建仓时间');?></th>
					<th class=""><?php echo L('盈亏金额');?></th>
					<th class=""><?php echo L('单控操作');?></th>
				</tr>
				</thead>
				<tbody>
                    <?php if(!empty($list)): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
						<td><input class="ids" type="checkbox" name="id[]" value="<?php echo ($vo["id"]); ?>"/></td>
						<td><?php echo ($vo["id"]); ?></td>
						<td><?php echo ($vo["username"]); ?></td>
						<td><?php echo ($vo["coinname"]); ?></td>
						<td>
						    <?php if($vo["hyzd"] == 1): ?><span style="color:#0ecb81;">买涨</span>
						    <?php elseif($vo["hyzd"] == 2): ?>
						        <span style="color:#f5465c;">买跌</span><?php endif; ?>
						</td>
						<td>
						    <?php if($vo["status"] == 1): ?><span style="color:#707A8A;">待结算</span>
						    <?php elseif($vo["status"] == 2): ?>
						        <span style="color:#0ecb81;">已完成</span>
						    <?php elseif($vo["status"] == 3): ?>
						        <span style="color:#f5465c;">无效</span><?php endif; ?>
						</td>
						<td><?php echo ($vo["num"]); ?></td>
						<td><?php echo ($vo["buyprice"]); ?></td>
						<td>
						    <?php if($vo["is_win"] == 0): ?><span style="color:#707A8A;"><?php echo ($vo["sellprice"]); ?></span>    
						    <?php elseif($vo["is_win"] == 1): ?>  
						        <span style="color:#0ecb81;"><?php echo ($vo["sellprice"]); ?></span>
						    <?php elseif($vo["is_win"] == 2): ?>
						        <span style="color:#f5465c;"><?php echo ($vo["sellprice"]); ?></span><?php endif; ?>
						</td>
						
						<td><?php echo ($vo["buytime"]); ?></td>
						<td>
						    <?php if($vo["is_win"] == 0): ?><span style="color:#707A8A;"><?php echo ($vo["ploss"]); ?></span>    
						    <?php elseif($vo["is_win"] == 1): ?>  
						        <span style="color:#0ecb81;">+<?php echo ($vo["ploss"]); ?></span>
						    <?php elseif($vo["is_win"] == 2): ?>
						        <span style="color:#f5465c;">-<?php echo ($vo["ploss"]); ?></span><?php endif; ?>
						</td>
						<td>
						    <select name="kongyk" id="kongyk" style="width:60px;" onchange="setwinloss(<?php echo ($vo["id"]); ?>);">
						        <option value="0" <?php if($vo['kongyk'] == 0){?>selected<?php }?>>正常</option>
						        <option value="1" <?php if($vo['kongyk'] == 1){?>selected<?php }?>>盈利</option>
						        <option value="2" <?php if($vo['kongyk'] == 2){?>selected<?php }?>>亏损</option>
						    </select>
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
<script type="text/javascript">
    function setwinloss(id){
        var id  = id;
        var kongyk = $("#kongyk").val();
        $.post("<?php echo U('Agent/Index/setwinloss');?>",
        {'id':id,'kongyk':kongyk},
        function(data){
            if(data.code == 1){
                alert(data.info);
                setTimeout(function(){
                    window.location.reload();
                },2000);
            }else{
                alert(data.info);
                setTimeout(function(){
                    window.location.reload();
                },2000);
            }
        });
    }
</script>