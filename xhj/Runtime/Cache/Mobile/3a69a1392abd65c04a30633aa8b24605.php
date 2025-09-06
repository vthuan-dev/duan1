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
	    input:focus{background:#f5f5f5;outline: 1px solid #f5f5f5;}
	    a:hover,a:link,a:visited,a:active{color:#000000;text-decoration:none;}
	    .no_header{position: fixed;z-index: 9999;padding:0px 10px;top:0px;line-height: 50px;background:#fff;}
	    .contentbox{width:100%;margin-top:45px;}
	    .contentbox_top{width:100%;height:50px;line-height:50px;text-align:left;background:#fff;}
        .topbox{width:100%;height:240px;background:#fff;padding:5px 15px;}
        .coinstyle{font-size:26px;font-weight:bold;}
        .infolist{width:33.33%;height:50px;float:left;}
        .infolist_1{width:100%;height:20px;line-height:20px;}
        .listbox_a{width:45%;height:60px;background:#f5f5f5;border-radius:5px;float:left;padding:5px 10px;}
        .listbox_a_1{width:100%;height:20px;line-height:20px;}
        .listbox_a_2{width:45%;height:30px;line-height:30px;float:left;}
        .listbox_a_3{width:45%;height:50%;line-height:30px;float:right;text-align:right;}
        .infobox_a{width:100%;min-height: 350px;background:#fff;margin-top:10px;padding:10px;}
        .infobox_b{width:100%;height:90px;padding:5px 10px;}
        .infobox_c{width:100%;height:30px;line-height:30px;}
        .infobox_d{width:100%;height:60px;}
        .infobox_e{width:33.33%;height:50px;float:left;}
        .btnbox{width:100%;height:60px;position: fixed;bottom:0px;padding:10px;background:#fff;}
        .btnbox_a{width:45%;height:40px;line-height:40px;text-align:center;float:left;}
        .btnbox_b{width:45%;height:40px;line-height:40px;text-align:center;float:right;}
        .btnbg_a{background: #0052fe;color: #fff;border-radius:5px;}
        .btnbg_b{background: #f5f5f5;border-radius:5px;}
        .bgreen{background:#0ecb81;}
        .bred{background:#f5465c;}
        .green{color:#0ecb81;}
        .red{color:#f5465c;}
	</style>
</head>
<body>
	<div class="container-fluid " style="padding:0px;width:100vw;">
        <div class="no_header">
			<div class="fl allhg txtl">
				<i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 24px;"></i>
			</div>

			<div class="fr allhg txtr" style="line-height:50px;width:10%;"></div>
		</div>
		<div class="contentbox">
		    
		    <div class="topbox" <?php if($coinname == "USDT"){?> style="height:120px;" <?php }?>>
		        <div class="contentbox_top">
		            <span class="fcy coinstyle"><?php echo ($coinname); ?></span>
		        </div>
		        <div style="width:100%;height:50px;">
		            <div class="infolist">
		               <div class="infolist_1">
		                   <span class="fcc fzm"><?php echo L('可用');?></span>
		               </div> 
		               <div class="infolist_1">
		                   <span class="fch fzmm" id="kymoney"><?php echo ($data["kymoney"]); ?></span>
		               </div>
		            </div>
		            <div class="infolist">
		                <div class="infolist_1">
		                   <span class="fcc fzm"><?php echo L('冻结');?></span>
		               </div> 
		               <div class="infolist_1">
		                   <span class="fch fzmm" id="djmonfy"><?php echo ($data["djmoney"]); ?></span>
		               </div>
		            </div>
		            <div class="infolist">
		                <div class="infolist_1" style="text-align:right;">
		                   <span class="fcc fzm"><?php echo L('折合');?>(USDT)</span>
		               </div> 
		               <div class="infolist_1" style="text-align:right;">
		                   <span class="fch fzmm" id="zhmoney"><?php echo ($data["zhmoney"]); ?></span>
		               </div>
		            </div>
		        </div>
		        
		        
		        <?php if($coinname != "USDT"){?>
		        <div class="contentbox_top">
		            <span class="fch" style="font-size:20px;font-weight:500;"><?php echo L('去交易');?></span>
		        </div>
		        
		        <div style="width:100%;height:60px;">
		            
		            <a href="/Trade/index.html">
		            <div class="listbox_a">
		                <div class="listbox_a_1">
		                    <span class="fcc fzm" ><?php echo $coinname;?>/USDT</span>
		                    <span class="fcc fzm"><?php echo L('币币交易');?></span>
		                </div>
		                <div style="width:100%;height:30px;">
		                    <div class="listbox_a_2">
		                        <span class="fch fzm newprice">--</span>
		                    </div>
		                    <div class="listbox_a_3">
		                        <span class="fch fzm changebox">--</span>
		                    </div>
		                </div>
		            </div>
		            </a>
		            
		            <a href="/Contract/index.html">
		            <div class="listbox_a" style="float:right;">
		                <div class="listbox_a_1">
		                    <span class="fcc fzm"><?php echo $coinname;?>/USDT</span>
		                    <span class="fcc fzm"><?php echo L('秒合约');?></span>
		                </div>
		                <div style="width:100%;height:30px;">
		                    <div class="listbox_a_2">
		                        <span class="fch fzm newprice">--</span>
		                    </div>
		                    <div class="listbox_a_3">
		                        <span class="fch fzm changebox">--</span>
		                    </div>
		                </div>
		            </div>
		            </a>
		            
		        </div>
		        <?php } ?>
		        
		        
		    </div>
		    
		    
		    <div class="infobox_a">
		        <div class="contentbox_top">
		            <span class="fch" style="font-size:20px;font-weight:500;"><?php echo L('财务记录');?></span>
		        </div>
		        
		        
		        <?php if(empty($billlist)): ?><div style="width:100%;height:200px;line-height:200px;text-align:center;">
		            <span class="fcc fzmm"><?php echo L('暂时没有数据');?></span>
		        </div>
		        
		        <?php else: ?>
		        <?php if(is_array($billlist)): foreach($billlist as $key=>$vo): ?><div class="infobox_b" style="border-bottom:1px solid #f5f5f5;">
		            <div  class="infobox_c">
		                <div style="width:80%;height:30px;line-height:30px;float:left;">
		                    <?php if($vo['type']==1){?>
		                    <span class="fch fzmm"><?php echo L('充币');?></span>
		                    <?php }elseif($vo['type']==2){?>
		                    <span class="fch fzmm"><?php echo L('提币');?></span>
		                    <?php }elseif($vo['type']==3){?>
		                    <span class="fch fzmm"><?php echo L('合约建仓');?></span>
		                    <?php }elseif($vo['type']==4){?>
		                    <span class="fch fzmm"><?php echo L('合约平仓');?></span>
		                    <?php }elseif($vo['type']==5){?>
		                    <span class="fch fzmm"><?php echo L('购买矿机');?></span>
		                    <?php }elseif($vo['type']==6){?>
		                    <span class="fch fzmm"><?php echo L('购机奖励');?></span>
		                    <?php }elseif($vo['type']==7){?>
		                    <span class="fch fzmm"><?php echo L('矿机收益释放冻结');?></span>
		                    <?php }elseif($vo['type']==8){?>
		                    <span class="fch fzmm"><?php echo L('释放冻结收益');?></span>
		                    <?php }elseif($vo['type']==9){?>
		                    <span class="fch fzmm"><?php echo L('币币交易');?></span>
		                    <?php }elseif($vo['type']==10){?>
		                    <span class="fch fzmm"><?php echo L('币币交易');?></span>
		                    <?php }elseif($vo['type']==11){?>
		                    <span class="fch fzmm"><?php echo L('认购');?></span>
		                    <?php }elseif($vo['type']==12){?>
		                    <span class="fch fzmm"><?php echo L('认购');?></span>
		                    <?php }elseif($vo['type']==13){?>
		                    <span class="fch fzmm"><?php echo L('一代会员认购奖励');?></span>
		                    <?php }elseif($vo['type']==14){?>
		                    <span class="fch fzmm"><?php echo L('二代会员认购奖励');?></span>
		                    <?php }elseif($vo['type']==15){?>
		                    <span class="fch fzmm"><?php echo L('三代会员认购奖励');?></span>
		                    <?php }elseif($vo['type']==16){?>
		                    <span class="fch fzmm"><?php echo L('提币驳回');?></span>
		                    <?php }elseif($vo['type']==17){?>
		                    <span class="fch fzmm"><?php echo L('充币成功');?></span>
		                    <?php }?>
		                </div>
		                <div style="width:20%;height:30px;line-height:30px;float:right;text-align:right;">
		                    <i class="bi bi-chevron-right fcc"></i>
		                </div>
		                
		            </div>
		            <div  class="infobox_d">
		                <div class="infobox_e">
		                    <div style="width:100%;height:20px;line-height:20px;">
		                        <span class="fcc fzm"><?php echo L('数量');?></span>
		                    </div>
		                    <div style="width:100%;height:40px;line-height:30px;">
		                        <span class="fch fzmm"><?php echo ($vo["num"]); ?></span>
		                    </div>
		                </div>
		                <div class="infobox_e">
		                    <div style="width:100%;height:20px;line-height:20px;">
		                        <span class="fcc fzm"><?php echo L('状态');?></span>
		                    </div>
		                    <div style="width:100%;height:40px;line-height:30px;">
		                        <span class="fch fzmm"><?php echo L('已完成');?></span>
		                    </div>
		                </div>
		                <div class="infobox_e" >
		                    <div style="width:100%;height:20px;line-height:20px;text-align:right;">
		                        <span class="fcc fzm"><?php echo L('时间');?></span>
		                    </div>
		                    <div style="width:100%;height:40px;line-height:30px;text-align:right;">
		                        <span class="fch fzmm"><?php echo date("m-d H:i",strtotime($vo['addtime']));?></span>
		                    </div>
		                </div>
		            </div>
		        </div><?php endforeach; endif; endif; ?>

		        
		        
		        <div style="width:100%;height:80px;background:#fff;"></div>
		        
		    </div>
		    
		    
		</div>
		<?php if($lowcoin == "usdz"): else: ?>
		<div class="btnbox">
		    <a href="/User/czpage.html?id=<?php echo ($oid); ?>">
		    <div class="btnbox_a btnbg_a">
		        <span class="fch fzmm"><?php echo L('充币');?></span>
		    </div>
		    </a>
		    
		    <a href="/User/txpage.html?id=<?php echo ($oid); ?>">
		    <div class="btnbox_b btnbg_b">
		        <span class="fch fzmm"><?php echo L('提币');?></span>
		    </div>
		    </a>
		    
		</div><?php endif; ?>
	</div>
	

</body>
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">
    $(function(){
        setInterval("getnewprice()",1000); 
    });
</script>

<script type="text/javascript">
    function getnewprice(){
        var coinname = "<?php echo ($coinname); ?>";
        $.post("<?php echo U('User/getnewprice');?>",
        {'coinname' : coinname},
        function(data){
            if(data.code == 1){
                $(".newprice").html(data.newprice);
                $(".changebox").html(data.changestr);
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