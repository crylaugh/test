<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:46:"D:\phpStudy\WWW\nnius\template\error_tmpl.html";i:1503039218;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo lang('jump_hint'); ?></title>
<link rel="stylesheet" type="text/css"
	href="__STATIC__/css/seller_center.css"></link>
</head>
<body>
    <div class="system-message">
    	<img src="__STATIC__/images/error.png" style="margin-right:20px;"/>
    	<?php switch ($code) {case 0:?>
    	<ul>
    	<li class="error-msg"><?php echo(strip_tags($msg));?></li>
    	 <?php break;} ?>
    	<li> <?php echo lang('page_automation'); ?> <a id="href" href="<?php echo($url);?>"><?php echo lang('jump'); ?></a> <?php echo lang('waiting_time'); ?>： <b id="wait"><?php echo($wait);?></b></li>
    	</ul>
    	</div>
    <script type="text/javascript">
        (function(){
            var wait = document.getElementById('wait'),
                href = document.getElementById('href').href;
            var interval = setInterval(function(){
                var time = --wait.innerHTML;
                if(time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                };
            }, 1000);
        })();
    </script>
</body>
</html>