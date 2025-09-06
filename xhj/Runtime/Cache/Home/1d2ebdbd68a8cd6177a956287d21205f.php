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
                /*display: -webkit-box;*/
                /*display: -webkit-flex;*/
                /*display: -ms-flexbox;*/
                /*display: flex;*/
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-flex: 1;
                -ms-flex: 1;
                flex: 1;
            }
            .css-wp2li4 {
               box-sizing: border-box;
               margin: 0;
               min-width: 0;
               display: -webkit-box;
               display: -webkit-flex;
               display: -ms-flexbox;
               display: flex;
               overflow-x: hidden;
               -webkit-flex-direction: column;
               -ms-flex-direction: column;
               flex-direction: column;
            }
            .css-19zx9ks {
               box-sizing: border-box;
               margin: 0;
               min-width: 0;
               display: -webkit-box;
               display: -webkit-flex;
               display: -ms-flexbox;
               display: flex;
               -webkit-align-items: center;
               -webkit-box-align: center;
               -ms-flex-align: center;
               align-items: center;
               height: 48px;
               font-size: 12px;
               color: #474D57;
               display: -webkit-box;
               display: -webkit-flex;
               display: -ms-flexbox;
               display: flex;
               min-height: 48px;
               height: -webkit-fit-content;
               height: -moz-fit-content;
               height: fit-content;
               -webkit-flex-wrap: wrap;
               -ms-flex-wrap: wrap;
               flex-wrap: wrap;
               z-index: 99;
               padding-top: 16px;
               padding-bottom: 10px;
               padding-left: 17%;
               padding-right: 17%;
               line-height: 1.25;
               box-shadow: 0px 2px 4px rgb(0 0 0 / 4%);
            }
            .css-o4bcl2 {
               box-sizing: border-box;
               margin: 0;
               min-width: 0;
               color: #00b897;
               -webkit-text-decoration: none;
               text-decoration: none;
               color: #000000;
            }
            .css-19zx9ks a {
               -webkit-flex-wrap: nowrap;
               -ms-flex-wrap: nowrap;
               flex-wrap: nowrap;
               -webkit-flex-shrink: 0;
               -ms-flex-negative: 0;
               flex-shrink: 0;
               margin-bottom: 6px;
            }
            .css-19zx9ks a:hover {
               color: #C99400;
               -webkit-text-decoration: underline;
               text-decoration: underline;
            }
            .css-wl17qh {
               box-sizing: border-box;
               margin: 100%px;
               min-width: 0px;
               display: flex;
               height: fit-content;
               min-height: 349px;
            }
            .css-1s5qj1n {
               box-sizing: border-box;
               margin: 0;
               min-width: 0;
               position: relative;
               margin-bottom: 32px;
               padding-top: 40px;
               padding-right: 24px;
               padding-left: 17%;
               width: 69%;
            }
            .css-101kg5g {
               box-sizing: border-box;
               margin: 0;
               min-width: 0;
               font-size: 40px;
               color: #1E2329;
               font-weight: 700;
            }
            .css-vurnku {
               box-sizing: border-box;
               margin: 0;
               min-width: 0;
            }
            .css-wmvdm0 {
               box-sizing: border-box;
               margin: 0;
               min-width: 0;
               display: -webkit-box;
               display: -webkit-flex;
               display: -ms-flexbox;
               display: flex;
               -webkit-align-items: center;
               -webkit-box-align: center;
               -ms-flex-align: center;
               align-items: center;
               margin-top: 44px;
               margin-bottom: 11px;
            }
            .css-ktxhrn {
               box-sizing: border-box;
               margin: 0;
               min-width: 0;
               margin-bottom: 32px;
            }
            .css-qinc3w {
               box-sizing: border-box;
               margin: 0;
               min-width: 0;
               color: #00b897;
               display: block;
               margin-bottom: 16px;
               width: -webkit-fit-content;
               width: -moz-fit-content;
               width: fit-content;
               max-width: 100%;
               overflow: hidden;
               text-overflow: ellipsis;
               white-space: nowrap;
               color: #474D57;
               font-size: 14px;
               -webkit-text-decoration: none;
               text-decoration: none;
            }
            .css-6f91y1 {
               box-sizing: border-box;
               margin: 0;
               min-width: 0;
               margin-left: 48px;
            }
            .css-qinc3w:hover {
               color: #C99400;
               -webkit-text-decoration: underline;
               text-decoration: underline;
            }
            .css-ogtd7z {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-transition: all 1s;
                transition: all 1s;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
                background-color: #FEF1F2;
            }
            .css-jrzkh7 {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                background-color: #181A20;
            }
            .css-1aac2e {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                margin-left: auto;
                margin-right: auto;
                padding-left: 24px;
                padding-right: 24px;
                max-width: 1248px;
                background-color: #FEF1F2;
            }
            .css-pnjgxq {
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
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                height: 219px;
                background-color: #181A20;
            }
            .css-163lzuo {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                margin-top: 24px;
                margin-bottom: 24px;
                font-weight: 700;
                font-size: 36px;
                color: #EAECEF;
            }
            .css-8pdsjp {
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
                margin-top: 0;
                margin-bottom: 0;
                width: 327px;
                height: 32px;
                padding-left: 11px;
                padding-right: 6px;
                border-radius: 4px;
                background-color: #2B3139;
                border: none;
            }
            .css-8pdsjp {
                width: 610px;
                height: 48px;
                padding-left: 16px;
                padding-right: 12.5px;
            }
            .css-16fg16t {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                width: 100%;
                height: 100%;
                padding: 0;
                outline: none;
                border: none;
                background-color: inherit;
                opacity: 1;
            }
            .css-8pdsjp input {
                color: #1E2329;
                font-size: 14px;
                padding-left: 8px;
                padding-right: 8px;
            }
            .css-8pdsjp input {
                padding-left: 0;
                font-size: 12px;
                color: #EAECEF;
                border-radius: 10px;
            }
            .css-8pdsjp .bn-input-suffix {
                -webkit-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                margin-left: 4px;
                margin-right: 4px;
                font-size: 14px;
            }
            .css-1qppfsi {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                color: #EAECEF;
                width: 24px;
                height: 24px;
                font-size: 24px;
                fill: #1E2329;
                fill: #EAECEF;
                width: 1em;
                height: 1em;
                vertical-align: bottom;
            }
            ::-webkit-input-placeholder { /* WebKit browsers */
              color: #474d57;
              font-size: 14px;
            }
    
            ::-moz-placeholder { /* Mozilla Firefox 19+ */
              color: #474d57;
              font-size: 14px;
            }
            input:focus{background:#2B3139;outline: 1px solid #2B3139;}
            .klinebox{width:100%;height:550px;margin-top:55px;}
	        .klinetitle{width:100%;height:50px;background:#fff;padding:0px 20px;}
	        .klinetitle_l{width:20%;height:50px;float:left;}
	        .klinetitle_r{width:60%;height:50px;float:left;}
	        .newpricebox{height:28px;line-height:30px;margin-bottom:0px;color:#2ebd85;font-size:14px;text-align: left;}
	        .changebox{height:20px;line-height:20px;margin-bottom:0px;color:#2ebd85;text-align: left;}
	        .klr3_box{width:100%;height:30px;}
	        .klr2_box{width:100%;height:25px;}
	        .klr3_box_dl{width:100%;height:40px;line-height:60px;float:left;}
	        .klr3_box_dr{width:100%;height:40px;line-height:40px;float:right;}
	        .klr2_box_dl{width:45%;height:25px;line-height:25px;float:left;text-align:left;}
	        .klr2_box_dr{width:55%;height:25px;line-height:25px;float:right;text-align:right;}
	        .dongbox{position:fixed;z-index:9999;display:none;top:0px;width:100%;height:100vh;background:rgba(0,0,0,0.2);}
	        .dong_con{width:30%;height:86vh;background:#fff;margin-top:80px;border-top-right-radius:20px;border-bottom-right-radius:20px;padding:20px 15px 10px 20px;float:left;}
	        .dong_title{width:100%;height:40px;line-height:40px;}
	        .dong_title_span{font-size:18px;font-weight:500;}
	        .dong_find_box{width:100%;height:30px;background:#f5f5f5;border-radius:10px;}
	        .dong_find_box_img{width:20%;height:30px;line-height:30px;float:left;text-align:center;}
	        .dong_input_box{width:80%;height:30px;float:left;}
	        .dong_symbox{width:90%;height:20px;border:none;background:#f5f5f5;margin-top:5px;}
	        .dong_sel_box{width:100%;height:30px;border-bottom:1px solid #f5f5f5;}
	        .dong_sel_span{display:block;width:35px;height:30px;line-height:30px;border-bottom:2px solid #FCD535;font-size:14px;text-align:center;font-size:14px;}
	        .symbol_list{width:100%;height:450px;margin-top:10px;}
	        .sy_list_box{width:100%;height:30px;}
	        .sy_list_boxl{width:35%;height:30px;line-height:30px;float:left;text-align:left;}
	        .sy_list_boxr{width:30%;height:30px;line-height:30px;float:right;text-align:right;}
	        .btnbox{width:100%;height:60px;padding:10px 20px;}
	        .btnbox_l{width:45%;height:40px;line-height:40px;float:left;text-align:center;border-radius:10px;background:#0ecb81;}
	        .btnbox_r{width:45%;height:40px;line-height:40px;float:right;text-align:center;border-radius:10px;background:#f5465c;}
	        .dong_order_c{width:100%;height:550px;background:#fff;margin:0;padding:0px 10px;line-height: 0px;}
	        .dong_order_x{width:100%;height:20px;line-height:20px;text-align:right;}
	        .dong_order_title{width:100%;height:30px;line-height:20px;text-align:center;border-bottom: 1px solid #f5f5f5;}
	        .dong_order_option{width:100%;min-height:110px;overflow: hidden;margin-top:25px;max-height: 180px;}
	        .dong_order_option_list{width:100px;height:80px;background:#f5f5f5;float:left;margin-right:10px;border-radius:10px;padding:5px;cursor: pointer;margin-top: 10px;}
	        .option_list_active{border:1px solid #FCD535;}
	        .dong_order_p{
                width: 100%;
                margin-top: 5px;
                padding-left: 5px;
                height: 20px;
                line-height: 30px;
            }
	        .dong_money_list{width:100%;min-height:60px;}
	        .dong_money_list_box{width:70%;max-height:100px;float:left;overflow: hidden;cursor: pointer;}
	        .dong_money_list_box_l{height:40px;}
	        .dong_money_list_box_option{width:70px;height:40px;line-height:40px;background:#f5f5f5;float:left;margin-right:5px;border-radius:5px;text-align:center;margin-top: 5px;}
	        .green{color:#0ecb81;}
            .red{color:#f5465c;}
            input:focus{background:#f5f5f5;outline: 1px solid #f5f5f5;}


            .left-border-css {
                border-left:10px solid #f5f5f5;
            }

            .right-border-css {
                border-right:10px solid #f5f5f5;
            }
	    </style>
	</head>
	<body>
	    <div class="App">
	        <div class="css-tq0shg">
	            <header class="css-jmskxt">
	 <a href="<?php echo U('Index/index');?>" clss="css-1mvf8us">
	     <img src="/Upload/public/<?php echo get_config('waplogo');?>" class="css-1jgk2rg" style="height:50px;width:50px;border-radius:5px;margin-left: 30px;" />
	 </a>
	<div class="css-1tp5kus header-title">
		<div class="css-vurnku  f22 fw header-title"><?php echo L('PNSCX');?></div>
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
	            <div class="css-ogtd7z">
	                <div class="css-jrzkh7">
	                    <div id="header_global_js_wxgy34nj" class="css-1aac2e"></div>
	                 </div>
	            </div>
	            <main class="css-1wr4jig" style="background: #f5f5f5;border-top: 10px solid #f5f5f5;">
                    <div style="width:20%;min-height:650px;float:left;padding:0px 10px 0px 0px;">
                        <div style="width:100%;min-height:680px;background:#fff;">
                            <div style="width:100%;height:100%;padding:0px;padding:0px 10px;">
                                <div style="width:100%;top:0px;">


                                    <div class="dong_sel_box">
                                        <span class="fcc dong_sel_span"><?php echo L('USDT');?></span>
                                    </div>
                                </div>


                                <div class="symbol_list" id="smybolbox">
                                    <div class="usdt-shadow">
                                        <a href="javascript:void(0)">
                                            <div class="sy_list_box">
                                                <div class="sy_list_boxl">
                                                    <span  class="f14 tcbh"><?php echo L('币种');?></span>
                                                    </div>
                                                <div class="sy_list_boxl tcbh f14 tcc"  style="text-align: center"  ><?php echo L('24小时交易量');?></div>
                                                <div class="sy_list_boxr tcbh f14" ><?php echo L('24h涨跌');?></div>
                                                </div>
                                        </a>
                                    </div>

                                    <div style="width:100%;height:100px;line-height:100px;text-align:center;">
                                        <span class="f14 fcc"><?php echo L('没有获取数据');?></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div style="width:80%;height:550px;line-height:550px;text-align:center;float:left;cursor:pointer;min-height: 650px;">
                        <div style="width:100%;height:50px;box-shadow: 0 2px 10px 0 rgb(0 0 0 / 5%);">
                            <div class="right-border-css" style="width:65%;height:50px;float:left;">
                                <div class="right-border-css" style="width:70%;height:50px;float:left;padding-right: 0px;border: none;">
                                <div class="klinetitle">
                                    <div class="klinetitle_l">
                                        <p class="newpricebox fw f14 fch" ><?php echo ($upmarket); ?></p>
                                        <p class="changebox fw f14 fch" ><?php echo L('秒合约');?></p>
                                    </div>
                                    <div class="klinetitle_l">
                                        <p class="newpricebox fw" id="newpricebox">--</p>
                                        <p class="changebox fw"  id="changebox">--</p>
                                    </div>
                                    <div class="klinetitle_r">
                                        <div class="col-4 klinetitle-s-box">
                                            <div class="newpricebox f14 tcbh">
                                                <?php echo L('最低');?>
                                            </div>
                                            <div class="changebox f14 tcbh" id="minmoney">
                                                --
                                            </div>
                                        </div>

                                        <div class="col-4 klinetitle-s-box">
                                            <div class="newpricebox f14 tcbh">
                                                <?php echo L('最高');?>
                                            </div>
                                            <div class="changebox f14 tcbh" id="maxmoney">
                                                --
                                            </div>
                                        </div>

                                        <div class="col-4 klinetitle-s-box">
                                            <div class="newpricebox f14 tcbh">
                                                24h<?php echo L('量');?>
                                            </div>
                                            <div class="changebox f14 tcbh" id="allvol">
                                                --
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                </div>
                                <div class="right-border-css" style="width:30%;height:50px;float:left;background: #fff;padding-left: 0px;border: none;">
                                </div>
                            </div>

                            <div  style="width:35%;height:50px;line-height:100px;float:left;padding-left:15px; background: #fff;">
                                <div class="tcl" style="width:100%;height:40px;line-height:50px;">
                                    <div class="newpricebox fw f14 tcbh" style="color:#000;"><?php echo ($upmarket); ?></div>
                                    <div class="changebox fw f14 tcbh"><?php echo L('合约建仓');?></div>
                                    <input type="hidden"  id="symbolbox" value="<?php echo ($upmarket); ?>">
                                </div>


                            </div>
                        </div>
                        <div style="width:100%;min-height:630px;background: #fff">
                            <div style="width:100%;min-height:550px;border-top: 2px solid #f5f5f5;">

                                <div style="width:100%;min-height:550px;float:left;">
                                    <div  class="right-border-css" style="width:65%;height:630px;float:left;">
                                        <input type="hidden" id="coinname" value="<?php echo ($smybol); ?>" />
                                        <div style="width:100%;height:600px;">
                                            <iframe id="iframeid" width="100%" scrolling="no" height="600" src="/Trade/ordinary?market=<?php echo ($market); ?>"  noresize="noresize" frameborder="0" ><?php echo L('不支持IFRAME，请升级');?></iframe>
                                        </div>
                                    </div>
                                    <div class="" style="width:35%;height:550px;float:left;">
                                        <div style="width:100%;height:550px;padding:0px 10px;">
                                            <div class="dong_order_c">
                                                <p class="dong_order_p tcl fch f14"><?php echo L('订单类型');?></p>
                                                <div class="dong_order_option">

                                                    <div style="">
                                                        <?php if(is_array($cd)): foreach($cd as $key=>$vo): ?><div class="dong_order_option_list" id="time_<?php echo ($vo["sort"]); ?>" onclick="xztime(<?php echo ($vo["sort"]); ?>,<?php echo ($vo["time"]); ?>,<?php echo ($vo["ykbl"]); ?>);">

                                                                <div style="width:100%;height:20px;line-height:20px;text-align:center;margin-top:5px;">
                                                                    <span class="fch f12 vo-time" id="vo-time-<?php echo ($vo["sort"]); ?>"><?php echo ($vo["time"]); echo L('s');?></span>
                                                                </div>
                                                                <div style="width:100%;height:20px;line-height:20px;text-align:center;margin-top:5px;">
                                                                    <span class="fch f12 vo-ykbl " id="vo-ykbl-<?php echo ($vo["sort"]); ?>"><?php echo ($vo["ykbl"]); ?>%</span>
                                                                </div>
                                                            </div><?php endforeach; endif; ?>
                                                    </div>


                                                </div>

                                                <p class="dong_order_p tcl fcc fch f14"><?php echo L('选择投资金额');?></p>
                                                <div class="dong_money_list">
                                                    <div  style="width:100%;height:40px;text-align:center;" id="custommoney">
                                                        <input type="text" id="tzmoney" onblur="settzmoney();" value="" placeholder="<?php echo L('请输入金额');?>" style="width:98%;margin:auto;height:35px;line-height:35px;background:#f5f5f5;padding-left:15px;border:none;margin-top:2px;" />
                                                    </div>
                                                </div>

                                                <!--                                        <p class="dong_order_p f14"><?php echo L('投资金额');?>(USDT)</p>-->
                                                <div class="dong_money_list">
                                                    <div class="dong_money_list_box" style="width:100%;">
                                                        <div class="dong_money_list_box_l" style="height:60px;">
                                                            <?php if(is_array($ed)): foreach($ed as $key=>$v): if($v["tzed"] != 0): ?><div class="dong_money_list_box_option moveclass" id="tzed_<?php echo ($v["sort"]); ?>" onclick="xztzed(<?php echo ($v["sort"]); ?>,<?php echo ($v["tzed"]); ?>);">
                                                                        <span class="fzm f12"><?php echo ($v["tzed"]); ?> </span>
                                                                    </div><?php endif; endforeach; endif; ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tcl" style="width:100%;height:40px;line-height:30px;margin-top: 80px;">
                                                    <?php if($uid <= 0): ?><span class="dong_order_p f12 fcc" style="margin-bottom:5px;"><?php echo L('账户余额');?>：- - USDT</span>
                                                    <?php else: ?>
                                                        <span class="dong_order_p f12 fcc" style="margin-bottom:5px;"><?php echo L('账户余额');?>：<?php echo ($eusdt_blan); ?> USDT</span><?php endif; ?>
                                                </div>

                                                <div class="tcc" style="width:100%;height:40px;line-height:30px; margin-top: 35px;">
                                                    <?php if($uid <= 0): ?><a href="<?php echo U('Login/index');?>">
                                                        <div  class="ks_buy_up" style="width:45%;height:40px;line-height:40px;text-align:center;border-radius:10px;cursor:pointer;float:left;">
                                                            <span class="f12 ks_buy " ><?php echo L('登录');?></span>
                                                        </div>
</a>
<a href="<?php echo U('Login/index');?>">                                                      <div  class="ks_buy_down" style="width:45%;height:40px;line-height:40px;text-align:center;border-radius:10px;cursor:pointer;float:right;">
                                                            <span class="f12 ks_buy" ><?php echo L('登录');?></span>
                                                        </div>
</a>

                                                    <?php else: ?>
                                                        <div  class="ks_buy_up" style="width:45%;height:40px;line-height:40px;text-align:center;border-radius:10px;cursor:pointer;float:left;" onclick="show_dongbox(1)" >
                                                            <span class="f12 ks_buy "  ><?php echo L('买涨');?></span>
                                                        </div>

                                                        <div  class="ks_buy_down" style="width:45%;height:40px;line-height:40px;text-align:center;border-radius:10px;cursor:pointer;float:right;" onclick="show_dongbox(2)">
                                                            <span class="f12 ks_buy" ><?php echo L('买跌');?></span>
                                                        </div><?php endif; ?>
                                                </div>


                                                <input type="hidden" id="ctime" value="" />
                                                <input type="hidden" id="ctzed" value="" />
                                                <input type="hidden" id="ccoinname" value="<?php echo ($upmarket); ?>" />
                                                <input type="hidden" id="ctzfx" value="1" />
                                                <input type="hidden" id="cykbl" value="" />
                                                <input type="hidden" id="hymin" value="<?php echo ($hymin); ?>" />

                                                <input type="hidden" id="flag" value="1" />


                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div style="width:100%;min-height:200px;float:left;min-height: 360px;margin-top: 10px;border-top: 1px solid #f5f5f5;background: #fff">

                        <div class="order-top">
                            <div class="order-top-span order-top-current order-top-select" onclick="order_top_select_action(1)">
                                <?php echo L('全部委托');?>
                            </div>
                            <div class="order-top-span order-top-history " onclick="order_top_select_action(2)">
                                <?php echo L('历史记录');?>
                            </div>
                            <div class="refresh-icon">
                                <svg width="24" height="24" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M42 8V24" stroke="#303131" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 24L6 40" stroke="#303131" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 24C6 33.9411 14.0589 42 24 42C28.8556 42 33.2622 40.0774 36.5 36.9519" stroke="#303131" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><path d="M42.0007 24C42.0007 14.0589 33.9418 6 24.0007 6C18.9152 6 14.3223 8.10896 11.0488 11.5" stroke="#303131" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>

                            </div>

                        </div>

                        <div class="order-main">
                            <?php if($uid <= 0): ?><table class="table tcc order-main-table order-main-table-current">
                                </table>
                                <?php else: ?>
                                <div class="table-box order-main-table-current" >
                                    <table class="table tcc order-main-table ">

                                        <thead>
                                        <tr  class="tcbh">
                                            <td>ID</td>
                                            <td><?php echo L('交易对');?></td>
                                            <td><?php echo L('方向');?></td>
                                            <td><?php echo L('状态');?></td>
                                            <td><?php echo L('委托额度');?></td>
                                            <td><?php echo L('建仓单价');?></td>
                                            <td><?php echo L('建仓时间');?></td>
                                            <td><?php echo L('倒计时');?></td>
                                        </tr>
                                        </thead>

                                        <tbody id="tbody-current">

                                        </tbody>
                                    </table>
                                    <a href="<?php echo U('Contract/contractjc');?>">
                                        <div id="more-box">

                                        </div>
                                    </a>
                                </div>
                                <div class="table-box order-main-table-history">

                                    <table class="table tcc order-main-table ">
                                        <thead>
                                        <tr class="tcbh">
                                            <td><?php echo L('交易对');?></td>
                                            <td><?php echo L('方向');?></td>
                                            <td><?php echo L('状态');?></td>
                                            <td><?php echo L('委托额度');?></td>
                                            <td><?php echo L('交易限价');?></td>
                                            <td><?php echo L('成交单价');?></td>
                                            <td><?php echo L('建仓时间');?></td>
                                            <td><?php echo L('平仓时间');?></td>
                                            <td><?php echo L('盈亏金额');?></td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr class="fch f12">
                                                <td><?php echo ($vo["coinname"]); ?></td>


                                                <?php if($vo["hyzd"] == 1): ?><td class="f14 fw fgreen"><?php echo L('买涨');?></td>
                                                    <?php elseif($vo["hyzd"] == 2): ?>
                                                    <td class="f14 fw fred"><?php echo L('买跌');?></td><?php endif; ?>


                                                <div class="bcontentop" style="width:8%">
                                                    <?php if($vo["status"] == 1): ?><td><?php echo L('待结算');?></td>
                                                        <?php elseif($vo["status"] == 2): ?>
                                                        <td><?php echo L('已结算');?></td>
                                                        <?php elseif($vo["status"] == 3): ?>
                                                        <td><?php echo L('无效单');?></td><?php endif; ?>
                                                </div>

                                                <td><?php echo ($vo["num"]); ?></td>
                                                <td><?php echo ($vo["buyprice"]); ?></td>
                                                <td><?php echo ($vo["sellprice"]); ?></td>
                                                <td><?php echo ($vo["buytime"]); ?></td>
                                                <td><?php echo ($vo["selltime"]); ?></td>
                                                <div class="btitleop" style="width:10%;">
                                                    <?php if($vo["is_win"] == 1): ?><td class="fch f14 fgreen"> +<?php echo ($vo["ploss"]); ?></td>
                                                        <?php elseif($vo["is_win"] == 2): ?>
                                                        <td class="fch f14 fred"> -<?php echo ($vo["ploss"]); ?></td><?php endif; ?>
                                                </div>

                                            </tr><?php endforeach; endif; ?>
                                        </tbody>
                                    </table>
                                    <div class="table-history-more">
                                    <?php if(empty($list)): ?><img src="/Public/Home/static/imgs/empty.e90e5075.svg" class="empty-svg" >
                                        <p class="tcc"> <?php echo L('暂无订单');?></p>
                                        <?php else: ?>
                                        <a href="<?php echo U('Contract/contractpc');?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"viewBox="0 0 384 512"fill="#e6ecf2"><path d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"/></svg>
                                            <span class="tcc"> <?php echo L('查看更多');?></span>
                                        </a><?php endif; ?>
                                    </div>
                                </div><?php endif; ?>
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
                ><?php echo L('PNSCX');?></span>
            </div>
            <!--<div style="min-width:100px;height:60px;line-height:60px;margin-right:15px;float: right" onclick="pop_box_show('privacy')">-->
            <!--    <a href="avascript:void(0)"  class="footer-box-span"  style="color:#848E9C;"><?php echo L('隐私政策申明');?></a>-->
            <!--</div>-->
            <div style="min-width:100px;height:60px;line-height:60px;margin-right:15px;float: right" onclick="pop_box_show('service')">
                <a href="avascript:void(0)"  class="footer-box-span"  style="color:#848E9C;"><?php echo L('用户服务协议');?></a>
            </div>
            <div style="min-width:100px;height:60px;line-height:60px;margin-right:15px;float: right" onclick="pop_box_show('msb')">
                <a href="avascript:void(0)"  class="footer-box-span"  style="color:#848E9C;"><?php echo L('MSB认证');?></a>
            </div>
            <div style="min-width:100px;height:60px;line-height:60px;margin-right:15px;float: right" onclick="pop_box_show('about')">
                <a href="javascript:void(0)" class="footer-box-span" style="color:#848E9C;"><?php echo L('关于我们');?></a>
            </div>
        </div>
        <div style="width:100%;height:60px;line-height:90px;text-align:center;border-top:1px solid #848E9C;">
            <span style="color:#848E9C;">CopyRight © 2017 - 2022 PNSCX. All Rights Reserved.</span>
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

	<!---------交易选择弹窗---------->
	<div class="dongbox"  id="showdong">
	    <div class="dong_con">
	        <div style="width:100%;position:relative;z-index:9999999;top:0px;">
	            <div class="dong_title">
	                <span class="dong_title_span"><?php echo L('秒合约');?></span>
	            </div>

	            <div class="dong_sel_box">
	                <span class="fcc dong_sel_span"><?php echo L('全部');?></span>
	            </div>
	        </div>
	        
	        
	        <div class="symbol_list" id="smybolbox-b">
	            <div style="width:100%;height:100px;line-height:100px;text-align:center;">
                    <span class="fzmm fcc"><?php echo L('没有获取数据');?></span>
                </div>
	        </div>
	    </div>
	    
	    <div style="width:70%;height:100vh;float:left;" id="hidedong"></div>
	</div>
    <!--    购买弹框-->
    <div class="buy-box" id="buy-box" style="display: none">
        <div class="pop-content">
            <div class="pop-content-desc" style="color: #2c3e50 !important;">
                <table class="table tcc">

                    <tbody>
                    <tr>
                        <td><?php echo L('账户余额');?></td>
                        <td><span class="fch f14"><?php echo ($eusdt_blan); ?> USDT</span></td>
                    </tr>
                    <tr>
                        <td><?php echo L('交易对');?></td>
                        <td><span class="fch f14"><?php echo ($upmarket); ?></span></td>
                    </tr>
                    <tr>
                        <td><?php echo L('方向');?></td>
                        <td><span class="fgreen f14" id="fxtext"><?php echo L('买涨');?></span></td>
                    </tr>
                    <tr>
                        <td><?php echo L('现价');?></td>
                        <td ><span class="fch f14" style="color:#f5465c;" id="ordernewprice">--</span></td>
                    </tr>
                    <tr>
                        <td><?php echo L('金额');?></td>
                        <td><span class="fch f14"><span id="ttzed">10</span> USDT</span></td>
                    </tr>
                    <tr>
                        <td><?php echo L('预计盈利');?></td>
                        <td><span class="fch f14"><span id="yl">0</span> USDT</span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>

                <?php if($uid <= 0): ?><div style="width: 60%;height:40px;line-height:40px;text-align:center;margin-top:15px;background: linear-gradient(to left,#eeb80d,#ffe35b);border-radius:10px;cursor:pointer;margin-left:20%">
                        <span class="fch f12"><?php echo L('请先登陆');?></span>
                    </div>
                    <?php else: ?>
                    <div id="subbtn" style="width: 60%;height:40px;line-height:40px;text-align:center;margin-top:15px;background: linear-gradient(to left,#eeb80d,#ffe35b);border-radius:10px;cursor:pointer;margin-left:20%">
                        <span class="fch f12"><?php echo L('确认下单');?></span>
                    </div><?php endif; ?>

            </div>
        </div>
    </div>

	    
	</body>
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/Home/static/js/layer/layer.js" ></script>
    <script type="text/javascript" src="/Public/Home/static/js/jquery.SuperSlide.2.1.1.js" ></script>
    <script type="text/javascript">
        let pct = 0;
        let usdtnum = 0;
        function settzmoney(){
            var hymin = parseFloat($("#hymin").val());
            var tzmoney = parseFloat($("#tzmoney").val());
            if(tzmoney < hymin){
                layer.msg("<?php echo L('不能小于最低投资额度');?>");return false;
            }
            
            $("#ctzed").val(tzmoney);
            $("#ttzed").html(tzmoney);
            
        }
    </script>
    <script type="text/javascript">
        $("#custommoney").click(function(){
            $(".moveclass").removeClass("option_list_active");
            $("#custommoney").addClass("option_list_active");
        });
    </script>
    <script type="text/javascript">
        $("#tyj_subbtn").click(function(){
            
            var flag = $("#flag").val();
            if(flag == 2){
                return false;
            }
            
            var ctime = $("#ctime").val();
            var ctzed = $("#ctzed").val();
            var ccoinname = $("#ccoinname").val();
            var ctzfx = $("#ctzfx").val();
            var cykbl = $("#cykbl").val();
            if(ctime <= 0 || ctime ==''){
                layer.msg("<?php echo L('请选择结算时间');?>");return false;
            }
            if(ctzed <= 0 || ctzed==''){
                layer.msg("<?php echo L('请选择投入金额');?>");return false;
            }
            if(ccoinname == '' || ccoinname == null){
                layer.msg("<?php echo L('缺少重要参数');?>");return false;
            }
            if(ctzfx <= 0 || ctzfx ==''){
                layer.msg("<?php echo L('缺少重要参数');?>");return false;
            }
            if(cykbl <= 0 || cykbl ==''){
                layer.msg("<?php echo L('缺少重要参数');?>");return false;
            }
            
            $("#flag").val(2);
            ctime = ctime / 60;
            $.post("<?php echo U('Contract/ty_creatorder');?>",
            {'ctime':ctime,'ctzed':ctzed,'ccoinname':ccoinname,'ctzfx':ctzfx,'cykbl':cykbl},
            function(data){
                if(data.code == 1){
                    layer.msg(data.msg);
                    setTimeout(function(){
                        window.location.reload();
                    },2000);
                }else{
                    layer.msg(data.msg);return false;
                }
            });
        });
    
        $("#subbtn").click(function(){
            
            var flag = $("#flag").val();
            if(flag == 2){
                return false;
            }
            
            var ctime = $("#ctime").val();
            var ctzed = $("#ctzed").val();
            var ccoinname = $("#ccoinname").val();
            var ctzfx = $("#ctzfx").val();
            var cykbl = $("#cykbl").val();
            if(ctime <= 0 || ctime ==''){
                layer.msg("<?php echo L('请选择结算时间');?>");return false;
            }
            if(ctzed <= 0 || ctzed==''){
                layer.msg("<?php echo L('请选择投入金额');?>");return false;
            }
            if(ccoinname == '' || ccoinname == null){
                layer.msg("<?php echo L('缺少重要参数');?>");return false;
            }
            if(ctzfx <= 0 || ctzfx ==''){
                layer.msg("<?php echo L('缺少重要参数');?>");return false;
            }
            if(cykbl <= 0 || cykbl ==''){
                layer.msg("<?php echo L('缺少重要参数');?>");return false;
            }
            
            $("#flag").val(2);
            ctime = ctime / 60;
            $.post("<?php echo U('Contract/creatorder');?>",
            {'ctime':ctime,'ctzed':ctzed,'ccoinname':ccoinname,'ctzfx':ctzfx,'cykbl':cykbl},
            function(data){
                if(data.code == 1){
                    layer.msg(data.msg);
                    setTimeout(function(){
                        window.location.reload();
                    },2000);
                }else{
                    layer.msg(data.msg);return false;
                }
            });
        });
    </script>
    <script type="text/javascript">

        function xztime(sort,time,ykbl){
            var sort = sort;
            var time = time;
            var ykbl = ykbl;
            var idtxt = "#time_"+sort;
            usdtnum = ykbl;

            ylnumf();

            $('.vo-ykbl').css('color', '#000');
            $('#vo-ykbl-'+sort).css('color', '#fff');
            $('.vo-time').css('color', '#000');
            $('#vo-time-'+sort).css('color', '#fff');
            $('.vo-ykbl').css('color', '#000');
            $('#vo-ykbl-'+sort).css('color', '#fff');


            $('.dong_order_option_list').css('background', '#f5f5f5')
            $('#time_'+sort).css('background', '#f5465c')
            // #f5f5f5
            $("#ctime").val(time);
            $("#cykbl").val(ykbl);
            $(idtxt).addClass("option_list_active");
            $(idtxt).siblings().removeClass("option_list_active");
        }
        
        function ylnumf() {
            if (pct != 0 && usdtnum != 0) {
                ylnum = pct * usdtnum / 100;
                $('#yl').html(ylnum)
            }
        }

        function xztzed(sort,tzed){
            var sort = sort;
            var tzed = tzed;
            var idtxt = "#tzed_"+sort;
            pct = tzed
            ylnumf();

            $('.dong_money_list_box_option').css('background', '#f5f5f5');
            $('.dong_money_list_box_option').css('color', '#000');
            $('#tzed_'+sort).css('background', 'rgb(245, 70, 92)');
            $('#tzed_'+sort).css('color', '#fff');

            $("#ctzed").val(tzed);
            $("#ttzed").html(tzed);
            $("#tzmoney").val(tzed);
            $(idtxt).addClass("option_list_active");
            $(idtxt).siblings().removeClass("option_list_active");
            $("#custommoney").removeClass("option_list_active");
        }
    </script>
    <script type="text/javascript">
        function getcoin_data(){
            var coinname = $("#coinname").val();
            $.post("<?php echo U('Ajaxtrade/getcoin_data');?>",
            {'coinname':coinname},
            function(data){
                if(data.code == 1){
                    $("#newpricebox").html(data.close);
                    $("#ordernewprice").html(data.close);
                    $("#changebox").html(data.change);
                    $("#minmoney").html(data.low);
                    $("#maxmoney").html(data.high);
                    $("#allvol").html(data.amount);
                }
            });
        }
    </script>
    <script type="text/javascript">
          $(function(){
              getcoin_data();
              setInterval("getcoin_data()",2000); 
          });
    </script>
    <script type="text/javascript">
        function getallsmybol(){
            $.post("<?php echo U('Ajaxtrade/getallcoin');?>",
            function(data){
                if(data.code == 1){
                    $("#smybolbox").empty();
                    var html = '';
                    if(data.data == '' || data.data == null){
                        html = '<div style="width:100%;height:100px;line-height:100px;text-align:center;">'+ 
                               '<span class="fzmm fcc">' + "<?php echo L('没有获取数据');?>" + '</span>'+
                               '</div>';
                        $("#smybolbox").append(html);
                        
                    }else{
                        $.each(data.data,function(key,val){
                            html += '<a href="/Contract/index.html?coin='+ val.symbol +'">'+
                                    '<div class="sy_list_box">'+
                                    '<div class="sy_list_boxl">'+
                                    '<span  class="f12 fch">'+ val.cname +'</span>'+
                                    '</div>'+
                                    '<div class="sy_list_boxl" style="text-align:center;">' + val.open + '</div>'+
                                    '<div class="sy_list_boxr">' + val.change +'</div>'+
                                    '</div>'+
                                    '</a>';
                        });
                        $("#smybolbox").append(html);
                    }
                }else{
                    html =  '<div style="width:100%;height:100px;line-height:100px;text-align:center;">'+ 
                            '<span class="fzmm fcc">' + "<?php echo L('没有获取数据');?>" + '</span>'+
                            '</div>';
                    $("#smybolbox").append(html);
                }
            });
        }
    </script>
    <script type="text/javascript">
        function show_dongbox(num){
            var n = num;
            if(n == 1){
                $("#ctzfx").val(n);
                $("#fxtext").text("<?php echo L('买涨');?>");
                $("#fxtext").css('color','#0ecb81');
            }else if(n == 2){
                $("#ctzfx").val(n);
                $("#fxtext").text("<?php echo L('买跌');?>");
                $("#fxtext").css('color','#f5465c');
            }

            buy_box_func()
        }
        $("#x_dongbox").click(function(){
            $("#dongbox").hide();
        });
    </script>
    <script type="text/javascript">
        $("#hidedong").click(function(){
            $("#showdong").fadeOut("slow");
        });
        $("#centerbox").click(function(){
            getallsmybol();
            $("#showdong").fadeIn("slow");
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


    <script type="text/javascript">
        function getallsmybol(){
            $.post("<?php echo U('Ajaxtrade/getallcoin');?>",
                function(data){
                    if(data.code == 1){
                        $("#smybolbox").empty();
                        var html = '';
                        if(data.data == '' || data.data == null){
                            html = '<div style="width:100%;height:100px;line-height:100px;text-align:center;">'+
                                '<span class="f14 fcc">' + "<?php echo L('没有获取数据');?>" + '</span>'+
                                '</div>';
                            $("#smybolbox").append(html);

                        }else{
                            html += '<div class="usdt-shadow"><a href="javascript:void(0)">'+
                                '<div class="sy_list_box">'+
                                '<div class="sy_list_boxl">'+
                                '<span  class="f14 tcbh"><?php echo L('币种');?></span>'+
                                '</div>'+
                                '<div class="sy_list_boxl tcbh f14 tcc" style="text-align: center" ><?php echo L('24小时交易量');?></div>'+
                                '<div class="sy_list_boxr tcbh f14" ><?php echo L('24h涨跌');?></div>'+
                                '</div>'+
                                '</a></div>';
                            $.each(data.data,function(key,val){
                                html += '<div class="usdt-shadow"><a  href="/Contract/index.html?coin='+ val.symbol +'">'+
                                    '<div class="sy_list_box">'+
                                    '<div class="sy_list_boxl">'+
                                    '<span  class="f12 fch">'+ val.cname +'</span>'+
                                    '</div>'+
                                    '<div class="sy_list_boxl f12 tcc"  style="text-align: center"  >' + val.open + '</div>'+
                                    '<div class="sy_list_boxr f12" >' + val.change +'</div>'+
                                    '</div>'+
                                    '</a></div>';
                            });

                            $("#smybolbox").append(html);
                        }
                    }else{
                        html =  '<div style="width:100%;height:100px;line-height:100px;text-align:center;">'+
                            '<span class="f14 fcc">' + "<?php echo L('没有获取数据');?>" + '</span>'+
                            '</div>';
                        $("#smybolbox").append(html);
                    }
                });
        }
    </script>
    <script type="text/javascript">
        $(function(){
            getallsmybol();
            gettradbuy();
            gettradsell();
            setInterval("getallsmybol()",3000);
            setInterval("gettradbuy()",2000);
            setInterval("gettradsell()",2000);
        });
    </script>
    <script type="text/javascript">
        function gettradsell(){
            var symbol = $("#symbolbox").val();
            $.post("<?php echo U('Ajaxtrade/gettradsellten');?>",
                {'symbol':symbol},
                function(data){
                    if(data.code == 1){
                        $("#tradebuybox").empty();
                        var html = '';
                        if(data.data == '' || data.data == null){
                            html = '<div style="width:100%;height:100px;line-height:100px;text-align:center;">'+
                                '<span class="f14 fcc">' + "<?php echo L('没有获取数据');?>" + '</span>'+
                                '</div>';
                            $("#tradebuybox").append(html);

                        }else{
                            $.each(data.data,function(key,val){
                                html += '<div style="width:100%;height:30px;">'+
                                    '<div class="trade_list tl">'+
                                    '<span class="red f12">'+ val.price +'</span>'+
                                    '</div>'+
                                    '<div class="trade_list tr">'+
                                    '<span class="red f12">'+ val.amount +'</span>'+
                                    '</div>'+
                                    '</div>';
                            });
                            $("#tradebuybox").append(html);
                        }
                    }
                });
        }
    </script>
    <script type="text/javascript">
        function gettradbuy(){
            var symbol = $("#symbolbox").val();
            $.post("<?php echo U('Ajaxtrade/gettradbuyten');?>",
                {'symbol':symbol},
                function(data){
                    if(data.code == 1){
                        $("#tradesellbox").empty();
                        var html = '';
                        if(data.data == '' || data.data == null){
                            html = '<div style="width:100%;height:100px;line-height:100px;text-align:center;">'+
                                '<span class="f14 fcc">' + "<?php echo L('没有获取数据');?>" + '</span>'+
                                '</div>';
                            $("#tradesellbox").append(html);

                        }else{
                            $.each(data.data,function(key,val){
                                html += '<div style="width:100%;height:30px;">'+
                                    '<div class="trade_list tl">'+
                                    '<span class="green f12">'+ val.price +'</span>'+
                                    '</div>'+
                                    '<div class="trade_list tr">'+
                                    '<span class="green f12">'+ val.amount +'</span>'+
                                    '</div>'+
                                    '</div>';
                            });
                            $("#tradesellbox").append(html);
                        }
                    }
                });
        }
    </script>
    <script type="text/javascript">
        $(function(){
            getcoinprice();
            setInterval("getcoinprice()",2000);
        });
    </script>
    <script type="text/javascript">
        function getcoinprice(){
            var symbol = $("#symbolbox").val();
            $.post("<?php echo U('Ajaxtrade/getcoinprice');?>",
                {'symbol':symbol},
                function(data){
                    if(data.code == 1){
                        $("#changebox").html(data.change);
                        $(".closeprice").html(data.price);
                        $("#minmoney").html(data.low);
                        $("#maxmoney").html(data.high);
                        $("#allvol").html(data.amount);
                    }else{
                        // console.log("<?php echo L('未获取数据');?>");
                    }
                });
        }
    </script>

    <script>
        $('.usdt-shadow').hover(
            function () {
                $(this).css('background-color', '#FEF1F2');
            },
            function () {
                $(this).css('background-color', '#fff');
            }
        )


        function order_top_select_action(type){
            $('.order-top-span').removeClass('order-top-select');

            if (type == 1) {
                $('.order-top-current').addClass('order-top-select');
                $('.order-main-table-current').show();
                $('.order-main-table-history').hide();
            }

            if (type == 2) {
                $('.order-top-history').addClass('order-top-select');
                $('.order-main-table-current').hide();
                $('.order-main-table-history').show();
            }

        }

        $(function(){
            gethyorder();
            setInterval("gethyorder()",1000);
        });
        function gethyorder(){
            $.post("<?php echo U('Contract/gethyorder?limit=5');?>",
                function(data){
                    if(data.code == 1){
                        $("#tbody-current").empty();
                        var html = '';
                        if(data.data == '' || data.data == null){
                            $('.order-main-table-current').empty()
                            html += '<div class="table-history-more"><img src="/Public/Home/static/imgs/empty.e90e5075.svg" class="empty-svg" >\n' +
                                '                                                    <p class="tcc"> 暂无订单</p></div>';
                            $('.order-main-table-current').append(html)
                        }else{
                            $.each(data.data,function(key,val){
                                html += '<tr class="fch f12">\n' +
                                    '<td>'+ val.id +'</td>\n' +
                                    '<td>'+ val.coinanme +'</td>\n' +
                                    '<td>'+ val.hyzdstr +'</td>\n' +
                                    '<td>'+ val.statusstr +'</td>\n' +
                                    '<td>'+ val.num +'</td>\n' +
                                    '<td>'+ val.buyprice +'</td>\n' +
                                    '<td>'+ val.buytime +'</td>\n' +
                                    '<td>'+ val.t +'</td>\n' +
                                    '</tr>';
                            });
                            $("#tbody-current").append(html);
                            if (data.data.length > 5) {
                                $("#more-box").empty();
                                more = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"viewBox="0 0 384 512"fill="#e6ecf2"><path d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"/></svg><span class="tcc"> 查看更多</span>';
                                $("#more-box").html(more);
                            }

                        }
                    }

                });
        }

        $('.refresh-icon').on('click', function () {
            window.location.reload()
        })


    </script>

    <script>
        function buy_box_func(){
            layer.open({
                type: 1,
                area: ['30%', '550px'],
                shadeClose: true,
                title: 'Buy',
                content: $('#buy-box') //这里content是一个DOM，注意：最好该元素要存放在body最外层，否则可能被其它的相对元素所影响
            });
        }
    </script>

    
</html>