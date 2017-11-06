<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:59:"template/wap\default_new\Goods\goodsClassificationList.html";i:1503748797;s:34:"template/wap\default_new\base.html";i:1505553171;s:38:"template/wap\default_new\urlModel.html";i:1505377008;s:49:"template/wap\default_new\Index\controlSearch.html";i:1503654949;s:43:"template/wap\default_new\bindingmobile.html";i:1504176477;s:36:"template/wap\default_new\footer.html";i:1503047430;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/components.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/group_goods_list.css">
<style>
.custom-search-button{top:6px;}
.category{width:95%;margin:10px auto;display: none;}
.category img{display: inline-block;width: 100%;}
.nothing-data{margin-top:50%;}
.custom-tag-list-goods dl{width:100%;}
.custom-tag-list-goods dt a {padding:0 10px;}
.custom-tag-list{height:92%;}
/* .category img{
	display: inline-block;
    vertical-align: middle;
    width: 100%;
    height: auto;
} */
/* .custom-tag-list,.custom-tag-list .custom-tag-list-menu-block,.custom-tag-list .custom-tag-list-goods{height:initial;}
 body{ 
	height:initial;
} */ 
.controlSearch {
    width: 85%;
    padding: 0; 
    background: none; 
    margin: 8px 0 5px 9%;
}
.controlSearch .control-search-input{
	height: 30px;
	border-bottom-left-radius: 15px;
    border-top-left-radius: 15px;
    overflow: hidden;
    border-bottom-right-radius: 15px;
    border-top-right-radius: 15px;
}
.controlSearch .control-search-input .search-input {
    width: 72%;
    height: 20px;
    line-height: 20px;
    margin: 4px 0;
    padding: 0 15px;
    border: none;
    color: #999;
    float: left;
    font-size: 13px;
    background:#EFEFEF;
}
.controlSearch .control-search-input .search-button{
	margin: 4px 0;
}
.more{
	height: 4rem;
	display: flex;
	align-items: center;
	justify-content: center;
	color: #333;
}
.pull_icon{
	width: 25px;
	height: 25px;
	background-image: url('__TEMP__/<?php echo $style; ?>/public/images/pull.png');
	background-repeat: no-repeat;
	background-position: center;
	background-size: 25px;
	transition: all .5s;
}
.more span{
	padding-left: .5rem;
}

.scroller{
	background-color: #fff;
}


.more .flip{
	transform: rotate(180deg);
}
.loading{
	background-image: url('__TEMP__/<?php echo $style; ?>/public/images/loading.png');
	background-repeat: no-repeat;
	background-position: center;
	background-size: 25px;
	width: 25px;
	height: 25px;
	position: relative;
	display: inherit;
}
.more i.loading{
    transform: rotate(0deg) translateZ(0);
    transition-duration: 0;
    animation-name: loading;
    animation-duration: 2s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
}

@-webkit-keyframes loading {
  from {
    -webkit-transform: rotate(0deg) translateZ(0);
  }
  to {
    -webkit-transform: rotate(360deg) translateZ(0);
  }
}
.custom-tag-list .custom-tag-list-goods .custom-tag-list-goods-detail .custom-tag-list-goods-buy img {
    max-width: 120%;
    max-height: 120%;
}
/*#goods_list{
	margin-bottom: 40px;
}*/
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
	<a class="head_back" id="head_back" href="<?php echo __URL('APP_MAIN'); ?>"><i class="icon-back"></i></a>
	<div class="head-title"><span><script src="__TEMP__/<?php echo $style; ?>/public/js/public_assembly.js"></script>
<div class="controlSearch">
	<div class="control-search-input">
		<input type="text" class="search-input custom-search-input" placeholder="<?php echo lang('search_goods'); ?>">
		<button type="button" class="search-button custom-search-button"><?php echo lang('search'); ?></button>
		<input type="hidden" value="<?php echo $shop_id; ?>" id="hidden_shop_id"/>
	</div>
