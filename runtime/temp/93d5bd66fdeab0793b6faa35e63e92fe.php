<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:40:"template/wap\default\Index\discount.html";i:1503575977;s:30:"template/wap\default\base.html";i:1507430043;s:34:"template/wap\default\urlModel.html";i:1505377008;s:37:"template/wap\default\controGroup.html";i:1502935840;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/components.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/group_goods_list.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/group_buy.css">
<style>
.custom-tag-list{
	margin-bottom:10px;
}
.group-list-box{
	width:100%;
/* 	overflow: visible; */
}
.group-list-box .group-list li {
   
    width: 43%;
    float: left;
	margin: 0 3px 5px 3px;
}
.brand-info .brand-info-right .main-btn {
    font-size: 12px;
    /* width: 52px; */
}

.slick {
    margin-top: 45px;
}
.custom-tag-list {
    margin-top: 0;
}
.custom-tag-list{
	padding-top:0;
}

::-webkit-scrollbar{
	width:0px;
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
	<div class="head-title"><span style="margin-left: 40px;"><?php echo lang("goods_discount"); ?></span>
	<style>
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
	width: 28px;
	height: 28px;
	display: block;
	margin:0 auto 0 auto;
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
</script>
	</div>
</section>

<?php if($discounts_adv['is_use'] == 1): if($discounts_adv['adv_list'][0]['adv_image'] != ''): ?>
<div class="slick">
	<a href="<?php echo $discounts_adv['adv_list'][0]['adv_url']; ?>">
		<img src="<?php echo __IMG($discounts_adv['adv_list'][0]['adv_image']); ?>" >
		<!-- style="height:<?php echo $discounts_adv['ap_height']; ?>px;" -->
	</a>
</div>
   <?php endif; endif; ?>


	<div class="motify" style="display: none;"><div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div></div>
	
<div class="custom-tag-list clearfix">
<!-- 	<div class="custom-tag-list-menu-block"> -->
<!-- 		<ul class="custom-tag-list-side-menu" style="position: relative;width:100%;" id='goods_group'> -->
<!-- 			<li val="0"><a class="selected"  onclick="showCategorySecond(this,0)"><span>全部</span></a></li> -->
<!-- 			<?php if(is_array($goods_category_list_1) || $goods_category_list_1 instanceof \think\Collection || $goods_category_list_1 instanceof \think\Paginator): if( count($goods_category_list_1)==0 ) : echo "" ;else: foreach($goods_category_list_1 as $k=>$category): ?> -->
<!-- 			<li val="<?php echo $category['category_id']; ?>"> -->
<!-- 				<a onclick="showCategorySecond(this,<?php echo $category['category_id']; ?>)"><span><?php echo $category['category_name']; ?></span></a> -->
<!-- 			</li> -->
<!-- 			<?php endforeach; endif; else: echo "" ;endif; ?> -->
<!-- 		</ul> -->
<!-- 	</div> -->
	<div class="group-list-box">
		<ul class="group-list"></ul>
	</div>
<script>
	$(function(){
		showCategorySecond(0,0);
	})
	function showCategorySecond(obj,category_id){
		//设置选中效果
		if($(obj).length!=0){
			$(".custom-tag-list-side-menu li a").removeClass("selected");
			$(obj).addClass("selected");
		}
		
		$.ajax({
			url:'<?php echo __URL('APP_MAIN/Index/discount'); ?>',
			async:false,
			data:{'category_id':category_id},
			dataType:'json',
			success:function(data){
				var list_html='';
				if(data.length==0){
					$('.group-list').html('<div class="nothing-data" align="center"><img src="__TEMP__/<?php echo $style; ?>/public/images/wap_nodata.png"/><div><?php echo lang("goods_no_goods_you_want"); ?>…</div></div>');
					return false;
				}
				for(key in data){	
					var item=data[key];
					var img = "";
					if(item.picture != null){
						img = item.picture.pic_cover_small;
					}
					list_html+='<li>'
						+'<div class="p-img">'
						+'<a href="'+__URL('APP_MAIN/goods/goodsdetail?id='+item.goods_id)+'" title="'+item.goods_name+'">'
					    +'<img src="'+__IMG(img)+'">'
						+'</a>'
						+'<div class="brand-time">'
						+'<i></i>'
						+'<span class="settime" starttime="'+timeStampTurnTime(item.start_time)+'" endtime="'+timeStampTurnTime(item.end_time)+'"></span>'
						+'</div>'
						+'</div>'
						+'<span class="brand-name">'+item.goods_name+'</span>'
						+'<div class="brand-info"  style="height:initial;">'
						+'<div class="brand-info-left"  style="float:none;">'
						+'<p class="b-price" style="float:left;margin:5px 0;">￥'+item.promotion_price+'<em><?php echo lang("element"); ?></em></p>'
						+'<p class="buyer" style="float:right;line-height:31px;"><s>￥'+item.price+'<?php echo lang("element"); ?></s></p>'
						+'</div>'
						+'</div></li>';
				}
				$('.group-list').html(list_html);
			}
		});	
	}
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
</div>

	 
	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	

</body>
</html>