<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:45:"template/adminblue\Goods\updateGoodsSpec.html";i:1501559760;s:28:"template/adminblue\base.html";i:1508840920;s:45:"template/adminblue\controlCommonVariable.html";i:1503719297;s:32:"template/adminblue\urlModel.html";i:1504865854;s:34:"template/adminblue\pageCommon.html";i:1505550036;s:34:"template/adminblue\openDialog.html";i:1509005619;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="renderer" content="webkit" />
	<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
	<?php if($frist_menu['module_name']=='首页'): ?>
	<title><?php echo $title_name; ?> - 商家管理</title>
	<?php else: ?>
		<title><?php echo $title_name; ?> - <?php echo $frist_menu['module_name']; ?>管理</title>
	<?php endif; ?>
		<link rel="shortcut  icon" type="image/x-icon" href="ADMIN_IMG/admin_icon.ico" media="screen"/>
		<link rel="stylesheet" type="text/css" href="__STATIC__/blue/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/blue/css/ns_blue_common.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/simple-switch/css/simple.switch.three.css" />
		<style>
		.Switch_FlatRadius.On span.switch-open{background-color: #0072D2;border-color: #0072D2;}
		</style>
		<script src="__STATIC__/js/jquery-1.8.1.min.js"></script>
		<script src="__STATIC__/blue/bootstrap/js/bootstrap.js"></script>
		<script src="__STATIC__/bootstrap/js/bootstrapSwitch.js"></script>
		<script src="__STATIC__/simple-switch/js/simple.switch.js"></script>
		<script src="__STATIC__/js/jquery.unobtrusive-ajax.min.js"></script>
		<script src="__STATIC__/js/common.js"></script>
		<script src="__STATIC__/js/seller.js"></script>
		<script src="__STATIC__/js/load_task.js"></script>
		<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
		<script src="ADMIN_JS/jquery-ui.min.js"></script>
		<script src="ADMIN_JS/ns_tool.js"></script>
		<link rel="stylesheet" type="text/css" href="__STATIC__/blue/css/ns_table_style.css">
		<script>
	/**
	 * Niushop商城系统 - 团队十年电商经验汇集巨献!
	 * ========================================================= Copy right
	 * 2015-2025 山西牛酷信息科技有限公司, 保留所有权利。
	 * ---------------------------------------------- 官方网址:
	 * http://www.niushop.com.cn 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用。
	 * 任何企业和个人不允许对程序代码以任何形式任何目的再发布。
	 * =========================================================
	 * 
	 * @author : 小学生王永杰
	 * @date : 2016年12月16日 16:17:13
	 * @version : v1.0.0.0 商品发布中的第二步，编辑商品信息
	 */
	var PLATFORM_NAME = "<?php echo $title_name; ?>";
	var ADMINIMG = "ADMIN_IMG";//后台图片请求路径
	var ADMINMAIN = "ADMIN_MAIN";//后台请求路径
	var SHOPMAIN = "SHOP_MAIN";//PC端请求路径
	var APPMAIN = "APP_MAIN";//手机端请求路径
	var UPLOAD = "__UPLOAD__";//上传文件根目录
	var PAGESIZE = "<?php echo $pagesize; ?>";//分页显示页数
	var ROOT = "__ROOT__";//根目录
	var _STATIC = "__STATIC__";
	var ADDONS = "__ADDONS__";
	
	//上传文件路径
	var UPLOADGOODS = 'UPLOAD_GOODS';//存放商品图片
	var UPLOADGOODSSKU = 'UPLOAD_GOODS_SKU';//存放商品SKU
	var UPLOADGOODSBRAND = 'UPLOAD_GOODS_BRAND';//存放商品品牌图
	var UPLOADGOODSGROUP = 'UPLOAD_GOODS_GROUP';////存放商品分组图片
	var UPLOADGOODSCATEGORY = 'UPLOAD_GOODS_CATEGORY';////存放商品分类图片
	var UPLOADCOMMON = 'UPLOAD_COMMON';//存放公共图片、网站logo、独立图片、没有任何关联的图片
	var UPLOADAVATOR = 'UPLOAD_AVATOR';//存放用户头像
	var UPLOADPAY = 'UPLOAD_PAY';//存放支付生成的二维码图片
	var UPLOADADV = 'UPLOAD_ADV';//存放广告位图片
	var UPLOADEXPRESS = 'UPLOAD_EXPRESS';//存放物流图片
	var UPLOADCMS = 'UPLOAD_CMS';//存放文章图片
	var UPLOADVIDEO = 'UPLOAD_VIDEO';//存放视频文件
</script>
		
<script src="ADMIN_JS/art_dialog.source.js"></script>
<script src="ADMIN_JS/iframe_tools.source.js"></script>
<script src="ADMIN_JS/material_managedialog.js"></script>
<script src="__STATIC__/js/ajax_file_upload.js" type="text/javascript"></script>
<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/defau.css">
<style type="text/css">
.set-style{padding:20px;} 
.error {padding-left: 5px !important;}
.table{width:98%;display:table;border-left: 1px dotted #e5e5e5;border-right: 1px dotted #e5e5e5;border-bottom: 1px dotted #e5e5e5;background: rgba(204, 204, 204, 0.09);padding: 0px 10px 10px 10px;}
.table-body{min-height:50px;max-height:410px;overflow-y:auto;overflow-x:hidden;}
.inline-block{display:inline-block;}
.w5{width:5%;}
.w75{width:84%;}
.w19{width:10%;text-align:center;}
.w100{width:100% !important;height: 40px;line-height: 40px;border-bottom: 1px dotted #e5e5e5;}
.add-spec{height: 40px;line-height: 40px;border-bottom:1px dotted #E6E6E6;}
input{vertical-align: initial;}
.table input[type="text"], input[type="password"], input.text, input.password {font: 12px/20px Arial;color: #777;background-color: #FFF;vertical-align: baseline;margin-bottom:0px;}
.set-style dl dt {text-align:right;width: 10%;}
label.line-label{display:inline-block;margin-right:10px;font-weight:normal;}
</style>

	</head>
<body>
<input type="hidden" id="niushop_rewrite_model" value="<?php echo rewrite_model(); ?>">
<input type="hidden" id="niushop_url_model" value="<?php echo url_model(); ?>">
<input type="hidden" id="niushop_admin_model" value="<?php echo admin_model(); ?>">
<script>
function __URL(url){
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
		if(url_model==1 || url_model==true){
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

//处理图片路径
function __IMG(img_path){
	var path = "";
	if(img_path != undefined && img_path != ""){
		if(img_path.indexOf("http://") == -1 && img_path.indexOf("https://") == -1){
			path = UPLOAD+"\/"+img_path;
		}else{
			path = img_path;
		}
	}
	return path;
}
</script>
<header class="ns-base-header">
	<div class="ns-logo" onclick="location.href='<?php echo __URL('ADMIN_MAIN'); ?>';">
		<!-- <img src="__STATIC__/blue/img/top_logo.png"/> -->
	</div>
	<div class="ns-search">
		<span class="js-nav">导航管理</span>
		<div class="ns-navigation-management">
			<div class="ns-navigation-title">
				<h4>导航管理</h4>
				<span>x</span>
			</div>
			<div style="height:40px;"></div>
			<?php if(is_array($nav_list) || $nav_list instanceof \think\Collection || $nav_list instanceof \think\Paginator): if( count($nav_list)==0 ) : echo "" ;else: foreach($nav_list as $key=>$nav): ?>
			<dl>
				<dt><?php echo $nav['data']['module_name']; ?></dt>
				<?php if(is_array($nav['sub_menu']) || $nav['sub_menu'] instanceof \think\Collection || $nav['sub_menu'] instanceof \think\Paginator): if( count($nav['sub_menu'])==0 ) : echo "" ;else: foreach($nav['sub_menu'] as $key=>$nav_sub): ?>
				<dd onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$nav_sub['url']); ?>';"><?php echo $nav_sub['module_name']; ?></dd>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</dl>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<i class="fa fa-sort-desc"></i>
		<i class="ns-vertical-bar"></i>
		<div class="ns-search-block">
			<input type="text" id="search_goods" placeholder="商品搜索" />
			<i class="ns-icon-base i-search" title="商品搜索" onclick="search()"></i>
		</div>
	</div>
	<nav>
		<ul>
			<?php if(is_array($headlist) || $headlist instanceof \think\Collection || $headlist instanceof \think\Paginator): if( count($headlist)==0 ) : echo "" ;else: foreach($headlist as $key=>$per): if(strtoupper($per['module_id']) == $headid): ?>
			<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$per['url']); ?>';">
				<span><?php echo $per['module_name']; ?></span>
				<?php if($per['module_id'] == 10000): ?>
					<span class="is-upgrade"></span>
				<?php endif; ?>
			</li>
			
			<?php else: ?>
			<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$per['url']); ?>';">
				<span><?php echo $per['module_name']; ?></span>
				<?php if($per['module_id'] == 10000): ?>
					<span class="is-upgrade"></span>
				<?php endif; ?>
			</li>
			<?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</nav>
	<div class="ns-base-tool">
		<div class="ns-version-info">
			<span><?php echo $niu_version; ?></span>
		</div>
		<i class="ns-vertical-bar"></i>
		<div class="ns-home" title="返回首页" onclick="javascript:window.open('<?php echo __URL('SHOP_MAIN'); ?>','_blank');">
			<img src="__STATIC__/blue/img/home.png" />
		</div>
		<i class="ns-vertical-bar"></i>
		<?php if(is_array($headlist) || $headlist instanceof \think\Collection || $headlist instanceof \think\Paginator): if( count($headlist)==0 ) : echo "" ;else: foreach($headlist as $key=>$per): if($per['module_id'] == 10000): ?>
		<div class="ns-upgrade" title="发现新的升级" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$per['url']); ?>';">
			<img src="__STATIC__/blue/img/upgrade.png" />
			<span class="is-upgrade"></span>
		</div>
		<i class="ns-vertical-bar" style="border-width: 1px;"></i>
		<?php endif; endforeach; endif; else: echo "" ;endif; ?>
		<div class="ns-clear" title="清除缓存" onclick="delcache()">
			<img src="__STATIC__/blue/img/clear.png" />
		</div>
	</div>
</header>
<article class="ns-base-article">
	<aside class="ns-base-aside">
		<header>
			<article class="ns-base-user">
				<div class="ns-head-portrait">
					<?php if($user_headimg != ''): ?>
					<img src="<?php echo __IMG($user_headimg); ?>"/>
					<?php else: ?>
					<img src="__STATIC__/blue/img/head_portrait_default.png"/>
					<?php endif; ?>
				</div>
				<div class="ns-base-info">
					<span>欢迎您：<?php echo $user_name; ?></span>
					<span>角色：<?php echo $group_name; ?></span>
				</div>
			</article>
			<a href="#edit-password" data-toggle="modal" title="修改密码">修改密码</a>
			<a href="<?php echo __URL('ADMIN_MAIN/login/logout'); ?>" title="安全退出">安全退出</a>
		</header>
		<nav>
			<ul>
				<?php if(is_array($leftlist) || $leftlist instanceof \think\Collection || $leftlist instanceof \think\Paginator): if( count($leftlist)==0 ) : echo "" ;else: foreach($leftlist as $key=>$leftitem): if(strtoupper($leftitem['module_id']) == $second_menu_id): ?>
				<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$leftitem['url']); ?>';" title="<?php echo $leftitem['module_name']; ?>"><?php echo $leftitem['module_name']; ?></li>
				<?php else: ?>
				<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$leftitem['url']); ?>';" title="<?php echo $leftitem['module_name']; ?>"><?php echo $leftitem['module_name']; ?></li>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</nav>
		<div style="height:50px;"></div>
		<div id="bottom_copyright">
			<footer>
				<img src="" id="copyright_logo"/>
				<p>
					<span id="copyright_meta"></span>
					<br/>
					<span id="copyright_companyname"></span>
					<br/>
					<span id="copyright_desc"></span>
				</p>
			</footer>
		</div>
	</aside>
	<section class="ns-base-section">
		<div class="ns-notice">
			<nav>
				<ul>
					<li>网站名称:<span><?php echo $title_name; ?></span></li>
					<li>最后登录时间：<span><?php echo getTimeStampTurnTime($user_info['last_login_time'] ); ?></span></li>
					<li>最后登录IP：<span><?php echo $user_info['last_login_ip']; ?></span></li>
				</ul>
			</nav>
			<div class="ns-service-telephone">
				<!-- <img src="__STATIC__/blue/img/logo.png"/>
				<span>提供技术支持服务电话：400-886-7993</span> -->
			</div>
		</div>
		
		<!-- 操作提示 -->
		
		<div class="ns-warm-prompt" <?php if($warm_prompt_is_show == 'hidden'): ?>style="display:none;"<?php endif; ?>>
			<div class="alert alert-info">
				<button type="button" class="close">&times;</button>
				<h4>
					<i class="fa fa-info-circle"></i>
					<span>操作提示</span>
				</h4>
				<div style="font-size:12px;text-indent:18px;">
					
						<?php if(is_array($leftlist) || $leftlist instanceof \think\Collection || $leftlist instanceof \think\Paginator): if( count($leftlist)==0 ) : echo "" ;else: foreach($leftlist as $key=>$leftitem): if(strtoupper($leftitem['module_id']) == $second_menu_id): ?>
						<?php echo $leftitem['module_name']; endif; endforeach; endif; else: echo "" ;endif; ?>
					
				</div>
			</div>
		</div>
		
		<div style="position:relative;margin:10px 0;">
			<!-- 三级导航菜单 -->
			
			<nav class="ns-third-menu">
				<ul>
				<?php if(is_array($child_menu_list) || $child_menu_list instanceof \think\Collection || $child_menu_list instanceof \think\Paginator): if( count($child_menu_list)==0 ) : echo "" ;else: foreach($child_menu_list as $k=>$child_menu): if($child_menu['active'] == '1'): ?>
					<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$child_menu['url']); ?>';"><?php echo $child_menu['menu_name']; ?></li>
				<?php else: ?>
					<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$child_menu['url']); ?>';"><?php echo $child_menu['menu_name']; ?></li>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</nav>
			
			
			<div class="right-side-operation">
				<ul>
					
					
					<li <?php if($warm_prompt_is_show == 'show'): ?>style="display:none;"<?php endif; ?>><a class="js-open-warmp-prompt"><i class="fa fa-info-circle"></i>&nbsp;提示</a></li>
					
				</ul>
			</div>
		</div>
		<div class="ns-main">
			
