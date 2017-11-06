<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:41:"template/wap\default\Pay\getPayValue.html";i:1502935840;s:30:"template/wap\default\base.html";i:1507430043;s:34:"template/wap\default\urlModel.html";i:1505377008;s:42:"template/wap\default\controlCopyRight.html";i:1501836949;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
<meta content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title><?php echo $platform_shopname; if($seoconfig['seo_title'] != ''): ?>-<?php echo $seoconfig['seo_title']; endif; ?></title>
<meta name="keywords" content="<?php echo $seoconfig['seo_meta']; ?>" />
<meta name="description" content="<?php echo $seoconfig['seo_desc']; ?>"/>
<link rel="shortcut  icon" type="image/x-icon" href="__TEMP__/<?php echo $style; ?>/public/images/favicon.ico" media="screen"/>
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pre_foot.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pro-detail.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/showbox.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<script src="__TEMP__/<?php echo $style; ?>/public/js/showBox.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script src="__STATIC__/js/load_task.js" type="text/javascript"></script>
<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
<script src="__STATIC__/js/time_common.js" type="text/javascript"></script>
<script type="text/javascript">
var CSS = "__TEMP__/<?php echo $style; ?>/public/css";
var APPMAIN='APP_MAIN';
var ADMINMAIN='ADMIN_MAIN';
var UPLOADAVATOR = 'UPLOAD_AVATOR';//存放用户头像
var UPLOADCOMMON = 'UPLOAD_COMMON';
var SHOPMAIN = "SHOP_MAIN";
var temp = "__TEMP__/";//外置JS调用
$(function(){
	showLoadMaskLayer();
})

$(document).ready(function(){
	hiddenLoadMaskLayer();
	//编写代码
});

//页面底部选中
function buttomActive(event){
	clearButton();
	if(event == "#buttom_home"){
		$("#buttom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_check.png");
	}else if(event == "#buttom_classify"){
		$("#buttom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_check.png");
	}else if(event == "#buttom_stroe"){
		$("#buttom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_check.png");
	}else if(event == "#bottom_cart"){
		$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_check.png");
	}else if(event == "#bottom_member"){
		$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_check.png");
	}
}

function clearButton(){
	$("#buttom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_uncheck.png");
	$("#buttom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png");
	$("#buttom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_uncheck.png");
	$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_uncheck.png");
	$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_uncheck.png");
}

//显示加载遮罩层
function showLoadMaskLayer(){
	$(".mask-layer-loading").fadeIn(300);
}

