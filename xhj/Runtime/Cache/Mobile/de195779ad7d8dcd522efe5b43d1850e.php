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
	    .no_header{position: fixed;z-index: 9999;padding:0px 10px;top:0px;line-height: 50px;background:#f5f5f5;}
	    .contentbox{width:100%;height:600px;margin-top:45px;padding:5px 15px;}
	    .contentbox_top{width:100%;height:50px;line-height:50px;text-align:left;}
	    .contentbox_line{width:100%;height:50px;background:#fff;border-radius:10px;padding:0px 10px;}
	    .line_1{width:20%;height:50px;line-height:50px;float:left;}
	    .line_2{width:70%;height:50px;line-height:50px;float:right;text-align:right;}
	    .imgbox{width:100%;padding:10px;background:#fff;margin-top:15px;border-radius:10px;}
	    .imgbox_1{width:100%;height:40px;line-height:40px;text-align:left;}
	    .imgbox_2{width:100%;height:35px;line-height:35px;text-align:left;}
	    .imgbox_3{width:100px;height:35px;line-height:35px;text-align:center;border:1px solid #FCD535;border-radius:5px;}
	    .imgbox_4{width:100%;height:280px;margin-top:15px;border-top:1px solid #f5f5f5;padding:5px 0px;}
	    .imgbox_5{width:100%;height:40px;line-height:40px;text-align:left;}
	    .imgbox_6{width:100%;height:120px;margin-top:10px;text-align:center;}
	    .imgbox_7{width:100%;height:30px;line-height:30px;text-align:center;margin-top:10px;}
	    .imgbox_8{width:100%;height:30px;line-height:30px;text-align:center;}
	    .imgbox_9{width:100px;height:30px;line-height:30px;text-align:center;border-radius:5px;border:1px solid #FCD535;margin:auto;}
	    .imgbox_10{width:100%;height:40px;line-height:40px;text-align:center;border-radius:5px;margin:auto;background: #0052fe;color: #fff;}
	    .textbox{width:100%;background:#fff;margin-top:10px;border-radius:10px;padding:15px;}
	    
	    .zz_inputbox{width:100%;height:40px;line-height:40px;background:#f5f5f5;border-radius:10px;padding:0px 15px;}
	    .zz_input{height:30px;line-height:30px;margin-top:5px;border:#f5f5f5;background:#f5f5f5;}
	    .layui-upload-file{display: none!important;opacity: .01;}
	</style>
</head>
<body>
	<div class="container-fluid " style="padding:0px;width:100vw;">
        <div class="no_header">
			<div class="fl allhg txtl">
				<i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 24px;"></i>
			</div>
			
			<a href="<?php echo U('User/czlist');?>">
			<div class="fr allhg txtr" style="line-height:50px;width:10%;">
				<i class="bi bi-funnel fcy fw" style="font-size:20px;"></i>
			</div>
			</a>
		</div>
		<div class="contentbox">
		    <div class="contentbox_top">
		        <span style="font-size:26px;font-weight:500;"><?php echo L('充币');?></span>
		    </div>
		    <div class="contentbox_line">
		        <div class="line_1">
		            <span class="fzmmm fch"><?php echo L('币种');?></span>
		        </div>
		        <a href="<?php echo U('User/czcoin');?>">
		        <div class="line_2">
		            <span class="fzmmm fcy" style="font-size:18px;font-weight:bold;"><?php echo strtoupper($info['name']);?></span>
		            <span class="fzmmm fch">&nbsp;&nbsp;<?php echo L($info['title']);?></span>
		            <i class="bi bi-chevron-right fzmmm fcc"></i>
		        </div>
		        </a>
		    </div>
		    <div class="imgbox">
		        <div class="imgbox_1">
		            <span class="fzmmm fch"><?php echo L('充币网络');?></span>
		        </div>
		        <div class="imgbox_2">
		            <div class="imgbox_3">
		                <span class="fzmm fcy"><?php echo ($info["czline"]); ?></span>
		            </div>
		        </div>
		        <div class="imgbox_4">
		            <div class="imgbox_5">
		                <span class="fzmmm fch"><?php echo L('充币地址');?></span>
		            </div>
		            <div class="imgbox_6">
		                <img src="/Public/Static/coinimgs/<?php echo ($address); ?>.png" style="height:120px;" />
		            </div>
		            <div class="imgbox_7">
		                <input type="hidden" id="czaddress" value="<?php echo ($info["czaddress"]); ?>" />
		                <span class="fzmm fch"><?php echo ($info["czaddress"]); ?></span>
		            </div>
		            <div class="imgbox_8">
		                <div class="imgbox_9" onclick="copyUrl()" style="margin: 15px auto;">
		                    <span class="fzmm fcy"><?php echo L('复制地址');?></span>
		                </div>
		            </div>
		        </div>
		    </div>
		    
		    <div class="textbox">
		        <p class="fzm" style="color:red;"><?php echo L('最小充值金额');?>：<?php echo strtoupper($info['czminnum']); echo strtoupper($info['name']);?>，<?php echo L('小于最小金额的充值将不会上账且无法退回');?></p>
		        <p class="fzm fch"><?php echo L('请选择正确的充值通道网络，否则资产将不可找回');?></p>
		        <p class="fzm fch"><?php echo L('最小充值金额');?>：<?php echo strtoupper($info['czminnum']); echo strtoupper($info['name']);?>，<?php echo L('小于最小金额的充值将不会上账且无法退回');?></p>
		        <p class="fzm fch"><?php echo L('您的充值地址不会经常改变，可以重复充值；如有更改，我们会尽量通过网站公告或邮件通知您');?></p>
		        <p class="fzm fch"><?php echo L('请务必确认电脑及浏览器安全，防止信息被篡改或泄露');?></p>
		    </div>
		    
		    <div class="imgbox">
		        <div class="imgbox_4"  style="border:none;margin:0px;height:310px;">
		            <div class="imgbox_5">
		                <span class="fzmmm fch"><?php echo L('转账金额');?></span>
		            </div>
		            <div class="zz_inputbox">
		                <input type="text" id="zznum" class="zz_input"  placeholder="<?php echo L('请输入转账金额');?>" />
		            </div>
		            
		            <div class="imgbox_5">
		                <span class="fzmmm fch"><?php echo L('上传转账凭证');?></span>
		            </div>
		            
		            <div class="imgbox_6">
		                <img src="/Public/Static/img/upimg.png" id="test1" style="height:100px;" />
		                
		                <input type="hidden" id="payimg" value="" />
		                <input type="hidden" id="coinname" value="<?php echo ($info["name"]); ?>" />
		                <input type="hidden" id="cid" value="<?php echo ($info["id"]); ?>" />
		            </div>
		            <input type="hidden" id="flag" value="1" />
		            <div class="imgbox_8">
		                <div class="imgbox_10" id="sumbtn">
		                    <span class="fzmm fch"><?php echo L('提交');?></span>
		                </div>
		            </div>
		            
		        </div>
		    </div>

		    <div style="width:100%;height:80px;"></div>
   
		</div>

	</div>	
</body>
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript" src="/Public/layui/layui.js"></script>
<script type="text/javascript">
    $("#sumbtn").click(function(){
        var flag = $("#flag").val();
        if(flag == 2){
            return false;
        }
        var zznum = $("#zznum").val();
        var payimg = $("#payimg").val();
        var coinname = $("#coinname").val();
        var cid = $("#cid").val();
        if(cid <= 0){
            layer.msg("<?php echo L('缺少重要参数');?>");return false;
        }
        if(zznum <= 0){
            layer.msg("<?php echo L('请输入转账额度');?>");return false;
        }
        if(payimg == ''){
            layer.msg("<?php echo L('请上传转账凭证');?>");return false;
        }
        $("#flag").val(2)
        $.post("<?php echo U('User/paycoin');?>",
        {'cid' : cid,'zznum':zznum,'payimg':payimg,'coinname':coinname},
        function(data){
            if(data.code == 1){
                layer.msg(data.info);
                setTimeout(function(args){
                    window.location.reload();
                },2000);
            }else{
                layer.msg(data.info);return false;
            }
        }
        );
        
    });
</script>
<script type="text/javascript">
    function copyUrl(){
        var qrcode_url=$("#czaddress").val();
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
      layui.use('upload', function(){
        var upload = layui.upload;
        var uploadInst = upload.render({
            elem: '#test1' //绑定元素
            ,url: '<?php echo U("User/recharge_img");?>' //上传接口
            ,done: function(res){
                console.log(res);
                if(res.code == 0){
                    $('#payimg').val(res.data.img);
                    $("#test1").attr('src',res.data.src);
                }
            }
            ,error: function(){
                layer.msg("<?php echo L('上传失败');?>");
            }
        });
    });
</script>

<script type="text/javascript">
    function goback(){
        window.history.go(-1);
    }
</script>
</html>