<div class="set-style">
	<dl>
		<dt><span class="color-red">*</span>规格名称:</dt>
		<dd>
			<input id="spec_name" type="text" value="<?php echo $info['spec_name']; ?>" placeholder="请输入规格名称" class="input-common" />
			<span class="error">请输入规格名称</span>
		</dd>
	</dl>
	<dl>
		<dt><span class="color-red">&nbsp;</span>规格排序:</dt>
		<dd>
			<input id="sort" type="text" value="<?php echo $info['sort']; ?>" class="input-common"/>
		</dd>
	</dl>
	<dl>
		<dt><span class="color-red">&nbsp;</span>是否启用</dt>
		<dd>
			<input id="is_visible" type="checkbox" class="checkbox" <?php if($info['is_visible'] == '1'): ?>checked="checked"<?php endif; ?> />
		</dd>
	</dl>
	<dl>
		<dt><span class="color-red">&nbsp;</span>是否筛选</dt>
		<dd>
			<input id="is_screen" type="checkbox" class="checkbox" <?php if($info['is_screen'] == '1'): ?>checked="checked"<?php endif; ?> />
		</dd>
	</dl>
	<dl>
		<dt><span class="color-red">&nbsp;</span>展示方式:</dt>
		<dd>
			<label class="line-label"><input type="radio" name="show_type" id="show_type1" value="1" <?php if($info['show_type'] == '1'): ?>checked<?php endif; ?> onchange="change_show_type(1)">文字</label>
			<label class="line-label"><input type="radio" name="show_type" id="show_type2" value="2" <?php if($info['show_type'] == '2'): ?>checked<?php endif; ?> onchange="change_show_type(2)">颜色</label>
			<label class="line-label"><input type="radio" name="show_type" id="show_type3" value="3" <?php if($info['show_type'] == '3'): ?>checked<?php endif; ?> onchange="change_show_type(3)">图片</label>
		</dd>
	</dl>
	<div class="table">
		<div class="w100">
			<div class="inline-block w5"></div>
			<div class="inline-block w75">属性名称</div>
			<div class="inline-block w19">操作</div>
		</div>
		<div class="table-body">
		<?php if(is_array($info['spec_value_list']) || $info['spec_value_list'] instanceof \think\Collection || $info['spec_value_list'] instanceof \think\Paginator): if( count($info['spec_value_list'])==0 ) : echo "" ;else: foreach($info['spec_value_list'] as $key=>$v): ?>
		<div class="w100 spec_data old_data">
			<div class="inline-block w5"><label style="margin-left: 5px;"> <input type="checkbox"></label></div>
			<div class="inline-block w75">
			<input type="text" name="spec_value" class="input-common addspec_color_<?php echo $key+1; ?>" value="<?php echo $v['spec_value_name']; ?>" onchange="setGoodsField('spec_value_name',<?php echo $v['spec_value_id']; ?>,this);" style="margin-right: 20px;">
			<span class="error"></span>
				<?php if($info['show_type'] == '2'): ?>
				<input type="color" value="<?php echo $v['spec_value_data']; ?>" onchange="setGoodsField('spec_value_data',<?php echo $v['spec_value_id']; ?>,this);" name="spec_value_data" style="width:60px;margin-top:5px;" class="input-common"/>
				<?php endif; ?>
				<input type="hidden" name="spec_value_id_<?php echo $key; ?>" value="<?php echo $v['spec_value_id']; ?>">
			</div>
			<div class="inline-block w19"><a href="javascript:;" onclick="delOldSpecValue(this, <?php echo $info['spec_id']; ?>, <?php echo $v['spec_value_id']; ?>)">删除</a></div>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div><a href="javascript:;" onclick="addSpecValue(this)"><i class="fa fa-plus"></i>&nbsp;&nbsp;添加一个属性</a></div>
		<input type="hidden" id="spec_id" name="spec_id" value="<?php echo $info['spec_id']; ?>">
	</div>
	<div style="text-align: center;">
		<button class="btn-common btn-big" onclick="updateGoodsSpec();">提交</button>
	</div>