//隐藏加载遮罩层
function hiddenLoadMaskLayer(){
	$(".mask-layer-loading").fadeOut(300);
}
</script>
<style>
body .sub-nav.nav-b5 dd i {margin: 3px auto 5px auto;}
body .fixed.bottom {bottom: 0;}
.mask-layer-loading{position: fixed;width: 100%;height: 100%;z-index: 999999;top: 0;left: 0;text-align: center;display: none;}
.mask-layer-loading i,.mask-layer-loading img{text-align: center;color:#000000;font-size:50px;position: relative;top:50%;}
.sub-nav.nav-b5 dd{width:20%;font-size:14px;}

.modal {
    position: fixed;
    top: 25%;
    left: 8%;
    z-index: 1050;
    width: 74%;
    background-color: #ffffff;
    border: 1px solid #999;
    border: 1px solid rgba(0, 0, 0, 0.3);
    outline: none;
    -webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding-box;
    background-clip: padding-box;
}
.fade {
    opacity: 1;
    -webkit-transition: opacity 0.15s linear;
    -moz-transition: opacity 0.15s linear;
    -o-transition: opacity 0.15s linear;
    transition: opacity 0.15s linear;
	padding:0 16px;
	border-radius: 6px;
}
.modal-title{
	    height: 45px;
    line-height: 45px;
    text-align: center;
    border-bottom: 1px solid #eee;
    color: red;
    font-size: 17px;
    font-weight: normal;
}
.log-cont{
	margin-top: 15px;
    height: 40px;
    line-height: 40px;
    border: 1px solid #eee;
    background: #fff;
    border-radius: 3px;
	padding: 1px 5px;
	padding-left: 10px;
}
.loginbotton{
	margin-top: 25px;
    height: 38px;
    line-height: 38px;
    text-align: center;
    background: red;
    margin-bottom: 33px;
    border-radius: 3px;
}

.lang-btn{
    border: 0;
    background: red;
    color: #fff;
}
input:-webkit-autofill, textarea:-webkit-autofill, select:-webkit-autofill {
    background-color: rgba(217, 217, 217, 0.29);
}
input{
	border:0;
	background:#fff;
}
.getvilidate{
    border: 1px solid red;
    border-radius: 3px;
    color: red;
	padding: 0 5px;
    height: 25px;
    line-height: 25px;
    margin-top: 4px;
}



</style>

<!-- <link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/order.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/member_index.css"> -->
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/pay/get_pay_value.css"/>

</head>
<input type="hidden" id="niushop_rewrite_model" value="<?php echo rewrite_model(); ?>">
<input type="hidden" id="niushop_url_model" value="<?php echo url_model(); ?>">
<input type="hidden" id="niushop_admin_model" value="<?php echo admin_model(); ?>">
<script>
function __URL(url)
{
    url = url.replace('SHOP_MAIN', '');
    url = url.replace('APP_MAIN', 'wap');
    url = url.replace('ADMIN_MAIN', $("#niushop_admin_model"));
    if(url == ''|| url == null){
        return 'SHOP_MAIN';
    }else{
        var str=url.substring(0, 1);
        if(str=='/' || str=="\\"){
            url=url.substring(1, url.length);
        }
        if($("#niushop_rewrite_model").val()==1 || $("#niushop_rewrite_model").val()==true){
            return 'SHOP_MAIN/'+url;
        }
        var action_array = url.split('?');
        //检测是否是pathinfo模式
        url_model = $("#niushop_url_model").val();
        if(url_model==1 || url_model==true)
        {
            var base_url = 'SHOP_MAIN/'+action_array[0];
            var tag = '?';
        }else{
            var base_url = 'SHOP_MAIN?s=/'+ action_array[0];
            var tag = '&';
        }
        if(action_array[1] != '' && action_array[1] != null){
            return base_url + tag + action_array[1];
        }else{
        	 return base_url;
        }
    }
}
 /**
  * 处理图片路径
  */
function __IMG(img_path){
	var path = "";
	if(img_path != undefined && img_path != ""){
		if(img_path.indexOf("http://") == -1 && img_path.indexOf("https://") == -1){
			path = "__UPLOAD__\/"+img_path;
		}else{
			path = img_path;
		}
	}
	return path;
}
</script>
<body class="body-gray">
	
<section class="head">
	<a class="head_back" href="javascript:window.history.go(-1)"><i class="icon-back"></i></a>
	<div class="head-title"><?php echo lang('order_payments'); ?></div>
</section>

	<div class="motify" style="display: none;"><div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div></div>
	
<div class="head-info">
	<div class="head-pay"><?php echo lang('towards'); ?><?php echo $shopname; ?><?php echo lang('pay'); ?></div>
	<div class="head-pay-value">￥<?php echo $pay_value['pay_money']; ?></div>
</div>

<div class="pay-type-item">
	<div class="pay-item-list" id="pay-type"><?php echo lang('member_payment_method'); if($pay_config['wchat_pay_config']['is_use']==1): ?> 
		<span id="pay-text" style="float: right;margin-right: 20px;"><?php echo lang('wechat_payment'); ?></span>
		<input type="hidden" id="pay_config" value="1">
	<?php elseif($pay_config['ali_pay_config']['is_use']==1): ?>
		<span id="pay-text" style="float: right;margin-right: 20px;"><?php echo lang('alipay'); ?></span>
		<input type="hidden" id="pay_config" value="1">
	<?php else: ?>
		<span style="float: right;margin-right: 20px;"></span>
		<input type="hidden" id="pay_config" value="0">
	<?php endif; ?>
		<span style="float:right" class="jiantou"></span>
	</div>
	<div style="padding: 10px 0px;"><?php echo lang('payer'); ?><span style="float:right;"><?php echo $member_info["user_info"]['nick_name']; ?></span></div>
</div>

<!-- 遮罩层 -->
<div class="shade" style="display:none;"></div>
<!-- 弹出层 --> 
<div class="popup" style="display:none;">
	<div class="codes">
		<div id="close"><p style="color:#999;">X</p></div>
		<?php if($pay_config['wchat_pay_config']['is_use']==1): ?>
			<div class="wchat-weixin">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/weifu.png" class="wchat-photo">
					<span class="wchat-title"><?php echo lang('wechat_payment'); ?></span>
				<span id="wchatpay"></span> 
			</div>
		<?php endif; if($pay_config['ali_pay_config']['is_use']==1): ?> 
			<div class="ali-pay">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/zhifu.png" class="ali-photo">
				<span class="ali-item"><?php echo lang('alipay'); ?></span>
				<span id="alipay"></span>
			</div>
		<?php endif; if($pay_config['wchat_pay_config']['is_use']==1): ?> 
		<input type="hidden" id="pay_type" value="0"> 
		<?php elseif($pay_config['ali_pay_config']['is_use']==1): ?>
		<input type="hidden" id="pay_type" value="1"> 
		<?php else: ?>
		<input type="hidden" id="pay_type" value="-1">
		<?php endif; ?>
		<input type="hidden" id="out_trade_no" value="<?php echo $pay_value['out_trade_no']; ?>">
		
	</div>
</div>
<style>
.footer {
	margin: 0 0 45px 0;
	padding: 0;
	min-height: 1px;
	text-align: center;
	line-height: 16px;
	background-color: #f8f8f8;
}
.ft-copyright {
	padding: 50px 0 20px;
	margin: 0 15px;
	font-size: 12px;
}

.ft-copyright img {
	width: 110px;
	height: 30px;
	display: block;
	margin: 0 auto;
}

</style>
<div class="footer" style="min-height: 86px;">
	<div class="copyright" id="bottom_copyright">
		<div class="ft-copyright">
			<img src="__TEMP__/<?php echo $style; ?>/public/images/logo_copy.png" id="copyright_logo_wap">
			<a href="javascript:;" target="_blank" id="copyright_companyname"></a>
		</div>
	</div>
</div>

<section class="s-btn" style="position: fixed; left: 0; right: 0; bottom: 0; height: 50px; padding: 0; z-index: 5;">
	<button class="alipay" type="button" onclick="calculate()"><?php echo lang('confirm_payment'); ?>￥<?php echo $pay_value['pay_money']; ?></button>
</section>
<script>
$(function(){
// 	$("#pay_type").val(0);//默认是微信支付
	$("#wchatpay").html("<img src='" + __IMG__ + "/segou.png'>");
	$("#alipay").html("<img src='" + __IMG__ + "/hgou.png'>");
})

var __IMG__ = '__TEMP__/<?php echo $style; ?>/public/images';
function calculate() {
	var pay_type = $("#pay_type").val();
	var out_trade_no = $("#out_trade_no").val();
	if (pay_type == 0) {
		//微信支付
		window.location.href = __URL("APP_MAIN/pay/wchatpay?no=" + out_trade_no);
	} else if (pay_type == 1) {
		//支付宝支付
		window.location.href = __URL("APP_MAIN/pay/alipay?no=" + out_trade_no);
	}else if(pay_type == -1){
		showBox("<?php echo lang('choose_payment_method'); ?>");
	}
}

$("#pay-type").click(function(){
	var pay_config = $("#pay_config").val();
	if(pay_config == 1){
		$(".shade").show();
		$(".popup").show();
	}else{
		showBox("<?php echo lang('the_merchant_does_not_configure_payment_methods'); ?>");
	}
})

$(".ali-pay").click(function() {
	$(".shade").hide();
	$(".popup").hide();
	$("#pay_type").val(1);
	$("#alipay").html("<img src='" + __IMG__ + "/segou.png'>");
	$("#wchatpay").html("<img src='" + __IMG__ + "/hgou.png'>");
	$("#pay-text").html("<?php echo lang('alipay'); ?>");
})

$(".wchat-weixin").click(function() {
	$(".shade").hide();
	$(".popup").hide();
	$("#pay_type").val(0);
	$("#alipay").html("<img src='" + __IMG__ + "/hgou.png'>");
	$("#wchatpay").html("<img src='" + __IMG__ + "/segou.png'>");
	$("#pay-text").html("<?php echo lang('wechat_payment'); ?>");
})

$("#close").click(function(){
	$(".shade").hide();
	$(".popup").hide();
})
</script>

	 
	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	

</body>
</html>