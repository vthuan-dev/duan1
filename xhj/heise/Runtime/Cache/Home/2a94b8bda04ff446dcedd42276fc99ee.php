<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1.0,initial-scale=1,user-scalable=no,viewport-fit=true" data-shuvi-head="true">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">	
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	    <link rel="stylesheet" type="text/css" href="/Public/Home/static/css/base.css" />
	    <title><?php echo ($webname); ?></title>
	    <style>
            .css-1wr4jig {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-flex: 1;
                -ms-flex: 1;
                flex: 1;
            }
            .css-1pysja1 {box-sizing: border-box;margin: 0;min-width: 0; -webkit-flex: 1;-ms-flex: 1;flex: 1;}
            .css-6nqu2s {box-sizing: border-box; margin: 0;min-width: 0;}
            .css-b22026 {box-sizing: border-box;margin: 0;min-width: 0;}
            .css-1xamyaw {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                /*margin-left: auto;*/
                margin-right: auto;
                max-width: 1200px;
                font-size: 12px;
                -webkit-flex-wrap: wrap;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
                margin-bottom: 0;
                padding-left: 16px;
                padding-right: 16px;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }
            .css-1xamyaw {
                margin-bottom: 0;
                padding-left: 24px;
                padding-right: 24px;
            }
            .css-o32gok {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                font-weight: 600;
                font-size: 28px;
                line-height: 36px;
                font-size: 24px;
                /*color: #1E2329;*/
                color: #FAFAFA;
            }
            .css-jwys36 {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                display: none;
                margin-left: auto;
            }
            .css-8puh95 {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                display: -webkit-inline-box;
                display: -webkit-inline-flex;
                display: -ms-inline-flexbox;
                display: inline-flex;
                position: relative;
                height: 32px;
                margin-top: 4px;
                margin-bottom: 0px;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                line-height: 1.6;
                border: 1px solid transparent;
                border-color: #EAECEF;
                border-radius: 4px;
                padding-left: 8px;
                padding-right: 8px;
                background-color: #FFFFFF;
                margin-top: 0;
                width: 100%;
                height: 44px;
            }
            .css-1t9l9dt {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                /*background-color: #FAFAFA;*/
                padding-top: 24px;
                padding-bottom: 24px;
                padding-left: 16px;
                padding-right: 16px;
                display: none;
            }
            .css-1t9l9dt {
                padding-left: 24px;
                padding-right: 24px;
                display: block;
            }
            .css-8hstpq {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                margin-left: auto;
                margin-right: auto;
                max-width: 1200px;
                font-size: 12px;
                -webkit-flex-wrap: wrap;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
                margin-bottom: -16px;
                margin-left: 0;
            }
            .css-8hstpq {
                margin-bottom: 0;
                margin-left: auto;
            }
            .tophangqi{height:120px;width:22%;background-color:#f3f3f3;border-radius:10px;padding:0px 15px;}
            .css-194m5n4 {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                background-color: #FFFFFF;
                /*padding-bottom: 24px;*/
                border-radius: 32px 32px 0px 0px;

            }
            .css-1hc8c4h {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                margin-left: auto;
                margin-right: auto;
                max-width: 1200px;
                padding-left: 0;
                padding-right: 0;
                border-radius: 32px 32px 0px 0px;
            }
            .css-1hc8c4h {
                padding-left: 8px;
                padding-right: 8px;
            }
            .css-dlistbox{width:100%;min-height:500px;}
            .css-dlbbox{width:100%;height:30px;background-color:#f3f3f3;padding:0px 10px;}
            .listtitle{height:30px;line-height:30px;}
            .css-dlbbox2{width:100%;height:50px;background-color:#fff;padding:0px 10px;border-bottom:1px solid #f3f3f3;}
            .listtitle2{height:50px;line-height:50px;}

			.bg-box {
				background:#fff;
				width: 100%;
				position: relative;
				height: 560px;
				padding-top: 158px;
				text-align: center;
			}

			.css-8hstpq_img {
				width: 100%;
				height: 120px;
			}

			.tophangqi {
				/*margin-right: 1%;*/
				width: 25%;
			}

			.reginput{
				width: 380px !important;
				height: 60px !important;
				border-radius: 10px !important;
			}

			.regbtn {
				width: 100px !important;
				height: 60px !important;
				background: #07c160 !important;
				border-radius: 10px !important;
				border: none;
				color: #fff;
				font-size: 18px;
			}

			.css-1hc8c4h {
				border: 1px solid #e9e2e2;
				border-radius: 0px;
				padding: 0px;
			}

			.regbtnimg {
				width: 720px;
				position: absolute;
				right: 0px;
				bottom: -120px;
				box-shadow: none !important;


			}

			.css-1xamyaw-content {
				width: 100%;
				color: #fff;
				text-align: center;
				padding-right: 100px;
			}

			.bg-box {
				padding-top: 0px;
    		}

			.reg-input-box {
				margin-top: 60px;
			}

			.option-box {
				width: 40%;
				height: 60%;
				background: #07c160;
				margin-top: 7%;
				margin: 7% auto;
				line-height: 30px;
				border-radius:3px;
				text-decoration :none !important;
			}

			.profit_loss_g {
				background: #eaf6f3;
				padding: 7px;
			}

			.profit_loss_r {
				background: #feeeee;
				padding: 7px;
			}

			.fred {
				color: #fa5252;
			}

			.rgreen {
				color: #12b886;
			}
			.body {
				background: #f6f7f9;
				background-color: #f6f7f9;
			}

			.img-fluid {
				width: 288px !important;
				height: 122px !important;
				border-radius: 5px;
			}

			.notice {
				height: 50px;
				width: 100%;
			}

			.box {
				width: 1000px;
				height: 50px;
				background-color: #fff;
				position: relative;
				top: 0;
				right: 0;
				bottom: 0;
				left: 0;
				/*margin: auto;*/
				overflow: hidden;
				color: #000;
				border-radius: 5px;
			}
			.box ul {
				position: absolute;
				top: 0;
				left: 0;
			}
			.box ul li {
				line-height: 50px;
				list-style: none;
				padding: 0 30px;
				box-sizing: border-box;
				cursor: pointer;
			}

			.box_ul >li {
				padding-left: 0px;
			}





		</style>
		<link rel="stylesheet" href="/Public/Static/bootstrap5Slide/bootstrap.min.css">
		<link rel="stylesheet" href="/Public/Static/bootstrap5Slide/style.css">


	</head>
	<body style="background-color: #f6f7f9;">
	    <div class="App">
	        <div class="css-tq0shg">
	            <header class="css-jmskxt">
	 <a href="<?php echo U('Index/index');?>" clss="css-1mvf8us">
	     <img src="/Upload/public/<?php echo get_config('waplogo');?>" class="css-1jgk2rg" style="height:50px;width:50px;border-radius:5px;margin-left: 30px;" />
	 </a>
	<div class="css-1tp5kus header-title">
		<div class="css-vurnku  f22 fw header-title"><?php echo L('Bitwise');?></div>
	</div>
	 <div class="css-1tp5kus">
	     <a href="<?php echo U('Index/index');?>" class="css-1smf7ma">
	         <div class="css-vurnku"><?php echo L('首页');?></div>
	     </a>
	 </div>

	<div class="css-1tp5kus buy_coins">
		<ul class="buy-sub" style="padding:0px;display:none;z-index: 999999;">
			<!--<div class="order_navlist" style="transform: translate(972px, 64px);">-->
			<div class="order_navlist buy_navlist">
				<li  class="li-sub" style="list-style:none;">
					<a href="https://banxa.com/">
						<div class="optionli">
							<svg width="18" height="18" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 13V9.00001C14 7.89544 14.8954 7.00001 16 7.00001H42C43.1046 7.00001 44 7.89544 44 9.00001V27C44 28.1046 43.1046 29 42 29H40" stroke="#116947" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><rect x="4" y="19" width="30" height="22" rx="2" fill="#00b897" stroke="#116947" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 28L34 28" stroke="#116947" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><path d="M34 23L34 35" stroke="#116947" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 23L4 35" stroke="#116947" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><path d="M11 34L19 34" stroke="#116947" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><path d="M25 34L27 34" stroke="#116947" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
							<span class="f18"  style="color:#EAECEF;">Banxa</span>
						</div>
					</a>
				</li>
				<li  class="li-sub"  style="list-style:none;">
					<a href="https://www.simplex.com/account/buy">
						<div class="optionli">
							<svg width="18" height="18" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" fill="white" fill-opacity="0.01"/><path d="M4 10C4 8.89543 4.89543 8 6 8H42C43.1046 8 44 8.89543 44 10V38C44 39.1046 43.1046 40 42 40H6C4.89543 40 4 39.1046 4 38V10Z" fill="#00b897" stroke="#147c52" stroke-width="3" stroke-linejoin="bevel"/><path d="M4 16H44" stroke="#147c52" stroke-width="3" stroke-linecap="butt" stroke-linejoin="bevel"/><path d="M27 32H36" stroke="#147c52" stroke-width="3" stroke-linecap="butt" stroke-linejoin="bevel"/><path d="M44 10V26" stroke="#147c52" stroke-width="3" stroke-linecap="butt" stroke-linejoin="bevel"/><path d="M4 10V26" stroke="#147c52" stroke-width="3" stroke-linecap="butt" stroke-linejoin="bevel"/></svg>
							<span class="f18"   style="color:#EAECEF;">Simplex</span>
						</div>
					</a>
				</li>
				<li  class="li-sub"  style="list-style:none;">
					<a href="https://www.simplex.com/account/buy">
						<div class="optionli">
							<svg width="18" height="18" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" fill="white" fill-opacity="0.01"/><path d="M44 18V8H4V18" stroke="#147c52" stroke-width="3" stroke-linecap="butt" stroke-linejoin="bevel"/><rect x="4" y="18" width="40" height="22" fill="#00b897" stroke="#147c52" stroke-width="3" stroke-linejoin="bevel"/><path d="M12 29H14" stroke="#147c52" stroke-width="3" stroke-linecap="butt" stroke-linejoin="bevel"/><path d="M20 29H22" stroke="#147c52" stroke-width="3" stroke-linecap="butt" stroke-linejoin="bevel"/><path d="M28 29H30" stroke="#147c52" stroke-width="3" stroke-linecap="butt" stroke-linejoin="bevel"/></svg>
							<span class="f18"   style="color:#EAECEF;">Ramp</span>
						</div>
					</a>
				</li>
			</div>
		</ul>
		<a href="javascript:vido(0)" class="css-1smf7ma">
			<div class="css-vurnku"><?php echo L('买币');?>
				<i class="bi bi-caret-down-fill css-1x1srvk" style="font-size:12px;"></i>
			</div>
		</a>
	</div>

	<div class="css-1tp5kus trad_coins">
		<ul class="trad-sub" style="padding:0px;display:none;z-index: 999999;">
			<!--<div class="order_navlist" style="transform: translate(972px, 64px);">-->
			<div class="order_navlist trad_navlist">
				<li  class="li-sub" style="list-style:none;">
					<a href="<?php echo U('Contract/index');?>">
						<div class="optionli">
							<svg width="18" height="18" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" fill="white" fill-opacity="0.01"/><path d="M4 44H44" stroke="#076338" stroke-width="3" stroke-linecap="butt" stroke-linejoin="bevel"/><path d="M4 26L12 28V38H4V26Z" fill="#00b897" stroke="#076338" stroke-width="3" stroke-linejoin="bevel"/><path d="M20 24L28 20V38H20V24Z" fill="#00b897" stroke="#076338" stroke-width="3" stroke-linejoin="bevel"/><path d="M36 16L44 12V38H36V16Z" fill="#00b897" stroke="#076338" stroke-width="3" stroke-linejoin="bevel"/><path d="M4 18L12 20L44 4H34" stroke="#076338" stroke-width="3" stroke-linecap="butt" stroke-linejoin="bevel"/></svg>
							<span class="f18" style="color:#EAECEF;"><?php echo L('秒合约');?><img src="/Public/Home/static/imgs/hot-2.svg" class="hot-2"></span>
						</div>
					</a>
				</li>
				<li  class="li-sub"  style="list-style:none;">
					<a href="<?php echo U('Trade/index');?>">
						<div class="optionli">
							<svg width="18" height="18" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" fill="white" fill-opacity="0.01"/><circle cx="24" cy="24" r="20" fill="#00b897" stroke="#076338" stroke-width="3" stroke-linecap="butt" stroke-linejoin="bevel"/><path d="M20 16H25H27C29.2091 16 31 17.7909 31 20C31 22.2091 29.2091 24 27 24H20V16Z" fill="#00b897"/><path d="M20 16V24H27C29.2091 24 31 22.2091 31 20V20C31 17.7909 29.2091 16 27 16H25M20 16H16M20 16V12M20 16H25M25 16V12" stroke="#076338" stroke-width="3" stroke-linecap="butt" stroke-linejoin="bevel"/><path d="M20 24H29C31.2091 24 33 25.7909 33 28C33 30.2091 31.2091 32 29 32H25H20V24Z" fill="#00b897"/><path d="M20 32V24H29C31.2091 24 33 25.7909 33 28V28C33 30.2091 31.2091 32 29 32H25M20 32V36M20 32H16H25M20 32H25M25 32V36" stroke="#076338" stroke-width="3" stroke-linecap="butt" stroke-linejoin="bevel"/></svg>
							<span class="f18"   style="color:#EAECEF;"><?php echo L('币币交易');?></span>
						</div>
					</a>
				</li>
			</div>
		</ul>
		<a href="<?php echo U('Index/index');?>" class="css-1smf7ma">
			<div class="css-vurnku"><?php echo L('交易');?>
				<i class="bi bi-caret-down-fill css-1x1srvk" style="font-size:12px;"></i>
			</div>
		</a>
	</div>

	 <div class="css-1tp5kus">
	     <a href="<?php echo U('Issue/index');?>" class="css-1smf7ma">
	         <div class="css-vurnku">IEO</div>
	     </a>
	 </div>
	 <div class="css-1tp5kus">
	     <a href="<?php echo U('Orepool/index');?>" class="css-1smf7ma">
	         <div class="css-vurnku">Staking</div>
	     </a>
	 </div>
	 <div class="css-1tp5kus">
	     <a href="<?php echo U('Index/gglist');?>" class="css-1smf7ma">
	         <div class="css-vurnku"><?php echo L('公告中心');?></div>
	     </a>
	 </div>
	 <div class="css-11y6cix"></div>
	 
	 <ul id="nav" class="nav">
	 <div class="css-wu6zme">
	     
	     <?php if($uid != 0): ?><div class="css-mu7imd nav">
	         <div class="css-1smf7ma">
	             <a href="<?php echo U('Finance/index');?>">
	             <div class="css-15owl46"  style="padding: 0px 5px;">
	                 <div class="css-vurnku" style="color:#fff;"><?php echo L('钱包');?></div>
	             </div>
	             </a>
	         </div>
	         <div class="css-1smf7ma">
	             <li class="nLi">
	                 <div class="css-15owl46"  style="padding: 0px 5px;">
	                     <div class="css-vurnku"><?php echo L('订单');?>
	                         <i class="bi bi-caret-down-fill css-1x1srvk" style="font-size:12px;"></i>
	                     </div>
	                 </div>
	                 <ul class="sub" style="padding:0px;display:none;z-index: 999999;">
	                 <!--<div class="order_navlist" style="transform: translate(972px, 64px);">-->
	                 <div class="order_navlist" style="top: 50px;right:180px;">
	                     
	                         <li style="list-style:none;">
	                             <a href="<?php echo U('Trade/bborder');?>">
	                             <div class="optionli">
	                                 <i class="bi bi-ui-checks" style="color:#00b897;font-size:18px;"></i>
	                                 <span style="color:#EAECEF;"><?php echo L('币币交易订单');?></span>
	                             </div>
	                             </a>
	                         </li>
	                         <li  style="list-style:none;">
	                             <a href="<?php echo U('Contract/contractjc');?>">
	                             <div class="optionli">
	                                 <i class="bi bi-sliders" style="color:#00b897;font-size:18px;"></i>
	                                 <span  style="color:#EAECEF;"><?php echo L('合约交易订单');?></span>
	                             </div>
	                             </a>
	                         </li>
	                         <li  style="list-style:none;">
	                             <a href="<?php echo U('Issue/normalissue');?>">
	                             <div class="optionli">
	                                 <i class="bi bi-ui-radios" style="color:#00b897;font-size:18px;"></i>
	                                 <span  style="color:#EAECEF;"><?php echo L('认购订单');?></span>
	                             </div>
	                             </a>
	                         </li>
	                         <li  style="list-style:none;">
	                             <a href="<?php echo U('Orepool/normalmin');?>">
	                             <div class="optionli">
	                                 <i class="bi bi-hammer" style="color:#00b897;font-size:18px;"></i>
	                                 <span  style="color:#EAECEF;"><?php echo L('矿机订单');?></span>
	                             </div>
	                             </a>
	                         </li>
	                     
	                 </div>
	                 </ul>
	             </li>
	         </div>
	         
	         
	         <div class="css-1smf7ma">
	             <li class="nLi">
	                 <div class="css-15owl46" style="padding: 0px 5px;">
	                     <div class="css-vurnku">
	                         <a href="<?php echo U('User/index');?>" style="color: #fff;">
	                         <i class="bi bi-person-circle" style="font-size:20px;"></i>
	                         </a>
	                     </div>
	                 </div>
	                 <ul class="sub" style="padding:0px;display:none;z-index: 999999;">
	                 <div class="order_navlist" style="min-width:220px;top: 60px;right:60px;">
	                     
	                         <li style="list-style:none;">
	                             <div style="width:100%;height:50px;line-height:50px;text-align:left;padding:0px 15px;">
	                                 <span style="font-size:16px;font-weight:bold;color:#EAECEF;"><?php echo ($username); ?></span>
	                                 <?php if($rzstatus == 2): ?><span class="f12 fgreen"><?php echo L('已认证');?></span>
	                                 <?php else: ?>
	                                 <span class="f12 fred"><?php echo L('未认证');?></span><?php endif; ?>
	                             </div>
	                         </li>

	                         <li  style="list-style:none;">
	                             <a href="<?php echo U('User/index');?>">
	                             <div class="optionli">
	                                 <i class="bi bi-person-fill" style="color:#00b897;font-size:18px;"></i>
	                                 <span  style="color:#EAECEF;"><?php echo L('账户总览');?></span>
	                             </div>
	                             </a>
	                         </li>
	                         <li  style="list-style:none;">
	                             <a href="<?php echo U('User/respwd');?>">
	                             <div class="optionli">
	                                 <i class="bi bi-gear" style="color:#00b897;font-size:18px;"></i>
	                                 <span  style="color:#EAECEF;"><?php echo L('安全设置');?></span>
	                             </div>
	                             </a>
	                         </li>
	                         <li  style="list-style:none;">
	                             <a href="<?php echo U('User/authrz');?>">
	                             <div class="optionli">
	                                 <i class="bi bi-shield-fill" style="color:#00b897;font-size:18px;"></i>
	                                 <span  style="color:#EAECEF;"><?php echo L('身份认证');?></span>
	                             </div>
	                             </a>
	                         </li>
	                         <li  style="list-style:none;">
	                             <a href="<?php echo U('User/tgcode');?>">
	                             <div class="optionli">
	                                 <i class="bi bi-person-plus-fill" style="color:#00b897;font-size:18px;"></i>
	                                 <span  style="color:#EAECEF;"><?php echo L('推荐返佣');?></span>
	                             </div>
	                             </a>
	                         </li>
	                         
	                         <li  style="list-style:none;">
	                             <a href="<?php echo U('Login/loginout');?>">
	                             <div class="optionli" style="border-top:1px solid #f5f5f5;">
	                                 <i class="bi bi-box-arrow-right" style="color:#00b897;font-size:18px;"></i>
	                                 <span  style="color:#EAECEF;"><?php echo L('退出账号');?></span>
	                             </div>
	                             </a>
	                         </li>
	                     
	                 </div>
	                 </ul>
	                 
	             </li>
	             
	         </div>
	         <div class="css-1smf7ma">
	             
	             <div class="css-15owl46" style="padding: 0px 5px;"> 
	                 <a href="<?php echo U('User/notice');?>" style="color: #fff;">
	                 <div class="css-vurnku">
	                     <i class="bi bi-bell css-6px2js" style="font-size:20px;"></i>
	                     <?php if($sum >= 1): ?><div class="css-1rch7es"><?php echo ($sum); ?></div><?php endif; ?>
	                 </div>
	                 </a>
	             </div>
	         </div>
	     </div>
	     <?php else: ?>
	     <div class="css-mu7imd">
	         <a href="<?php echo U('Login/index');?>">
	         <div class="css-1smf7ma">
	             <div class="css-15owl46"  style="padding: 0px 5px;">
	                 <div class="css-vurnku"><?php echo L('登陆');?></div>
	                 
	             </div>
	         </div>
	         </a>
	     </div>
	     <div class="css-mu7imd" style="border: 2px solid #00b897;border-radius: 5px;">
	         <a href="<?php echo U('Login/register');?>">
	         <div class="css-1smf7ma">
	             <div class="css-15owl46"  style="padding: 0px 5px;">
	                 <div class="css-vurnku" style="color: #00b897"><?php echo L('注册');?></div>
	             </div>
	         </div>
	         </a>
	     </div><?php endif; ?>
	     
	 </div>

	 <div class="css-wu6zme">
	     <li class="nLi">
	     <div class="css-1ql2hru" style="padding: 0px 5px;">
	         <div class="css-1smf7ma"><?php echo L('下载');?></div>
	         <ul class="sub" style="padding:0px;display:none;z-index: 999999;">
	             <div class="order_navlist" style="min-width:220px;top: 50px;right: 60px;">
	                 <div style="width:140px;height:140px;margin:10px auto;">
	                     <img src="/Public/Static/qrcode/FanamLa.png" style="width:100%;border-radius:10px;" />
	                 </div>
	                 <div style="width:100%;height:30px;line-height:30px;text-align:center;">
	                     <span style="color:#fff;font-size:12px;"><?php echo L('自动识别设备');?></span>
	                 </div>
	             </div>
	         </ul>
	     </div>
	     </li>
	     <li class="nLi">
	     <div class="css-1ql2hru" style="padding: 0px 5px;">
	         
	        <?php if(LANG_SET=='zh-cn'){?>
			<div class="css-1smf7ma">中文简体&nbsp;&nbsp;</div>
			<?php }elseif(LANG_SET=='en-us'){?>
			<div class="css-1smf7ma">English&nbsp;&nbsp;</div>	
			<?php }elseif(LANG_SET=='fr-fr'){?>
			<div class="css-1smf7ma">Français&nbsp;&nbsp;</div>	
			<?php }elseif(LANG_SET=='de-de'){?>
			<div class="css-1smf7ma">Deutsch&nbsp;&nbsp;</div>	
			<?php }elseif(LANG_SET=='it-it'){?>
			<div class="css-1smf7ma">Italiano&nbsp;&nbsp;</div>	
			<?php }elseif(LANG_SET=='ja-jp'){?>
            <div class="css-1smf7ma">日本語&nbsp;&nbsp;</div>
            <?php }elseif(LANG_SET=='ko-kr'){?>
            <div class="css-1smf7ma">한국어&nbsp;&nbsp;</div>
            <?php }elseif(LANG_SET=='tr-tr'){?>
            <div class="css-1smf7ma">Türk&nbsp;&nbsp;</div>	
			<?php }?>
			
	     </div>
	     <ul class="sub" style="padding:0px;display:none;">
	        <!--<div class="order_navlist" style="min-width:160px;transform: translate(1161px, 64px);">-->
	        <div class="order_navlist" style="min-width:160px;top:50px;right: 10px;">
	            <li  style="list-style:none;">
	                <a href="<?php echo U('?Lang=zh-cn');?>">
	                <div class="optionli">
	                    <span  style="color:#EAECEF;font-size:14px;">简体中文</span>
	                </div>
	                </a>
	            </li>
	            <li  style="list-style:none;">
	                <a href="<?php echo U('?Lang=en-us');?>">
	                <div class="optionli">
	                    <span  style="color:#EAECEF;font-size:14px;">English</span>
	                </div>
	                </a>
	            </li>
	            <li  style="list-style:none;">
	                <a href="<?php echo U('?Lang=fr-fr');?>">
	                <div class="optionli">
	                    <span  style="color:#EAECEF;font-size:14px;">Français</span>
	                </div>
	                </a>
	            </li>
	            <li  style="list-style:none;">
	                <a href="<?php echo U('?Lang=de-de');?>">
	                <div class="optionli">
	                    <span  style="color:#EAECEF;font-size:14px;">Deutsch</span>
	                </div>
	                </a>
	            </li>
	            <li  style="list-style:none;">
	                <a href="<?php echo U('?Lang=ja-jp');?>">
	                <div class="optionli">
	                    <span  style="color:#EAECEF;font-size:14px;">日本語</span>
	                </div>
	                </a>
	            </li>
	            <li  style="list-style:none;">
	                <a href="<?php echo U('?Lang=it-it');?>">
	                <div class="optionli">
	                    <span  style="color:#EAECEF;font-size:14px;">Italiano</span>
	                </div>
	                </a>
	            </li>
	            <li  style="list-style:none;">
	                <a href="<?php echo U('?Lang=ko-kr');?>">
	                <div class="optionli">
	                    <span  style="color:#EAECEF;font-size:14px;">한국어</span>
	                </div>
	                </a>
	            </li>
	            <li  style="list-style:none;">
	                <a href="<?php echo U('?Lang=tr-tr');?>">
	                <div class="optionli">
	                    <span  style="color:#EAECEF;font-size:14px;">Türk</span>
	                </div>
	                </a>
	            </li>
	       </div>
	     </li>
	 </div>
	 </ul>
</header> 
	            
	            <main class="css-1wr4jig">

	                <div class="css-1pysja1">
						<div class="bg-box">
							<div class="css-1t9l9dt" style="width: 100%;padding-top:74px;">
							<div class="css-8hstpq-bg css-8hstpq" >
									<div class="css-b22026 reg-input-box">
									<div class="css-1xamyaw  css-1xamyaw-l">
										<div class="css-1xamyaw-content">
											<p style="font-size: 36px;padding-bottom: 40px;text-align: initial;color:#151617">Bitwise一直以來擔任全球加密貨幣領導者</p>

											<p style="font-size: 26px;color:#444545;width: 500px;">$289,789,518.011</p>
											<p style="font-size: 18px;color:#444545;width: 500px;">24小時交易量</p>
										</div>
										<form class="form-inline" action="<?php echo U('Login/register');?>" >
											<input type="email" class="form-control mb-2 mr-sm-2 reginput" placeholder="<?php echo L('请输入邮箱或手机');?>" id="email">
											<button type="submit" class=" mb-2 regbtn"><?php echo L('注册');?></button>
										</form>
									</div>

									<div class="css-1xamyaw  css-xamyaw-r">
<!--										<img src="/Public/Home/static/imgs/home_head_bg.png" class="regbtnimg" />-->
									</div>
								</div>
							</div>
							</div>

						</div>

						<div>
							<div class="css-1t9l9dt" style="width: 100%;background: #f6f7f9;padding: 55px 24px;">

								<div class="css-8hstpq" style="height: 220px;">
									<div style="
										width: 100px;
										margin-left: 40px;
										margin-right: 20px;
										height: 50px;
										background: #0052fe !important;
										float: right;
										text-align: center;
										line-height: 50px;
										font-size: 18px;
										color: #fff;
									">
										<p>公告: </p>
									</div>
									<div class="box">
										<ul id="box_ul">

										</ul>
									</div>

									<div class="container" >

										<div class="row mx-auto my-auto justify-content-center">
											<div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
												<div class="carousel-inner" role="listbox">
													<div class="carousel-item active">
														<div class="col-md-3">
															<div class="card">
																<div class="card-img">
																	<img src="/Upload/public/<?php echo get_config('wapsildea');?>" class="img-fluid">
																</div>
<!--																<div class="card-img-overlay">Slide 1</div>-->
															</div>
														</div>
													</div>
													<div class="carousel-item">
														<div class="col-md-3">
															<div class="card">
																<div class="card-img">
																	<img src="/Upload/public/<?php echo get_config('wapsildeb');?>" class="img-fluid">
																</div>
<!--																<div class="card-img-overlay">Slide 2</div>-->
															</div>
														</div>
													</div>
													<div class="carousel-item">
														<div class="col-md-3">
															<div class="card">
																<div class="card-img">
																	<img src="/Upload/public/<?php echo get_config('wapsildec');?>" class="img-fluid">
																</div>
<!--																<div class="card-img-overlay">Slide 3</div>-->
															</div>
														</div>
													</div>
													<div class="carousel-item">
														<div class="col-md-3">
															<div class="card">
																<div class="card-img">
																	<img src="/Upload/public/<?php echo get_config('wapsilded');?>" class="img-fluid">
																</div>
<!--																<div class="card-img-overlay">Slide 4</div>-->
															</div>
														</div>
													</div>
<!--													<div class="carousel-item">-->
<!--														<div class="col-md-3">-->
<!--															<div class="card">-->
<!--																<div class="card-img">-->
<!--																	<img src="https://via.placeholder.com/500x400/aba?text=5" class="img-fluid">-->
<!--																</div>-->
<!--																<div class="card-img-overlay">Slide 5</div>-->
<!--															</div>-->
<!--														</div>-->
<!--													</div>-->
<!--													<div class="carousel-item">-->
<!--														<div class="col-md-3">-->
<!--															<div class="card">-->
<!--																<div class="card-img">-->
<!--																	<img src="https://via.placeholder.com/500x400/fc0?text=6" class="img-fluid">-->
<!--																</div>-->
<!--																<div class="card-img-overlay">Slide 6</div>-->
<!--															</div>-->
<!--														</div>-->
<!--													</div>-->
												</div>
												<a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
													<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												</a>
												<a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
													<span class="carousel-control-next-icon" aria-hidden="true"></span>
												</a>
											</div>
										</div>

									</div>


								</div>

							</div>
						</div>
	                	<div class="css-194m5n4" style="padding-top:30px;">
	                    <div class="css-1hc8c4h">

	                        <div class="css-dlistbox" >
	                            <div class="css-dlbbox">
	                                <div class="listtitle tcc fl col-2">
	                                    <span class="f12 fch"><?php echo L('名称');?></span>
	                                </div>
	                                <div class="listtitle tcc fl col-2">
	                                    <span class="f12 fch"><?php echo L('价格');?></span>
	                                </div>
	                                <div class="listtitle tcc fl col-2">
	                                    <span class="f12 fch"><?php echo L('涨跌幅');?></span>
	                                </div>
	                                <div class="listtitle tcc fl col-2">
	                                    <span class="f12 fch"><?php echo L('最高');?>/<?php echo L('最低');?></span>
	                                </div>
	                                <div class="listtitle tcc fl col-2">
	                                    <span class="f12 fch">24H<?php echo L('量');?></span>
	                                </div>
	                                <div class="listtitle tcc fl col-2">
	                                    <span class="f12 fch"><?php echo L('操作');?></span>
	                                </div>
	                            </div>
	                            
	                            <?php if(is_array($market)): foreach($market as $key=>$vo): ?><div class="css-dlbbox2 market-div" >
	                                <div class="listtitle2 tcl fl col-2" >
										<img src="<?php echo ($vo["logo"]); ?>" class="cion_logo">
	                                    <span class="f14 fch fw cn_<?php echo ($vo["coinname"]); ?>"><?php echo strtoupper($vo['coinname']);?>/USDT</span>
	                                </div>

	                                <div class="listtitle2 tcc fl col-2" >
	                                    <span class="f14 fch cpr_<?php echo ($vo["coinname"]); ?>">--:--</span>
	                                </div>

	                                <div class="listtitle2 tcc fl col-2 cch_<?php echo ($vo["coinname"]); ?>" >
											<span class="f14 fch fw profit_loss">0.00%</span>
	                                </div>

	                                <div class="listtitle2 tcc fl col-2" >
	                                    <span class="f14 fch fw hl_<?php echo ($vo["coinname"]); ?>">--.--/--.--</span>
	                                </div>
	                                <div class="listtitle2 tcc fl col-2" >
	                                    <span class="f14 fch fw vol_<?php echo ($vo["coinname"]); ?>">--.--</span>
	                                </div>
	                                <div class="listtitle2 tcc fl col-2" >
										<div class="tcc option-box">
	                                    <a href="<?php echo U('Trade/index');?>?type=buy&symbol=<?php echo strtoupper($vo['coinname']);?>" href="" class="f14 " style="color: #fff;text-decoration:none"><?php echo L('交易');?></a>
										</div>
	                                </div>
	                            </div><?php endforeach; endif; ?>

	                        </div>

	                    </div>

						<div class="css-1hc8c4h index-box-2" >
								<div class="css-dlistbox" style="min-height: 800px;" >
									<!-- 顶部显示-->
									<div class="css-dlistbox-top css-dlistbox-sub" >
										<div class="ss-dlistbox-top-text">
											<p class="ss-dlistbox-top-p1" >立即开始您的加密货币之旅</p>
											<p class="ss-dlistbox-top-p2">Robit 全球公司拥有多种功能，使其成为买卖数字资产的理想场所。</p>
										</div>

									</div>
									<!-- 顶部显示-->
									<!-- 左侧-->
									<div class="css-dlistbox-l css-dlistbox-sub" >
										<div class="css-dlistbox-l-item1">
											<div class="css-dlistbox-l-content">
												<div class="icon1-73beb614 icon-73beb614"></div>
												<p class="data-p-title">管理您的资产</p>
												<p>以高达<b>5倍</b>的杠杆率进行现货交易。</p>
											</div>
											<div class="css-dlistbox-l-content">
												<div class="icon2-73beb614 icon-73beb614"></div>
												<p class="data-p-title">信用卡付款</p>
												<p>通过我们的合作伙伴用您的<b>信用卡</b>购买加密货币。</p>
											</div>
											<div class="css-dlistbox-l-content css-dlistbox-l-content-4">
												<div class="icon3-73beb614 icon-73beb614"></div>
												<p class="data-p-title">安全储存</p>
												<p class="data-p-content">客户资金存放在专用的多签名</p>
												<p class="data-p-content"> 冷钱包中。24/7全天候安全监控。</p>
												<p class="data-p-content">专用<b>20,000 BTC安全储备金。</b></p>
											</div>
											<div class="css-dlistbox-l-content">
												<div class="icon-73beb614"></div>
												<p class="data-p-title">随处访问</p>
												<p class="data-p-content">在我们用于Android和iOS的移动应用上进行24/7全</p>
												<p class="data-p-content">天候存款，取款和交易。</p>
											</div>

											<div class="css-dlistbox-l-download css-dlistbox-l-content">
												<div class="icon-73beb614"></div>
												<div class="ios-down-73beb614"></div>
												<div class="android-down-73beb614"></div>
											</div>
										</div>

									</div>
									<!-- 左侧-->
									<!-- 右侧-->
									<div class="css-dlistbox-r css-dlistbox-sub" >
										<div class="css-dlistbox-bg">

										</div>
										<div class="css-dlistbox-phone">

										</div>
										<div class="img1">

										</div>
										<div class="img2">

										</div>
									</div>
									<!-- 右侧-->
								</div>



							</div>

						<div class="css-1hc8c4h index-box-3">
							<div class="css-dlistbox" style="min-height: 300px" >
								<!-- 顶部显示-->
								<div class="css-dlistbox-top-desc css-dlistbox-sub" >
									<div class="css-dlistbox-l-item1">
										<div class="">
											<p class="ss-dlistbox-top-p1 tcl" >The most complete trading cryptocurrency platform</p>
											<p class="ss-dlistbox-top-p2 tcl">Here are a few reasons why you should choose Robit </p>
										</div>
									</div>
								</div>
								<!-- 顶部显示-->
								<div class="css-dlistbox-top-desc css-dlistbox-sub-desc" >
										<div class="css-dlistbox-desc-box col-4">
											<div class="home_infoWrapper__G_KFW">
												<img src="/Public/Home/static/imgs/icon_margin.svg" class="home_margin__qse_K" alt="">
												<p>Maximize profit with leverage</p>
											</div>
										</div>
										<div class="css-dlistbox-desc-box col-4">
											<div class="home_infoWrapper__G_KFW">
												<img src="/Public/Home/static/imgs/icon_contract.svg" class="home_margin__qse_K" alt="">
												<p>Up to 125x leverage with superior spreads</p>
											</div>
										</div>
										<div class="css-dlistbox-desc-box col-4">
											<div class="home_infoWrapper__G_KFW">
												<img src="/Public/Home/static/imgs/icon_etf.svg" class="home_margin__qse_K" alt="">
												<p>Increased leverage, no liquidation risk</p>
											</div>
										</div>

								</div>

							</div>
						</div>

						<div class="index-box-4">
							<div class="css-1hc8c4h css-1hc8c4h-box-4 st">
								<div class="css-dlistbox css-dlistbox-4" >
								<!-- 顶部显示-->
								<div class="css-dlistbox-top-desc css-dlistbox-sub" >
									<div class="css-dlistbox-l-item1">
										<div class="">
											<p class="ss-dlistbox-top-p1 tcl" >Join the MEXC Community Today</p>
											<p class="ss-dlistbox-top-p2 tcl">Always there for you</p>
										</div>
									</div>
								</div>
								<div class="home_mainMedia__fc9Ke">
									<img src="/Public/Home/static/imgs/tg.webp" width="38" style="margin-right: 5px;" />
									<span>Telegram</span>
								</div>

								<div class="svg_list">
									<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" class="footer_svg" fill="#f21515"><path d="M20 0a4 4 0 0 1 4 4v16a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h16zm-7.7 7h-.6l-1.1.01c-1.48.03-3.7.1-4.46.29-.65.16-1.15.65-1.33 1.26-.18.64-.25 1.7-.29 2.46l-.02.82v.75c.03.76.1 2.09.31 2.85.18.61.68 1.1 1.33 1.26.74.19 2.87.26 4.34.29l1.41.01h1.16c1.45-.03 4-.09 4.81-.3a1.84 1.84 0 0 0 1.33-1.26c.2-.75.28-2.05.3-2.82v-.93c0-.67-.06-2.26-.3-3.13a1.84 1.84 0 0 0-1.33-1.26 25.9 25.9 0 0 0-3.88-.28L12.3 7zM10.46 9.9L14.39 12l-3.92 2.11V9.89z"/></svg>

									<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" class="footer_svg"  fill="#4495ee"><path d="M20 0a4 4 0 0 1 4 4v16a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h16zm-4 7.28V4.5h-2.29c-2.1 0-3.42 1.6-3.42 3.89v1.67H8v2.77h2.29v6.67h2.85v-6.67h2.29l.57-2.77h-2.86V8.94c0-1.1.58-1.66 1.72-1.66H16z"/></svg>

									<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" class="footer_svg"  fill="#5815b1"><path d="M20 0a4 4 0 0 1 4 4v16a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h16zM8.95 9.4H6.16v8.1h2.8V9.4zm6.84-.19c-1.32 0-2 .63-2.38 1.16l-.13.18V9.4h-2.79l.01.49V17.5h2.78v-4.52a1.52 1.52 0 0 1 1.52-1.64c.96 0 1.37.66 1.41 1.66v4.5H19v-4.64c0-2.49-1.37-3.65-3.2-3.65zM7.58 5.5C6.62 5.5 6 6.1 6 6.9c0 .73.54 1.32 1.38 1.4h.18c.97 0 1.57-.62 1.57-1.4-.01-.8-.6-1.4-1.55-1.4z"/></svg>


									<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" class="footer_svg"  fill="#000000"><path d="M20 0a4 4 0 0 1 4 4v16a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h16zm-5.08 7.63l-.23-.01c-1.06 0-2.05.7-2.6.7-.57 0-1.47-.68-2.42-.66a3.6 3.6 0 0 0-3.05 1.88c-1.3 2.3-.34 5.7.93 7.56l.22.33c.58.8 1.25 1.6 2.1 1.57.94-.04 1.3-.62 2.42-.62 1.13 0 1.45.62 2.43.6.78-.01 1.33-.55 1.83-1.22l.1-.14.33-.48c.42-.63.7-1.26.86-1.66l.1-.3L18 15l-.12-.05a3.34 3.34 0 0 1-.55-5.64l.14-.1.14-.1a3.4 3.4 0 0 0-2.53-1.47l-.16-.01-.23-.01h.23zM14.93 4c-.74.03-1.63.5-2.17 1.14-.47.56-.89 1.45-.78 2.32.83.06 1.67-.43 2.19-1.07.51-.63.86-1.51.76-2.39z"/></svg>



									<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" class="footer_svg"  fill="#15d756"><path d="M20 0a4 4 0 0 1 4 4v16a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h16zm-7.86 4.5a7.34 7.34 0 0 0-6.46 10.82l.15.26L4.5 19.5l4.08-1.3a7.38 7.38 0 0 0 10.92-6.4c0-4.03-3.3-7.3-7.36-7.3zm0 1.16c3.41 0 6.19 2.76 6.19 6.15a6.17 6.17 0 0 1-9.37 5.27l-.23-.15-2.38.76.77-2.28a6.08 6.08 0 0 1-1.17-3.6 6.17 6.17 0 0 1 6.19-6.15zM9.66 8.47a.67.67 0 0 0-.48.23l-.14.15c-.2.23-.5.65-.5 1.34 0 .72.43 1.41.64 1.71l.14.2a7.26 7.26 0 0 0 3.04 2.65l.4.14c1.44.54 1.47.33 1.77.3.33-.03 1.07-.43 1.22-.85.15-.42.15-.78.1-.85-.02-.05-.08-.08-.15-.12l-1.12-.54a5.15 5.15 0 0 0-.3-.13c-.17-.06-.3-.1-.41.09-.12.18-.47.58-.57.7-.1.1-.18.13-.32.08l-.4-.18a4.64 4.64 0 0 1-2.13-1.98c-.1-.18-.01-.28.08-.37l.27-.31c.1-.1.12-.18.18-.3a.3.3 0 0 0 .01-.26l-.1-.23-.48-1.15c-.15-.36-.3-.3-.4-.3l-.35-.02z"/></svg>


									<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" class="footer_svg"  fill="#005cfc"><path d="M12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zm3.193 7c-1.586 0-2.872 1.243-2.872 2.777 0 .217.025.43.074.633a8.251 8.251 0 0 1-5.92-2.902c-.247.41-.389.887-.389 1.397 0 .963.507 1.813 1.278 2.311a2.94 2.94 0 0 1-1.301-.348v.036c0 1.345.99 2.467 2.304 2.723a2.98 2.98 0 0 1-1.298.047c.366 1.103 1.427 1.906 2.683 1.928a5.889 5.889 0 0 1-3.567 1.19c-.231 0-.46-.014-.685-.04A8.332 8.332 0 0 0 9.903 18c5.283 0 8.172-4.231 8.172-7.901 0-.12-.002-.24-.008-.36A5.714 5.714 0 0 0 19.5 8.302a5.869 5.869 0 0 1-1.65.437 2.8 2.8 0 0 0 1.263-1.536 5.87 5.87 0 0 1-1.824.674A2.915 2.915 0 0 0 15.193 7z"/></svg>

									<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" class="footer_svg"  fill="#1578d7"><path d="M12 0a12 12 0 1 1 0 24 12 12 0 0 1 0-24zM8.87 5A3.85 3.85 0 0 0 5 8.82c0 .7.2 1.36.53 1.93a6.63 6.63 0 0 0 7.76 7.8 3.9 3.9 0 0 0 1.84.45 3.85 3.85 0 0 0 3.47-5.51 6.63 6.63 0 0 0-7.67-7.9c-.6-.37-1.3-.59-2.06-.59zm3.16 2.44c.6 0 1.12.07 1.56.2.44.14.81.32 1.1.55.3.22.51.46.65.72.14.25.2.5.2.75a.9.9 0 0 1-.26.63.92.92 0 0 1-.69.28.86.86 0 0 1-.58-.17 2.16 2.16 0 0 1-.4-.53 2.19 2.19 0 0 0-.6-.73c-.22-.17-.6-.25-1.1-.25-.49 0-.88.1-1.17.28-.27.18-.4.39-.4.63 0 .15.03.28.12.39.1.11.23.21.4.3.18.08.36.15.54.2l.3.08.62.14c.54.12 1.04.25 1.48.38.45.14.83.32 1.14.52.32.2.58.47.76.78.18.32.27.7.27 1.16 0 .54-.16 1.04-.47 1.47-.3.43-.77.77-1.36 1.01-.58.24-1.28.37-2.08.37-.96 0-1.77-.17-2.4-.5a3.1 3.1 0 0 1-1.1-.96c-.28-.4-.42-.8-.42-1.19 0-.24.1-.45.28-.62a.99.99 0 0 1 .7-.26.9.9 0 0 1 .58.2c.13.1.23.25.33.43l.06.14c.12.27.25.5.39.67.13.17.32.31.56.43.24.1.57.17.97.17.55 0 1-.12 1.34-.35.34-.22.5-.5.5-.82a.8.8 0 0 0-.26-.62c-.18-.17-.42-.3-.71-.4a12.6 12.6 0 0 0-.98-.24l-.25-.05a9.91 9.91 0 0 1-1.75-.52c-.48-.2-.86-.48-1.15-.83-.28-.35-.43-.8-.43-1.31 0-.5.15-.95.46-1.34.3-.38.73-.68 1.3-.88.55-.2 1.2-.3 1.95-.3z"/></svg>

								</div>



							</div>
							</div>
						</div>


	                </div>
					</div>
	            </main>
	            
	            
	            <footer class="css-4qtnb6" style="height: 200px !important;">
    <div style="width:100%;height:150px;background: #181A20;padding:10px 48px;">
        <div style="width:100%;height:60px;">
            <div style="min-width:100px;height:60px;line-height:60px;margin-right:15px;float: left">
                <span
                        style="color: #fff;
                                font-size: 36px;
                                font-weight: 600;"
                ><?php echo L('Bitwise');?></span>
            </div>
            <div style="min-width:100px;height:60px;line-height:60px;margin-right:15px;float: right" onclick="pop_box_show('privacy')">
                <a href="avascript:void(0)"  class="footer-box-span"  style="color:#848E9C;"><?php echo L('隐私政策申明');?></a>
            </div>
            <div style="min-width:100px;height:60px;line-height:60px;margin-right:15px;float: right" onclick="pop_box_show('service')">
                <a href="avascript:void(0)"  class="footer-box-span"  style="color:#848E9C;"><?php echo L('服务条款');?></a>
            </div>
            <div style="min-width:100px;height:60px;line-height:60px;margin-right:15px;float: right" onclick="pop_box_show('msb')">
                <a href="avascript:void(0)"  class="footer-box-span"  style="color:#848E9C;"><?php echo L('MSB证书');?></a>
            </div>
            <div style="min-width:100px;height:60px;line-height:60px;margin-right:15px;float: right" onclick="pop_box_show('about')">
                <a href="javascript:void(0)" class="footer-box-span" style="color:#848E9C;"><?php echo L('关于我们');?></a>
            </div>
        </div>
        <div style="width:100%;height:60px;line-height:90px;text-align:center;border-top:1px solid #848E9C;">
            <span style="color:#848E9C;">CopyRight © 2017 - 2022 Bitwise. All Rights Reserved.</span>
        </div>
    </div>
</footer>


<div class="pop-box" id="pop-box" style="display: none" onclick="pop_box_hide()">
    <div class="pop-content">
        <div class="pop-content-desc" style="color: #2c3e50 !important;">

        </div>
    </div>
</div>

<script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>
<script src="/Public/Home/static/js/layer/layer.js"></script>
<script>

    let text_obj = {
        "privacy" : "<div data-v-73cf4925=\"\"><p>(\"The Company\") understands the importance of including customers' personal information, and will comply with the provisions of the \"Personal Information Protection Act\" (\"Act\"), and endeavor to handle in an appropriate manner in accordance with the provisions of this privacy policy (\"Privacy Policy\") And protect personal information.</p>\n" +
            "<p>1. Definition</p>\n" +
            "<p>In the privacy policy, personal information refers to the “personal information” defined in the first paragraph of Article 2 of the Act, that is, information related to living individuals. This information can use the name, date of birth or other information contained in the information (including easy association To other information, so as to identify a specific individual) in the description to identify a specific individual.</p>\n" +
            "<p>2. Purpose of use</p>\n" +
            "<p>The company uses customers’ personal information for the following purposes:</p>\n" +
            "<p>Provide and improve the company's products or services;</p>\n" +
            "<p>Notify the company's products, services or activities;</p>\n" +
            "<p>Carry out marketing, survey or analysis to expand the scope of the company's products or services or improve their quality;</p>\n" +
            "<p>Provide maintenance or support for the company's services;</p>\n" +
            "<p>Notify the company of revisions to the terms of use, policies, etc. (\"Terms\") related to the services provided.</p>\n" +
            "<p>Deal with violations of the terms of the company's services;</p>\n" +
            "<p>Verify the account held by the user;</p>\n" +
            "<p>Verify the transfer to the user's account; or communicate in emergency situations.</p>\n" +
            "<p>Any other purpose related to the above purpose.</p>\n" +
            "<p>3. Change the purpose of use</p>\n" +
            "<p>The company can change the purpose of use of personal information so that the changed purpose of use can be reasonably regarded as related to the original purpose of use. After the purpose of use is changed, the company shall notify the user or publicly announce the changed purpose of use.</p>\n" +
            "<p>4. Restrict use</p>\n" +
            "<p>Without the consent of the relevant customer, the company shall not use personal information beyond the scope necessary for the realization of the purpose of use, unless permitted by the Act or other laws or regulations; however, this provision does not apply to the following situations:</p>\n" +
            "<p>Use personal information in accordance with laws and regulations;</p>\n" +
            "<p>The use of personal information is necessary to protect personal life, body or property, and it is difficult to obtain the consent of relevant customers;</p>\n" +
            "<p>The use of personal information is necessary to improve public health or promote the physical and mental health of children, and it is difficult to obtain the consent of relevant customers;</p>\n" +
            "<p>Or the use of personal information is necessary for the national government, local government, or individuals or entities entrusted to perform affairs prescribed by laws and regulations, and obtaining the consent of relevant customers may hinder the execution of related affairs.</p>\n" +
            "<p>5. Appropriate collection</p>\n" +
            "<p>The company may use appropriate means to collect personal information, but will not use deception or other improper means to collect personal information.</p>\n" +
            "<p>6. Security Control</p>\n" +
            "<p>The company fully and appropriately supervises its employees to ensure safe control of personal information to deal with the risk of loss, destruction, tampering or leakage.</p>\n" +
            "<p>7. If the customer requests the company to correct, add or delete personal information on the grounds that the personal information is contrary to the facts in accordance with the provisions of the Act, the company should first confirm that the request was made by the person in charge, and then immediately make use of the purpose of use Carry out necessary investigations within the necessary scope, and then correct according to the investigation results, add or delete personal information, and notify the customer of the relevant situation (the company decides not to perform the correction, and the company shall notify the customer of the relevant situation when adding or deleting); but According to the provisions of the Act or other laws and regulations, the company is not obliged to perform corrections. When adding or deleting, the provisions do not apply.</p>\n" +
            "<p>8. Forbidden</p>\n" +
            "<p>If the customer requests the company to stop using or delete personal information on the grounds that the company’s processing of personal information exceeds the previously announced purpose of use or obtains personal information by deception or other improper means in accordance with the provisions of the Act, and the investigation proves that If the request is reasonable, the company should first confirm that the request was made by the person in charge, and then immediately stop using or delete personal information and notify the customer of the relevant situation; however, the company is not obliged to stop according to the Act or other laws and regulations. This rule does not apply when using or deleting personal information.</p>\n" +
            "<p>9. Use information recording procedures and other technologies</p>\n" +
            "<p>The services provided by the company may use information recording procedures or similar technologies. These technologies help the company understand the use of the company's services, etc. and continue to improve services. When the user wants to disable the information recording program, the user can change the settings of the web browser to disable the information recording program. Please note that after the information logging program is disabled, users will no longer be able to use some parts of the service.</p></div>",
        "service" : "<div data-v-73cf4925=\"\"><p>The IDCIex Global user agreement is the relevant rights and obligations stipulated by the user and the IDCIex Global platform for various services, and is contractual.</p>\n" +
            "<p>By registering and using this website, the user means that he accepts and agrees to all the conditions and terms of the \"User Agreement\". Both IDCIex Global and the user have carefully read all the terms in this \"User Agreement\" and the legal statements and operations issued by IDCIex Global The content of the rules, this agreement and the aforementioned terms of service, legal statements and operating rules have been known, understood and accepted, and agreed to use them as the basis for determining the rights and obligations of both parties.</p>\n" +
            "<p>The IDCIex Global \"legal statement\" is an essential part of this agreement. When the user accepts this agreement, it shall be deemed to have accepted the entire content of the IDCIex Global \"legal statement\". The content of this agreement includes the body of this agreement and the published or Various rules, statements, and instructions that may be released in the future. All rules, statements, and instructions are an integral part of the agreement and have the same legal effect as the body of the agreement.</p>\n" +
            "<p>1. User service</p>\n" +
            "<p>1.1 IDCIex Global provides online trading platform services for users to conduct encrypted digital currency transactions through the platform. IDCIex Global does not participate in the buying and selling of any digital currency itself as a buyer or seller.</p>\n" +
            "<p>1.2 Users have the right to browse real-time digital currency market quotations and transaction information on IDCIex Global, and have the right to submit digital currency transaction instructions and complete digital currency transactions through the IDCIex Global platform.</p>\n" +
            "<p>1.3 Users have the right to view their information under the platform member account in IDCIex Global, and have the right to use the functions provided by IDCIex Global to operate.</p>\n" +
            "<p>1.4 Users have the right to participate in website activities organized by the platform in accordance with the activity rules published by IDCIex Global.</p>\n" +
            "<p>1.5 Users should abide by laws, regulations, regulatory documents and policy requirements, ensure the legitimacy of all funds and digital currency sources in the account, and must not engage in illegal or other damage to the platform or the third party in IDCIex Global or use IDCIex Global services. The activities of tripartite rights, such as sending or receiving any information that violates laws, regulations, public order and good customs, or infringes on the rights and interests of others, sending or receiving pyramid schemes or other harmful information or speech, using or forging IDCIex Global electronics without the authorization of IDCIex Global Email header information, etc.</p>\n" +
            "<p>1.6 Users should abide by laws and regulations, and should properly use and keep their IDCIex Global platform account and password, fund transaction password, mobile phone number bound to the registration time, and the security of the mobile phone verification code received by the mobile phone. The user is fully responsible for any operations and consequences performed using his platform account and password, capital password, and mobile phone verification code. When the user discovers that the IDCIex Global platform account, password or fund password, verification code is used by a third party without its authorization, or there are other account security issues, the IDCIex Global platform will be notified immediately and effectively, and the platform will be required to suspend the service IDCIex Global of the platform account. The IDCIex Global platform has the right to take action on the user’s request within a reasonable time, but it does not assume any responsibility for the losses that the user has suffered before the IDCIex Global platform takes action. The user shall not give, borrow, rent, transfer or otherwise dispose of the IDCIex Global platform account to others without the consent of the IDCIex Global platform.</p>\n" +
            "<p>1.7 The user shall abide by the user agreement and other terms of service and operating rules published and updated by the IDCIex Global platform from time to time.</p>\n" +
            "<p>Second, the rights and obligations of users</p>\n" +
            "<p>2.1 The user has the right to accept the digital currency trading platform services provided by IDCIex Global in accordance with this agreement.</p>\n" +
            "<p>2.2 The user has the right to terminate the use of IDCIex Global platform services at any time.</p>\n" +
            "<p>2.3 Users have the right to withdraw the balance of funds in IDCIex Global at any time, but they need to pay the corresponding withdrawal fees to the IDCIex Global platform.</p>\n" +
            "<p>2.4 The user is responsible for the authenticity, validity and security of the personal information provided during registration.</p>\n" +
            "<p>2.5 When users conduct digital currency transactions on the IDCIex Global platform, they must not maliciously interfere with the normal conduct of digital currency transactions and disrupt the order of transactions.</p>\n" +
            "<p>2.6 Users must not interfere with the normal operation of the IDCIex Global platform or interfere with other users' use of the IDCIex Global platform services by any technical means or other means.</p>\n" +
            "<p>2.7 If users have litigation with other users due to online transactions, they must not request the IDCIex Global platform to provide relevant data through judicial or administrative channels.</p>\n" +
            "<p>2.8 Users shall not maliciously slander the reputation of the IDCIex Global platform by fabricating facts or other means.</p>\n" +
            "<p>Third, the rights and obligations of the IDCIex Global platform</p>\n" +
            "<p>3.1 If the user does not have the registration qualifications stipulated in this agreement, the IDCIex Global platform has the right to refuse the user to register, and the registered user has the right to cancel his IDCIex Global platform member account. The IDCIex Global platform suffers losses due to this. The right to claim compensation from the aforementioned users or their legal representatives. At the same time, the IDCIex Global platform reserves the right to decide whether to accept user registration under any other circumstances.</p>\n" +
            "<p>When the IDCIex Global platform finds that the account user is not the initial registrant of the account, it has the right to suspend the use of the account.</p>\n" +
            "<p>3.2 When the IDCIex Global platform reasonably suspects that the information provided by the user is incorrect, false, invalid or incomplete through technical testing, manual sampling and other testing methods, it has the right to notify the user to correct, update the information or suspend, and terminate the provision of the IDCIex Global platform. service.</p>\n" +
            "<p>3.3 The IDCIex Global platform has the right to correct any information displayed on the IDCIex Global platform when there are obvious errors.</p>\n" +
            "<p>The platform reserves the right to modify, suspend or terminate the IDCIex Global platform services at any time. The IDCIex Global platform exercises the right to modify or suspend the services without prior notice to the user. If the IDCIex Global platform terminates one or more services of the IDCIex Global platform, The termination will take effect on the day when the IDCIex Global platform publishes the termination announcement on the website.</p>\n" +
            "<p>3.4 The IDCIex Global platform shall adopt necessary technical means and management measures to ensure the normal operation of the IDCIex Global platform, and provide necessary and reliable trading environment and transaction services to maintain the order of digital currency transactions.</p>\n" +
            "<p>3.5 If the user has not used the IDCIex Global platform member account and password to log in to the IDCIex Global platform for three consecutive years, the IDCIex Global platform has the right to cancel the user's IDCIex Global platform account. After the account is cancelled, the IDCIex Global platform has the right to open the corresponding member name to other users for registration.</p>\n" +
            "<p>3.7 The IDCIex Global platform guarantees the safety of users' RMB funds and digital currency custody by strengthening technical investment and improving security precautions. It is obliged to notify users in advance when there are foreseeable security risks in user funds.</p>\n" +
            "<p>3.8 The IDCIex Global platform has the right to delete all kinds of content and information on the IDCIex Global platform website that do not comply with national laws and regulations, regulatory documents or reports stipulated by the IDCIex Global platform website. The IDCIex Global platform does not need to notify in advance to exercise this right user.</p>\n" +
            "<p>Four, special statement</p>\n" +
            "<p>To the extent permitted by law, under any circumstances, the IDCIex Global platform is protected against maintenance of information network equipment, information network connection failures, computer, communications or other system failures, power failures, strikes, labor disputes, riots, and uprisings. , Riots, insufficient productivity or production data, fires, floods, storms, explosions, wars, government actions, orders from judicial administrative organs, other force majeure or third-party inactions caused by inability to service or delayed services, and users suffered as a result The loss is not liable.</p>\n" +
            "<p>Five, customer service</p>\n" +
            "<p>The IDCIex Global platform has established a professional customer service team and established a complete customer service system to ensure the smooth flow of user questions and complaint channels in terms of technology, personnel and systems, and provide users with timely troubleshooting and complaint feedback.</p>\n" +
            "<p>Six, intellectual property</p>\n" +
            "<p>6.1 All intellectual achievements contained in the IDCIex Global platform include but are not limited to website logos, databases, website design, text and graphics, software, photos, videos, music, sounds and the foregoing combinations, software compilation, related source codes and software applications The intellectual property rights of programs and scripts are owned by the IDCIex Global platform. Users shall not copy, change, copy, send or use any of the aforementioned materials or content for commercial purposes.</p>\n" +
            "<p>6.2 All rights (including but not limited to goodwill and trademarks, logos) contained in the name of the IDCIex Global platform belong to the IDCIex Global platform.</p>\n" +
            "<p>6.3 The user's acceptance of this agreement shall be deemed as the user's initiative to have the copyright of any form of information published on the IDCIex Global platform, including but not limited to: reproduction rights, distribution rights, rental rights, exhibition rights, performance rights, projection rights, broadcasting rights Rights, information network communication rights, filming rights, adaptation rights, translation rights, compilation rights and other transferable rights attributable to the copyright owner are exclusively transferred to the IDCIex Global platform for free, and the IDCIex Global platform has the right to infringe on any subject Individually file a lawsuit and obtain full compensation. This agreement is a written agreement stipulated in Article 25 of the \"United Nations Copyright Law\", and its validity is applicable to the content of any copyright law-protected works published by users on the IDCIex Global platform, regardless of the formation of the content Before signing this agreement or after signing this agreement.</p>\n" +
            "<p>6.4 Users shall not illegally use the IDCIex Global platform or the intellectual property rights of others when using the IDCIex Global platform services.</p>\n" +
            "<p>Seven, privacy policy</p>\n" +
            "<p>7.1 When a user registers an IDCIex Global platform account or payment account, the user provides personal registration information according to the requirements of the IDCIex Global platform, including but not limited to identity card information.</p>\n" +
            "<p>7.2 When the user uses the IDCIex Global platform service or visits the IDCIex Global platform webpage, the IDCIex Global platform automatically receives and records the server value on the user’s browser, including but not limited to data such as IP address and user requirements for access Web records of.</p>\n" +
            "<p>7.3 Relevant data collected by the IDCIex Global platform of users' transactions on the IDCIex Global platform, including but not limited to records of bids and purchases.</p>\n" +
            "<p>7.4 The personal information of other users obtained by the IDCIex Global platform through legal means.</p>\n" +
            "<p>7.5 The IDCIex Global platform will not sell or lend the user's personal information to anyone unless the user's permission is obtained in advance. The IDCIex Global platform does not allow any third party to collect, edit, sell or disseminate the user's personal information by any means.</p>\n" +
            "<p>7.6 The IDCIex Global platform keeps the obtained customer identity data and transaction information confidential, and must not provide customer identity data and transaction information to any unit or individual, unless otherwise provided by laws and regulations.</p>\n" +
            "<p>Eight, anti-money laundering</p>\n" +
            "<p>8.1 The IDCIex Global platform complies with and implements the provisions of the \"Anti-Money Laundering Law of the People's Republic of China\" to identify users, maintain a system for customer identity data and transaction history records, as well as a system for large and suspicious transaction reports.</p>\n" +
            "<p>8.2 When users register and modify their real-name information, they should provide and upload necessary evidence such as a copy of their ID card. The IDCIex Global platform will identify and compare the ID card information provided by the user. The IDCIex Global platform has reasonable grounds to suspect that when a user registers with a false identity, it has the right to refuse to register or cancel the registered account.</p>\n" +
            "<p>8.3 The IDCIex Global platform refers to the provisions of the “Measures for the Administration of Large-Value Transactions and Suspicious Transaction Reports of Financial Institutions” to keep historical records of large-value transactions and transactions suspected of money laundering. When regulatory agencies require records of large-value transactions and suspicious transactions, Provide to regulatory agencies.</p>\n" +
            "<p>8.4 The IDCIex Global platform saves user identity information, large-value transactions, and historical records of suspicious transactions, assists in accordance with the law, cooperates with judicial and administrative law enforcement agencies in combating money laundering activities, and assists judicial agencies, customs, taxation and other departments to inquire in accordance with laws and regulations , Freezing and deducting customer deposits.</p>\n" +
            "<p>8.5 According to the national anti-money laundering policy and the protection of customer assets, the name of the remitter must be the same as the real-name certified name.</p>\n" +
            "<p>Nine. Liability for breach of contract</p>\n" +
            "<p>9.1 The violation of the IDCIex Global platform or the user of this agreement constitutes a breach of contract, and the breaching party shall be liable for breach of contract to the observant party.</p>\n" +
            "<p>9.2 If the IDCIex Global platform causes losses to the IDCIex Global platform due to untrue, incomplete or inaccurate information provided by the user, the IDCIex Global platform has the right to request the user to compensate the IDCIex Global platform for losses.</p>\n" +
            "<p>9.3 If a user engages in illegal activities on the IDCIex Global platform or using the IDCIex Global platform services due to violation of laws and regulations or the provisions of this agreement, the IDCIex Global platform has the right to immediately terminate the continued provision of IDCIex Global platform services to them, and cancel them Account and demand compensation for the losses caused to the IDCIex Global platform.</p>\n" +
            "<p>9.4 If User interferes with the operation of IDCIex Global Platform by technical means or interferes with the use of IDCIex Global Platform by other Users, IDCIex Global shall have the right to immediately cancel the account of the User on IDCIex Global Platform and claim compensation for the losses caused to IDCIex Global.</p>\n" +
            "<p>9.5 If users maliciously slander the reputation of the IDCIex Global platform by fabricating facts, etc., the IDCIex Global platform has the right to request the user to publicly apologize to the IDCIex Global platform, compensate for the losses caused to the IDCIex Global platform, and have the right to terminate it Provide IDCIex Global platform services.</p>\n" +
            "<p>Ten. Entry into force and interpretation of the agreement</p>\n" +
            "<p>This agreement takes effect when the user clicks on the IDCIex Global platform registration page to agree to register and complete the registration process, and obtains the IDCIex Global platform account and password, and is binding on the IDCIex Global platform and users.</p>\n" +
            "<p>Eleven. Modification and termination of the agreement</p>\n" +
            "<p>11.1 Changes to the agreement: the IDCIex Global platform has the right to change the content of this agreement or other terms of service and operating rules published by the IDCIex Global platform at any time. When the change is made, the IDCIex Global platform will publish an announcement in a prominent place on the IDCIex Global platform. , The change takes effect when the announcement is released. If the user continues to use the services provided by the IDCIex Global platform, it is deemed that the user agrees to the content changes. If the user does not agree with the content after the change, the user has the right to cancel the IDCIex Global platform account and stop Use IDCIex Global platform services.</p>\n" +
            "<p>11.2 Termination of the agreement</p>\n" +
            "<p>11.2.1 The IDCIex Global platform has the right to cancel the user's IDCIex Global platform account in accordance with this agreement, and this agreement terminates on the date of account cancellation.</p>\n" +
            "<p>11.2.2 The IDCIex Global platform has the right to terminate all IDCIex Global platform services in accordance with this agreement, and this agreement terminates on the day when all IDCIex Global platform services are terminated.</p>\n" +
            "<p>11.2.3 After the termination of this agreement, the user has no right to require the IDCIex Global platform to continue to provide it with any services or perform any other obligations, including but not limited to requiring the IDCIex Global platform to retain or disclose its original IDCIex Global platform to the user Any information in the account, forward any information that has not been read or sent to the user or a third party.</p>\n" +
            "<p>11.2.4 The termination of this agreement does not affect the observant party to the breaching party to pursue liability for breach of contract.</p>\n" +
            "<p>&nbsp;</p></div>",
        "msb" : '<img src="/Public/Home/static/imgs/1.jpeg" style="width: 45%">\n' +
            '            <img src="/Public/Home/static/imgs/2.jpeg" style="width: 45%">',
        "about" : "<div data-v-73cf4925=\"\"><p>&nbsp; &nbsp; &nbsp; Robitl cryptocurrency exchange is headquartered in Singapore. In addition, there are three operation centers in the United States, South Korea, and Hong Kong. The scope of services is vast and the market radiates all over the world.</p>\n" +
            "<p>&nbsp; &nbsp; &nbsp; Robitl has a professional, efficient and experienced blockchain technology and operation team with decades of experience in Internet development and services. A group of Internet experts with unique insights and foresight are committed to providing a safe, convenient, stable and low transaction cost platform for global cryptocurrency contract trading users. The main members of the team come from well-known companies such as Google, Amazon and Alibaba.</p>\n" +
            "<p>&nbsp;</p>\n" +
            "<p><strong>A. Strength</strong></p>\n" +
            "<p>Robitl is committed to building a safe and reliable cryptocurrency trading platform. The team has decades of experience in financial risk control. The core members graduated from prestigious universities such as Harvard University, Stanford University, University of California, Berkeley, Hong Kong University, Seoul University and Tsinghua University. Robitl is headquartered in Singapore and holds dual financial licenses. The platform is stable for a long time and venture capital is guaranteed.</p>\n" +
            "<p><strong>B, focus</strong></p>\n" +
            "<p>Robitl focuses on cryptocurrency intraday trading, contract trading, second contract trading, ICO and cloud mining. The exchange provides systematic technology and service solutions for contract transactions, and selects the world's mainstream cryptocurrencies.</p>\n" +
            "<p><strong>C, smooth</strong></p>\n" +
            "<p>The exchange system fully optimizes the user experience, the load multi-point shunt technology maximizes the smoothness of the system and provides multi-level servers to guarantee the transaction speed! The trading system experience satisfaction is benchmarked against the world's top trading system.</p>\n" +
            "<p><strong>D, safety</strong></p>\n" +
            "<p>Robitl's financial-level security protects user assets, digital asset storage is intelligently separated from hot and cold, ERC20 digital wallets, and account encryption technologies are fully applied.</p>\n" +
            "<p><strong>E, service</strong></p>\n" +
            "<p>Robitl has an independent and complete user service system, provides the most complete and convenient management system support, 7*24h quick response, and truly creates a fair, just and open data trading market</p>\n" +
            "<p><strong>F, platform advantages</strong></p>\n" +
            "<p>1. Features two - way trading, leveraged contracts, second contracts.</p>\n" +
            "<p>2. The interface is simple and clear, easy to operate.</p>\n" +
            "<p>3. The deposit and withdrawal is convenient and fast, and can be transferred in major exchanges and wallets.</p>\n" +
            "<p>4.ICO(Initial IDCIex Offering): Use blockchain to combine rights and cryptocurrency to finance projects to develop, maintain, and exchange related products or services</p></div>"
    }

    function pop_box_show(type) {
        let pop_text = '';
        let pop_title = '';
        if (type == 'privacy') {
            pop_text = text_obj.privacy;
            pop_title = 'Privacy';
        }
        if (type == 'service') {
            pop_text = text_obj.service;
            pop_title = 'Service';
        }
        if (type == 'msb') {
            pop_text = text_obj.msb;
            pop_title = 'Msb';
        }
        if (type == 'about') {
            pop_text = text_obj.about;
            pop_title = 'About';
        }
        // $('#pop-box').show();
        $('.pop-content-desc').html(pop_text)
        layer.open({
            type: 1,
            area: ['80%', '80vh'],
            shadeClose: true,
            title: pop_title,
            content: $('#pop-box') //这里content是一个DOM，注意：最好该元素要存放在body最外层，否则可能被其它的相对元素所影响
        });
    }
    
    function pop_box_hide() {
        $('#pop-box').hide();
    }

    $('.pop-content').on('click',function(event){
        event.stopPropagation();
        console.log('btn2被点击了')
    })

    $('.footer-box-span').hover(
        function () {
            $(this).css('color', '#fff');
        },
        function () {
            $(this).css('color', '#848E9C');
        }
    )


</script>
	        </div>   
	    </div>
	    
	</body>
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/Home/static/js/layer/layer.js" ></script>
    <script type="text/javascript" src="/Public/Home/static/js/jquery.SuperSlide.2.1.1.js" ></script>
    <script type="text/javascript">
        function obtain_btc(){
            var coin = "btc";
            var nameclass = ".cn_btc";
            var priceclass = ".cpr_btc";
            var pricehl = ".hl_btc";
            var pricevol = ".vol_btc";
            var changeclass = ".cch_btc";
            $.post("<?php echo U('Ajaxtrade/obtain_btc');?>",
            {'coin':coin},
            function(data){
                if(data.code == 1){
                    $(nameclass).html(data.cname);
                    $(priceclass).html(data.open);
                    $(pricehl).html(data.highlow);
                    $(pricevol).html(data.amount);
                    $(changeclass).html(data.change);
                }else{
                    console.log(data.info);return false;
                }
            }
            );
        }
        function obtain_eth(){
            var coin = "eth";
            var nameclass = ".cn_eth";
            var priceclass = ".cpr_eth";
            var pricehl = ".hl_eth";
            var pricevol = ".vol_eth";
            var changeclass = ".cch_eth";
            $.post("<?php echo U('Ajaxtrade/obtain_eth');?>",
            {'coin':coin},
            function(data){
                if(data.code == 1){
                    $(nameclass).html(data.cname);
                    $(priceclass).html(data.open);
                    $(pricehl).html(data.highlow);
                    $(pricevol).html(data.amount);
                    $(changeclass).html(data.change);
                }else{
                    console.log(data.info);return false;
                }
            }
            );
        }
        function obtain_eos(){
            var coin = "eos";
            var nameclass = ".cn_eos";
            var priceclass = ".cpr_eos";
            var pricehl = ".hl_eos";
            var pricevol = ".vol_eos";
            var changeclass = ".cch_eos";
            $.post("<?php echo U('Ajaxtrade/obtain_eos');?>",
            {'coin':coin},
            function(data){
                if(data.code == 1){
                    $(nameclass).html(data.cname);
                    $(priceclass).html(data.open);
                    $(pricehl).html(data.highlow);
                    $(pricevol).html(data.amount);
                    $(changeclass).html(data.change);
                }else{
                    console.log(data.info);return false;
                }
            }
            );
        }
        function obtain_doge(){
            var coin = "doge";
            var nameclass = ".cn_doge";
            var priceclass = ".cpr_doge";
            var pricehl = ".hl_doge";
            var pricevol = ".vol_doge";
            var changeclass = ".cch_doge";
            $.post("<?php echo U('Ajaxtrade/obtain_doge');?>",
            {'coin':coin},
            function(data){
                if(data.code == 1){
                    $(nameclass).html(data.cname);
                    $(priceclass).html(data.open);
                    $(pricehl).html(data.highlow);
                    $(pricevol).html(data.amount);
                    $(changeclass).html(data.change);
                }else{
                    console.log(data.info);return false;
                }
            }
            );
        }
        function obtain_bch(){
            var coin = "bch";
            var nameclass = ".cn_bch";
            var priceclass = ".cpr_bch";
            var pricehl = ".hl_bch";
            var pricevol = ".vol_bch";
            var changeclass = ".cch_bch";
            $.post("<?php echo U('Ajaxtrade/obtain_bch');?>",
            {'coin':coin},
            function(data){
                if(data.code == 1){
                    $(nameclass).html(data.cname);
                    $(priceclass).html(data.open);
                    $(pricehl).html(data.highlow);
                    $(pricevol).html(data.amount);
                    $(changeclass).html(data.change);
                }else{
                    console.log(data.info);return false;
                }
            }
            );
        }
        function obtain_ltc(){
            var coin = "ltc";
            var nameclass = ".cn_ltc";
            var priceclass = ".cpr_ltc";
            var pricehl = ".hl_ltc";
            var pricevol = ".vol_ltc";
            var changeclass = ".cch_ltc";
            $.post("<?php echo U('Ajaxtrade/obtain_ltc');?>",
            {'coin':coin},
            function(data){
                if(data.code == 1){
                    $(nameclass).html(data.cname);
                    $(priceclass).html(data.open);
                    $(pricehl).html(data.highlow);
                    $(pricevol).html(data.amount);
                    $(changeclass).html(data.change);
                }else{
                    console.log(data.info);return false;
                }
            }
            );
        }
        function obtain_iota(){
            var coin = "iota";
            var nameclass = ".cn_iota";
            var priceclass = ".cpr_iota";
            var pricehl = ".hl_iota";
            var pricevol = ".vol_iota";
            var changeclass = ".cch_iota";
            $.post("<?php echo U('Ajaxtrade/obtain_iota');?>",
            {'coin':coin},
            function(data){
                if(data.code == 1){
                    $(nameclass).html(data.cname);
                    $(priceclass).html(data.open);
                    $(pricehl).html(data.highlow);
                    $(pricevol).html(data.amount);
                    $(changeclass).html(data.change);
                }else{
                    console.log(data.info);return false;
                }
            }
            );
        }
        function obtain_fil(){
            var coin = "fil";
            var nameclass = ".cn_fil";
            var priceclass = ".cpr_fil";
            var pricehl = ".hl_fil";
            var pricevol = ".vol_fil";
            var changeclass = ".cch_fil";
            $.post("<?php echo U('Ajaxtrade/obtain_fil');?>",
            {'coin':coin},
            function(data){
                if(data.code == 1){
                    $(nameclass).html(data.cname);
                    $(priceclass).html(data.open);
                    $(pricehl).html(data.highlow);
                    $(pricevol).html(data.amount);
                    $(changeclass).html(data.change);
                }else{
                    console.log(data.info);return false;
                }
            }
            );
        }
        function obtain_flow(){
            var coin = "flow";
            var nameclass = ".cn_flow";
            var priceclass = ".cpr_flow";
            var pricehl = ".hl_flow";
            var pricevol = ".vol_flow";
            var changeclass = ".cch_flow";
            $.post("<?php echo U('Ajaxtrade/obtain_flow');?>",
            {'coin':coin},
            function(data){
                if(data.code == 1){
                    $(nameclass).html(data.cname);
                    $(priceclass).html(data.open);
                    $(pricehl).html(data.highlow);
                    $(pricevol).html(data.amount);
                    $(changeclass).html(data.change);
                }else{
                    console.log(data.info);return false;
                }
            }
            );
        }
        function obtain_jst(){
            var coin = "jst";
            var nameclass = ".cn_jst";
            var priceclass = ".cpr_jst";
            var pricehl = ".hl_jst";
            var pricevol = ".vol_jst";
            var changeclass = ".cch_jst";
            $.post("<?php echo U('Ajaxtrade/obtain_jst');?>",
            {'coin':coin},
            function(data){
                if(data.code == 1){
                    $(nameclass).html(data.cname);
                    $(priceclass).html(data.open);
                    $(pricehl).html(data.highlow);
                    $(pricevol).html(data.amount);
                    $(changeclass).html(data.change);
                }else{
                    console.log(data.info);return false;
                }
            }
            );
        }
        function obtain_itc(){
            var coin = "itc";
            var nameclass = ".cn_itc";
            var priceclass = ".cpr_itc";
            var pricehl = ".hl_itc";
            var pricevol = ".vol_itc";
            var changeclass = ".cch_itc";
            $.post("<?php echo U('Ajaxtrade/obtain_itc');?>",
            {'coin':coin},
            function(data){
                if(data.code == 1){
                    $(nameclass).html(data.cname);
                    $(priceclass).html(data.open);
                    $(pricehl).html(data.highlow);
                    $(pricevol).html(data.amount);
                    $(changeclass).html(data.change);
                }else{
                    console.log(data.info);return false;
                }
            }
            );
        }
        function obtain_ht(){
            var coin = "ht";
            var nameclass = ".cn_ht";
            var priceclass = ".cpr_ht";
            var pricehl = ".hl_ht";
            var pricevol = ".vol_ht";
            var changeclass = ".cch_ht";
            $.post("<?php echo U('Ajaxtrade/obtain_ht');?>",
            {'coin':coin},
            function(data){
                if(data.code == 1){
                    $(nameclass).html(data.cname);
                    $(priceclass).html(data.open);
                    $(pricehl).html(data.highlow);
                    $(pricevol).html(data.amount);
                    $(changeclass).html(data.change);
                }else{
                    console.log(data.info);return false;
                }
            }
            );
        }
        function obtain_usdz(){
            var coin = "usdz";
            var nameclass = ".cn_usdz";
            var priceclass = ".cpr_usdz";
            var pricehl = ".hl_usdz";
            var pricevol = ".vol_usdz";
            var changeclass = ".cch_usdz";
            $.post("<?php echo U('Ajaxtrade/obtain_usdz');?>",
            {'coin':coin},
            function(data){
                if(data.code == 1){
                    $(nameclass).html(data.cname);
                    $(priceclass).html(data.open);
                    $(pricehl).html(data.highlow);
                    $(pricevol).html(data.amount);
                    $(changeclass).html(data.change);
                }else{
                    console.log(data.info);return false;
                }
            }
            );
        }
    </script>
    <script type="text/javascript">
        $(function(){
              //obtain_btc();
            setInterval("obtain_btc()",2000); 
            //obtain_eth();
            setInterval("obtain_eth()",3000); 
            //obtain_eos();
            setInterval("obtain_eos()",5000);
            obtain_doge();
            setInterval("obtain_doge()",7000);
            obtain_bch();
            setInterval("obtain_bch()",9000);
            obtain_ltc();
            setInterval("obtain_ltc()",11000);
            
            obtain_iota();
            setInterval("obtain_iota()",13000);
            
            obtain_fil();
            setInterval("obtain_fil()",15000);
            
            obtain_flow();
            setInterval("obtain_flow()",17000);
            
            obtain_jst();
            setInterval("obtain_jst()",19000);
            
            obtain_itc();
            setInterval("obtain_itc()",21000);
            
            obtain_ht();
            setInterval("obtain_ht()",23000);
            
            obtain_usdz();
            setInterval("obtain_usdz()",25000);
        });
    </script>
    <script type="text/javascript">
		$("#nav").slide({ 
			type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
			titCell:".nLi", //鼠标触发对象
			targetCell:".sub", //titCell里面包含的要显示/消失的对象
			effect:"slideDown", //targetCell下拉效果
			delayTime:300 , //效果时间
			triggerTime:0, //鼠标延迟触发时间（默认150）
			returnDefault:true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
		});
	</script>


	<script src="/Public/Static/bootstrap5Slide/bootstrap.bundle.min.js"></script>
	<script src="/Public/Static/bootstrap5Slide/scripts.js" type="text/javascript"></script>

	<script>
		//消息内容，可以任意长度
		let arr = ["消息1 : 2006年1月John Resig等人创建了jQuery", "消息2 : 2007年7月，jQuery 1.1.3版发布", "消息3 : 2008年5月，jQuery 1.2.6版发布", "消息4 : 2010年1月，也是jQuery的四周年生日"];

		var settings = {
			speeds: 10, //滚动的速度,单位ms
			isPause: true, //滚动后每个消息是否需要暂停，true和false,
			isHover:true, //鼠标悬停是否需要暂停
		};
		var ul = $('#box_ul')[0];
		//渲染数据
		arr.forEach((item) => {
			var li = document.createElement("li");
			li.innerHTML = item;
			ul.appendChild(li);
		});
		//获取当前滚动的高度，支持ie请自行使用currentStyle
		var currentTop = parseInt(window.getComputedStyle(ul).top);

		//滚动函数
		function run() {
			currentTop--;
			ul.style.top = currentTop + "px";

			//当页面滚动最后一个时，把第一个复制push到尾部
			if (currentTop == (arr.length - 1) * -50) {
				let li = document.createElement("li");
				li.innerHTML = arr[0];
				ul.appendChild(li);
			}

			//无缝替换
			if (currentTop == arr.length * -50) {
				currentTop = 0;
				ul.style.top = currentTop + "px";
				var li = document.querySelectorAll("li");
				ul.removeChild(li[li.length - 1]);
			}

			//滚动后每个消息是否需要暂停
			if (settings.isPause) {
				if (currentTop % 50 == 0) {
					clearInterval(timer);
					setTimeout(function () {
						timer = setInterval(run, settings.speeds);
					}, 3000);
				}
			}
		}
		var timer = setInterval(run, settings.speeds);

		//鼠标悬停是否需要暂停
		ul.onmouseover = function () {
			if(settings.isHover){
				clearInterval(timer);
			}
		};
		ul.onmouseleave = function () {
			clearInterval(timer);
			if(settings.isHover){
				timer = setInterval(run, settings.speeds);
			}
		};

	</script>

	<script>

		$('.market-div').hover(
				function () {
					$(this).css('transform', 'scale(1.02)');
					$(this).css('background', '#f3f3f3');
				},
				function () {
					$(this).css('transform', 'scale(1)');
					$(this).css('background', '#fff');

				}
		)
	</script>
    
</html>