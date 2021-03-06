<?php if (!defined('THINK_PATH')) exit(); /*a:12:{s:37:"template/wap\default\Index\index.html";i:1509689241;s:30:"template/wap\default\base.html";i:1507430043;s:34:"template/wap\default\urlModel.html";i:1505377008;s:31:"template/wap\default\share.html";i:1499844399;s:45:"template/wap\default\Index\controlSearch.html";i:1502935840;s:44:"template/wap\default\Index\controlSlide.html";i:1503743332;s:45:"template/wap\default\Index\controlNotice.html";i:1502542602;s:42:"template/wap\default\Index\controlNav.html";i:1509346270;s:45:"template/wap\default\Index\controlCoupon.html";i:1502935840;s:47:"template/wap\default\Index\controlDiscount.html";i:1509688434;s:32:"template/wap\default\footer.html";i:1507607166;s:39:"template/wap\default\shareContents.html";i:1501656003;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/control_type.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/goods_list.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/group_buy.css">
<!-- <link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/my/style.css"> -->
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/my/swiper.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/my/swiper.js"></script>
<style type="text/css">
.custom-search-button{top: 1px;}
.sliding {overflow-y: auto;background: #ffffff;}
.sliding::-webkit-scrollbar {display: none;}
.sliding ul {white-space: nowrap;text-align: center;}
.sliding ul li {padding: 10px 10px 0 10px;display: inline-block;background: #ffffff;border-right: 2px solid #f8f8f8;width:25%;}
.sliding ul li img{width:60px;height:60px;}
.members_goodspic{border-bottom:1px solid #f3f3f3;}
.info p.goods-title{padding-top:10px;}
.info p.goods-price{margin:0;margin-bottom:8px;}
.controltype{height:35px;margin:0;width:100%;line-height:32.5px;}
.controltype>.control_l_content{top:0;background: none;}
.info p.goods-price>em{font-size:12px;font-weight:bold;color:#f23030;}
.popup{background: none;padding:0;}
.code{
    width: 60%;
    margin: 0 auto;
    background: #fff;
    border-radius: 13px;
}
.controltype>.control_l_content {
    width: 34%;
}
.members_goodspic>ul>li.gooditem>div.info {
     margin-top: 0px; 
}
.com-content{
	min-height:600px;
}
.category_name{
    height: 30px;
    line-height: 30px;
    padding: 5px 10px;
    background: #fff;
}
.imgs{
	height:150px;
}
.floor{
	margin-top:10px;
}
.floor-right-nav{
	float:right;
	font-size:12px;
	color:#FF4E00;
	font-weight:bold;
}
.floor-left-nav{
	float:left;
	font-size:15px
}
.floor .members_goodspic ul li:nth-child(1),.floor .members_goodspic ul li:nth-child(2){
	margin-top:0;
}
.floor .category_name{
	border-bottom:1px solid #eee;
}




.index_news{overflow: hidden;padding: 10px 5%;background: #fff url(__TEMP__/<?php echo $style; ?>/public/images/my/hot-new.png) no-repeat 10% center;background-size: auto 50%; height:70px; margin-top:0.6em;}
.hot-new {height:32px;line-height:32px;position: relative;z-index: 0;}
.hot-new .new-list{position: absolute;left: 100px;right: 10px;top:1px}
.hot-new .kmm-more{position: absolute;right: 10px;}
.hot-new .kmm-more a{display: block;height: 32px;width: 50px;background: url(__TEMP__/<?php echo $style; ?>/public/images/my/kmm_more.png) right center no-repeat;background-size: auto 50%}
.hot-new .swiper-container {height: 100%;font-size: 14px;
}
.hot-new .swiper-slide {white-space: nowrap;overflow: hidden;text-overflow: ellipsis;}
.index_newsbt{position: absolute; left:70px; top:5px;}
.index_newsbt span{ display:block; height:2em; line-height:2em; border:1px solid #0b0205; width:3em; text-align:center; font-size:0.8em; border-radius:0.4em; color:#d53520;}
/*index_Area*/
.index_Area{ background:#fff; overflow: hidden;padding: 0px 5%; margin-top:0.6em;}
.index_Area ul{ float:left; width:100%;}
.index_Area ul li{ float:left; width:49.6%; padding:10px 0px;}
.index_Area ul li .tbox{ width:100%;display:block;height:100%;overflow:hidden;}
.index_Area ul li .tbox i{ display:block; width:4em; height:4em; margin-right:0.4em;}
.index_Area ul li .tbox i img{ display:block; width:100%; height:100%;}
.index_Area ul li .tbox div.index_Areacn{width:100%; padding:0em 0.4em 0em 0.4em;overflow:hidden; splay:table-cell; vertical-align:top; }
.index_Area ul li .tbox div.index_Areacn span{ display:block; font-size:1em; color:#333333; font-weight:bold; letter-spacing:-1px;}
.index_Area ul li .tbox div.index_Areacn p{ display:block; font-size:0.8em;}
.Area_list1{ border-right:2px solid #e8e8e8;}
.Area_list1 p{ color:#a809e3;}
.Area_list2 p{ color:#ffc000;}
/*index_bt*/
.index_bt{ width:100%; padding:1em 0em;}
.index_bt h3{ display:block;}
.index_bt h3 img{display:block; height:1.4em; margin:0px auto;}
.tbox > * {
	height: 100%;
	display: table-cell;
	vertical-align: top;
}

.index_bt{ width:100%; padding:1em 0em;}
.index_bt h3{ display:block;}
.index_bt h3 img{display:block; height:1.4em; margin:0px auto;}

.zdy_hd_li_div3 em{font-style: normal;}
.zdy_hd_li_div3 span{font-size: 14px; font-weight: 400;}
.zdy_hd_li_div4{ width:100%; float:left; color: #686868;display: block; font-size: 13px; line-height: 13px; margin: 2px 0px 10px 0px; padding: 0 2px; position: relative; text-align: left;}
.zdy_hd_li_div4 del{color:#999 !important;}
.zdy_hd_li_div4 em{font-style: normal;}

.zdy_hd_li_div6{ width:100%; float:left; color: #cc3333; display: block; line-height: 13px; margin-top:8px; padding: 0 2px; position: relative; text-align: left;}
.zdy_hd_li_div6 em{ font-size:12px;}
.zdy_hd_li_div6 span{ font-size:15px;}
.zdy_hd_li_div6 font{ color:#aeaeae; font-size:12px;}
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
	
<!-- 标识：是否显示顶部关注  0：[隐藏]，1：[显示]-->
<!-- <?php if($is_subscribe == 0): ?>
<div class="fixed-focus-on">
	<i class="close" onclick="$('.fixed-focus-on').hide();">x</i>
	<div class="foucs-on-block">
		<?php if($source_img_url != ''): ?>
		<img class="user-bg" src="<?php echo __IMG($source_img_url); ?>">
		<?php else: ?>
		<img class="user-bg" src="<?php echo __IMG($web_info['logo']); ?>">
		<?php endif; if($source_user_name != ''): ?>
		<p><?php echo lang("i_am_your_best_friend"); ?><span><?php echo $source_user_name; ?></span>,<?php echo lang("recommended_to_you_business_from_now"); ?></p>
		<?php else: ?>
		<p><?php echo lang("you_are_not_currently_concerned_about_the_WeChat_public_account"); ?>，<?php echo lang("click_on_the_attention"); ?></p>
		<?php endif; ?>
		<button id="subscribe"><?php echo lang("click_on_the_attention"); ?></button>
	</div>
</div>
<?php endif; ?> -->
<!-- 遮罩层 -->
<div class="shade" style="position:fixed;top:0px;left:0px;width:100%;height:100%;margin-top:0;background: rgba(0, 0, 0, 0.7);z-index: 999;display:none;"><span style="float: right; padding: 15px;font-size: 22px;color: #fff;background: transparent;" id="close">X</span></div>
<!-- 弹出层 --> 
<div class="popup" style="position:fixed;top: 36%;left: 0px;width: 100%;height: 100%;margin-left:0px;display:none;">
	
	<div class="code">
		<div style="overflow: hidden;">
		   <img src="<?php echo __IMG($web_info['web_qrcode']); ?>"  style="max-width: 100%;margin-top: 10px;"/>
		   <div style="color:#666; margin-bottom: 10px;"><?php echo lang("press_two_dimensional_code_public_concern_WeChat"); ?></div>
		</div>
	</div>
</div>

	<div class="motify" style="display: none;"><div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div></div>
	
<script language="javascript" src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"> </script>
<input type="hidden" id="appId" value="<?php echo $signPackage['appId']; ?>">
<input type="hidden" id="jsTimesTamp" value="<?php echo $signPackage['jsTimesTamp']; ?>">
<input type="hidden" id="jsNonceStr"  value="<?php echo $signPackage['jsNonceStr']; ?>">
<input type="hidden" id="jsSignature" value="<?php echo $signPackage['jsSignature']; ?>">

<div class="com-content">

<!-- 搜索 -->
<div style="width: 100%;background-color: #fff;padding: 10px 0px;">
	<script src="__TEMP__/<?php echo $style; ?>/public/js/public_assembly.js"></script>
<style>
/* .custom-search {width: 90%;margin-left: 20px;} */
/* .custom-search .custom-search-input{width:97%;} */
</style>
<div class="editing">
	<div class="control-group">
		<div class="custom-search" >
			<input type="text" class="custom-search-input" placeholder="<?php echo lang('search_goods'); ?>" style="background:#f4f4f4;border:none;border-radius:0;padding-right:10%;">
			<button type="button" class="custom-search-button"><?php echo lang('search'); ?></button>
			<input type="hidden" value="<?php echo $shop_id; ?>" id="hidden_shop_id"/>
		</div>
		<div class="component-border"></div>
	</div>
	<div class="sort">
		<i class="sort-handler"></i>
	</div>
</div>
	<style>.custom-search-button{top:0;}</style>
</div>
<!-- 轮播图 -->
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/slick.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/components.css">
<style>
.slick{
	max-height: none;
}
</style>
<script src="__TEMP__/<?php echo $style; ?>/public/js/slick.js"></script>
<?php if($plat_adv_list['is_use'] == 1): if($plat_adv_list['adv_list'][0]['adv_image'] != ''): ?>
	<div class="slick">
		<?php if(is_array($plat_adv_list['adv_list']) || $plat_adv_list['adv_list'] instanceof \think\Collection || $plat_adv_list['adv_list'] instanceof \think\Paginator): if( count($plat_adv_list['adv_list'])==0 ) : echo "" ;else: foreach($plat_adv_list['adv_list'] as $key=>$v): ?>
		<div style="display:block;text-align:center;width:100%;height:<?php echo $plat_adv_list['ap_height']; ?>px;line-height:<?php echo $plat_adv_list['ap_height']; ?>px;">
			<a href="<?php echo $v['adv_url']; ?>">
				<img src="<?php echo __IMG($v['adv_image']); ?>" alt="<?php echo lang('carousel_figure'); ?>" style="height:100%;max-width:100%;display: inline-block !important;vertical-align: middle !important;">
			</a>
		</div>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
	<?php endif; endif; ?>


<script>
$('.slick').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	autoplay: true,
	arrows:false,
	autoplaySpeed: 2000,
});
</script>

<!-- 公告 -->
<!-- <link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/liMarquee.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.liMarquee.js"></script>
<style>
.hot {
	width: 100%;
	height: 40px;
	background: #FFF;
	border-bottom: 1px solid #eee;
}

.hot .notice-img {
	float: left;
	width: 40px;
	height: 40px;
	margin: 2px 20px 2px 29px;
	position: relative;
}

.hot .notice-img img {
	display: block;
	height: 27px;
	width: 27px;
	margin:4px;
}

.hot .notice-img:after {
	content: '';
	display: block;
	width: 1px;
	height: 44px;
	background-color: #eee;
	position: absolute;
	right: -20px;
	top: 0;
}

</style>
<?php if($notice['is_enable'] == 1): ?>
<div class="hot" style="position: relative; overflow: hidden;">
	<div class="notice-img">
		<a href="javascript:;"><img src="__TEMP__/<?php echo $style; ?>/public/images/ad.png"></a>
	</div>
	<div style="width:70%;overflow:hidden;font-size:12px;color: #666;">
		<div class="dowebok"> 
		    &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $notice['notice_message']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
	</div>
</div>
<?php endif; ?>



<script type="text/javascript">
$(function(){
    $('.dowebok').liMarquee({
       hoverstop: false
    });
});
</script>
 -->
<!-- 导航 -->
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/navi.css">
<div class="navi">
	<div class="navi-item">
		<nav class="navi-item_row">
<!-- 			<a href="<?php echo __URL('APP_MAIN'); ?>"> -->
<!-- 				<span> -->
<!-- 					<img src="__TEMP__/<?php echo $style; ?>/public/images/navimg/platform_nav_home1.png"><span>首页</span> -->
<!-- 				</span> -->
<!-- 			</a> -->

			<a href="<?php echo __URL('APP_MAIN/goods/goodsclassificationlist'); ?>">
				<span>
					<img src="__TEMP__/<?php echo $style; ?>/public/images/my/nav_tb1.png"><span>全部</span>
				</span>
			</a>
			<?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($categorys) ? array_slice($categorys,0,9, true) : $categorys->slice(0,9, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?>
		
			<a href="<?php echo __URL('APP_MAIN/goods/goodslist?category_id='.$category['category_id']); ?>">
				<span>
					<img src="<?php echo $category['category_pic']; ?>"><span><?php echo $category['category_name']; ?></span>
				</span>
			</a>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</nav>
	</div>
</div>

<!-- 优惠券领取 -->
<?php if(count($coupon_list) > '0'): ?> 
	<style>
.coupon-total{
  	margin:15px 0 5px 0;
}
.coupon-img{
	width:100%;
	position:relative;
}
.coupon-img img{
	width:100%;
}

.coupon-title{
	position:absolute;
	left:2.5%;
	top:28%;
	font-size:14px;
	color:#fff;
}
.coupon-cent{
	position:absolute;
	left:30%;
	top:28%;
	color:#666;
}
.coupon-receive{
	position:absolute;
	right:5%;
	top:28%;
	color:#666;
	padding: 0px 10px;
    border: 1px solid #eee;
}

/**/
.coupon-all{
	background-color: rgba(0, 0, 0, 0.7);
    width: 100%;
    height: 100%;
    min-height: 400px;
    z-index: 2;
    position: fixed;
    bottom: 0px;
    transition: background 0.35s linear,height 0.35s ease-in 200ms;
	display:none
}
.coupon-bottom{
	position:fixed;
	bottom:56px;
	background:#fff;
	height:300px;
	    display: none;
    z-index: 10;
    width: 100%;	
	padding-bottom:20px;
}

.coupon-name{
	text-align:center;
	color:#333;
	font-size:14px;
	width:100%;
	height: 40px;
    line-height: 40px;
	margin-bottom:-10px;
}
.coupon-bottom ul{
	height: 285px;
	overflow:auto;
}
.coupon-bottom li{
	width:100%;
	position:relative;
	float: left;
	margin-top:10px;
}

.coupon-bottom li img{
	width:100%;
}
.coupon-price{
	position:absolute;
	 top: 20%;
    left: 10%;
	font-size:12px;
	color:#EB1606;
}
.coupon-lose{
	position:absolute;
	top: 55%;
    left: 10%;
	font-size:12px;
}
/* .coupon-get{
	position:absolute;
	top: 33%;
    right: 7.5%;
     width: 12px; 
	font-size:0.8em;
	color:#666;
	margin-top: 1.5%;
	color:#fff;
} */
/* .coupon-btn{
	background:#F44336;
	height:40px;
	line-height:40px;
	color:#fff;
	font-size:14px;
	text-align:center;
	margin-top:20px;
	margin-bottom:30px;
} */
.coupon-mask{
	background-color: rgba(0, 0, 0, 0.7);
    width: 100%;
    height: 100%;
    z-index: 3;
    position: absolute;
    bottom: 0px;
    transition: background 0.35s linear,height 0.35s ease-in 200ms;
	display:none;
	left:0;
}
.coupon-mask span{
	color:#fff;text-align:center;line-height:71px;display:block;
}
</style>

<div class="coupon-total">
	<div class="coupon-img">
	    <img src="__TEMP__/<?php echo $style; ?>/public/images/wap_coupon.png"/>
	    <span class="coupon-title"><?php echo lang("coupon_collection"); ?></span>
		<span class="coupon-cent"><?php echo lang("get_shop_coupons"); ?></span>
		<span class="coupon-receive"><?php echo lang("receive"); ?></span>
	</div>
	
</div>

<div  class="coupon-all">
   
 
</div>
<div class="coupon-bottom">   
       <div style="padding:0 2%;">
		   <p class="coupon-name"><?php echo lang("coupon"); ?></p>
		   <ul>
			   <?php if(is_array($coupon_list) || $coupon_list instanceof \think\Collection || $coupon_list instanceof \think\Paginator): $i = 0; $__LIST__ = $coupon_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			      <li> 
			          <a href="javascript:;" onclick="coupon_receive(this,<?php echo $vo['coupon_type_id']; ?>)">
				          <img src="__TEMP__/<?php echo $style; ?>/public/images/coupon_detail.png"/>
				          <span class="coupon-price">¥<?php echo $vo['money']; ?></span>
						  <span class="coupon-lose"><?php echo lang("consume"); ?><?php echo lang("member_full"); ?><?php echo $vo['at_least']; ?><?php echo lang("use"); ?></span>
						  <!--  <span class="coupon-get">点击领取</span> -->
						  <span class="coupon-mask">
						      <span><img src="__TEMP__/<?php echo $style; ?>/public/images/coupon_choice.png" style="width:16px; vertical-align: middle;margin-right:10px; "/><i id="mess"><?php echo lang("congratulations_your_success"); ?>，<?php echo lang("receive_successful"); ?></i></span>
						  </span>
					 </a>  
			      </li>
			   <?php endforeach; endif; else: echo "" ;endif; ?>
		   </ul>
	   </div>
	<!--    <p class="coupon-btn"><span>立即领取</span></p> -->
   </div>
   
<script type="text/javascript">
$(function(){
	$('.coupon-img').click(function(){
		$('.coupon-all').show();
		$('.coupon-bottom').show();
	})
	
// 	$('.coupon-bottom li').click(function(){
// 		$(this).children().children('.coupon-mask').show();
// 	})
	
	$('.coupon-all').click(function(){
		$('.coupon-all').hide();
		$('.coupon-bottom').hide();
	})
})



var couponObj = new Array();	
function coupon_receive(event,coupon_type_id){
	var is_have = true;
	$.each(couponObj, function(key, val) {
		if(val == coupon_type_id){
			is_have = false;
		}
		
	});

	if(is_have){
		couponObj.push(coupon_type_id);
		$.ajax({
			type:"post",
			url : "<?php echo __URL('APP_MAIN/index/getCoupon'); ?>",
			async: false,
			dataType:"json",
			data:{
				'coupon_type_id' : coupon_type_id
			},
			success : function(data){   			
				//alert(JSON.stringify(data));
				if(data['code']>0){
						$(event).children('.coupon-mask').show();
				}else{
						$(event).children('.coupon-mask').show();
						$(event).children().children().children("#mess").text(data['message']);
				}
			}
		})
	}
	
	
}	





</script>

<?php endif; ?>

<!--hot-new-->
<div class="index_news">
<div class="hot-new">
        <div class="index_newsbt"><span>最新</span></div>
		<div class="new-list swiper-container swiper-container-horizontal">
			<div class="swiper-wrapper">
			<?php if(is_array($article_list[data]) || $article_list[data] instanceof \think\Collection || $article_list[data] instanceof \think\Paginator): if( count($article_list[data])==0 ) : echo "" ;else: foreach($article_list[data] as $key=>$article): ?>
				<div class="swiper-slide">　
				<a href="<?php echo __URL('APP_MAIN/Articlecenter/articlecontent?article_id='.$article[article_id]); ?>"><?php echo $article['title']; ?></a>
				</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>	
			</div>
		</div>
</div>
<div class="hot-new">
        <div class="index_newsbt"><span>最热</span></div>
		<div class="new-list swiper-container swiper-container-horizontal">
			<div class="swiper-wrapper">
			<?php if(is_array($hot_article[data]) || $hot_article[data] instanceof \think\Collection || $hot_article[data] instanceof \think\Paginator): if( count($hot_article[data])==0 ) : echo "" ;else: foreach($hot_article[data] as $key=>$hot_article): ?>
				<div class="swiper-slide">　
				<a href="#"><?php echo $hot_article['title']; ?></a>
				</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>	
			</div>
		</div>
</div>
</div>
<script>
	var newsSwiper = new Swiper('.new-list', {
		autoplay: 5000,
		loop: true,
        pagination: '.swiper-pagination1',
        direction: 'vertical',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        mousewheelControl: true
	});
</script>
<!--index_Area-->
<div class="index_Area fix">
 <ul>
  <li class="Area_list1">
    <a href="#" class="tbox">
    <div class="index_Areacn">
    <span>新人专区</span>
    <p>30减15起</p>
    </div>
    <div><i><img src="__TEMP__/<?php echo $style; ?>/public/images/my/index_Area1.png"/></i></div>
    </a>
  </li>
  <li class="Area_list2">
  <a href="<?php echo __URL('APP_MAIN/index/discount'); ?>" class="tbox">
  <div class="index_Areacn">
  <span>限免专区</span>
  <p>免费领</p>
  </div>
  <div><i><img src="__TEMP__/<?php echo $style; ?>/public/images/my/index_Area2.png"/></i></div>
  </a>
  </li>
 </ul>
</div>


<div class="slick">
	<a href="<?php echo $discounts_adv['adv_list'][0]['adv_url']; ?>">
		<img src="<?php echo __IMG($discounts_adv['adv_list'][0]['adv_image']); ?>" >
		<!-- style="height:<?php echo $discounts_adv['ap_height']; ?>px;" -->
	</a>
</div>


<!-- 限时折扣 -->
<?php if(count($discount_list) >0): ?>
	<style type="text/css">
.group-list{overflow: hidden;}
.group-list-box .group-list li:nth-child(2n+1) {margin-left: 0px;}
.group-list-box{width:100%;margin:0 auto;float: none;overflow-y: hidden;}
.group-list-box .group-list li{width:49%;float:left;margin-left:1%;padding:0px;margin-bottom: 3px;}
.brand-info .brand-info-left .b-price p{
	color:#f23030;
	font-weight:bold;
	font-size:12px;
}
.buyer{
	font-size:12px;
}
.group-list-box .group-list li .brand-name {
  	text-align:left;
    margin-left: 8px;
}

</style>
<div class="controltype" >
	<!-- <img src="__TEMP__/<?php echo $style; ?>/public/images/limit_top.png"/> -->
	<!-- <span class="control_l_content"><a href="APP_MAIN/index/discount" style="color:#6927FF;">限时折扣</a></span> -->
	<a href="<?php echo __URL('APP_MAIN/index/discount'); ?>" style="color:#6927FF;"><img src="__TEMP__/<?php echo $style; ?>/public/images/navimg/display_discount.png"></a>
</div>
<div class="group-list-box">
	<ul class="group-list">
	<?php if(is_array($discount_list) || $discount_list instanceof \think\Collection || $discount_list instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($discount_list) ? array_slice($discount_list,0,6, true) : $discount_list->slice(0,6, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<li>
			<!-- <span class="brand-name"><?php echo $vo['goods_name']; ?></span> -->
			<div class="p-img">
				<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$vo['goods_id']); ?>" title="<?php echo $vo['goods_name']; ?>" style="display: block;width: 100%;height: 170px;line-height: 170px;">
				    <img src="<?php echo __IMG($vo['picture']['pic_cover']); ?>" style="width:100%;height:auto;"onerror="this.src='__TEMP__/<?php echo $style; ?>/public/images/goods_img_empty.png'">
				<div class="brand-time" >
					<i></i>
					<span class="settime" starttime="<?php echo getTimeStampTurnTime($vo['start_time'] ); ?>" endtime="<?php echo getTimeStampTurnTime($vo['end_time'] ); ?>" ></span>
				</div>
				</a>
				 <!-- <div class="p_discount"><?php echo $vo['discount']; ?>折</div> -->
			</div>
			<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$vo['goods_id']); ?>" title="<?php echo $vo['goods_name']; ?>"><div class="brand-name"><?php echo $vo['goods_name']; ?></div></a>
			<div class="brand-info" style="height:initial;">
				<div class="brand-info-left" style="float:none;">
					<span class="b-price" style="float:left;margin:5px 8px;">
					<p>￥<?php echo $vo['promotion_price']; ?> - <?php echo $vo['jifen']; ?>积分</p>
					</span>
					<em></em>
					<span class="buyer" style="float:right;line-height:31px;"><s style="margin-right: 10px;">￥<?php echo $vo['price']; ?></s></span>
					
				</div>
				<!-- <div class="brand-info-right" style="clear:both; margin-bottom: 8px;">
				<a class="main-btn" href="APP_MAIN/goods/goodsDetail?id=<?php echo $vo['goods_id']; ?>">马上抢</a>
				</div> -->
			</div>
		</li>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<input type="hidden" id="ms_time" value="<?php echo $ms_time; ?>"/>
</div>

<script type="text/javascript">
	$().ready(function() {
		updateEndTime();
		
	});
	//倒计时函数
	function updateEndTime() {
// 		var date = new Date();
// 		var time = date.getTime(); //当前时间距1970年1月1日之间的毫秒数
		var time =$("#ms_time").val();
		$(".settime").each(function(i) {
			var endDate = this.getAttribute("endTime"); //结束时间字符串
			
			//转换为时间日期类型
			var endDate1 = eval('new Date(' + endDate.replace(/\d+(?=-[^-]+$)/, function(a) {
				return parseInt(a, 10) - 1;
			}).match(/\d+/g) + ')');
			
			var endTime = endDate1.getTime(); //结束时间毫秒数
	
			var lag = (endTime - time) / 1000; //当前时间和结束时间之间的秒数
			if (lag > 0) {
				var second = Math.floor(lag % 60);
				var minite = Math.floor((lag / 60) % 60);
				var hour = Math.floor((lag / 3600) % 24);
				var day = Math.floor((lag / 3600) / 24);
				$(this).html(day + "<?php echo lang('days'); ?>" + hour + "<?php echo lang('hours'); ?>" + minite + "<?php echo lang('minutes'); ?>" + second + "<?php echo lang('second'); ?>");
			} else{
				$(this).html("<?php echo lang('activity_over'); ?>！");
			}
		});
		setTimeout("updateEndTime()", 1000);
		getCurrentTime();
	}
	//得到当前时间的毫秒数
	function getCurrentTime(){
		$.ajax({
			url : __URL("APP_MAIN/goods/getCurrentTime"),
			type : "post",
			success : function(res){
				//alert(res);
				$("#ms_time").val(res);
			}
		})
	}

</script>
<?php endif; ?>
<!-- <?php if(is_array($class_list) || $class_list instanceof \think\Collection || $class_list instanceof \think\Paginator): if( count($class_list)==0 ) : echo "" ;else: foreach($class_list as $key=>$class): ?> -->
	
<!-- 	<div class="controltype"> -->
<!-- 		<img src="__TEMP__/<?php echo $style; ?>/public/images/hotsale.png"/> -->
<!-- 		<span class="control_l_content" style="color:#16D810;"><?php echo $class['class_name']; ?></span> -->
<!-- <!-- 		<img src="__TEMP__/<?php echo $style; ?>/public/images/navimg/top_selling.png"> --> 
<!-- 	</div> -->
<!-- 	<section class="members_goodspic"> -->
<!-- 		<ul> -->
<!-- 		<?php if(!empty($class['goods_list'])): ?> -->
<!-- 			<?php if(is_array($class['goods_list']) || $class['goods_list'] instanceof \think\Collection || $class['goods_list'] instanceof \think\Paginator): if( count($class['goods_list'])==0 ) : echo "" ;else: foreach($class['goods_list'] as $k=>$goods): ?> -->
<!-- 			<?php if($k<4): ?> -->
<!-- 				<li class="gooditem"> -->
<!-- 					<div class="imgs"> -->
<!-- 						<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$goods['goods_info']['goods_id']); ?>"> -->
<!-- 						<img class="lazy" src="<?php echo __IMG($goods['picture_info']['pic_cover_small']); ?>" style="max-width:100%;"> -->
<!-- 						</a> -->
<!-- 					</div> -->
<!-- 					<div class="info"> -->
<!-- 						<p class="goods-title"><a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$goods['goods_info']['goods_id']); ?>"><?php echo $goods['goods_info']['goods_name']; ?></a></p> -->
<!-- 						<p class="goods-price"><em>￥<?php echo $goods['goods_info']['promotion_price']; ?></em></p> -->
<!-- 						<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$goods['goods_info']['goods_id']); ?>"></a> -->
<!-- 					</div> -->
<!-- 				</li> -->
<!-- 			<?php endif; ?> -->
<!-- 			<?php endforeach; endif; else: echo "" ;endif; ?> -->
<!-- 		<?php else: ?> -->
<!-- 			<li style="text-align:center;height: 130px;"> -->
<!-- 				<img src="__TEMP__/<?php echo $style; ?>/public/images/commend-type.png" style="max-width: 80px;vertical-align: middle;margin: 10px 0 2px 0;"/> -->
<!-- 				<div style="text-align:center;color:#666;margin-top: 10px;"><?php echo lang("shop_name"); ?></div> -->
<!-- 			</li> -->
<!-- 		<?php endif; ?> -->
<!-- 		</ul> -->
<!-- 	</section> -->
	
<!-- <?php endforeach; endif; else: echo "" ;endif; ?> -->
<!-- 标签版块 -->
<?php if(is_array($goods_platform_list) || $goods_platform_list instanceof \think\Collection || $goods_platform_list instanceof \think\Paginator): if( count($goods_platform_list)==0 ) : echo "" ;else: foreach($goods_platform_list as $key=>$class): if(!empty($class['goods_list'])): ?>
	<div class="controltype">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/hotsale.png"/>
		<span class="control_l_content" style="color:#16D810;"><?php echo $class['group_name']; ?></span>
<!-- 		<img src="__TEMP__/<?php echo $style; ?>/public/images/navimg/top_selling.png"> -->
	</div>
	<section class="members_goodspic">
		<ul>
			<?php if(is_array($class['goods_list']) || $class['goods_list'] instanceof \think\Collection || $class['goods_list'] instanceof \think\Paginator): if( count($class['goods_list'])==0 ) : echo "" ;else: foreach($class['goods_list'] as $k=>$goods): ?>
				<li class="gooditem">
					<div class="imgs">
						<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$goods['goods_id']); ?>">
						<img class="lazy" src="<?php echo __IMG($goods['pic_cover_small']); ?>" style="max-width:100%;"onerror="this.src='__TEMP__/<?php echo $style; ?>/public/images/goods_img_empty.png'">
						</a>
					</div>
					<div class="info">
						<p class="goods-title"><a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$goods['goods_id']); ?>"><?php echo $goods['goods_name']; ?></a></p>
						<p class="goods-price"><em>￥<?php echo $goods['price']; ?></em></p>
						<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$goods['goods_id']); ?>"></a>
					</div>
				</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</section>
<?php endif; endforeach; endif; else: echo "" ;endif; ?>


<div class="index_bt fix">
  <h3><img src="__TEMP__/<?php echo $style; ?>/public/images/my/index_bt.png"/></h3>
</div>

<!-- 楼层版块 -->
<?php if(is_array($block_list) || $block_list instanceof \think\Collection || $block_list instanceof \think\Paginator): if( count($block_list)==0 ) : echo "" ;else: foreach($block_list as $key=>$class): if(!empty($class['goods_list'])): ?>
	<div class="floor">
		<div class="category_name">
			<span class="floor-left-nav"><?php echo $class['category_alias']; ?></span><a class="floor-right-nav" href="<?php echo __URL('APP_MAIN/goods/goodslist?category_id='.$class['category_id']); ?>">查看更多</a>
		</div>
		<section class="members_goodspic">
			<ul>
				<?php if(is_array($class['goods_list']) || $class['goods_list'] instanceof \think\Collection || $class['goods_list'] instanceof \think\Paginator): if( count($class['goods_list'])==0 ) : echo "" ;else: foreach($class['goods_list'] as $k=>$list): ?>
				<li class="gooditem">
					<div class="imgs">
						<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$list['goods_id']); ?>">
							<img class="lazy" src="<?php echo __IMG($list['pic_cover_mid']); ?>" style="max-width:100%;max-height: 100%;" onerror="this.src='__TEMP__/<?php echo $style; ?>/public/images/goods_img_empty.png'">
						</a>
					</div>
					<div class="info">
						<p class="goods-title"><a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$list['goods_id']); ?>"><?php echo $list['goods_name']; ?></a></p>
						<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$list['goods_id']); ?>">
						<div class="zdy_hd_li_div6">
							<em>&nbsp;￥</em><span><?php echo $list['promotion_price']; ?></span>
						</div>
						<div class="zdy_hd_li_div3">
							<em>&nbsp;￥</em><span><?php echo $list['promotion_price']-$list['jifen']; ?></span>+<?php echo $list['jifen']; ?>积分
						</div>
						<div class="zdy_hd_li_div4">
							<del cite="f_l"><em>&nbsp;市场价:</em><?php echo $list['market_price']; ?></del>
						</div>
						</a>
					</div>
				</li>


				
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</section>
	</div>
	<?php endif; endforeach; endif; else: echo "" ;endif; ?>

