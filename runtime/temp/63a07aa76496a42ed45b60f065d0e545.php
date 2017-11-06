<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:45:"template/wap\default\\Order\refundDetail.html";i:1504772975;s:30:"template/wap\default\base.html";i:1507430043;s:34:"template/wap\default\urlModel.html";i:1505377008;s:32:"template/wap\default\footer.html";i:1507607166;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/normalize.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/common-v4.4.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/person-v4.4.css">
<!-- <link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/weui.css" /> -->
<style>
#form1{margin:0;}
#form1 .row{margin:0px;border-bottom: 1px solid #f1f1f1;background-color:#fff;}
/* .columns{height:40px;line-height:40px;} */
.columns label{width:24%;float:left;font-size:12px;text-align:center;margin-bottom: 0px;line-height: 40px;}
.columns .columns-select{width:72%;float:right;font-size:12px;position: relative;}
.columns-select:after{content: " ";
    display: inline-block;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    height: 6px;
    width: 6px;
    border-width: 2px 2px 0 0;
    border-color: #C8C8CD;
    border-style: solid;
    position: absolute;
    top: 50%;
    right: 15px;
    margin-top: -3px;}
.columns .columns-input{
	width:72%;float:right;
	font-size:12px;
	line-height: 40px;
}
.columns .columns-input input{
    border: 0;
    outline: 0;
    -webkit-appearance: none;
    background-color: transparent;
    color: inherit;
    height: 1.41176471em;
    line-height: 1.41176471;}
.columns select{padding-right: 30px;    -webkit-appearance: none;
    border: 0;
    outline: 0;
    background-color: transparent;
/*     width: 100%; */
    font-size: inherit;
    height: 40px;
    position: relative;
    z-index: 1;}
