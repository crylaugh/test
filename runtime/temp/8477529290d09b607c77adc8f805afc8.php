<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:40:"template/wap\default\Login\register.html";i:1509014556;s:34:"template/wap\default\urlModel.html";i:1505377008;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo lang('member_register'); if($seoconfig['seo_title'] != ''): ?>-<?php echo $seoconfig['seo_title']; endif; ?></title>
<meta name="keywords" content="<?php echo $seoconfig['seo_meta']; ?>" />
<meta name="description" content="<?php echo $seoconfig['seo_desc']; ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link rel="shortcut  icon" type="image/x-icon" href="__TEMP__/<?php echo $style; ?>/public/images/favicon.ico" media="screen"/>
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/login_base.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/login_wap.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/font-awesome.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<style>
.content{
	max-width: 648px;
	margin: 0 auto;
}
.footer {
    margin: 150px 0 0 0;
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
	background: url("__TEMP__/<?php echo $style; ?>/public/images/logo_copy.png") no-repeat center 15px;
	background-size: 110px 30px;
}
.ft-copyright a {
    padding-top: 45px;
    color: #ccc;
}
#sendOutCode{
	 border: 1px solid #FF5073;
    padding: 4px 7px;
    color: #FF6A88;
    font-weight: bold;
    float: right;
    margin: 4px;
    border-radius: 4px;
}
.reg-box .reg-cont label input {
	font-size:12px
}
.nk_reg_logo .back-home{
	position: absolute;
	padding-right: 8px;
	z-index: 80;
	width: 50px;
	height: 36px;
	line-height: 36px;
	background: #fff;
	top: 15px;
	font-size: 15px;
	font-weight: bold;
	color: #333333;
	border-top-right-radius: 18px;
	border-bottom-right-radius: 18px;
}
</style>
<script src="__TEMP__/<?php echo $style; ?>/public/js/showBox.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script type="text/javascript"
	src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
	<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
<script type="text/javascript">
var ADMINMAIN='ADMIN_MAIN';
	$(function() {
		$('.nk_cell').click(function() {
			if (!$(this).is('.active')) {
				$('.nk_cell').removeClass('active');
				$(this).addClass('active');
				var oDiv1 = $('#nk_text1');
				var oDiv2 = $('#nk_text2');
				if (oDiv1.css('display') == "block") {
					oDiv1.hide();
					oDiv2.show();
				} else {
					oDiv2.hide();
					oDiv1.show();
				}
			}
		});
//		 $("#password").onchange(function(){
//			var psd = $("#password").val();
//			alert(psd);
//		}) 
// 		$('.right_login_user').click(function() {
// 			/* layer.msg('hahah'); */
// 			$("#username").val("");
// 		});
// 		$('.right_login_pass').click(function() {
// 			$("#password").val("");
// 			$("#password_mobile").val("");
// 		});
// 		$('.right_login_cfpass').click(function() {
// 			$("#cfpassword").val("");
// 			$("#cfpassword_mobile").val("");
// 		});
// 		$('.right_login_mobile').click(function() {
// 			$("#mobile").val("");
// 		});
		
	})
