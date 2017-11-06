<?php if (!defined('THINK_PATH')) exit(); /*a:15:{s:41:"template/wap\default_new\Index\index.html";i:1505374497;s:34:"template/wap\default_new\base.html";i:1505553171;s:38:"template/wap\default_new\urlModel.html";i:1505377008;s:35:"template/wap\default_new\share.html";i:1503047430;s:48:"template/wap\default_new\Index\controlSlide.html";i:1503730344;s:49:"template/wap\default_new\Index\controlSearch.html";i:1503654949;s:46:"template/wap\default_new\Index\controlNav.html";i:1503734119;s:49:"template/wap\default_new\Index\controlNotice.html";i:1503047431;s:49:"template/wap\default_new\Index\controlCoupon.html";i:1505553171;s:52:"template/wap\default_new\Index\controlFigureAdv.html";i:1503047430;s:51:"template/wap\default_new\Index\controlDiscount.html";i:1503750450;s:48:"template/wap\default_new\Index\controlBrand.html";i:1503743451;s:43:"template/wap\default_new\bindingmobile.html";i:1504176477;s:36:"template/wap\default_new\footer.html";i:1503047430;s:43:"template/wap\default_new\shareContents.html";i:1503047430;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/control_type.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/goods_list.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/group_buy.css">
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
.popup{
    background: none;
	padding:0;
}
.code{
    width: 60%;
    margin: 0 auto;
    background: #fff;
    border-radius: 13px;
}
.controltype>.control_l_content {
    width: 22%;
	left:39%;
    display: inline-block;
    background:#F3F5F7;
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
i.title-border{
	display: inline-block;
    width: 3px;
    height: 20px;
    vertical-align: middle;
    margin-right: 5px;
    margin-top: -3px;
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
	
<!-- 标识：是否显示顶部关注  0：[隐藏]，1：[显示]-->
<?php if($is_subscribe == 1): ?>
<div class="fixed-focus-on">
	<i class="close" onclick="$('.fixed-focus-on').hide();">x</i>
	<div class="foucs-on-block">
		<div class="foucs-block">
		<?php if($source_img_url != ''): ?>
			<img class="user-bg" src="<?php echo __IMG($source_img_url); ?>">
			<?php else: ?>
			<img class="user-bg" src="<?php echo __IMG($web_info['logo']); ?>">
		<?php endif; ?>
		</div>
		<?php if($source_user_name != ''): ?>
		<p><?php echo lang("i_am_your_best_friend"); ?><span><?php echo $source_user_name; ?></span>,<?php echo lang("recommended_to_you_business_from_now"); ?></p>
		<?php else: ?>
		<p><?php echo lang("you_are_not_currently_concerned_about_the_WeChat_public_account"); ?>，<?php echo lang("click_on_the_attention"); ?></p>
		<?php endif; ?>
		<button id="subscribe"><?php echo lang("click_on_the_attention"); ?></button>
	</div>
</div>
<?php endif; ?>

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
<!-- 轮播图 -->
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/slick.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/components.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/slick.js"></script>
<div class="index_slide">
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
<div class="shade"></div>
</div>

<script>
$('.slick').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	autoplay: true,
	arrows:false,
	autoplaySpeed: 2000,
});
</script>
<!-- 搜索栏 -->
<script src="__TEMP__/<?php echo $style; ?>/public/js/public_assembly.js"></script>
<div class="controlSearch">
	<div class="control-search-input">
		<input type="text" class="search-input custom-search-input" placeholder="<?php echo lang('search_goods'); ?>">
		<button type="button" class="search-button custom-search-button"><?php echo lang('search'); ?></button>
		<input type="hidden" value="<?php echo $shop_id; ?>" id="hidden_shop_id"/>
	</div>
</div>


<!-- 导航 -->
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/navi.css">
<div class="navi">
	<div class="navi-item">
		<nav class="navi-item_row">
			<!-- <a href="<?php echo __URL('APP_MAIN'); ?>">
				<span>
					<img src="__TEMP__/<?php echo $style; ?>/public/images/navimg/home.png"><span>首页</span>
				</span>
			</a> -->
			<a href="<?php echo __URL('APP_MAIN/goods/goodsClassificationList'); ?>">
				<span>
					<img src="__TEMP__/<?php echo $style; ?>/public/images/navimg/category.png"><span><?php echo lang("classification_goods"); ?></span>
				</span>
			</a>
			<a href="<?php echo __URL('APP_MAIN/index/discount'); ?>">
				<span>
					<img src="__TEMP__/<?php echo $style; ?>/public/images/navimg/discount.png"><span><?php echo lang("goods_discount"); ?></span>
				</span>
			</a>
			<a href="<?php echo __URL('APP_MAIN/goods/brandlist'); ?>">
				<span>
					<img src="__TEMP__/<?php echo $style; ?>/public/images/navimg/brand.png"><span><?php echo lang("brands_area"); ?></span>
				</span>
			</a>
			<a href="<?php echo __URL('APP_MAIN/member/index'); ?>">
				<span>
					<img src="__TEMP__/<?php echo $style; ?>/public/images/navimg/usercenter.png"><span><?php echo lang("member_member_center"); ?></span>
				</span>
			</a>
			<a href="<?php echo __URL('APP_MAIN/articlecenter'); ?>">
				<span>
					<img src="__TEMP__/<?php echo $style; ?>/public/images/navimg/helpcenter.png"><span><?php echo lang("article_topic"); ?></span>
				</span>
			</a>
			<!-- <a href="<?php echo __URL('APP_MAIN/articlecenter'); ?>">
				<span>
					<img src="__TEMP__/<?php echo $style; ?>/public/images/navimg/shop.png"><span>店铺街</span>
				</span>
			</a>
			<a href="<?php echo __URL('APP_MAIN/goods/integralcenter'); ?>">
				<span>
					<img src="__TEMP__/<?php echo $style; ?>/public/images/navimg/cart.png"><span>购物车</span>
				</span>
			</a>
			<a href="<?php echo __URL('APP_MAIN/articlecenter'); ?>">
				<span>
					<img src="__TEMP__/<?php echo $style; ?>/public/images/navimg/directstore.png"><span>直营店铺</span>
				</span>
			</a>
			<a href="<?php echo __URL('APP_MAIN/member/index'); ?>">
				<span>
					<img src="__TEMP__/<?php echo $style; ?>/public/images/navimg/attractinvestment.png"><span>招商加盟	</span>
				</span>
			</a> -->
		</nav>
	</div>
</div>

<!-- 公告 -->
<?php if($notice['is_enable'] == 1): ?>
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/liMarquee.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.liMarquee.js"></script>
<style>
.hot {
	width: 100%;
	height: 44px;
	background: #FFF;
	border-top: 1px solid #eee;
}

.hot .notice-img {
	float: left;
	width: 40px;
	height: 40px;
	margin: 2px 20px 2px 20px;
	position: relative;
}

.hot .notice-img img {
	display: block;
	height: 25px;
	margin:8px auto;
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
		<a href="javascript:;"><img src="__TEMP__/<?php echo $style; ?>/public/images/H.png"></a>
	</div>
	<div style="width:70%;overflow:hidden;font-size:13px;color: #666;">
		<div class="dowebok" style="font-size: 13px;"> 
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

<?php endif; ?>

<!-- 首页公告下方广告位 -->
<?php if(!(empty($index_adv_one) || (($index_adv_one instanceof \think\Collection || $index_adv_one instanceof \think\Paginator ) && $index_adv_one->isEmpty()))): if($index_adv_one['is_use'] == 1): if($index_adv_one['adv_list'][0]['adv_image'] != ''): ?>
		<div class="common_image">
			<a href="<?php echo $index_adv_one['adv_list'][0]['adv_url']; ?>"><img src="<?php echo __IMG($index_adv_one['adv_list'][0]['adv_image']); ?>" alt="" class="img_common"></a>
		</div>
		<?php endif; endif; endif; ?>

<!-- 优惠券领取 -->
<?php if(count($coupon_list) > '0'): ?> 
<style>
.coupon-all{
	height: 90px;
	padding: 10px 0 0 0;
	background: #fff;
	margin-bottom: 10px;
	white-space: nowrap;
	overflow-y: auto;
}
.coupon-all::-webkit-scrollbar {
	display: none;
}
.coupon-all .coupon{
	width: 160px;
	height: 80px;
	background: red;
	margin-left: 10px;
	border-radius: 5px;
	display: inline-block;
	position: relative;
	top: 0px;
}
.coupon-all .coupon p{
	position: absolute;
	z-index: 5;
	font-size: 20px;
	color: #fff;
	margin-left: 15px;
	line-height: 80px;
}
.coupon-all .coupon p span{
	font-size: 14px;
}
.coupon-all .coupon img.background_img{
	max-height: 100%;
	max-width: 100%;
	position: absolute;
	z-index: 1;
}
.coupon-all .coupon img.already_received{
	max-height: 60%;
	max-width: 60%;
	position: absolute;
	z-index: 10;
	display: none;
}
.coupon-all .coupon:last-child{
	margin-right: 10px;
}
</style>
<div  class="coupon-all">
	<?php if(is_array($coupon_list) || $coupon_list instanceof \think\Collection || $coupon_list instanceof \think\Paginator): $i = 0; $__LIST__ = $coupon_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['money'] > 0 && $vo['money'] <= 10): ?>
   		<div class="coupon" style="background: #FFA72A;"  onclick="coupon_receive(this,<?php echo $vo['coupon_type_id']; ?>)">
   	<?php elseif($vo['money'] > 10 && $vo['money'] <= 100): ?>
   		<div class="coupon" style="background: #FF4D5B;"  onclick="coupon_receive(this,<?php echo $vo['coupon_type_id']; ?>)">
   	<?php elseif($vo['money'] > 100): ?>
   		<div class="coupon" style="background: #34D71E;"  onclick="coupon_receive(this,<?php echo $vo['coupon_type_id']; ?>)">
   	<?php endif; ?>
   		<img src="__TEMP__/<?php echo $style; ?>/public/images/index_coupon.png" alt="" class="background_img">
   		<p><span>￥</span><?php echo $vo['money']; ?></p>
   		<img src="__TEMP__/<?php echo $style; ?>/public/images/already_received.png" alt="" class="already_received">
   	</div> 
   <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
  
<script type="text/javascript">
var is_have = true;
function coupon_receive(event,coupon_type_id){
	if(is_have){
		is_have = false;
		$.ajax({
			type:"post",
			url : "<?php echo __URL('APP_MAIN/index/getCoupon'); ?>",
			async: false,
			dataType:"json",
			data:{ 'coupon_type_id' : coupon_type_id },
			success : function(data){
				if(data['code']>0){
					showBox("恭喜您，领取成功！");
					$(event).children(".already_received").show();
				}else if(data['code'] == -2009){
					location.href="<?php echo __URL('APP_MAIN/login/index'); ?>";
				}else{
					showBox(data['message']);
					is_have = true;
				}
			}
		})
	}
}
</script>
<?php endif; ?> 

<!-- <<div class="figure_adv">
	<div class="data-top-content">
		<div class="data-left">
			<a href=""><img src="__TEMP__/<?php echo $style; ?>/public/images/temporary/adv1.png" alt="" class="img_common"></a>
		</div>
		<div class="data-right">
			<div class="adv" style="border-bottom: 1px solid #eee;margin-bottom: -1px;">
				<a href=""><img src="__TEMP__/<?php echo $style; ?>/public/images/temporary/adv2.png" alt="" class="img_common"></a>
			</div>
			<div class="adv">
				<a href=""><img src="__TEMP__/<?php echo $style; ?>/public/images/temporary/adv2.png" alt="" style="margin-top: 1px;" class="img_common"></a>
			</div>
		</div>
	</div>
	<div class="data-bottom-content">
		<div class="adv">
			<a href="">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/temporary/adv3.png" alt="" class="img_common">
			</a>
		</div>
		<div class="adv">
			<a href="">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/temporary/adv3.png" alt="" class="img_common">
			</a>
		</div>
		<div class="adv">
			<a href="">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/temporary/adv3.png" alt="" class="img_common">
			</a>
		</div>
		<div class="adv">
			<a href="">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/temporary/adv3.png" alt="" class="img_common">
			</a>
		</div>
	</div>
</div>> -->

<?php if(count($discount_list) >0): ?>
<style type="text/css">
.group-list-box{
	width:100%;
	margin:0 auto 10px auto;
	float: none;
	padding: 10px 0;
	background:#fff;
}
.group-list-box .controltype{
	width: 90%;
	padding: 0 5%;
	vertical-align: bottom;
}
.group-list-box .controltype span{
	color: #FF4E00;
	font-weight: normal;
}
.group-list-box .controltype span.title{
	font-size: 17px;

}
.group-list-box .controltype span.more{
	color: #FF4E00;
	float: right;
	font-size: 12px;
}
.group-list-box .controltype span.more a{
	color: #FF4E00;
	font-size: 12px;
}
.group-list-box .discount-list{
	overflow-y: auto;
	width: 100%;
}
.group-list-box .discount-list::-webkit-scrollbar,.group-list-box .discount-list ul::-webkit-scrollbar{
	display: none;
}
.group-list-box .discount-list ul{
	white-space: nowrap;
	height: 170px;
	overflow-y: hidden;
}
.group-list-box .discount-list ul li{
	width: 35%;
	margin-left: 3%;
	display: inline-block;
	height: 170px;
}
.group-list-box .discount-list ul li .goods_img{
	width: 100%;
	height: 120px;
	overflow: hidden;
	position: relative;
}
.group-list-box .discount-list ul li .goods_img a img{
	min-height: 120px;
	width: 100%;
}
.group-list-box .discount-list ul li .goods_img a .brand-time{
	position: absolute;
	z-index: 10;
	bottom: 0;
	background:rgba(0,0,0,0.4);
	color: #fff;
	width: 100%;
	line-height: 25px;
	height: 25px;
	text-align: center;
	font-size: 12px;
}
.group-list-box .discount-list ul li a .goods-name{
	font-size: 13px;
	color: #333;
	width: 100%;
	overflow: hidden;
	text-overflow: ellipsis;
	margin-top: 5px;
}
</style>
<div class="group-list-box">
	<div class="controltype" >
		<span class="title">限时折扣</span>
		<span class="more"><a href="<?php echo __URL('APP_MAIN/index/discount'); ?>">更多秒杀</a></span>
	</div>
	<div class="discount-list">
		<ul>
			<?php if(is_array($discount_list) || $discount_list instanceof \think\Collection || $discount_list instanceof \think\Paginator): $i = 0; $__LIST__ = $discount_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<li>
				<div class="goods_img">
					<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$vo['goods_id']); ?>" title="<?php echo $vo['goods_name']; ?>">
					    <img src="<?php echo __IMG($vo['picture']['pic_cover']); ?>">
						<div class="brand-time" >
							<i></i>
							<span class="settime" starttime="<?php echo getTimeStampTurnTime($vo['start_time'] ); ?>" endtime="<?php echo getTimeStampTurnTime($vo['end_time'] ); ?>" ></span>
						</div>
					</a>
				</div>
				<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$vo['goods_id']); ?>" title="<?php echo $vo['goods_name']; ?>"><div class="goods-name"><?php echo $vo['goods_name']; ?></div></a>
				<div class="brand-info" style="height:initial;">
					<div class="brand-info-left" style="float:none;">
						<span class="b-price" style="float:left;margin:5px 0">
						<p>￥<?php echo $vo['promotion_price']; ?></p>
						</span>
						<em></em>
						<span class="buyer" style="float:left;line-height:31px;"><s style="margin-left: 10px;">￥<?php echo $vo['price']; ?></s></span>
					</div>
				</div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>
<script type="text/javascript">
	$().ready(function() {
		updateEndTime();
	});
	//倒计时函数
	function updateEndTime() {
		var date = new Date();
		var time = date.getTime(); //当前时间距1970年1月1日之间的毫秒数

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
	}
</script>
<?php endif; ?>

<!-- 品牌推荐 -->
<!-- <<?php if(count($list) >0): ?>>
<<style>
.brand-list-box{
	width: 100%;
	background:#fff;
	padding: 10px 0;
}
.brand-list-box .controltype{
	width: 90%;
	padding: 0 5%;
	vertical-align: bottom;
}
.brand-list-box .controltype span.title{
	font-size: 17px;
	color:#484848;
	font-weight: normal;
}
.brand-list-box .controltype span.more{
	color: #FF4E00;
	float: right;
	font-size: 12px;
}
.brand-list-box .controltype span.more a{
	color: #FF4E00;
	font-size: 12px;
}
</style>
<div class="brand-list-box">
	<div class="controltype" >
		<span class="title">品牌推荐</span>
		<span class="more"><a href="<?php echo __URL('APP_MAIN/goods/brandlist'); ?>">查看更多</a></span>
	</div>
	<section class="members_goodspic" style="background:#fff;border-bottom:none;">
		<ul>
		<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$category_second): ?>
			<li class="gooditem" style="margin:0;width:33.3%;height: 90px;line-height: 90px;">
				<div class="info" style="padding-left:0;text-align: center;">
					<a href="<?php echo __URL('APP_MAIN/goods/goodslist?brand_id='.$category_second['brand_id']); ?>">
						<img src="<?php echo __IMG($category_second['brand_pic']); ?>" alt="<?php echo $category_second['brand_name']; ?>" style="max-width: 100%;max-height: 100%;vertical-align: middle;"onerror="this.src='__TEMP__/<?php echo $style; ?>/public/images/default/default_shop_logo.png'">
					</a>
				</div>
			</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</section>
</div>
>
<<?php endif; ?>> -->
<!-- 首页品牌推荐下方广告位 -->
<?php if(!(empty($index_adv_two) || (($index_adv_two instanceof \think\Collection || $index_adv_two instanceof \think\Paginator ) && $index_adv_two->isEmpty()))): if($index_adv_two['is_use'] == 1): if($index_adv_two['adv_list'][0]['adv_image'] != ''): ?>
		<div class="common_image">
			<a href="<?php echo $index_adv_two['adv_list'][0]['adv_url']; ?>"><img src="<?php echo __IMG($index_adv_two['adv_list'][0]['adv_image']); ?>" alt="" class="img_common"></a>
		</div>
		<?php endif; endif; endif; ?>
<!-- <?php if(is_array($class_list) || $class_list instanceof \think\Collection || $class_list instanceof \think\Paginator): if( count($class_list)==0 ) : echo "" ;else: foreach($class_list as $key=>$class): ?> -->
	
<!-- 	<div class="controltype" style="position: relative;"> -->
<!-- 		<div style="width: 60%;border-top: 1px solid #FF4E01;margin:17px 20%;vertical-align: middle;position: absolute;"> -->
<!-- 		</div> -->
<!-- 		<span class="control_l_content" style="color:#FF4E01;"><?php echo $class['class_name']; ?></span> -->
<!-- 	</div> -->
<!-- 	<section class="members_goodspic"> -->
<!-- 		<ul> -->
<!-- 		<?php if(!empty($class['goods_list'])): ?> -->
<!-- 			<?php if(is_array($class['goods_list']) || $class['goods_list'] instanceof \think\Collection || $class['goods_list'] instanceof \think\Paginator): if( count($class['goods_list'])==0 ) : echo "" ;else: foreach($class['goods_list'] as $k=>$goods): ?> -->
<!-- 			<?php if($k<4): ?> -->
<!-- 				<li class="gooditem"> -->
<!-- 					<div class="imgs"> -->
<!-- 						<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$goods['goods_info']['goods_id']); ?>"> -->
<!-- 						<img class="lazy" src="__UPLOAD__/<?php echo $goods['picture_info']['pic_cover_small']; ?>" style="max-width:100%;" onerror="this.src='__TEMP__/<?php echo $style; ?>/public/images/goods_img_empty.png'"> -->
<!-- 						</a> -->
<!-- 					</div> -->
<!-- 					<div class="info"> -->
<!-- 						<p class="goods-title"> -->
<!-- 							<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$goods['goods_info']['goods_id']); ?>"><?php echo $goods['goods_info']['goods_name']; ?></a> -->
<!-- 						</p> -->
<!-- 						<div class="goods-info"> -->
<!-- 							<span class="goods_price"><em style="color: #fb3a2f;">￥<?php echo $goods['goods_info']['promotion_price']; ?></em></span> -->
<!-- 							<a href="javascript:CartGoodsInfo(<?php echo $goods['goods_info']['goods_id']; ?>,<?php echo $goods['goods_info']['state']; ?>)" class="add-cart"></a><br> -->
<!-- 							<span class="goods-original-price"><s>￥<?php echo $goods['goods_info']['price']; ?></s></span> -->
<!-- 						</div> -->
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
	<div class="controltype" style="position: relative;">
		<div style="width: 60%;border-top: 1px solid #FF4E01;margin:17px 20%;vertical-align: middle;position: absolute;">
		</div>
		<span class="control_l_content" style="color:#FF4E01;"><?php echo mb_substr($class['group_name'],0,12); ?></span>
	</div>
	<section class="members_goodspic">
		<ul>
		<?php if(!empty($class['goods_list'])): if(is_array($class['goods_list']) || $class['goods_list'] instanceof \think\Collection || $class['goods_list'] instanceof \think\Paginator): if( count($class['goods_list'])==0 ) : echo "" ;else: foreach($class['goods_list'] as $k=>$goods): ?>
				<li class="gooditem">
					<div class="imgs">
						<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$goods['goods_id']); ?>">
						<img class="lazy" src="<?php echo __IMG($goods['pic_cover_small']); ?>" style="max-width:100%;" onerror="this.src='__TEMP__/<?php echo $style; ?>/public/images/goods_img_empty.png'">
						</a>
					</div>
					<div class="info">
						<p class="goods-title">
							<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$goods['goods_id']); ?>"><?php echo $goods['goods_name']; ?></a>
						</p>
						<div class="goods-info">
							<span class="goods_price"><em style="color: #fb3a2f;">￥<?php echo $goods['promotion_price']; ?></em></span>
							<a href="javascript:CartGoodsInfo(<?php echo $goods['goods_id']; ?>,<?php echo $goods['state']; ?>)" class="add-cart"></a><br>
							<span class="goods-original-price"><s>￥<?php echo $goods['price']; ?></s></span>
						</div>
					</div>
				</li>
			<?php endforeach; endif; else: echo "" ;endif; else: ?>
			<li style="text-align:center;height: 130px;">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/commend-type.png" style="max-width: 80px;vertical-align: middle;margin: 10px 0 2px 0;"/>
				<div style="text-align:center;color:#666;margin-top: 10px;"><?php echo lang("shop_name"); ?></div>
			</li>
		<?php endif; ?>
		</ul>
	</section>
	<?php endif; endforeach; endif; else: echo "" ;endif; ?>

<!-- 楼层版块 -->
<?php if(is_array($block_list) || $block_list instanceof \think\Collection || $block_list instanceof \think\Paginator): if( count($block_list)==0 ) : echo "" ;else: foreach($block_list as $key=>$class): if(!empty($class['goods_list'])): ?>
	<div class="floor">
	<div class="category_name">
		<span class="floor-left-nav"><i class="title-border" style="background: <?php echo $class['color']; ?>;"></i><?php echo $class['category_alias']; ?></span><a class="floor-right-nav" href="<?php echo __URL('APP_MAIN/goods/goodslist?category_id='.$class['category_id']); ?>">查看更多</a>
	</div>
	<section class="members_goodspic">
		<ul>
			<?php if(is_array($class['goods_list']) || $class['goods_list'] instanceof \think\Collection || $class['goods_list'] instanceof \think\Paginator): if( count($class['goods_list'])==0 ) : echo "" ;else: foreach($class['goods_list'] as $k=>$list): ?>
				<li class="gooditem">
					<div class="imgs">
						<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$list['goods_id']); ?>">
						<img class="lazy" src="<?php echo __IMG($list['pic_cover_small']); ?>" style="max-width:100%;" onerror="this.src='__TEMP__/<?php echo $style; ?>/public/images/goods_img_empty.png'">
						</a>
					</div>
					<div class="info">
						<p class="goods-title">
							<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$list['goods_id']); ?>"><?php echo $list['goods_name']; ?></a>
						</p>
						<div class="goods-info">
							<span class="goods_price"><em style="color: #fb3a2f;">￥<?php echo $list['promotion_price']; ?></em></span>
							<a href="javascript:CartGoodsInfo(<?php echo $list['goods_id']; ?>,<?php echo $list['state']; ?>)" class="add-cart"></a><br>
							<span class="goods-original-price"><s>￥<?php echo $list['price']; ?></s></span>
						</div>
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
<!-- 					<a href="APP_MAIN/goods/goodsdetail?id=<?php echo $goods['goods_info']['goods_id']; ?>"><img class="lazy" src="__UPLOAD__/<?php echo $goods['picture_info']['pic_cover_small']; ?>"></a> -->
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
<!-- 					<a href="APP_MAIN/goods/goodsdetail?id=<?php echo $goods['goods_info']['goods_id']; ?>"><img class="lazy" "__UPLOAD__/<?php echo $goods['picture_info']['pic_cover_small']; ?>"></a> -->
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
					<a href="APP_MAIN/goods/goodsdetail?id=<?php echo $goods['goods_info']['goods_id']; ?>"><img class="lazy" src="__UPLOAD__/<?php echo $goods['picture_info']['pic_cover_small']; ?>"></a>
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
<div class="foot-nav" style="margin-bottom: 55px;">
	<div class="nav">
		<a href="<?php echo __URL('APP_MAIN/login/index'); ?>"><?php echo lang("login"); ?></a>
		<a href="<?php echo __URL('APP_MAIN/login/register'); ?>"><?php echo lang("register"); ?></a>
		<a href="javascript:;" onclick="locationShop();"><?php echo lang("pc_version"); ?></a>
		<a href="<?php echo __URL('APP_MAIN/member/index'); ?>"><?php echo lang("member_member_center"); ?></a>
	</div>
	<img src="__TEMP__/<?php echo $style; ?>/public/images/logo_copy.png" alt="" width="110" id="copyright_logo_wap">
</div>

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
//跳转到电脑端
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