textarea{    border: none;
    font-size: 12px;
    width: 66%;
    height: 60px;
    resize: none;
    outline: none;
    background: #eee;
}
a.button{display:block;width:80%;margin:10px auto 0;text-align:center;background-color:#ff6600;border-radius:5px;border:1px solid #ff6600;color:#fff;font-size:16px;height:40px;line-height:40px;}
.row{
	margin-bottom:10px;
}
.color-red{
	margin-right: 5px;
}
</style>

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
	<div class="head-title"><?php echo lang('application_for_drawback'); ?></div>
</section>

	<div class="motify" style="display: none;"><div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div></div>
	
<div data-alert class="alert-box alert" style="display: none;"
	id="errerMsg">
	<a href="#" class="close">&times;</a>
</div>




<form class="main mt-45">
	<div class="return-process">
		<ul class="clear">
			<li class="step01">
				<p class="name"><?php echo lang('member_buyers_apply_for_refund'); ?></p> <span class="number">1</span> <span
				class="prcess-line prcess-line-r"></span>
			</li>
			<li class="step02">
				<p class="name"><?php echo lang('member_merchant_processing_refund_request'); ?></p> <span class="prcess-line prcess-line-l"></span>
				<span class="number">2</span> <span
				class="prcess-line prcess-line-r"></span>
			</li>
			<li class="step03">
				<p class="name"><?php echo lang('member_refund_completed'); ?></p> <span class="prcess-line prcess-line-l"></span>
				<span class="number">3</span>
			</li>
		</ul>
	</div>
	<?php if($detail['refund_status'] == 0): ?>
	<div class="form-c" id="form1">
		<div class="row">
			<div class="small-12 columns">
				<label><span class="color-red">*</span><?php echo lang('member_treatment_mode'); ?>：</label> 
				<div class="columns-select">
				<select
					id="refund_require">
					<option value="1" selected="selected"><?php echo lang('member_refund_goods'); ?></option>
					<?php if($detail['shipping_status'] != '0'): ?>
					<option value="2"><?php echo lang('member_refund_goods_and_money'); ?></option>
					<?php endif; ?>
				</select></div>
			</div>
		</div>
		<div class="row">
			<div class="small-12 columns">
				<label><span class="color-red">*</span><?php echo lang('member_refund_reason'); ?>：</label> 
				<div class="columns-select">
				<select id="refund_reason">
					<option value="<?php echo lang('member_buyer_and_seller_agrees'); ?>"><?php echo lang('member_buyer_and_seller_agrees'); ?></option>
					<option value="<?php echo lang('member_wrong_and_no_want'); ?>"><?php echo lang('member_wrong_and_no_want'); ?></option>
					<option value="<?php echo lang('member_commodity_quality_problems'); ?>"><?php echo lang('member_commodity_quality_problems'); ?></option>
					<option value="<?php echo lang('member_goods_not_received'); ?>"><?php echo lang('member_goods_not_received'); ?></option>
					<option value="<?php echo lang('member_other'); ?>"><?php echo lang('member_other'); ?></option>
				</select></div>
			</div>
		</div>
		<div class="row">
			<div class="small-12 columns">
				<label><span class="color-red">*</span><?php echo lang('member_refund_amount'); ?>：</label>
				<div class="columns-input">
					<input value="" id="refund_money" class="maxRefund" type="text"
						placeholder="<?php echo lang('member_refund_at_most'); ?><?php echo $refund_money; ?><?php echo lang('element'); ?>" onblur="maxRefund()">
					<input value="<?php echo $refund_money; ?>" id="maxRefundMoney" type="hidden" />
				</div>
			</div>
		</div>
		<div class="row">
			<div class="small-12 columns" style="background-color:#f5f5f5;">
				<label><?php echo lang('member_refund_description'); ?>：</label>
			</div>
		</div>
		<textarea rows="5" id="description" style="padding:10px 15px;" placeholder="请输入退款说明"></textarea>
		<a class="button" href="javascript:void(0)" onclick="btnSave()"><?php echo lang('submit_a_refund_application'); ?></a>
	</div>
	<?php elseif($detail['refund_status'] == -3): ?>
	<div class="form-c" id="form1">
		<div class="row">
			<div class="small-12 columns">
				<label style="margin-top: 12px;"><span class="color-red">*</span><?php echo lang('member_treatment_mode'); ?>：</label> 
				<select id="refund_require">
					<?php if($detail['refund_type'] == 1): ?>
						<option value="1" selected="selected"><?php echo lang('member_refund_goods'); ?></option>
						<?php else: ?><option value="1"><?php echo lang('member_refund_goods'); ?></option>
					<?php endif; if($detail['shipping_status'] != '3'): if($detail['refund_type'] == 2): ?>
						<option value="2" selected="selected"><?php echo lang('member_refund_goods_and_money'); ?></option>
						<?php else: ?><option value="2"><?php echo lang('member_refund_goods_and_money'); ?></option>
						<?php endif; endif; ?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="small-12 columns">
				<label style="margin-top: 12px;"><span class="color-red">*</span><?php echo lang('member_refund_reason'); ?>：</label>
				<select id="refund_reason">
					<?php if(lang('member_buyer_and_seller_agrees')): ?> "}
						<option value="<?php echo lang('member_buyer_and_seller_agrees'); ?>" selected="selected"><?php echo lang('member_buyer_and_seller_agrees'); ?></option>
						<?php else: ?><option value="<?php echo lang('member_buyer_and_seller_agrees'); ?>"><?php echo lang('member_buyer_and_seller_agrees'); ?></option>
					<?php endif; if(lang('member_wrong_and_no_want')): ?>"}
						<option value="<?php echo lang('member_wrong_and_no_want'); ?>" selected="selected"><?php echo lang('member_wrong_and_no_want'); ?></option>
						<?php else: ?><option value="<?php echo lang('member_wrong_and_no_want'); ?>"><?php echo lang('member_wrong_and_no_want'); ?></option>
					<?php endif; if(lang('member_commodity_quality_problems')): ?>"}
						<option value="<?php echo lang('member_commodity_quality_problems'); ?>" selected="selected"><?php echo lang('member_commodity_quality_problems'); ?></option>
						<?php else: ?><option value="<?php echo lang('member_commodity_quality_problems'); ?>"><?php echo lang('member_commodity_quality_problems'); ?></option>
					<?php endif; if(lang('member_goods_not_received')): ?>"}
						<option value="<?php echo lang('member_goods_not_received'); ?>" selected="selected"><?php echo lang('member_goods_not_received'); ?></option>
						<?php else: ?><option value="<?php echo lang('member_goods_not_received'); ?>"><?php echo lang('member_goods_not_received'); ?></option>
					<?php endif; if(lang('member_other')): ?>"}
						<option value="<?php echo lang('member_other'); ?>" selected="selected"><?php echo lang('member_other'); ?></option>
						<?php else: ?><option value="<?php echo lang('member_other'); ?>"><?php echo lang('member_other'); ?></option>
					<?php endif; ?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="small-12 columns">
				<label style="margin-top: 12px;"><span class="color-red">*</span><?php echo lang('member_refund_amount'); ?>：</label>
				<div style="height:40px;line-height:40px;"> 
					<input value="<?php echo $refund_money; ?>" id="refund_money" class="maxRefund" type="text"
						placeholder="<?php echo lang('member_refund_at_most'); ?><?php echo $refund_money; ?><?php echo lang('element'); ?>"> <input
						value="<?php echo $refund_money; ?>" id="maxRefundMoney" type="hidden" />
				</div>
			</div>
		</div>
		<div class="row">
			<div class="small-12 columns">
				<label style="margin-top: 12px;"><?php echo lang('member_refund_description'); ?>：</label>
				<textarea rows="5" id="description"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="small-12 columns">
				<a class="button" href="javascript:void(0)" onclick="btnSave()"><?php echo lang('submit_a_refund_application'); ?></a>
			</div>
		</div>
	</div>
	<?php elseif($detail['refund_status'] == 1): ?>
	<div class="none-goods">
		<i class="icon-tip-circle"></i>
		<div class="text">
			<h4><?php echo lang('wait_for_the_merchant_to_process_the_refund_request'); ?></h4>
			<ul>
				<li><?php echo lang('if_the_merchant_agreed_to_refund_will_reach_and_refund_to_your_alipay_account_or_bank_card'); ?>。</li>
			</ul>
		</div>
	</div>
	<?php elseif($detail['refund_status'] == 2): ?>
	<!--已收到货 begin-->
	<div class="seller-agree" id="form2">
		<h4><?php echo lang('member_return_and_fill'); ?></h4>
		<h5>1、<?php echo lang('please_return_the_goods'); ?></h5>
		<p class="explanation">
			<?php echo lang('member_use_or_surface'); ?>。<br /> 
			<?php echo lang('member_return_address'); ?>： 
			<span class="address">
				<?php if($shop_info['shop_address'] != ''): ?>
						<?php echo $shop_info['shop_address']; ?>&nbsp;&nbsp;<?php echo $shop_info['seller_name']; ?>&nbsp;&nbsp;<?php echo $shop_info['seller_mobile']; ?>&nbsp;&nbsp;<?php echo $shop_info['seller_zipcode']; else: ?>
						<?php echo lang('member_no_delivery_address_yet'); endif; ?>	
			</span>
		</p>
		<h5>
			2、<?php echo lang('member_logistics_information'); ?> <small>（<?php echo lang('member_application_closed'); ?>）</small>
		</h5>
		<div class="express-form">
			<div class="row">
				<label><span class="color-red">*</span><?php echo lang('member_logistics_company'); ?>：</label> <input
					type="text" id="LogisticsCompany" />
			</div>
			<div class="row">
				<label><span class="color-red">*</span><?php echo lang('member_waybill_number'); ?>：</label> <input
					type="text" id="ExpressNo" />
			</div>
			<div class="row">
				<a class="button" href="javascript:void(0)" onclick="ExpressSave()"><?php echo lang('member_submit'); ?></a>
			</div>
		</div>
	</div>
	<?php elseif($detail['refund_status'] == 3): ?>
	<div class="none-goods">
		<i class="icon-tip-circle"></i>
		<div class="text">
			<h4><?php echo lang('member_waiting_for_merchant'); ?></h4>
			<ul>
				<li><?php echo lang('if_the_merchant_agreed_to_refund_will_reach_and_refund_to_your_alipay_account_or_bank_card'); ?>。</li>
			</ul>
		</div>
	</div>
	<?php elseif($detail['refund_status'] == 4): ?>
	<!--等待卖家同意退款 begin-->
	<div class="wait-seller-agree">
		<i class="icon-tip-circle"></i>
		<div class="text" style="padding: 20px 0 1px 5px;">
			<h4><?php echo lang('member_successfully_applied_for_refund'); ?>。</h4>
		</div>
	</div>
	<!--等待卖家同意退款 begin-->
	<?php elseif($detail['refund_status'] == 5): ?>
	<!--step03 begin-->
	<div class="return-success">
		<i class="icon-right-circle"></i>
		<div class="text">
			<h4><?php echo lang('member_refund_successful'); ?></h4>
			<p class="time"><?php echo lang('refund_success_time'); ?>:<?php echo getTimeStampTurnTime($detail['refund_time'] ); ?></p>
			<p class="money"><?php echo lang('member_refund_amount'); ?>： <?php echo $detail['refund_real_money']; ?><?php echo lang('element'); ?></p>
		</div>
	</div>
	<?php elseif($detail['refund_status'] == -1): ?>
	<!--卖家拒绝 begin-->
	<div class="disagree-return">
		<i class="icon-tip-circle"></i>
		<div class="text" style="padding: 20px 0 1px 5px;">
			<h4><?php echo lang('member_seller_rejects'); ?></h4>
			<div class="operate"></div>
		</div>
	</div>
	<?php elseif($detail['refund_status'] == -2): ?>
	<div class="return-success">
		<i class="icon-tip-circle"></i>
		<div class="text" style="padding: 20px 0 1px 5px;">
			<h4><?php echo lang('member_refund_closed'); ?></h4>
		</div>
	</div>
	<?php endif; ?>
</form>
<script>
        var orderId = <?php echo $detail['order_id']; ?>;
        var itemId =<?php echo $detail['order_goods_id']; ?>;
        $(function() {
			var refund_status = <?php echo $detail['refund_status']; ?>;
            if(refund_status == ""){
				$(".step01").addClass("current");
            }else if(refund_status == 0){
            	$(".step01").addClass("current");
            }else if(refund_status == 5){
				$(".step01").addClass("current");
	            $(".step02").addClass("current");
	            $(".step03").addClass("current");
            }else if(refund_status < 0){
            	$(".step01").addClass("current");
	            $(".step02").addClass("current");
            }else{
				$(".step01").addClass("current");
	            $(".step02").addClass("current");
            }
        });
        function ExpressSave(){
            var LogisticsCompany=$("#LogisticsCompany").val();
            var ExpressNo=$("#ExpressNo").val();
            if(LogisticsCompany==""){
                $("#LogisticsCompany").focus();
            }else if(ExpressNo==""){
                $("#ExpressNo").focus();
            }else{
                $.ajax({
                    url: "<?php echo __URL('APP_MAIN/order/ordergoodsrefundexpress'); ?>",
                    type: "post",              
                    async: false,
                    data: { "order_id": orderId, "order_goods_id": itemId, "refund_express_company": LogisticsCompany, "refund_shipping_no": ExpressNo},
                    dataType: "json",
                    success: function (response) {
                    	if(response.code>0){
                    		showBox("<?php echo lang('successful_application_for_refund'); ?>");
                    		window.location.href = __URL("APP_MAIN/Member/index");
                     	}else{
                     		showBox("<?php echo lang('failed_to_apply_for_refund'); ?>");
                     	}
                    }
                });
             }
        }
        function btnSave() {
            var refund_require = $("#refund_require").val();
            var refund_reason = $("#refund_reason").val();
            var refund_money = $("#refund_money").val();//退款金额
            var description = $("#description").val();//
//            var OrderAmount = 0.01;//订单总价
//             var OrderRefundCount = $("#reCount").html();//退货数量
            var num2 = parseFloat($("#maxRefundMoney").val());
            if(refund_money >= 0){
	            if (refund_money <0 || refund_money >num2 ) {
	            	$("#refund_money").focus();
	            	showBox("<?php echo lang('member_beyond_refund_amount'); ?>");
	            	return;
	            }
            }else{
            	$("#refund_money").focus();
            	showBox("<?php echo lang('please_enter_the_refund_amount'); ?>");
            	return;
            }
            //alert(orderId+","+itemId+","+refund_require+","+refund_money+","+refund_reason);
            //return;
            $.ajax({
                url: "<?php echo __URL('APP_MAIN/order/ordergoodsrefundaskfor'); ?>",
                type: "post",              
                async: false,
                data: {
                	"order_id": orderId, 
                	"order_goods_id": itemId, 
                	"refund_type": refund_require, 
                	"refund_require_money":refund_money,
                	"refund_reason": refund_reason,
                },
                //$order_id, $order_goods_id, $refund_type, $refund_require_money, $refund_reason
                dataType:"json",
                success: function (response) {
                 	if(response.code>0)
                 	{
                 		window.location.reload();
                 	}else{
                 		showBox(response.message);
                 	}
                    /*if(response.retval == 1){
                    	
                    }else{
                        alert("提交失败、请稍后重试");
                    }*/
                }
            })
        }
    /*function backPage(){
   		window.location.href="<?php echo \think\Config::get('HEIMA_MODULE'); ?>/Orders/myOrderList";
   	}*/
    	//最多退款金额
        function maxRefund() {
//             alert(58);
            var num = parseFloat($("#refund_money").val());
//             alert(num);
            var num2 = parseFloat($("#maxRefundMoney").val());
//             alert(num2);
            if (num < 0 || num >num2 ) {
            	$("#refund_money").focus();
            	showBox("<?php echo lang('member_beyond_refund_amount'); ?>");
            	return;
            }
        };
    /*    function onBridgeReady(){
            WeixinJSBridge.call('hideOptionMenu');
        }

        if (typeof WeixinJSBridge == "undefined"){
            if( document.addEventListener ){
                document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
            }else if (document.attachEvent){
                document.attachEvent('WeixinJSBridgeReady', onBridgeReady); 
                document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
            }
        }else{
            onBridgeReady();
        }*/
    </script>

	
	
		<?php if(hook_is_exist('customtemplate')): ?>
		
			<div class="js-bottom-blank"></div>
			<?php echo hook("customtemplate",['type'=>'wap_common_footer']); else: ?>
		
			<div style="height:58px;"></div>
			<!-- 底部菜单 -->
<div class="fixed bottom">
	<div class="distribution-tip" id="distribution-tip" style="display: none;"></div>
	<dl class="sub-nav nav-b5">
		<dd id="buttom_home">
			<a href="<?php echo __URL('APP_MAIN'); ?>">
				<div class="nav-b5-relative">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/home_check.png"/>
					<span><?php echo lang('home_page'); ?></span>
				</div>
			</a>
		</dd>
		<dd id="buttom_classify">
			<a href="<?php echo __URL('APP_MAIN/goods/goodsclassificationlist'); ?>">
				<div class="nav-b5-relative">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png"/>
					<span><?php echo lang('category'); ?></span>
				</div>
			</a>
		</dd>
		<dd id="buttom_classify">
			<a href="<?php echo __URL('APP_MAIN/index/discount'); ?>">
				<div class="nav-b5-relative">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/my/footer_tb5.png"/>
					<span>限时免费</span>
				</div>
			</a>
		</dd>
		<dd id="bottom_cart">
			<a href="<?php echo __URL('APP_MAIN/goods/cart'); ?>">
				<div class="nav-b5-relative">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/cart_uncheck.png"/>
					<span><?php echo lang('goods_cart'); ?></span>
				</div>
			</a>
		</dd>
		<dd id="bottom_member">
			<a href="<?php echo __URL('APP_MAIN/member/index'); ?>">
				<div class="nav-b5-relative">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/user_uncheck.png"/>
					<span><?php echo lang('member_member_center'); ?></span>
				</div>
			</a>
		</dd>
	</dl>
</div>
			
		<?php endif; ?>
		
	
	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	

</body>
</html>