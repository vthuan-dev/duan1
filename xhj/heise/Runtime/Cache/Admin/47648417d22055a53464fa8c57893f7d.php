<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>后台 | 管理中心 - ADMIN EX</title>
	<!-- Loading Bootstrap -->
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
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="navbar-header">
		<a class="navbar-brand" style="width:200px;text-align:center;background-color:#3c434d;" href="<?php echo U('Index/index');?>">
			<img src="/Public/Admin/ecshe_img/logo_text.png" />
		</a>
	</div>
	<div class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
			<!-- 主导航 -->
			<?php if(is_array($__MENU__["main"])): $i = 0; $__LIST__ = $__MENU__["main"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li <?php if(($menu["class"]) == "current"): ?>class="active"<?php endif; ?> > 
					<a href="<?php echo (U($menu["url"])); ?>">
						<?php echo ($menu["title"]); ?> 
					</a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<ul class="nav navbar-nav navbar-rights" style="margin-right:10px;">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					 <?php echo session('admin_username');?><b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="<?php echo U('User/setpwd');?>">
							<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> 修改密码 
						</a>
					</li>
					<li class="center">
						<a href="javascript:void(0);" onclick="lockscreen()">
							<span class="glyphicon glyphicon-lock" aria-hidden="true"></span> 锁屏休息 
						</a>
					</li>
					<li class="dividers"></li>
					<li>
						<a href="<?php echo U('Login/loginout');?>">
							<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> 退出后台 
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="<?php echo U('Tools/delcache');?>" class="dropdown-toggle" title="清除缓存">
					<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				</a>
			</li>
			<li>
				<a class="dropdown-toggle" title="打开前台" href="/" target="_blank">
					<span class="glyphicon glyphicon-share" aria-hidden="true"></span>
				</a>
			</li>
		</ul>
	</div>
</div>
<!-- 边栏 -->
<div class="sidebar">
	<!-- 子导航 -->
	
		<div id="subnav" class="subnav" style="max-height: 94%;overflow-x: hidden;overflow-y: auto;">
			<?php if(!empty($_extra_menu)): ?> <?php echo extra_menu($_extra_menu,$__MENU__); endif; ?>
			<?php if(is_array($__MENU__["child"])): $i = 0; $__LIST__ = $__MENU__["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_menu): $mod = ($i % 2 );++$i;?><!-- 子导航 -->
				<?php if(!empty($sub_menu)): if(!empty($key)): ?><h3><i class="icon icon-unfold"></i><?php echo ($key); ?></h3><?php endif; ?>
					<ul class="side-sub-menu">
						<?php if(is_array($sub_menu)): $i = 0; $__LIST__ = $sub_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li>
								<a class="item" href="<?php echo (U($menu["url"])); ?>">
									<?php if(empty($menu["ico_name"])): ?><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
										<?php else: ?>
										<span class="glyphicon glyphicon-<?php echo ($menu["ico_name"]); ?>" aria-hidden="true"></span><?php endif; ?>
									<?php echo ($menu["title"]); ?>
								</a>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul><?php endif; ?>
				<!-- /子导航 --><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	
	<!-- /子导航 -->
</div>
<!-- /边栏 -->
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



<?php if(($versionUp) == "1"): ?><script type="text/javascript" charset="utf-8">
		/**顶部警告栏*/
		var top_alert = $('#top-alerta');
		top_alert.find('.close').on('click', function () {
			top_alert.removeClass('block').slideUp(200);
			// content.animate({paddingTop:'-=55'},200);
		});
	</script><?php endif; ?>

<div id="main-content">

	<div id="top-alert" class="fixed alert alert-error" style="display: none;">
		<button class="close fixed" style="margin-top: 4px;">&times;</button>
		<div class="alert-content">警告内容</div>
	</div>

	<div id="main" class="main">
		<div class="main-title-h">
			<span class="h1-title">系统参数设置</span>
		</div>

		<div class="tab-wrap">
			<div class="tab-content">
				<form id="form" action="<?php echo U('Config/qitaEdit');?>" method="post" class="form-horizontal" >
					<div id="tab" class="tab-pane in tab">
						<div class="form-item cf">
							<table>
								<tr class="controls">
									<td class="item-label">短信发送邮箱 :</td>
									<td><input type="text" class="form-control input-10x" name="smsemail" value="<?php echo ($data['smsemail']); ?>"></td>
									<td class="item-note" style="color:red;">*发送邮箱验证码的邮箱账号</td>
								</tr>
								<tr class="controls">
									<td class="item-label">邮箱授权码 :</td>
									<td><input type="text" class="form-control input-10x" name="emailcode" value="<?php echo ($data['emailcode']); ?>"></td>
									<td class="item-note" style="color:red;">*发送邮箱验证码的邮箱授权码</td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">短信验证码模板 :</td>
									<td><input type="text" class="form-control input-10x" name="smstemple" value="<?php echo ($data['smstemple']); ?>"></td>
									<td class="item-note" style="color:red;">*短信验证码模板</td>
								</tr>

 								<tr class="controls">
									<td class="item-label">推荐页面推广语 :</td>
									<td><input type="text" class="form-control input-10x" name="tgtext" value="<?php echo ($data['tgtext']); ?>"></td>
									<td class="item-note" style="color:red;">*推荐页面的推广语，不要多于40个字</td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">官方客服邮箱 :</td>
									<td><input type="text" class="form-control input-10x" name="gfemail" value="<?php echo ($data['gfemail']); ?>"></td>
									<td class="item-note" style="color:red;">*官方客服邮箱</td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">PC端下方文字 :</td>
									<td><input type="text" class="form-control input-10x" name="footertext" value="<?php echo ($data['footertext']); ?>"></td>
									<td class="item-note" style="color:red;">*显示在PC端LOGO下的文字</td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">注册赠送体验金 :</td>
									<td><input type="text" class="form-control input-10x" name="tymoney" value="<?php echo ($data['tymoney']); ?>"></td>
									<td class="item-note" style="color:red;">*注册赠送的合约体验金</td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">网站注册开关 :</td>
									<td>
										<select name="regswitch" class="form-control  input-10x">
											<option value="1" <?php if(($data['regswitch']) == "1"): ?>selected<?php endif; ?>>开放</option>
											<option value="2" <?php if(($data['regswitch']) == "2"): ?>selected<?php endif; ?>>关闭</option>
										</select>
									</td>
									<td class="item-note" style="color:red;">*关闭时禁止注册</td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">提币总开关 :</td>
									<td>
										<select name="tbswitch" class="form-control  input-10x">
											<option value="1" <?php if(($data['tbswitch']) == "1"): ?>selected<?php endif; ?>>开放</option>
											<option value="2" <?php if(($data['tbswitch']) == "2"): ?>selected<?php endif; ?>>禁止</option>
										</select>
									</td>
									<td class="item-note" style="color:red;">*关闭时禁止所有币种提币</td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">注册是否赠送体验矿机 :</td>
									<td>
										<select name="regjl" class="form-control  input-10x">
											<option value="1" <?php if(($data['regjl']) == "1"): ?>selected<?php endif; ?>>赠送</option>
											<option value="2" <?php if(($data['regjl']) == "2"): ?>selected<?php endif; ?>>不送</option>
										</select>
									</td>
									<td class="item-note" style="color:red;">*关闭时禁止所有币种提币</td>
								</tr>


								<tr class="controls">
									<td class="item-label"></td>
									<td>
										<div class="form-item cf">
											<button class= "btn submit-btn ajax-post"  target-form="form-horizontal" id="submit" type="submit">提交</button>
											<a class="btn btn-return" href="<?php echo ($_SERVER['HTTP_REFERER']); ?>">返 回</a>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</form>

				<script type="text/javascript">
					//提交表单
					$('#submit').click(function(){
						$('#form').submit();
					});
				</script>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="/Public/kindeditor/kindeditor-min.js"></script>

<script type="text/javascript">
	$(function(){
		//主导航高亮
		$('.config-box').addClass('current');
		//边导航高亮
		$('.config-contact').addClass('current');
	});
</script>

<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript">
	+function(){
		//$("select").select2({dropdownCssClass: 'dropdown-inverse'});//下拉条样式
		layer.config({
			extend: 'extend/layer.ext.js'
		});

		var $window = $(window), $subnav = $("#subnav"), url;
		$window.resize(function(){
			//$("#main").css("min-height", $window.height() - 90);
		}).resize();

		/* 左边菜单高亮 */
		url = window.location.pathname + window.location.search;

		url = url.replace(/(\/(p)\/\d+)|(&p=\d+)|(\/(id)\/\d+)|(&id=\d+)|(\/(group)\/\d+)|(&group=\d+)/, "");
		$subnav.find("a[href='" + url + "']").parent().addClass("current");

		/* 左边菜单显示收起 */
		$("#subnav").on("click", "h3", function(){
			var $this = $(this);
			$this.find(".icon").toggleClass("icon-fold");
			$this.next().slideToggle("fast").siblings(".side-sub-menu:visible").
			prev("h3").find("i").addClass("icon-fold").end().end().hide();
		});

		$("#subnav h3 a").click(function(e){e.stopPropagation()});

		/* 头部管理员菜单 */
		$(".user-bar").mouseenter(function(){
			var userMenu = $(this).children(".user-menu ");
			userMenu.removeClass("hidden");
			clearTimeout(userMenu.data("timeout"));
		}).mouseleave(function(){
			var userMenu = $(this).children(".user-menu");
			userMenu.data("timeout") && clearTimeout(userMenu.data("timeout"));
			userMenu.data("timeout", setTimeout(function(){userMenu.addClass("hidden")}, 100));
		});

		/* 表单获取焦点变色 */
		$("form").on("focus", "input", function(){
			$(this).addClass('focus');
		}).on("blur","input",function(){
			$(this).removeClass('focus');
		});
		$("form").on("focus", "textarea", function(){
			$(this).closest('label').addClass('focus');
		}).on("blur","textarea",function(){
			$(this).closest('label').removeClass('focus');
		});

		// 导航栏超出窗口高度后的模拟滚动条
		var sHeight = $(".sidebar").height();
		var subHeight  = $(".subnav").height();
		var diff = subHeight - sHeight; //250
		var sub = $(".subnav");

	}();

	//导航高亮
	function highlight_subnav(url){
		$('.side-sub-menu').find('a[href="'+url+'"]').closest('li').addClass('current');
	}

	function lockscreen(){
		layer.prompt({
			title: '输入一个锁屏密码',
			formType: 1,
			btn: ['锁屏','取消'] //按钮
		}, function(pass){
			if(!pass){
				layer.msg('需要输入一个密码!');
			}else{
				$.post("<?php echo U('Login/lockScreen');?>",{pass:pass},function(data){
					layer.msg(data.info);
					layer.close();
					if(data.status){
						window.location.href = "<?php echo U('Login/lockScreen');?>";
					}
				},'json');
			}
		});
	}
</script>
<div style="display:none;">

</div>
</body>
</html>