</div>
<script>
//修改单个字段
function setGoodsField(type,spec_value_id,e){
	var field_name = '';
	var field_value = '';
	if(type == 'spec_value_name'){
		field_name = 'spec_value_name';
		field_value = $(e).val();
		if(field_value == ''){
			$(e).next(".error").show();
			$(e).next(".error").text("属性名称不能为空");
			return false;
		}
	}else if(type == 'spec_value_data'){
		field_name = 'spec_value_data';
		field_value = $(e).val();
	}else if(type == 'spec_value_data_del'){
		field_name = 'spec_value_data';
		field_value = '';
	}else if(type == 'spec_value_data_add'){
		field_name = 'spec_value_data';
		field_value = e;
	}
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/goods/modifygoodsspecvaluefield'); ?>",
		data : {
			'spec_value_id' : spec_value_id,
			'field_name' : field_name,
			'field_value' : field_value
		},
		dataType : "json",
		success : function(data) {
		}
	});
}

//添加一条属性
function addSpecValue(e){
	var show_type = $("input[name='show_type']:checked").val();
	var spec_data_num = $(".spec_data").length;
	var html = '<div class="w100 spec_data new_data">';
		html += '<div class="inline-block w5" style="padding-right:3px;"><label style="margin-left: 5px;"> <input type="checkbox"></label></div>';
	if(show_type ==2){
		html += '<div class="inline-block w75" style="margin-right: 4px;"><input type="text" name="spec_value" class="input-common">&nbsp;<input type="color" class="input-common" name="spec_value_data" style="width:60px;margin-top:5px;margin-left:25px;"/></div>';
	}else{
		html += '<div class="inline-block w75" style="margin-right: 4px;"><input type="text" name="spec_value" class="input-common"></div>';
	}
	html += '<div class="inline-block w19"><a href="javascript:;" onclick="delNewSpecValue(this)">删除</a></div></div>';
	$(e).parents(".table").find(".table-body").append(html);
}