/* 	function psd(){
		var password = $("#password").val();
		var cfpassword = $("#cfpassword").val();
		if(password != '' && cfpassword != ''){
			if(password != cfpassword){
				layer.msg('两次密码输入不一致');
				$('#login-button').attr('disabled',"true");
			}else{
				$('#login-button').removeAttr("disabled"); 
			}	
		}
	}*/
	function psd_mobile(){
		var password_mobile = $("#password_mobile").val();
		var cfpassword_mobile = $("#cfpassword_mobile").val();
		if(password_mobile != '' && cfpassword_mobile != ''){
			if(password_mobile != cfpassword_mobile){
				layer.msg('两次密码输入不一致');
				$('#login-button-mobile').attr('disabled',"true");
			}else{
				$('#login-button-mobile').removeAttr("disabled"); 
			}	
		}
	} 
	
   function login(username,password){
		$.ajax({
			type : "post",
			url : "<?php echo __URL('APP_MAIN/login/index'); ?>",
			async : true,
			data : {
				"username" : username,
				"password" : password
			},
			success : function(data) {
				setTimeout(function(){location.href="<?php echo __URL('APP_MAIN/member/index'); ?>"},1000);
			}
		});
	}
	
	
	function login_mobile(mobile,password){
		$.ajax({
			type : "post",
			url : "<?php echo __URL('APP_MAIN/login/index'); ?>",
			async : true,
			data : {
				"mobile" : mobile,
				"password" : password
			},
			success : function(data) {
				setTimeout(function(){location.href="<?php echo __URL('APP_MAIN/member/index'); ?>"},1000);
			}
		});
	}
	function register_mobile(){
		var mobile = $("#mobile").val();
		var vertification = $("#captcha").val();
		var password_mobile = $("#password_mobile").val();
		var cfpassword_mobile = $("#cfpassword_mobile").val();
		var verify_code = $("#verify_code").val();
		var reg = /^.{6,}$/;
		var mobile_config = $("#mobile_config").val();
		var tuijian = $("#tuijian").val();
		var real_name = $("#real_name").val();
		if(mobile == ''){
			layer.msg("<?php echo lang('phone_number_cannot_empty'); ?>");
			return false;
		} else if(!(/^1[34578]\d{9}$/.test(mobile))){ 
			layer.msg("<?php echo lang('mobile_phone_number_is_wrong'); ?>");  
	        return false; 
	    }  
	    if(tuijian != ''){
			if(!(/^1[34578]\d{9}$/.test(tuijian))){ 
				layer.msg("<?php echo lang('推荐人格式不对'); ?>");  
		        return false; 
		    }
	    }  
	    if (real_name== '') {
	    	layer.msg("请输入真实姓名");  
	        return false; 
	    }

		if(vertification == ''){
			layer.msg("<?php echo lang('verification_code_cannot_be_null'); ?>");
			return false;
		}
		if(mobile_config==1){
			if(verify_code == ''){
				layer.msg("<?php echo lang('mobile_phone_dynamic_password_can_not_be_empty'); ?>");
				return false;
			}
		}
		if(mobile_config ==1){
			$.ajax({
	 			type:"post",
	 		    url:"<?php echo __URL('APP_MAIN/Login/register_check_code'); ?>",
	 		    data:{'send_param':verify_code},
	 		    async : true,
	 		    dataType:'json',
	 		    success:function(data){
	 		    	 if (data['code'] == 0) { 
			 		   		if(password_mobile == ''){
			 					layer.msg("<?php echo lang('password_cannot_empty'); ?>");
			 					return false;
			 				}

			 		   		//密码验证
			 				var is_password_true = verifyPassword(password_mobile);
			 				if(is_password_true > 0){
			 					return false;
			 				}
			 				
			 				if(cfpassword_mobile == ''){
			 					layer.msg("<?php echo lang('confirm_password_can_not_be_empty'); ?>");
			 					return false;
			 				}
			 				
			 				if(password_mobile != cfpassword_mobile){
			 					layer.msg("<?php echo lang('two_password_input_is_inconsistent'); ?>");
			 					$("#cfpassword_mobile").focus();
			 					return false;
			 				}	
		 					$.ajax({
		 						type : "post",
		 						url : "<?php echo __URL('APP_MAIN/login/register'); ?>",
		 						async : true,
		 						data : {
		 							"mobile" : mobile,
		 							"password" : password_mobile,
		 							"tuijian" : tuijian,
		 							"real_name" : real_name
		 						},
		 						success : function(data) {
		 							 if(data["code"] > 0 ){
		 								 layer.msg(data["message"]);
		 								 login_mobile(mobile,password_mobile);
		 							}else{
		 								layer.msg(data["message"]);
		 							} 
		 						}
		 					});

	 				 }else {
	 					layer.msg("<?php echo lang('mobile_phone_dynamic_code_error'); ?>");
	 					return false;
	 				}
	 		    }
	 		}); 
		}else{
				if(password_mobile == ''){
					layer.msg("<?php echo lang('password_cannot_empty'); ?>");
					return false;
				}
		   		//密码验证
				var is_password_true = verifyPassword(password_mobile);
				if(is_password_true > 0){
					return false;
				}
				
				if(cfpassword_mobile == ''){
					layer.msg("<?php echo lang('confirm_password_can_not_be_empty'); ?>");
					return false;
				}
				
				if(password_mobile != cfpassword_mobile){
					layer.msg("<?php echo lang('two_password_input_is_inconsistent'); ?>");
					$("#cfpassword_mobile").focus();
					return false;
				}




				$.ajax({
	 			type:"post",
	 		    url:"<?php echo __URL('APP_MAIN/Login/getuser_tel'); ?>",
	 		    data:{"tuijian" : tuijian},
	 		    async : true,
	 		    dataType:'json',
	 		    success:function(data){
	 		    	 if (data) { 
			 					
		 					$.ajax({
								type : "post",
								url : "<?php echo __URL('APP_MAIN/login/register'); ?>",
								async : true,
								data : {
									"mobile" : mobile,
									"password" : password_mobile,
									"tuijian" : tuijian,
									"real_name" : real_name

								},
								success : function(data) {
									 if(data["code"] > 0 ){
										 layer.msg("操作成功");
										 login_mobile(mobile,password_mobile);
									}else{
										layer.msg("操作失败");
									} 
								}
							});

	 				 }else {
	 					layer.msg("请输入正确的推荐人");
	 					return false;
	 				}
	 		    }
	 		}); 



				
		}
		

		

	}
	
	//短信验证码
