<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/base.css" />
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/nologed.css" />
	<title><?php echo ($webname); ?></title>
	<style>
		::-webkit-input-placeholder { /* WebKit browsers */
		  color: #b5b5b5;
		  font-size: 18px;
		}

		::-moz-placeholder { /* Mozilla Firefox 19+ */
		  color: #b5b5b5;
		  font-size: 18px;
		}
		input:focus{background:#F5F5F5;outline: 1px solid #F5F5F5;}
		a:hover,a:link,a:visited,a:active{color:#FCD535;text-decoration:none;}
		.lbox{width:100%;height:60px;}
		.lbox_l{width:60%;height:60px;line-height:60px;text-align:left;float:left;}
		.lbox_r{width:40%;height:60px;line-height:60px;text-align:right;float:left;}

		.flag {
			width: 25px;
			margin-top: -5px;
		}
		.lbox {
			border-bottom: 1px solid #333;
		}
		.fcy {
			color: #0052fe;
		}
	</style>
  </head>
  <body>
	<div class="container-fluid ctbox">
		<div class="no_header">
			<div class="fl bhalf allhg txtl" style="line-height:50px;margin-left: 20px;">
				<i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 26px;"></i>
			</div>

		</div>

		<div class="no_content">

			<div class="no_title">
				<span class="title_txt fch"><?php echo L('语言选择');?></span>
			</div>

			<div class="no_inbox">



				<a href="<?php echo U('Index/index?Lang=en-us');?>">
				<div class="lbox">
					<div class="lbox_l">
						<img  src="/Public/Static/img/flag/en.png" class="flag" />
						<span class="fcc fzmmm" style="font-size:18px;">&nbsp;&nbsp;English</span>
					</div>
					<div class="lbox_r lang_2">
						<?php if(LANG_SET=='en-us'){?>
						<i class="bi bi-check2 fcy fw" style="font-size: 26px;"></i>
						<?php }?>
					</div>
				</div>
				</a>

				<!--法语-->
				<a href="<?php echo U('Index/index?Lang=fr-fr');?>">
				<div class="lbox">
					<div class="lbox_l">
						<img  src="/Public/Static/img/flag/fr.png" class="flag" />
						<span class="fcc fzmmm" style="font-size:18px;">&nbsp;&nbsp;Français</span>
					</div>

					<div class="lbox_r lang_3">
						<?php if(LANG_SET=='fr-fr'){?>
						<i class="bi bi-check2 fcy fw" style="font-size: 26px;"></i>
						<?php }?>
					</div>
				</div>
				</a>
				<!--德语-->
				<a href="<?php echo U('Index/index?Lang=de-de');?>">
				<div class="lbox">
					<div class="lbox_l">
						<img  src="/Public/Static/img/flag/de.png" class="flag" />
						<span class="fcc fzmmm" style="font-size:18px;">&nbsp;&nbsp;Deutsch</span>
					</div>
					<div class="lbox_r lang_2">
						<?php if(LANG_SET=='de-de'){?>
						<i class="bi bi-check2 fcy fw" style="font-size: 26px;"></i>
						<?php }?>
					</div>

				</div>
				</a>

				<!--意大利语-->
				<a href="<?php echo U('Index/index?Lang=it-it');?>">
				<div class="lbox">
					<div class="lbox_l">
						<img  src="/Public/Static/img/flag/it.png" class="flag" />
						<span class="fcc fzmmm" style="font-size:18px;">&nbsp;&nbsp;Italiano</span>
					</div>

					<div class="lbox_r lang_2">
						<?php if(LANG_SET=='it-it'){?>
						<i class="bi bi-check2 fcy fw" style="font-size: 26px;"></i>
						<?php }?>
					</div>

				</div>
				</a>
				<!--韩语-->
				<a href="<?php echo U('Index/index?Lang=ko-kr');?>">
				<div class="lbox">
					<div class="lbox_l">
						<img  src="/Public/Static/img/flag/kr.png" class="flag" />
						<span class="fcc fzmmm" style="font-size:18px;">&nbsp;&nbsp;한국어</span>
					</div>
					<div class="lbox_r lang_2">
						<?php if(LANG_SET=='ko-kr'){?>
						<i class="bi bi-check2 fcy fw" style="font-size: 26px;"></i>
						<?php }?>
					</div>
				</div>
				</a>
				<!--土尔其语-->
				<a href="<?php echo U('Index/index?Lang=tr-tr');?>">
				<div class="lbox">
					<div class="lbox_l">
						<img  src="/Public/Static/img/flag/tr.png" class="flag" />
						<span class="fcc fzmmm" style="font-size:18px;">&nbsp;&nbsp;Türk</span>
					</div>

					<div class="lbox_r lang_2">
						<?php if(LANG_SET=='tr-tr'){?>
						<i class="bi bi-check2 fcy fw" style="font-size: 26px;"></i>
						<?php }?>
					</div>
				</div>
				</a>

				<!--日语-->
				<a href="<?php echo U('Index/index?Lang=ja-jp');?>">
				<div class="lbox">
					<div class="lbox_l">
						<img  src="/Public/Static/img/flag/jp.png" class="flag" />
						<span class="fcc fzmmm" style="font-size:18px;">&nbsp;&nbsp;日本語</span>
					</div>

						<div class="lbox_r lang_2">
							<?php if(LANG_SET=='ja-jp'){?>
							<i class="bi bi-check2 fcy fw" style="font-size: 26px;"></i>
							<?php }?>
						</div>

				</div>
				</a>

				<a href="<?php echo U('Index/index?Lang=zh-cn');?>">
				<div class="lbox">
					<div class="lbox_l">
						<img  src="/Public/Static/img/flag/tw.png" class="flag" />
						<span class="fcc fzmmm" style="font-size:18px;">&nbsp;&nbsp;中文繁体</span>
					</div>

						<div class="lbox_r lang_1">
							<?php if(LANG_SET=='zh-cn'){?>
							<i class="bi bi-check2 fcy fw" style="font-size: 26px;"></i>
							<?php }?>
						</div>

				</div>
				</a>
			</div>

		</div>

	</div>
</body>

<body>
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">
    function goback(){
        window.history.go(-1);
    }
</script>
</html>