<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
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
	input:focus{background:#ebecf0;outline: 1px solid #ebecf0;}
	a:hover,a:link,a:visited,a:active{color:#000000;text-decoration:none;}
	.no_header{position: fixed;z-index: 9999;background:#fff;padding:0px 10px;top:0px;box-shadow: 0 2px 10px 0 rgb(0 0 0 / 10%);}
	.txtl{line-height:50px;width:10%;}
	.linecontent{width:100%;min-height:100vh;background:#fff;padding:10px;}
	.blockline{height:200px; margin: 0px auto; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;}
	.listbox{width:100%;min-height:300px;}
	.listcontent{width:100%;height:60px;border-bottom:1px solid #f5f5f5;}
	</style>
  </head>
  <body>
	<div class="container-fluid " style="padding:0px;width:100vw;">
		<div class="no_header">
			<div class="fl allhg txtl">
				<i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 24px;"></i>
			</div>
			<div class="fl allhg" id="centerbox" style="width:80%;text-align:center;line-height:50px;">
				<span class="fcc fzmmm"><?php echo L('矿机收益列表');?></span>
			</div>
			<div class="fr allhg txtr" style="line-height:50px;width:10%;">
			</div>
		</div>
        
        <div class="linecontent">
            <div style="width:100%;height:60px;"></div>

            
            <div class="listbox">
                <?php if(empty($list)): ?><div style="width:100%;height:100px;line-height:100px;text-align:center;">
                    <span class="fzmm fcc"><?php echo L('暂时没有收益记录');?></span>
                </div>
                <?php else: ?>
                <?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="listcontent">
                    <div style="width:100%;height:30px;line-height:35px;">
                        <span class="fzmm fcc"><?php echo ($vo["ktitle"]); ?></span>
                    </div>
                    <div style="width:100%;">
                        <div style="width:50%;height:30px;line-height:20px;float:left;">
                            <span class="fcy" style="font-size:16px;font-weight:bold;">+ <?php echo ($vo["num"]); ?></span>
                        </div>
                        <div style="width:50%;height:30px;line-height:20px;float:left;text-align:right;">
                            <span class="fzmm fcc"><?php echo ($vo["day"]); ?></span>
                        </div>
                    </div>
                </div><?php endforeach; endif; endif; ?>
                
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