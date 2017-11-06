<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:45:"template/wap\default\\Member\kaihu_zhuan.html";i:1509087372;s:30:"template/wap\default\base.html";i:1507430043;s:34:"template/wap\default\urlModel.html";i:1505377008;s:32:"template/wap\default\footer.html";i:1507607166;}*/ ?>
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

<link href="__TEMP__/<?php echo $style; ?>/public/css/my/tbstyle.css" type="text/css" rel="stylesheet" media="all" />

<script src="__TEMP__/<?php echo $style; ?>/public/js/my/jquery-1.10.2.min.js"></script>
<style type="text/css">
	
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
		<a class="head_back" id="backoutapp" onclick="backPage()" href="javascript:void(0)"><i class="icon-back"></i></a>
		<div class="head-title" id="title">开户积分互转</div>
		
	</section>

	<div class="motify" style="display: none;"><div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div></div>
	 
<div id="zdy_zjbwgx_div">
<div class="blank" style="height:0px;"></div>
<div id="div_nav" class="lgli_qh lgli_db">
   
   <ul>
     <li class="active">开户积分互转</li>
     <li class="">互转记录</li>
     <div class="activeborder" style="left: 0%;"></div>
  </ul>
</div>
<div class="blank" style="height:50px;"></div>
<div class="goodsinfo" style="display:block;">	



<div class="zdy_sj_srk">

  <form name="wytx_jbhz" id="wytx_jbhz">
      <div class="zdy_sj_srk1"><label for="balance">转出金额</label>
               <div class="div_input"><input type="text" value="" name="balance" id="balance" placeholder="余额：<?php echo $arr[balance]; ?>"></div>
               <div class="blank" style="height:0px;"></div>
       </div>
       
       <div class="zdy_sj_srk1"><label for="username_zc">转出账号</label>
               <div class="div_input" style="right:80px;"><input type="text" value="" name="username_zc" id="username_zc"></div>
               <label style="float:right; margin-right: 20px;"><a href="javascript:;" onclick="jiance()">检测账号</a></label>
               <div class="blank" style="height:0px;"></div>
       </div>
       <div id="zchy_xx" style="width:90%;"></div>
       
     <div class="zdy_sj_srk1"><label for="yzpassword">二级密码</label>
               <div class="div_input"><input type="text" style="background:#fff; width:1px; border:none; padding:0px; margin:0px; margin-left:-1px;"><input type="password" value="" name="yzpassword" id="yzpassword"></div>
               <div class="blank" style="height:0px;"></div>
       </div>
       <span id="current_balance" style="display: none;"><?php echo $arr[balance]; ?></span>
        <div class="zdy_sj_srk4">
        <input class="submit" value="我要转出" type="button" onclick="addAccount(2)">
        </div>
        
</form>
</div>

<script>
$(document).ready(function(){
  $("#div_nav li").click(function(){
	    var dqdx_div=$(this).parent().find("li");
	    var dqdx_cd = dqdx_div.length;
		var indexs = dqdx_div.index(this);
		dqdx_div.removeClass("active");
		$(this).addClass("active");
		dqdx_cd=parseInt(1000/dqdx_cd)/10*indexs;
		$(this).parent().find(".activeborder").css({"left":dqdx_cd +"%"});
		$(".goodsinfo").css({"z-index":"1","opacity":"0"});
		$(".goodsinfo").hide();
		
		$(".goodsinfo").eq(indexs).show();
		$(".goodsinfo").eq(indexs).css({"z-index":"3","opacity":"1"});
  });
  
  
});

var flag = false;//是否重复提交
function addAccount(type){

	var num = $("#balance").val();
	var current_balance = $("#current_balance").text();
	var balance = (parseInt(current_balance) - parseInt(num));
	var username_zc = $("#username_zc").val();
	var yzpassword = $("#yzpassword").val();
	if( num<1 || num.length<1){
		showBox("转出金额不能为空", {
				time: 2000
			});
		$("#balance").focus();
        return false;
	}
	var text = $("#remark_balance").val();
	if(parseInt(balance) < 0){
		showBox("余额不足", {
				time: 2000
			});
            return false;
	}
	if(  username_zc.length<1 ){
		showBox("请填写转出账号", {
				time: 2000
			});
		  $("#username_zc").focus();
		  return false;
	}
	
	if(  yzpassword.length<1 ){
		  showBox("请输入二级密码", {
				time: 2000
			});
		  $("#yzpassword").focus();
		  return false;
	}
	if (!flag) {
		flag = true;
		$.ajax({
			type : "post",
			url : "<?php echo __URL('APP_MAIN/member/kaihu_zhuan'); ?>",
			data : {
				"type" : 2,
				"num" : num,
				"username_zc" : username_zc,
				"yzpassword" : yzpassword
			},
			success : function(data) {
				if (data["code"] > 0) {
					alert('转出成功');
					window.location.reload(); 

				}else{
					alert(data["data"]);
					window.location.reload(); 
				}
			}
		});
	}
	
}

function jiance(){
	var username_zc = $("#username_zc").val();
	$.ajax({
		type : "post",
		url : "<?php echo __URL('APP_MAIN/member/outcheck'); ?>",
		data : {
			"username_zc" : username_zc
		},
		success : function(data) {
			if (data) {
				alert(data.real_name);
			}else{
				alert('没有此账号');
			}
			
		}
	});
}

function backPage(){
	var title=$("#title").html();
	if(title=="开户积分互转"){
		var shop_id = "<?php echo $shop_id; ?>";
		if(shop_id == 0)
			{
			window.location.href=__URL("APP_MAIN/member/index");	
			}
		else{
			window.location.href=__URL("APP_MAIN/member/index?shop_id="+shop_id);	
		}
	}else{
		window.location.href=window.location.href;	
	}
}
</script>


</div>
<div class="goodsinfo" style="display:none;">


<div class="main">
	<ul class="zjjl_div" style="display:inline-block; ">
 			
          <?php if(is_array($list['data']) || $list['data'] instanceof \think\Collection || $list['data'] instanceof \think\Paginator): $i = 0; $__LIST__ = $list['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <li>
          <span class="f_l">类型:<?php echo $vo['type_name']; ?></span>
          <span class="f_r div_sj">金额:<span class="div_je"><?php echo $vo['number']; ?></span></span>
          <div class="blank" style="height:0px;"></div>
          <span class="f_l">交易对象:<span class="div_je"><?php echo $vo['handle_obj']; ?></span></span>
          <span class="f_r div_sj"><?php echo getTimeStampTurnTime($vo['create_time'] ); ?></span>
          <div class="blank" style="height:0px;"></div>
          </li>
          <?php endforeach; endif; else: echo "" ;endif; ?> 
    
 </ul>
<!-- <div class="blank"></div>
 <ul class="xdy_yemaa">
      
<li><a href="javascript:;">首页</a></li>
<li><a href="javascript:;">上一页</a></li>

<li><a href="javascript:;">下一页</a></li>
<li><a href="javascript:;">尾页</a></li>

</ul>
</div> -->


</div>
<div class="blank" style="height:10px;"></div>
<div class="fjd_footer">度京商城</div>
<div class="blank" style="height:50px;"></div>


	
	
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