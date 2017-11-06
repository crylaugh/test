<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:43:"template/wap\default\Goods\goodsDetail.html";i:1508401133;s:30:"template/wap\default\base.html";i:1507430043;s:34:"template/wap\default\urlModel.html";i:1505377008;s:45:"template/wap\default\Goods\controlDetail.html";i:1509689981;s:42:"template/wap\default\controlCopyRight.html";i:1501836949;s:39:"template/wap\default\shareContents.html";i:1501656003;s:31:"template/wap\default\share.html";i:1499844399;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/mall.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pre_foot.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/goods_detail.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/goods_product.js"></script>
<script language="javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jscommon.js" language="javascript" charset="gb2312"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.lazyload.js" type="text/javascript"></script>
<style>
.js-shelves {
	display: none;
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
	<a class="head_back" onclick="window.history.go(-1)" href="javascript:void(0)"><i class="icon-back"></i></a>
	<div class="head-title"><?php echo $shopname; ?></div>
</section>

	<div class="motify" style="display: none;"><div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div></div>
	
	<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/scroll.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/detail.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/components.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/scroll.js" type="text/javascript"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/countdown.js" type="text/javascript"></script>
<style>
.address-select{
	width: 30%;
    float: left;
    border: 1px solid #e5e5e5;
	height: 20px;
    line-height: 20px;
    margin: 5px 15px;
    margin-left: 0;
}
.give-the-thumbs-up{
	position: absolute;
	top: 0px;
	right: 10px;
	text-align: center;
	font-size: 12px;
	margin-top: 13px;
}
.give-the-thumbs-up i{
	font-size: 21px;
}


.zdy_hd_li_div3 em{font-style: normal;margin-left: 10px;}
.zdy_hd_li_div3 span{font-size: 14px; font-weight: 400;}

</style>
<!-- 商品详情 -->
<div class="h50" style="height:45px;"></div>
<section id="banner">
	<div class="shop_slider shop_slider_auto" data-tag="module-slider" data-height="320px">
		<div class="inner" data-tag="slider-warp" >
			<ul class="pic_list" data-tag="slider-list">
			<?php if(is_array($goods_detail['img_list']) || $goods_detail['img_list'] instanceof \think\Collection || $goods_detail['img_list'] instanceof \think\Paginator): if( count($goods_detail['img_list'])==0 ) : echo "" ;else: foreach($goods_detail['img_list'] as $key=>$img_list): ?>
				<li style="width: 320px;">
					<div>
						<img alt="<?php echo lang('goods_picture'); ?>" class="pp_init_img" src="<?php echo __IMG($img_list['pic_cover_big']); ?>" />
					</div>
				</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="bar_wrap">
			<ul class="bar" data-tag="slider-page">
				<li class="cur"></li>
				<li></li>
				<li></li>
			</ul>
		</div>
	</div>
</section>
<?php if($goods_detail['promotion_info'] != ''): ?>
<div class="goods-header js-goods-header goods-activity clearfix">
	<input type="hidden" id="end_time"  value="<?php echo getTimeStampTurnTime($goods_detail['promotion_detail']['end_time'] ); ?>"/>
	<div class="goods-price">
		<div class="current-price activity-price">
			<span>￥</span><i class="js-goods-price price"><?php echo $goods_detail['promotion_price']; ?></i>
			<span class="price-title js-price-title "><?php echo lang('goods_discount'); ?></span>
		</div>
		<?php if($goods_detail['market_price']>0): ?>
		<em class="original-price"><?php echo $goods_detail['market_price']; ?></em>
		<?php endif; ?>
		<div class="font-size-12 overview-countdown js-activity-tips started " data-status="started">
			<div class="countdown-title"><?php echo lang('distance_ends'); ?></div>
			<div class="js-discount-time countdown" data-countdown="3542691">
			<span class="c-red js-day">00</span> <?php echo lang('days'); ?> 
			<span class="c-red js-hour">00</span> <?php echo lang('hours'); ?> 
			<span class="c-red js-min">00</span> <?php echo lang('minutes'); ?> 
			<span class="c-red js-sec">00</span> <?php echo lang('second'); ?></div>
		</div>
	</div>
</div>
<?php endif; ?>
<input type="hidden" id="ms_time" value="<?php echo $ms_time; ?>"/>
<div class="buy_area">
	<div class="fn_wrap" style="position: relative;">
		<h1 class="title" id="itemName" style="width: 80%;"><?php echo $goods_detail['goods_name']; ?></h1>
		<span style="position: absolute;display: block;height: 39px;background: #d5d5d5;width: 1px;top: 14px;right: 47px;"></span>

	    <?php if($click_detail['status'] == 1): ?>
	         <span class="give-the-thumbs-up">
		        <i class="fa fa-thumbs-up" style="color: #FF8855;"></i><br/><?php echo lang('give_thumbs_up'); ?>
		     </span>
		<?php else: ?>
		    <span onclick="clickPoint()" class="give-the-thumbs-up">
		        <i class="fa fa-thumbs-up"></i><br/><?php echo lang('give_thumbs_up'); ?>
		    </span>
		<?php endif; ?>

	</div>
	
	
	<div class="price_wrap">
		<span class="tit" id="priceTitle"></span> 
		<span class="price" price="<?php echo $goods_detail['price']; ?>">
			<span style="font-size:14px;display: inline-block;vertical-align: middle;">￥</span>
			<?php if($goods_detail['promotion_price'] < $goods_detail['member_price']): ?><?php echo $goods_detail['promotion_price']; else: ?><?php echo $goods_detail['member_price']; endif; if($goods_detail['point_exchange_type']==1 && $goods_detail['point_exchange']>0): ?>
			<span style="font-size:16px;display: inline-block;vertical-align: middle;">+<?php echo $goods_detail['point_exchange']; ?><?php echo lang('goods_integral'); ?></span>
			<?php endif; ?>
		</span>
		<div class="zdy_hd_li_div3">
		<?php if($goods_detail['promotion_price'] < $goods_detail['price']): ?>
			<del cite="f_l"><em>&nbsp;原价:</em><?php echo $goods_detail['price']; ?></del>
		<?php else: ?>	
			<del cite="f_l"><em>&nbsp;市场价:</em><?php echo $goods_detail['market_price']; ?></del>
		<?php endif; ?>
		</div>
		<span class="flag" id="priceDis" style="display: none"></span>
	</div>

	<div class="zdy_hd_li_div3">
		<em>&nbsp;￥</em><span><?php echo $goods_detail['promotion_price']-$goods_detail['jifen']; ?></span>+<?php echo $goods_detail['jifen']; ?>积分 &nbsp;&nbsp;支持<?php echo $goods_detail['jifen']; ?>消费积分抵扣<?php echo $goods_detail['jifen']; ?>.00元
	</div>
	
	
	<?php if($goods_detail['max_buy']>0): ?>
	<hr class="with-margin-l" />
	<hr class="divider-line" />
	<div class="price_postage">
		<span class="price_postage_tit">
		<i style="color: #fff;font-size: 12px;padding: 3px;background: #f44;border-radius: 2px;"><?php echo lang('goods_quantity_purchased'); ?></i>&nbsp;<?php echo $goods_detail['max_buy']; ?><?php echo lang('goods_individual'); ?></span>
	</div>
	<?php endif; ?>
	<hr class="with-margin-l" />
	<div class="stock-detail" >
<!-- 			<span class="price_postage_tit">运费：<?php echo $goods_detail['shipping_fee_name']; ?></span> -->
	</div>
</div>
<hr class="with-margin-l" />
<hr class="divider-line" />
<?php if($goods_detail['mansong_name'] != ''): ?>
<div class="price_postage">
	<span class="price_postage_tit js-reduced-send single"><i style="color: #fff;font-size: 12px;padding: 3px;background: #f44;border-radius: 2px;"><?php echo lang('member_full'); ?><?php echo lang('member_reduce'); ?></i>&nbsp;<?php echo $goods_detail['mansong_name']; ?></span>
</div>
<hr class="with-margin-l" />
<hr class="divider-line" />
<?php endif; if($goods_detail['give_point'] != 0): ?>
<div class="price_postage">
	<span class="price_postage_tit"><i class="fa fa-database" style="color: #F44;margin-right: 5px;"></i><?php echo lang('goods_gift_points'); ?><span style="color:#F44;padding:0;"><?php echo $goods_detail['give_point']; ?></span><?php echo lang('minutes'); ?></span>
</div>
<hr class="with-margin-l" />
<?php endif; ?>
	
	<div class="mod_tab_wrap">
		<div class="mod_tab" id="detailTab">
			<span onclick="showProperty(this,1)" class="cur"><?php echo lang('goods_commodity_details'); ?></span>
			<span onclick="showProperty(this,2)" ><?php echo lang('goods_commodity_attribute'); ?></span>
			<span onclick="showProperty(this,3)"><?php echo lang('goods_commodity_evaluation'); ?></span>
		</div>
	</div>
	
	<!-- 商品详情 -->
	<div class="detail_info_wrap" id="p-detail">
		<div class="detail_list" id="content"><?php echo $goods_detail['description']; ?></div>
	</div>
	<!-- 商品属性 -->
	<div class="detail_info_wrap p-attribute" id="p-attribute" style="display:none;" >
		<?php if(count($goods_detail['goods_attribute_list']) > 0): ?>
			<ul class="attribute-ul">
				<?php foreach($goods_detail["goods_attribute_list"] as $vo): ?>
				<li>
					<em><?php echo $vo['attr_value']; ?>：</em>
					<span id="goods_attr_" title="<?php echo $vo['attr_value_name']; ?>" class="goods-attr-value"><?php echo $vo['attr_value_name']; ?></span>
				</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
	
	<!-- 商品评论 -->
	<div class="comment-type" id="productproperty" style="display:none;">
		<ul class="tab-nav">
			<li class="productproperty-list current" data-type="0" ><?php echo lang('whole'); ?><em>(<?php echo $evaluates_count['evaluate_count']; ?>)</em></li>
			<li class="productproperty-list" data-type="4"  ><?php echo lang('goods_picture'); ?> <em>(<?php echo $evaluates_count['imgs_count']; ?>)</em></li>
			<li class="productproperty-list" data-type="1" ><?php echo lang('goods_praise'); ?> <em>(<?php echo $evaluates_count['praise_count']; ?>)</em></li>
			<li class="productproperty-list" data-type="2" ><?php echo lang('goods_comments'); ?> <em>(<?php echo $evaluates_count['center_count']; ?>)</em></li>
			<li class="productproperty-list" data-type="3" > <?php echo lang('goods_bad'); ?> <em>(<?php echo $evaluates_count['bad_count']; ?>)</em></li>
		</ul>
		<!-- 评论展示 -->
		<div id="comment_content">
			<div class="comment-con"></div>
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
	<!-- 弹出框 -->
	<div class="success-tip-line" id="success_tip_line" style="display: none;"><?php echo lang('successfully_joined_shopping_cart'); ?>！</div>
	<div class="mask" id="mask" style="display: none;"></div>
	<span id="addcart_way" style="display: none;"><i></i></span>
	<section class="s-buy" id="s_buy">
		<div class="popup"  id="popup" style="-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;display: none"></div>
		<ul class="s-buy-ul">
			<li class="s-buy-pro">
				<span class="pro-img">
					<input type="hidden" id="default_img" value="<?php echo $goods_detail['img_list'][0]['pic_id']; ?>" />
					<img src="<?php echo __IMG($goods_detail['img_list'][0]['pic_cover_small']); ?>" >
				</span>
				<div class="pro-info">
					<p class="name" ><?php echo $goods_detail['goods_name']; ?></p>
					<p class="pro-price" id="price">
						￥<?php if($goods_detail['promotion_price'] < $goods_detail['member_price']): ?><?php echo $goods_detail['promotion_price']; else: ?><?php echo $goods_detail['member_price']; endif; if($goods_detail['point_exchange_type']==1 && $goods_detail['point_exchange']>0): ?>
						<span style="font-size:16px;display: inline-block;vertical-align: middle;">+<?php echo $goods_detail['point_exchange']; ?><?php echo lang('goods_integral'); ?></span>
						<?php endif; ?>
					</p>
				</div>
				<i class="icon-close" id="icon_close"></i>
			</li>
		</ul>
		<hr class="with-margin-l" />
		<ul class="s-buy-ul specification" id="specification" style="z-index: 9000;">
			<?php if(is_array($goods_detail['spec_list']) || $goods_detail['spec_list'] instanceof \think\Collection || $goods_detail['spec_list'] instanceof \think\Paginator): if( count($goods_detail['spec_list'])==0 ) : echo "" ;else: foreach($goods_detail['spec_list'] as $k=>$spec): ?>
			<li class="s-buy-li" >
				<div class="left"><?php echo $spec['spec_name']; ?>：</div>
				<div class="right" name="specvals" >
				<?php if(is_array($spec['value']) || $spec['value'] instanceof \think\Collection || $spec['value'] instanceof \think\Paginator): if( count($spec['value'])==0 ) : echo "" ;else: foreach($spec['value'] as $key=>$spec_value): if($spec_value['spec_id'] == $spec['spec_id']): ?>
						<button class="select" name="Span<?php echo $k; ?>" id="<?php echo $spec_value['spec_id']; ?>:<?php echo $spec_value['spec_value_id']; ?>" onclick="change(this);">
						<?php echo $spec_value['spec_value_name']; ?>
						</button>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</li>
			<hr class="with-margin-l" />
			<?php endforeach; endif; else: echo "" ;endif; if(is_array($goods_detail['sku_list']) || $goods_detail['sku_list'] instanceof \think\Collection || $goods_detail['sku_list'] instanceof \think\Paginator): if( count($goods_detail['sku_list'])==0 ) : echo "" ;else: foreach($goods_detail['sku_list'] as $k=>$pro_skus): ?>
			<input type="hidden" id="goods_sku<?php echo $k; ?>" value="<?php echo $pro_skus['attr_value_items']; ?>" stock="<?php echo $pro_skus['stock']; ?>" <?php if($pro_skus['promote_price'] < $pro_skus['member_price']): ?>price="<?php echo $pro_skus['promote_price']; ?>" <?php else: ?>price="<?php echo $pro_skus['member_price']; ?>"<?php endif; ?> promotion_price="<?php echo $pro_skus['promote_price']; ?>" member_price="<?php echo $pro_skus['member_price']; ?>" skuid="<?php echo $pro_skus['sku_id']; ?>" skuname="<?php echo $pro_skus['sku_name']; ?>" class="sku-array">
			<?php endforeach; endif; else: echo "" ;endif; ?>
			<input type="hidden" id="goods_sku_num" value="100">
			<li class="s-buy-li">
				<div class="left" style="float:left;"><?php echo lang('member_quantity_purchased'); ?>：</div>
				<div class="right">
					<span class="reduce quantity-minus-disabled">-</span>
					<input class="number" name="quantity" autocomplete="off" value="<?php if($goods_detail['min_buy'] !=0): ?><?php echo $goods_detail['min_buy']; else: ?>1<?php endif; ?>" min="<?php if($goods_detail['min_buy'] !=0): ?><?php echo $goods_detail['min_buy']; else: ?>1<?php endif; ?>" max="<?php echo $goods_detail['stock']; ?>" id="num" />
					<span class="add">+</span>
				</div>
				<?php if($goods_detail['is_stock_visible'] == 1): ?>
				<span style="display: inline-block;margin-top:5px;color:#333;" id="Stock"><?php echo lang('left'); ?><?php echo $goods_detail['stock']; ?><?php echo lang('goods_piece'); ?></span>
				<?php endif; if($goods_detail['max_buy'] != '0' AND $goods_detail['max_buy'] != -1): ?>
				<span style="display: inline-block;margin-top:5px;color:#333;"><?php echo lang('homebuying_restrictions'); ?><?php echo $goods_detail['max_buy']; ?><?php echo lang('goods_piece'); ?></span>
				<?php endif; ?>
			</li>
		</ul>
		<ul class="s-buy-ul">
			<li class="s-buy-btn">
				<a class="btn" id="submit_ok" tag="buyBtn1"><?php echo lang('goods_determine'); ?></a>
				<input id="hiddPDetailID" type="hidden" value="<?php echo $goods_detail['goods_id']; ?>"/>
				<input id="hiddSkuId" type="hidden" />
				<input id="hiddSkuName" type="hidden" />
				<input id="hiddSkuprice" type="hidden" />
				<input id="hiddStock" type="hidden" value="<?php echo $goods_detail['stock']; ?>"/>
				<input type="hidden" id="hidden_shop_name" value="<?php echo $goods_detail['shop_name']; ?>"/>
				<input type="hidden" id="hidden_shop_id" value="<?php echo $goods_detail['shop_id']; ?>"/>
				<input type="hidden" id="is_sale" value="<?php echo $goods_detail['state']; ?>" />
				<input type="hidden" id="goods_id" value="<?php echo $goods_detail['goods_id']; ?>" />
				<input type="hidden" id="code" value="<?php echo $goods_detail['code']; ?>" />
				<input type="hidden" id="max_buy" value="<?php echo $goods_detail['max_buy']; ?>" />
				<input type="hidden" id="min_buy" value="<?php echo $goods_detail['min_buy']; ?>" />
				<input type="hidden" id="jifen" value="<?php echo $goods_detail['jifen']; ?>" />
				<input type="hidden" id="hidden_current_num" value="<?php echo $num; ?>" />
			</li>
		</ul>
	</section>
<script type="text/javascript">
$(function () {
	countDown();//计时器
	
	//分享
	$.ajax({
		type:"post",
		data : {"shop_id" : "<?php echo $shop_id; ?>" , "flag" : "goods" , "goods_id" : "<?php echo $goods_id; ?>"},
		url : "<?php echo __URL('APP_MAIN/goods/getShareContents'); ?>",
		success : function(data){
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
	});
});

//商品评价
$(".comment-type li").click(function() {
	var type = $(this).data("type");
	var target = $(this);
	$(".comment-type").find("li").removeClass("current");
	$(".comment-type").find("i").removeClass("cur");
	$(target).addClass("current");
	$(target).children().addClass("cur");
	GetDataList();
})
//点赞
function clickPoint(){
	$.ajax({
		type:"post",
		data : {"goods_id" : "<?php echo $goods_id; ?>"},
		url : "<?php echo __URL('APP_MAIN/Goods/getClickPoint'); ?>",
		success : function(data){
			// alert(JSON.stringify(data));
		    if(data['code']>0){
		    	$(".fa-thumbs-up").css("color","#FF8855");
		    }
		}
	});
}


function showProperty(sobj,type){
	$("#detailTab span").removeClass("cur");
	$(sobj).addClass("cur");
	if(type==1){
		$("#productproperty").hide();
		$("#p-detail").show(); 
		$("#p-attribute").hide();
	}else if(type == 2){
		$("#productproperty").hide();
		$("#p-detail").hide();
		$("#p-attribute").show();
	}else{
		$("#productproperty").show();
		$("#p-detail").hide(); 
		$("#p-attribute").hide();
		GetDataList();
	}
}

/**
* 分页显示
* @param {Object} pageindex
*/
function GetDataList(){
	var commentsType=$(".comment-type li.current").attr('data-type');
	$.ajax({
		type:"post",
		url:"<?php echo __URL('APP_MAIN/Goods/getGoodsComments'); ?>",
		data:{'comments_type' : commentsType, "goods_id" : $("#goods_id").val() },
		dataType:'json',
		success:function(data){
			var listhtml='';
			if(data['data'].length==0){
				$('.comment-con').html('<div class="tip-box"><i class="tip-icon"></i><div class="tip-text"><?php echo lang("no_comment_yet"); ?></div></div>');
				$('#pagination').hide();
				return false;
			}
			for(var i=0;i<data['data'].length;i++){
				var dataitem=data['data'][i];
				var member_name=dataitem['member_name'];
				member_name=dataitem['is_anonymous']==1?member_name.replace(member_name.substring(1,member_name.length),'***')+'(<?php echo lang("anonymous"); ?>)':member_name;
				listhtml+=' <div class="tablelist" style="border-bottom: 1px solid #e5e5e5;margin-bottom: 10px;">'
					+'<div class="user_info" style="margin-right:10px;">'
					+'<div class="face"><img src="__TEMP__/<?php echo $style; ?>/public/images/default_user_portrait_0.png" style="width:35px;border-radius: 50%;"/></div>'
					+'<div class="name-box">'+member_name+'</div>'
					+'</div>'
					+'<dl>'
					+'<dd>'+dataitem['content']+'</dd>'
				if(dataitem['image']!=''){
					var imgs_arr=dataitem['image'].split(',');
					listhtml+='<dd style="margin:5px 0;">'
					for(var key in imgs_arr){
						listhtml+='<img src="'+__IMG(imgs_arr[key])+'" alt="" style="max-width:100%"/>';	
					}
					listhtml+='</dd>';
					listhtml+='<dd class="photo-viewer"></dd>'
				}	
				listhtml+='<div class="date"><span>'+timeStampTurnTime(dataitem['addtime'])+'</span> <span></span></div>';
				listhtml+='</dl>';
				if(dataitem['again_content']!=''){
					
					listhtml+='<div style="margin-left:-1px;float:right;margin-top: 9px;width:75%;"><?php echo lang("goods_additional_evaluation"); ?>：</div>'
					+'<dl>'
					+'<div style="width: 26%;margin-right: 10px;height:auto;float: left;"></div>'
					+'<dd>'+dataitem['again_content']+'</dd>'
					if(dataitem['again_image']!=''){
						var imgs_arr=dataitem['again_image'].split(',');
						listhtml+='<dd>'
						for(var key in imgs_arr){
							listhtml+='<img src="'+__IMG(imgs_arr[key])+'" style="width:100%;" />';
						}
						listhtml+='</dd>';
					}
					listhtml+='<div class="date"><span>'+timeStampTurnTime(dataitem['again_addtime'])+'</span> <span></span></div>';
					listhtml+='</dl>';
				}
				listhtml+='</div>';
			}
			$(".comment-con").html(listhtml);
		}
	});
}
</script>
	<script language="javascript" src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"> </script>
<input type="hidden" id="appId" value="<?php echo $signPackage['appId']; ?>">
<input type="hidden" id="jsTimesTamp" value="<?php echo $signPackage['jsTimesTamp']; ?>">
<input type="hidden" id="jsNonceStr"  value="<?php echo $signPackage['jsNonceStr']; ?>">
<input type="hidden" id="jsSignature" value="<?php echo $signPackage['jsSignature']; ?>">

	
<div class="js-bottom-opts bottom-fix">
	<div class="responsive-wrapper">
		<a href="<?php echo __URL('APP_MAIN'); ?>" class="new-btn buy-cart">
			<img src="__TEMP__/<?php echo $style; ?>/public/images/go_home.png" style="height:20px;margin-top: 4px;"/>
			<span class="desc"><?php echo lang("home_page"); ?></span>
		</a>
		<a href="<?php echo $list['value']['service_addr']; ?>" class="new-btn buy-cart" target="_blank">
			<img src="__TEMP__/<?php echo $style; ?>/public/images/kefux.png" style="width:20px;heigth:20px;margin-top: 4px;"/>
			<span class="desc"><?php echo lang('united_states_customer_service'); ?></span>
		</a>
		<a id="global-cart" href="<?php echo __URL('APP_MAIN/goods/cart?shop_id='.$shop_id); ?>" class="new-btn buy-cart <?php if($carcount>0): ?>buy-cart-msg<?php endif; ?> ">
			<i class="iconfont icon-shopping-cart"></i>
			<span class="desc"><?php echo lang('goods_cart'); ?></span>
		</a>
		<div class="big-btn-2-1">

			<?php if($buyed == 1): ?>
			<a href="javascript:;" onclick="javascript:alert('此产品只能购买一次');" class="big-btn orange-btn"><?php echo lang('goods_add_cart'); ?></a>
			<a href="javascript:;" onclick="javascript:alert('此产品只能购买一次');" class="big-btn red-btn">
			<?php echo lang('goods_buy_now'); ?></a>
			<?php else: ?>
				<a href="javascript:;" class="big-btn orange-btn" id="addCart"><?php echo lang('goods_add_cart'); ?></a>
				<a href="javascript:;" class="big-btn red-btn" id="buyBtn1">
				<?php echo lang('goods_buy_now'); ?></a>
			<?php endif; ?>
			
		</div>
	</div>
</div>
<div class="btn_wrap btn_wrap_static btn_wrap_nocart no-server js-shelves">
	<div class="product-status"><?php echo lang('goods_laid_off'); ?></div>
</div>

	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	

</body>
</html>