<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:44:"template/wap\default\\Order\myOrderList.html";i:1503882825;s:30:"template/wap\default\base.html";i:1507430043;s:34:"template/wap\default\urlModel.html";i:1505377008;}*/ ?>
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
		var CONTROLLER = "APP_MAIN/orders";
		var APP_MAIN = 'APP_MAIN';
		function backPage(){
			window.location.href="<?php echo __URL('APP_MAIN/member/'); ?>";
		};
		
	</script>

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
    <a class="head_back" id="backoutapp" onclick="window.history.go(-1)"
			href="javascript:void(0)"><i class="icon-back"></i></a>
		<div class="head-title"><?php echo lang('member_my_order'); ?></div>
		<div class="cf-container" data-reactid="2">
    		<div class="cf-edge" data-reactid="3"></div>
			<ul class="cf-content" data-reactid="4">

	    			<li class="cf-tab-item" data-index="1" data-reactid="7" statusid="all"><a href="javascript:GetDataList('all');" ><?php echo lang('whole'); ?></a></li>
	    			<li class="cf-tab-item" data-index="1" data-reactid="7" statusid="0"><a href="javascript:GetDataList(0);" ><?php echo lang('member_pending_payment'); ?></a></li>
					<li class="cf-tab-item" data-index="1" data-reactid="7" statusid="1"><a href="javascript:GetDataList(1);" ><?php echo lang('member_shipment_pending'); ?></a></li>
					<li class="cf-tab-item" data-index="1" data-reactid="7" statusid="2"><a href="javascript:GetDataList(2);" ><?php echo lang('member_goods_received'); ?></a></li>
					<li class="cf-tab-item" data-index="1" data-reactid="7" statusid="3"><a href="javascript:GetDataList(3);" ><?php echo lang('member_received_goods'); ?></a></li>
