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
		::-webkit-input-placeholder { /* WebKit browsers */
		  color: #b5b5b5;
		  font-size: 18px;
		}

		::-moz-placeholder { /* Mozilla Firefox 19+ */
		  color: #b5b5b5;
		  font-size: 18px;
		}
		input:focus{background:#F5F5F5;outline: 1px solid #F5F5F5;}
		a:hover,a:link,a:visited,a:active{color:#000000;text-decoration:none;}
		.headerbox{height:50px;line-height:50px;}
		.iconf{height: 30px;width: 30px;border-radius: 15px;background: #eaebed;margin-top: 10px;}
		.imgbox{width:50px;height:50px;line-height:50px;float:left;}
		.badge-light{background-color: #FCD535;position: relative;left: -15px;top: -10px;}
		.badge{line-height: 0.8;border-radius: .5rem;}
		ul, li {list-style-type: none;padding: 0px;}
		.scrollDiv {
			height: 25px;/* 必要元素 */
			line-height: 25px;
			border: none;
			overflow: hidden;/* 必要元素 */
			margin-top:8px;
		}
		.scrollDiv li {
			height: 25px;
			padding-left: 10px;
		}
		.optionbox{width:100%;height:90px;background:#fff;margin-top:10px;border-top-left-radius:20px;border-top-right-radius:20px;padding: 5px 8px;}
		.oplist{width:20%;height:80px;float:left;}
		.opimg{width:100%;height: 50px;line-height: 50px;text-align: center;}
		.opicon{width:30px;height:30px;margin-top: 10px;}
		.optext{width:100%;height: 30px;line-height: 30px;text-align: center;overflow: hidden;}
		.hyicon{width:40px;height: 40px; margin-left: 20px;margin-top: 10px;}
		.ricon{background: #eaebed;padding: 5px;border-radius: 20px;font-size: 20px;color: #000;}
		.zixunlist {height: 90px;width: 100%;background: #fff;}
		.zixunconten{height: 90px;width: 33.3%;background: #fff;float: left;margin: 0 auto;text-align: center;}
        .bgreen{background:#0ecb81;}
        .bred{background:#f5465c;}
        .bgfcc{background:#f5f5f5;}
        .green{color:#0ecb81;}
        .red{color:#f5465c;}
        .list_open{width:30%;height:50px;line-height:50px;float:left;text-align:center;}
        .list_cname{width:40%;height:50px;line-height:50px;float:left;}
        .list_change{width:30%;height:50px;line-height:50px;float:left;text-align:right;}
        .dongbox{position:fixed;z-index:9999;display:none;top:0px;width:100%;height:100vh;background:rgba(0,0,0,0.2);}
        .dong_order_c{width:90%;background:#fff;margin:80px auto;border-radius:10px;padding:10px;}
	    .dong_order_x{width:100%;height:20px;line-height:20px;text-align:right;}
	    .dong_order_title{width:100%;height:30px;line-height:20px;text-align:center;border-bottom: 1px solid #f5f5f5;}
	    .infobox{width:100%;height:400px;padding:5px 20px;margin-top:50px;}
	    .infotbox{width:100%;margin-top:15px;}
	    .lbox{width:100%;height:50px;}
	    .lboxc{width:100%;padding:15px 0px;}
	    .lbox_l{width:20%;height:50px;line-height:50px;float:left;text-align:left;}
	    .lbox_r{width:80%;height:50px;line-height:50px;float:right;text-align:right;}
	</style>
  </head>
  <body>
	<div class="container-fluid " style="padding:0px;width:100vw;">
		<div class="no_header" style="position: fixed;z-index: 9999;background: #f5f5f5;padding:0px 10px;">
			<div class="headerbox fl">
				<?php if($uid <= 0): ?><a href="<?php echo U('Login/index');?>">
				<div class="imgbox" style="">
					<svg t="1654070982201"  viewBox="0 0 1026 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="17635" width="25" ><path d="M371.732817 94.172314q25.773475 0 44.112294 17.843175t18.338819 43.616651l0 247.821878q0 25.773475-18.338819 44.112294t-44.112294 18.338819l-247.821878 0q-25.773475 0-43.616651-18.338819t-17.843175-44.112294l0-247.821878q0-25.773475 17.843175-43.616651t43.616651-17.843175l247.821878 0zM371.732817 589.81607q25.773475 0 44.112294 17.843175t18.338819 43.616651l0 248.813166q0 25.773475-18.338819 43.616651t-44.112294 17.843175l-247.821878 0q-25.773475 0-43.616651-17.843175t-17.843175-43.616651l0-248.813166q0-25.773475 17.843175-43.616651t43.616651-17.843175l247.821878 0zM868.367861 589.81607q25.773475 0 43.616651 17.843175t17.843175 43.616651l0 248.813166q0 25.773475-17.843175 43.616651t-43.616651 17.843175l-247.821878 0q-25.773475 0-44.112294-17.843175t-18.338819-43.616651l0-248.813166q0-25.773475 18.338819-43.616651t44.112294-17.843175l247.821878 0zM1006.156825 203.21394q19.82575 19.82575 19.82575 46.590513t-19.82575 45.599226l-184.379477 184.379477q-19.82575 19.82575-46.094869 19.82575t-46.094869-19.82575l-184.379477-184.379477q-18.834463-18.834463-18.834463-45.599226t18.834463-46.590513l184.379477-184.379477q19.82575-18.834463 46.094869-18.834463t46.094869 18.834463z" p-id="17636" fill="#8a8a8a"></path></svg>
				</div>
				</a>
				<?php else: ?>	
				<a href="<?php echo U('Index/uoption');?>">
				<div class="imgbox" style="">
					<svg t="1654070982201"  viewBox="0 0 1026 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="17635" width="25" ><path d="M371.732817 94.172314q25.773475 0 44.112294 17.843175t18.338819 43.616651l0 247.821878q0 25.773475-18.338819 44.112294t-44.112294 18.338819l-247.821878 0q-25.773475 0-43.616651-18.338819t-17.843175-44.112294l0-247.821878q0-25.773475 17.843175-43.616651t43.616651-17.843175l247.821878 0zM371.732817 589.81607q25.773475 0 44.112294 17.843175t18.338819 43.616651l0 248.813166q0 25.773475-18.338819 43.616651t-44.112294 17.843175l-247.821878 0q-25.773475 0-43.616651-17.843175t-17.843175-43.616651l0-248.813166q0-25.773475 17.843175-43.616651t43.616651-17.843175l247.821878 0zM868.367861 589.81607q25.773475 0 43.616651 17.843175t17.843175 43.616651l0 248.813166q0 25.773475-17.843175 43.616651t-43.616651 17.843175l-247.821878 0q-25.773475 0-44.112294-17.843175t-18.338819-43.616651l0-248.813166q0-25.773475 18.338819-43.616651t44.112294-17.843175l247.821878 0zM1006.156825 203.21394q19.82575 19.82575 19.82575 46.590513t-19.82575 45.599226l-184.379477 184.379477q-19.82575 19.82575-46.094869 19.82575t-46.094869-19.82575l-184.379477-184.379477q-18.834463-18.834463-18.834463-45.599226t18.834463-46.590513l184.379477-184.379477q19.82575-18.834463 46.094869-18.834463t46.094869 18.834463z" p-id="17636" fill="#8a8a8a"></path></svg>
				</div>
				</a><?php endif; ?>

				<?php if($uid <= 0): ?><a href="<?php echo U('Login/index');?>" class="fcc"><?php echo L('登陆');?> / <?php echo L('注册');?></a><?php endif; ?>
			</div>
            
            <a href="<?php echo U('Login/setlang');?>">
			<div class="headerbox fr txtr">
<!--				<i class="bi bi-bell fcc" style="font-size:22px;"></i>-->
				<svg t="1654071212180"  viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="20103" width="30" ><path d="M782 912H242c-71.68 0-130-58.32-130-130V242c0-71.68 58.32-130 130-130h540c71.68 0 130 58.32 130 130v540c0 71.68-58.32 130-130 130zM242 172c-38.59 0-70 31.41-70 70v540c0 38.59 31.41 70 70 70h540c38.59 0 70-31.41 70-70V242c0-38.59-31.41-70-70-70H242z" p-id="20104" fill="#8a8a8a"></path><path d="M455.49 621.78c-3.97-1.08-8.51-1.71-13.51-1.9-4.32-0.15-8.84-0.21-13.6-0.21h-100.5v-86.64h107.87c9.01 0 15.72-1.65 20.48-4.99 4.09-2.86 8.98-8.65 8.98-20.14 0-9.2-2.82-16.12-8.37-20.56-4.91-3.93-11.8-5.86-21.09-5.86H327.89V404.8h112.2c8.39 0 14.92-1.69 19.96-5.14 4.34-2.94 9.51-8.88 9.5-20.98-0.48-9.18-3.66-15.97-9.53-20.18-4.96-3.53-11.48-5.25-19.93-5.25H302.76c-10.47 0-18.01 2.31-23.07 7.09-5.17 4.93-7.69 12.25-7.69 22.36v259.06c0 11.11 3.15 19.06 9.36 23.65 5.28 3.91 12.28 5.82 21.4 5.82h139.93c9.38 0 16.37-1.54 21.44-4.74 4.45-2.83 9.75-8.84 9.75-21.26 0-8.19-3.11-13.24-5.7-16.01-3.26-3.53-7.52-6.03-12.69-7.44zM745.3 356.36c-4.74-5.25-11.96-7.91-21.46-7.91-9.85 0-17.18 3.02-21.79 8.99-3.95 5.1-5.94 11.4-5.94 18.74v188.1L559.8 364.97c-2.85-3.45-5.68-6.6-8.5-9.41-3.24-3.24-9.06-7.11-18.51-7.11-11.87 0-17.89 5.16-20.85 9.5-3.42 4.99-5.14 11.13-5.14 18.23v271.21c0 7.47 2.22 13.94 6.59 19.23 3.36 4.06 9.75 8.93 21.13 8.93 11.23 0 17.72-4.74 21.17-8.72 4.64-5.33 6.99-11.89 6.99-19.44v-184.6l135.35 195.08c3.18 4.61 6.73 8.5 10.59 11.63 5.01 4.02 10.86 6.05 17.39 6.05 11.9 0 17.92-5.18 20.85-9.5 3.42-4.99 5.14-11.13 5.14-18.23V376.19c0-8.19-2.24-14.85-6.7-19.83z" p-id="20105" fill="#8a8a8a"></path></svg>

			</div>
			</a>
		</div>

		<div style="width:100%;height:60px;background:#f5f5f5;"></div>
	
		<!--轮播图-->
		<div id="carouselExampleIndicators" class="carousel slide slidepm" data-ride="carousel" style="width:100%;margin: 0px;padding:0px 10px;">
			<div class="carousel-inner" style="height: 150px;">
				<div class="carousel-item active">
					<img src="/Upload/public/<?php echo ($clist["websildea"]); ?>" class="d-block w-100" style="height:150px;border-radius:10px;" />
				</div>
				<div class="carousel-item">
					<img src="/Upload/public/<?php echo ($clist["websildeb"]); ?>" class="d-block w-100" style="height:150px;border-radius:10px;" />
				</div>
				<div class="carousel-item">
					<img src="/Upload/public/<?php echo ($clist["websildec"]); ?>" class="d-block w-100" style="height:150px;border-radius:10px;" />
				</div>
			</div>
		</div>
	
		<!--滚动新闻-->
		<div style="width:100%;height:40px;margin-top:5px;padding:0px 10px;">
			<div style="width:10%;height:40px;float:left;line-height: 40px;">
				<i class="bi bi-megaphone fcc" style="font-size:20px;"></i>
			</div>
			<div style="width:75%;height:40px;float:left;line-height: 40px;">
				<div class="scrollDiv" id="s1">
    				<ul>
    				    <?php if(is_array($nlist)): foreach($nlist as $key=>$vo): ?><li><a href="<?php echo U('Index/gginfo');?>?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; ?>
    				</ul>
  				</div>

			</div>
			<div style="width:10%;height:40px;float:right;line-height: 40px;text-align:right;">
				<a href="<?php echo U('Index/gglist');?>">
				<i class="bi bi-list-ul fcc" style="font-size:22px;"></i>
				</a>
			</div>
		</div>
	</div>	

	<!--重点币行情区-->
	<div class="zixunlist">
        <div class="zixunconten" style="padding:10px;">
            <div class="tjcoinbox1">
				<span style="font-size:14px;color:#000000;"  id="btc_coin_box">BTC/USDT</span>
            </div>
            <div class="tjcoinbox2" id="btc_money_box">
				<span style="font-size:16px;color:#2ebd85;font-weight: 500;">46766.55</span>
            </div>
            <div class="tjcoinbox3" id="btc_change_box">
				<span style="font-size:14px;color:#2ebd85;font-weight: 500;">+2.16%</span>
            </div>
        </div>
        <div class="zixunconten" style="padding:10px;">
            <div class="tjcoinbox1">
				<span style="font-size:14px;color:#000000;"  id="bch_coin_box">BCH/USDT</span>
            </div>
            <div class="tjcoinbox2" id="bch_money_box">
				<span style="font-size:16px;color:#2ebd85;font-weight: 500;">174.77</span>
            </div>
            <div class="tjcoinbox3" id="bch_change_box">
				<span style="font-size:14px;color:#2ebd85;font-weight: 500;">+2.33%</span>
            </div>
        </div>
        <div class="zixunconten" style="padding:10px;">
            <div class="tjcoinbox1">
				<span style="font-size:14px;font-weight:500;color:#000000;"  id="eth_coin_box">ETH/USDT</span>
            </div>
            <div class="tjcoinbox2" id="eth_money_box">
				<span style="font-size:16px;font-weight:500;color:#2ebd85;">3204.28</span>
            </div>
            <div class="tjcoinbox3" id="eth_change_box">
				<span style="font-size:14px;color:#2ebd85;font-weight: 500;">+4.47%</span>
            </div>
        </div>
    </div>
	
	<!--单选项区-->	
	<div style="width:100%;padding:2px 10px 2px 10px;">
		<!--<div style="width:20%;height:60px;float:left;">-->
		<!--	<svg class="icon hyicon" aria-hidden="true"><use xlink:href="#icon-ziyuan1"></use></svg>-->
		<!--</div>-->
		<!--<div style="width:65%;height:60px;float:left;">-->
		<!--	<div style="width:100%;height:30px;line-height:40px;">-->
		<!--		<span class="fcc fzmmm"><?php echo L('秒合约');?></span>-->
		<!--	</div>-->
		<!--	<div style="width:100%;height:20px;line-height:20px;">-->
		<!--		<span class="fcc fzm"><?php echo L('支持多币种、多时间类型');?></span>-->
		<!--	</div>-->
		<!--</div>-->
		<!--<a href="<?php echo U('Contract/index');?>">-->
<!--		<a href="https://buy.ramp.network">-->
<!--		    <img src="/Public/Static/img/fast_contract.png"  style="width:100%;padding:2px 10px 2px 10px;">-->
<!--		    <img src="/Public/Static/img/index-1.jpg"  style="width:100%;padding:2px 10px 2px 10px;">-->
		<!--<div style="width:15%;height:60px;line-height:60px;float:left;text-align:center;">-->
		<!--	<i class="bi bi-arrow-right ricon"></i>-->
		<!--</div>-->
<!--		</a>-->
	</div>	
	
    <!--OPTION选项-->
	<div class="optionbox" style="margin-top:0px;">
		<div style="width:100%;height:80px;">

            <a href="<?php echo U('User/czcoin');?>">
			<div class="oplist">
				<div class="opimg" style="line-height:50px;">
					<img src="/Public/Static/Icoinfont/icon/icon-1.png" style="width: 35px;" >
				</div>
				<div class="optext">
					<span class="fzmm fcc" style="font-size: 12px;"><?php echo L('充币');?></span>
				</div>
			</div>
			</a>
			
			<a href="<?php echo U('User/txcoin');?>">
			<div class="oplist">
				<div class="opimg" style="line-height:50px;">
					<img src="/Public/Static/Icoinfont/icon/icon-2.png" style="width: 35px;" >
				</div>
				<div class="optext">
					<span class="fzmm fcc" style="font-size: 12px;"><?php echo L('提币');?></span>
				</div>
			</div>
			</a>
			
		    <a href="<?php echo U('Issue/index');?>">
			<div class="oplist">
				<div class="opimg" style="line-height:50px;">
					<img src="/Public/Static/Icoinfont/icon/icon-3.png" style="width: 35px;" >
				</div>
				<div class="optext">
					<span class="fzmm fcc" style="font-size: 12px;"><?php echo L('认购');?></span>
				</div>
			</div>
			</a>
			
			<a href="<?php echo U('Orepool/index');?>">
			<div class="oplist">
				<div class="opimg" style="line-height:50px;">
					<img src="/Public/Static/Icoinfont/icon/icon-4.png" style="width: 35px;" >
				</div>
				<div class="optext">
					<span class="fzmm fcc" style="font-size: 12px;"><?php echo L('智能挖矿');?></span>
				</div>
			</div>
			</a>
			
            <a href="<?php echo ($clist["kefu"]); ?>">
			<div class="oplist">
				<div class="opimg" style="line-height:50px;">
					<img src="/Public/Static/Icoinfont/icon/icon-5.png" style="width: 35px;" >
				</div>
				<div class="optext">
					<span class="fzmm fcc " style="font-size: 12px;"><?php echo L('客服');?></span>
				</div>
			</div>
			</a>

		</div>
	</div>

    <!--单选项区-->	
	<!--<div style="width:100%;height:80px;padding:10px;">-->
	<!--	<div style="width:20%;height:60px;float:left;">-->
	<!--		<svg class="icon hyicon" aria-hidden="true"><use xlink:href="#icon-ziyuan14"></use></svg>-->
	<!--	</div>-->
	<!--	<div style="width:50%;height:60px;float:left;">-->
	<!--		<div style="width:100%;height:30px;line-height:40px;">-->
	<!--			<span class="fcc fzmmm"><?php echo L('智能挖矿');?></span>-->
	<!--		</div>-->
	<!--		<div style="width:100%;height:20px;line-height:20px;">-->
	<!--			<span class="fcc fzm"><?php echo L('矿机出租、共享矿机');?></span>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--	<a href="/Trade/trans?sytx=BTC/USDT">-->
	<!--	<div style="width:30%;height:60px;line-height:60px;float:left;text-align:center;">-->
	<!--		<span style="background: #FCD535;padding: 10px;border-radius: 5px;"><?php echo L('立即参与');?></span>-->
	<!--	</div>-->
	<!--	</a>-->
	<!--</div>-->

	<!--市场行情-->
	<div style="width:100%;background:#fff;padding:10px;border-top: 5px solid #f5f5f5;">

		<div style="width:100%;height:30px;" align="center">
			<div style="width:40%;height:30px;line-height:30px;float:left;text-align:center;">
				<span  class="fzm fcc" style="margin-left: -30px;"><?php echo L('交易对');?></span>
			</div>
			<div style="width:30%;height:30px;line-height:30px;float:left;text-align:center;">
				<span  class="fzm fcc" ><?php echo L('最新价格');?></span>
			</div>
			<div style="width:30%;height:30px;line-height:30px;float:left;text-align:right;">
				<span  class="fzm fcc" >24h<?php echo L('涨跌幅');?></span>
			</div>
		</div>

		<div style="width:100%;" id="tradebox">
		    <?php if(is_array($market)): foreach($market as $key=>$vo): ?><div style="width:100%;height:50px;">
                <div class="list_cname">
					<img src="<?php echo ($vo["logo"]); ?>" style="width: 20px; margin: 0px 10px 0px 0px;">
                    <span  class="fzmmm fcc cn_<?php echo ($vo["coinname"]); ?>"><?php echo strtoupper($vo['coinname']);?>/USDT</span>
                </div>
                <div class="list_open cpr_<?php echo ($vo["coinname"]); ?>">
                    <span  class='fzmmm fcc'>--.--</span></div>
                <div class="list_change cch_<?php echo ($vo["coinname"]); ?>">
                    <span  class='fzmm bgfcc' style='color:#fff;border-radius: 2px;width:70px;height:35px;line-height:35px;text-align:center;display:inline-block;'>0%</span>
                </div>
            </div><?php endforeach; endif; ?>
		    
		</div>

	</div>
	
	<div class="dongbox" id="dongbox" >
        <div class="dong_order_c">
            <div class="dong_order_x" id="x_dongbox">
	            <i class="bi bi-x" style="font-size:18px;" ></i>
	        </div>
	        <div class="dong_order_title">
	            <span class="fch" style="font-size:16px;font-weight:500;"><?php echo L('公告中心');?></span>
	        </div>

			<img src="/Public/Static/img/index-2.png" style="width: 100%;">

        </div>
    </div>
	
	<div style="width:100%;height:100px;"></div>
	<!--底部-->
	<div class="footer">

		<a href="<?php echo U('Index/index');?>">
			<div class="footer_op">
				<div class="f_op_t" style="line-height: 35px;" >
					<?php
 if($select == 'index') { echo '<img src="/Public/Static/Icoinfont/icon/nav-1-active.png" style="width: 25px;" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-1.png" style="width: 25px;" >'; } ?>
				</div>
				<div class="f_op_b">
					<span class="fzm fcy"><?php echo L('首页');?></span>
				</div>
			</div>
		</a>

		<a href="<?php echo U('Trade/index');?>">
			<div class="footer_op">
				<div class="f_op_t" style="line-height:35px;">
					<?php
 if($select == 'trade') { echo '<img src="/Public/Static/Icoinfont/icon/nav-2-active.png" style="width: 25px;" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-2.png" style="width: 25px;" >'; } ?>
				</div>
				<div class="f_op_b">
					<span class="fzm fcch"><?php echo L('行情');?></span>
				</div>
			</div>
		</a>

		<a href="/Trade/trans?sytx=BTC/USDT">
			<div class="footer_op">
				<div class="f_op_t" style="line-height:35px;">
					<?php
 if($select == 'trans') { echo '<img src="/Public/Static/Icoinfont/icon/nav-3-active.png" style="width: 25px;" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-3.png" style="width: 25px;" >'; } ?>
				</div>
				<div class="f_op_b">
					<span class="fzm fcch"><?php echo L('交易');?></span>
				</div>
			</div>
		</a>

		<a href="<?php echo U('Contract/index');?>">
			<div class="footer_op">
				<div class="f_op_t" style="line-height:35px;">
					<?php
 if($select == 'contract') { echo '<img src="/Public/Static/Icoinfont/icon/nav-4-active.png" style="width: 25px;" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-4.png" style="width: 25px;" >'; } ?>
				</div>
				<div class="f_op_b">
					<span class="fzm fcch"><?php echo L('合约');?></span>
				</div>
			</div>
		</a>

		<a href="<?php echo U('User/index');?>">
			<div class="footer_op">
				<div class="f_op_t" style="line-height:35px;">
					<?php
 if($select == 'user') { echo '<img src="/Public/Static/Icoinfont/icon/nav-5-active.png" style="width: 25px;" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-5.png" style="width: 25px;" >'; } ?>
				</div>
				<div class="f_op_b">
					<span class="fzm fcch"><?php echo L('资产');?></span>
				</div>
			</div>
		</a>


	</div>


</body>

<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<!--<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>-->
<script type="text/javascript">
    $("#x_dongbox").click(function(){
        $("#dongbox").hide();
    });
    function obtain_btc(){
        var coin = "btc";
        var nameclass = ".cn_btc";
        var priceclass = ".cpr_btc";
        var changeclass = ".cch_btc";
        $.post("<?php echo U('Ajaxtrade/obtain_btc');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_eth(){
        var coin = "eth";
        var nameclass = ".cn_eth";
        var priceclass = ".cpr_eth";
        var changeclass = ".cch_eth";
        $.post("<?php echo U('Ajaxtrade/obtain_eth');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>

<script type="text/javascript">
    function obtain_eos(){
        var coin = "eos";
        var nameclass = ".cn_eos";
        var priceclass = ".cpr_eos";
        var changeclass = ".cch_eos";
        $.post("<?php echo U('Ajaxtrade/obtain_eos');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>

<script type="text/javascript">
    function obtain_doge(){
        var coin = "doge";
        var nameclass = ".cn_doge";
        var priceclass = ".cpr_doge";
        var changeclass = ".cch_doge";
        $.post("<?php echo U('Ajaxtrade/obtain_doge');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_bch(){
        var coin = "bch";
        var nameclass = ".cn_bch";
        var priceclass = ".cpr_bch";
        var changeclass = ".cch_bch";
        $.post("<?php echo U('Ajaxtrade/obtain_bch');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_ltc(){
        var coin = "ltc";
        var nameclass = ".cn_ltc";
        var priceclass = ".cpr_ltc";
        var changeclass = ".cch_ltc";
        $.post("<?php echo U('Ajaxtrade/obtain_ltc');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_iota(){
        var coin = "iota";
        var nameclass = ".cn_iota";
        var priceclass = ".cpr_iota";
        var changeclass = ".cch_iota";
        $.post("<?php echo U('Ajaxtrade/obtain_iota');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_fil(){
        var coin = "fil";
        var nameclass = ".cn_fil";
        var priceclass = ".cpr_fil";
        var changeclass = ".cch_fil";
        $.post("<?php echo U('Ajaxtrade/obtain_fil');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_flow(){
        var coin = "flow";
        var nameclass = ".cn_flow";
        var priceclass = ".cpr_flow";
        var changeclass = ".cch_flow";
        $.post("<?php echo U('Ajaxtrade/obtain_flow');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_jst(){
        var coin = "jst";
        var nameclass = ".cn_jst";
        var priceclass = ".cpr_jst";
        var changeclass = ".cch_jst";
        $.post("<?php echo U('Ajaxtrade/obtain_jst');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_itc(){
        var coin = "itc";
        var nameclass = ".cn_itc";
        var priceclass = ".cpr_itc";
        var changeclass = ".cch_itc";
        $.post("<?php echo U('Ajaxtrade/obtain_itc');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_ht(){
        var coin = "ht";
        var nameclass = ".cn_ht";
        var priceclass = ".cpr_ht";
        var changeclass = ".cch_ht";
        $.post("<?php echo U('Ajaxtrade/obtain_ht');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>

<script type="text/javascript">
    function obtain_hm(){
        var coin = "usdz";
        var nameclass = ".cn_hm";
        var priceclass = ".cpr_hm";
        var changeclass = ".cch_hm";
        $.post("<?php echo U('Ajaxtrade/obtain_usdz');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html("HM/USDT");
                $(priceclass).html(data.open);
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
      		var uid = '<?php echo ($uid); ?>';
//       		if(!uid) {
// 				$("#dongbox").show();
// 				setCookie('_is_index', '', 1)
// 			}else {
// 				var is_index = getCookie('_is_index');
// 				console.log(is_index);
// 				if(!is_index) {
// 					setCookie('_is_index', true, 1)
// 					$("#dongbox").show();
// 				}
// 			}

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

          obtain_hm();
          setInterval("obtain_hm()",25000);
          //getallsymbol();
          //setInterval("getallsymbol()",5000); 
          getonemarket();
          setInterval("getonemarket()",2000); 
          

      });


	  function setCookie(cname,cvalue,exdays)
	  {
		  var d = new Date();
		  d.setTime(d.getTime()+(exdays*24*60*60*1000));
		  var expires = "expires="+d.toGMTString();
		  document.cookie = cname + "=" + cvalue + "; " + expires;
	  }

	  function getCookie(cname)
	  {
		  var name = cname + "=";
		  var ca = document.cookie.split(';');
		  for(var i=0; i<ca.length; i++)
		  {
			  var c = ca[i].trim();
			  if (c.indexOf(name)==0) return c.substring(name.length,c.length);
		  }
		  return "";
	  }


</script>
<script type="text/javascript">
    function getonemarket(){
        $.post("<?php echo U('Ajaxtrade/get_market_one');?>",
        function(data){
            if(data.code == 1){
                $("#btc_coin_box").html(data.btccoin);
                $("#btc_money_box").html(data.btcnewprice);
                $("#btc_change_box").html(data.btcchange);
                
                $("#eth_coin_box").html(data.ethcoin);
                $("#eth_money_box").html(data.ethnewprice);
                $("#eth_change_box").html(data.ethchange);
                
                $("#bch_coin_box").html(data.bchcoin);
                $("#bch_money_box").html(data.bchnewprice);
                $("#bch_change_box").html(data.bchchange);
            }
        });
    }
</script>
<!--<script type="text/javascript">
    function getallsymbol(){
        $.post("<?php echo U('Ajaxtrade/getallsymbol');?>",
        function(data){
            if(data.code == 1){
                $("#tradebox").empty();
                var html = '';
                if(data.data == '' || data.data == null){
                    html = '<div style="width:100%;height:100px;line-height:100px;text-align:center;">'+ 
                           '<span class="fzmm fcc">' + "<?php echo L('没有获取数据');?>" + '</span>'+
                           '</div>';
                    $("#tradebox").append(html);
                    
                }else{
                    $.each(data.data,function(key,val){
                        html += '<div style="width:100%;height:50px;">'+
                                '<div class="list_cname">'+
                                '<span  class="fzmmm fcc">'+ val.cname +'</span>'+
                                '</div>'+
                                '<div class="list_open">' + val.open + '</div>'+
                                '<div class="list_change">' + val.change +'</div>'+
                                '</div>';
                    });
                    $("#tradebox").append(html);
                }
            }else{
                html =  '<div style="width:100%;height:100px;line-height:100px;text-align:center;">'+ 
                        '<span class="fzmm fcc">' + "<?php echo L('没有获取数据');?>" + '</span>'+
                        '</div>';
                $("#tradebox").append(html);
            }
        });
    }
</script>-->

<script type="text/javascript">
	function AutoScroll(obj) {
		$(obj).find("ul:first").animate({
			marginTop: "-25px"
		}, 500, function() {
			$(this).css({
				marginTop: "0px"
				}).find("li:first").appendTo(this);
		});
	}
	$(document).ready(function() {
		setInterval('AutoScroll("#s1")', 3000);
	});
</script>
</html>