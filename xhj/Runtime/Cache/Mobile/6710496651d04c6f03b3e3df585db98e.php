<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
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
        .bmbtn{width:100%;height:60px;position:fixed;bottom:0px;padding:10px;}
        .bmbtn_l{width:45%;height:40px;float:left;background:#ebecf0;border-radius:5px;line-height:40px;text-align:center;}
        .bmbtn_r{width:45%;height:40px;float:right;background: #0052fe;color: #fff;border-radius:5px;line-height:40px;text-align:center;}
        .badge-light {
            background-color: #FCD535;
            position: relative;
            left: 15px;
            top: -35px;
        }
        .badge{
            line-height: 0.4;
            border-radius: .5rem;
        }
        .img_msb {
            width: 100%;
        }
        .box_img {
            padding-top: 60px;
        }
    </style>
</head>
<body>
<div class="container-fluid ctbox"  style="padding:0px;width:100vw;">
    <div class="no_header"  style="position: fixed;z-index: 9999;background: #fff;padding:0px 10px;top:0px;">
        <div class="fl allhg txtl" style="line-height:50px;width:10%;">
            <i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 24px;"></i>
        </div>
        <div class="fl allhg" id="centerbox" style="width:80%;text-align:center;line-height:50px;">
            <span class="fcc fzmmm"><?php echo L('MSB认证');?></span>
        </div>

    </div>
    <div class="box_img">
        <img src="/Public/Static/img/1.jpeg" class="img_msb">
        <img src="/Public/Static/img/2.jpeg" class="img_msb">
    </div>

</div>
</body>

<body>
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">
    function alldel(){
        var st = 1;
        $.post("<?php echo U('Index/delall');?>",
            {'st' :st},
            function(data){
                if(data.code = 1){
                    layer.msg(data.info);
                    setTimeout(function(args){
                        window.location.reload();
                    },2000);
                }else{
                    layer.msg(data.info);return false;
                }
            });
    }
    function allread(){
        var st = 1;
        $.post("<?php echo U('Index/readall');?>",
            {'st' :st},
            function(data){
                if(data.code = 1){
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
    $("#showid").click(function(){
        $("#centerbox").show();
        $("#h1title").hide();
        $("#bmbtn").show();
        $("#hideid").show();
        $("#showid").hide();
    });
    $("#hideid").click(function(){
        $("#centerbox").hide();
        $("#h1title").show();
        $("#bmbtn").hide();
        $("#hideid").hide();
        $("#showid").show();
    });
</script>
<script type="text/javascript">
    function goback(){
        window.history.go(-1);
    }
</script>
</html>