<!-- <?php if(is_array($class_list) || $class_list instanceof \think\Collection || $class_list instanceof \think\Paginator): if( count($class_list)==0 ) : echo "" ;else: foreach($class_list as $key=>$class): ?> -->
<!-- 	<?php if($class['class_name']=='商城热卖'): ?> -->

<!-- 	<div class="controltype"> -->
<!-- 		<!-- <img src="__TEMP__/<?php echo $style; ?>/public/images/shophot.png"/> --> 
<!-- 		<!-- <span class="control_l_content" style="color:red;"><?php echo $class['class_name']; ?></span> --> 
<!-- 		<img src="__TEMP__/<?php echo $style; ?>/public/images/navimg/hot_commodity.png"> -->
<!-- 	</div> -->
<!-- 	<section class="members_goodspic"> -->
<!-- 		<ul> -->
<!-- 			<?php if(is_array($class['goods_list']) || $class['goods_list'] instanceof \think\Collection || $class['goods_list'] instanceof \think\Paginator): if( count($class['goods_list'])==0 ) : echo "" ;else: foreach($class['goods_list'] as $k=>$goods): ?> -->
<!-- 			<?php if($k<4): ?> -->
<!-- 			<li class="gooditem"> -->
<!-- 				<div class="img"> -->
<!-- 					<a href="APP_MAIN/goods/goodsdetail?id=<?php echo $goods['goods_info']['goods_id']; ?>"><img class="lazy" src="<?php echo __IMG($goods['picture_info']['pic_cover_small']); ?>"></a> -->
<!-- 				</div> -->
<!-- 				<div class="info"> -->
<!-- 					<p class="goods-title"><a href="APP_MAIN/goods/goodsdetail?id=<?php echo $goods['goods_info']['goods_id']; ?>"><?php echo $goods['goods_info']['goods_name']; ?></a></p> -->
<!-- 					<p class="goods-price"><em>￥<?php echo $goods['goods_info']['promotion_price']; ?></em></p> -->
<!-- 					<a href="APP_MAIN/goods/goodsdetail?id=<?php echo $goods['goods_info']['goods_id']; ?>"></a> -->
<!-- 				</div> -->
<!-- 			</li> -->
<!-- 			<?php endif; ?> -->
<!-- 			<?php endforeach; endif; else: echo "" ;endif; ?> -->
<!-- 		</ul> -->
<!-- 	</section> -->
<!-- 	<?php endif; ?> -->
<!-- <?php endforeach; endif; else: echo "" ;endif; ?> -->

