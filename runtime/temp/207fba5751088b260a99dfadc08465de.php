<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:41:"template/wap\default_new\\Goods\cart.html";i:1503748797;s:34:"template/wap\default_new\base.html";i:1505553171;s:38:"template/wap\default_new\urlModel.html";i:1505377008;s:41:"template/wap\default_new\controGroup.html";i:1503298536;s:43:"template/wap\default_new\bindingmobile.html";i:1504176477;s:36:"template/wap\default_new\footer.html";i:1503047430;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
<meta content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
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
body{
	max-width: 640px;
}
body .sub-nav.nav-b5 dd i {margin: 3px auto 5px auto;}
body .fixed.bottom {bottom: 0;}
.mask-layer-loading{position: fixed;width: 100%;height: 100%;z-index: 999999;top: 0;left: 0;text-align: center;display: none;}
.mask-layer-loading i,.mask-layer-loading img{text-align: center;color:#000000;font-size:50px;position: relative;top:50%;}
.sub-nav.nav-b5 dd{width:25%;font-size:14px;}
</style>

<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/order.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/cart.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/cart.js" type="text/javascript"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/weixincommon.js"></script>
<style>
	.group img{
		margin-top: 0!important;
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
	<a class="head_back" id="head_back" href="javascript:window.history.go(-1)"><i class="icon-back"></i></a>
	<div class="head-title"><span style="margin-left: 40px;"><?php echo lang('goods_cart'); ?></span><style>
*{
	padding:0;
	margin:0;
}
.group{
	display: inline-block;
	width: 44px;
	height: 44px;
	background: #F7F7F7;
	float: right;
	text-align: center;
	border-left: 1px solid #F7F7F7;
}
.group img{
	width: 20px;
	margin-top: 15px;
}
.group-child{
	position: absolute;
	z-index: 10;
	width: 100%;
	height: 60px;
	background: #fff;
	margin-top: 1px;
	border-bottom: 1px solid #E2E2E2;
	display: none;
}
.group-child ul.gorup-nav{
	width: 100%;
}
.group-child ul.gorup-nav li{
	display: inline-block;
	width: 25%;
	height: 59px;
	float: left;
	text-align: center;
}
.group-child ul.gorup-nav li a{
	position: static;
	display: block;
}
.group-child ul.gorup-nav li a div{
	text-align: center;
	height: 54px;
	padding-top: 5px;
}
.group-child ul.gorup-nav li a div img{
	width: 25px;
	height: 25px;
	display: block;
	margin:5px auto 0 auto;
}
.group-child ul.gorup-nav li a div span.nav_name{
	font-size: 13px!important;
	height: 15px;
	display: block;
	color: #979899;
	margin-top: -10px;
}
</style>
<div class="group" data-show="false">
	<img src="__TEMP__/<?php echo $style; ?>/public/images/group.png" alt="">
</div>
<div class="group-child">
	<ul class="gorup-nav">
		<li>
			<a href="<?php echo __URL('APP_MAIN'); ?>">
				<div>
					<img src="__TEMP__/<?php echo $style; ?>/public/images/home_uncheck.png"/>
					<span class="nav_name"><?php echo lang('home_page'); ?></span>
				</div>
			</a>
		</li>
		<li>
			<a href="<?php echo __URL('APP_MAIN/goods/goodsclassificationlist'); ?>">
				<div>
					<img src="__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png"/>
					<span class="nav_name"><?php echo lang('category'); ?></span>
				</div>
			</a>
		</li>
		<li>
			<a href="<?php echo __URL('APP_MAIN/goods/cart'); ?>">
				<div>
					<img src="__TEMP__/<?php echo $style; ?>/public/images/cart_uncheck.png"/>
					<span class="nav_name"><?php echo lang('goods_cart'); ?></span>
				</div>
			</a>
		</li>
		<li>
			<a href="<?php echo __URL('APP_MAIN/member/index'); ?>">
				<div>
					<img src="__TEMP__/<?php echo $style; ?>/public/images/user_uncheck.png"/>
					<span class="nav_name"><?php echo lang('member_member_center'); ?></span>
				</div>
			</a>
		</li>
	</ul>
</div>
<script>
	$(".group").click(function(){
			if($(this).attr("data-show") == "false"){
				$(this).css({"background":"#fff","border-bottom":"1px solid #fff","border-left":"1px solid #E2E2E2"});
				$(".group-child").slideDown();
				$(this).attr("data-show","true");
			}else{
				$(this).css({"background":"#F7F7F7","border-bottom":"none","border-left":"1px solid #F7F7F7"});
				$(".group-child").slideUp();
				$(this).attr("data-show","false");
			}
			
		}
	)
</script></div>
</section>

	<div class="motify" style="display: none;"><div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div></div>
	
<div class="popup" id="popup" style="display: none"></div>
<div class="h50"></div>
<div class="cart-detail">
	<section class="cart-prolist">
		<ul class="cart-prolist-ul" style="border: 0;">
		<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $i=>$cart): $shop_info= explode(",",$i); ?>
			<li data-parent-shopid="<?php echo $shop_info[0]; ?>">
				<h2 class="title">
					<div class="custom-store-img"></div>
					<?php echo lang('shop_name'); ?>：<?php echo $title; ?>
					<div class="cart_ed" >
						<a id="cart_edit<?php echo $shop_info[0]; ?>" data-shopid="<?php echo $shop_info[0]; ?>" onclick="cart_edit(this,<?php echo $shop_info[0]; ?>)" style="display: block;"><?php echo lang('edit'); ?></a>
						<a id="edit_success<?php echo $shop_info[0]; ?>" onclick="cart_succ(this,<?php echo $shop_info[0]; ?>)" style="display: none;"><?php echo lang('member_complete'); ?></a>
					</div>
				</h2>
			</li>
			<?php if(is_array($cart) || $cart instanceof \think\Collection || $cart instanceof \think\Paginator): if( count($cart)==0 ) : echo "" ;else: foreach($cart as $k=>$list): ?>
			<li class="cart-list-li" data-shopid="<?php echo $list['shop_id']; ?>">
				<div class="checkbox" is_check="yes" is_del='no'></div>
				<div class="product">
					<div class="pic">
						<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$list['goods_id']); ?>">
							<img src="<?php echo __IMG($list['picture_info']['pic_cover_micro']); ?>" alt="<?php echo lang('goods_image'); ?>">
						</a>
					</div>
					<div class="info">
						<p class="info-name">
							<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$list['goods_id']); ?>"><?php echo $list['goods_name']; ?><span><br />
							<?php if(!(empty($list['sku_name']) || (($list['sku_name'] instanceof \think\Collection || $list['sku_name'] instanceof \think\Paginator ) && $list['sku_name']->isEmpty()))): ?>
							规格：<?php echo $list['sku_name']; endif; ?></span></a>
						</p>
						<!-- 	<p class="info-price">
						¥<span name="goods_price"><?php echo $list['price']; ?></span>
							<?php if($list['point_exchange_type']==1): ?>
							<span name="goods_integral" data-point="<?php echo $list['point_exchange']; ?>">
								<?php if($list['point_exchange']>0): ?>
									+<?php echo $list['point_exchange']; ?>积分
								<?php endif; ?>
							</span>
							<?php endif; ?>
						</p> -->
						<div class="number">
							¥<span name="goods_price"><?php echo $list['price']; ?></span>
							<?php if($list['point_exchange_type']==1): ?>
							<span name="goods_integral" data-point="<?php echo $list['point_exchange']; ?>">
								<?php if($list['point_exchange']>0): ?>
									+<?php echo $list['point_exchange']; ?><?php echo lang('goods_integral'); endif; ?>
							</span>
							<?php endif; ?>
							<div name="edit_num<?php echo $list['shop_id']; ?>" style="display: inline-block;float: right;position: absolute;bottom: 10px;right: 20px;">
								<span class="ui-number">
									<button type="button" class="decrease" onclick="Cart.changeBar(&#39;-&#39;,<?php echo $list['cart_id']; ?>,this)" title="<?php echo lang('member_reduce'); ?>">-</button>
									<input class="num" name="quantity" autocomplete="off" data-default-num="<?php echo $list['num']; ?>" value="<?php echo $list['num']; ?>" min="1" max="<?php echo $list['stock']; ?>" min_buy="<?php echo $list['min_buy']; ?>"  max_buy="<?php echo $list['max_buy']; ?>" data-cartid="<?php echo $list['cart_id']; ?>" data-shopid="<?php echo $list['shop_id']; ?>">
									<button type="button" class="increase" onclick="Cart.changeBar(&#39;+&#39;,<?php echo $list['cart_id']; ?>,this)" title="<?php echo lang('plus'); ?>">+</button>
								</span>
								<span name="succ_amount" style="display: none;"><?php echo $list['num']; ?></span>
							</div>
						</div>
					</div>
				</div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</section>
