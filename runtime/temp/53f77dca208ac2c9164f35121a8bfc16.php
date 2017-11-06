<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:45:"template/wap\default\\Order\paymentOrder.html";i:1509699224;s:30:"template/wap\default\base.html";i:1507430043;s:34:"template/wap\default\urlModel.html";i:1505377008;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/order.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pro-detail.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/payment_order_new.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/payment_order_popup.css">
<style type="text/css">
	.switch-btn {position: relative; display: block; vertical-align: top; width: 80px; height: 30px; border-radius: 18px; cursor: pointer;}
.checked-switch {position: absolute; top: 0; left: 0; opacity: 0;}
.text-switch {background-color: #fff; border: 1px solid #c8c4c4; border-radius: inherit; color: #fff; display: block; font-size: 15px; height: inherit; position: relative; text-transform: uppercase;}
.text-switch:before, .text-switch:after {position: absolute; top: 50%; margin-top: -.5em; line-height: 1; -webkit-transition: inherit; -moz-transition: inherit; -o-transition: inherit; transition: inherit;}
.text-switch:before {content: attr(data-no); right: 11px;}
.text-switch:after {content: attr(data-yes); left: 11px; color: #00af2c; opacity: 0; border:1px solid #00af2c; }
.checked-switch:checked ~ .text-switch {background-color: #00af2c; border: 1px solid #068506;}
.checked-switch:checked ~ .text-switch:before {opacity: 0;}
.checked-switch:checked ~ .text-switch:after {opacity: 1;}
.toggle-btn {background: linear-gradient(#fff, #fff); border:1px solid #c8c4c4; border-radius: 100%; height: 28px; left: 1px; position: absolute; top: 1px; width: 28px;}
.toggle-btn::before {color: #aaaaaa; content: "|||"; display: inline-block; font-size: 12px; letter-spacing: -2px; padding: 4px 0; vertical-align: middle;}
.checked-switch:checked ~ .toggle-btn {left: 51px;}
 .text-switch, .toggle-btn {transition: All 0.3s ease; -webkit-transition: All 0.3s ease; -moz-transition: All 0.3s ease; -o-transition: All 0.3s ease;}
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
	<a class="head_back" href="<?php echo __URL('APP_MAIN'); ?>"><i class="icon-back"></i></a>
	<div class="head-title"><?php echo lang('order_settlement'); ?></div>
</section>

	<div class="motify" style="display: none;"><div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div></div>
	

<div class="h50"></div>
<?php echo $new_people; if($address_default['id'] != ''): ?>
<div id="addressok">
	<input type="hidden" id="addressid" value="<?php echo $address_default['id']; ?>" />
	<div class="js-order-address express-panel js-edit-address express-panel-edit">
		<ul class="express-detail">
			<a href="<?php echo __URL('APP_MAIN/member/memberaddress?url=cart'); ?>">
				<li class="clearfix">
					<span class="name"><?php echo lang('member_consignee'); ?>：<?php echo $address_default['consigner']; ?></span>
					<span class="tel"><?php echo $address_default['mobile']; ?></span>
				</li>
				<li class="address-detail"><?php echo lang('member_delivery_address'); ?>：<?php echo $address_default['address_info']; ?>-<?php echo $address_default['address']; ?></li>
			</a>
		</ul>
	</div>
</div>
<?php else: ?>
<div class="empty-address-tip">
	<div id="noaddress"><a href="<?php echo __URL('APP_MAIN/member/memberaddress'); ?>"><?php echo lang('member_new_delivery_address'); ?></a></div>
</div>
<?php endif; ?>

<div class="block-item express" style="padding: 0;"></div>
<section class="order">
	<?php if(is_array($itemlist) || $itemlist instanceof \think\Collection || $itemlist instanceof \think\Paginator): if( count($itemlist)==0 ) : echo "" ;else: foreach($itemlist as $key=>$list): ?>
	<div class="order-goods-item clearfix" data-jifen="<?php echo $list['jifen']; ?>" data-subtotal="<?php echo $list['subtotal']; ?>">
		<div class="name-card block-item">
			<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$list['goods_id']); ?>" class="thumb">
				<img src="<?php echo __IMG($list['picture_info']['pic_cover_micro']); ?>" alt="<?php echo $list['goods_name']; ?>" />
			</a>
			<div class="detail">
				<div class="clearfix detail-row">
					<div class="right-col">
						<input type="hidden" name="goods_skuid" value="<?php echo $list['sku_id']; ?>" />
						<input type="hidden" name="goods_point_exchange"/>
						￥<span><?php echo $list['price']; if($list['point_exchange_type']==1): if($list['point_exchange']>0): ?>
								+<?php echo $list['point_exchange']; ?><?php echo lang('goods_integral'); endif; endif; ?>
						</span>
					</div>
					<div class="left-col">
						<h3 style="font-weight: normal;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;overflow: hidden;">
							<a href="javascript:;"><?php echo $list['goods_name']; ?></a>
						</h3>
					</div>
				</div>
				<div class="clearfix detail-row">
					<div class="right-col">
						<div class=" c-gray-darker">
							×<span><?php echo $list['num']; ?></span>
						</div>
					</div>
					<div class="left-col">
						<p class="c-gray-darker" style="display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;overflow: hidden;"><?php if($list['sku_name'] != '0'): ?><?php echo $list['sku_name']; endif; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; endif; else: echo "" ;endif; if(count($coupon_list) >0): ?>
	<div class="item-options" data-flag="use-coupon">
		<label class="float_left"><?php echo lang('member_coupons'); ?></label>
		<span class="arrow-right color-gray"><?php echo lang('member_no_coupons'); ?></span>
	</div>
	<?php endif; ?>
	
	
	<div class="item-options" data-flag="pay" data-select="0">
		<label><?php echo lang('member_payment_method'); ?></label>
		<span class="arrow-right color-gray"><?php echo lang('member_online_payment'); ?></span>
	</div>
	
	<div class="item-options" data-flag="distribution" data-select="0">
		<label><?php echo lang('member_delivery_mode'); ?></label>
		<?php if(!$shop_config['seller_dispatching'] && !$shop_config['buyer_self_lifting']): ?>
		<span class="color-gray"><?php echo lang('member_not_configure_distribution'); ?></span>
		<?php else: if($shop_config['seller_dispatching']): ?>
			<span class="arrow-right color-gray"><?php echo lang('member_merchant_distribution'); ?></span>
			<?php elseif($shop_config['buyer_self_lifting']): ?>
			<span class="arrow-right color-gray"><?php echo lang('member_stores_from_mentioning'); ?></span>
			<?php endif; endif; ?>
	</div>
	
	<!-- 开启商家配送并且有物流公司显示 -->
	<?php if($shop_config['seller_dispatching']): if($address_is_have == 1): if($express_company_count == 0): ?>
			<div class="item-options" data-flag="express_company" data-select="-1">
				<label><?php echo lang('member_logistics_company'); ?></label>
				<span class="arrow-right color-gray"><?php echo lang('member_not_set_up'); ?></span>
			</div>
			<?php elseif(count($express_company_list)): if(is_array($express_company_list) || $express_company_list instanceof \think\Collection || $express_company_list instanceof \think\Paginator): if( count($express_company_list)==0 ) : echo "" ;else: foreach($express_company_list as $k=>$company): if($k==0): ?>
			<div class="item-options" data-flag="express_company" data-select="<?php echo $company['co_id']; ?>" data-express-fee="<?php echo $company['express_fee']; ?>">
				<label><?php echo lang('member_logistics_company'); ?></label>
				<span class="arrow-right color-gray"><?php echo $company['company_name']; ?></span>
			</div>
			<?php endif; endforeach; endif; else: echo "" ;endif; else: ?>
			<div class="item-options" data-flag="express_company" data-select="-2">
				<label><?php echo lang('member_logistics_company'); ?></label>
				<span class="arrow-right color-gray"><?php echo lang('member_not_freight_template'); ?></span>
			</div>
			<?php endif; else: ?>
			<div class="item-options" data-flag="express_company" data-select="-2">
				<label><?php echo lang('member_logistics_company'); ?></label>
				<span class="arrow-right color-gray"><?php echo lang('please_fill_in_or_select_the_delivery_address_first'); ?></span>
			</div>
		<?php endif; endif; ?>
	
	<div class="item-options" data-flag="pickup_address" data-id="0" data-count="<?php echo $pickup_point_list['total_count']; ?>" style="display:none;">
		<label><?php echo lang('member_self_addressed_address'); ?></label>
		<span class="arrow-right color-gray"></span>
	</div>
	
	<?php if($shop_config['order_balance_pay'] == 1): if($new_people): ?>
	<div class="item-options">
		<label>使用开户积分<b class="account_balance">￥<?php echo $member_account['balance']; ?></b></label>
		<span>
			<?php echo lang('use'); ?><input type="text" id="account_balance" data-max="<?php echo $member_account['balance']; ?>" disabled value="<?php echo $jihuo_info[promotion_price]-$jihuo_info[jifen]; ?>" /><?php echo lang('element'); ?>
		</span>
	</div>
	<?php endif; endif; if(count($shop_config['order_invoice_content_list'])): ?>
	<div class="item-options" data-flag="invoice" data-select="0">
		<label><?php echo lang('member_invoice_information'); ?><span style="font-size:12px;color:#FF9800;font-weight:bold;"></span></label>
		<span class="arrow-right color-gray"><?php echo lang('member_no_invoice_required'); ?></span>
	</div>
	
	<div class="item-options invoice">
		<label><span style="font-size:12px;color:#FF9800;font-weight:bold;"><?php echo lang('will_collect'); ?><?php echo $shop_config['order_invoice_tax']; ?>%<?php echo lang('member_invoice_tax_rate'); ?></span></label>
	</div>
	
	<div class="item-options invoice">
		<label><?php echo lang('member_invoice_header'); ?></label>
		<textarea id="invoice-title" maxlength="50" placeholder="<?php echo lang('member_personal_or_company_invoice'); ?>"></textarea>
	</div>
	
	<div class="item-options invoice">
		<label><?php echo lang('member_taxpayer_identification_number'); ?></label>
		<textarea id="taxpayer-identification-number" maxlength="50" placeholder="<?php echo lang('member_taxpayer_identification_number'); ?>"></textarea>
	</div>
	
	
	<div class="item-options invoice" data-flag="invoice-content">
		<label><?php echo lang('member_invoice_content'); ?></label>
		<span class="arrow-right color-gray"><?php echo lang('select_invoice_content'); ?></span>
	</div>
	<?php endif; ?>
	
	<div class="item-options">
		<label><?php echo lang('member_buyer_message'); ?></label>
		<textarea id="leavemessage" placeholder="<?php echo lang('leave_a_message_for_the_seller'); ?>" maxlength="100"></textarea>
	</div>
	
	
	<div class="order-list">
		<h3><?php echo lang('member_settlement_information'); ?></h3>
		<p>
			<label><?php echo lang('goods_total'); ?><b class="orange-bold js-goods-num">1</b><?php echo lang('member_kinds_of_goods'); ?>&nbsp;<?php echo lang('member_total'); ?></label>
			<span>￥<b class="js-total-money">0.00</b></span>
		</p>
		
		<p>
			<label><?php echo lang('goods_freight'); ?></label>
			<span>￥<b id="express">0.00</b></span>
		</p>
		
		<p>
			<label><?php echo lang('member_total_discount'); ?></label>
			<span>￥<b id="discount_money">0.00</b></span>
		</p>
		
		
		<?php if(count($shop_config['order_invoice_content_list'])>0): ?>
		<p>
			<label><?php echo lang('member_invoice_tax'); ?>：</label>
			<span>￥<b id="invoice_tax_money">0.00</b></span>
		</p>
		<?php endif; if($shop_config['order_balance_pay'] == 1): ?>
		<p>
			<label><?php echo lang('member_use_balance'); ?>：</label>
			<span>￥<b id="use_balance">0.00</b></span>
		</p>
		<?php endif; ?>
	</div>
	<div class="switch_nav" style=" padding-bottom:5em;">
	<span style="float: left;margin: 20px 10px 0;">
		<span id="jfdk_wz">可用<b id="jilu_jifen" class="keyong_jifen">0</b>商城消费积分抵￥<b class="keyong_jifen">0</b>元</span>
	</span>
	<span style="padding-top:20px;float: right;">
		<label class="switch-btn circle-style">
	          <input class="checked-switch" type="checkbox" value="1" name="sfjfdy" id="sfjfdy" autocomplete="off" onchange="cxjszj()" checked="checked">
	          <span class="text-switch"></span> 
	          <span class="toggle-btn"></span> 
			</label>
		
	    <input type="hidden" id="jfdyje" value="0" name="jfdyje" autocomplete="off">
	    <div style="display: none;" user_point="<?php echo $member_account['point']; ?>"></div>
	</span>
	<div style="height: 50px"></div>
</div>
</section>

	

<!-- <div class="footer" style="min-height: 86px;" id="bottom_copyright">
	<div class="copyright">
		<div class="ft-copyright">
			<img src="__TEMP__/<?php echo $style; ?>/public/images/logo_copy.png" id="copyright_logo_wap">
			<a href="<?php echo __URL('APP_MAIN'); ?>" target="_blank" id="copyright_companyname"></a>
		</div>
	</div>
</div> -->



<div class="order-total-pay bottom-fix">
	<div class="pay-container clearfix">
		<span class="c-gray-darker font-size-12"><?php echo lang('member_amount_payable'); ?>：</span>
		<span class="font-size-16 theme-price-color">￥<b id="realprice">0.00</b></span>
		<?php if($count_point_exchange>0): ?>
		<span class="font-size-16 theme-price-color" id="count-point">+<?php echo $count_point_exchange; ?><?php echo lang('goods_integral'); ?></span>
		<?php endif; ?>
		<button class="commit-bill-btn" onclick="submitOrder()"><?php echo lang('member_place_order'); ?></button>
		<input type="hidden" id="hidden_new_people" value="<?php echo $new_people; ?>" />
		<input type="hidden" id="hidden_fixed_point" value="<?php echo $jihuo_info[promotion_price]-$jihuo_info[jifen]; ?>" />
		<input type="hidden" id="hidden_count_point_exchange" value="<?php echo $count_point_exchange; ?>" />
		<input type="hidden" id="hidden_goods_sku_list" value="<?php echo $goods_sku_list; ?>"/>
		<input type="hidden" id="hidden_discount_money" value="<?php echo $discount_money; ?>" />
		<input type="hidden" id="hidden_express" value="<?php echo $express; ?>" />
		<input type="hidden" id="hidden_count_money" value="<?php echo $count_money; ?>" />
		<input type="hidden" id="count_point_exchange" value="<?php echo $count_point_exchange; ?>"/>
		<input type="hidden" id="hidden_full_mail_money" value="<?php echo $promotion_full_mail['full_mail_money']; ?>"/>
		<input type="hidden" id="hidden_full_mail_is_open" value="<?php echo $promotion_full_mail['is_open']; ?>"/>
		<input type="hidden" id="goods_sku_list" value="<?php echo $goods_sku_list; ?>" />
		<input type="hidden" id="hidden_order_invoice_tax" value="<?php echo $shop_config['order_invoice_tax']; ?>"/>
		<input type="hidden" id="hidden_pick_up_money" value="<?php echo $pick_up_money; ?>"/>
	</div>
</div>

<!----------------------------- 弹出层 ------------------------------>
<div class="mask-layer"></div>

<?php if(count($coupon_list)): ?>
<!-- 选择优惠券弹出框 -->
<div class="mask-layer-control" data-flag="use-coupon">
	<div class="header"><?php echo lang('choose_coupons'); ?><span class="close"></span></div>
	<div class="list">
		<ul>
			<li class="item active">
				<div class="check-img"></div>
				<div class="single"><?php echo lang('member_no_coupons'); ?></div>
			</li>
			<?php if(is_array($coupon_list) || $coupon_list instanceof \think\Collection || $coupon_list instanceof \think\Paginator): $i = 0; $__LIST__ = $coupon_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$coupon): $mod = ($i % 2 );++$i;?>
			<li class="item" data-id="<?php echo $coupon['coupon_id']; ?>" data-code="<?php echo $coupon['coupon_code']; ?>" data-money="<?php echo $coupon['money']; ?>">
				<div class="check-img"></div>
				<div>
					<p class="font-size-12"><?php echo $coupon['coupon_name']; ?><em class="pull-right"><?php echo $coupon['money']; ?><?php echo lang('element'); ?></em></p>
					<p class="font-size-12 c-gray-darker"><?php echo lang('member_full'); ?><?php echo $coupon['at_least']; ?><?php echo lang('element'); ?><?php echo lang('member_reduce'); ?><?php echo $coupon['money']; ?><?php echo lang('element'); ?></p>
				</div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<div class="footer">
		<button class="btn-green" style="margin: 0px;"><?php echo lang('goods_determine'); ?></button>
	</div>
</div>
<!-- 选择优惠券弹出框 -->
<?php endif; ?>

<!-- 选择支付方式弹出框 -->
<div class="mask-layer-control" data-flag="pay">
	<div class="header"><?php echo lang('choose_payment_method'); ?><span class="close"></span></div>
	<div class="list">
		<ul>
			<li class="item active" data-flag="0">
				<div class="check-img"></div>
				<div class="single"><?php echo lang('member_online_payment'); ?></div>
			</li>
			<!-- 为了用户更好的体验和理解，只要开启了货到付款就显示，不再考虑配送方式是否开启，是否有物流公司等 -->
<!-- 		if condition="$shop_config.order_delivery_pay && $shop_config.seller_dispatching && count($express_company_list)"	 -->
			<?php if($shop_config['order_delivery_pay']): ?>
			<li class="item" data-flag="4">
				<div class="check-img"></div>
				<div class="single"><?php echo lang('member_cash_on_delivery'); ?></div>
			</li>
			<?php endif; ?>
		</ul>
	</div>
	<div class="footer">
		<button class="btn-green" style="margin: 0px;"><?php echo lang('goods_determine'); ?></button>
	</div>
</div>
<!-- 选择支付方式弹出框 -->

<!-- 选择配送方式弹出框 -->
<div class="mask-layer-control" data-flag="distribution" data-is-logistics="<?php echo $shop_config['is_logistics']; ?>">
	<div class="header"><?php echo lang('choose_delivery_address'); ?><span class="close"></span></div>
	<?php if(!$shop_config['seller_dispatching'] && !$shop_config['buyer_self_lifting']): ?>
		<p style="padding: 30px;text-align: center;"><?php echo lang('member_not_configure_distribution'); ?></p>
	<?php else: ?>
	<div class="list">
		<ul>
			<!-- 为了用户更好的体验和理解，只要开启了商家配送，就显示。不考虑是否有物流公司 -->
<!-- 			if condition="$shop_config.seller_dispatching && count($express_company_list)" -->
			<?php if($shop_config['seller_dispatching']): ?>
			<li class="item active" data-flag="1">
				<div class="check-img"></div>
				<div class="single"><?php echo lang('member_merchant_distribution'); ?></div>
			</li>
			<?php endif; if($shop_config['buyer_self_lifting']): ?>
			<li class="item" data-flag="2">
				<div class="check-img"></div>
				<div class="single"><?php echo lang('member_stores_from_mentioning'); ?></div>
			</li>
			<?php endif; ?>
		</ul>
	</div>
	<div class="footer">
		<button class="btn-green" style="margin: 0px;"><?php echo lang('goods_determine'); ?></button>
	</div>
	<?php endif; ?>
</div>
<!-- 选择配送方式弹出框 -->

<!-- 选择物流公司弹出框 -->
<?php if($shop_config['seller_dispatching']): ?>
<div class="mask-layer-control" data-flag="express_company">
	<div class="header"><?php echo lang('the_choice_of_logistics_company'); ?><span class="close"></span></div>
	<?php if($express_company_count == 0): ?>
	<p style="padding: 30px;text-align: center;"><?php echo lang('member_not_set_up'); ?></p>
	<?php elseif(count($express_company_list)): ?>
		<div class="list">
			<ul>
				<?php if(is_array($express_company_list) || $express_company_list instanceof \think\Collection || $express_company_list instanceof \think\Paginator): if( count($express_company_list)==0 ) : echo "" ;else: foreach($express_company_list as $k=>$company): ?>
				<li class="item <?php if($k==0): ?>active<?php endif; ?>" data-coid="<?php echo $company['co_id']; ?>" data-express-fee="<?php echo $company['express_fee']; ?>">
					<div class="check-img"></div>
					<div class="single"><?php echo $company['company_name']; ?></div>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="footer">
			<button class="btn-green" style="margin: 0px;"><?php echo lang('goods_determine'); ?></button>
		</div>
	<?php else: ?>
	<p style="padding: 30px;text-align: center;"><?php echo lang('member_not_freight_template'); ?></p>
	<?php endif; ?>
</div>
<?php endif; ?>
<!-- 选择物流公司弹出框 -->

<?php if($shop_config['buyer_self_lifting']): ?>
<!-- 选择自提地址弹出框 -->
<div class="mask-layer-control" data-flag="pickup_address">
	<div class="header"><?php echo lang('member_select_own_address'); ?><span class="close"></span></div>
	<?php if($pickup_point_list['total_count']): ?>
	<div class="list">
		<ul>
			<?php if(is_array($pickup_point_list['data']) || $pickup_point_list['data'] instanceof \think\Collection || $pickup_point_list['data'] instanceof \think\Paginator): if( count($pickup_point_list['data'])==0 ) : echo "" ;else: foreach($pickup_point_list['data'] as $k=>$pickup): ?>
			<li class="item <?php if($k==0): ?>active<?php endif; ?>" data-id="<?php echo $pickup['id']; ?>">
				<div class="check-img"></div>
				<div class="single"><?php echo $pickup['province_name']; ?>&nbsp;<?php echo $pickup['city_name']; ?>&nbsp;<?php echo $pickup['dictrict_name']; ?>&nbsp;<?php echo $pickup['address']; ?></div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<div class="footer">
		<button class="btn-green" style="margin: 0px;"><?php echo lang('goods_determine'); ?></button>
	</div>
	<?php else: ?>
	<p style="padding: 30px;text-align: center;"><?php echo lang('member_not_configured'); ?></p>
	<?php endif; ?>
</div>
<!-- 选择自提地址弹出框 -->
<?php endif; ?>

<!-- 选择发票信息弹出框 -->
<div class="mask-layer-control" data-flag="invoice">
	<div class="header"><?php echo lang('select_invoice'); ?><span class="close"></span></div>
	<div class="list">
		<ul>
			<li class="item active" data-flag="0">
				<div class="check-img"></div>
				<div class="single"><?php echo lang('member_no_invoice_required'); ?></div>
			</li>
			<li class="item" data-flag="1">
				<div class="check-img"></div>
				<div class="single"><?php echo lang('member_invoice_required'); ?></div>
			</li>
		</ul>
	</div>
	<div class="footer">
		<button class="btn-green" style="margin: 0px;"><?php echo lang('goods_determine'); ?></button>
	</div>
</div>
<!-- 选择发票信息弹出框 -->

<?php if(count($shop_config['order_invoice_content_list'])): ?>
<!-- 选择发票内容信息弹出框 -->
<div class="mask-layer-control" data-flag="invoice-content">
	<div class="header"><?php echo lang('select_invoice_content'); ?><span class="close"></span></div>
	<div class="list">
		<ul>
			<?php if(is_array($shop_config['order_invoice_content_list']) || $shop_config['order_invoice_content_list'] instanceof \think\Collection || $shop_config['order_invoice_content_list'] instanceof \think\Paginator): if( count($shop_config['order_invoice_content_list'])==0 ) : echo "" ;else: foreach($shop_config['order_invoice_content_list'] as $k=>$invoice): ?>
			<li class="item <?php if($k==0): ?>active<?php endif; ?>">
				<div class="check-img"></div>
				<div class="single"><?php echo $invoice; ?></div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<div class="footer">
		<button class="btn-green" style="margin: 0px;"><?php echo lang('goods_determine'); ?></button>
	</div>
</div>
<!-- 选择发票内容信息弹出框 -->
<?php endif; ?>
<!----------------------------- 弹出层 ------------------------------>


	
	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/payment_order.js"></script>


</body>
</html>