<!-- 					<li class="cf-tab-item" data-index="1" data-reactid="7" statusid="5"><a href="javascript:GetDataList(5);" >待评价</a></li> -->
					<li class="cf-tab-item" data-index="1" data-reactid="7" statusid="4"><a href="javascript:GetDataList(4);" ><?php echo lang('refund_after_sale'); ?></a></li>
				
	    	</ul>
		</div>
	</section>
    	
    	

		<div class="tabs-content">
			<div class="content active" id="list_content" style="margin-top:30px;">
			</div>
		</div>
        <div id="pay" style="display: none"></div>
        
        <input type="hidden" name="status_hidden" id="status_hidden" value="<?php echo $status; ?>"/>
        <input type="hidden" name="shop_id" id="shop_id" value="<?php echo $shop_id; ?>"/>
    </div>
    <script>
        $(function(){
        	$('.cf-container .cf-tab-item').click(function(){
        		$('.cf-container .cf-tab-item').removeClass('select');
        		$(this).addClass('select');
        	})
        	/* $('.cf-container .cf-tab-item.select').focus();
        	$(".cf-container .cf-content").animate({scrollLeft:$('.cf-container .cf-tab-item.select').offset().left},1000); */
        	var status_hidden=$('#status_hidden').val();
        	GetDataList(status_hidden);
        	$('.cf-container .cf-tab-item').each(function(){
        		if($(this).attr("statusid") == status_hidden)
        			{
        			$(this).addClass('select');
        			}
        	});
        })
        function GetDataList(status){
        	$.ajax({
        		type:'post',
        		async:true,
        		data:{'status':status,'shop_id':$('#shop_id').val()},
        		dataType:'json',
        		beforeSend:function(){
        			showLoadMaskLayer();
        		},
        		success:function(data){
        			//alert(JSON.stringify(data));
        			var datahtml="";
        			if(data.length==0){
        				datahtml+='<div class="myorder-none" ><i class="icon-none"></i><span class="none_01"><?php echo lang("member_no_order_yet"); ?></span><span class="none_02"><?php echo lang("member_go_and_see"); ?></span><span class="none_03"><a href="<?php echo __URL('APP_MAIN/goods/goodslist'); ?>"><?php echo lang("member_look_around"); ?></a></span></div>';
        			
        			}else{
        				for(var i=0;i<data.length;i++){
	        				var ordersitem=data[i];
	        				datahtml+='<div class="list-myorder">';
	        				datahtml+='<div class="ordernumber" style="height:auto;overflow:hidden;line-height:22px;"><span class="order-num" style="font-size: 12px;">'+ordersitem['order_no']+'</span><span class="order-date" style="font-size: 12px;">'+timeStampTurnTime(ordersitem['create_time'])+'</span></div>';
	        				datahtml+='<ul class="ul-product">';
	        				
	        				for(var j=0;j<ordersitem['order_item_list'].length;j++){
	        					
	        					var goodsitem=ordersitem['order_item_list'][j];
	        					datahtml+='<li><a href="'+__URL('APP_MAIN/order/orderdetail?orderId='+goodsitem['order_id'])+'">';
	        					datahtml+='<span class="pic">';
	        					
	        					datahtml+='<img src="'+__IMG(goodsitem['picture']['pic_cover_micro'])+'"></span>';
	        					datahtml+='<div class="text">';
	        					datahtml+='<span class="pro-name" style="font-size: 12px;">'+goodsitem['goods_name']+'</span>';
	        					
	        					datahtml+='<div class="pro-pric" style="margin-top: 5px;"><span style="font-size: 12px;"><?php echo lang("goods_price"); ?>:</span><b style="font-size:12px;font-weight:normal;">￥'+goodsitem['price']+'</b></div>';
	        					
	        					datahtml+='<div class="pro-pric" style="margin-top: 0px;"><span style="font-size: 12px;"><?php echo lang("specifications"); ?>:</span><b style="font-size:12px;font-weight:normal;">'+goodsitem['sku_name']+'</b></div>';
	        					datahtml+='<div class="pro-pric" style="margin-top: 5px;"><span style="font-size: 12px;"><?php echo lang("goods_number"); ?>:</span><b style="font-size:12px;font-weight:normal;">'+goodsitem['num']+'<?php echo lang("goods_piece"); ?></b></div>';
	        					datahtml+='</div></a>';
	        					
	        					datahtml+='<div class="" style="width:100%;float:left;color:#999999;margin-top: 5px;font-size: 12px;padding-top:5px;">';
	        					if(goodsitem['shipping_status']!=0){
	        						datahtml+='<div style="width:20%;float:left;"><?php echo lang("consign"); ?></div>';
	        					}
	        					datahtml += '<div style="width:80%;float:right;text-align:right;">';
	        					
	        					if(ordersitem['payment_type']==4){
	        						if(ordersitem['is_refund']==1 && goodsitem['refund_status']==0 && ordersitem['order_status']==2){
		        						datahtml+='<input type="button" onclick="window.location.href=\''+__URL('APP_MAIN/Order/refundDetail?order_goods_id='+goodsitem['order_goods_id'])+'\'" style="-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;border:1px solid #ccc;color:#333;background-color:white;font-size: 12px;padding:5px 10px 5px 10px;" value="<?php echo lang("list_of_refund_return"); ?>" />&nbsp;&nbsp;';
	        						}
	        					}else{
	        						if(ordersitem['is_refund']==1 && goodsitem['refund_status']==0){
		        						datahtml+='<input type="button" onclick="window.location.href=\''+__URL('APP_MAIN/Order/refundDetail?order_goods_id='+goodsitem['order_goods_id'])+'\'" style="-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;border:1px solid #ccc;color:#333;background-color:white;font-size: 12px;padding:5px 10px 5px 10px;" value="<?php echo lang("list_of_refund_return"); ?>" />&nbsp;&nbsp;';
		        					}
	        					}
	        					
	        					if(goodsitem['refund_status']!=0){
	        						datahtml+='<input type="button" onclick="window.location.href=\''+__URL('APP_MAIN/Order/refundDetail?order_goods_id='+goodsitem['order_goods_id'])+'\'" style="-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;border:1px solid #ccc;color:#333;background-color:white;font-size: 12px;padding:5px 10px 5px 10px;" value="'+goodsitem['status_name']+'" />&nbsp;&nbsp;';
	        					}
	        					
	        					if(ordersitem['order_status'] == 3 || ordersitem['order_status'] == 4){
	        						if(ordersitem['is_evaluate'] == 0){
	        							datahtml += '<a href="'+__URL('APP_MAIN/order/reviewcommodity?orderId='+goodsitem['order_id'])+'"><span style="padding:5px;color: #333;border: 1px solid #ccc;border-radius: 3px;"><?php echo lang("member_i_want_evaluate"); ?></span></a>';
	        						}else if(ordersitem['is_evaluate'] == 1){
	        							datahtml += '<a href="'+__URL('APP_MAIN/order/reviewAgain?orderId='+goodsitem['order_id'])+'"><span style="padding:5px;color: #333;border: 1px solid #ccc;border-radius: 3px;"><?php echo lang("goods_additional_evaluation"); ?></span></a>';
	        						}
	        						
	        					}
	        					datahtml+='</div>';
	        					datahtml+='</div>';
	        					
	        					datahtml+='</li>';
	        				}
							datahtml+='</ul>';
							datahtml+='<div class="totle">';
							datahtml+='<span class="status">'+ordersitem['status_name']+'</span>';
							datahtml+='<span class="price">￥'+ordersitem['order_money']+'</span>';
							datahtml+='<span class="pric-lable"><?php echo lang("total_price"); ?></span>';
							datahtml+='<span class="prc-num"></span></div>';
							datahtml+='<div class="div-button">';
							if(ordersitem['member_operation']!=''){
								for(var x=0;x<ordersitem['member_operation'].length;x++){
									operationitem=ordersitem['member_operation'][x];
									datahtml+='<a href="javascript:void(0)" class="button [radius round] red" style="background-color: '+operationitem['color']+';border: 1px solid '+operationitem['color']+';" onclick="operation(\''+operationitem['no']+'\','+ordersitem['order_id']+')">'+operationitem['name']+'</a>';
								}
							}
							datahtml+='</div></div>';
	        			}
        			}
        			$('#list_content').html(datahtml);
        			hiddenLoadMaskLayer();
        		}
        	});
        }
        //app端返回值
        $("#backoutapp").click(function (){
            var json ={
            		"center" : "1",
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