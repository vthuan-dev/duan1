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
	.klinebox{width:100%;height:550px;margin-top:55px;}
	.klinetitle{width:100%;height:80px;background:#fff;padding:0px 20px;box-shadow: 0 2px 10px 0 rgb(0 0 0 / 5%);}
	.klinetitle_l{width:45%;height:80px;float:left;}
	.klinetitle_r{width:55%;height:80px;float:left;}
	.newpricebox{height:40px;line-height:60px;margin-bottom:0px;color:#2ebd85;font-size:22px;font-weight:bold;}
	.changebox{height:40px;line-height:40px;margin-bottom:0px;color:#2ebd85;font-weight:bold;}
	.klr3_box{width:100%;height:30px;}
	.klr2_box{width:100%;height:25px;}
	.klr3_box_dl{width:45%;height:30px;line-height:40px;float:left;text-align:left;}
	.klr3_box_dr{width:55%;height:30px;line-height:40px;float:right;text-align:right;}
	.klr2_box_dl{width:45%;height:25px;line-height:25px;float:left;text-align:left;}
	.klr2_box_dr{width:55%;height:25px;line-height:25px;float:right;text-align:right;}
	.dongbox{position:fixed;z-index:9999;display:none;top:0px;width:100%;height:100vh;background:rgba(0,0,0,0.2);}
	.dong_con{width:80%;height:86vh;background:#fff;margin-top:20px;border-top-right-radius:20px;border-bottom-right-radius:20px;padding:20px 15px 10px 20px;float:left;}
	.dong_title{width:100%;height:40px;line-height:40px;}
	.dong_title_span{font-size:18px;font-weight:500;}
	.dong_find_box{width:100%;height:30px;background:#f5f5f5;border-radius:10px;}
	.dong_find_box_img{width:20%;height:30px;line-height:30px;float:left;text-align:center;}
	.dong_input_box{width:80%;height:30px;float:left;}
	.dong_symbox{width:90%;height:20px;border:none;background:#f5f5f5;margin-top:5px;}
	.dong_sel_box{width:100%;height:30px;border-bottom:1px solid #f5f5f5;}
	.dong_sel_span{display:block;width:35px;height:30px;line-height:30px;border-bottom:2px solid #FCD535;font-size:14px;text-align:center;font-size:14px;}
	.symbol_list{width:100%;height:450px;overflow-y: scroll;margin-top:10px;}
	.sy_list_box{width:100%;height:30px;}
	.sy_list_boxl{width:35%;height:30px;line-height:30px;float:left;text-align:left;}
	.sy_list_boxr{width:30%;height:30px;line-height:30px;float:right;text-align:right;}
	.btnbox{width:100%;height:60px;padding:10px 20px;}
	.btnbox_l{width:45%;height:40px;line-height:40px;float:left;text-align:center;border-radius:10px;background:#0ecb81;}
	.btnbox_r{width:45%;height:40px;line-height:40px;float:right;text-align:center;border-radius:10px;background:#f5465c;}
	.dong_order_c{width:90%;height:540px;background:#fff;margin:60px auto;border-radius:10px;padding:10px;}
	.dong_order_x{width:100%;height:20px;line-height:20px;text-align:right;}
	.dong_order_title{width:100%;height:30px;line-height:20px;text-align:center;border-bottom: 1px solid #f5f5f5;}
	.dong_order_option{width:100%;height:80px;;overflow: hidden;overflow-x: scroll;margin-top:5px;}
	.dong_order_option_list{width:100px;height:80px;background:#f5f5f5;float:left;margin-right:10px;border-radius:10px;padding:5px;}
	.option_list_active{border:1px solid #FCD535;}
	.dong_order_p{width:100%;margin-bottom: 0rem;margin-top:10px;padding-left:5px;}
	.dong_money_list{width:100%;height:40px;}
	.dong_money_list_box{width:70%;height:40px;float:left;overflow: hidden;overflow-x: scroll;}
	.dong_money_list_box_l{width:1000px;height:40px;}
	.dong_money_list_box_option{width:70px;height:40px;line-height:40px;background:#f5f5f5;float:left;margin-right:5px;border-radius:5px;text-align:center;}
	.green{color:#0ecb81;}
    .red{color:#f5465c;}
    .circle_box{position: relative;left: 0;right: 0;top: 5px;bottom: 120px;margin: auto;width: 110px;height: 127px;box-sizing: content-box;}
    /*倒计时圆形进度条*/
    .circle_wrapper {
        position: relative;
        left: 0;
        right: 0;
        top: 5px;
        bottom: 120px;
        margin: auto;
        width: 110px;
        height: 127px;
        box-sizing: content-box;
    }
    
    .right_circle,.left_circle {
        position: absolute;
        width: 110px;
        height: 110px;
        overflow: hidden;
        top: 8px;
    }
    .right_circle {
        right: -50%;
    }
    .left_circle {
        left: -50%;
    }
    .right_circle > img {
        width: 100%;
        position: absolute;
        right: 50%;
        -webkit-animation: run 5s linear;
        animation-fill-mode: forwards;
    
    }
    @-webkit-keyframes run{
        0{
            transform: rotate(0);
        }
        50%{
            transform: rotate(180deg);
        }
        100% {
            transform: rotate(180deg);
        }
    }
    .left_circle > img {
        width: 100%;
        position: absolute;
        left: 50%;
        -webkit-animation: runaway 5s linear;
        animation-fill-mode: forwards;
    }
    @-webkit-keyframes runaway{
        0{
            transform: rotate(0);
        }
        50%{
            transform: rotate(0);
        }
        100% {
            transform: rotate(180deg);
        }
    }
    
    .count_remaining {
        margin-top: -128px !important;
    }
    .remaining {
        position: relative;
        height: 138px;
    }
    .row {
        padding-top: 10px !important;
    }
    .remaining > .col {
        color: red;
        font-size: 40px;
        text-align: center;
        height: 105px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }
    .remaining > div >div:nth-of-type(1) {
        font-size: 40px;
        color: #fdbe19;
        text-align: center;
        margin-top: 10px;
    }
    .remaining > div >div:nth-of-type(2) {
        font-size: 12px;
        color: #6d6d6d;
        text-align: center;
    }
    .remaining > div >div:nth-of-type(3) {
        font-size: 14px;
        color: #fa2e42;
        text-align: center;
    }

    
	</style>
  </head>
  <body style="background:#fff;">
	<div class="container-fluid " style="padding:0px;width:100vw;">
		<div class="no_header">
			<div class="fl allhg txtl">
				<i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 24px;"></i>
			</div>
			<div class="fl allhg" id="centerbox" style="width:80%;text-align:center;line-height:50px;">
				<i class="bi bi-text-indent-left fw" style="font-size:22px;color:#000;"></i>
				<span class="fzmmm fw"  style="color:#000;" id="symbolbox"><?php echo ($upmarket); ?></span>
				<span class="fzmmm fw"  style="color:#000;"><?php echo L('秒合约');?></span>
			</div>
            
            <a href="<?php echo U('Contract/ctbill');?>">
			<div class="fr allhg txtr" style="line-height:50px;width:10%;">
				<i class="bi bi-funnel fcy fw" style="font-size:20px;"></i>
			</div>
			</a>
			
		</div>

		<div class="klinebox">
		    
			<div class="klinetitle">
				<div class="klinetitle_l">
				    <p class="newpricebox" id="newpricebox" style="font-size:24px;">--</p>
				    <p class="changebox"  id="changebox">--</p>
				</div>
				<div class="klinetitle_r">
				    <div class="klr3_box">
				        <div class="klr3_box_dl">
				            <span class="fzmm fcc"><?php echo L('最低');?></span>
				        </div>
				        <div class="klr3_box_dr">
				            <span class="fzmm fch" id="minmoney">--</span>
				        </div>
				    </div>
				    <div class="klr2_box">
				        <div class="klr2_box_dl">
				            <span class="fzmm fcc"><?php echo L('最高');?></span>
				        </div>
				        <div class="klr2_box_dr">
				            <span class="fzmm fch" id="maxmoney">--</span>
				        </div>
				    </div>
				    <div class="klr2_box">
				        <div class="klr2_box_dl">
				            <span class="fzmm fcc">24h<?php echo L('量');?></span>
				        </div>
				        <div class="klr2_box_dr">
				            <span class="fzmm fch" id="allvol">--</span>
				        </div>
				    </div>
				    
				</div>
			</div>
			<input type="hidden" id="coinname" value="<?php echo ($smybol); ?>" />
			<div style="width:100%;height:540px;">
			    <iframe id="iframeid" width="100%" scrolling="no" height="540" src="/Trade/ordinary?market=<?php echo ($market); ?>"  noresize="noresize" frameborder="0" >不支持IFRAME，请升级</iframe>
			</div>
			
			<div style="width:100%;height:20px;"></div>
			<div class="btnbox">
			    <div class="btnbox_l" onclick="show_dongbox(1)">
			        <span class="fzmm fch" style="color:#fff;"><?php echo L('买涨');?></span>
			    </div>
			    <div class="btnbox_r" onclick="show_dongbox(2)">
			        <span class="fzmm fch" style="color:#fff;"><?php echo L('买跌');?></span>
			    </div>
			</div>
			
			<div style="width:100%;height:80px;"></div>
			
		</div>

	</div>	
	
	
	<div class="dongbox" id="dongbox" style="display:block;">
	    
	    
	    
	    <div class="dong_order_c" id="timer_box" style="display:none;height:340px;margin-top:140px;">
	        <div style="width:100%;height:10px;"></div>
	        <div class="dong_order_title">
	            <span class="fch" style="font-size:18px;font-weight:bold;" id="timer_coinname">BTC/USDT</span>
	        </div>
            
            <div style="width:100%;height:270px;display:none" id="wait_box">
                <div style="width:100%;height:220px;line-height:220px;text-align:center;" id="wait_box_info">
                    <span style="font-size:16px;font-weight:bold;"><?php echo L('正在结算中');?>...</span>
                </div>
                <div onclick="show_confirm_empty(1)" style="width: 100%;height: 45px;line-height: 45px;text-align: center;background: #0052fe;color: #fff;border-radius: 10px;cursor: pointer;">
                    <span style="color:#fff;"><?php echo L('继续下单');?></span>
                </div>
            </div>
            
            
            <div style="width:100%;" id="timer_info_box">
	            <div class="circle_wrapper">
	                <div class="right_circle">
                        <img class="img_circle_right" id="timer_circle_right" style="-webkit-animation: run 300s linear;" src="/Public/Static/img/right_circle1.png">
                    </div>
                    <div class="left_circle">
                        <img class="img_circle_lift" id="timer_circle_left" style="-webkit-animation: runaway 300s linear;" src="/Public/Static/img/left_circle1.png">
                    </div>
	            </div>
	        
	            <div class="row remaining count_remaining">
                    <div class="col">
                        <div class="ng-binding pay_order_sen" id="timer_t">68</div>
                        <div><?php echo L('现价');?></div>
                        <div class="ng-binding newprice" id="timer_newprice">43128.277</div>
                    </div>
                </div>
            
                <div style="width:100%;height:150px;border-top:1px solid #f5f5f5;">
                    <div style="width:100%;height:80px;">
                        <div style="width:33.33%;height:80px;float:left;">
                            <div style="width:100%;height:40px;line-height:50px;text-align:center;"><?php echo L('类型');?></div>
                            <div id="timer_type" style="width:100%;height:40px;line-height:30px;text-align:center;"><span><?php echo L('买涨');?></span></div>
                        </div>
                        <div style="width:33.33%;height:80px;float:left;">
                            <div style="width:100%;height:40px;line-height:50px;text-align:center;"><?php echo L('金额');?></div>
                            <div id="timer_buynum" style="width:100%;height:40px;line-height:30px;text-align:center;font-weight:bold;">1000.00</div>
                        </div>
                        <div style="width:33.33%;height:80px;float:left;">
                            <div style="width:100%;height:40px;line-height:50px;text-align:center;"><?php echo L('建仓');?></div>
                            <div id="timer_buyprice" style="width:100%;height:40px;line-height:30px;text-align:center;font-weight:bold;">43128.277</div>
                        </div>
                    </div> 
                    <input type="hidden" id="timer_order_type" value="1" />
                    <div onclick="show_confirm()" style="width: 100%;height: 45px;line-height: 45px;text-align: center;background: #0052fe;color: #fff;border-radius: 10px;cursor: pointer;">
                        <span style="color:#fff;"><?php echo L('继续下单');?></span>
                    </div>
                </div>
            </div>
            
            
            
	    </div>
	    
	    
	    
	    <!-------------------确认购买订单弹窗开始--------------------->
	    <div class="dong_order_c" id="confirm_box" style="display:block;">
	        <div class="dong_order_x" id="x_dongbox">
	            <i class="bi bi-x" style="font-size:18px;" ></i>
	        </div>
	        <div class="dong_order_title">
	            <span class="fch" style="font-size:16px;font-weight:500;"><?php echo L('确认订单');?></span>
	        </div>
	        
	        <p class="dong_order_p fcc"><?php echo L('订单类型');?></p>
	        <div class="dong_order_option">
	            
	            
	            <div style="width:1000px;height:80px;">
	                <?php if(is_array($cd)): foreach($cd as $key=>$vo): ?><div class="dong_order_option_list" id="time_<?php echo ($vo["sort"]); ?>" onclick="xztime(<?php echo ($vo["sort"]); ?>,<?php echo ($vo["time"]); ?>,<?php echo ($vo["ykbl"]); ?>);">
	                    <div style="width:100%;height:20px;line-height:20px;text-align:center;">
	                        <span class="fcc fzm"><?php echo L('到期时间');?></span>
	                    </div>
	                    <div style="width:100%;height:20px;line-height:20px;text-align:center;margin-top:5px;">
	                        <span class="fcy fzmmm"><?php echo ($vo["time"]); echo L('分钟');?></span>
	                    </div>
	                    <div style="width:100%;height:20px;line-height:20px;text-align:center;margin-top:5px;">
	                        <span class="fcc fzm" style="color:#f5465c;"><?php echo L('收益率'); echo ($vo["ykbl"]); ?>%</span>
	                    </div>
	                </div><?php endforeach; endif; ?>
                </div>

	            
	        </div>
	        
	        <p class="dong_order_p fcc"><?php echo L('选择投资金额');?></p>
	        <div class="dong_money_list">
	            <div class="dong_money_list_box" style="width:100%;">
	                <div class="dong_money_list_box_l">
	                    <?php if(is_array($ed)): foreach($ed as $key=>$v): ?><div class="dong_money_list_box_option moveclass" id="tzed_<?php echo ($v["sort"]); ?>" onclick="xztzed(<?php echo ($v["sort"]); ?>,<?php echo ($v["tzed"]); ?>);">
	                        <span class="fzm fcc"><?php echo ($v["tzed"]); ?> USDT</span>
	                    </div><?php endforeach; endif; ?>
	               </div>
	            </div>
	        </div>
	        
	        <p class="dong_order_p fcc"><?php echo L('自定义金额');?></p>
	        <div class="dong_money_list">
	            <div style="width:100%;height:40px;text-align:center;" id="custommoney">
	                <input type="text" id="tzmoney" onblur="settzmoney();" value="" placeholder="<?php echo L('请输入金额');?>" style="width:98%;margin:auto;height:35px;line-height:35px;background:#f5f5f5;padding-left:15px;border:none;margin-top:2px;" />
	            </div>
	        </div>
	            
	            
	            
	        <p class="dong_order_p fcc"><?php echo L('账户余额');?>：<?php echo ($eusdt_blan); ?> USDT</p>
	        <p class="dong_order_p fcc"><?php echo L('体验金');?>：<?php echo ($tj_money); ?> USDT</p>
            
            <div style="width:100%;height:50px;margin-top:10px;border-top:1px solid #f5f5f5;padding-top:10px;">
                <div style="width:25%;height:50px;float:left;">
                    <div style="width:100%;height:30px;line-height:30px;text-align:center;">
                        <span class="fcc fzmm"><?php echo L('交易对');?></span>
                    </div>
                    <div style="width:100%;height:20px;line-height:20px;text-align:center;">
                        <span class="fcc fzmm"><?php echo ($upmarket); ?></span>
                    </div>
                </div>
                <div style="width:20%;height:50px;float:left;">
                    <div style="width:100%;height:30px;line-height:30px;text-align:center;">
                        <span class="fcc fzmm"><?php echo L('方向');?></span>
                    </div>
                    <div style="width:100%;height:20px;line-height:20px;text-align:center;">
                        <span class="fcc fzmm" id="fxtext"><?php echo L('买涨');?></span>
                    </div>
                </div>
                <div style="width:30%;height:50px;float:left;">
                    <div style="width:100%;height:30px;line-height:30px;text-align:center;">
                        <span class="fcc fzmm"><?php echo L('现价');?></span>
                    </div>
                    <div style="width:100%;height:20px;line-height:20px;text-align:center;">
                        <span class="fcc fzmm" style="color:#f5465c;" id="ordernewprice">--</span>
                    </div>
                </div>
                <div style="width:25%;height:50px;float:left;">
                    <div style="width:100%;height:30px;line-height:30px;text-align:center;">
                        <span class="fcc fzmm"><?php echo L('金额');?></span>
                    </div>
                    <div style="width:100%;height:20px;line-height:20px;text-align:center;">
                        <span class="fcc fzmm"><span id="ttzed">10</span> USDT</span>
                    </div>
                </div>
            </div>
            <input type="hidden" id="ctime" value="" />
            <input type="hidden" id="ctzed" value="" />
            <input type="hidden" id="ccoinname" value="<?php echo ($upmarket); ?>" />
            <input type="hidden" id="ctzfx" value="1" />
            <input type="hidden" id="cykbl" value="" />
            <input type="hidden" id="hymin" value="<?php echo ($hymin); ?>" />
            
            
            <input type="hidden" id="flag" value="1" />
            
            <?php if($uid <= 0): ?><div style="width:100%;height:40px;line-height:40px;text-align:center;margin-top:30px;background: #0052fe;color: #fff;border-radius:10px;">
                <span class="fch fzmm"><?php echo L('请先登陆');?></span>
            </div>    
            <?php else: ?>
            
            <div id="subbtn" style="width:45%;height:40px;line-height:40px;text-align:center;margin-top:30px;background: #0052fe;border-radius:10px;float:left;color: #fff">
                <span class=" fzmm"><?php echo L('确认下单');?></span>
            </div>
            <div id="tyj_subbtn" style="width:45%;height:40px;line-height:40px;text-align:center;margin-top:30px;background: #0052fe;border-radius:10px;float:right;color: #fff">
                <span class=" fzmm"><?php echo L('体验金下单');?></span>
            </div><?php endif; ?>
	    </div>
	    <!-------------------确认购买订单弹窗结束--------------------->
	    
	    
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
	        
	        
	        <div class="symbol_list" id="smybolbox">
	            <div style="width:100%;height:100px;line-height:100px;text-align:center;">
                    <span class="fzmm fcc"><?php echo L('没有获取数据');?></span>
                </div>
	        </div>
	    </div>
	    
	    <div style="width:20%;height:100vh;float:left;" id="hidedong"></div>
	</div>


	<!--底部-->
	<div class="footer">

		<a href="<?php echo U('Index/index');?>">
			<div class="footer_op">
				<div class="f_op_t" style="line-height: 35px;" >
					<?php
 if($select == 'index') { echo '<img src="/Public/Static/Icoinfont/icon/nav-1-active.png" style="width: 25px;" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-1.png" style="width: 25px;" >'; } ?>
				</div>
				<div class="f_op_b">
					<span class="fzm fcch"><?php echo L('首页');?></span>
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
					<span class="fzm fcy"><?php echo L('合约');?></span>
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
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">
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
            layer.msg("<?php echo L('请选择或输入投入金额');?>");return false;
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
        
        $.post("<?php echo U('Contract/ty_creatorder');?>",
        {'ctime':ctime,'ctzed':ctzed,'ccoinname':ccoinname,'ctzfx':ctzfx,'cykbl':cykbl},
        function(data){
            if(data.code == 1){
                $('#timer_circle_right').attr('style','-webkit-animation: run '+ data.time +'s linear;')
                $('#timer_circle_left').attr('style','-webkit-animation: runaway '+ data.time +'s linear;')
                $("#timer_t").text(data.time);
                $("#timer_newprice").text(data.timer_newprice);
                $("#timer_type").html(data.timer_type);
                $("#timer_buynum").html(data.timer_buynum);
                $("#timer_order_type").html(data.hyzd);
                $("#timer_buyprice").html(data.buyprice);
                $("#confirm_box").hide();
                $("#timer_box").show();
                gettimer_time(data.id);
                setInterval('gettimer_time('+ data.id +')',1000);
            }else{
                layer.msg(data.msg);return false;
            }
        });
    });
    function gettimer_time(id){
        var oid = id;

        $.post("<?php echo U('Contract/get_tyhyorder_one');?>",{'oid':oid},function(data){
            if(data.code == 1){
                $("#timer_t").text(data.time);
                $("#timer_newprice").text(data.timer_newprice);
            }else if(data.code == 2){
                $("#wait_box_info").html(data.statusstr)
                $("#wait_box").show();
                $("#timer_info_box").hide();
            }else{
                $("#wait_box").show();
                $("#timer_info_box").hide();
            }
        });
    }
</script>
<script type="text/javascript">
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
            layer.msg("<?php echo L('请选择或输入投入金额');?>");return false;
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
        
        $.post("<?php echo U('Contract/creatorder');?>",
        {'ctime':ctime,'ctzed':ctzed,'ccoinname':ccoinname,'ctzfx':ctzfx,'cykbl':cykbl},
        function(data){
            if(data.code == 1){
                $('#timer_circle_right').attr('style','-webkit-animation: run '+ data.time +'s linear;')
                $('#timer_circle_left').attr('style','-webkit-animation: runaway '+ data.time +'s linear;')
                $("#timer_t").text(data.time);
                $("#timer_newprice").text(data.timer_newprice);
                $("#timer_type").html(data.timer_type);
                $("#timer_buynum").html(data.timer_buynum);
                $("#timer_order_type").html(data.hyzd);
                $("#timer_buyprice").html(data.buyprice);
                $("#confirm_box").hide();
                $("#timer_box").show();
                gettimer_hytime(data.id);
                setInterval('gettimer_hytime('+ data.id +')',1000);
            }else{
                layer.msg(data.msg);return false;
            }
        });
    });
    
    function gettimer_hytime(id){
        var oid = id;
        $.post("<?php echo U('Contract/get_hyorder_one');?>",{'oid':oid},function(data){
            if(data.code == 1){
                $("#timer_t").text(data.time);
                $("#timer_newprice").text(data.timer_newprice);
            }else if(data.code == 2){
                $("#wait_box_info").html(data.statusstr)
                $("#wait_box").show();
                $("#timer_info_box").hide();
            }else{
                $("#wait_box").show();
                $("#timer_info_box").hide();
            }
        });
    }
</script>
<script type="text/javascript">
    function xztime(sort,time,ykbl){
        var sort = sort;
        var time = time;
        var ykbl = ykbl;
        var idtxt = "#time_"+sort;
        $("#ctime").val(time);
        $("#cykbl").val(ykbl);
        $(idtxt).addClass("option_list_active");
        $(idtxt).siblings().removeClass("option_list_active");
    }
    function xztzed(sort,tzed){
        var sort = sort;
        var tzed = tzed;
        var idtxt = "#tzed_"+sort;
        $("#ctzed").val(tzed);
        $("#ttzed").html(tzed);
        $("#tzmoney").val(tzed)
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
                                '<span  class="fzmm fcc">'+ val.cname +'</span>'+
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
    function show_confirm(){
        var num = $("#timer_type").val;
        show_dongbox(num);
    };
    function show_confirm_empty(num){
        var num = num
        show_dongbox(num);
    }

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
        $("#timer_box").hide();
        $("#confirm_box").show();
        $("#dongbox").show();
    }
    $("#x_dongbox").click(function(){
        $("#timer_box").hide();
        $("#confirm_box").hide();
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
    function goback(){
        window.history.go(-1);
    }
</script>
</html>