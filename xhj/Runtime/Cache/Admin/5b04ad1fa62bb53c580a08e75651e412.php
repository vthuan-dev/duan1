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
<script type="text/javascript" src="/Public/layer/laydate/laydate.js"></script>
<div id="main-content">
	<div id="top-alert" class="fixed alert alert-error" style="display: none;">
		<button class="close fixed" style="margin-top: 4px;">&times;</button>
		<div class="alert-content">警告内容</div>
	</div>
	<div id="main" class="main">
		<div class="main-title-h">
			<span class="h1-title"><a href="<?php echo U('Issue/index');?>">认购配置</a> &gt;&gt;</span>
			<span class="h1-title"><?php if(empty($data)): ?>添加认购<?php else: ?>编辑认购<?php endif; ?></span>
		</div>
		<div class="tab-wrap">
			<div class="tab-content">
				<form id="form" action="<?php echo U('Issue/save');?>" method="post" class="form-horizontal">
					<div id="tab" class="tab-pane in tab">
						<div class="form-item cf">
							<table>
								<tr class="controls">
									<td class="item-label">认购标题 :</td>
									<td>
										<input type="text" class="form-control input-10x" name="name" value="<?php echo ($data["name"]); ?>">
									</td>
									<td class="item-note" style="color:red;">* 前台显示的标题</td>
								</tr>
								<tr class="controls">
									<td class="item-label">认购币种 :</td>
									<td>
										<select name="coinname" class="form-control input-10x">
											<?php if(is_array($clist)): $i = 0; $__LIST__ = $clist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v['name']); ?>" <?php if(($data['coinname']) == $v['name']): ?>selected<?php endif; ?>><?php echo ($v['title']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
										</select>
									</td>
									<td class="item-note" style="color:red;">* 认购的币种名称</td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">发行总量 :</td>
									<td>
										<input type="text" class="form-control input-10x" name="num" value="<?php echo ($data['num']*1); ?>">
									</td>
									<td class="item-note" style="color:red;">* 项目的发行总量</td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">预设认购总量 :</td>
									<td>
										<input type="text" class="form-control input-10x" name="ysnum" value="<?php echo ($data['ysnum']*1); ?>">
									</td>
									<td class="item-note" style="color:red;">*预设认购总量</td>
								</tr>
								
								<tr class="controls" style="border-top:1px dashed #d0d0d0;">
									<td class="item-label">支付币种 :</td>
									<td>
										<select name="buycoin" class="form-control input-10x">
											<?php if(is_array($paylist)): $i = 0; $__LIST__ = $paylist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v['name']); ?>" <?php if(($data['buycoin']) == $v['name']): ?>selected<?php endif; ?>><?php echo ($v['title']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
										</select>
									</td>
									<td class="item-note"  style="color:red;">* 用户购买使用的</td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">认购价格 :</td>
									<td>
										<input type="text" class="form-control input-10x" name="price" value="<?php echo ($data['price']*1); ?>">
									</td>
									<td class="item-note" style="color:red;">* 认购币的单价</td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">认购限量 :</td>
									<td>
										<input type="text" class="form-control input-10x" name="allmax" value="<?php echo ($data["allmax"]); ?>">
									</td>
									<td class="item-note"  style="color:red;">* 每个用户认购上限</td>
								</tr>
								
								<tr class="controls" style="border-top:1px dashed #d0d0d0;">
									<td class="item-label">单次最小数量 :</td>
									<td>
										<input type="text" class="form-control input-10x" name="min" value="<?php echo ($data['min']); ?>">
									</td>
									<td class="item-note" style="color:red;">* 每次购买最小数量</td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">单次最大数量 :</td>
									<td>
										<input type="text" class="form-control input-10x" name="max" value="<?php echo ($data['max']); ?>">
									</td>
									<td class="item-note" style="color:red;">* 每次购买最大数量</td>
								</tr>
								
								
								<tr class="controls" style="border-top:1px dashed #d0d0d0;">
									<td class="item-label">开启时间 :</td>
									<td>
										<input type="text" class="form-control input-10x" name="starttime" value="<?php echo ($data['starttime']); ?>" onclick="laydate({istime:true, format:'YYYY-MM-DD hh:mm:ss'})">
									</td>
									<td class="item-note" style="color:red;">* 开放认购的时间 </td>
								</tr>
								
								
								<tr class="controls">
									<td class="item-label">认购周期 :</td>
									<td>
										<input type="text" class="form-control input-10x" name="tian" value="<?php echo ($data['tian']); ?>">
									</td>
									<td class="item-note"  style="color:red;"> * 认购开放至结束的时间</td>
								</tr>
								
								
								<tr class="controls">
									<td class="item-label">冻结时间 :</td>
									<td>
										<input type="text" class="form-control input-10x" name="lockday" value="<?php echo ($data['lockday']); ?>">
									</td>
									<td class="item-note"  style="color:red;"> * 认购后认购币冻结时间，到期后自动释放到可用账户</td>
								</tr>

								<tr class="controls" style="border-top:1px dashed #d0d0d0;">
									<td class="item-label">推荐赠送币种 :</td>
									<td>
										<select name="jlcoin" class="form-control input-10x">
											<?php if(is_array($alllist)): $i = 0; $__LIST__ = $alllist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v['name']); ?>" <?php if(($data['jlcoin']) == $v['name']): ?>selected<?php endif; ?>><?php echo ($v['title']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
										</select>
									</td>
									<td class="item-note"  style="color:red;">*推荐人赠送的币种名称</td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">一代赠送比例 :</td>
									<td>
										<input type="text" class="form-control input-10x" name="one_jl" value="<?php echo ($data['one_jl']); ?>">
									</td>
									<td class="item-note"  style="color:red;">%</td>
								</tr>
								<tr class="controls">
									<td class="item-label">二代赠送比例 :</td>
									<td>
										<input type="text" class="form-control input-10x" name="two_jl" value="<?php echo ($data['two_jl']); ?>">
									</td>
									<td class="item-note"  style="color:red;">%</td>
								</tr>
								<tr class="controls">
									<td class="item-label">三代赠送比例 :</td>
									<td>
										<input type="text" class="form-control input-10x" name="three_jl" value="<?php echo ($data['three_jl']); ?>">
									</td>
									<td class="item-note"  style="color:red;">%</td>
								</tr>
								
								<tr class="controls" style="border-top:1px dashed #d0d0d0;">
									<td class="item-label">项目缩略图 :</td>
									<td>
										<div id="addpicContainer">
											<?php if(!empty($data["imgs"])): ?><img id="up_img" onclick="getElementById('inputfile').click()" style="cursor:pointer;max-width:200px;" title="点击添加图片" alt="点击添加图片" src="/Upload/public/<?php echo ($data["imgs"]); ?>">
												<?php else: ?>
												<img id="up_img" onclick="getElementById('inputfile').click()" style="cursor:pointer;max-width:200px;" title="点击添加图片" alt="点击添加图片" src="/Public/Admin/images/addimg.png"><?php endif; ?>
											<input type="hidden" id="imgs" name="imgs" value="<?php echo ($data["imgs"]); ?>">
											<input type="file" id="inputfile" style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" value=""/>
										</div>
									</td>
									<td class="item-note"  style="color:red;">* 图片尺寸 200px*200px</td>
								</tr>

								<tr class="controls">
									<td class="item-label">认购说明 :</td>
									<td><textarea name="content" class="form-control input-10x"><?php echo ($data["content"]); ?></textarea></td>
									<td class="item-note"  style="color:red;"></td>
								</tr>

								<tr class="controls">
									<td class="item-label">项目状态 :</td>
									<td>
										<select name="status" class="form-control input-10x">
											<option value="1" <?php if(($data["status"]) == "1"): ?>selected<?php endif; ?>>显示</option>
											<option value="2" <?php if(($data["status"]) == "2"): ?>selected<?php endif; ?>>隐藏</option>
										</select>
									</td>
									<td class="item-note" style="color:red;">* 项目显示状态</td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">认购状态 :</td>
									<td>
										<select name="state" class="form-control input-10x">
											<option value="1" <?php if(($data["state"]) == "1"): ?>selected<?php endif; ?>>开启</option>
											<option value="2" <?php if(($data["state"]) == "2"): ?>selected<?php endif; ?>>禁止</option>
										</select>
									</td>
									<td class="item-note" style="color:red;">* 项目认购状态</td>
								</tr>

                                <input type="hidden" id="id" name="id" value="<?php echo ($data["id"]); ?>" />
								<tr class="controls">
									<td class="item-label"></td>
									<td>
										<div class="form-item cf">
											<button class="btn submit-btn ajax-post" id="submit" type="submit" target-form="form-horizontal">提交</button>
											<a class="btn btn-return" href="<?php echo ($_SERVER['HTTP_REFERER']); ?>">返 回</a>
											<?php if(!empty($data["id"])): ?><input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/><?php endif; ?>
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
<script type="text/javascript" src="/Public/kindeditor/kindeditor-min.js"></script>
<script type="text/javascript">
	var editor;
	KindEditor.ready(function (K) {
		editor = K.create('textarea[name="content"]', {
			width: '500px',
			height: '250px',
			allowPreviewEmoticons: false,
			allowImageUpload: true,
			items: [
				'source', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
				'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
				'insertunorderedlist', '|', 'emoticons',  'link', 'fullscreen'],
			afterBlur: function () {
				this.sync();
			}
		});
	});

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
				url: '/Admin/Issue/issueimage',
				type: 'POST',
				data: data,
				cache: false,
				contentType: false,		//不可缺参数
				processData: false,		//不可缺参数
				success: function (data) {
					if (data) {
						$('#up_img').attr("src", '/Upload/public/' + data);
						$('#imgs').val(data);
						$('#up_img').show();
					}
				},
				error: function () {
					alert('上传出错');
					$(".loading").hide(); //加载失败移除加载图片
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
		highlight_subnav("<?php echo U('Issue/index');?>");
	</script>