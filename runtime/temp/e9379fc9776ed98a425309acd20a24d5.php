<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:47:"template/adminblue\Goods\addGoodsAttribute.html";i:1507442835;s:28:"template/adminblue\base.html";i:1508840920;s:45:"template/adminblue\controlCommonVariable.html";i:1503719297;s:32:"template/adminblue\urlModel.html";i:1504865854;s:34:"template/adminblue\pageCommon.html";i:1505550036;s:34:"template/adminblue\openDialog.html";i:1509005619;}*/ ?>
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
.error {padding-left: 5px !important;}
.table{width:100%;display:table;border-left: 1px dotted #e5e5e5;border-right: 1px dotted #e5e5e5;border-bottom: 1px dotted #e5e5e5;background: rgba(204, 204, 204, 0.09);}
.table-body{min-height:50px;max-height:410px;overflow-y:auto;overflow-x:hidden;}
.inline-block{display:inline-block;}
.w5{width:5%;}
.w75{width:15%;}
.w19{width:10%;text-align:center;}
.w100{width:100% !important;height: 40px;line-height: 40px;border-bottom: 1px dotted #e5e5e5;}
.add-spec{height: 40px;line-height: 40px;border-bottom:1px dotted #E6E6E6;padding:0 10px;}
input{vertical-align: initial;}
.table input[type="text"], input[type="password"], input.text, input.password {font: 12px/20px Arial;color: #777;background-color: #FFF;vertical-align: baseline;margin-bottom:0px;}
.set-style{padding:20px;}
.set-style dl dt {text-align:left;width: 7%;}
.attr-choose-wrap label, .relate-norm label {cursor: pointer;float: left;margin: 0 15px 10px 0;padding: 0 10px;color: #636363;line-height: 28px;}
.attr-choose-wrap label.current, .relate-norm label.current {color: #636363;background: url(../images/icon_choose.gif) no-repeat right bottom;}
input{width:100px;}
.selectbox{width:130px;}
.text {color: #fb6b5b;}
.attr_table{position: fixed;top: 10%;left: 50%;z-index: 1050;width: 560px;margin-left: -280px;background-color: #ffffff;border: 1px solid #999;border: 1px solid rgba(0, 0, 0, 0.3);outline: none;	box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);background-clip: padding-box;}
.edit_top{padding: 0px 20px;line-height: 40px;background: #e5e5e5;}
.addSpec{height: 40px;line-height: 40px;padding: 0px 10px;}
.modal-header {padding: 9px 15px;border-bottom: 1px solid #eee;}
.modal-footer {padding: 14px 15px 15px;margin-bottom: 0;text-align: right;background-color: #f5f5f5;border-top: 1px solid #ddd;border-radius: 0 0 6px 6px;box-shadow: inset 0 1px 0 #ffffff;}
.w140{width:140px;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;padding:0;height:23px;line-height:26px;}
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
		<dt><span class="color-red">*</span>类型名称:</dt>
		<dd>
			<input id="attr_name" type="text" placeholder="请输入类型名称" class="input-common"/>
			<span class="error">请输入类型名称</span>
		</dd>
	</dl>
	<dl>
		<dt><span class="color-red">&nbsp;</span>属性排序:</dt>
		<dd>
			<input id="sort" type="text" class="input-common" placeholder="0" onkeyup='this.value=this.value.replace(/\D/gi,"")'/>
		</dd>
	</dl>
	<dl>
		<dt><span class="color-red">&nbsp;</span>是否启用</dt>
		<dd>
			<input id="is_visible" type="checkbox" class="checkbox" checked="checked" />
		</dd>
	</dl>
	<div class="table">
		<div class="add-spec">关联规格</div>
		<?php if($goodsguige != ''): ?>
		<div class="padding-top padding-left padding-right attr-choose-wrap clearfix" style="border-bottom: 1px dotted #e5e5e5;">
			<?php if(is_array($goodsguige['data']) || $goodsguige['data'] instanceof \think\Collection || $goodsguige['data'] instanceof \think\Paginator): if( count($goodsguige['data'])==0 ) : echo "" ;else: foreach($goodsguige['data'] as $key=>$v): ?>
			<label class="ralationguige" style="margin-top: 8px;"><input type="checkbox" value="<?php echo $v['spec_id']; ?>" name="spec" style="vertical-align:middle;margin-right:5px;"/><?php echo $v['spec_name']; ?></label>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<?php endif; ?>
	</div>
	<div class="table">
		<div class="w100">
			<div class="inline-block w5"></div>
			<div class="inline-block w75">排序</div>
			<div class="inline-block w75" style="width:23%;">属性名称</div>
			<div class="inline-block w75">所属类型</div>
			<div class="inline-block w75">属性值</div>
			<div class="inline-block w75" style="width:10%;">是否筛选</div>
			<div class="inline-block w19">操作</div>
		</div>
		<div class="table-body">
			<div class="w100 value_data">
				<div class="inline-block w5"><label style="margin-left: 5px;"><input type="checkbox"></label></div>
				<div class="inline-block w75">
					<input type="text" name="value_sort_0" class="input-common" placeholder="0" onkeyup='this.value=this.value.replace(/\D/gi,"")' />
				</div>
				<div class="inline-block w75" style="width:23%;">
					<input type="text" name="value_name_0" class="input-common"/>
					<span class="spec_box_0"></span>
				</div>
				
				<div class="inline-block w75">
					<select class="selectbox_0 select-common" id="type_0" onchange="updateAttrselectvalue(0,this);" style="width:110px;">
						<option value="1">输入框</option>
						<option value="2">单选框</option>
						<option value="3">复选框</option>
					</select>
				</div>
				<div class="inline-block w75 w140" id="value_0" style="width:11%;"></div>
				<input type="hidden" id="value_hidden_0">
				<div class="inline-block w75" style="width:13%;text-align:center;">
					<a href="javascript:;" class="is_search is_search_0" is_search="1" onclick="tab_is_search(this)"><i class="fa fa-check text-success text-active"></i></a>
				</div>
				<div class="inline-block w19" style="width:12%;"><a href="javascript:;" onclick="delSpecValue(this)">删除</a></div>
			</div>
		</div>
		<div style="padding:10px;"><a href="javascript:;" onclick="addSpecValue(this)"><i class="fa fa-plus"></i>&nbsp;&nbsp;添加一个属性</a></div>
	</div>
	
	<!-- 点击编辑弹出框开始 -->
	<div class="attr_table" id="Attrbox" style="display:none;">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">编辑属性值</h3>
		</div>
		<div class="w100">
			<div class="inline-block w5"></div>
			<div class="inline-block w75" style="width:80%;">属性名称</div>
			<div class="inline-block w19">操作</div>
		</div>
		<div class="table-body">
			<div class="w100 Spec_data">
				<div class="inline-block w5"><label style="margin-left: 15px;"> <input type="checkbox"></label></div>
				<div class="inline-block w75" style="width:80%">
					<input type="text" name="attr_value" style="width:200px;">
				</div>
				<div class="inline-block w19"><a href="javascript:;" onclick="delSpecValue(this)">删除</a></div>
			</div>
		</div>
		<div class="addSpec"><a href="javascript:;" onclick="addAttrSmallValue(this)"><i class="fa fa-plus"></i>&nbsp;&nbsp;添加一个属性</a></div>
		<div class="modal-footer">
				<input type="hidden" id="click_order"/>
				<button class="btn btn-info" onclick="submitAttrValue()" style="display:inline-block;">保存</button>
				<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
		</div>
	</div>
	<!-- 点击编辑弹出框结束 -->
	<div style="text-align: center;">
		<button class="btn-common btn-big" onclick="addGoodsAttribute();">提交</button>
	</div>
</div>

<script>
//点击改变是否可以编辑属性值
function updateAttrselectvalue(order,e){
	$("#Attrbox").hide();
	if($(e).val()==1){
		$(e).parents(".value_data").find(".spec_box_"+order).html('<a href="javascript:;" style="color: #777;"></a>');
	}else{
		$(e).parents(".value_data").find(".spec_box_"+order).html('<a href="javascript:;" id="showAttrbox_'+order+'" onclick="showAttrbox('+order+',this);">编辑属性值</a>');
	}
	$(e).parents(".value_data").find("#value_"+order).html('');
	$("#Attrbox .Spec_data:gt(0)").remove();
	$("#Attrbox .Spec_data").eq(0).find("input[name='attr_value']").val('');
}
//点击编辑属性值弹出框事件
function showAttrbox(order,e){
	var click_order = $("#click_order").attr('click_order',order);
	var value_str = $(e).parents(".value_data").find("#value_"+order).text();
	if(value_str != undefined){
		var value_arr = value_str.split(',');
		var html = '';
		for(var i=0; i<value_arr.length; i++){
			html += '<div class="w100 Spec_data">';
			html += '<div class="inline-block w5"><label style="margin-left: 15px;"> <input type="checkbox"></label></div>';
			html += '<div class="inline-block w75" style="width:80%">';
			html += '<input type="text" name="attr_value" style="width:200px;margin-left:4px;" value="'+value_arr[i]+'">';
			html += '</div>';
			html += '<div class="inline-block w19"><a href="javascript:;" onclick="delSpecValue(this)">删除</a></div>';
			html += '</div>';
		}
	}else{
		var html = '';
		html += '<div class="w100 Spec_data">';
		html += '<div class="inline-block w5"><label style="margin-left: 15px;"> <input type="checkbox"></label></div>';
		html += '<div class="inline-block w75" style="width:80%">';
		html += '<input type="text" name="attr_value" style="width:200px;margin-left:4px;">';
		html += '</div>';
		html += '<div class="inline-block w19"><a href="javascript:;" onclick="delSpecValue(this)">删除</a></div>';
		html += '</div>';
	}
	$(".Spec_data").remove();
	$(".attr_table .table-body").append(html);
	$("#Attrbox").show();
}
$(".close").click(function(){
	$("#Attrbox").hide();
})
$(".btn").click(function(){
	$("#Attrbox").hide();
})

function tab_is_search(e){
	var type = $(e).attr("is_search");
	if(type == 0){
		$(e).html('<i class="fa fa-check text-success text-active"></i>');
		$(e).attr("is_search", 1);
	}else{
		$(e).html('<i class="fa fa-times text-danger text"></i>');
		$(e).attr("is_search", 0);
	}
}
function submitAttrValue(){
	var click_order = $("#click_order").attr('click_order');
	var attr_value_obj = $("input[name='attr_value']");
	var attr_value_str = '';
	attr_value_obj.each(function(i){
		if(attr_value_obj.eq(i).val() != ''){
			attr_value_str += ',' + trim(attr_value_obj.eq(i).val());
		}
	});
	attr_value_str = attr_value_str.substr(1);
	$("#value_"+click_order).text(attr_value_str);
	$("#value_hidden_"+click_order).val(attr_value_str);
}
function addAttrSmallValue(e){
	var spec_data_num = $(".Spec_data").length;
	var html = '<div class="w100 Spec_data">';
	html += '<div class="inline-block w5"><label style="margin-left: 15px;"> <input type="checkbox" style=""></label></div>';
	html += '<div class="inline-block w75" style="width:80%">';
	html += '<input type="text" name="attr_value" style="width:200px;margin-left: 4px;">';
	html += '</div>';
	html += '<div class="inline-block w19"><a href="javascript:;" onclick="delSpecValue(this)">删除</a></div>';
	html += '</div>';
	$(e).parents(".attr_table").find(".table-body").append(html);
}
function addSpecValue(e){
	var data_obj_num = $(".value_data").length;
	var html = '<div class="w100 value_data">';
	html += '<div class="inline-block w5" style="padding-right:3px;"><label style="margin-left: 5px;"> <input type="checkbox" style=""></label></div>';
	html += '<div class="inline-block w75" style="padding-right: 4px;">';
	html += '<input type="text" name="value_sort_'+data_obj_num+'"  class="input-common" onkeyup=\'this.value=this.value.replace(/\D/gi,"")\'>';
	html += '</div>';
	html += '<div class="inline-block w75" style="margin-right: 5px;width:23%;">';
	html += '<input type="text" name="value_name_'+data_obj_num+'" class="input-common" style="margin-right:5px;"><span class="spec_box_'+data_obj_num+'"></span>';
	html += '</div>';
	html += '<div class="inline-block w75" style="margin-right: 9px;">';
	html += '<select class="selectbox_'+data_obj_num+' select-common" id="type_'+data_obj_num+'" style="width:110px;" onchange="updateAttrselectvalue('+data_obj_num+',this);">';
	html += '<option value="1">输入框</option>';
	html += '<option value="2">单选框</option>';
	html += '<option value="3">复选框</option>';
	html += '</select>';
	html += '</div>';
	html += '<div class="inline-block w75 w140" style="width:11%;" id="value_'+data_obj_num+'">';
	html += '</div>';
	html += '<input type="hidden" id="value_hidden_'+data_obj_num+'" value="">';
	html += '<div class="inline-block w75" style="text-align:center;width:13%;padding-right:5px;">';
	html += '<a href="javascript:;" class="is_search is_search_'+data_obj_num+'"  is_search="1" onclick="tab_is_search(this)"><i class="fa fa-check text-success text-active"></i></a>';
	html +='</div>';
	html += '<div class="inline-block w19" style="width:12%;"><a href="javascript:;" onclick="delSpecValue(this)">删除</a></div>';
	html += '</div>';
	$(e).parents(".table").find(".table-body").append(html);
}
function delSpecValue(e){
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
function validation() {
	var attr_name = $("#attr_name");
	if (attr_name.val() == "") {
		attr_name.focus().next("span").show();
		return false;
	} else {
		attr_name.next("span").hide();
	}
	
	return true;
}
//编辑属性弹出框
$("#showAttrbox").click(function(){
// 	$("#Attrbox").show();
})

var flag = false;//防止重复提交
function addGoodsAttribute() {
	var attr_name = trim($("#attr_name").val());
	if(attr_name == ''){
		$("#attr_name").focus();
		showTip("类型名称不能为空",'warning');
		return false;
	}
	var sort = $("#sort").val();
	if ($("#is_visible").prop("checked")) {
		var is_visible = 1;
	} else {
		var is_visible = 0;
	}
	
	var select_box = '';
	$("input[name='spec']:checked").each(function(){
		select_box = select_box+','+$(this).val();
	});
	select_box = select_box.substring(1);
	
	var data_obj = $(".value_data");
	var data_obj_str = '';
	data_obj.each(function(i){
		if(data_obj.eq(i) != ''){
			var value_sort = $("input[name='value_sort_"+i+"']").val();
			var value_name = trim($("input[name='value_name_"+i+"']").val());
			var type = $("#type_"+i).val();
			var value = $("#value_hidden_"+i).val();
			if(type > 1){
				if(value == ''){
					$("#type_"+i).focus();
					showTip("类型为单选框或复选框时，属性值不能为空",'warning');
					flag = true;
					return false;
				}else{
					flag = false;
				}
			}
			var is_search = $(".is_search_"+i).attr("is_search");
			var new_str = '';
			new_str = value_name+ '|' +type+ '|' +value_sort+ '|' +is_search+ '|' +value;
			data_obj_str = data_obj_str + ';' + new_str;
		}
	});
	data_obj_str = data_obj_str.substr(1);
	var data_obj_arr = data_obj_str.split('|');
	if(data_obj_arr[0] == ''){
		showTip("商品类型属性名称不能为空！",'warning');
		return false;
	}
	
	if(flag){
		return;
	}
	flag = true;
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/goods/addattributeservice'); ?>",
		data : {
			'attr_name' : attr_name,
			'sort' : sort,
			'is_visible' : is_visible,
			'select_box' :select_box,
			'data_obj_str' : data_obj_str
		},
		success : function(data) {
			if (data["code"] > 0) {
				showMessage('success', "添加成功","<?php echo __URL('ADMIN_MAIN/goods/attributelist'); ?>");
			} else {
				showMessage('error', "添加失败");
				flag = false;
			}
		}
	});
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