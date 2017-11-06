<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:48:"template/wap\default\\Member\memberIndexB2C.html";i:1509527798;s:30:"template/wap\default\base.html";i:1507430043;s:34:"template/wap\default\urlModel.html";i:1505377008;s:32:"template/wap\default\footer.html";i:1507607166;}*/ ?>
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

<link href="__TEMP__/<?php echo $style; ?>/public/css/my/style.css" type="text/css" rel="stylesheet" media="all" />
<link href="__TEMP__/<?php echo $style; ?>/public/css/my/swiper.css" type="text/css" rel="stylesheet" media="all" />
<link href="__TEMP__/<?php echo $style; ?>/public/css/my/user.css" type="text/css" rel="stylesheet" media="all" />
<script src="__TEMP__/<?php echo $style; ?>/public/js/my/jquery-1.10.2.min.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/my/swiper.js"></script>
<style type="text/css">
  .tips{
    width: 16px;
    height: 16px;
    background: #fff;
    border:1px solid #F93F40; 
    border-radius: 50%;
    font-size: 10px;
    line-height: 16px;
    text-align: center;
    color: #F93F40;
    position: absolute;
    z-index: 10;
    right: 40px;
    top: -6px;
  }
  .payment ul li{
    position: relative;
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
	
<?php echo $resss; ?>
<div class="hy_tb_div" >
  <div class="hy_tb_div1">
    <div class="hy_tb_div2">
		<a href="#">
		<?php if($member_info[user_info][user_headimg]): ?>
		<img src="<?php echo __IMG($member_info[user_info][user_headimg]); ?>"/>
		<?php else: ?>
		<img src="__TEMP__/<?php echo $style; ?>/public/images/my/user/touxiang.gif" />
		<?php endif; ?>
		</a>
	</div>
    <div class="hy_tb_div3">
        <div class="hy_tb_div4">
        <?php if($member_info[user_info][real_name]): ?><?php echo $member_info[user_info][real_name]; else: ?><?php echo $member_info[user_info][nick_name]; endif; ?>
        </div>
        <div class="hy_tb_div4"><span>等级：<?php if($member_info[user_info][jihuo]): ?><?php echo $ns_member[0][level_name]; else: ?>游客<?php endif; if($updateUserLevel): ?><em></em><?php endif; ?></span></div>
        <div class="hy_tb_div4">
        <span class="f_l">会员账号: <?php echo $member_info[user_info][user_tel]; ?>&nbsp;&nbsp;</span>
        </div>
        <div class="hy_tb_div4">
        <span class="f_l">
        推荐人: <?php if($tui[real_name]): ?><?php echo $tui[real_name]; else: ?><?php echo $tui[user_name]; endif; ?>
        &nbsp;&nbsp;</span>
        </div>
    </div>
	<div class="hy_tb_div8">
		<span class="f_r">
		
		<a href="<?php echo __URL('APP_MAIN/member/memberXiugai?shop_id='.$shop_id); ?>" class="set">编辑资料</a>
		
		</span>     
		</div>
  </div>

   <div class="blank" style="height:25px;"></div>
</div>
<!--hy_index_div10-->
<div class="hy_index_div10">
     <div class="hy_index_div_ hy_index_div_wdzh fix" style="padding-bottom:5px;" >
     <?php if($member_info[user_info][jihuo]): ?>
     <a href="javascript:void(0)" onclick="futou()" class="wysj"  style="margin-right:10px;">返利升级<?php if($Account_info['point']>200): ?><em></em><?php endif; ?></a>
     <?php else: ?>
     <span class="wysj"  style="margin-right:10px;"><em></em></span>
     <?php endif; ?>
    </div>
    <div class="blank" style="height:0px;"></div>
     <a href="#">
     <?php if($futou_level): ?>
     <p><?php echo $futou_level[max_ji]; ?>/<?php echo $futou_level[reduce_ji]; ?>/<?php echo $futou_level[present_ji]; ?></p>
     <?php else: ?>
    <p>0/0/0</p>
     <?php endif; ?>
     <span>返利等级</span></a>
     <a href="#">
     <?php if($accout26_sum): ?>
     <p><?php echo $accout26_sum; ?></p>
     <?php else: ?>
     <p>00.00</p>
     <?php endif; ?>
     <span>日返利</span></a>
     <a href="#">
     <?php if($team_sum): ?>
     <p><?php echo $team_sum; ?></p>
     <?php else: ?>
     <p>00.00</p>
     <?php endif; ?>
     <span>团队返利</span></a>
     <a href="#">
     <?php if($point_sum): ?>
     <p><?php echo $point_sum; ?></p>
     <?php else: ?>
     <p>00.00</p>
     <?php endif; ?>
     <span>分享返利</span></a>
      <div class="blank"></div>
</div> 
<!--mainbody-->
<div class="payment fix">
 <ul>
  <li><a href="<?php echo __URL('APP_MAIN/order/myorderlist?shop_id='.$shop_id); ?>"><i><img src="__TEMP__/<?php echo $style; ?>/public/images/my/user/payment_tb1.png"/></i>
  <?php if($unpaidOrder != 0): ?>
    <div class="tips"><?php echo $unpaidOrder; ?></div>
  <?php endif; ?>
  <span>待付款</span></a></li>
  <li><a href="<?php echo __URL('APP_MAIN/order/myorderlist?status=1&shop_id='.$shop_id); ?>"><i><img src="__TEMP__/<?php echo $style; ?>/public/images/my/user/payment_tb2.png"/></i>
  <?php if($shipmentPendingOrder != 0): ?>
  <div class="tips"><?php echo $shipmentPendingOrder; ?></div>
  <?php endif; ?>
  <span>待发货</span></a></li>
  <li><a href="<?php echo __URL('APP_MAIN/order/myorderlist?status=2&shop_id='.$shop_id); ?>"><i><img src="__TEMP__/<?php echo $style; ?>/public/images/my/user/payment_tb3.png"/></i>
  <?php if($goodsNotReceivedOrder != 0): ?>
    <div class="tips"><?php echo $goodsNotReceivedOrder; ?></div>
  <?php endif; ?>
  <span>待收货</span></a></li>
  <li><a href="<?php echo __URL('APP_MAIN/order/myorderlist?status=4&shop_id='.$shop_id); ?>"><i><img src="__TEMP__/<?php echo $style; ?>/public/images/my/user/payment_tb4.png"/></i><span>返修/退货</span></a></li>
  <li><a href="<?php echo __URL('APP_MAIN/order/myorderlist?shop_id='.$shop_id); ?>"><i><img src="__TEMP__/<?php echo $style; ?>/public/images/my/user/payment_tb5.png"/></i><span>全部订单</span></a></li>
 </ul>
</div>
<!--integral-->
<div class="integral fix">
 <ul>
  <li><a href="<?php echo __URL('APP_MAIN/member/balanceWater'); ?>"><i><img src="__TEMP__/<?php echo $style; ?>/public/images/my/user/integral_tb1.png"/></i><span>开户积分</span></a></li>
  <li><a href="<?php echo __URL('APP_MAIN/member/integralwater'); ?>"><i><img src="__TEMP__/<?php echo $style; ?>/public/images/my/user/integral_tb2.png"/></i><span>消费积分</span></a></li>
  <li><a href="javascript:void(0)" <?php if($updateUserLevel): ?>onclick="shengxing(<?php echo $updateUserLevel; ?>,<?php echo $constant10[val]; ?>)"<?php endif; ?>><i><img src="__TEMP__/<?php echo $style; ?>/public/images/my/user/integral_tb4.png"/></i><span>会员升级</span></a></li>
  <li><a href="<?php echo __URL('APP_MAIN/member/member_wallet'); ?>"><i><img src="__TEMP__/<?php echo $style; ?>/public/images/my/user/integral_tb3.png"/></i><span>我的钱包</span></a></li>
 </ul>
</div>
<!--security-->
  <div class="security fix">
   <ul>
   <li><a href="<?php echo __URL('APP_MAIN/member/gaimi'); ?>"><i><img src="__TEMP__/<?php echo $style; ?>/public/images/my/user/security_tb1.png"/></i><span>账户安全</span></a></li>

  <?php if($member_info[user_info][erji_psw]): ?> 
  <li><a href="<?php echo __URL('APP_MAIN/member/erji_xiugai'); ?>"><i><img src="__TEMP__/<?php echo $style; ?>/public/images/my/user/security_tb2.png"/></i><span>修改二级密码</span></a></li>
  <?php else: ?>
  <li><a href="<?php echo __URL('APP_MAIN/member/erji_psw'); ?>"><i><img src="__TEMP__/<?php echo $style; ?>/public/images/my/user/security_tb2.png"/></i><span>设置二级密码</span></a></li>
  <?php endif; ?>
   
   <li><a href="#"><i><img src="__TEMP__/<?php echo $style; ?>/public/images/my/user/security_tb3.png"/></i><span>我的客服</span></a></li>
   </ul>
   <ul>
   <li><a href="<?php echo __URL('APP_MAIN/member/chuangye_zhuan'); ?>"><i><img src="__TEMP__/<?php echo $style; ?>/public/images/my/user/security_tb4.png"/></i><span>消费积分互转</span></a></li>
   <li><a href="<?php echo __URL('APP_MAIN/member/kaihu_zhuan'); ?>"><i><img src="__TEMP__/<?php echo $style; ?>/public/images/my/user/security_tb5.png"/></i><span>开户积分互转</span></a></li>
   <li><a href="javascript:void(0)" onclick="logout()"><i><img src="__TEMP__/<?php echo $style; ?>/public/images/my/user/security_tb6.png"/></i><span>退出登陆</span></a></li>
   </ul>
  </div>
  <!--security_blak-->
  <div class="security_blak fix"></div>

 <script type="text/javascript">
  function logout(){
      $.ajax({
              url: "<?php echo __URL('APP_MAIN/member/logout'); ?>",
              type: "post",
              success: function (res) {
                  if (res['code'] > 0) {
                    window.location.href=__URL("APP_MAIN/login/index");
                  } else {
                  if(res["message"]!=null){
                    showBox(res["message"]);
                  }
                  }
              }
          })
  }

  function futou(){
    if (confirm("确定复投吗？")) {
      $.ajax({
          url: "<?php echo __URL('APP_MAIN/member/futoushengji'); ?>",
          type: "post",
          success: function (res) {
              // alert(JSON.stringify(res));
              if (res['code'] > 0) {
                  showBox(res["message"]);
                  window.location.href=__URL("APP_MAIN/member/index");
                } else {
                  showBox(res["data"]);
                }
          }
      })
    }
  }

  function shengxing(id,constant10){
    if (confirm("升星需扣除"+constant10+"开户积分，确定升星吗？")) {
      $.ajax({
          url: "<?php echo __URL('APP_MAIN/member/shengxing'); ?>",
          type: "post",
          data : {
            'id' : id
          },
          success: function (res) {
              // alert(JSON.stringify(res));
              if (res['code'] > 0) {
                  showBox(res["message"]);
                  window.location.href=__URL("APP_MAIN/member/index");
                } else {
                  showBox(res["data"]);
                }
          }
      })
    }
  }
 </script>

	
	
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
	

</body>
</html>