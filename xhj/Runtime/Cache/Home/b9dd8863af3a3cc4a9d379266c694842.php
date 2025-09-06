<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html   >
<head>
    <meta charset="UTF-8">
    <title><?php echo ($webname); ?></title>
    <link rel="stylesheet" href="/Public/Home/login/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="/Public/Home/static/css/base.css" />

    <link rel="stylesheet" href="/Public/Dela/demo/demo.css">
    <link rel="stylesheet" href="/Public/Dela/template/dela-template.css">
    <link rel="stylesheet" href="/Public/build/css/countrySelect.css">

    <style>
        .main_demo {
            width: 28% !important;
            float: left;
        }

        .container-input {
            padding-left: 0px;
            width: 60%;
            margin: 0px;
        }

        button {
            appearance: auto;
            writing-mode: horizontal-tb !important;
            font-style: ;
            font-variant-ligatures: ;
            font-variant-caps: ;
            font-variant-numeric: ;
            font-variant-east-asian: ;
            font-weight: ;
            font-stretch: ;
            font-size: ;
            font-family: ;
            text-rendering: auto;
            color: buttontext;
            letter-spacing: normal;
            word-spacing: normal;
            line-height: normal;
            text-transform: none;
            text-indent: 0px;
            text-shadow: none;
            display: inline-block;
            text-align: center;
            align-items: flex-start;
            cursor: default;
            box-sizing: border-box;
            background-color: buttonface;
            margin: 0em;
            padding: 1px 6px;
            border-width: 2px;
            border-style: outset;
            border-color: buttonborder;
            border-image: initial;
        }
        .btn-hover {
            width: 7em;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
            height: 30px;
            text-align: center;
            border: none;
            background-size: 300% 100%;
            border-radius: 50px;
            moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }
        .btn-hover.color-1 {
            background-image: linear-gradient(to right, #25aae1, #40e495, #30dd8a, #2bb673);
            box-shadow: 0 4px 15px 0 rgb(49 196 190 / 75%);
        }
        .btn-hover.color-6 {
            background-image: linear-gradient(to right, #009245, #FCEE21, #00A8C5, #D9E021);
            box-shadow: 0 4px 15px 0 rgb(83 176 57 / 75%);
        }
        .btnl {
            float: left;
            margin-bottom:1.1em;

        }
        .btnr {
            float: right;
            margin-bottom:1.1em;
            position: absolute;
            left: 40%;
        }
        .code {
            width: 100% !important;
        }
        .send-btn {
            width: 20%;
            height: 1.8em;
            position: absolute;
            top: 415px;
            left: 220px;

        }
        .mobile_input {
            width: 70% !important;
            float: right;
        }

        .btn-hover.color-4 {
            background-image: linear-gradient(to right, #fc6076, #ff9a44, #ef9d43, #e75516);
            box-shadow: 0 4px 15px 0 rgb(252 104 110 / 75%);
        }

    </style>
</head>
<body>

<!-- partial:index.partial.html -->
<div class="container">

    <!-- code here -->
    <div class="card">



        <form class="card-form" onclick="return false">

            <div class="margin-topbox-px-10">
                <div data-bn-type="text" class="css-1g5tc38 tcl f36 fw"><?php echo L('找回密码');?></div>
                <div data-bn-type="text" class="css-152kxht tcl f16"></div>
            </div>

            <div class="input">
                <button class="btn-hover color-6 btnr" onclick="stype(2)">E-mail</button>
                <button class="btn-hover color-1 btnl" onclick="stype(1)">Mobile</button>
            </div>

            <input type="hidden" name="type" id="type" value="2">
            <input type="hidden" name="account" id="account" >
            <div class="input"  id="e-box" style="display: none">
                <input type="text" class="input-field" name="email" id="email" value=""  required/>
                <label class="input-label"><?php echo L('邮箱');?></label>
            </div>

            <div id="main_demo" style="margin-bottom:1.1em;display: block" >
                <div class="container input container-input">
                    <div class="form-item">
                        <input id="country_selector" style="width: 367px;border-bottom: 1px solid #eee;" class="input-field"  type="text">
                        <label for="country_selector" style="display:none;">Select a country here...</label>
                    </div>
                    <button type="submit" style="display:none;">Submit</button>
                </div>
            </div>


            <div class="input" style="margin-top: 1.5rem;">
                <input type="password" class="input-field"  name="password" id="pass-2" value="" required/>
                <label class="input-label"><?php echo L('新密码');?></label>
            </div>

            <div class="input">
                <input type="password" class="input-field"  name="repeat" id="Repeat Password" value="" required/>
                <label class="input-label"><?php echo L('确认密码');?></label>
            </div>

            <div class="input">
                <input type="text" class="input-field"  name="vcode" id="vcode" value="" required style="width: 60%" />
                <label class="input-label"><?php echo L('验证码');?></label>
                <div class="action-button login-send-button">
                    <button class="action-button" onclick="uplogin()"><?php echo L('发送验证码');?></button>
<!--                    <img style="width:100%;height:50px;border-radius:5px;" src="<?php echo U('Verify/code');?>" onclick="this.src=this.src+'?t='+Math.random()" title="<?php echo L('换一张');?>">-->
                </div>
            </div>
            <div class="action">
                <button class="action-button" onclick="uplogin()"><?php echo L('找回密码');?></button>
            </div>
        </form>
        <div class="login-reg tcr">
            <a href="<?php echo U('Login/findpwd');?>"  class="css-s84t59" style="color: #C99400;"><?php echo L('忘记密码');?>？</a>
            <a href="<?php echo U('Login/register');?>"  class="css-utqtyo" style="color: #C99400;"><?php echo L('立即注册');?></a>
        </div>
    </div>
</div>
<!-- partial -->

</body>


<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Home/static/js/layer/layer.js" ></script>
<script type="text/javascript" src="/Public/Home/static/js/jquery.SuperSlide.2.1.1.js" ></script>

<script type="text/javascript">
    function upreg(){
        var  type = $('#type').val();
        if (type != 1 && type != 2) {
            layer.msg("<?php echo L('请选择注册类型');?>");return false;
        }
        if (type == 1) {
            var account = $("#email").val();
        }

        if (type == 2) {
            var account = $(".selected-flag");
        }
        console.log(account);
        return false;
        var email = $("#email").val();
        var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
        if(email=='' || email == null){
            layer.msg("<?php echo L('请输入邮箱');?>");return false;
        }
        if(!reg.test(email)){
            layer.msg("<?php echo L('邮箱格式不正确');?>");return false;
        }
        var ecode = $("#ecode").val();
        if(ecode == ''){
            layer.msg("<?php echo L('请输入邮箱验证码');?>");return false;
        }
        var lpwd = $("#lpwd").val();
        if(lpwd == ''){
            layer.msg("<?php echo L('请输入密码');?>");return false;
        }
        var invit = $("#invit").val();
        if( invit == ''){
            layer.msg("<?php echo L('请输入邀请码');?>");return false;
        }
        $.post("<?php echo U('Login/upregister');?>",
            {'email' : email, 'ecode' : ecode, 'lpwd' : lpwd, 'invit' : invit},
            function(data){
                if(data.code == 1){
                    layer.msg(data.info);
                    setTimeout(function(){
                        window.location.href="<?php echo U('Login/index');?>";
                    },2000);
                }else{
                    layer.msg(data.info);return false;
                }
            }
        );


    }
</script>


<script type="text/javascript">

    function stype(type) {
        if (type == 2) {
            $('#e-box').show();
            $('#main_demo').hide();
        }
        if (type == 1) {
            $('#e-box').hide();
            $('#main_demo').show();
        }
        $('#type').val(type);

    }

    function goindex(){
        window.location.href="<?php echo U('Index/index');?>";
    }

    function uplogin(){
        window.location.href="<?php echo U('Login/index');?>";
    }

    function forgot_password() {
        window.location.href="<?php echo U('Login/findpwd');?>";
    }


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
<script src="/Public/build/js/jquery-1.9.1.min.js"></script>
<script src="/Public/build/js/countrySelect.js"></script>
<script>
    $("#country_selector").countrySelect({
        preferredCountries: ["jp","us"]
    });
</script>

</html>