//删除新数据
function delNewSpecValue(e){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
				$(this).dialog('close');
				$(e).parents('.w100').remove();
			},"取消,#e57373" : function(){
				$(this).dialog('close');
			}
		},
		contentText:"你确定删除吗？",
		title:"消息提醒"
	});
}

//删除 旧数据
function delOldSpecValue(e, spec_id, spec_value_id){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
				$(this).dialog('close');
				$.ajax({
					type : "post",
					url : "<?php echo __URL('ADMIN_MAIN/goods/deletegoodsspecvalue'); ?>",
					data : { 'spec_id' : spec_id, 'spec_value_id' : spec_value_id },
					dataType : "json",
					success : function(data) {
						if (data['code'] > 0) {
							$(e).parents('.w100').remove();
							showMessage('success', data["message"]);
						}else if(data['code'] == 0){
							showMessage('error', data["message"]);
						}else if(data['code'] == -1){
							showMessage('error', '当前属性正在使用中，不能删除！');
						}else if(data['code'] == -2){
							showMessage('error', '当前属性已经是最后一个，不能删除！');
						}
					}
				});
			},"取消,#e57373" : function(){
				$(this).dialog('close');
			}
		},
		contentText:"你确定删除吗？",
		title:"消息提醒"
	});
}

function validation() {
	var spec_name = $("#spec_name");
	if (spec_name.val() == "") {
		spec_name.focus().next("span").show();
		return false;
	} else {
		spec_name.next("span").hide();
	}
	return true;
}