<!-- <?php if(is_array($class_list) || $class_list instanceof \think\Collection || $class_list instanceof \think\Paginator): if( count($class_list)==0 ) : echo "" ;else: foreach($class_list as $key=>$class): ?> -->
<!-- 	<?php if($class['class_name']=='商城推荐'): ?> -->
<!-- 	<div class="controltype"> -->
<!-- 	<!-- <img src="__TEMP__/<?php echo $style; ?>/public/images/shoprec.png"/> --> 
<!-- 	<!-- <span class="control_l_content" style="color:red;"><?php echo $class['class_name']; ?></span> --> 
<!-- 	<img src="__TEMP__/<?php echo $style; ?>/public/images/navimg/mall_recommend.png"> -->
<!-- 	</div> -->
<!-- 	<section class="members_goodspic"> -->
<!-- 		<ul> -->
<!-- 			<?php if(is_array($class['goods_list']) || $class['goods_list'] instanceof \think\Collection || $class['goods_list'] instanceof \think\Paginator): if( count($class['goods_list'])==0 ) : echo "" ;else: foreach($class['goods_list'] as $k=>$goods): ?> -->
<!-- 			<?php if($k<4): ?> -->
<!-- 			<li class="gooditem"> -->
<!-- 				<div class="img"> -->
<!-- 					<a href="APP_MAIN/goods/goodsdetail?id=<?php echo $goods['goods_info']['goods_id']; ?>"><img class="lazy" src="<?php echo __IMG($goods['picture_info']['pic_cover_small']); ?>"></a> -->
<!-- 				</div> -->
<!-- 				<div class="info"> -->
<!-- 					<p class="goods-title"><a href="APP_MAIN/goods/goodsdetail?id=<?php echo $goods['goods_info']['goods_id']; ?>"><?php echo $goods['goods_info']['goods_name']; ?></a></p> -->
<!-- 					<p class="goods-price"><em>￥<?php echo $goods['goods_info']['promotion_price']; ?></em></p> -->
<!-- 					<a href="APP_MAIN/goods/goodsdetail?id=<?php echo $goods['goods_info']['goods_id']; ?>"></a> -->
<!-- 				</div> -->
<!-- 			</li> -->
<!-- 			<?php endif; ?> -->
<!-- 			<?php endforeach; endif; else: echo "" ;endif; ?> -->
<!-- 		</ul> -->
<!-- 	</section> -->
<!-- 	<?php endif; ?> -->
<!-- <?php endforeach; endif; else: echo "" ;endif; ?> -->
<!-- 促销模块 -->
<!-- <?php if(is_array($class_list) || $class_list instanceof \think\Collection || $class_list instanceof \think\Paginator): if( count($class_list)==0 ) : echo "" ;else: foreach($class_list as $key=>$class): ?>
	<div class="controltype" style="background-image:url(__TEMP__/<?php echo $style; ?>/public/images/newproduct.png);background-repeat:no-repeat;height:50px;margin:0;width:100%">
		<hr />
		<span class="control_l_content"><?php echo $class['class_name']; ?></span>
	</div>
	<div class="slick">
		<div><a href="APP_MAIN"><img src="__TEMP__/<?php echo $style; ?>/public/images/guanggao_cs_02.jpg" alt=""></a></div>
	</div>
	<section class="members_goodspic">
		<ul>
			<?php if(is_array($class['goods_list']) || $class['goods_list'] instanceof \think\Collection || $class['goods_list'] instanceof \think\Paginator): if( count($class['goods_list'])==0 ) : echo "" ;else: foreach($class['goods_list'] as $k=>$goods): if($k<4): ?>
			<li class="gooditem">
				<div class="img">
					<a href="APP_MAIN/goods/goodsdetail?id=<?php echo $goods['goods_info']['goods_id']; ?>"><img class="lazy" src="<?php echo __IMG($goods['picture_info']['pic_cover_small']); ?>"></a>
				</div>
				<div class="info">
					<p class="goods-title"><a href="APP_MAIN/goods/goodsdetail?id=<?php echo $goods['goods_info']['goods_id']; ?>"><?php echo $goods['goods_info']['goods_name']; ?></a></p>
					<p class="goods-price"><em>￥<?php echo $goods['goods_info']['promotion_price']; ?></em></p>
					<a href="APP_MAIN/goods/goodsdetail?id=<?php echo $goods['goods_info']['goods_id']; ?>"><div class="goods-buy"></div></a>
				</div>
			</li>
			<?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</section>
