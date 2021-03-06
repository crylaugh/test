<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:44:"template/adminblue\Promotion\addMansong.html";i:1504096087;s:28:"template/adminblue\base.html";i:1508840920;s:45:"template/adminblue\controlCommonVariable.html";i:1503719297;s:32:"template/adminblue\urlModel.html";i:1504865854;s:45:"template/adminblue\Promotion\selectGoods.html";i:1503280183;s:34:"template/adminblue\pageCommon.html";i:1505550036;s:34:"template/adminblue\openDialog.html";i:1509005619;}*/ ?>
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
		
<script src="ADMIN_JS/My97DatePicker/WdatePicker.js" type="text/javascript"></script>
<style>
.set-style h4{color:#0072D2;margin-left:10px;font-size:12px;}
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
	<h4>活动信息</h4>
	<dl>
		<dt><span style="color:red;">*</span>&nbsp;&nbsp;活动名称:</dt>
		<dd>
			<input type="text" id="mansong_name" maxlength="10" class="input-common"/>
			<p class="error">请输入活动名称</p>
		</dd>
	</dl>
	<dl>
		<dt><span style="color:red;">*</span>&nbsp;&nbsp;生效时间:</dt>
		<dd>
			<input class="input-medium input-common" type="text" id="start_time" style="width:250px;"onclick="WdatePicker({skin:'twoer',dateFmt:'yyyy-MM-dd HH:mm:ss'})" />
			<span class="mlr5">至</span>
			<input class="input-medium input-common" size="15"type="text" id="end_time" style="width:250px;"onclick="WdatePicker({skin:'twoer',dateFmt:'yyyy-MM-dd HH:mm:ss'})">
			<p class="error">请输入生效时间</p>
		</dd>
	</dl>
	
	<h4>优惠设置</h4>
	<dl>
		<dt>优惠方式:</dt>
		<dd>
			<label><input class="input-mini" type="radio" name="type" value="1" checked="checked" /> 普通优惠</label>
			<label><input class="input-mini" type="radio" name="type" value="2" /> 多级优惠</label>
			<p class="hint">（每级优惠不累积叠加）</p>
		</dd>
	</dl>
	<dl>
		<dt><span style="color:red;">*</span>&nbsp;&nbsp;优惠条件:</dt>
		<dd style="width:100%;">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>层级</th>
							<th>优惠门槛</th>
							<th>优惠方式（可多选）</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>满&nbsp;<input type="text" id="price1" class="input-common" style="width:50px;vertical-align: middle;">&nbsp;元</td>
							<td>
								<div>
									<p>
										<label>
											<input type="checkbox" name="mansong" class="discount1" onchange="set_rule('discount',1,this)" />
											<span id="discount1">减现金</span>
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" name="mansong" class="free_shipping1" />
											<span id="free_shipping1">免邮</span>
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" name="mansong" class="give_point1" onchange="set_rule('give_point',1,this)" />
											<span id="give_point1">送积分</span>
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" name="mansong" class="give_coupon1" onchange="set_rule('give_coupon',1,this)" />
											<span id="give_coupon1">送优惠券</span>
										</label>
									</p>
									<!-- <p>
										<label>
											<input type="checkbox" name="mansong" class="gift_id1" onchange="set_rule('gift_id',1,this)" />
											<span id="gift_id1">送赠品</span>
										</label>
									</p> -->
								</div>
							</td>
							<td></td>
						</tr>
					</tbody>
					<tfoot style="display:none;">
						<tr>
							<td colspan="4">
								<a href="javascript:void(0)" onclick="add_reward()">+新增一级优惠</a>
								<span class="gray pl20">最多可设置五个层级</span>
							</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</dd>
	</dl>
	
	<h4>选择活动商品</h4>
	<style>
.table-div table tr td {border: 1px solid #e5e5e5;padding: 10px;}
.goodlist-table tr td {border: 1px solid #e5e5e5;padding: 10px;}
.help-inline {height: 30px;line-height: 30px;}
input[type="radio"] {vertical-align: middle;margin-top: -2px;}
.controls table tr td input[type="radio"] {margin: 0px;}
.ump-select-search select {margin-bottom: 0px}
.ump-select-tab {min-width: 750px;margin-bottom: -1px;background: #f2f2f2;border: 1px solid #ddd;border-bottom:0;}
.ui-nav-tab {margin: 0;}
.ui-nav-tab>li {position: relative;display: block;float: left;text-align: center;margin-bottom: -1px;}
.ui-nav-tab:after {content: "";display: table;}
.ump-select-tab .ui-nav-tab li.active a, .ump-select-tab .ui-nav-tab li.active a:hover{height: 24px;line-height: 24px;border-bottom: 2px solid #f60;}
.ump-select-tab .ui-nav-tab li:first-child a {border-left: 0;}
.ump-select-tab .ui-nav-tab li a {width: 120px;border-top: 0;height: 25px;line-height: 25px;padding: 8px 20px;}
.ui-nav-tab>li.active>a, .ui-nav-tab>li.active>a:hover, .ui-nav-tab>li.active>a:focus{color: #333;background-color: #fff;border-bottom-color: transparent;cursor: default;}
.ui-nav-tab>li>a {position: relative;display: block;padding: 9px 15px;margin-right: -1px;line-height: 1.42857143;border: 1px solid #ddd;background-color: #f8f8f8;color: #333;}
.ump-select-box {width: 100%;border: 1px solid #ddd;overflow: hidden;}
.ump-select-search {padding: 10px 20px 10px;border-bottom: 1px solid #ddd;position: relative;}
.ump-select-goods .ui-table {background: #fff;}
.ui-table.ui-table-list {border: none;}
.ui-table {width: 100%;font-size: 12px;text-align: left;margin-bottom: 0;border: 1px solid #e5e5e5;}
.ui-table th.checkbox, .ui-table td.checkbox {width: 18px;padding: 10px 0 10px 10px;}
.ui-table th, .ui-table td {padding: 10px;border-bottom: 1px solid #e5e5e5;vertical-align: top;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}
.ui-table th {background: #f8f8f8;}
.ui-table .cell-20 {width: 20%;}
.center, .text-center {text-align: center;}
.ump-select-goods .ui-table tr td {padding: 6px 4px;border-bottom: 1px dashed #ddd;vertical-align: middle;}
.ump-select-goods .goods-image-td, .ump-select-goods .goods-image-td .goods-image,.ump-select-goods .goods-image-td img {width: 30px;}
.ui-box {margin-bottom: 15px;}
.ump-select-footer {padding: 0 20px 0 10px;}
.ump-select-footer .pull-left {padding-bottom: 20px;}
.pull-left {float: left;}
.pagenavi {font-size: 12px;line-height: 16px;text-align: right;}
.ui-btn {display: inline-block;border-radius: 2px;height: 26px;line-height: 26px;padding: 0 12px;cursor: pointer;color: #333;background: #f8f8f8;border: 1px solid #ddd;text-align: center;font-size: 12px;-webkit-box-sizing: content-box;-moz-box-sizing: content-box;box-sizing: content-box;}
.ui-toolt {position: relative;}
.pagenavi .total, .pagenavi .prev, .pagenavi .next, .pagenavi .num,.pagenavi .goto-input, .pagenavi .goto-btn {display: inline-block;color: #333;}
.pagenavi .total {padding: 6px 0;font-weight: normal !important;}
.ui-table tr td {line-height: normal;}
input[type=number] {-moz-appearance:textfield;}
input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button {-webkit-appearance: none;margin: 0;}
button{outline:none;}
</style>
<dl class="type_dl">
	<!-- <dt>选择商品:</dt> -->
	<dt style="text-align: right;width: 310px;"><span class="error" id="notSelect">请至少选择一件商品</span></dt>
	<dd>
		<label style="vertical-align: middle; font-weight: normal; display: inline-block;margin-right:5px;">
			<input type="radio" value="1" name="range_type" onclick="ShopRadio(1)" checked="checked" />
			<span onclick="ShopRadio(1)" style="font-size: 15px; cursor: pointer;">所有商品</span>
		</label>
		<label style="vertical-align: middle; font-weight: normal; display: inline-block;">
			<input type="radio" name="range_type" value="0" onclick="ShopRadio(0)">
			<span onclick="ShopRadio(0)" style="cursor: pointer; font-size: 15px;">部分商品</span>
		</label>
	</dd>
</dl>
<dl>
	<dd id="some_pro" style="width: 99%; display: none;">
		<div class="js-goods-box">
			<div class="ump-select-tab">
				<ul class="ui-nav-tab">
					<li class="js-tab active"><a href="javascript:void(0);" onclick="select_goods(this)">选择商品</a></li>
					<li class="js-tab"><a href="javascript:void(0);" onclick="selected_goods(this)">已选商品</a></li>
				</ul>
			</div>
			<div class="goods-list-wrap">
				<div class="js-goods-list-region js-goods-list-tab select-one" style="display: block;">
					<div class="widget-list">
						<div class="ump-select-box js-select-goods-list">
							<div class="ump-goods-wrap">
								<div class="ump-waitting-select ump-goods-list">
									<div class="js-list-filter-region clearfix">
										<div class="widget-list-filter">
											<div class="ump-select-search" style="display:none;">
												<select name="tag" id="group_id" class="js-goods-group">
													<option value="0">所有分组</option>
												</select>
												<select name="keyword_type" class="js-search-type">
													<option value="goods_title">商品标题</option>
													<option value="goods_no">商品编码</option>
												</select>
												<input class="js-input" type="text" name="keyword" placeholder="请输入商品名称" data-goods-title="请输入商品名称" data-goods-no="请输入商品编码" style="width: 200px;" />
												<a href="javascript:;" onclick="LoadingInfo(1)" class="btn btn-primary js-search" style="display: inline-block;">搜索</a>
											</div>
										</div>
									</div>
									<div class="ump-select-goods">
										<table class="ui-table ui-table-list" style="padding: 0px;">
											<thead
												class="js-list-header-region tableFloatingHeaderOriginal">
												<tr class="widget-list-header">
													<th colspan="2">商品信息</th>
													<th class="text-center cell-20 kucun">库存</th>
													<th class="text-center cell-20">操作</th>
												</tr>
											</thead>
											<tbody class="js-list-body-region goods-list"></tbody>
										</table>
										<div class="js-list-empty-region"></div>
									</div>
									<div class="js-list-footer-region ui-box">
										<div class="widget-list-footer"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="js-selected-goods-list-region js-goods-list-tab select-two" style="display: none;">
					<div>
						<div class="widget-list-item">
							<div class="ump-select-box js-select-goods-list">
								<div class="ump-goods-wrap">
									<div class="ump-already-select ump-goods-list">
										<div class="ump-select-goods">
											<table class="ui-table ui-table-list js-table"
												style="display:;">
												<thead class="js-list-header-region">
													<tr>
														<th colspan="2">商品信息</th>
														<th class="cell-20 text-center kucun">库存</th>
														<th class="cell-20 text-center">操作</th>
													</tr>
												</thead>
												<tbody class="js-list-body-region"></tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</dd>
</dl>
<input type="hidden" id="goods_id_array">
<script>
var $goods_selected_array = new Array();
var $goods_id_selected_array = new Array();
var $data_array;
$(function(){
	loadGoodsGroup();
});
$(".js-batch-add").click(function(){
	var obj = $(".select-one").find("input[name='sub']:checked");
	var html = '';
	obj.each(function(i){
		html += '<tr>'+$(".select-one table tbody tr").eq(i).html()+'</tr>';
	});
	$(".select-two tbody").append(html);
});
function join(goods_id,e){
	if($("#selected_"+goods_id).length > 0){
		return false;
	}else{
		for(var i=0; i<$data_array.length; i++){
			if($data_array[i]['goods_id'] == goods_id){
				$goods_selected_array[$goods_selected_array.length] = $data_array[i];
				$goods_id_selected_array[$goods_id_selected_array.length] = goods_id;
				refresh_data();
				break;
			}
		}
		var a = '<a href="javascript:;" class="btn btn-default js-remove-reward" onclick="cancel_join('+goods_id+',this)">取消参加</a>';
		$(e).parent("td").html(a);
		$("#selected_"+goods_id+" .goods-opt").html(a);
	}
}

function cancel_join(goods_id,e){
	if($("#selected_"+goods_id).length > 0){
		for(var i=0; i<$goods_selected_array.length; i++){
			if($goods_selected_array[i]['goods_id'] == goods_id){
				$goods_selected_array.splice(i,1);
				$goods_id_selected_array.splice(i,1);
				refresh_data();
				break;
			}
		}
		var a = '<a href="javascript:;" class="btn btn-primary js-add-reward" onclick="join('+goods_id+',this)">参加活动</a>';
		$(e).parent("td").html(a);
		$("#select_"+goods_id+" .goods-opt").html(a);
	}
}


function select_goods(e){
	$(e).parents("ul.ui-nav-tab").find(".js-tab").removeClass("active");
	$(e).parent("li").addClass("active");
	$(".select-one").show();
	$(".select-two").hide();
	$("#turn-ul").show();
}

//刷新 已选商品
function refresh_data(){
	var data = $goods_selected_array;
	var html = "";
	for (var i = 0; i < data.length; i++) {
		html +='<tr class="widget-list-item" id="selected_'+data[i]["goods_id"]+'" goodsid="'+data[i]["goods_id"]+'">';
		html +='<td class="goods-image-td text-center"><div class="goods-image js-goods-image">';
		if(data[i]["picture_info"] != null){
			html +='<img src="'+__IMG(data[i]["picture_info"]['pic_cover_micro'])+'"></div></td>';
		}else{
			html +='<img src="__ROOT__/"></div></td>';
		}
		html +='<td class="goods-meta"><p class="goods-title">';
		html +='<a href="'+__URL('SHOP_MAIN/goods/goodsinfo?goodsid='+data[i]['goods_id'])+'" target="_blank" class="new-window" title="'+data[i]["goods_name"]+'">'+data[i]["goods_name"]+'</a></p>';
		html +='<p class="goods-price">'+data[i]["price"]+'</p></td>';
		html +='<td class="text-center">'+data[i]["stock"]+'</td>';
		html +='<td class="text-center goods-opt"><a href="javascript:;" class="btn btn-default js-remove-reward" onclick="cancel_join('+data[i]["goods_id"]+',this)">取消参加</a></td></tr>';
	}
	$(".select-two tbody tr").remove();
	$(".select-two tbody").append(html);
}

function selected_goods(e){
	$(e).parents("ul.ui-nav-tab").find(".js-tab").removeClass("active");
	$(e).parents("li").addClass("active");
	$(".select-two").show();
	$(".select-one").hide();
	$("#turn-ul").hide();
}

function LoadingInfo(page_index) {
	var $goodsArr = new Array();
	var group_id = $("#group_id").val();
	var search_text = $("#search_text").val();
	if($("input[name='range_type']").val() == 0){
		$("#turn-ul").show();
	}else{
		$("#turn-ul").hide();
	}
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/goods/getsearchgoodslist'); ?>",
		data : {
			"page_index" : page_index,
			"page_size" : $("#showNumber").val(),
			"search_text" : search_text,
			"group_id":group_id,
		},
		success : function(data) {
			$data_array = data['data'];
			var html = '';
			if (data['data'].length > 0) {
				$("#DiscountList").show();
				for (var i = 0; i < data['data'].length; i++) {
					var curr = data['data'][i];
					if(jQuery.inArray(curr["goods_id"], $goodsArr) == "-1"){
						$goodsArr.push(curr["goods_id"]);
					}else{
						continue;
					}
					html +='<tr class="widget-list-item" id="select_'+curr["goods_id"]+'">';
					html +='<td class="goods-image-td text-center"><div class="goods-image js-goods-image">';
					if(curr["picture_info"] != null){
						html +='<img src="'+__IMG(curr["picture_info"]['pic_cover_micro'])+'"></div></td>';
					}else{
						html +='<img src="__ROOT__/"></div></td>';
					}
					html +='<td class="goods-meta"><p class="goods-title">';
					html +='<a href="'+__URL('SHOP_MAIN/goods/goodsinfo?goodsid='+curr["goods_id"])+'" target="_blank" class="new-window" title="'+curr["goods_name"]+'">'+curr["goods_name"]+'</a></p>';
					html +='<p class="goods-price">'+curr["price"]+'</p></td>';
					html +='<td class="text-center">'+curr["stock"]+'</td>';
					if($goods_id_selected_array.length > 0){
						if(jQuery.inArray(curr["goods_id"], $goods_id_selected_array) == "-1"){
							html +='<td class="text-center goods-opt"><a href="javascript:;" class="btn btn-primary js-add-reward" onclick="join('+curr["goods_id"]+',this)" >参加活动</a></td></tr>';	
						}else{
							html +='<td class="text-center goods-opt"><a href="javascript:;" class="btn btn-default js-remove-reward" onclick="cancel_join('+curr["goods_id"]+',this)">取消参加</a></td></tr>';
						}
					}else{
						html +='<td class="text-center goods-opt"><a href="javascript:;" class="btn btn-primary js-add-reward" onclick="join('+curr["goods_id"]+',this)">参加活动</a></td></tr>';
					}
				}
			} else {
				html += '<tr align="center"><td colspan="4">暂无符合条件的数据记录</td></tr>';
			}
			$("tbody.goods-list").html(html);
			initPageData(data["page_count"],data['data'].length,data['total_count']);
			$("#pageNumber").html(pagenumShow(jumpNumber,$("#page_count").val(),<?php echo $pageshow; ?>));
		}
	});
}

function loadGoodsGroup(){
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/Goods/getGoodsGroupFristLevel'); ?>",
		success : function(data) {
			var html = '';
			if(data.length > 0){
				for(var i=0; i < data.length; i++){
					html += '<option value="'+data[i]['group_id']+'">'+data[i]['group_name']+'</option>';
				}
			}
			$("#group_id").append(html);
		}
	});
}

//控制商品列表显示数据
function ShopRadio(num){
	if(num == 0){
		$("#some_pro").show();
		$("#turn-ul").show();
		$("ul.ui-nav-tab li.js-tab").eq(1).click();
	}else{
		$("#some_pro").hide();
		$("#turn-ul").hide();
	}
}
</script>
	<dl>
		<dt></dt>
		<dd><button class="btn-common btn-big" onclick="addMansong();">提交</button></dd>
	</dl>
</div>
<script>
$(function(){
	LoadingInfo(1);
});
var flag = false;//防止重复提交

//添加一级优惠
function add_reward(){
	var len = $(".table tbody tr").length;
	if(len >= 5){
		$(".table tfoot").hide();
	}else{
		var cengji =  Number(len)+1;
		var html = '';
		html += '<tr>';
		html += '<td>'+cengji+'</td>';
		html += '<td>满&nbsp;<input type="text" id="price'+cengji+'" class="input-common" style="width:50px;vertical-align:middle;">元&nbsp;</td>';
		html += '<td><div>';
		html += '<p><label><input type="checkbox" name="mansong" class="discount'+cengji+'" onchange="set_rule(\'discount\','+cengji+',this)"><span id="discount'+cengji+'">减现金</span></label></p>';
		html += '<p><label><input type="checkbox" name="mansong" class="free_shipping'+cengji+'"><span id="free_shipping'+cengji+'">免邮</span></label></p>';
		html += '<p><label><input type="checkbox" name="mansong" class="give_point'+cengji+'" onchange="set_rule(\'give_point\','+cengji+',this)"><span id="give_point'+cengji+'">送积分</span></label></p>';
		html += '<p><label><input type="checkbox" name="mansong" class="give_coupon'+cengji+'" onchange="set_rule(\'give_coupon\','+cengji+',this)"><span id="give_coupon'+cengji+'">送优惠券</span></label></p>';
		//html += '<p><label><input type="checkbox" name="mansong" class="gift_id'+cengji+'" onchange="set_rule(\'gift_id\','+cengji+',this)"><span id="gift_id'+cengji+'">送赠品</span></label></p>';
		html += '</div></td>';
		html += '<td><a href="javascript:void(0);" onclick="del_cengji('+cengji+')">删除</a></td>';
		html += '</tr>';
		$(".table tbody").append(html);
		if(cengji == 5){
			$(".table tfoot").hide();
		}
	}
}

function del_cengji(cengji){
	$(".table tbody tr:last").remove();
}

$("input[name='type']").change(function(){
	var c = $(this).val();
	if(c == 2){
		$(".table tfoot").show();
	}else{
		$(".table tbody tr:gt(0)").remove();
		$(".table tfoot").hide();
	}
});

//优惠类型点击
function set_rule(type,num,e){
	if(type == 'discount'){
		discount(num,e);
	}else if(type == 'give_point'){
		give_point(num,e);
	}else if(type == 'give_coupon'){
		give_coupon(num,e);
	}else if(type == 'gift_id'){
		gift_id(num,e);
	}
}

//减现金
function discount(num,e){
	if(e.checked == true){
		var html = "减&nbsp;<input type='text' id='discount_input"+num+"' class='input-common' style='width:50px;vertical-align:middle'/>&nbsp;元";
	}else{
		var html = "减现金";
	}
	$("#discount"+num).html(html);
}

//送积分
function give_point(num,e){
	if(e.checked == true){
		var html = "送&nbsp;<input type='text' id='give_point_input"+num+"' class='input-common' style='width:50px;vertical-align:middle'/>&nbsp;积分";
	}else{
		var html = "送积分";
	}
	$("#give_point"+num).html(html);
}

//送优惠券
function give_coupon(num,e){
	if(e.checked == true){
		$.ajax({
			type : "post",
			url : "<?php echo __URL('ADMIN_MAIN/promotion/coupontypelist'); ?>",
			success : function(data) {
				var html = '送&nbsp;<select id="give_coupon_select'+num+'" class="select-common">';
				for(var i=0;i<data['data'].length;i++){
					html += '<option value="'+data['data'][i]['coupon_type_id']+'">'+data['data'][i]['coupon_name']+'</option>';
				}
				html += "</select>";
				$("#give_coupon"+num).html(html);
			}
		});
	}else{
		var html = "送优惠券";
		$("#give_coupon"+num).html(html);
	}
}

//送赠品
function gift_id(num,e){
	if(e.checked == true){
		$.ajax({
			type : "post",
			url : "<?php echo __URL('ADMIN_MAIN/promotion/giftlist'); ?>",
			success : function(data) {
				var html = '送&nbsp;<select id="gift_id_select'+num+'" class="select-common">';
				for(var i=0;i<data['data'].length;i++){
					html += '<option value="'+data['data'][i]['gift_id']+'">'+data['data'][i]['gift_name']+'</option>';
				}
				html += "</select>";
				$("#gift_id"+num).html(html);
			}
		});
	}else{
		var html = "送赠品";
		$("#gift_id"+num).html(html);
	}
}

//保存
function addMansong(){
	var mansong_name = $("#mansong_name").val();
	var start_time = $("#start_time").val();
	var end_time = $("#end_time").val();
	var type = $("input[type='radio'][name='type']:checked").val();
	var range_type = $("input[type='radio'][name='range_type']:checked").val();
	var rule = '';
	var obj = $(".table tbody tr");
	if(!verify(mansong_name, start_time, end_time)){
		return false;
	}
	for(var i=1;i<=obj.length;i++){
		//满减送价格
		if($("#price"+i).val() > 0){
		var price = $("#price"+i).val();
		}else{
			var price = 0;
			showMessage('error', '请输入优惠门槛金额');
			return false;
		}
		//减现金
		if($("input.discount"+i+"[type='checkbox']").is(':checked') == true){
			var discount = $("#discount_input"+i+"").val();
		}else{
			var discount = 0;
		}
		//免邮
		if($("input.free_shipping"+i+"[type='checkbox']").is(':checked') == true){
			var free_shipping = 1;
		}else{
			var free_shipping = 0;
		}
		//送积分
		if($("input.give_point"+i+"[type='checkbox']").is(':checked') == true){
			var give_point = $("#give_point_input"+i).val();
		}else{
			var give_point = 0;
		}
		//送优惠券
		if($("input.give_coupon"+i+"[type='checkbox']").is(':checked') == true){
			var give_coupon = $("#give_coupon_select"+i).val();
		}else{
			var give_coupon = 0;
		}
		//送赠品
		/* if($("input.gift_id"+i+"[type='checkbox']").is(':checked') == true){
			var gift_id = $("#gift_id_select"+i).val();
		}else{ */
			var gift_id = 0;
		/* } */
		if(discount+free_shipping+give_point+give_coupon+gift_id == 0){
			showMessage('error', '请至少选择一种优惠方式');
			return false;
		}
		rule += ';'+price+','+discount+','+free_shipping+','+give_point+','+give_coupon+','+gift_id;
	}
	rule = rule.substring(1);
	var obj = $(".select-two table tbody tr");
	var goods_id_array = '';
	obj.each(function(i){
		goods_id_array += ','+obj.eq(i).attr("goodsid");
	});
	goods_id_array = goods_id_array.substring(1);
	if(goods_id_array == '' && range_type == 0){
		showMessage('error', '请选择参加活动的商品');
		return false;
	}
	if(flag){
		return;
	}
	flag = true;
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/promotion/addmansong'); ?>",
		data : {
			'mansong_name' : mansong_name,
			'start_time' : start_time,
			'end_time' : end_time,
			'type' : type,
			'range_type' : range_type,
			'rule' : rule,
			'goods_id_array' : goods_id_array
		},
		success : function(data) {
			if (data["code"] > 0) {
				showMessage('success', data["message"],"<?php echo __URL('ADMIN_MAIN/promotion/mansonglist'); ?>");
			}else{
				showMessage('error', data["message"]);
				flag = false;
			}
		}
	});
}

function verify(mansong_name, start_time, end_time){
	if(mansong_name == ''){
		$("#mansong_name").parent().find('.error').show();
		return false;
	}else{
		$(".error").hide();
	}
	if(start_time == '' || end_time == ''){
		$("#start_time").parent().find('.error').show();
		return false;
	}else{
		$(".error").hide();
	}
	return true;
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