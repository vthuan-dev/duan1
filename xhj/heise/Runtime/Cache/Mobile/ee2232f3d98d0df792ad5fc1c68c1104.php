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
	</style>
  </head>
  <body>
	<div class="container-fluid ctbox"  style="padding:0px;width:100vw;">
		<div class="no_header"  style="position: fixed;z-index: 9999;background: #fff;padding:0px 10px;top:0px;">
			<div class="fl allhg txtl" style="line-height:50px;width:10%;">
				<i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 24px;"></i>
			</div>

			<div class="fl allhg" id="centerbox" style="width:80%;text-align:center;line-height:50px;">
				<span class="fcc fzmmm" style="font-size:18px;"><?php echo L('公告管理');?></span>
			</div>
		</div>

		<div class="no_content" style="width:90%;margin:60px auto;">
			<div class="no_inbox">
                <?php if(empty($list)): ?><div style="width:100%;height:200px;line-height:200px;text-align:center;">
                    <i class="bi bi-exclamation-circle"></i>
                    <span class="fzmm fcc">没有公告发布</span>
                </div>    
                <?php else: ?>
                <?php if(is_array($list)): foreach($list as $key=>$vo): ?><a href="<?php echo U('Index/gginfo');?>?id=<?php echo ($vo["id"]); ?>">
				<div style="width:100%;height:90px;padding:5px 0px;margin-bottom:10px;">
					<div style="width:10%;height:80px;float:left;">
						<i class="bi bi-envelope fcc fw" style="font-size:20px;"></i>
					</div>
					<div style="width:90%;height:80px;float:right;">
						<div style="width:100%;height:20px;overflow: hidden;">
							<span class="fzmmm fcc"><?php echo ($vo["title"]); ?></span>
						</div>
						<div style="width:100%;height:40px;overflow: hidden;">
							<span class="fzm fcc"><?php echo ($vo["content"]); ?></span>
						</div>
						<div style="width:100%;height:40px">
							<span class="fzm fcc"><?php echo ($vo["addtime"]); ?></span>
						</div>
					</div>
				</div>
				</a><?php endforeach; endif; endif; ?>

			</div>
		</div>

	</div>		
</body>

<body>
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">
    function goback(){
        window.history.go(-1);
    }
</script>
</html>