$(document).ready(function(){
		$("#sendOutCode").click(function (){
			var mobile = $("#mobile").val();
			var vertification = $("#captcha").val();
			//验证手机号格式是否正确
			if(mobile.search(/^1[34578]\d{9}$/) == -1){
	 			$("#mobile").trigger("focus");
	 			layer.msg("<?php echo lang('mobile_phone_number_is_wrong'); ?>");  
				return false;
			}
			//验证手机号是否已经注册
			$.ajax({
				type: "post",
				url: "<?php echo __URL('APP_MAIN/login/mobile'); ?>",
				data: {"mobile":mobile},
				async: false,
				success: function(data){
					if(data){
						layer.msg("<?php echo lang('mobile_phone_is_registered'); ?>");  
						return false;
					}else{
				 		//判断输入的验证码是否正确 
						$.ajax({
							type: "post",
							url: "<?php echo __URL('APP_MAIN/Login/sendSmsRegisterCode'); ?>",
							data: {"mobile":mobile,"vertification":vertification},
							success: function(data){
								//alert(JSON.stringify(data));
								if(data['code']=='0'){
									time();
								}else{
									layer.msg(data["message"]);
									$(".verifyimg").attr("src",'<?php echo __URL('SHOP_MAIN/captcha'); ?>');
									return false;
								}
							}
						});
					}
				} 
			});
	
		});
		var wait=120; 
		function time() { 
		        if (wait == 0) {
		        	$("#sendOutCode").removeAttr("disabled");  
		        	$("#sendOutCode").val("<?php echo lang('get_dynamic_code'); ?>"); 
		            wait = 120; 
		        } else { 
		        	$("#sendOutCode").attr("disabled", 'disabled');
		        	$("#sendOutCode").val(wait+"s"); 
		            wait--; 
		            setTimeout(function() { 
		                time() 
		            }, 
		            1000)
		        }
		}		
		
})	
	 
	
	
	


//验证用户名
function verifyUsername(username){
	var is_true =0;
	if(/.*[\u4e00-\u9fa5]+.*$/.test(username) ){
		is_true = 1;
		layer.msg("<?php echo lang('user_name_cannot_contain_chinese_characters'); ?>");
		return is_true;
	}
	if(/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/.test(username) ){
		is_true = 1;
		layer.msg("<?php echo lang('user_name_canno_be_mailbox'); ?>");
		return is_true;
	}
	if(/^1(3|4|5|7|8)\d{9}$/.test(username) ){
		is_true = 1;
		layer.msg("<?php echo lang('user_name_canno_be_phone'); ?>");
		return is_true;
	}
	
	var username_verify = "<?php echo $reg_config['name_keyword']; ?>";
	var usernme_verify_array = new Array();
	if($.trim(username_verify) != "" && username_verify != undefined){
		usernme_verify_array  = username_verify.split(",");
	}
	usernme_verify_array.push(",");
	$.each(usernme_verify_array,function(k,v){
		if($.trim(v) != ""){
			if(username.indexOf(v) >= 0){
				is_true = 1;
				layer.msg("<?php echo lang('username_cannot_includ'); ?>"+v+"<?php echo lang('such_characters'); ?>");
				return false;
			}
		}
	});
	return is_true;
}
//验证密码
function verifyPassword(password){
	var is_true = 0;
	var min_length_str = "<?php echo $reg_config['pwd_len']; ?>";
	if($.trim(min_length_str) != "" ){
		var min_length = parseInt(min_length_str);	
	}else{
		var min_length = 5;
	}
	if($.trim(password) == ""){
		is_true = 1;
		layer.msg("<?php echo lang('password_cannot_empty'); ?>");						
		return is_true;
	}
	if(min_length  > 0){
		if(password.length < min_length){
			is_true = 1;
			layer.msg("<?php echo lang('minimum_password_length'); ?>"+min_length);						
			return is_true;
		}
		
	}
	if(/.*[\u4e00-\u9fa5]+.*$/.test(password) ){
		is_true = 1;
		layer.msg("<?php echo lang('password_cannot_includ_chinese_characters'); ?>");
		return is_true;
	}
	var regex_str = "<?php echo $reg_config['pwd_complexity']; ?>";
	if($.trim(regex_str) != "" && regex_str != undefined){
		//验证是否包含数字
		if(regex_str.indexOf("number") >= 0){
			var number_test =  /[0-9]/;
			if(!number_test.test(password)){
				is_true = 1;
				layer.msg("<?php echo lang('password_must_contain_numbers'); ?>");									
				return is_true;
			}
		}
		//验证是否包含小写字母
		if(regex_str.indexOf("letter") >= 0){
			var letter_test =  /[a-z]/;
			if(!letter_test.test(password)){
				is_true = 1;
				layer.msg("<?php echo lang('password_must_have_lowercase_letters'); ?>");								
				return is_true;
			}
		}
		//验证是否包含大写字母
		if(regex_str.indexOf("upper_case") >= 0){
			var upper_case_test =  /[A-Z]/;
			if(!upper_case_test.test(password)){
				is_true = 1;
				layer.msg("<?php echo lang('password_must_have_uppercase_letters'); ?>");					
				return is_true;
			}
		}
		//验证是否包含特殊字符
		if(regex_str.indexOf("symbol") >= 0){
			var symbol_test =  /[^A-Za-z0-9]/;
			if(!symbol_test.test(password)){
				is_true = 1;
				layer.msg("<?php echo lang('password_must_contain_symbols'); ?>");						
				return is_true;
			}
		} 
	}
	return is_true;
}

