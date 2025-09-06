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
	    .lbox{width:100%;height:50px;border-bottom:1px solid #f5f5f5;}
	    .lbox_l{width:50%;height:50px;line-height:50px;float:left;text-align:left;}
	    .lbox_r{width:50%;height:50px;line-height:50px;float:right;text-align:right;}
	    .infobox{width:100%;height:400px;padding:5px 20px;margin-top:50px;}
	    .infotbox{width:100%;height:50px;line-height:50px;border-bottom:1px solid #f5f5f5;}
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
		        <span class="fcy" style="font-size:24px;font-weight:bold;"><?php echo ($info["coinname"]); echo L('合约详情');?></span>
		    </div>
		    
		    <div class="lbox">
		        <div class="lbox_l">
		            <span class="fcc fzmm"><?php echo L('合约金额');?></span>
		        </div>
		        <div class="lbox_r">
		            <span class="fch fzmmm"><?php echo ($info["num"]); ?>USDT</span>
		        </div>
		    </div>
		    
		    <div class="lbox">
		        <div class="lbox_l">
		            <span class="fcc fzmm"><?php echo L('合约时长');?></span>
		        </div>
		        <div class="lbox_r">
		            <span class="fch fzmmm"><?php echo ($info["time"]); echo L('分钟');?></span>
		        </div>
		    </div>
		    
		    <div class="lbox">
		        <div class="lbox_l">
		            <span class="fcc fzmm"><?php echo L('合约类型');?></span>
		        </div>
		        <div class="lbox_r">
		            <?php if($info["hyzd"] == 1): ?><span class="fzmmm" style="color:#0ecb81;"><?php echo L('买涨');?></span>
		            <?php elseif($info["hyzd"] == 2): ?>
		            <span class="fzmmm" style="color:#f5465c;"><?php echo L('买跌');?></span><?php endif; ?>
		        </div>
		    </div>
		    <div class="lbox">
		        <div class="lbox_l">
		            <span class="fcc fzmm"><?php echo L('合约状态');?></span>
		        </div>
		        <div class="lbox_r">
		            <?php if($info['status'] == 2){?>
		                <span class="fch fzmm"><?php echo L('结算成功');?></span>
		            <?php }elseif($info['status'] == 3){?>
		                <span class="fch fzmm"><?php echo L('失效结算');?></span>
		            <?php }elseif($info['status'] == 1){?>
		                <span class="fch fzmm"><?php echo L('未结算');?></span>
		            <?php }?>
		        </div>
		    </div>
		    <div class="lbox">
		        <div class="lbox_l">
		            <span class="fcc fzmm"><?php echo L('建仓单价');?></span>
		        </div>
		        <div class="lbox_r">
		            <span class="fch fzmm"><?php echo ($info["buyprice"]); ?></span>
		        </div>
		    </div>
		    <div class="lbox">
		        <div class="lbox_l">
		            <span class="fcc fzmm"><?php echo L('建仓时间');?></span>
		        </div>
		        <div class="lbox_r">
		            <span class="fch fzmm"><?php echo ($info["buytime"]); ?></span>
		        </div>
		    </div>
		    
		    <?php if($info["status"] == 2): ?><div class="lbox">
		        <div class="lbox_l">
		            <span class="fcc fzmm"><?php echo L('平仓单价');?></span>
		        </div>
		        <div class="lbox_r">
		            <span class="fch fzmm"><?php echo ($info["sellprice"]); ?></span>
		        </div>
		    </div>
		    <div class="lbox">
		        <div class="lbox_l">
		            <span class="fcc fzmm"><?php echo L('平仓时间');?></span>
		        </div>
		        <div class="lbox_r">
		            <span class="fch fzmm"><?php echo ($info["selltime"]); ?></span>
		        </div>
		    </div>
		    <div class="lbox">
		        <div class="lbox_l">
		            <span class="fcc fzmm"><?php echo L('盈亏金额');?></span>
		        </div>
		        <div class="lbox_r">
		            <?php if($info["is_win"] == 0): ?><span style="color:#000000;"><?php echo ($info["ploss"]); ?>USDT</span>
					<?php elseif($info["is_win"] == 1): ?>  
					    <span style="color:#0ecb81;">+<?php echo ($info["ploss"]); ?>USDT</span>
					<?php elseif($info["is_win"] == 2): ?>
					    <span style="color:#f5465c;">-<?php echo ($info["ploss"]); ?>USDT</span><?php endif; ?>
		        </div>
		    </div><?php endif; ?>

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