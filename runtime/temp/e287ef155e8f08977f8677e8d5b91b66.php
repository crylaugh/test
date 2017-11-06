<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:52:"template/wap\default_new\\Member\memberIndexB2C.html";i:1505388348;s:34:"template/wap\default_new\base.html";i:1505553171;s:38:"template/wap\default_new\urlModel.html";i:1505377008;s:43:"template/wap\default_new\bindingmobile.html";i:1504176477;s:36:"template/wap\default_new\footer.html";i:1503047430;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/member_index.css">
<style>
.head{
	border-bottom:0;
}
.member{
	width: 64%;
    float: right;
    margin-top: 26px;
	color:#fff;
}
.img{
	width:100%;
    margin: 5px 0;
}
.code{
    background: #fff;
	overflow: hidden;
}
.rec{
	height: 17px;
    /* margin: 5px 10px; */
    padding: 10px 20px;
	border-bottom: 1px solid #E2E1E1;
	line-height:17px;
}

.module-icon.memberCoupon {
    background:url(__TEMP__/<?php echo $style; ?>/public/images/Coupon.png) no-repeat;
	width: 22px;
    height: 22px;
	float: left;
    margin-top: 9px;
	    margin-right: 10px;
    display: inline-block;
	background-size:100% 100%;
}
.member-info{
	background: rgba(255,79,79, 0.8);
	float:left;
	width:33%;
	color: #fff;
	text-align: center;
	line-height:41px;
}
.vertical-bar{
	border-left: 1px solid rgba(250,250,250,0.6);
	height: 32px;
	vertical-align: middle;
	display: inline-block;
	margin-top:5px;
}
.namer{
    position: absolute;
    left: 103px;
    top: 30px;
}
.signin{
    border-radius: 3px;
    font-size: 10px;
    line-height: 14px;
    padding: 2px 9px;
    float: left;
    position: absolute;
    left: 20px;
    top: 5px;
}
.no{
	color: #F93F40;
	background: yellow;
	border: 1px solid yellow;
}
.yes{
	color: yellow;
	border: 1px solid yellow;
}
.last a{
	position: relative;
}
.tips{
	width: 16px;
	height: 16px;
	background: #F93F40;
	border:1px solid #F93F40; 
	border-radius: 50%;
	font-size: 6px;
	line-height: 16px;
	text-align: center;
	color: #fff;
	position: absolute;
	z-index: 10;
	right: -10px;
	top: -6px;
}
.member_foot{
	width: 100%;
	height: 20px;
	background: url("__TEMP__/<?php echo $style; ?>/public/images/member_foot.png") center no-repeat;
	background-size: 100% 20px;
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
	
	<div class="motify" style="display: none;"><div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div></div>
	
<!--  <section class="head" style="background:#222;">
		<a class="head_back" onclick="window.history.go(-1)" href="javascript:void(0)" style="width:60px;"><i class="icon-back" style="color:#fff;margin-right:10px;"></i><span style="font-size:15px;color:#fff;">返回</span></a>
		<div class="head-title" style="color:#fff;">店铺中心</div>
	</section> -->
<div class="panel memberhead">
	<div class="member_head">
		<a href="javascript:;">
			<p style="margin: 20px 0 10px 0;position:relative;">
				<?php if($isSign == 0): ?>
				<span class="signin no" onclick="signIn();"><?php echo lang('sign_in'); ?></span>
				<?php else: ?>
				<span class="signin yes"><?php echo lang('signed_in'); ?></span>
				<?php endif; ?>
				<i class="face_img" onclick="location.href='<?php echo __URL('APP_MAIN/member/personaldata?shop_id='.$shop_id); ?>'">
				<?php if($member_img == '0'): ?>
					<img src="__TEMP__/<?php echo $style; ?>/public/images/member_default.png" />
				<?php else: ?>
					<img src="<?php echo __IMG($member_img); ?>"  onerror="this.src='__TEMP__/<?php echo $style; ?>/public/images/member_default.png'"/>
				<?php endif; ?>
				</i>
				<span class="account_management" onclick="location.href='<?php echo __URL('APP_MAIN/member/personaldata?shop_id='.$shop_id); ?>'">账户管理<i class="data-go"></i></span>
			</p>
		</a>
		<p class="info-content-top">
			<span><?php echo lang('member_balance'); ?></span>
			<span><?php echo $member_info["user_info"]['nick_name']; ?></span>
			<span><?php echo lang('goods_integral'); ?></span>
		</p>
		<p class="info-content-bottom">
			<a href="<?php echo __URL('APP_MAIN/member/balancewater?shop_id='.$shop_id); ?>"><span><?php echo $member_info['balance']; ?></span></a>
			<span><mark class="level"><?php echo $member_info['level_name']; ?></mark></span>
			<a href="<?php echo __URL('APP_MAIN/member/integralwater?shop_id='.$shop_id); ?>"><span><?php echo $member_info['point']; ?></span></a>
		</p>
	</div>
	<div class="member_foot"></div>
</div>
<div class="control">
	<div class="control_l">
		<span class="control_l_content"><?php echo lang('all_orders'); ?></span>
	</div>
	<div class="control_r"><a href="<?php echo __URL('APP_MAIN/order/myorderlist?shop_id='.$shop_id); ?>" class="right_href"><?php echo lang('member_view_all_orders'); ?></a></div>
</div>

<div class="panel member-nav" >
	<ul class="fu clear" >
		<li class="last" >
			<a href="<?php echo __URL('APP_MAIN/order/myorderlist?shop_id='.$shop_id); ?>">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/pay.png">
				<?php if($unpaidOrder != 0): ?>
					<div class="tips"><?php echo $unpaidOrder; ?></div>
				<?php endif; ?>
				<p><?php echo lang('member_pending_payment'); ?></p>
			</a>
		</li>
		<li class="last">
			<a href="<?php echo __URL('APP_MAIN/order/myorderlist?status=1&shop_id='.$shop_id); ?>">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/send.png">
				<?php if($shipmentPendingOrder != 0): ?>
				<div class="tips"><?php echo $shipmentPendingOrder; ?></div>
				<?php endif; ?>
				<p><?php echo lang('member_shipment_pending'); ?></p>
			</a>
		</li>
		<li class="last">
			<a href="<?php echo __URL('APP_MAIN/order/myorderlist?status=2&shop_id='.$shop_id); ?>">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/recieve.png">
				<?php if($goodsNotReceivedOrder != 0): ?>
				<div class="tips"><?php echo $goodsNotReceivedOrder; ?></div>
				<?php endif; ?>
				<p><?php echo lang('member_goods_received'); ?></p>
			</a>
		</li>
		<li class="last">
			<a href="<?php echo __URL('APP_MAIN/order/myorderlist?status=3&shop_id='.$shop_id); ?>">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/received.png">
				<p><?php echo lang('member_received_goods'); ?></p>
			</a>
		</li>
		<li class="last">
			<a href="<?php echo __URL('APP_MAIN/order/myorderlist?status=4&shop_id='.$shop_id); ?>">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/reback.png"/>
				<?php if($refundOrder != 0): ?>
				<div class="tips"><?php echo $refundOrder; ?></div>
				<?php endif; ?>
				<p><?php echo lang('refund_after_sale'); ?></p>
			</a>
		</li>
	</ul>
</div>

<div class='member_list'>
<?php if(is_array($menu_arr) || $menu_arr instanceof \think\Collection || $menu_arr instanceof \think\Paginator): $i = 0; $__LIST__ = $menu_arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr_item): $mod = ($i % 2 );++$i;?>
	<ul>
		<?php if(is_array($arr_item) || $arr_item instanceof \think\Collection || $arr_item instanceof \think\Paginator): $i = 0; $__LIST__ = $arr_item;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<li>
			<a href="<?php echo __URL('APP_MAIN/'.$vo['url']); ?>">
				<i class=" module-icon <?php echo $vo['class']; ?>" ></i>
				<span ><?php echo $vo['title']; ?></span>
				<span class='jiantou'></span>
			</a>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?> 
	</ul>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div>

<!--distribution contact us end-->
<script type="text/javascript">
$(function(){
	buttomActive('#bottom_member');
	//alert(111);
	//$("#wchat_binding").css("display":"none;");
})	
function signIn(){
	$.ajax({
		type : "post",
		url : "<?php echo __URL('APP_MAIN/member/signIn'); ?>",
		data : {
			"sign" : true
		},
		success : function(data){
			if(data['code']>0){
				$(".signin").not(":hidden").removeClass("no").addClass("yes").text("已签到");
			}
		}
	})
}
</script>

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
	<?php endif; if(hook_is_exist('customtemplate')): ?>
		
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