</div>
<input type="hidden" id="countlist" value="<?php echo $countlist; ?>">
<section class="cart-none" id="cart-none" style="display: none">
	<i class="cart-big"></i>
	<p class="text"><?php echo lang('your_shopping_cart_is_not_available_yet'); ?>！</p>
	<?php if($shop_id ==0): ?>
	<a href="<?php echo __URL('APP_MAIN'); ?>" class="btn"><?php echo lang('go_for_a_stroll'); ?></a>
	<?php else: ?>
	<a href="<?php echo __URL('APP_MAIN/shop/index?shop_id='.$shop_id); ?>" class="btn"><?php echo lang('go_for_a_stroll'); ?></a>
	<?php endif; ?>
</section>

	<!-- 微信登录弹出绑定手机号遮罩层 -->
	<?php if($tel_is_bind == 1): ?>
		<!-- 遮罩层 -->
<div class="shade" style="position:fixed;top:0px;left:0px;width:100%;height:100%;margin-top:0;background: rgba(0, 0, 0, 0.7);z-index: 999;"><span style="float: right; padding: 15px;font-size: 22px;color: #fff;background: transparent;" id="close"></span></div>
<!-- 微信登录绑定手机号 -->
<div class="modal fade" id="wchat_binding" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
<!-- 			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
				<div class="modal-title" id="myModalLabel">需绑定手机号</div>
			</div>
			<input type="hidden" name="uid" value="<?php echo $uid; ?>" id="session_uid"/>
			<div id="nk_text1" style="display: block;">
					<div class="log-cont" style="margin-top: 20px;">
						<input type="text" name="binding_mobile" id="binding_mobile" placeholder="请填写您的手机号">
					</div>
					<?php if($notify_list['is_use'] == 1): ?>
					<div class="log-cont" style="margin-top:15px;position:relative;">
						<input type="text" id="sms_captcha" name="sms_captcha" placeholder="请输入动态码">
						<span class="getvilidate" id="sendOutCode" onclick="sendOutCode()">获取验证码</span>
					</div>
					<?php endif; ?>
					<input type="hidden" id="mobile_is_has" value="1">
					<input type="hidden" id="bind_user_id" value="<?php echo $uid; ?>">
					<input type="hidden" id="mobile_is_use" value="<?php echo $notify_list['is_use']; ?>"/>
					<div class="loginbotton">
						<button id="login-button" class="lang-btn" onclick="modifyusermobile()">登录并绑定</button>
					</div>
			</div>
		</div>
	</div>