</div>
</span></div>
</section>

	<div class="motify" style="display: none;"><div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div></div>
	
	<!-- 平台商品分类 -->
	<!-- 搜索框样式 -->
<div class="custom-tag-list clearfix">
<!-- 	<div class="mask" id="grouGoodsListmask"></div> -->
	<?php if(count($goods_category_list_1)): ?>
	<div class="custom-tag-list-menu-block">
		<ul class="custom-tag-list-side-menu" style="position: relative;width:100%;background:#fff;" id='goods_group'>
			<li val="<?php echo $category['category_id']; ?>">
				<a class="selected" onclick="showChildGoods(this,0)" data-category-id="0"><span>全部</span></a>
			</li>
			<?php if(is_array($goods_category_list_1) || $goods_category_list_1 instanceof \think\Collection || $goods_category_list_1 instanceof \think\Paginator): if( count($goods_category_list_1)==0 ) : echo "" ;else: foreach($goods_category_list_1 as $k=>$category): ?>
			<li val="<?php echo $category['category_id']; ?>">
				<a onclick="showChildGoods(this,<?php echo $category['category_id']; ?>)" data-category-id="<?php echo $category['category_id']; ?>"><span><?php echo $category['short_name']; ?></span></a>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			<li class="sc"></li>
		</ul>
	</div>
	<?php endif; ?>
	<div class="custom-tag-list-goods">	
		<div id="showContent">
			<ul id="goods_list">
				
			</ul>
			<div id="empty_info" style="display: none;text-align: center;margin-bottom: 55px;margin-top: 10px;font-size: 10px;">
				没有更多数据了</div>
			<!-- <div id="wrapper">
				<div class="more"><i class="pull_icon"></i><span>上拉加载...</span></div>
			</div> -->
		</div>	
	</div>
</div>
<input type="hidden" id="pageNum" value="1">
<input type="hidden" id="category_id" value="1">
<input type="hidden" id="page_count">
<script src="__TEMP__/<?php echo $style; ?>/public/js/public_assembly.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/iscroll.js"></script>
<script>
$(function(){
	buttomActive('#buttom_classify');
	//默认显示选择的第一个商品分类数据
	if($("#goods_group li .selected").attr("data-category-id") != undefined){
		showCategorySecond($("#goods_group li .selected"),$("#goods_group li .selected").attr("data-category-id"));
	}
	
	//将没有第三级的商品分类过滤
	$("[class*='js-category']").each(function(){
		if($(this).find(".catalog-info").length == 0){
			$(this).find("dd").remove();
		}
	});

	showChildGoods($("[data-category-id='0']"),0);
});

