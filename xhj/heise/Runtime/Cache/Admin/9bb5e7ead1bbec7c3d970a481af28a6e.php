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
<style>
	.hoh td.item-label,.hoh td.item-note{
		height:80px;line-height:80px;
	}
	.gezibg {
		padding:5px;width:168px;background:url('/Public/Admin/ecshe_img/imgbg.png');
	}
</style>

<div id="main-content">
	<div id="top-alert" class="fixed alert alert-error" style="display: none;">
		<button class="close fixed" style="margin-top: 4px;">&times;</button>
		<div class="alert-content">警告内容</div>
	</div>
	<div id="main" class="main">
		<div class="main-title-h">
			<span class="h1-title">网站基本配置</span>
		</div>
		<div class="tab-wrap">
			<div class="tab-content">
				<form id="form" action="<?php echo U('Config/edit');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
					<div id="tab" class="tab-pane in tab">
						<div class="form-item cf">
							<table>

								<tr class="controls">
									<td class="item-label">网站名称 :</td>
									<td>
										<input type="text" class="form-control input-10x" name="webname" value="<?php echo ($data['webname']); ?>">
									</td>
									<td class="item-note"></td>
								</tr>
								<tr class="controls">
									<td class="item-label">网站标题 :</td>
									<td>
										<input type="text" class="form-control input-10x" name="webtitle" value="<?php echo ($data['webtitle']); ?>">
									</td>
									<td class="item-note"></td>
								</tr>
								
								
								<tr class="controls hoh">
									<td class="item-label">手机端Logo图片 :</td>
									<td>
										<div id="addpicContainer" class="gezibg">
											<?php if(!empty($data["weblogo"])): ?><img id="up_img" onclick="getElementById('weblogo_box').click()" style="cursor:pointer;max-height:62px;" title="手机端Logo图片" alt="点击添加图片" src="/Upload/public/<?php echo ($data["weblogo"]); ?>">
											<?php else: ?>
												<!--没有图片显示默认图片-->
												<img id="up_img" onclick="getElementById('weblogo_box').click()" style="cursor:pointer;max-height:62px;" title="手机端Logo图片" alt="点击添加图片" src="/Public/Admin/images/addimg.png"><?php endif; ?>
											<input type="hidden" id="weblogo_deputy" name="weblogo" value="<?php echo ($data["weblogo"]); ?>">
											<input type="file" id="weblogo_box" style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" value=""/>
										</div>
									</td>
									<td class="item-note" style="color:red;">* 200*200px</td>
								</tr>
								
								
								<tr class="controls hoh">
									<td class="item-label">PC端logo图片 :</td>
									<td>
										<div id="addpicContainer" class="gezibg">
											<?php if(!empty($data["waplogo"])): ?><img id="up_img_waplogobox" onclick="getElementById('waplogo_box').click()" style="cursor:pointer;max-height:62px;" title="PC端logo图片" alt="点击添加图片" src="/Upload/public/<?php echo ($data["waplogo"]); ?>">
											<?php else: ?>
												<!--没有图片显示默认图片-->
												<img id="up_img_waplogobox" onclick="getElementById('waplogo_box').click()" style="cursor:pointer;max-height:62px;" title="PC端logo图片" alt="点击添加图片" src="/Public/Admin/images/addimg.png"><?php endif; ?>
											<input type="hidden" id="waplogo_deputy" name="waplogo" value="<?php echo ($data["waplogo"]); ?>">
											<input type="file" id="waplogo_box" style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" value=""/>
										</div>
									</td>
									<td class="item-note" style="color:red;">* 200*200px</td>
								</tr>
								
								<tr class="controls hoh">
									<td class="item-label">手机端轮播图1 :</td>
									<td>
										<div id="addpicContainer" class="gezibg">
											<?php if(!empty($data["websildea"])): ?><img id="up_img_websildea" onclick="getElementById('websildea_box').click()" style="cursor:pointer;max-height:62px;" title="手机端轮播图1" alt="点击添加图片" src="/Upload/public/<?php echo ($data["websildea"]); ?>">
											<?php else: ?>
												<!--没有图片显示默认图片-->
												<img id="up_img_websildea" onclick="getElementById('websildea_box').click()" style="cursor:pointer;max-height:62px;" title="手机端轮播图1" alt="点击添加图片" src="/Public/Admin/images/addimg.png"><?php endif; ?>
											<input type="hidden" id="websildea_deputy" name="websildea" value="<?php echo ($data["websildea"]); ?>">
											<input type="file" id="websildea_box" style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" value=""/>
										</div>
									</td>
									<td class="item-note" style="color:red;">* 700*350px</td>
								</tr>
								
								<tr class="controls hoh">
									<td class="item-label">手机端轮播图2 :</td>
									<td>
										<div id="addpicContainer" class="gezibg">
											<?php if(!empty($data["websildeb"])): ?><img id="up_img_websildeb" onclick="getElementById('websildeb_box').click()" style="cursor:pointer;max-height:62px;" title="手机端轮播图2" alt="点击添加图片" src="/Upload/public/<?php echo ($data["websildeb"]); ?>">
											<?php else: ?>
												<!--没有图片显示默认图片-->
												<img id="up_img_websildeb" onclick="getElementById('websildeb_box').click()" style="cursor:pointer;max-height:62px;" title="手机端轮播图2" alt="点击添加图片" src="/Public/Admin/images/addimg.png"><?php endif; ?>
											<input type="hidden" id="websildeb_deputy" name="websildeb" value="<?php echo ($data["websildeb"]); ?>">
											<input type="file" id="websildeb_box" style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" value=""/>
										</div>
									</td>
									<td class="item-note" style="color:red;">* 700*350px</td>
								</tr>
								
								<tr class="controls hoh">
									<td class="item-label">手机端轮播图3 :</td>
									<td>
										<div id="addpicContainer" class="gezibg">
											<?php if(!empty($data["websildec"])): ?><img id="up_img_websildec" onclick="getElementById('websildec_box').click()" style="cursor:pointer;max-height:62px;" title="手机端轮播图3" alt="点击添加图片" src="/Upload/public/<?php echo ($data["websildec"]); ?>">
											<?php else: ?>
												<!--没有图片显示默认图片-->
												<img id="up_img_websildec" onclick="getElementById('websildec_box').click()" style="cursor:pointer;max-height:62px;" title="手机端轮播图3" alt="点击添加图片" src="/Public/Admin/images/addimg.png"><?php endif; ?>
											<input type="hidden" id="websildec_deputy" name="websildec" value="<?php echo ($data["websildec"]); ?>">
											<input type="file" id="websildec_box" style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" value=""/>
										</div>
									</td>
									<td class="item-note" style="color:red;">* 700*350px</td>
								</tr>
								
								<tr class="controls hoh">
									<td class="item-label">手机端新币认购图片 :</td>
									<td>
										<div id="addpicContainer" class="gezibg">
											<?php if(!empty($data["webissue"])): ?><img id="up_img_webissue" onclick="getElementById('webissue_box').click()" style="cursor:pointer;max-height:62px;" title="手机端新币认购图片" alt="点击添加图片" src="/Upload/public/<?php echo ($data["webissue"]); ?>">
											<?php else: ?>
												<!--没有图片显示默认图片-->
												<img id="up_img_webissue" onclick="getElementById('webissue_box').click()" style="cursor:pointer;max-height:62px;" title="手机端新币认购图片" alt="点击添加图片" src="/Public/Admin/images/addimg.png"><?php endif; ?>
											<input type="hidden" id="webissue_deputy" name="webissue" value="<?php echo ($data["webissue"]); ?>">
											<input type="file" id="webissue_box" style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" value=""/>
										</div>
									</td>
									<td class="item-note" style="color:red;">* 700*350px</td>
								</tr>
								
								<tr class="controls hoh">
									<td class="item-label">手机端矿机首页图片 :</td>
									<td>
										<div id="addpicContainer" class="gezibg">
											<?php if(!empty($data["webkj"])): ?><img id="up_img_webkj" onclick="getElementById('webkj_box').click()" style="cursor:pointer;max-height:62px;" title="手机端矿机首页图片" alt="点击添加图片" src="/Upload/public/<?php echo ($data["webkj"]); ?>">
											<?php else: ?>
												<!--没有图片显示默认图片-->
												<img id="up_img_webkj" onclick="getElementById('webkj_box').click()" style="cursor:pointer;max-height:62px;" title="手机端矿机首页图片" alt="点击添加图片" src="/Public/Admin/images/addimg.png"><?php endif; ?>
											<input type="hidden" id="webkj_deputy" name="webkj" value="<?php echo ($data["webkj"]); ?>">
											<input type="file" id="webkj_box" style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" value=""/>
										</div>
									</td>
									<td class="item-note" style="color:red;">* 700*350px</td>
								</tr>
								
								<tr class="controls hoh">
									<td class="item-label">PC端轮播图1 :</td>
									<td>
										<div id="addpicContainer" class="gezibg">
											<?php if(!empty($data["wapsildea"])): ?><img id="up_img_wapsildea" onclick="getElementById('wapsildea_box').click()" style="cursor:pointer;max-height:62px;" title="PC端轮播图1" alt="点击添加图片" src="/Upload/public/<?php echo ($data["wapsildea"]); ?>">
											<?php else: ?>
												<!--没有图片显示默认图片-->
												<img id="up_img_wapsildea" onclick="getElementById('wapsildea_box').click()" style="cursor:pointer;max-height:62px;" title="PC端轮播图1" alt="点击添加图片" src="/Public/Admin/images/addimg.png"><?php endif; ?>
											<input type="hidden" id="wapsildea_deputy" name="wapsildea" value="<?php echo ($data["wapsildea"]); ?>">
											<input type="file" id="wapsildea_box" style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" value=""/>
										</div>
									</td>
									<td class="item-note" style="color:red;">* 700*350px</td>
								</tr>
								
								<tr class="controls hoh">
									<td class="item-label">PC端轮播图2 :</td>
									<td>
										<div id="addpicContainer" class="gezibg">
											<?php if(!empty($data["wapsildeb"])): ?><img id="up_img_wapsildeb" onclick="getElementById('wapsildeb_box').click()" style="cursor:pointer;max-height:62px;" title="PC端轮播图2" alt="点击添加图片" src="/Upload/public/<?php echo ($data["wapsildeb"]); ?>">
											<?php else: ?>
												<!--没有图片显示默认图片-->
												<img id="up_img_wapsildeb" onclick="getElementById('wapsildeb_box').click()" style="cursor:pointer;max-height:62px;" title="PC端轮播图2" alt="点击添加图片" src="/Public/Admin/images/addimg.png"><?php endif; ?>
											<input type="hidden" id="wapsildeb_deputy" name="wapsildeb" value="<?php echo ($data["wapsildeb"]); ?>">
											<input type="file" id="wapsildeb_box" style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" value=""/>
										</div>
									</td>
									<td class="item-note" style="color:red;">* 700*350px</td>
								</tr>
								
								<tr class="controls hoh">
									<td class="item-label">PC端轮播图3 :</td>
									<td>
										<div id="addpicContainer" class="gezibg">
											<?php if(!empty($data["wapsildec"])): ?><img id="up_img_wapsildec" onclick="getElementById('wapsildec_box').click()" style="cursor:pointer;max-height:62px;" title="PC端轮播图3" alt="点击添加图片" src="/Upload/public/<?php echo ($data["wapsildec"]); ?>">
											<?php else: ?>
												<!--没有图片显示默认图片-->
												<img id="up_img_wapsildec" onclick="getElementById('wapsildec_box').click()" style="cursor:pointer;max-height:62px;" title="PC端轮播图3" alt="点击添加图片" src="/Public/Admin/images/addimg.png"><?php endif; ?>
											<input type="hidden" id="wapsildec_deputy" name="wapsildec" value="<?php echo ($data["wapsildec"]); ?>">
											<input type="file" id="wapsildec_box" style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" value=""/>
										</div>
									</td>
									<td class="item-note" style="color:red;">* 700*350px</td>
								</tr>
								
								<tr class="controls hoh">
									<td class="item-label">PC端轮播图4 :</td>
									<td>
										<div id="addpicContainer" class="gezibg">
											<?php if(!empty($data["wapsilded"])): ?><img id="up_img_wapsilded" onclick="getElementById('wapsilded_box').click()" style="cursor:pointer;max-height:62px;" title="PC端轮播图3" alt="点击添加图片" src="/Upload/public/<?php echo ($data["wapsilded"]); ?>">
											<?php else: ?>
												<!--没有图片显示默认图片-->
												<img id="up_img_wapsilded" onclick="getElementById('wapsilded_box').click()" style="cursor:pointer;max-height:62px;" title="PC端轮播图3" alt="点击添加图片" src="/Public/Admin/images/addimg.png"><?php endif; ?>
											<input type="hidden" id="wapsilded_deputy" name="wapsilded" value="<?php echo ($data["wapsilded"]); ?>">
											<input type="file" id="wapsilded_box" style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" value=""/>
										</div>
									</td>
									<td class="item-note" style="color:red;">* 700*350px</td>
								</tr>
								
								<tr class="controls hoh">
									<td class="item-label">PC端新币认购图片 :</td>
									<td>
										<div id="addpicContainer" class="gezibg">
											<?php if(!empty($data["wapissue"])): ?><img id="up_img_wapissue" onclick="getElementById('wapissue_box').click()" style="cursor:pointer;max-height:62px;" title="PC端新币认购图片" alt="点击添加图片" src="/Upload/public/<?php echo ($data["wapissue"]); ?>">
											<?php else: ?>
												<!--没有图片显示默认图片-->
												<img id="up_img_wapissue" onclick="getElementById('wapissue_box').click()" style="cursor:pointer;max-height:62px;" title="PC端新币认购图片" alt="点击添加图片" src="/Public/Admin/images/addimg.png"><?php endif; ?>
											<input type="hidden" id="wapissue_deputy" name="wapissue" value="<?php echo ($data["wapissue"]); ?>">
											<input type="file" id="wapissue_box" style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" value=""/>
										</div>
									</td>
									<td class="item-note" style="color:red;">* 700*350px</td>
								</tr>
								
								<tr class="controls hoh">
									<td class="item-label">PC端矿机首页图片 :</td>
									<td>
										<div id="addpicContainer" class="gezibg">
											<?php if(!empty($data["wapkj"])): ?><img id="up_img_wapkj" onclick="getElementById('wapkj_box').click()" style="cursor:pointer;max-height:62px;" title="PC端矿机首页图片" alt="点击添加图片" src="/Upload/public/<?php echo ($data["wapkj"]); ?>">
											<?php else: ?>
												<!--没有图片显示默认图片-->
												<img id="up_img_wapkj" onclick="getElementById('wapkj_box').click()" style="cursor:pointer;max-height:62px;" title="PC端矿机首页图片" alt="点击添加图片" src="/Public/Admin/images/addimg.png"><?php endif; ?>
											<input type="hidden" id="wapkj_deputy" name="wapkj" value="<?php echo ($data["wapkj"]); ?>">
											<input type="file" id="wapkj_box" style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" value=""/>
										</div>
									</td>
									<td class="item-note" style="color:red;">* 700*350px</td>
								</tr>
								
								<tr class="controls hoh">
									<td class="item-label">手机端推荐页面logo图片 :</td>
									<td>
										<div id="addpicContainer" class="gezibg">
											<?php if(!empty($data["webtjimgs"])): ?><img id="up_img_webtjimgs" onclick="getElementById('webtjimgs_box').click()" style="cursor:pointer;max-height:62px;" title="手机端推荐页面logo图片" alt="点击添加图片" src="/Upload/public/<?php echo ($data["webtjimgs"]); ?>">
											<?php else: ?>
												<!--没有图片显示默认图片-->
												<img id="up_img_webtjimgs" onclick="getElementById('webtjimgs_box').click()" style="cursor:pointer;max-height:62px;" title="手机端推荐页面logo图片" alt="点击添加图片" src="/Public/Admin/images/addimg.png"><?php endif; ?>
											<input type="hidden" id="webtjimgs_deputy" name="webtjimgs" value="<?php echo ($data["webtjimgs"]); ?>">
											<input type="file" id="webtjimgs_box" style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" value=""/>
										</div>
									</td>
									<td class="item-note" style="color:red;">* 200*200px</td>
								</tr>
								
								<tr class="controls hoh">
									<td class="item-label">手机端推荐页面logo图片 :</td>
									<td>
										<div id="addpicContainer" class="gezibg">
											<?php if(!empty($data["waptjimgs"])): ?><img id="up_img_waptjimgs" onclick="getElementById('waptjimgs_box').click()" style="cursor:pointer;max-height:62px;" title="手机端推荐页面logo图片" alt="点击添加图片" src="/Upload/public/<?php echo ($data["waptjimgs"]); ?>">
											<?php else: ?>
												<!--没有图片显示默认图片-->
												<img id="up_img_waptjimgs" onclick="getElementById('waptjimgs_box').click()" style="cursor:pointer;max-height:62px;" title="手机端推荐页面logo图片" alt="点击添加图片" src="/Public/Admin/images/addimg.png"><?php endif; ?>
											<input type="hidden" id="waptjimgs_deputy" name="waptjimgs" value="<?php echo ($data["waptjimgs"]); ?>">
											<input type="file" id="waptjimgs_box" style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" value=""/>
										</div>
									</td>
									<td class="item-note" style="color:red;">* 200*200px</td>
								</tr>
								
								
								
								
								<tr class="controls">
									<td class="item-label">网站状态 :</td>
									<td>
										<select name="webswitch" class="form-control  input-10x">
											<option value="1" <?php if(($data['web_close']) == "1"): ?>selected<?php endif; ?>>正常</option>
											<option value="2" <?php if(($data['web_close']) == "0"): ?>selected<?php endif; ?>>禁止访问</option>
										</select>
									</td>
									<td class="item-note"></td>
								</tr>

								<tr class="controls">
									<td class="item-label"></td>
									<td>
										<div class="form-item cf">
											<button class="btn submit-btn ajax-post" target-form="form-horizontal" id="submit" type="submit">提交</button>
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
					$('#submit').click(function () {
						$('#form').submit();
					});
				</script>
			</div>
		</div>
	</div>
