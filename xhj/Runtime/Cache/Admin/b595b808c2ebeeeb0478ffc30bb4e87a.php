<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>后台 | 管理中心 - ADMIN EX</title>
	<!-- Loading Bootstrap -->
	<link rel="stylesheet" type="text/css" href="/jiaoyi-project/xhj/Public/Admin/css/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/jiaoyi-project/xhj/Public/Admin/css/base.css" media="all">
	<link rel="stylesheet" type="text/css" href="/jiaoyi-project/xhj/Public/Admin/css/common.css" media="all">
	<link rel="stylesheet" type="text/css" href="/jiaoyi-project/xhj/Public/Admin/css/module.css">
	<link rel="stylesheet" type="text/css" href="/jiaoyi-project/xhj/Public/Admin/css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="/jiaoyi-project/xhj/Public/Admin/css/default_color.css" media="all">
	<script type="text/javascript" src="/jiaoyi-project/xhj/Public/Admin/js/jquery.min.js"></script>
	<script type="text/javascript" src="/jiaoyi-project/xhj/Public/layer/layer.js"></script>
	<link rel="stylesheet" type="text/css" href="/jiaoyi-project/xhj/Public/Admin/css/flat-ui.css">
	<script src="/jiaoyi-project/xhj/Public/Admin/js/flat-ui.min.js"></script>
	<script src="/jiaoyi-project/xhj/Public/Admin/js/application.js"></script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="navbar-header">
		<a class="navbar-brand" style="width:200px;text-align:center;background-color:#3c434d;" href="<?php echo U('Index/index');?>">
			<img src="/jiaoyi-project/xhj/Public/Admin/ecshe_img/logo_text.png" />
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
				<a class="dropdown-toggle" title="打开前台" href="/jiaoyi-project/xhj/" target="_blank">
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
<link href="/jiaoyi-project/xhj/Public/Admin/index_css/style.css" rel="stylesheet">
<link href="/jiaoyi-project/xhj/Public/Admin/index_js/morris.js-0.4.3/morris.css" rel="stylesheet">
<script src="/jiaoyi-project/xhj/Public/Admin/index_js/morris.js-0.4.3/morris.min.js" type="text/javascript"></script>
<script src="/jiaoyi-project/xhj/Public/Admin/index_js/morris.js-0.4.3/raphael-min.js" type="text/javascript"></script>
<div id="main-content">
    <div id="top-alert" class="fixed alert alert-error" style="display: none;">
        <button class="close fixed" style="margin-top: 4px;">&times;</button>
        <div class="alert-content">警告内容</div>
    </div>
    <section class="wrapper">
        <!--state overview start-->
        <div class="row state-overview">
           <style>
			   .panel-heading{text-align: center;font-size: 18px;}
			   .symbol{width:30%!important;}
			   .state-overview .value {width:70%!important;}
			</style>
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol">
                        <i class="glyphicon glyphicon-user" style="color: #4acea1;"></i>
                    </div>
                    <div class="value">
                        <h1 class="count" style="font-size: 24px;"><?php echo ($alluser); ?> </h1>

                        <p>注册总人数（人）</p>
                    </div>
                </section>
            </div>
            
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol">
                        <i class="glyphicon glyphicon-th" style="color: #fa4b4c;"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count2" style="font-size: 24px;"><?php echo ($allhy); ?> </h1>

                        <p>秒合约未平仓（条）</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol">
                        <i class="glyphicon glyphicon-transfer" style="color: #ffdc3a;"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count3" style="font-size: 24px;"><?php echo ($bball); ?></h1>

                        <p>币币交易额度（USDT）</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol">
                        <i class="glyphicon glyphicon-tasks" style="color: #4b9afa;"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count4" style="font-size: 24px;"><?php echo ($allkj); ?> </h1>

                        <p>全网有效矿机总数（台）</p>
                    </div>
                </section>
            </div>
        </div>
        
        <div class="row state-overview">
           <style>
			   .panel-heading{text-align: center;font-size: 18px;}
			</style>
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol">
                        <i class="glyphicon glyphicon-gift" style="color: #4acea1;"></i>
                    </div>
                    <div class="value">
                        <h1 class="count" style="font-size: 24px;"><?php echo ($allissue); ?></h1>

                        <p>认购记录数（条）</p>
                    </div>
                </section>
            </div>
            
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol">
                        <i class="glyphicon glyphicon-save" style="color: #fa4b4c;"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count2" style="font-size: 24px;"><?php echo ($allcz); ?></h1>

                        <p>充值总量（USDT）</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol">
                        <i class="glyphicon glyphicon-open" style="color: #ffdc3a;"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count3" style="font-size: 24px;"><?php echo ($alltx); ?></h1>

                        <p>提币总量（USDT）</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol">
                        <i class="glyphicon glyphicon-check" style="color: #4b9afa;"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count4" style="font-size: 24px;"><?php echo ($allline); ?></h1>

                        <p>今日访客量（人）</p>
                    </div>
                </section>
            </div>
        </div>
        

        <div id="morris">
            <div class="row">
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            用户注册报表(30天)
                        </header>
                        <div class="panel-body">
                            <div id="hero-bar" class="graph"></div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            充值/提现 统计图(30天)
                        </header>
                        <div class="panel-body">
                            <div id="hero-graph" class="graph"></div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    var Script = function () {
        $(function () {
            show_cztx(<?php echo ($cztx); ?>);
            show_reg(<?php echo ($reg); ?>);

            //系统 充值/提现 统计图
            function show_cztx(data) {
                Morris.Line({
                    element: 'hero-graph',
                    data: data,
                    xkey: 'date',
                    ykeys: [
                        'charge',
                        'withdraw'
                    ],
                    labels: [
                        '充值',
                        '提现'
                    ],
                    lineColors: [
                        '#8075c4',
                        '#6883a3'
                    ],
                    xLabels: 'day',
                    postUnits: ' '
                });
            }

            //用户注册报表
            function show_reg(data) {
                Morris.Bar({
                    element: 'hero-bar',
                    data: data,
                    xkey: 'date',
                    ykeys: ['sum'],
                    labels: ['人数'],
                    barRatio: 0.4,
                    xLabelAngle: 35,
                    hideHover: 'auto',
                    barColors: ['#6883a3'],
                    xLabels: 'day',
                    postUnits: ' 人',
                });
            }

            //市场交易报表
            function show_trance(data) {
                Morris.Area({
                    element: 'hero-area',
                    data: [

                    ],

                    xkey: 'date',
                    ykeys: [

                    ],
                    labels: [

                    ],
                    hideHover: 'auto',
                    lineWidth: 1,
                    pointSize: 10,
                    lineColors: [
                        '#4a8bc2',
                        '#ff6c60',
                        '#a9d86e'
                    ],
                    fillOpacity: 0.5,
                    smooth: true,
                    postUnits: ' 元',
                    xLabels: 'day',
                });
            }

        });

    }();
</script>
<script type="text/javascript" src="/jiaoyi-project/xhj/Public/Admin/js/common.js"></script>
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
 <div style="display:none">
  

  </div>

    <script type="text/javascript" charset="utf-8">
        //导航高亮
        highlight_subnav("<?php echo U('Index/index');?>");
    </script>