var flag = false;//防止重复提交
function updateGoodsSpec() {
	if (!validation()) {
		return;
	}
	var spec_id = $("#spec_id").val();
	var spec_name = $("#spec_name").val();
	var sort = $("#sort").val();
	var show_type = $("input[name='show_type']:checked").val();
	if ($("#is_visible").prop("checked")) {
		var is_visible = 1;
	} else {
		var is_visible = 0;
	}
	if ($("#is_screen").prop("checked")) {
		var is_screen = 1;
	} else {
		var is_screen = 0;
	}
	if(show_type==2){
		var data_obj = $(".new_data");
		var spec_value_str = '';
		data_obj.each(function(i){
			if(trim(data_obj.eq(i).find("input[name='spec_value']").val()) != ''){
				var spec_value_name = trim(data_obj.eq(i).find("input[name='spec_value']").val());
				var spec_value_data = data_obj.eq(i).find("input[name='spec_value_data']").val();
				var new_str = '';
				new_str = spec_value_name+ ':' +spec_value_data;
				spec_value_str = spec_value_str + ',' + new_str;
			}
		});
		spec_value_str = spec_value_str.substr(1);
	}else{
		var spec_value_obj = $(".new_data input[name='spec_value']");
		var spec_value_str = '';
		spec_value_obj.each(function(i){
			if(trim(spec_value_obj.eq(i).val() != '')){
				spec_value_str += ',' + trim(spec_value_obj.eq(i).val());
			}
		});
		spec_value_str = spec_value_str.substr(1);
	}
	if(!validation()){
		return false;
	}
	
	if(flag){
		return;
	}
	flag = true;
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/goods/updategoodsspec'); ?>",
		data : {
			'spec_id' : spec_id,
			'spec_name' : spec_name,
			'show_type' : show_type,
			'sort' : sort,
			'is_visible' : is_visible,
			'spec_value_str' : spec_value_str,
			'is_screen':is_screen
		},
		success : function(data) {
			if (data["code"] > 0) {
				showMessage('success', "修改成功","<?php echo __URL('ADMIN_MAIN/goods/goodsspeclist'); ?>");
			} else {
				showMessage('error', "修改失败");
				flag = false;
			}
		}
	});
}

