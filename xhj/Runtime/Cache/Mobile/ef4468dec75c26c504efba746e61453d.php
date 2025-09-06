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
	.no_header{position: fixed;z-index: 9999;background:#fff;padding:0px 10px;top:0px;box-shadow: 0 2px 10px 0 rgb(0 0 0 / 10%);}
	.txtl{line-height:50px;width:10%;}
	.oreimgbox{width:100%;height:150px;margin-top:50px;}
	.btmbox{width:100%;height:60px;background:#fff;}
	.orebox{width:100%;margin:0px auto;background:#fff;margin-bottom:10px;padding: 10px;}
	.progress-bar{color: #000;background-color: #f3c420;}
	.progress{height:0.9rem;background-color: #f5f5f5;border-radius: .5rem;}
	.obbox{width:33.33%;height:60px;float:left;}
	.obbox_h{width:100%;height:30px;line-height:20px;}
	.issuebox{width:100%;height:500px;background:#fff;padding:10px 0px;}

	</style>
  </head>
  <body style="background:#fff;">
	<div class="container-fluid " style="padding:0px;width:100vw;">
		<div class="no_header">
		    <a href="<?php echo U('Issue/index');?>">
			<div class="fl allhg txtl">
				<i class="bi bi-arrow-left fcc fw" style="font-size: 24px;"></i>
			</div>
			</a>

			<div class="fl allhg" id="centerbox" style="width:80%;text-align:center;line-height:50px;">
				<span class="fcc fzmmm"><?php echo L('认购项目详情');?></span>
			</div>
            
            <a href="<?php echo U('Issue/issuelog');?>">
			<div class="fr allhg txtr" style="line-height:50px;width:10%;">
			    <i class="bi bi-funnel fcy" style="font-size:20px;"></i>
			</div>
			</a>
		</div>
		
		<div class="issuebox" style="margin-top:40px;">
			<div class="orebox">
				<div style="width:100%;height:120px;">
					<div style="width:30%;height:120px;line-height: 120px;float:left;text-align: center;">
						<img src="/Upload/public/<?php echo ($info["imgs"]); ?>" style="width:80%;"/>
					</div>
					<div style="width:70%;height:120px;float:left;padding:5px;">
						<p class="fzmmm fcc fw" style="margin-bottom:3px;"><?php echo ($info["name"]); ?></p>
						<p class="fzmm fcc" style="margin-bottom:3px;"><?php echo L('认购币种');?>：<?php echo strtoupper($info['coinname']);?></p>
						<p class="fzmm fcc" style="margin-bottom:3px;"><?php echo L('开始时间');?>：<?php echo ($info["starttime"]); ?></p>
						<p class="fzmm fcc" style="margin-bottom:3px;"><?php echo L('结束时间');?>：<?php echo strtoupper($info['finishtime']);?></p>
					</div>
				</div>
				<div style="width:100%;">
					<div class="progress">
					  <?php if(strtotime($info['starttime']) <= time()){?>
					  <div class="progress-bar" role="progressbar" style="width:<?php echo ($info['ysnum'] + $info['sellnum']) / $info['num'] * 100;?>%;" aria-valuenow="<?php echo ($info['ysnum'] + $info['sellnum']) / $info['num'] * 100;?>" aria-valuemin="0" aria-valuemax="100"><?php echo ($info['ysnum'] + $info['sellnum']) / $info['num'] * 100;?>%</div>
					  <?php }elseif(strtotime($info['starttime']) > time()){?>
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
							<span class="fzmm fcc"><?php echo ($info["num"]); ?></span>
						</div>
					</div>
					<div class="obbox" style="width:30%;">
						<div class="obbox_h" style="text-align:center;">
							<span class="fzmm fcc"><?php echo L('认购单价');?></span>
						</div>
						<div class="obbox_h" style="text-align:center;">
							<span class="fzmm fcc"><?php echo ($info["price"]); ?> <?php echo ($info["buycoin"]); ?></span>
						</div>
					</div>
					<div class="obbox" style="width:30%;">
						<div class="obbox_h" style="text-align:right;">
							<span class="fzmm fcc"><?php echo L('锁仓时间');?></span>
						</div>
						<div class="obbox_h" style="text-align:right;">
                            <span class="fzmm fcc"><?php echo ($info["lockday"]); ?> <?php echo L('天');?></span>
						</div>
					</div>
				</div>
				
				<div style="width:100%;height:60px;margin-top:5px;padding:0px 15px;border-bottom:1px solid #f5f5f5;">
					<div class="obbox" style="width:40%;">
						<div class="obbox_h">
							<span class="fzmm fcc"><?php echo L('参与数量');?></span>
						</div>
						<div class="obbox_h">
							<span class="fzmm fcc"><?php if(strtotime($info['starttime']) <= time()){echo $info['sellnum'] + $info['ysnum'];}else{echo $info['sellnum'];} ?> </span>
						</div>
					</div>
					<div class="obbox" style="width:30%;">
						<div class="obbox_h" style="text-align:center;">
							<span class="fzmm fcc"><?php echo L('认购上限');?></span>
						</div>
						<div class="obbox_h" style="text-align:center;">
							<span class="fzmm fcc"><?php echo ($info["allmax"]); ?></span>
						</div>
					</div>
					<div class="obbox" style="width:30%;">
						<div class="obbox_h" style="text-align:right;">
							<span class="fzmm fcc"><?php echo L('单次最低');?></span>
						</div>
						<div class="obbox_h" style="text-align:right;">
                            <span class="fzmm fcc"><?php echo ($info["min"]); ?></span>
						</div>
					</div>
				</div>
				
				<div style="width:100%;margin-top:15px;">
				    <div style="width:100%;height:50px;background:#f5f5f5;border-radius:5px;margin-bottom:10px;padding:0px 15px;">
				        <div style="width:70%;height:50px;float:left;">
				            <input type="number" oninput="tatolcoin();" id="buynum" placeholder="<?php echo L('请输入认购数量');?>" style="padding:5 15px;background:#f5f5f5;border:none;margin-top:12px;" <input type="text" name="price" placeholder="请输入价格" autocomplete="off" step="1"  min="0" onkeyup="this.value= this.value.match(/\d+(\.\d{0,2})?/) ? this.value.match(/\d+(\.\d{0,2})?/)[0] : ''" />
				        </div>
				        <div style="width:30%;height:50px;line-height:50px;float:left;text-align:center;">
				            <span class="fzmm fcc"><?php echo strtoupper($info['coinname']);?></span>
				        </div>
				    </div>
				    <div style="width:100%;height:40px;background:#f5f5f5;border-radius:5px;padding:0px 15px;">
				        <div style="width:70%;height:40px;line-height:40px;float:left;">
				            <span class="fzmm fcc"><?php echo L('需要支付');?>：</span>
				            <span class="fzmm fcc" id="paynum">0.00</span>
				        </div>
				        <div style="width:30%;height:40px;line-height:40px;float:left;text-align:center;">
				            <span class="fzmm fcc"><?php echo strtoupper($info['buycoin']);?></span>
				        </div>
				    </div>
				    <div style="width:100%;height:40px;border-radius:5px;padding:0px 15px;">
				        <div style="width:70%;height:40px;line-height:40px;float:left;">
				            <span class="fzmm fcc"><?php echo L('可用'); echo strtoupper($info['buycoin']);?>：</span>
				            <span class="fzmm fcc"><?php echo ($money); ?></span>
				        </div>
				    </div>
				    
				    <input type="hidden" name="price" id="pricebox" value="<?php echo ($info["price"]); ?>" />
				    <input type="hidden" name="min" id="minbox" value="<?php echo ($info["min"]); ?>" />
				    <input type="hidden" name="max" id="maxbox" value="<?php echo ($info["max"]); ?>" />
				    <input type="hidden" id="flag" value="1" />
				    <?php if($uid <= 0): ?><div class="allbtn" onclick="gologin();" style="height:40px;line-height:40px;margin-top:5px;">
				        <span class="fzmm fch"><?php echo L('请先登陆');?></span>
				    </div>
				    <?php else: ?>
				    <div class="allbtn" id="sumbtn" onclick="buyissue(<?php echo ($info["id"]); ?>)" style="height:40px;line-height:40px;margin-top:5px;">
				        <span class="fzmm fch"><?php echo L('立即参与');?></span>
				    </div><?php endif; ?>
				    
				    
				</div>
			</div>
			
			<div style="width:100%;padding:0 15px;overflow: hidden;">
			    <span class="fzmm fcc"><?php echo L('项目说明');?>：</span>
			    <span class="fzmm fcc"><?php echo ($info["content"]); ?></span>
			</div>
            <div class="btmbox"></div>
		</div>
		
		
		    


	</div>	


</body>

<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">
    function buyissue(id){
        
        var flag = $("#flag").val();
        if(flag == 2){
            return false;
        }
        var pid = id;
        var buynum = $("#buynum").val();
        var min = parseFloat($("#minbox").val());
        var max = parseFloat($("#maxbox").val());
        if(buynum == '' || buynum == 0 || buynum == null){
            layer.msg("<?php echo L('请输入认购数量');?>");return false;
        }
        if(buynum < min){
            layer.msg("<?php echo L('不能小于最低认购量');?>");return false;
        }
        if(buynum > max){
            layer.msg("<?php echo L('不能高于最高认购量');?>");return false;
        }
        $("#flag").val(2);
        $.post("<?php echo U('Issue/upbuynum');?>",
        {'pid':pid,'num':buynum},
        function(data){
            if(data.code ==1){
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
    function tatolcoin(){
        var buynum = parseFloat($("#buynum").val());

        var price = parseFloat($("#pricebox").val());
        var paynum = buynum * price;
        $("#paynum").html(paynum);
        
    }
</script>
<script type="text/javascript">
    function gologin(){
        window.location.href = "<?php echo U('Login/index');?>";
    }
</script>
</html>