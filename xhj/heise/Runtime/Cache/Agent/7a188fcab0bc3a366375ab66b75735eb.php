<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="renderer" content="webkit">
	<title><?php echo L('代理系统');?></title>
	<link rel="stylesheet" href="/Public/Admin/ecshe_css/login.css" />
</head>
<body style="background:#f5f5f5;">
<div style="width:100%;height:120px;margin-top:50px;text-align:center;">
    <img src="/jiaoyi-project/xhj/Public/Admin/ecshe_img/alogn.png" style="height: 120px;"/>
</div>
<div class="logsbox" style="margin-top:25px;background:#fff;">
	<h2 class="tc" style="margin-bottom:35px;color:#8a8a8a;"><?php echo L('代理系统');?></h2>
	<form action="<?php echo U('Agent/Login/index');?>" method="post" id="forms">
	    
		<div class="form-group" style="background:#f5f5f5;">
			<div class="inputs" style="background:#f5f5f5;border: 1px solid #f5f5f5f5;" >
				<i class="icon-login-user"></i>
				<input type="text"  style="background:#f5f5f5;color:#000;" name="username" autocomplete="off" placeholder="<?php echo L('输入代理账号');?>">
			</div>
		</div>

		<div class="form-group">
			<div class="inputs" style="background:#f5f5f5;border: 1px solid #f5f5f5f5;" >
				<i class="icon-login-pwd"></i>
				<input type="password"  style="background:#f5f5f5;color:#000;" name="password" autocomplete="off" placeholder="<?php echo L('请输入密码');?>">
			</div>
		</div>

		<div class="form-group">
			<div class="inputs" style="width:60%; background:#f5f5f5;border: 1px solid #f5f5f5f5;">
				<i class="icon-login-verifycode"></i>
				<input type="text" name="verify" autocomplete="off" placeholder="<?php echo L('请输入验证码');?>" id="login_verify" style="width:75%;background:#f5f5f5;color:#000;">
			</div>
			<div class="imgcode">
				<img src="<?php echo U('Verify/code');?>" onclick="this.src=this.src+'?t='+Math.random()" title="<?php echo L('换一张');?>" id="verifycode">
			</div>
		</div>

		<div class="form-button" style="margin-top:20px;">
			<button class="btn btn-primary login-btn" type="submit">
				<span class="in"><i class="icon-loading"></i><?php echo L('登录中');?> ...</span> <span class="on"><?php echo L('登录');?></span>
			</button>
		</div>
		<div class="check-tips"></div>
	</form>
</div>

<script type="text/javascript" src="/Public/Admin/js/jquery.min.js"></script>
<script type="text/javascript">
	/* 登陆表单获取焦点变色 */
	$("#forms").on("focus", "input", function () {
		$(this).closest('.inputs').addClass('focus');
	}).on("blur", "input", function () {
		$(this).closest('.inputs').removeClass('focus');
	});

	//表单提交
	$(document).ajaxStart(function () {
		$("button:submit").addClass("log-in").attr("disabled", true);
	}).ajaxStop(function () {
		$("button:submit").removeClass("log-in").attr("disabled", false);
	});

	$("form").submit(function () {
		var self = $(this);
		$.post(self.attr("action"), self.serialize(), success, "json");
		return false;

		function success(data) {
			if (data.status) {
				window.location.href = data.url;
			} else {
				self.find(".check-tips").text(data.info);
				//刷新验证码
				$("#login_verify").val('');
				$('#verifycode').click();
			}
		}
	});
</script>
</body>
</html>