<?php endforeach; endif; else: echo "" ;endif; ?> -->
</div>
<!-- <div class="nav-pic">
	<a  href="javascript:void(0);" class="wap">
		<span><i></i></span>
		<p>手机版</p>
	</a>
	<a href="SHOP_MAIN/index/index?default_client=shop" class="pc">
		<span><i></i></span>
		<p>返回电脑版</p>
	</a>
</div> -->
<!-- <div class="foot-nav" style="margin-bottom: 55px;">
		<div class="nav">
			<a href="<?php echo __URL('APP_MAIN/login/index'); ?>"><?php echo lang("login"); ?></a>
			<a href="<?php echo __URL('APP_MAIN/login/register'); ?>"><?php echo lang("register"); ?></a>
			<a href="<?php echo __URL('SHOP_MAIN/index/index?default_client=shop'); ?>"><?php echo lang("pc_version"); ?></a>
			<a href="APP_MAIN/member/index"><?php echo lang("member_member_center"); ?></a>
		</div>
		<img src="__TEMP__/<?php echo $style; ?>/public/images/logo_copy.png" alt="" width="110" id="copyright_logo_wap">
	</div> -->

	
	
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
	
<script>
$(function(){
//关注微信公众号弹出
$("#subscribe").click(function(){
	$(".shade").show();
	$(".popup").show();
})

//关注微信公众号关闭
$("#close").click(function(){
	$(".shade").hide();
	$(".popup").hide();
})

$.ajax({
	type:"post",
	url : "<?php echo __URL('APP_MAIN/member/getShareContents'); ?>",
	success : function(data){
		//alert(JSON.stringify(data));
		//document.write(data.share_img);
		/* $("#share_title").val(data['share_title']);
		$("#share_desc").val(data['share_contents']);
		$("#share_url").val(data['share_url']);
		$("#share_img_url").val(data['share_img']);\ */
		wx.config({
	debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
	appId: $("#appId").val(), // 必填，公众号的唯一标识
	timestamp: $("#jsTimesTamp").val(), // 必填，生成签名的时间戳
	nonceStr:  $("#jsNonceStr").val(), // 必填，生成签名的随机串
	signature: $("#jsSignature").val(),// 必填，签名，见附录1
	jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ', 'onMenuShareWeibo'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
});

wx.ready(function() {

	var title = data['share_title'];
	var share_contents = data['share_contents']+'\r\n';
	var share_nick_name = data['share_nick_name']+'\r\n';
	var desc2 = share_contents+ share_nick_name + "收藏热度：★★★★★";
	var share_url = data['share_url'];
	var img_url = data['share_img'];
	wx.onMenuShareAppMessage({
		title: title,
		desc: desc2,
		link: share_url,
		imgUrl: img_url,
		trigger: function (res) {
			//alert('用户点击发送给朋友');
		},
		success: function (res) {
			//alert('已分享213');
			
			$.ajax({
				type : "post",
				url : "<?php echo __URL('APP_MAIN/index/sharegivepoint'); ?>",
				data : {
					"share" : true,"share_url":share_url
				},
				success : function(data){
					
				}
			});
		},
		cancel: function (res) {
			//alert('已取消');
		},
		fail: function (res) {
			//alert(JSON.stringify(res));
		}
	});
	
	// 2.2 监听“分享到朋友圈”按钮点击、自定义分享内容及分享结果接口
	wx.onMenuShareTimeline({
		title: title,
		link: share_url,
		imgUrl: img_url,
		trigger: function (res) {
			// alert('用户点击分享到朋友圈');
		},
		success: function (res) {
		//alert('已分享');
			$.ajax({
				type : "post",
				url : "<?php echo __URL('APP_MAIN/index/sharegivepoint'); ?>",
				data : {
					"share" : true,"share_url":share_url
				},
				success : function(data){
					
				}
			});
		},
		cancel: function (res) {
			//alert('已取消');
		},
		fail: function (res) {
			// alert(JSON.stringify(res));
		}
	});
	
	// 2.3 监听“分享到QQ”按钮点击、自定义分享内容及分享结果接口
	wx.onMenuShareQQ({
		title: title,
		desc: desc2,
		link: share_url,
		imgUrl: img_url,
		trigger: function (res) {
			//alert('用户点击分享到QQ');
		},
		complete: function (res) {
			//alert(JSON.stringify(res));
		},
		success: function (res) {
			//alert('已分享');
			$.ajax({
				type : "post",
				url : "<?php echo __URL('APP_MAIN/index/sharegivepoint'); ?>",
				data : {
					"share" : true,"share_url":share_url
				},
				success : function(data){
					
				}
			});
		},
		cancel: function (res) {
			//alert('已取消');
		},
		fail: function (res) {
			//alert(JSON.stringify(res));
		}
	});
	
	// 2.4 监听“分享到微博”按钮点击、自定义分享内容及分享结果接口
	wx.onMenuShareWeibo({
		title: title,
		desc: desc2,
		link: share_url,
		imgUrl: img_url,
		trigger: function (res) {
			//alert('用户点击分享到微博');
		},
		complete: function (res) {
			//alert(JSON.stringify(res));
		},
		success: function (res) {
			//alert('已分享');
			$.ajax({
				type : "post",
				url : "<?php echo __URL('APP_MAIN/index/sharegivepoint'); ?>",
				data : {
					"share" : true,"share_url":share_url
				},
				success : function(data){
					
				}
			});
		},
		cancel: function (res) {
			//alert('已取消');
		},
		fail: function (res) {
			//alert(JSON.stringify(res));
		}
	});
});
		}
	})
})
//跳转到pc端
function locationShop(){
	$.ajax({
		type : "post",
		url : "<?php echo __URL('APP_MAIN/index/setClientCookie'); ?>",
		data : { "client" : "shop"},
		success : function(data){
			if(data['code'] > 0){
				location.href= __URL("SHOP_MAIN");
			}
		}
	})
}
</script>


</body>
</html>