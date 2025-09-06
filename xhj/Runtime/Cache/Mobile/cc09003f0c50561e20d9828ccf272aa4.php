<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"  style="background:rgb(245, 245, 245);">
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
		.imgbox{width: 100%;height: 160px;margin-top: 60px;text-align: center;}
		.logobox {width: 100%;height: 30px;line-height: 30px;}
		.logobox_left {width: 30%;height: 30px;line-height: 30px;float: left;text-align: right;}
		.logobox_right {width: 65%;height: 30px;line-height: 30px;float: right;text-align: left;}
		.logobox_right span {font-size: 20px;font-weight: bold;color: #00b897;}
		.txtbox {width: 96%;height: 80px;background: #fff;margin: 15px auto;border-radius: 15px;padding: 10px;margin-top: 30px;}
		.txtbox_tb {width: 100%;height: 30px;line-height: 30px;}
		.txtbox_tb span {font-size: 14px;color: #000;}
		.logobox {width: 100%;height: 30px;line-height: 30px;}


	</style>
  </head>
  <body style="background:rgb(245, 245, 245);">
	<div class="container-fluid"  style="padding:0px;width:100vw;">
		<div class="no_header"  style="position: fixed;z-index: 9999;background: rgb(245, 245, 245);padding:0px 10px;top:0px;">
			<div class="fl allhg txtl" style="line-height:50px;width:10%;">
				<i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 24px;"></i>
			</div>

			<div class="fl allhg" id="centerbox" style="width:80%;text-align:center;line-height:50px;">
				<span class="fcc fzmmm"><?php echo L('邀请');?></span>
			</div>

			<div class="fr allhg txtr" style="line-height:50px;width:10%;">
			</div>
		</div>

		<div class="no_content" style="width:90%;margin:60px auto;">
			
			<div class="no_inbox">
				
				<div class="imgbox">
					<img src="/Upload/public/<?php echo ($clist["webtjimgs"]); ?>" style="height:160px;">
				</div>	
				
				<div class="logobox">
					<div style="width:100%;height:30px;line-height:30px;text-align:center;">
						<span style="font-size:22px;font-weight:bold;" class="fcy"><?php echo ($webname); ?></span>
					</div>
				</div>

				<div class="txtbox">
					<div class="txtbox_tb">
						<span><?php echo ($clist["tgtext"]); ?></span>
					</div>
				</div>

				<div class="logobox" style="height:100px;margin-top:30px;">
					<div class="logobox_left" style="width:45%;">				
						<div style="width:80px;height:80px;margin-top:20px;float:right;">
							<img src="/Public/Static/qrcode/<?php echo ($invit); ?>.png" style="width:80px;" />
						</div>
					</div>
					<div class="logobox_right" style="width:52%;">
						<div style="width:100%;height:20px;line-height:20px;margin-top:60px;">
							<span style="font-size:14px;color:#000;"><?php echo L('我的邀请码');?></span>
						</div>	
		
						<div style="width:100%;height:20px;line-height:20px;">
							<span style="font-size:14px;color:#000;"><?php echo ($invit); ?></span>
						</div>
					
					</div>
					<input type="hidden" value="<?php echo ($url); ?>" id="qrcode_url">
				</div>

				<div onclick="copyUrl()" style="width:60%;height:50px;line-height:50px;background: #0052fe;color: #fff;text-align:center;margin:10px auto;border-radius:15px;">
					<span style="color:#fff;font-size:14px;"><?php echo L('复制邀请链接');?></span>
				</div>
				
				<div style="width:100%;height:300px;">
				    
				    <div style="width:100%;height:100px;border-bottom:1px solid #fff;">
				        <p style="width:100%;height:30px;line-height:30px;font-size:16px;font-weight:bold;"><?php echo L('三代会员统计');?></p>
				        <div style="width:100%;height:70px;">
				            <div style="width:50%;height:70px;float:left;">
				                <div style="width:100%;heigth:30px;line-height:30px;text-align:center;">
				                    <?php echo L('已认证');?>
				                </div>
				                <div style="width:100%;heigth:30px;line-height:30px;text-align:center;">
				                    <?php echo ($carr["allrz"]); ?> <?php echo L('人');?>
				                </div>
				            </div>
				            <div style="width:50%;height:70px;float:left;">
				                <div style="width:100%;heigth:30px;line-height:30px;text-align:center;">
				                    <?php echo L('未认证');?>
				                </div>
				                <div style="width:100%;heigth:30px;line-height:30px;text-align:center;">
				                    <?php echo ($carr["allnrz"]); ?> <?php echo L('人');?>
				                </div>
				            </div>
				        </div>
				    </div>
				    
				    <div style="width:100%;height:100px;border-bottom:1px solid #fff;">
				        <p style="width:100%;height:30px;line-height:30px;font-size:16px;font-weight:bold;"><?php echo L('一代会员');?></p>
				        <div style="width:100%;height:70px;">
				            <div style="width:50%;height:70px;float:left;">
				                <div style="width:100%;heigth:30px;line-height:30px;text-align:center;">
				                    <?php echo L('已认证');?>
				                </div>
				                <div style="width:100%;heigth:30px;line-height:30px;text-align:center;">
				                    <?php echo ($carr["one"]); ?> <?php echo L('人');?>
				                </div>
				            </div>
				            <div style="width:50%;height:70px;float:left;">
				                <div style="width:100%;heigth:30px;line-height:30px;text-align:center;">
				                    <?php echo L('未认证');?>
				                </div>
				                <div style="width:100%;heigth:30px;line-height:30px;text-align:center;">
				                    <?php echo ($carr["onen"]); ?> <?php echo L('人');?>
				                </div>
				            </div>
				        </div>
				    </div>
				    
				    <div style="width:100%;height:100px;border-bottom:1px solid #fff;">
				        <p style="width:100%;height:30px;line-height:30px;font-size:16px;font-weight:bold;"><?php echo L('二代会员');?></p>
				        <div style="width:100%;height:70px;">
				            <div style="width:50%;height:70px;float:left;">
				                <div style="width:100%;heigth:30px;line-height:30px;text-align:center;">
				                    <?php echo L('已认证');?>
				                </div>
				                <div style="width:100%;heigth:30px;line-height:30px;text-align:center;">
				                    <?php echo ($carr["two"]); ?> <?php echo L('人');?>
				                </div>
				            </div>
				            <div style="width:50%;height:70px;float:left;">
				                <div style="width:100%;heigth:30px;line-height:30px;text-align:center;">
				                    <?php echo L('未认证');?>
				                </div>
				                <div style="width:100%;heigth:30px;line-height:30px;text-align:center;">
				                    <?php echo ($carr["twon"]); ?> <?php echo L('人');?>
				                </div>
				            </div>
				        </div>
				    </div>
				    
				    <div style="width:100%;height:100px;border-bottom:1px solid #fff;">
				        <p style="width:100%;height:30px;line-height:30px;font-size:16px;font-weight:bold;"><?php echo L('三代会员');?></p>
				        <div style="width:100%;height:70px;">
				            <div style="width:50%;height:70px;float:left;">
				                <div style="width:100%;heigth:30px;line-height:30px;text-align:center;">
				                    <?php echo L('已认证');?>
				                </div>
				                <div style="width:100%;heigth:30px;line-height:30px;text-align:center;">
				                    <?php echo ($carr["three"]); ?> <?php echo L('人');?>
				                </div>
				            </div>
				            <div style="width:50%;height:70px;float:left;">
				                <div style="width:100%;heigth:30px;line-height:30px;text-align:center;">
				                    <?php echo L('未认证');?>
				                </div>
				                <div style="width:100%;heigth:30px;line-height:30px;text-align:center;">
				                    <?php echo ($carr["threen"]); ?> <?php echo L('人');?>
				                </div>
				            </div>
				        </div>
				    </div>
				    
				</div>
				
				

			</div>
		</div>

	</div>		
</body>

<body>
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">
    function copyUrl(){
        var qrcode_url=$("#qrcode_url").val();
        copy(qrcode_url);
    }

    function copy(message) {
        var input = document.createElement("input");
        input.value = message;
        document.body.appendChild(input);
        input.select();
        input.setSelectionRange(0, input.value.length), document.execCommand('Copy');
        document.body.removeChild(input);
        layer.msg("<?php echo L('复制成功');?>");
    }
</script>
<script type="text/javascript">
    function goback(){
        window.history.go(-1);
    }
</script>
</html>