</div>
<!-- 微信登录绑定手机号 -->
<script>
//发送验证码
function sendOutCode(){
	var mobile = $("#binding_mobile").val();
	var user_id = $("#bind_user_id").val();
	//验证手机号格式是否正确
	if(mobile.search(/^1(3|4|5|7|8)\d{9}$/) == -1){
		$("#mobile").trigger("focus");
		layer.msg("请输入正确的手机格式");
		return false;
	}
	//验证手机号是否已经注册
	$.ajax({
		type: "post",
		url: "<?php echo __URL('APP_MAIN/login/checkMobileIsHas'); ?>",
		data: {"mobile":mobile},
		async: false,
		success: function(data){
			if(data != 0){
				layer.msg("当前手机号已被绑定");
				$("#mobile_is_has").val(0);
				return false;
			}else{
				$("#mobile_is_has").val(1);
		 		//判断输入的验证码是否正确 
				$.ajax({
					type: "POST",
					url: "<?php echo __URL('APP_MAIN/Login/sendsmsbindmobile'); ?>",
					data: {"mobile":mobile, "user_id":user_id},
					success: function(data){
// 						alert(JSON.stringify(data));
						if(data['code']=='0'){
							layer.msg("发送成功");
							time();
						}else{
							layer.msg(data["message"]);
							return false;
						}
					}
				});
			}
		} 
	});
}

