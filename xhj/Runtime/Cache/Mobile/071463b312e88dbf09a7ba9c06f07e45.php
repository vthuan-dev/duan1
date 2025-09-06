<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN" style="background:#fff;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/base2.css" />
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/nologed.css" />
	<link rel="stylesheet" href="/Public/Static/Icoinfont/iconfont.css">
	<script src="/Public/Static/Icoinfont/iconfont.js"></script>
	<title><?php echo ($webname); ?></title>
	<style>
	    ::-webkit-input-placeholder {color: #b5b5b5;font-size: 12px;}
	    ::-moz-placeholder {color: #b5b5b5;font-size: 12px;}
	    input:focus{background:#f5f5f5;outline: 1px solid #f5f5f5;}
	    a:hover,a:link,a:visited,a:active{color:#000000;text-decoration:none;}
	    .no_header{position: fixed;z-index: 9999;padding:0px 10px;top:0px;line-height: 50px;background:#fff;}
	    .lbox{width:100%;height:50px;}
	    .lboxc{width:100%;padding:15px 0px;}
	    .lbox_l{width:20%;height:50px;line-height:50px;float:left;text-align:left;}
	    .lbox_r{width:80%;height:50px;line-height:50px;float:right;text-align:right;}
	    .infobox{width:100%;height:400px;padding:5px 20px;margin-top:50px;}
	    .infotbox{width:100%;height:50px;line-height:50px;border-bottom:1px solid #f5f5f5;}
	    .overflow{overflow: hidden;text-overflow:ellipsis;white-space: nowrap;width:100%;height:35px;line-height:35px;}
	</style>
</head>
<body style="background:#fff;">
	<div class="container-fluid " style="padding:0px;width:100vw;">
        <div class="no_header">
			<div class="fl allhg txtl">
				<i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 24px;"></i>
			</div>
			<div class="fr allhg txtr" style="line-height:50px;width:10%;"></div>
		</div>
		
		<div class="infobox">
		    <div class="infotbox">
		        <span class="fcy" style="font-size:24px;font-weight:bold;"><?php echo ($info["title"]); ?></span>
		    </div>
		    <?php if($info['imgs'] != ''){?>
		    <div style="width:100%;">
		       <img src="/Upload/article/<?php echo $info['imgs'];?>" style="width:100%;" />
		    </div>
		    <?php }?>
		    
		    
		    
		    <div class="lboxc">
		        <span><?php echo ($info["content"]); ?></span>
		    </div>


		    <div class="lbox">
		        <div class="lbox_l">
		            <span class="fcc fzmm"><?php echo L('时间');?></span>
		        </div>
		        <div class="lbox_r">
		            <span class="fch fzmm"><?php echo ($info["addtime"]); ?></span>
		        </div>
		    </div>
		    
		    
		    
		    
		</div>

	</div>	
</body>
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>

<script type="text/javascript">
    function goback(){
        window.history.go(-1);
    }
</script>
</html>