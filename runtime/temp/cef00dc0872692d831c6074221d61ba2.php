<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:45:"template/wap\default\\Order\orderExpress.html";i:1504579077;s:30:"template/wap\default\base.html";i:1507430043;s:34:"template/wap\default\urlModel.html";i:1505377008;}*/ ?>
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

    <link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/foundation.css">
    
    <link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/common-v4.4.css">
	<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/person-v4.4.css">
	<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/my_order_list.css">
    <script src="__TEMP__/<?php echo $style; ?>/public/js/order.js"></script>
	<script type="text/javascript">window.onerror=function(){return true;}</script>
	<script type="text/javascript">
		var CONTROLLER = "<?php echo __URL('APP_MAIN/Orders'); ?>";
		var APP_MAIN = 'APP_MAIN';
		function backPage(){
			window.location.href="<?php echo __URL('APP_MAIN/member/'); ?>";
		};
		
	</script>
	<style>
	.express_goods{
		line-height: 23px;
	    padding: 7px;
	    font-size: 12px;
	    color: #666;
		}
		.head {
   		 position: inherit;
		height:auto;
		}
		.cf-tab-item a {
		    width: 19%;
		}
		.cf-container .cf-tab-item.select a{
		color:#707070;
		border-bottom:2px solid rgb(245, 183, 8);
		}
		.express_info{
			width:100%;
			min-height: 100px;
			background: #fff;
			padding:20px 0;
		}
		.express_info ul{
			width: 92%;
			margin:0 4%;
			border-left: 1px solid #CCCCCC;
		}
		.express_info ul li{
			width: 96%;
			margin-left: 15px;
			border-bottom: 1px solid #eee;
			position: relative;
		}
		.express_info ul li:last-child{
			border-bottom: none;
		}
		.express_info ul li .Traces,.express_info ul li .AcceptTime{
			min-height: 30px;
			vertical-align: middle;
			color: #999999;
		}
		.express_info ul li .Traces{
			font-size: 14px;

		}
		.express_info ul li .AcceptTime{
			font-size: 12px;
			line-height: 30px;
		}
		.express_info ul li .Dot{
			width: 8px;
			height: 8px;
			border-radius: 50%;
			background: #CCCCCC;
			position: absolute;
			z-index: 5;
			left: -20px;
			top: 41%;
		}
		.express_info ul li:first-child .Dot{
			background: #39C267;
			top:0;
			width: 12px;
			height: 12px;
			border:2px solid #A1EEC2;
			left: -21px;
		}
		.express_info ul li:first-child .Traces,.express_info ul li:first-child .AcceptTime{
			color: #39C267;
		}
		.express_title{
			height: 40px;
		    line-height: 40px;
		    background: #fff;
		    border-bottom: 1px solid #ddd;
		    margin-top: 10px;
		    color: #666;
		    font-size: 14px;
		    padding-left: 10px;
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
	

    <!--topbar end-->
    <div class="main myorder">
    <section class="head">
    <a class="head_back" id="backoutapp" onclick="window.history.go(-1)" href="javascript:void(0)"><i class="icon-back"></i></a>
		<div class="head-title"><?php echo lang('shipped_order'); ?></div>
		<div class="cf-container" data-reactid="2">
    		<div class="cf-edge" data-reactid="3"></div>
			<ul class="cf-content" data-reactid="4">
				<?php if(is_array($order['goods_packet_list']) || $order['goods_packet_list'] instanceof \think\Collection || $order['goods_packet_list'] instanceof \think\Paginator): if( count($order['goods_packet_list'])==0 ) : echo "" ;else: foreach($order['goods_packet_list'] as $key=>$vo): ?>
    			<li class="cf-tab-item" data-index="1" data-reactid="7"><a statusid="<?php echo $key; ?>" href="javascript:;" ><?php echo $vo['packet_name']; ?></a></li>
	    		<?php endforeach; endif; else: echo "" ;endif; ?>
	    	</ul>
		</div>
	</section>
    	<!-- 商品列表 -->
    	
	    	<?php if(is_array($order['goods_packet_list']) || $order['goods_packet_list'] instanceof \think\Collection || $order['goods_packet_list'] instanceof \think\Paginator): if( count($order['goods_packet_list'])==0 ) : echo "" ;else: foreach($order['goods_packet_list'] as $key=>$vo): ?>
	    	<div class="status status-<?php echo $key; ?>" data-express-id="<?php echo $vo['express_id']; ?>" data-is-express="<?php echo $vo['is_express']; ?>">
	    	<div style="height:80px;line-height:80px;">
		    	<?php if(is_array($vo['order_goods_list']) || $vo['order_goods_list'] instanceof \think\Collection || $vo['order_goods_list'] instanceof \think\Paginator): if( count($vo['order_goods_list'])==0 ) : echo "" ;else: foreach($vo['order_goods_list'] as $key=>$vg): ?>
		    	<img src="<?php echo __IMG($vg['picture_info']['pic_cover_micro']); ?>" style="margin-left: 10px;"/>
		    	<?php endforeach; endif; else: echo "" ;endif; ?>
		    </div>
		    <?php if($vo['is_express'] == 1): ?>
		    	<div style="background:#fff;" class="express_goods">
		    		<span><?php echo lang('goods_total'); ?><?php echo count($vo['order_goods_list']); ?><?php echo lang('goods_goods'); ?>，<?php echo lang('obey'); ?><?php echo $vo['express_name']; ?><?php echo lang('accept_for_carriage'); ?></span><br/>
		    		<span><?php echo lang('waybill_number'); ?>：<?php echo $vo['express_code']; ?></span>
		    	</div>
		    	<!-- JS动态查询物流信息 -->
		    	<div class="express_title">
		    		物流跟踪
		    	</div>
		    	<div class="express_info">
	    			<ul id="js-express-info">
	    				
	    			</ul>
	    		</div>
		    	<?php else: ?>
	    		<div style="background:#fff;" class="express_goods">
		    		<span><?php echo lang('goods_total'); ?><?php echo count($vo['order_goods_list']); ?><?php echo lang('goods_goods'); ?>,<?php echo lang('no_logistics_required'); ?></span><br/>
		    		<span><?php echo lang('waybill_number'); ?>：--</span>
		    	</div>
		    	<div style="background:#fff;margin-top:10px;color:rgb(245, 183, 8);font-size:13px;" class="express_goods">
		    		<div><?php echo lang('member_logistics_tracking'); ?>：</div>
			    	<div><?php echo lang('no_logistics_information'); ?></div>
		    	</div>
	    	<?php endif; ?>
	    	</div>
	    	<?php endforeach; endif; else: echo "" ;endif; ?>
    	
    </div>
 <script>
 	$(function(){
 		$('.cf-container .cf-tab-item').eq(0).click();
 		$("div[data-express-id]").each(function(){
 			var curr = $(this);
 			var express_id = curr.attr("data-express-id");
 			var is_express = curr.attr("data-is-express");
 			if(parseInt(is_express)){
				$('.js-express-info-'+express_id).html("<?php echo lang('in_load'); ?>...");
	 			if(express_id != undefined){
		 			$.ajax({
		 	 			type : 'post',
		 				url : "<?php echo __URL('APP_MAIN/order/getordergoodsexpressmessage'); ?>",
		 				data : {"express_id":express_id},
		 				beforesend : function(){
		 					showLoadMaskLayer();
		 				},
		 				success : function(data){
		 					var html = '';
		 					if (data.length > 0) {
		 						$(".express_title").text("物流跟踪");	
		 						for (var i = 0; i < data.length; i++){
		 							html +='<li>';
				    				html +='<div class="Traces">'+data[i]["AcceptStation"]+'</div>';
				    				html +='<div class="AcceptTime">'+data[i]["AcceptTime"]+'</div>';
									html +='<div class="Dot"></div>';
				    				html +='</li>';
		 						}
		 					}else{
		 						$(".express_title").text(data['Reason']);						
		 					}
		 					$('#js-express-info').html(html);
		 					hiddenLoadMaskLayer();
		 				}
		 	 		});
	 			}
 			}
 		});
 	});
	 $('.cf-container .cf-tab-item').click(function(){
   		$('.cf-container .cf-tab-item').removeClass('select');
   		$(this).addClass('select');
   		//alert($(this).find('a').attr('statusid'));
   		$(".status").hide();
   		$(".status-"+$(this).find('a').attr('statusid')).show();
	  })
 </script>

	
	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	

</body>
</html>