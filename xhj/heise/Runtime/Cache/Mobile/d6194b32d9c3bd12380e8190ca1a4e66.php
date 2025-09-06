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
	    .no_header{position: fixed;z-index: 9999;padding:0px 10px;top:0px;line-height: 50px;background:#f5f5f5;}
	    .contentbox{width:100%;margin-top:45px;}
	    .contentbox_top{width:100%;height:50px;line-height:50px;text-align:left;padding:0px 15px;}
        .listbox{width:100%;height:100px;background:#fff;padding:5px 15px;}
        .listbox_title{width:100%;height:30px;line-height:30px;}
        .listbox_title_l{width:50%;height:30px;float:left;text-align:left;}
        .listbox_title_r{width:50%;height:30px;float:right;text-align:right;}
        .titlebox{width:29%;height:50px;line-height:50px;float:left;}
        .xztitile{color:#000;font-size:22px;font-weight:bold;}
        .notitile{color:#000000;font-size:20px;font-weight:500px;}
        .listbox{width:100%;background:#fff;margin-top:120px;}
        .tlistbox{width:100%;clear:both;padding:10px 0px;}
	    .tlistbox_1{width:100%;border-bottom:1px solid #f5f5f5;}
	    .tlistbox_2{width:100%;height:30px;}
	    .tlistbox_3{width:80%;height:30px;line-height:30px;}
	    .tlistbox_4{width:20%;height:30px;line-height:30px;}
	    .tlistbox_5{padding:5px 10px;background:#fcfcfc;border-radius:5px;}
	    .tlistbox_6{width:100%;height:60px;}
	    .tlistbox_7{width:33.33%;height:60px;}
	    .tlistbox_8{width:100%;height:30px;line-height:30px;}
	    .tlistbox_9{width:100%;height:30px;line-height:20px;}
	    .tl{text-align:left;}
	    .tr{text-align:right;}
	    .tc{text-align:center;}
	    .fl{float:left;}
	    .fr{float:right;}
	    .red{color:#f5465c;}
        .bghc{background:#f5f5f5;}
        .green{color:#0ecb81;}
        .emptybox{width:100%;height:80px;line-height:80px;text-align:center;}
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
		<div class="contentbox">
		    <div class="contentbox_top" style="position: fixed;top: 50px;background:#f5f5f5;">
		        <div class="titlebox">
		            <span class="xztitile" id="wtlistbtn"><?php echo L('全部委托');?></span>
		        </div>
		        <div class="titlebox">
		            <span class="notitile" id="alllistbtn"><?php echo L('历史记录');?></span>
		        </div>
		        <div class="titlebox">
		            <span class="notitile" id="finishbtn"><?php echo L('成交明细');?></span>
		        </div>
		    </div>
		    
		    <!---成交记录-->
		    <div class="listbox" id="finishbox" style="display:none;">
		        <?php if(empty($finishlist)): ?><div class="emptybox">
		            <span class="fcc fzmm"><?php echo L('暂时没有记录');?></span>
		        </div>
		        <?php else: ?>
		        <?php if(is_array($finishlist)): foreach($finishlist as $key=>$vo): ?><div class="tlistbox">
		            <div class="tlistbox_1">
		                <div class="tlistbox_2">
		                    <div class="tlistbox_3 fl">
		                        <?php if($vo["type"] == 1): ?><span class="fzmmm green"><?php echo L('购买');?></span>
		                        <?php elseif($vo["type"] == 2): ?>
		                        <span class="fzmmm red"><?php echo L('出售');?></span><?php endif; ?>
		                        <span class="fzmmm fch" style="font-weight:bold;"><?php echo ($vo["symbol"]); ?></span>
		                    </div>
		                    
		                    <a href="<?php echo U('Trade/billinfo');?>?id=<?php echo ($vo["id"]); ?>">
		                    <div class="tlistbox_4 fr tr">
		                        <span class="fcc fzm"><?php echo L('已完成');?></span>
		                        <i class="bi bi-chevron-right"></i>
		                    </div>
		                    </a>
		                    
		                </div>
		                
		                <div class="tlistbox_6">
		                    <div class="tlistbox_7 fl">
		                        <div class="tlistbox_8 tl">
		                            <span class="fzm fcc"><?php echo L('时间');?></span>
		                        </div>
		                        <div class="tlistbox_9 tl">
		                            <span class="fzmm fch"><?php echo date("m-d H:i",strtotime($vo['tradetime']));?></span>
		                        </div>
		                    </div>
		                    <?php if($vo["type"] == 1): ?><div class="tlistbox_7 fl">
		                        <div class="tlistbox_8 tc">
		                            <span class="fzm fcc"><?php echo L('委托价');?>(USDT)</span>
		                        </div>
		                        <div class="tlistbox_9 tc">
		                            <span class="fzmm fch"><?php echo ($vo["xjprice"]); ?></span>
		                        </div>
		                    </div>
		                    <?php elseif($vo["type"] == 2): ?>
		                    <div class="tlistbox_7 fl">
		                        <div class="tlistbox_8 tc">
		                            <span class="fzm fcc"><?php echo L('委托价');?>(USDT)</span>
		                        </div>
		                        <div class="tlistbox_9 tc">
		                            <span class="fzmm fch"><?php echo L('市价');?></span>
		                        </div>
		                    </div><?php endif; ?>
		                    
		                    
		                    <div class="tlistbox_7 fl">
		                        <div class="tlistbox_8 tr">
		                            <span class="fzm fcc"><?php echo L('交易额');?>(USDT)</span>
		                        </div>
		                        <div class="tlistbox_9 tr">
		                            <span class="fzmm fch"><?php echo ($vo["usdtnum"]); ?></span>
		                        </div>
		                    </div>
		                </div>
		                
		                <div class="tlistbox_6">
		                    <div class="tlistbox_7 fl">
		                        <div class="tlistbox_8 tl">
		                            <span class="fzm fcc"><?php echo L('成交总价');?>(USDT)</span>
		                        </div>
		                        <div class="tlistbox_9 tl">
		                            <span class="fzmm fch"><?php echo ($vo["usdtnum"]); ?></span>
		                        </div>
		                    </div>
		                    <?php if($vo["type"] == 1): ?><div class="tlistbox_7 fl">
		                        <div class="tlistbox_8 tc">
		                            <span class="fzm fcc"><?php echo L('成交均价');?>(USDT)</span>
		                        </div>
		                        <div class="tlistbox_9 tc">
		                            <span class="fzmm fch"><?php echo ($vo["price"]); ?></span>
		                        </div>
		                    </div>
		                    <?php elseif($vo["type"] == 2): ?>
		                    <div class="tlistbox_7 fl">
		                        <div class="tlistbox_8 tc">
		                            <span class="fzm fcc"><?php echo L('成交均价');?>(USDT)</span>
		                        </div>
		                        <div class="tlistbox_9 tc">
		                            <span class="fzmm fch"><?php echo ($vo["price"]); ?></span>
		                        </div>
		                    </div><?php endif; ?>
		                    
		                    <div class="tlistbox_7 fl">
		                        <div class="tlistbox_8 tr">
		                            <span class="fzm fcc"><?php echo L('成交量');?>(<?php echo ($vo["coin"]); ?>)</span>
		                        </div>
		                        <div class="tlistbox_9 tr">
		                            <span class="fzmm fch"><?php echo ($vo["coinnum"]); ?></span>
		                        </div>
		                    </div>
		                </div>
		                
		            </div>
		        </div><?php endforeach; endif; endif; ?>
		        
		    </div>
		    
		    
		    <!---历史记录-->
		    <div class="listbox" id="alllistbox"  style="display:none;">
		        <?php if(empty($alllist)): ?><div class="emptybox">
		            <span class="fcc fzmm"><?php echo L('暂时没有记录');?></span>
		        </div>
		        <?php else: ?>
		        <?php if(is_array($alllist)): foreach($alllist as $key=>$vo): ?><div class="tlistbox">
		            <div class="tlistbox_1">
		                <div class="tlistbox_2">
		                    <div class="tlistbox_3 fl">
		                        <?php if($vo["type"] == 1): ?><span class="fzmmm green"><?php echo L('购买');?></span>
		                        <?php elseif($vo["type"] == 2): ?>
		                        <span class="fzmmm red"><?php echo L('出售');?></span><?php endif; ?>
		                        <span class="fzmmm fch" style="font-weight:bold;"><?php echo ($vo["symbol"]); ?></span>
		                    </div>
		                    
		                    <a href="<?php echo U('Trade/billinfo');?>?id=<?php echo ($vo["id"]); ?>">
		                    <div class="tlistbox_4 fr tr">
		                        <?php if($vo["status"] == 1): ?><span class="fcc fzm"><?php echo L('取消');?></span>
		                        <?php elseif($vo["status"] == 2): ?>
		                        <span class="fcc fzm"><?php echo L('已完成');?></span>
		                        <?php elseif($vo["status"] == 3): ?>
		                        <span class="fcc fzm"><?php echo L('已完成');?></span><?php endif; ?>
		                        <i class="bi bi-chevron-right"></i>
		                    </div>
		                    </a>
		                    
		                </div>
		                
		                <div class="tlistbox_6">
		                    <div class="tlistbox_7 fl">
		                        <div class="tlistbox_8 tl">
		                            <span class="fzm fcc"><?php echo L('时间');?></span>
		                        </div>
		                        <div class="tlistbox_9 tl">
		                            <span class="fzmm fch"><?php echo date("m-d H:i",strtotime($vo['tradetime']));?></span>
		                        </div>
		                    </div>
		                    <?php if($vo["type"] == 1): ?><div class="tlistbox_7 fl">
		                        <div class="tlistbox_8 tc">
		                            <span class="fzm fcc"><?php echo L('委托价');?>(USDT)</span>
		                        </div>
		                        <div class="tlistbox_9 tc">
		                            <span class="fzmm fch"><?php echo ($vo["xjprice"]); ?></span>
		                        </div>
		                    </div>
		                    <?php elseif($vo["type"] == 2): ?>
		                    <div class="tlistbox_7 fl">
		                        <div class="tlistbox_8 tc">
		                            <span class="fzm fcc"><?php echo L('委托价');?>(USDT)</span>
		                        </div>
		                        <div class="tlistbox_9 tc">
		                            <span class="fzmm fch"><?php echo L('市价');?></span>
		                        </div>
		                    </div><?php endif; ?>
		                    
		                    
		                    <div class="tlistbox_7 fl">
		                        <div class="tlistbox_8 tr">
		                            <span class="fzm fcc"><?php echo L('交易额');?>(USDT)</span>
		                        </div>
		                        <div class="tlistbox_9 tr">
		                            <span class="fzmm fch"><?php echo ($vo["usdtnum"]); ?></span>
		                        </div>
		                    </div>
		                </div>
		                
		                <div class="tlistbox_6">
		                    <div class="tlistbox_7 fl">
		                        <div class="tlistbox_8 tl">
		                            <span class="fzm fcc"><?php echo L('成交总价');?>(USDT)</span>
		                        </div>
		                        <div class="tlistbox_9 tl">
		                            <span class="fzmm fch"><?php echo ($vo["usdtnum"]); ?></span>
		                        </div>
		                    </div>
		                    <?php if($vo["type"] == 1): ?><div class="tlistbox_7 fl">
		                        <div class="tlistbox_8 tc">
		                            <span class="fzm fcc"><?php echo L('成交均价');?>(USDT)</span>
		                        </div>
		                        <div class="tlistbox_9 tc">
		                            <span class="fzmm fch"><?php echo ($vo["price"]); ?></span>
		                        </div>
		                    </div>
		                    <?php elseif($vo["type"] == 2): ?>
		                    <div class="tlistbox_7 fl">
		                        <div class="tlistbox_8 tc">
		                            <span class="fzm fcc"><?php echo L('成交均价');?>(USDT)</span>
		                        </div>
		                        <div class="tlistbox_9 tc">
		                            <span class="fzmm fch"><?php echo ($vo["price"]); ?></span>
		                        </div>
		                    </div><?php endif; ?>
		                    
		                    <div class="tlistbox_7 fl">
		                        <div class="tlistbox_8 tr">
		                            <span class="fzm fcc"><?php echo L('成交量');?>(<?php echo ($vo["coin"]); ?>)</span>
		                        </div>
		                        <div class="tlistbox_9 tr">
		                            <span class="fzmm fch"><?php echo ($vo["coinnum"]); ?></span>
		                        </div>
		                    </div>
		                </div>
		                
		                
		            </div>
		        </div><?php endforeach; endif; endif; ?>
		        
		    </div>
		    
		    
		    <!----所有委托--->
		    <div class="listbox" id="wtlistbox" style="display:block;">
		        <?php if(empty($list)): ?><div class="emptybox">
		            <span class="fcc fzmm"><?php echo L('暂时没有记录');?></span>
		        </div>
		        <?php else: ?>
		        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="tlistbox">
		            <div class="tlistbox_1">
		                <div class="tlistbox_2">
		                    <div class="tlistbox_3 fl">
		                        <?php if($vo["type"] == 1): ?><span class="fzmmm green"><?php echo L('购买');?></span>
		                        <?php elseif($vo["type"] == 2): ?>
		                        <span class="fzmmm red"><?php echo L('出售');?></span><?php endif; ?>
		                        <span class="fzmmm fch" style="font-weight:bold;"><?php echo ($vo["symbol"]); ?></span>
		                    </div>
		                    
		                    <div class="tlistbox_4 fr tr"  onclick="clearorder(<?php echo ($vo["id"]); ?>);">
		                        <span class="tlistbox_5 fcy"><?php echo L('取消');?></span>
		                    </div>
		                </div>
		                
		                
		                <div class="tlistbox_6">
		                    <div class="tlistbox_7 fl">
		                        <div class="tlistbox_8 tl">
		                            <span class="fzm fcc"><?php echo L('价格');?>(USDT)</span>
		                        </div>
		                        <div class="tlistbox_9 tl">
		                            <span class="fzmm fch"><?php echo ($vo["xjprice"]); ?></span>
		                        </div>
		                    </div>
		                    <?php if($vo["type"] == 1): ?><div class="tlistbox_7 fl">
		                        <div class="tlistbox_8 tc">
		                            <span class="fzm fcc"><?php echo L('数量');?>(USDT)</span>
		                        </div>
		                        <div class="tlistbox_9 tc">
		                            <span class="fzmm fch"><?php echo ($vo["usdtnum"]); ?></span>
		                        </div>
		                    </div>
		                    <?php elseif($vo["type"] == 2): ?>
		                    <div class="tlistbox_7 fl">
		                        <div class="tlistbox_8 tc">
		                            <span class="fzm fcc"><?php echo L('数量');?>(<?php echo ($vo["coin"]); ?>)</span>
		                        </div>
		                        <div class="tlistbox_9 tc">
		                            <span class="fzmm fch"><?php echo ($vo["coinnum"]); ?></span>
		                        </div>
		                    </div><?php endif; ?>
		                    
		                    <div class="tlistbox_7 fl">
		                        <div class="tlistbox_8 tr">
		                            <span class="fzm fcc"><?php echo L('实际成交');?>(<?php echo ($vo["coin"]); ?>)</span>
		                        </div>
		                        <div class="tlistbox_9 tr">
		                            <span class="fzmm fch"><?php echo ($vo["coinnum"]); ?></span>
		                        </div>
		                    </div>
		                </div>
		                
		                
		            </div>
		        </div><?php endforeach; endif; endif; ?>
		    </div>
		    
		    

		    <div style="width:100%;height:80px;"></div>
   
		</div>

	</div>	
</body>
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">
    $("#wtlistbtn").click(function(){
        $("#wtlistbtn").addClass("xztitile");
        $("#wtlistbtn").removeClass("notitile");
        $("#alllistbtn").addClass("notitile");
        $("#alllistbtn").removeClass("xztitile");
        $("#finishbtn").addClass("notitile");
        $("#finishbtn").removeClass("xztitile");
        $("#wtlistbox").show();
        $("#alllistbox").hide();
        $("#finishbox").hide();
    });
    $("#alllistbtn").click(function(){
        $("#wtlistbtn").addClass("notitile");
        $("#wtlistbtn").removeClass("xztitile");
        $("#alllistbtn").addClass("xztitile");
        $("#alllistbtn").removeClass("notitile");
        $("#finishbtn").addClass("notitile");
        $("#finishbtn").removeClass("xztitile");
        $("#wtlistbox").hide();
        $("#alllistbox").show();
        $("#finishbox").hide();
    });
    $("#finishbtn").click(function(){
        $("#wtlistbtn").addClass("notitile");
        $("#wtlistbtn").removeClass("xztitile");
        $("#alllistbtn").addClass("notitile");
        $("#alllistbtn").removeClass("xztitile");
        $("#finishbtn").addClass("xztitile");
        $("#finishbtn").removeClass("notitile");
        $("#wtlistbox").hide();
        $("#alllistbox").hide();
        $("#finishbox").show();
    });
</script>
<script type="text/javascript">
    function clearorder(id){
        var oid = id;
        $.post("<?php echo U('Trade/clearorder');?>",
        {"oid":oid},
        function(data){
            if(data.code == 1){
                layer.msg(data.info);
                setTimeout(function(args){
                    window.location.reload();
                },2000);
            }else{
                layer.msg(data.info);return false;
            }    
        });
    }
</script>
<script type="text/javascript">
    function goback(){
        window.history.go(-1);
    }
</script>
</html>