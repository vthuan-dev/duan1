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
			<span class="h1-title">添加矿机/编辑矿机</span>
		</div>
		<div class="tab-wrap">
			<div class="tab-content">
				<form id="form" action="<?php echo U('Kuangm/addkj');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
					<div id="tab" class="tab-pane in tab">
						<div class="form-item cf">
							<table>

								<tr class="controls">
									<td class="item-label">矿机名称 :</td>
									<td style="width:300px;">
										<input type="text" class="form-control"  style="width:300px;" name="title" value="<?php echo ($data['title']); ?>">
									</td>
									<td class="item-note" style="color:red;">*矿机名称</td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">购买类型 :</td>
									<td style="width:300px;">
										<select type="text" class="form-control" style="width:300px;" name="rtype">
										    <option value="1" <?php if($data["rtype"] == 1): ?>selected<?php endif; ?>>出售矿机</option>
										    <option value="2" <?php if($data["rtype"] == 2): ?>selected<?php endif; ?>>赠送矿机</option>
										</select>
									</td>
									<td class="item-note"  style="color:red;">*表示购买和收益都共享</td>
								</tr>
								
								
								<tr class="controls">
									<td class="item-label">矿机类型 :</td>
									<td style="width:300px;">
										<select type="text" class="form-control" style="width:300px;" name="type">
										    <option value="1" <?php if($data["type"] == 1): ?>selected<?php endif; ?>>独资</option>
										    <option value="2" <?php if($data["type"] == 2): ?>selected<?php endif; ?>>共享</option>
										</select>
									</td>
									<td class="item-note"  style="color:red;">*表示购买和收益都共享</td>
								</tr>
								
								
								<tr class="controls">
									<td class="item-label">分享比例 :</td>
									<td style="width:300px;">
										<input type="text" class="form-control"  style="width:300px;" name="sharebl" value="<?php echo ($data['sharebl']); ?>">
									</td>
									<td class="item-note" style="color:red;">*独资请留空，共享请填写分享比例，如：50|50，表示各50%；</td>
								</tr>

								<?php if($data["type"] == 2): ?><tr class="controls">
									<td class="item-label">共享识别码 :</td>
									<td style="width:300px;">
										<input type="text" class="form-control"  style="width:300px;" readonly="readonly" value="<?php echo ($data['sharecode']); ?>">
									</td>
									<td class="item-note" style="color:red;">*共享机购买，复制识别码给好友购买</td>
								</tr><?php endif; ?>

								
								<tr class="controls">
									<td class="item-label">矿机详情 :</td>
									<td>
										<textarea class="form-control" rows="3" cols="26" name="content" style="border: 1px solid #dedede;width: 300px;"><?php echo ($data['content']); ?></textarea>
									</td>
									<td class="item-note"></td>
								</tr>
								
								<tr class="controls hoh">
									<td class="item-label">矿机图片 :</td>
									<td>
										<div id="addpicContainer" class="gezibg">
											<?php if(!empty($data["imgs"])): ?><img id="up_img" onclick="getElementById('inputfile').click()" style="cursor:pointer;max-height:62px;" title="点击添加图片" alt="点击添加图片" src="/Upload/public/<?php echo ($data["imgs"]); ?>">
											<?php else: ?>
												<!--没有图片显示默认图片-->
												<img id="up_img" onclick="getElementById('inputfile').click()" style="cursor:pointer;max-height:62px;" title="点击添加图片" alt="点击添加图片" src="/Public/Admin/images/addimg.png"><?php endif; ?>
											<input type="hidden" id="img" name="imgs" value="<?php echo ($data["imgs"]); ?>">
											<input type="file" id="inputfile" style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" value=""/>
										</div>
									</td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">产出币种 :</td>
									<td style="width:300px;">
										<select type="text" class="form-control" style="width:300px;" name="outcoin">
										    <?php echo ($data["outcoin"]); ?>
										    <?php if(is_array($coind)): foreach($coind as $key=>$vo): ?><option value="<?php echo ($vo["name"]); ?>" <?php if(trim($data['outcoin']) == $vo['name']){?>selected<?php }?>><?php echo ($vo["name"]); echo ($vo["title"]); ?></option><?php endforeach; endif; ?>
										</select>
									</td>
									<td class="item-note" style="color:red;">*产出币种,如是平台币，请选择按币量产出</td>
								</tr>

								<tr class="controls">
									<td class="item-label">日产量 :</td>
									<td style="width:300px;">
										<select type="text" class="form-control" style="width:140px;float:left;" name="outtype" >
										    <option value="1" <?php if($data["outtype"] == 1): ?>selected<?php endif; ?>>按产值</option>
										    <option value="2" <?php if($data["outtype"] == 2): ?>selected<?php endif; ?>>按币量</option>
										</select>
										<input type="text" class="form-control" style="width:140px;float:left;margin-left:20px;" name="dayoutnum" value="<?php echo ($data['dayoutnum']); ?>">
									</td>
									<td class="item-note" style="color:red;">*按产值是按USDT折合产值，产出币量随价格波动，按币量则是定量</td>
								</tr>
								
								
								<tr class="controls">
									<td class="item-label">矿机单价 :</td>
									<td style="width:300px;">
									    <input type="text" class="form-control" style="width:140px;float:left;;" name="pricenum" value="<?php echo ($data['pricenum']); ?>">
										<select type="text" class="form-control" style="width:140px;float:left;margin-left:20px" name="pricecoin">
										    <?php if(is_array($coind)): foreach($coind as $key=>$vo): ?><option value="<?php echo ($vo["name"]); ?>"<?php if(trim($data['pricecoin']) == $vo['name']){?>selected<?php }?>><?php echo ($vo["name"]); echo ($vo["title"]); ?></option><?php endforeach; endif; ?>
										</select>
									</td>
									<td class="item-note" style="color:red;">*矿机购买单价</td>
								</tr>

								<tr class="controls">
									<td class="item-label">购买上限 :</td>
									<td style="width:300px;">
										<input type="text" class="form-control"  style="width:300px;" name="buymax" value="<?php echo ($data['buymax']); ?>">
									</td>
									<td class="item-note" style="color:red;">*每个账号购买的上限</td>
								</tr>
								
								
								<tr class="controls">
									<td class="item-label">矿机周期 :</td>
									<td style="width:300px;">
										<input type="text" class="form-control"  style="width:300px;" name="cycle" value="<?php echo ($data['cycle']); ?>">
									</td>
									<td class="item-note" style="color:red;">*矿机到期周期</td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">矿机算力 :</td>
									<td style="width:300px;">
										<input type="text" class="form-control" style="width:300px;" name="suanl" value="<?php echo ($data['suanl']); ?>">
									</td>
									<td class="item-note" style="color:red;">*矿机算力</td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">矿机库存总量 :</td>
									<td style="width:300px;">
										<input type="text" class="form-control"  style="width:300px;" name="allnum" value="<?php echo ($data['allnum']); ?>">
									</td>
									<td class="item-note"></td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">预设出售量 :</td>
									<td style="width:300px;">
										<input type="text" class="form-control" style="width:300px;" name="ycnum" value="<?php echo ($data['ycnum']); ?>">
									</td>
									<td class="item-note"></td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">参与奖励币种 :</td>
									<td style="width:300px;">
										<select type="text" class="form-control" style="width:300px;" name="jlcoin">
										    <?php if(is_array($coind)): foreach($coind as $key=>$vo): ?><option value="<?php echo ($vo["name"]); ?>" <?php if(trim($data['jlcoin']) == $vo['name']){?>selected<?php }?>><?php echo ($vo["name"]); echo ($vo["title"]); ?></option><?php endforeach; endif; ?>
										</select>
									</td>
									<td class="item-note"></td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">参与奖励币量 :</td>
									<td style="width:300px;">
										<input type="text" class="form-control" style="width:300px;" name="jlnum" value="<?php echo ($data['jlnum']); ?>">
									</td>
									<td class="item-note"></td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">矿机状态 :</td>
									<td style="width:300px;">
										<select type="text" class="form-control" style="width:300px;" name="status" value="<?php echo ($data['status']); ?>">
										    <option value="1" <?php if($data["status"] == 1): ?>selected<?php endif; ?>>可用</option>
										    <option value="2" <?php if($data["status"] == 2): ?>selected<?php endif; ?>>禁用</option>
										</select>
									</td>
									<td class="item-note"></td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">产币冻结 :</td>
									<td style="width:300px;">
										<select type="text" class="form-control" style="width:300px;" name="djout" value="<?php echo ($data['djout']); ?>">
										    <option value="1" <?php if($data["djout"] == 1): ?>selected<?php endif; ?>>否</option>
										    <option value="2" <?php if($data["djout"] == 2): ?>selected<?php endif; ?>>是</option>
										</select>
									</td>
									<td class="item-note"></td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">产币冻结时间 :</td>
									<td style="width:300px;">
										<input type="text" class="form-control" style="width:300px;" name="djday" value="<?php echo ($data['djday']); ?>">
									</td>
									<td class="item-note" style="color:red;">*不冻结请留空，输入纯数字，表示天数！</td>
								</tr>
								
								
								<tr class="controls">
									<td class="item-label">申购要求 :</td>
									<td style="width:300px;">
										<select type="text" class="form-control" style="width:140px;float:left;" name="buyask" >
										    <option value="1" <?php if($data["buyask"] == 1): ?>selected<?php endif; ?>>按持币</option>
										    <option value="2" <?php if($data["buyask"] == 2): ?>selected<?php endif; ?>>按团队</option>
										</select>
										<input type="text" class="form-control" style="width:140px;float:left;margin-left:20px;" name="asknum" value="<?php echo ($data['asknum']); ?>">
									</td>
									<td class="item-note" style="color:red;">*按持币表示持有多少平台币，按团队表示推荐多会员</td>
								</tr>
								

	                            <input type="hidden" id="kid" name="kid" value="<?php echo ($data['id']); ?>"  />


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

<script type="text/javascript">
	/** 主LOGO上传 **/
	$(document).ready(function () {
		//响应文件添加成功事件
		$("#inputfile").change(function () {

			//创建FormData对象
			var data = new FormData();
			//为FormData对象添加数据
			$.each($('#inputfile')[0].files, function (i, file) {
				data.append('upload_file' + i, file);
			});

			//发送数据
			$.ajax({
				url: '/Admin/Kuangm/image',
				type: 'POST',
				data: data,
				cache: false,
				contentType: false,		//不可缺参数
				processData: false,		//不可缺参数
				success: function (data) {
					if (data) {
						$('#up_img').attr("src", '/Upload/public/' + $.trim(data));
						$('#img').val($.trim(data));
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

	<script type="text/javascript" charset="utf-8">
		//导航高亮
		highlight_subnav("<?php echo U('Kuangm/index');?>");
	</script>