//改变展示方式
function change_show_type(type){
	var spec_data = $(".spec_data");
	if(type==2){
		for(var i=0; i<spec_data.length;i++){
			var spec_value_id = $("input[name='spec_value_id_"+i+"']").val();
			$("input[name='spec_value_id_"+i+"']").before('<input type="color" style="width:60px;margin-top:5px;" name="spec_value_data" onchange="setGoodsField(\'spec_value_data\','+spec_value_id+',this);" class="input-common"/>');
			setGoodsField('spec_value_data_add',spec_value_id,'#000000');
		}
		$(".new_data .w75").append('<input type="color" name="spec_value_data" style="width:60px;margin-top:5px;margin-left:25px;">');
	}else{
		$("input[name='spec_value_data']").remove();
		for(var i=0; i<spec_data.length;i++){
			var spec_value_id = $("input[name='spec_value_id_"+i+"']").val();
			setGoodsField('spec_value_data_del',spec_value_id,'');
		}
	}
}
</script>

			<script type="text/javascript" src="__STATIC__/js/jquery.cookie.js"></script>
<script src="__STATIC__/js/page.js"></script>
<div class="page" id="turn-ul" style="display: none;">
	<div class="pagination">
		<ul>
			<li class="total-data">共0有条数据</li>
			<li class="according-number">每页显示<input type="text" class="input-medium" id="showNumber" value="<?php echo $pagesize; ?>" data-default="<?php echo $pagesize; ?>" autocomplete="off"/>条</li>
			<li><a id="beginPage" class="page-disable" style="border: 1px solid #dddddd;">首页</a></li>
			<li><a id="prevPage" class="page-disable">上一页</a></li>
			<li id="pageNumber"></li>
			<li><a id="nextPage">下一页</a></li>
			<li><a id="lastPage">末页</a></li>
			<li class="page-count">共0页</li>
		</ul>
	</div>
