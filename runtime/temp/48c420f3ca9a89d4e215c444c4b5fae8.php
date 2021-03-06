<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:51:"template/wap\default\Pay\pcOptionPaymentMethod.html";i:1509681262;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo lang('choose_payment_method'); ?>-<?php echo $title; ?></title>
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/pay/pc_option_payment_common.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/pay/pc_option_payment.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<style>
</style>
</head>
<body>
<div class="header container">
	<div class="logo fl">
		<img alt="<?php echo $web_info['title']; ?><?php echo lang('cashier_desk'); ?>" src="<?php echo __IMG($web_info['logo']); ?>" />
	</div>
</div>

<div class="layout border-top cart-btn-wrap">
		<div class="container clearfix">
			<div
				class="fl padding-left border-left border-middle border-sub cart-address"><?php echo lang('submitted_successfully'); ?></div>
		</div>
		<div class="js-main container order border border-gray-white text-default">
			<div
				class="order-info bg-gray-white padding-small-top padding-small-bottom padding-large-left padding-large-right border-bottom">
				<p>
					<?php echo $pay_value['pay_body']; ?> <span class="text-sub"><?php echo lang('payment_transaction'); ?>：<?php echo $pay_value['out_trade_no']; ?></span>
				</p>
				<p>
					<?php echo lang('payer'); ?>：<span class="text-sub"><?php echo $member_info['user_info']['nick_name']; ?></span>
				</p>
				<p>
					<?php echo lang('total_order_payable'); ?>：<span class="text-mix">￥<?php echo $pay_value['pay_money']; ?></span>
				</p>
				<p class="text-sub" style="color: #333;"><?php echo lang('please_you'); ?><span class="font-red j_orderTime" style="color: #d93600;">00:00:00</span><?php echo lang('payment_completed_within_order_or_the_order_will_be_automatically_closed'); ?>。</p>
			</div>
			<div class="padding-small order-container">
				<div class="tip-title m-l-15 m-r-15 pays">
					<span class="padding-large-left"><?php echo lang('mode_of_payment'); ?></span>
					<div class="border border-mix"></div>
				</div>
				<div class="pay-way item-checked margin padding clearfix pays js-select-pay">
					<?php if($pay_config['wchat_pay_config']['is_use'] ==1 || $pay_config['ali_pay_config']['is_use'] == 1): if($pay_config['wchat_pay_config']['is_use']==1): ?>
						<div class="item" data-pay="wchat">
							<i></i>
							<a class="pic-center border-none" href="javascript:;">
								<img src="__TEMP__/<?php echo $style; ?>/public/images/pay/wechat_qr.png">
							</a>
						</div>
						<?php endif; if($pay_config['ali_pay_config']['is_use']==1): ?>
						<div class="item" data-pay="alipay">
							<i></i>
							<a class="pic-center border-none" href="javascript:;">
								<img src="__TEMP__/<?php echo $style; ?>/public/images/pay/alipay.png">
							</a>
						</div>
						<?php endif; else: ?>
						<span class="none_pays"><?php echo lang('not_yet_open_payment_background'); ?></span>
					<?php endif; ?>
				</div>
				<div class="text-center">
					<a class="cart-btn text-default disabled" id="pay" href="javascript:;"><?php echo lang('immediate_pay'); ?></a>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="copyright">
			<div class="ft-copyright">
				<a href="javascript:;" target="_blank"><?php echo $title; ?><?php echo lang('provide_technical_support'); ?></a>
			</div>
		</div>
	</div>
	<div class="mask-layer"></div>
	<article class="mask-layer-dialog">
		<header>
			<i>x</i>
		</header>
		<div class="mask-warning-img">
			<img src="__TEMP__/<?php echo $style; ?>/public/css/pay/pay_masklayer_warning.png"/>
		</div>
		<div class="mask-content">
			<h3><?php echo lang('please_complete_the_payment_operation_on_the_new_open_page'); ?>。</h3>
			<p><?php echo lang('please_do_not_close_this_window_before_payment_is_complete'); ?>。<br/><?php echo lang('please_click_the_button_below_after_you_complete_the_payment'); ?></p>
			<button><?php echo lang('payment_has_been_completed_check_my_membership_center'); ?></button>
		</div>
	</article>
	<input type="hidden" value="<?php echo getTimeStampTurnTime($pay_value['create_time'] ); ?>" id="create_time" />
<!-- 	<input type="hidden" value="<?php echo getTimeStampTurnTime($pay_value['create_time'] + ($shop_config['order_buy_close_time']*60)); ?>" id="buy_close_time" /> -->
	<input type="hidden" value="<?php echo $shop_config['order_buy_close_time']; ?>" id="buy_close_time" />
<script>
var interval = null;
function countdown(){
	$.ajax({
		url : "<?php echo __URL('APP_MAIN/Pay/getPayTimeRemaining'); ?>",
		type : "post",
		data : { "out_trade_no" : "<?php echo $pay_value['out_trade_no']; ?>" },
		success : function(time){
			$(".j_orderTime").text(time);
		}
	});
}

function setFooterStyle(){

	var main_height = $(".js-main").height()+220;
	var window_height = $(window).height();
	if(main_height>window_height){
		$('.footer').css("position","relative");
	}else{
		$('.footer').css("position","fixed");
	}
}

window.onresize = function(){
	setFooterStyle();
}
$(function() {
	setFooterStyle();
		
	//设置时间倒计时
	countdown();
	interval = setInterval("countdown()",1000);

	$(".js-select-pay>div").click(function() {
		$(".js-select-pay>div").removeClass("selected");
		$(this).addClass("selected");
		$("#pay").removeClass("disabled");
	})

	//去支付
	$("#pay").click(function() {
		if ($('.js-select-pay>.selected').attr("data-pay") != null) {
			
			switch ($('.js-select-pay>.selected').attr("data-pay")) {
			case "wchat":
				url = '<?php echo __URL('APP_MAIN/pay/wchatpay?no='.$pay_value['out_trade_no']); ?>';
				break;
			case "alipay":
				//跳转到支付宝
				url = '<?php echo __URL('APP_MAIN/pay/alipay?no='.$pay_value['out_trade_no']); ?>';
				break;
			}
			window.open(url);
			$(".mask-layer-dialog").fadeIn(300);
			$(".mask-layer").fadeIn(300);
		}
	})
	
	//关闭弹出层
	$(".mask-layer-dialog header i").click(function(){
		$(".mask-layer-dialog").fadeOut(300);
		$(".mask-layer").fadeOut(300);
	})
	
	$(".mask-content button").click(function(){
		window.location.href = "<?php echo __URL('APP_MAIN/member/index'); ?>";
	})
})
</script>
</body>
</html>