</div>

<script charset="utf-8" src="/Public/kindeditorv4/kindeditor-all-min.js"></script>
<script charset="utf-8" src="/Public/kindeditorv4//lang/zh-CN.js"></script>
<script type="text/javascript">
    /** PC端推荐页面logo图片 **/
	$(document).ready(function () {
		//响应文件添加成功事件
		$("#waptjimgs_box").change(function () {
			//创建FormData对象
			var data = new FormData();
			//为FormData对象添加数据
			$.each($('#waptjimgs_box')[0].files, function (i, file) {
				data.append('upload_file' + i, file);
			});
			//发送数据
			$.ajax({
				url: '/Admin/Config/image',
				type: 'POST',
				data: data,
				cache: false,
				contentType: false,		//不可缺参数
				processData: false,		//不可缺参数
				success: function (data) {
					if (data) {
						$('#up_img_waptjimgs').attr("src", '/Upload/public/' + $.trim(data));
						$('#waptjimgs_deputy').val($.trim(data));
						$('#up_img_waptjimgs').show();
					}
				},
				error: function () {
					alert('上传出错');
					$(".loading").hide();	//加载失败移除加载图片
				}
			});

		});
	})
    /** 手机端推荐页面logo图片 **/
	$(document).ready(function () {
		//响应文件添加成功事件
		$("#webtjimgs_box").change(function () {
			//创建FormData对象
			var data = new FormData();
			//为FormData对象添加数据
			$.each($('#webtjimgs_box')[0].files, function (i, file) {
				data.append('upload_file' + i, file);
			});
			//发送数据
			$.ajax({
				url: '/Admin/Config/image',
				type: 'POST',
				data: data,
				cache: false,
				contentType: false,		//不可缺参数
				processData: false,		//不可缺参数
				success: function (data) {
					if (data) {
						$('#up_img_webtjimgs').attr("src", '/Upload/public/' + $.trim(data));
						$('#webtjimgs_deputy').val($.trim(data));
						$('#up_img_webtjimgs').show();
					}
				},
				error: function () {
					alert('上传出错');
					$(".loading").hide();	//加载失败移除加载图片
				}
			});

		});
	})
    /** PC端矿机首页图片 **/
	$(document).ready(function () {
		//响应文件添加成功事件
		$("#wapkj_box").change(function () {
			//创建FormData对象
			var data = new FormData();
			//为FormData对象添加数据
			$.each($('#wapkj_box')[0].files, function (i, file) {
				data.append('upload_file' + i, file);
			});
			//发送数据
			$.ajax({
				url: '/Admin/Config/image',
				type: 'POST',
				data: data,
				cache: false,
				contentType: false,		//不可缺参数
				processData: false,		//不可缺参数
				success: function (data) {
					if (data) {
						$('#up_img_wapkj').attr("src", '/Upload/public/' + $.trim(data));
						$('#wapkj_deputy').val($.trim(data));
						$('#up_img_wapkj').show();
					}
				},
				error: function () {
					alert('上传出错');
					$(".loading").hide();	//加载失败移除加载图片
				}
			});

		});
	})
    /** PC端新币认购图片 **/
	$(document).ready(function () {
		//响应文件添加成功事件
		$("#wapissue_box").change(function () {
			//创建FormData对象
			var data = new FormData();
			//为FormData对象添加数据
			$.each($('#wapissue_box')[0].files, function (i, file) {
				data.append('upload_file' + i, file);
			});
			//发送数据
			$.ajax({
				url: '/Admin/Config/image',
				type: 'POST',
				data: data,
				cache: false,
				contentType: false,		//不可缺参数
				processData: false,		//不可缺参数
				success: function (data) {
					if (data) {
						$('#up_img_wapissue').attr("src", '/Upload/public/' + $.trim(data));
						$('#wapissue_deputy').val($.trim(data));
						$('#up_img_wapissue').show();
					}
				},
				error: function () {
					alert('上传出错');
					$(".loading").hide();	//加载失败移除加载图片
				}
			});

		});
	})
	
	    /** PC端轮播图4 **/
	$(document).ready(function () {
		//响应文件添加成功事件
		$("#wapsilded_box").change(function () {
			//创建FormData对象
			var data = new FormData();
			//为FormData对象添加数据
			$.each($('#wapsilded_box')[0].files, function (i, file) {
				data.append('upload_file' + i, file);
			});
			//发送数据
			$.ajax({
				url: '/Admin/Config/image',
				type: 'POST',
				data: data,
				cache: false,
				contentType: false,		//不可缺参数
				processData: false,		//不可缺参数
				success: function (data) {
					if (data) {
						$('#up_img_wapsilded').attr("src", '/Upload/public/' + $.trim(data));
						$('#wapsilded_deputy').val($.trim(data));
						$('#up_img_wapsilded').show();
					}
				},
				error: function () {
					alert('上传出错');
					$(".loading").hide();	//加载失败移除加载图片
				}
			});

		});
	})
	
    /** PC端轮播图3 **/
	$(document).ready(function () {
		//响应文件添加成功事件
		$("#wapsildec_box").change(function () {
			//创建FormData对象
			var data = new FormData();
			//为FormData对象添加数据
			$.each($('#wapsildec_box')[0].files, function (i, file) {
				data.append('upload_file' + i, file);
			});
			//发送数据
			$.ajax({
				url: '/Admin/Config/image',
				type: 'POST',
				data: data,
				cache: false,
				contentType: false,		//不可缺参数
				processData: false,		//不可缺参数
				success: function (data) {
					if (data) {
						$('#up_img_wapsildec').attr("src", '/Upload/public/' + $.trim(data));
						$('#wapsildec_deputy').val($.trim(data));
						$('#up_img_wapsildec').show();
					}
				},
				error: function () {
					alert('上传出错');
					$(".loading").hide();	//加载失败移除加载图片
				}
			});

		});
	})
     /** PC端轮播图2 **/
	$(document).ready(function () {
		//响应文件添加成功事件
		$("#wapsildeb_box").change(function () {
			//创建FormData对象
			var data = new FormData();
			//为FormData对象添加数据
			$.each($('#wapsildeb_box')[0].files, function (i, file) {
				data.append('upload_file' + i, file);
			});
			//发送数据
			$.ajax({
				url: '/Admin/Config/image',
				type: 'POST',
				data: data,
				cache: false,
				contentType: false,		//不可缺参数
				processData: false,		//不可缺参数
				success: function (data) {
					if (data) {
						$('#up_img_wapsildeb').attr("src", '/Upload/public/' + $.trim(data));
						$('#wapsildeb_deputy').val($.trim(data));
						$('#up_img_wapsildeb').show();
					}
				},
				error: function () {
					alert('上传出错');
					$(".loading").hide();	//加载失败移除加载图片
				}
			});

		});
	})
     /** PC端轮播图1 **/
	$(document).ready(function () {
		//响应文件添加成功事件
		$("#wapsildea_box").change(function () {
			//创建FormData对象
			var data = new FormData();
			//为FormData对象添加数据
			$.each($('#wapsildea_box')[0].files, function (i, file) {
				data.append('upload_file' + i, file);
			});
			//发送数据
			$.ajax({
				url: '/Admin/Config/image',
				type: 'POST',
				data: data,
				cache: false,
				contentType: false,		//不可缺参数
				processData: false,		//不可缺参数
				success: function (data) {
					if (data) {
						$('#up_img_wapsildea').attr("src", '/Upload/public/' + $.trim(data));
						$('#wapsildea_deputy').val($.trim(data));
						$('#up_img_wapsildea').show();
					}
				},
				error: function () {
					alert('上传出错');
					$(".loading").hide();	//加载失败移除加载图片
				}
			});

		});
	})
    /** 手机端矿机首页图片 **/
	$(document).ready(function () {
		//响应文件添加成功事件
		$("#webkj_box").change(function () {
			//创建FormData对象
			var data = new FormData();
			//为FormData对象添加数据
			$.each($('#webkj_box')[0].files, function (i, file) {
				data.append('upload_file' + i, file);
			});
			//发送数据
			$.ajax({
				url: '/Admin/Config/image',
				type: 'POST',
				data: data,
				cache: false,
				contentType: false,		//不可缺参数
				processData: false,		//不可缺参数
				success: function (data) {
					if (data) {
						$('#up_img_webkj').attr("src", '/Upload/public/' + $.trim(data));
						$('#webkj_deputy').val($.trim(data));
						$('#up_img_webkj').show();
					}
				},
				error: function () {
					alert('上传出错');
					$(".loading").hide();	//加载失败移除加载图片
				}
			});

		});
	})
    /** 手机端新币认购图片 **/
	$(document).ready(function () {
		//响应文件添加成功事件
		$("#webissue_box").change(function () {
			//创建FormData对象
			var data = new FormData();
			//为FormData对象添加数据
			$.each($('#webissue_box')[0].files, function (i, file) {
				data.append('upload_file' + i, file);
			});
			//发送数据
			$.ajax({
				url: '/Admin/Config/image',
				type: 'POST',
				data: data,
				cache: false,
				contentType: false,		//不可缺参数
				processData: false,		//不可缺参数
				success: function (data) {
					if (data) {
						$('#up_img_webissue').attr("src", '/Upload/public/' + $.trim(data));
						$('#webissue_deputy').val($.trim(data));
						$('#up_img_webissue').show();
					}
				},
				error: function () {
					alert('上传出错');
					$(".loading").hide();	//加载失败移除加载图片
				}
			});

		});
	})
    /** 手机端轮播图3上传 **/
	$(document).ready(function () {
		//响应文件添加成功事件
		$("#websildec_box").change(function () {
			//创建FormData对象
			var data = new FormData();
			//为FormData对象添加数据
			$.each($('#websildec_box')[0].files, function (i, file) {
				data.append('upload_file' + i, file);
			});
			//发送数据
			$.ajax({
				url: '/Admin/Config/image',
				type: 'POST',
				data: data,
				cache: false,
				contentType: false,		//不可缺参数
				processData: false,		//不可缺参数
				success: function (data) {
					if (data) {
						$('#up_img_websildec').attr("src", '/Upload/public/' + $.trim(data));
						$('#websildec_deputy').val($.trim(data));
						$('#up_img_websildec').show();
					}
				},
				error: function () {
					alert('上传出错');
					$(".loading").hide();	//加载失败移除加载图片
				}
			});

		});
	})
    /** 手机端轮播图2上传 **/
	$(document).ready(function () {
		//响应文件添加成功事件
		$("#websildeb_box").change(function () {
			//创建FormData对象
			var data = new FormData();
			//为FormData对象添加数据
			$.each($('#websildeb_box')[0].files, function (i, file) {
				data.append('upload_file' + i, file);
			});
			//发送数据
			$.ajax({
				url: '/Admin/Config/image',
				type: 'POST',
				data: data,
				cache: false,
				contentType: false,		//不可缺参数
				processData: false,		//不可缺参数
				success: function (data) {
					if (data) {
						$('#up_img_websildeb').attr("src", '/Upload/public/' + $.trim(data));
						$('#websildeb_deputy').val($.trim(data));
						$('#up_img_websildeb').show();
					}
				},
				error: function () {
					alert('上传出错');
					$(".loading").hide();	//加载失败移除加载图片
				}
			});

		});
	})
    /** 手机端轮播图1上传 **/
	$(document).ready(function () {
		//响应文件添加成功事件
		$("#websildea_box").change(function () {
			//创建FormData对象
			var data = new FormData();
			//为FormData对象添加数据
			$.each($('#websildea_box')[0].files, function (i, file) {
				data.append('upload_file' + i, file);
			});
			//发送数据
			$.ajax({
				url: '/Admin/Config/image',
				type: 'POST',
				data: data,
				cache: false,
				contentType: false,		//不可缺参数
				processData: false,		//不可缺参数
				success: function (data) {
					if (data) {
						$('#up_img_websildea').attr("src", '/Upload/public/' + $.trim(data));
						$('#websildea_deputy').val($.trim(data));
						$('#up_img_websildea').show();
					}
				},
				error: function () {
					alert('上传出错');
					$(".loading").hide();	//加载失败移除加载图片
				}
			});

		});
	});

    /** PC端网站logo上传 **/
	$(document).ready(function () {
		//响应文件添加成功事件
		$("#waplogo_box").change(function () {
			//创建FormData对象
			var data = new FormData();
			//为FormData对象添加数据
			$.each($('#waplogo_box')[0].files, function (i, file) {
				data.append('upload_file' + i, file);
			});
			//发送数据
			$.ajax({
				url: '/Admin/Config/image',
				type: 'POST',
				data: data,
				cache: false,
				contentType: false,		//不可缺参数
				processData: false,		//不可缺参数
				success: function (data) {
					if (data) {
						$('#up_img_waplogobox').attr("src", '/Upload/public/' + $.trim(data));
						$('#waplogo_deputy').val($.trim(data));
						$('#up_img_waplogobox').show();
					}
				},
				error: function () {
					alert('上传出错');
					$(".loading").hide();	//加载失败移除加载图片
				}
			});

		});
	});
	
	/** 手机端网站logo上传 **/
	$(document).ready(function () {
		//响应文件添加成功事件
		$("#weblogo_box").change(function () {
			//创建FormData对象
			var data = new FormData();
			//为FormData对象添加数据
			$.each($('#weblogo_box')[0].files, function (i, file) {
				data.append('upload_file' + i, file);
			});
			//发送数据
			$.ajax({
				url: '/Admin/Config/image',
				type: 'POST',
				data: data,
				cache: false,
				contentType: false,		//不可缺参数
				processData: false,		//不可缺参数
				success: function (data) {
					if (data) {
						$('#up_img').attr("src", '/Upload/public/' + $.trim(data));
						$('#weblogo_deputy').val($.trim(data));
						$('#up_img').show();
					}
				},
				error: function () {
					alert('上传出错');
					$(".loading").hide();	//加载失败移除加载图片
				}
			});

		});
	});

</script>

<script type="text/javascript">
    // KindEditor.ready(function(K) {
    //     window.editor = K.create('#web_reg');
    // });
	var editor;
	KindEditor.ready(function (K) {
		editor = K.create('textarea[name="web_reg"]', {
			width: '500px',
			height: '100px',
			allowImageUpload: true,
			items: [
				'source', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
				'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
				'insertunorderedlist', '|', 'emoticons', 'link', 'fullscreen'],
			afterBlur: function () {

                editor.sync();
			}
		});
		editors = K.create('textarea[name="en_web_reg"]', {
			width: '500px',
			height: '100px',
			allowPreviewEmoticons: false,
			allowImageUpload: true,
			items: [
				'source', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
				'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
				'insertunorderedlist', '|', 'emoticons', 'link', 'fullscreen'],
			afterBlur: function () {
				this.sync();
			}
		});
	});
</script>
<script type="text/javascript" src="//jiaoyi-project/xhj/Public/Admin/js/common.js"></script>
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