</div>
<input type="hidden" id="page_count" />
<input type="hidden" id="page_size" />
<script>
/**
 * 保存当前的页面
 * 创建时间：2017年8月30日 19:29:20
 */
function savePage(index){
	var json = { page_index : index, show_number : $("#showNumber").val(), url :  window.location.href };
	$.cookie('page_cookie',JSON.stringify(json),{ path: '/' });
// 	console.log(json);
}

$(function() {
	try{
		
		$("#turn-ul").show();//显示分页
		var history_url = "";
		var json = { page_index : 1, show_number : <?php echo $pagesize; ?>, url :  window.location.href };
		var history_json = "";//用于临时保存分页数据
		if($.cookie('page_cookie') != undefined && $.cookie('page_cookie') != "" && $.cookie('page_cookie') != '""'){
			
			var cookie = eval("(" + $.cookie('page_cookie') + ")");
			if(cookie !=undefined && cookie != ""){
				json.page_index = cookie.page_index;
				if(cookie.show_number != undefined && cookie.show_number != "") json.show_number = cookie.show_number;
				else json.show_number = <?php echo $pagesize; ?>;
				history_url = cookie.url;
				history_json = cookie;
			}
			
		}else{
			
			savePage(json.page_index);
			
		}
		if(history_url != undefined && history_url != "" && history_url != json.url && json.page_index != 1){
			
			//如果页面发生了跳转，还原操作
			json.page_index = 1;
			json.show_number = <?php echo $pagesize; ?>;
			json.url = history_url;
// 			console.log("如果页面发生了跳转，还原操作");
			$.cookie('page_cookie',JSON.stringify(json),{ path: '/' });
		}

// 		console.log($.cookie('page_cookie'));
		$("#showNumber").val(json.show_number);
		if(json.page_index != 1) jumpNumber = json.page_index;
		LoadingInfo(json.page_index);//通过此方法调用分页类
		
	}catch(e){
		
		$("#turn-ul").hide();
		//当前页面没有分页，进行还原操作
		$.cookie('page_cookie',JSON.stringify(history_json),{ path: '/' });
// 		console.log(e);
// 		console.log("当前页面没有分页，进行还原操作");
// 		console.log($.cookie('page_cookie'));
		
	}
	
	//首页
	$("#beginPage").click(function() {
		if(jumpNumber!=1){
			jumpNumber = 1;
			LoadingInfo(1);
			savePage(1);
			changeClass("begin");
		}
		return false;
	});

	//上一页
	$("#prevPage").click(function() {
		var obj = $(".currentPage");
		var index = parseInt(obj.text()) - 1;
		if (index > 0) {
			obj.removeClass("currentPage");
			obj.prev().addClass("currentPage");
			jumpNumber = index;
			LoadingInfo(index);
			savePage(index);
			//判断是否是第一页
			if (index == 1) {
				changeClass("prev");
			} else {
				changeClass();
			}
		}
		return false;
	});

	//下一页
	$("#nextPage").click(function() {
		var obj = $(".currentPage");
		//当前页加一（下一页）
		var index = parseInt(obj.text()) + 1;
		if (index <= $("#page_count").val()) {
			jumpNumber = index;
			LoadingInfo(index);
			savePage(index);
			obj.removeClass("currentPage");
			obj.next().addClass("currentPage");
			//判断是否是最后一页
			if (index == $("#page_count").val()) {
				changeClass("next");
			} else {
				changeClass();
			}
		}
		return false;
	});

	//末页
	$("#lastPage").click(function() {
		jumpNumber = $("#page_count").val();
		if(jumpNumber>1){
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			$("#pageNumber a:eq("+ (parseInt($("#page_count").val()) - 1) + ")").text($("#page_count").val());
			changeClass("next");
		}
		return false;
	});

	//每页显示页数
	$("#showNumber").blur(function(){
		if(isNaN($(this).val())){
			$("#showNumber").val(20);
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		if($(this).val().indexOf(".") != -1){
			var index = $(this).val().indexOf(".");
			$("#showNumber").val($(this).val().substr(0,index));
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		if(parseInt($(this).val())<=0){
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		//页数没有变化的话，就不要再执行查询
		if(parseInt($(this).val()) != $(this).attr("data-default")){
// 			jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
			$(this).attr("data-default",$(this).val());
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
		}
		return false;
	}).keyup(function(event){
		if(event.keyCode == 13){
			if(isNaN($(this).val())){
				$("#showNumber").val(20);
				jumpNumber = 1;
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
			}
			//页数没有变化的话，就不要再执行查询
			if(parseInt($(this).val()) != $(this).attr("data-default")){
// 				jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
				$(this).attr("data-default",$(this).val());
				//总数据数量
				var total_count = parseInt($(".total-data").attr("data-total-count"));
				//计算用户输入的页数是否超过当前页数
				var curr_count = Math.ceil(total_count/parseInt($(this).val()));
				if( curr_count !=0 && curr_count < jumpNumber){
					jumpNumber = curr_count;//输入的页数超过了，没有那么多
				}
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
			}
		}
		return false;
	});
});

//跳转页面
function JumpForPage(obj) {
	jumpNumber = $(obj).text();
	LoadingInfo($(obj).text());
	savePage($(obj).text());
	$(".currentPage").removeClass("currentPage");
	$(obj).addClass("currentPage");
	if (jumpNumber == 1) {
		changeClass("prev");
	} else if (jumpNumber < parseInt($("#page_count").val())) {
		changeClass();
	} else if (jumpNumber == parseInt($("#page_count").val())) {
		changeClass("next");
	}
}
</script>
		</div>
		
	</section>
</article>
	
<!-- 公共的操作提示弹出框 common-success：成功，common-warning：警告，common-error：错误，-->
<div class="common-tip-message js-common-tip">
	<div class="inner"></div>
</div>

<!--修改密码弹出框 -->
<div id="edit-password" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:562px;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>修改密码</h3>
	</div>
	<div class="modal-body">
		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="pwd0"><span class="color-red">*</span>原密码</label>
				<div class="controls">
					<input type="password" id="pwd0" placeholder="请输入原密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="pwd1"><span class="color-red">*</span>新密码</label>
				<div class="controls">
					<input type="password" id="pwd1" placeholder="请输入新密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="pwd2"><span class="color-red">*</span>再次输入密码</label>
				<div class="controls">
					<input type="password" id="pwd2" placeholder="请输入确认密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div style="text-align: center; height: 20px;" id="show"></div>
		</form>
	</div>
	<div class="modal-footer">
		<button class="btn btn-primary" onclick="submitPassword()" style="display:inline-block;">保存</button>
		<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/jquery-ui-private.css">
<script>
var platform_shopname= '度京商城';
</script>
<script type="text/javascript" src="ADMIN_JS/jquery-ui-private.js" charset="utf-8"></script>
<script type="text/javascript" src="ADMIN_JS/jquery.timers.js"></script>
<div id="dialog"></div>
<script type="text/javascript">
function showMessage(type, message,url,time){
	if(url == undefined){
		url = '';
	}
	if(time == undefined){
		time = 2;
	}
	//成功之后的跳转
	if(type == 'success'){
		$( "#dialog").dialog({
			buttons: {
				"确定,#51A351": function() {
					$(this).dialog('close');
				}
			},
			contentText:message,
			time:time,
			timeHref: url,
		});
	}
	//失败之后的跳转
	if(type == 'error'){
		$( "#dialog").dialog({
			buttons: {
				"确定,#e57373": function() {
					$(this).dialog('close');
				}
			},
			time:time,
			contentText:message,
			timeHref: url,
		});
	}
}

function showConfirm(content){
	$( "#dialog").dialog({
		buttons: {
			"确定": function() {
				$(this).dialog('close');
				return 1;
			},
			"取消,#e57373": function() {
				$(this).dialog('close');
				return 0;
			}
		},
		contentText:content,
	});
}
</script>
<script src="ADMIN_JS/ns_common_base.js"></script>
<script src="__STATIC__/blue/js/ns_common_blue.js"></script>
<script>
$(function(){
	//顶部导航管理显示隐藏
	$(".ns-navigation-title>span").click(function(){
		$(".ns-navigation-management").slideUp(400);
	});
	
	$(".js-nav").toggle(function(){
		$(".ns-navigation-management").slideDown(400);
	},function(){
		$(".ns-navigation-management").slideUp(400);
	});
});

</script>

</body>
</html>