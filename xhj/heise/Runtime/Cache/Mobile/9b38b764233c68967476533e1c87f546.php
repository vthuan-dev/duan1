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
	.no_header{position: fixed;z-index: 9999;background:#fff;padding:0px 10px;top:0px;}
	.txtl{line-height:50px;width:10%;}
	.oreimgbox{width:100%;height:150px;margin-top:50px;}
	.btmbox{width:100%;height:60px;background:#f5f5f5;}
	.orebox{width:100%;margin:0px auto;background:#fff;margin-bottom:10px;box-shadow: 0 2px 10px 0 rgb(0 0 0 / 10%);padding: 10px;}
	.progress-bar{color: #000;background-color: #f3c420;}
	.progress{height:0.9rem;background-color: #f5f5f5;border-radius: .5rem;}
	.obbox{width:33.33%;height:60px;float:left;}
	.obbox_h{width:100%;height:30px;line-height:20px;}
	.issuebox{width:100%;height:500px;background:#f5f5f5;padding:10px 0px;}
	</style>
  </head>
  <body>
	<div class="container-fluid " style="padding:0px;width:100vw;">
		<div class="no_header">
		    <a href="<?php echo U('Trade/tradelist');?>">
			<div class="fl allhg txtl">
				<i class="bi bi-arrow-left fcc fw"  style="font-size: 24px;"></i>
			</div>
			</a>

			<div class="fl allhg" id="centerbox" style="width:80%;text-align:center;line-height:50px;">
				<span class="fcc fzmmm"><?php echo L('新币认购');?></span>
			</div>
            
            <a href="<?php echo U('Issue/issuelog');?>">
			<div class="fr allhg txtr" style="line-height:50px;width:10%;">
			    <i class="bi bi-funnel fcy" style="font-size:20px;"></i>
			</div>
			</a>
		</div>

		<div class="oreimgbox">
			<img src="/Upload/public/<?php echo ($webissue); ?>" class="d-block w-100" style="height:150px;" />
		</div>

        <!--认购项目列表-->
		<div id="zlbox" class="issuebox">
		    
		    <?php if(empty($list)): ?><div style="width:100%;height:200px;line-height:200px;text-align:center;">
		        <i class="bi bi-exclamation-circle fzmmm"></i>
		        <span class="fcc fzmmm"><?php echo L('暂时没有认购项目');?></span>
		    </div>
		    <?php else: ?>
		    <?php if(is_array($list)): foreach($list as $key=>$vo): ?><a href="<?php echo U('Issue/details');?>?id=<?php echo ($vo["id"]); ?>">
			<div class="orebox">
				<div style="width:100%;height:120px;">
					<div style="width:30%;height:120px;line-height: 120px;float:left;text-align: center;">
						<img src="/Upload/public/<?php echo ($vo["imgs"]); ?>" style="width:80%;"/>
					</div>
					<div style="width:70%;height:120px;float:left;padding:5px;">
						<p class="fzmmm fcc fw" style="margin-bottom:3px;"><?php echo ($vo["name"]); ?></p>
						<p class="fzmm fcc" style="margin-bottom:3px;"><?php echo L('认购币种');?>：<?php echo strtoupper($vo['coinname']);?></p>
						<p class="fzmm fcc" style="margin-bottom:3px;"><?php echo L('开始时间');?>：<?php echo ($vo["starttime"]); ?></p>
						<p class="fzmm fcc" style="margin-bottom:3px;"><?php echo L('结束时间');?>：<?php echo strtoupper($vo['finishtime']);?></p>
					</div>
				</div>
				<div style="width:100%;">
					<div class="progress">
					  <?php if(strtotime($vo['starttime']) <= time()){?>
					  <div class="progress-bar" role="progressbar" style="width:<?php echo ($vo['ysnum'] + $vo['sellnum']) / $vo['num'] * 100;?>%;" aria-valuenow="<?php echo ($vo['ysnum'] + $vo['sellnum']) / $vo['num'] * 100;?>" aria-valuemin="0" aria-valuemax="100"><?php echo ($vo['ysnum'] + $vo['sellnum']) / $vo['num'] * 100;?>%</div>
					  <?php }elseif(strtotime($vo['starttime']) > time()){?>
					  <div class="progress-bar" role="progressbar" style="width:0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
					  <?php }?>
					  
					</div>
				</div>
				<div style="width:100%;height:60px;margin-top:15px;padding:0px 15px;">
					<div class="obbox" style="width:40%;">
						<div class="obbox_h">
							<span class="fzmm fcc"><?php echo L('发行总量');?></span>
						</div>
						<div class="obbox_h">
							<span class="fzmm fcc"><?php echo ($vo["num"]); ?></span>
						</div>
					</div>
					<div class="obbox" style="width:30%;">
						<div class="obbox_h" style="text-align:center;">
							<span class="fzmm fcc"><?php echo L('认购单价');?></span>
						</div>
						<div class="obbox_h" style="text-align:center;">
							<span class="fzmm fcc"><?php echo ($vo["price"]); ?> <?php echo ($vo["buycoin"]); ?></span>
						</div>
					</div>
					<div class="obbox" style="width:30%;">
						<div class="obbox_h" style="text-align:right;">
							<span class="fzmm fcc"><?php echo L('锁仓时间');?></span>
						</div>
						<div class="obbox_h" style="text-align:right;">
                            <span class="fzmm fcc"><?php echo ($vo["lockday"]); ?> <?php echo L('天');?></span>
						</div>
					</div>
				</div>
			</div>
			</a><?php endforeach; endif; endif; ?>

			<div class="btmbox"></div>
		</div>
        

	</div>	


</body>

<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>

</html>