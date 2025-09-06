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


<script type="text/javascript" src="/Public/layer/laydate/laydate.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<div id="main-content">
	<div id="top-alert" class="fixed alert alert-error" style="display: none;">
		<button class="close fixed" style="margin-top: 4px;">&times;</button>
		<div class="alert-content">警告内容</div>
	</div>
	<div id="main" class="main">
		<div class="main-title-h">
			<span class="h1-title"><a href="<?php echo U('Index/index');?>">用户管理</a> &gt;&gt;</span>
			<span class="h1-title">认证审核</span>
		</div>
		<div class="tab-wrap">
			<div class="tab-content">
				<form id="form" action="<?php echo U('Index/upanthrz');?>" method="post" class="form-horizontal">
					<div id="tab" class="tab-pane in tab">
						<div class="form-item cf">
							<table>

								<tr class="controls">
									<td class="item-label">用户名 :</td>
									<td>
										<input type="text" style="color:#000;"   readonly="readonly"  class="form-control input-10x" name="username" value="<?php echo ($info["username"]); ?>">
									</td>
									<td class="item-note"></td>
								</tr>
								<tr class="controls">
									<td class="item-label">手机号码 :</td>
									<td>
										<input type="text" style="color:#000;"  readonly="readonly" class="form-control input-10x" name="phone" value="<?php echo ($info["phone"]); ?>">
									</td>
									<td class="item-note"></td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">身份证正面 :</td>
									<td>
										<img src="/Public/Static/payimgs/<?php echo ($info["cardzm"]); ?>" style="height:100px;" />
									</td>
									<td class="item-note"></td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">身份证反面 :</td>
									<td>
										<img src="/Public/Static/payimgs/<?php echo ($info["cardfm"]); ?>" style="height:100px;" />
									</td>
									<td class="item-note"></td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">申请时间 :</td>
									<td>
										<input type="text" style="color:#000;" readonly="readonly" class="form-control input-10x" name="rztime" value="<?php echo date('Y-m-d H:i:s',$info['rztime']);?>">
									</td>
									<td class="item-note"></td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">认证赠送 :</td>
									<td>
									    <select name="kjid" class="form-control input-10x">
									        <?php if(is_array($klist)): foreach($klist as $key=>$vo): ?><option  value="<?php echo ($vo["id"]); ?>" <?php if(($vo["txstate"]) == $vo["id}"]): ?>selected<?php endif; ?>><?php echo ($vo["title"]); ?></option><?php endforeach; endif; ?>
									    </select>
									</td>
									<td class="item-note" style="color:red;"></td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">操作类型 :</td>
									<td>
									    <select name="rzstatus" class="form-control input-10x">
										<option value="2"  <?php if(($data["rzstatus"]) == "2"): ?>selected<?php endif; ?>>通过认证</option>
										<option value="3"  <?php if(($data["rzstatus"]) == "3"): ?>selected<?php endif; ?>>驳回认证</option>
									</select></td>
									<td class="item-note" style="color:red;"></td>
								</tr>

								<input type="hidden" name="uid"  value="<?php echo ($info["id"]); ?>" />
								
								<tr class="controls">
									<td class="item-label"></td>
									<td>
										<div class="form-item cf">
											<button class="btn submit-btn ajax-post" id="submit" type="submit" target-form="form-horizontal">确定</button>
											<a class="btn btn-return" href="<?php echo ($_SERVER['HTTP_REFERER']); ?>">返 回</a>
											<?php if(!empty($data["id"])): ?><input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/><?php endif; ?>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	//提交表单
	$('#submit').click(function () {
		$('#form').submit();
	});
</script>


	<script type="text/javascript" charset="utf-8">
		//导航高亮
		highlight_subnav("<?php echo U('User/index');?>");
	</script>