</script>
</head>
<body>
<div class="center">
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
	<div class="nk_reg_logo">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/my/user/login1.png" />
		<a href="<?php echo __URL('APP_MAIN'); ?>">
			<div class="back-home"><?php echo lang('home_page'); ?></div>
		</a>
	</div>
	<!-- <a href="APP_MAIN/login"><div class="banner_login">
		<span >登录</span>
	</div></a>
	<a href="APP_MAIN/login/register"><div class="banner_register" >
		<span >注册</span>
	</div></a> -->
	<div class="nk_top">
	<?php if((strpos($reg_config['register_info'],'mobile') !== false) && (strpos($reg_config['register_info'],'plain') !== false)): ?>
			<div  class='nk_cell active'>
				<?php echo lang('account_registration'); ?>
			</div>
		
			<div class="nk_cell">
				<?php echo lang('mobile_phone_registration'); ?>
			</div>
	<?php elseif((strpos($reg_config['register_info'],'mobile') !== false) && (strpos($reg_config['register_info'],'plain') === false)): ?>		
			<div class="nk_cell_one active">
				<?php echo lang('mobile_phone_registration'); ?>
			</div>
		
	<?php elseif((strpos($reg_config['register_info'],'mobile') === false) && (strpos($reg_config['register_info'],'plain') !== false)): ?>		
			<div  class='nk_cell_one active'>
				<?php echo lang('account_registration'); ?>
			</div>
	<?php endif; ?>
	</div>
	
	<div class="reg-box">
		<!-- <form id="regForm" action="APP_MAIN/login/register" method="post" onsubmit="return check()"> -->
			<?php if(strpos($reg_config['register_info'],'plain') !== false): ?>
			<div id="nk_text1" style="display:block;">
				<div class="reg-cont" style="margin-top:45px;">
					<label class="login-txt" for="username"><span style="padding-right:27px;"><?php echo lang('account_number'); ?></span><input class="" type="text"
						name="username" id="username" placeholder="<?php echo lang('enter_your_account_number'); ?>"> <i
						class="right_login_user"> </i>
					</label>
				</div>
				<div class="reg-cont">
					<label for="password"><span style="padding-right:27px;"><?php echo lang('password'); ?></span><input
						class="" type="password" name="password" id="password"
						placeholder="<?php echo lang('please_input_password'); ?>" > <i class="right_login_pass"> </i>
					</label>
				</div>
				<div class="reg-cont"><!--  onchange="psd()" -->
					<label for="cfpassword"><span style="padding-right:3px;"><?php echo lang('member_confirm_password'); ?></span><input
						class="" type="password" name="cfpassword" id="cfpassword"
						placeholder="<?php echo lang('confirm_password'); ?>"> <i class="right_login_cfpass">
					</i>
					</label>
				</div>
				<button id="login-button" class="lang-btn" onclick="register_member()"><?php echo lang('register'); ?></button>
				<div class="nk_loginlogin" style="margin-top:15px;"><a href="<?php echo __URL('APP_MAIN/login/index'); ?>"><?php echo lang('existing_account'); ?>,<?php echo lang('logon_immediately'); ?></a></div>  
			</div>
			<?php endif; ?>
		<!-- </form> -->
		<!-- <form action="" method="post"> -->
			<?php if(strpos($reg_config['register_info'],'mobile') !== false): if(strpos($reg_config['register_info'],'plain') === false): ?>
					<div id="nk_text2" >
				<?php else: ?>
					<div id="nk_text2" style="display:none; ">
				<?php endif; ?>
				<div class="nk-cont" style="margin-top:45px;">
						<label><span  style="padding-right:20px;"><?php echo lang('cell_phone_number'); ?></span><input type="text" tname="mobile" id="mobile" placeholder="<?php echo lang('please_enter_your_cell_phone_number'); ?>">
					</i> 
						</label>
				</div>
				<?php if($code_config['pc'] == 1): ?>
				<div class="nk-cont" >
						<label><span  style="padding-right:14px;"><?php echo lang('member_verification_code'); ?></span>
						<input type="text" name="captcha" id="captcha"  placeholder="<?php echo lang('please_enter_verification_code'); ?>">
				        <img class="verifyimg" style="width:75px!important;float: right;margin: 4px;" src=" <?php echo __URL('SHOP_MAIN/captcha'); ?>" onclick="this.src='<?php echo __URL('SHOP_MAIN/captcha'); ?>'"  alt="captcha" style="vertical-align: middle; cursor: pointer; height: 35px;" />
				        </label>
				</div>
			   <?php endif; if($loginConfig['mobile_config']['is_use'] == 1): ?>
				<div class="nk-cont">
						<label><span  style="padding-right:14px;"><?php echo lang('dynamic_code'); ?></span>
						    <input type="text" name="motify" placeholder="<?php echo lang('please_enter_the_mobile_phone_dynamic_code'); ?>" id="verify_code" style="width:40%">
							<input type="button" style="padding:4px;width: 73px;background-color: #fff;" id="sendOutCode" value="<?php echo lang('get_dynamic_code'); ?>">
						</label>
				</div>
				<?php endif; ?>
				<div class="reg-cont">
					<label for="real_name"><span style="padding-right:32px;">姓名</span><input
						class="" type="text" name="real_name" id="real_name"
						placeholder="请输入真实姓名">
					</label>
				</div>
				<div class="reg-cont">
					<label for="password"><span style="padding-right:32px;"><?php echo lang('password'); ?></span><input
						class="" type="password" name="password" id="password_mobile"
						placeholder="<?php echo lang('please_enter_your_account_password'); ?>"> 
					</label>
				</div>
				<div class="reg-cont">
					<label for="cfpassword"><span style="padding-right:8px;"><?php echo lang('member_confirm_password'); ?></span><input
						class="" type="password" name="cfpassword" id="cfpassword_mobile"
						placeholder="<?php echo lang('please_confirm_the_account_password'); ?>"> 
					</label>
				</div>
				<div class="reg-cont">
					<label for="cfpassword"><span style="padding-right:20px;">推荐人</span><input
						class="" type="text" name="tuijian" id="tuijian"
						placeholder="输入推荐人手机号">
					</label>
				</div>
				<button id="login-button-mobile" class="lang-btn" onclick="register_mobile()"><?php echo lang('register'); ?></button>
				<div class="nk_loginlogin" style="margin-top:15px;"><a href="<?php echo __URL('APP_MAIN/login/index'); ?>"><?php echo lang('existing_account'); ?>,<?php echo lang('logon_immediately'); ?></a></div>  
				</div>
			<?php endif; ?>
			<!-- </form> -->
		<!-- <div id="member" class="news-title pt-60 pb-50">
			<h5 class="t-c f-24">使用以下账号登录</h5>
		</div> -->
		<input type="hidden" value="<?php echo $loginConfig['mobile_config']['is_use']; ?>" id="mobile_config"/>
		<?php if($loginCount != 0): ?>
		<img src="__TEMP__/<?php echo $style; ?>/public/images/assistant_member.png" style="width: 80% !important;margin-left: 10%;margin-top: 25px;"/>
		<?php endif; ?>
		

		</div>		
		<!-- <div class="nk_loginlogin" style="margin-top:70px;"><a href="APP_MAIN/login/index">已有账号？立即登录</a></div>  -->
	</div>
	<!-- <div class="footer" style="min-height: 86px;" id="bottom_copyright" >
		<div class="copyright">
			<div class="ft-copyright">
				<a href="javascript:;" target="_blank" id="copyright_companyname"></a>
			</div>
		</div>
	</div> -->
</div>
</body>
</html>