//显示二级分类
function showCategorySecond(obj,category_id){
	//设置选中效果
	$(".custom-tag-list-side-menu li a").removeClass("selected");
	$(obj).addClass("selected");
	$("[class*='js-category']").hide();
	$("[class$='js-category-"+category_id+"']").show();
	if($("dl[class='js-category-"+category_id+"']").length == 0){
		$(".js-children").show();
	}else{
		$(".js-children").hide();
	}
}
function showChildGoods(obj,category_id){
	//设置选中效果
	$(".custom-tag-list-side-menu li a").removeClass("selected");
	$("#empty_info").hide();
	$(obj).addClass("selected");
	$("#pageNum").val(1);
	$("#category_id").val(category_id);
	$("#page_count").val('');
	is_repeat = false;
	$.ajax({
		type : "post",
		url : "<?php echo __URL('APP_MAIN/Goods/getCategoryChildGoods'); ?>",
		data : { "category_id" : category_id },
		success : function(data){
			// alert(JSON.stringify(data));
			$("#page_count").val(data['page_count']);
			var html = '';
			if(data['data'].length > 0){
				for (var i = 0; i < data['data'].length; i++) {
					html += '<li class="custom-tag-list-single-goods clearfix">';

					html +=	'<a href="'+__URL('APP_MAIN/goods/goodsdetail?id='+data["data"][i]["goods_id"])+'" class="custom-tag-list-goods-img">';
					html +=	'<img class="js-lazy" src="'+__IMG(data['data'][i]['pic_cover_small'])+'" style="display: block;"></a>';
					html += '<div class="custom-tag-list-goods-detail">';
					html += '<a href="'+__URL('APP_MAIN/goods/goodsdetail?id='+data["data"][i]["goods_id"])+'" class="custom-tag-list-goods-title">'+data['data'][i]['goods_name']+'</a>';
					html += '<span class="custom-tag-list-goods-price">￥'+data['data'][i]['promotion_price']+'</span>';
					html += '<a class="custom-tag-list-goods-buy js-custom-tag-list-goods-buy" href="javascript:CartGoodsInfo('+data['data'][i]['goods_id']+','+data['data'][i]['state']+')" data-buyway="1" data-alias="m2nx2p6x" data-postage="0" data-id="22569525" data-isvirtual="0">';
					html += '<img src="__TEMP__/<?php echo $style; ?>/public/images/add-cart.png"></a></div></li>';
				}
			}else{
				html += '<div class="nothing-data js-children" align="center" >';
				html += '<img src="__TEMP__/<?php echo $style; ?>/public/images/wap_nodata.png"/>';
				html += '<div><?php echo lang("no_goods_under_current_merchandise_classification"); ?>...</div></div>';
			}
			$("#goods_list").html(html);
		}
	})
}

$(".custom-tag-list-goods").scroll(function(){
	 var $this =$(this),
	 viewH =$(this).height(),//可见高度
	 contentH =$("#goods_list").height(),//内容高度
	 scrollTop =$(this).scrollTop();//滚动高度
	if(contentH - viewH - scrollTop <= 10) { //到达底部100px时,加载新内容
		pullUpAction();
	}
});
var is_repeat = false;
function pullUpAction(){
	if(is_repeat){
		return false;
	}
	is_repeat = true;
	var category_id = $("#category_id").val();
	var page = parseInt($("#pageNum").val())+1;
	var page_count = $("#page_count").val();
	if(page > page_count){
		$("#empty_info").show();
		return false;
	}else{
		$.ajax({
			type : "post",
			url : "<?php echo __URL('APP_MAIN/Goods/getCategoryChildGoods'); ?>",
			data : { "category_id" : category_id, "page" :page },
			success : function(data){
				var html = $("#goods_list").html();
				if(data['data'].length > 0){
					for (var i = 0; i < data['data'].length; i++) {
						html += '<li class="custom-tag-list-single-goods clearfix">';
						html +=	'<a href="'+__URL('APP_MAIN/goods/goodsdetail?id='+data["data"][i]["goods_id"])+'" class="custom-tag-list-goods-img">';
						html +=	'<img class="js-lazy" src="'+__IMG(data['data'][i]['pic_cover_small'])+'" style="display: block;"></a>';
						html += '<div class="custom-tag-list-goods-detail">';
						html += '<a href="'+__URL('APP_MAIN/goods/goodsdetail?id='+data["data"][i]["goods_id"])+'" class="custom-tag-list-goods-title">'+data['data'][i]['goods_name']+'</a>';
						html += '<span class="custom-tag-list-goods-price">￥'+data['data'][i]['promotion_price']+'</span>';
						html += '<a class="custom-tag-list-goods-buy js-custom-tag-list-goods-buy" href="javascript:CartGoodsInfo('+data['data'][i]['goods_id']+','+data['data'][i]['state']+')" data-buyway="1" data-alias="m2nx2p6x" data-postage="0" data-id="22569525" data-isvirtual="0">';
						html += '<img src="__TEMP__/<?php echo $style; ?>/public/images/add-cart.png"></a></div></li>';
					}
				}
				$("#pageNum").val(page+1);
				$("#goods_list").html(html);
				is_repeat = false;
			}
		});
	}
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