var wait=120; 
function time() {
	if (wait == 0) {
		$("#sendOutCode").removeAttr("disabled");
		$("#sendOutCode").css("border", "1px solid #FF5073");
		$("#sendOutCode").css("color", "#ff6a88");
		$("#sendOutCode").val("获取验证码"); 
		wait = 120;
	} else {
		$("#sendOutCode").attr("disabled", 'disabled');
		$("#sendOutCode").css("border", "1px solid #ccc");
		$("#sendOutCode").css("color", "#ccc");
		$("#sendOutCode").val(wait+"s后重新发送");
		wait--;
		setTimeout(function() {
		time()},1000);
	}
}

function modifyusermobile(){
	var mobile = $("#binding_mobile").val();
	var uid = $("#session_uid").val();
	var sms_captcha = $("#sms_captcha").val();
	var mobile_is_has = $("#mobile_is_has").val();
	var mobile_is_use = $("#mobile_is_use").val();
	if(mobile == ''){
		$("#binding_mobile").trigger("focus");
		layer.msg('手机号不能为空');
		return false;
	}else if(mobile.search(/^1(3|4|5|7|8)\d{9}$/) == -1){
			$("#binding_mobile").trigger("focus");
			layer.msg('请输入正确的手机格式');
		return false;
	}else if(mobile_is_has == 0){
		layer.msg('当前手机号已被注册');
		return false;
	}
	if(mobile_is_use == 1){
		if(sms_captcha == ''){
			layer.msg('动态码不能为空');
			return false;
		}
	}
	$.ajax({
		type: "POST",
		url: "<?php echo __URL('APP_MAIN/Login/modifybindingmobile'); ?>",
		data: {"mobile":mobile, "sms_captcha" : sms_captcha, "uid":uid},
		success: function(data){
			if(data['code'] > 0){
				layer.msg("绑定成功");
				$("#wchat_binding").hide();
				$(".shade").hide();
			}else if(data["code"] == -10){
				layer.msg("绑定失败");
			}else{
				layer.msg(data["message"]);
			} 
		}
	});
}
</script>
	<?php endif; if(!(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty()))): ?>
<div class="fixed bottom">
	<div class="btn_wrap btn_wrap_static">
		<div class="btn ttn_server" id="div_selected">
			<div style="float: left;height: 20px;width: 20px;padding-left:10px;">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/cartp2.png" is_check="yes" is_del="no" id="select_all" style="width:100%;"/>
			</div>
			<span id="sel_text"><?php echo lang('goods_select_all'); ?></span>
		</div>
		<div id="price_info">
			<?php echo lang('summation'); ?>： ¥<span id="orderprice" class="price"></span>
			<br />
			<!-- <span style="color: #999;">不含运费</span> -->
		</div>
		<button class="btn btn_buy" onclick="settlement()">
			<span id="settlement"><?php echo lang('settle_accounts'); ?>()</span>
		</button>
	</div>
</div>
<?php else: ?>
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
<div class="h60"></div>
<script type="text/javascript">
var cart1 = "__TEMP__/<?php echo $style; ?>/public/images/cartp1.png";
var cart2 = "__TEMP__/<?php echo $style; ?>/public/images/cartp2.png";
//页面加载触发事件
$(function () {
	if(parseInt($("#countlist").val()) == 0){
		$(".cart-prolist").hide();
		$("#cart-none").show();
		// $(".fixed.bottom").hide();
	}
	buttomActive("#bottom_cart");
});
</script>
<script type="text/javascript">
$("#head_back").click(function (){
    var json ={
            "center" : "2"
        }
    window.webkit.messageHandlers.center.postMessage(json);
})
</script>

	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
</body>
</html>