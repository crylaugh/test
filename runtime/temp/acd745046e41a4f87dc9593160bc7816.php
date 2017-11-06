<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:44:"template/wap\default\\Member\toWithdraw.html";i:1502935840;s:30:"template/wap\default\base.html";i:1507430043;s:34:"template/wap\default\urlModel.html";i:1505377008;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/normalize.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/dis-v4.4.css">
<style>
.arrow {position: absolute; right:30px;top: 48%; }
.extract { margin: 44px 0px 0px 0px;background:#FFF;padding:20px 15px;}
input {width: 100%;height: 23px;}
.extract-monynumber .columns {padding: 10px;background:#fff;}
.tip-text{color:#FF4040;margin-top:45px;padding:10px;margin-bottom:0;}
.button.red {padding: 8px 0px;line-height: 1.33;border-radius: 3px;background: #FF4040;margin:auto;border-color: #ec522c;width:95%;}
.btn_all{width:100%;text-align:center;}
.horn-text{background:none;color:#000000;border:none;}
.extract-number .number {font-size: 16px; }
.side-nav li{ position: relative;}
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
		<div class="head-title"></div>
	</section>
	
	<div class="motify" style="display: none;"><div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div></div>
	
<section class="head">
	<a class="head_back" href="javascript:window.history.go(-1);"><i class="icon-back"></i></a>
	<div class="head-title" ><?php echo lang('apply_for_cash'); ?></div>
</section>

<!--submit errow tip begin-->
    <div data-alert class="alert-box alert" id="errerMsg" style="display: none;"><a href="#" class="close">&times;</a></div>
    <!--submit errow tip end-->
    <!--content begin-->
        <div class="panel extract">
		        <div class="commision-total"><span class="span-title" style="color:#000000;"><?php echo lang('member_cash_available'); ?>：</span><span class="number" style="font-size:18px;color:#FF4040;"id="Amount">¥<?php echo $account; ?></span></div>
        </div>
        
        <div class="panel extract-account" style="border:0px;">
            <ul class="side-nav" >
                 <?php if(count($account_list) == 0): ?>
                	<li ><a href="<?php echo __URL('APP_MAIN/member/accountlist?shop_id='.$shop_id); ?>" style="padding:6px 15px;"><span><?php echo lang('please_add_a_cash_account'); ?> <br></span><i class="arrow"></i></a></li>
                <?php else: ?>
                	<li>
                	 <?php if(is_array($account_list) || $account_list instanceof \think\Collection || $account_list instanceof \think\Paginator): $i = 0; $__LIST__ = $account_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					          <a href="<?php echo __URL('APP_MAIN/member/accountlist?shop_id='.$shop_id); ?>" style="padding:6px 15px;" >
					               <span><?php echo $vo['branch_bank_name']; ?><br><?php echo $vo['account_number']; ?> </span>
					               <i class="arrow" ></i></a>
					          </a>
					          <input type="hidden" value="<?php echo $vo['id']; ?>" id="bank_account_id"/>
	                 <?php endforeach; endif; else: echo "" ;endif; ?> 
	                </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="row extract-monynumber">
            <div class="large-12 columns">
                <input type="text" class="" style="border:0px;" id="money" placeholder="<?php echo lang('member_enter_amount'); ?>">
            </div>
            <?php if($cash != '' && $poundage != ''): ?>
            <div class="tip-text"><?php echo lang('member_minimum_withdrawal'); ?><span id="MinaAmountCash"><?php echo $cash; ?></span><?php echo lang('element'); ?>，<?php echo lang('member_must_serve'); ?><span id="IntTimes"><?php echo $poundage; ?></span><?php echo lang('member_integral_multiple'); ?></div>
            <?php else: ?>
            <div class="tip-text"><?php echo lang('member_minimum_withdrawal'); ?><span id="MinaAmountCash">0</span><?php echo lang('element'); ?> ，<?php echo lang('member_must_serve'); ?><span id="IntTimes">1</span><?php echo lang('member_integral_multiple'); ?></div>
            <?php endif; ?>
        </div>
        <div class="btn_all">
	        <a href="javascript:;" onclick="btnSave()" class="button red"><?php echo lang('member_apply_immediately'); ?></a>
            <?php if($withdraw_message != ''): ?>
	        <div class="horn-text"> <?php echo lang('member_notes'); ?>:<?php echo $withdraw_message; ?></div> 
            <?php endif; ?>
        </div>
    
     <input type="hidden" value="<?php echo $shop_id; ?>" id="id"/>

	
	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
 <script type="text/javascript">
   function btnSave(){
	        var shop_id = $("#id").val();
        	var bank_account_id = $("#bank_account_id").val();
            var cash = $.trim($("#money").val());
            var MaxCashAmount = $.trim($("#Amount").text());
            var MinaAmountCash = $.trim($("#MinaAmountCash").text());
            var IntTimes = $.trim($("#IntTimes").html());

            MaxCashAmount = MaxCashAmount.substr(1);
            if(bank_account_id == null || bank_account_id == ""){
            	showBox("<?php echo lang('no_withdrawals_account_was_added'); ?>");
	            return;
            }
            var reg = /^\+?[1-9][0-9]*$/;
      
            if (reg.test(cash)) {
            	cash = Number(cash);
                MaxCashAmount = Number(MaxCashAmount);
                MinaAmountCash = Number(MinaAmountCash);
                if (cash > 0) {
                    if (cash <= MaxCashAmount) {
                        if (cash >= MinaAmountCash) {
                            if (cash % parseInt(IntTimes) == 0) {
                            
                                $.ajax({
                                	type:"post",
                                    url: "<?php echo __URL('APP_MAIN/member/towithdraw'); ?>",
                                    data: { "bank_account_id": bank_account_id, "cash": cash},
                                    success: function (res) {
                                        if (res['code'] >0) {
                                        	showBox("<?php echo lang('member_submitted_for_review'); ?>...");
                                            window.location.href = __URL("APP_MAIN/member/balancewater?shop_id="+shop_id) ;
                                        } else {
                                        	showBox(res.outmessage);
                                        } 
                                    }
                                })
                            } else {
                                //$("#CashAmount").focus();
                                showBox("<?php echo lang('member_withdrawals_must_be'); ?>" + IntTimes + "<?php echo lang('member_integral_multiple'); ?>");
                                return false;
                            }
                        } else {
                            //$("#CashAmount").focus();
                            showBox("<?php echo lang('member_withdrawals_must_greater'); ?>" + MinaAmountCash);
                            return false;
                        }


                    } else {
                        //$("#CashAmount").focus();
                        showBox("<?php echo lang('member_maximum_amount'); ?>" + MaxCashAmount);
                        return false;
                    }
                } else {
                    //$("#CashAmount").focus();
                    showBox("<?php echo lang('member_not_present'); ?>");
                    return false;
                }
            } else {
                //$("#CashAmount").focus();
                showBox("<?php echo lang('member_amount_not_legal'); ?>");
                return false;
            }
        }
    </script>


</body>
</html>