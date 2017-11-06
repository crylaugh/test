<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:47:"template/adminblue\Order\orderRefundDetail.html";i:1503280183;s:28:"template/adminblue\base.html";i:1508840920;s:45:"template/adminblue\controlCommonVariable.html";i:1503719297;s:32:"template/adminblue\urlModel.html";i:1504865854;s:47:"template/adminblue\Order\orderRefundAction.html";i:1501666681;s:34:"template/adminblue\pageCommon.html";i:1505550036;s:34:"template/adminblue\openDialog.html";i:1509005619;}*/ ?>
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
		
<link rel="stylesheet" type="text/css" href="__STATIC__/blue/css/order/ns_order_refund_detail.css">

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
			
<div class="mod-table">
<div class="step-region">
	<ul class="ui-step ui-step-4">
		<li class="ui-step-done">
			<div class="ui-step-title">买家申请退款</div>
			<div class="ui-step-number">1</div>
			<div class="ui-step-meta"><?php echo getTimeStampTurnTime($order_goods['refund_time'] ); ?></div>
		</li>
		<li class="<?php if($order_goods["refund_status"] >= 2 || $order_goods["refund_status"] < 0): ?>ui-step-done<?php endif; ?>">
			<div class="ui-step-title">商家退款处理</div>
			<div class="ui-step-number">2</div>
			<div class="ui-step-meta"></div>
		</li>
		<li class="<?php if($order_goods["refund_status"] >= 5 || $order_goods["refund_status"] < 0): ?>ui-step-done<?php endif; ?>">
			<div class="ui-step-title">退款完成</div>
			<div class="ui-step-number">3</div>
			<div class="ui-step-meta"></div>
		</li>
	</ul>
</div>
<div class="step-region clearfix">
	<div class="info-region">
		<div class="info-div">退款信息</div>
		<div>
			<div class="info-goods">
				<div class="ui-centered-image">
					<img src="<?php echo __IMG($order_goods['picture_info']['pic_cover_micro']); ?>">
				</div>
				<div class="info-goods-content">
					<div><?php echo $order_goods['goods_name']; ?> - <?php echo $order_goods['sku_name']; ?></div>
				</div>
			</div>
			<div class="dashed-line"></div>
		</div>
		<table class="info-table">
			<tbody>
				<tr>
					<th>退款方式：</th>
					<td>
						<span class="color-orange"><?php echo !empty($order_goods['refund_type']) && $order_goods['refund_type']==1?'仅退款' : '退款，退货'; ?></span>
					</td>
				</tr>
				<tr>
					<th>申请退款：</th>
					<td><span class="color-orange"><?php echo $order_goods['refund_require_money']; ?></span>元</td>
				</tr>
				<tr>
					<th>实际退款：</th>
					<td><span class="color-orange"><?php echo $order_goods['refund_real_money']; ?></span>元</td>
				</tr>
				<tr>
					<th>退款原因：</th>
					<td><?php echo $order_goods['refund_reason']; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="state-region">
		<div style="padding: 0px 0px 30px 40px;">
			<div class="state-title"><span class="icon info">!</span>订单状态：<?php echo $order_goods['status_name']; ?></div>
			<div class="state-action">
			<?php if(is_array($order_goods['refund_operation']) || $order_goods['refund_operation'] instanceof \think\Collection || $order_goods['refund_operation'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order_goods['refund_operation'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				<button class="zent-btn zent-btn-primary test-send-goods" onclick="refundOperation('<?php echo $v['no']; ?>',<?php echo $order_goods['order_id']; ?>,<?php echo $order_goods['order_goods_id']; ?>,<?php echo $order_goods['refund_require_money']; ?>)"><?php echo $v['name']; ?></button>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="state-remind-region">
			<div class="dashed-line"></div>
			<div class="state-remind"><div class="tixing"><?php echo $title_name; ?>提醒：</div>
				<ul><li>如果无法发货，请及时与买家联系并说明情况后进行退款；</li>
				<li>买家申请退款后，须征得买家同意后再发货，否则买家有权拒收货物；</li>
				<li>买家付款后超过7天仍未发货，将有权申请客服介入发起退款维权；</li></ul>
			</div>
		</div>
	</div>
</div>
<div class="safeguard-log">
	<div class="info-div">协商记录</div>
	<table>
	<?php if(is_array($order_goods["refund_info"]) || $order_goods["refund_info"] instanceof \think\Collection || $order_goods["refund_info"] instanceof \think\Paginator): $i = 0; $__LIST__ = $order_goods["refund_info"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<tbody>
			<tr class="tr-title">
				<td><?php echo !empty($vo['action_way']) && $vo['action_way']==1?'买家' : '卖家'; ?></td>
				<td class="td-time"><?php echo getTimeStampTurnTime($vo['action_time'] ); ?></td>
			</tr>
			<tr><td colspan="2"><?php echo $vo['action']; if($vo['refund_status'] == 3): ?>&nbsp;&nbsp;快递单号&nbsp;:&nbsp;<?php echo $order_goods['refund_shipping_code']; ?>&nbsp;&nbsp;快递公司&nbsp;:&nbsp;<?php echo $order_goods['refund_shipping_company']; ?></td><?php endif; ?></tr>
		</tbody>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
</div>
</div>
<div class="modal fade hide" id="confirmRefund" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 650px; overflow: overlay;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>确认退款</h3>
			</div>
			<div class="modal-body">
				<div class="form-group" style="margin-bottom:10px;">
					<label style="float: left;line-height: 32px;">退款金额：</label>
					<input type="text" id="refund_money_input" class="form-control" placeholder="请填写退款金额">
					<span style="display: none;line-height: 32px;margin-left: 5px;color: red;">请输入退款金额</span>
				</div>
				<div class="form-group" style="width: 100%;float: left;">
					<label style="font-weight: normal;">买家申请退款金额：&nbsp;&nbsp;¥<span id="apply_money">0.00</span></label>
				</div>
				<div class="form-group" style="width: 100%;float: left;">
					<label style="font-weight: normal;">买家实际付款金额：&nbsp;&nbsp;¥<span id="pay_money">0.00</span></label>
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" id="confirm_order_id">
				<input type="hidden" id="confirm_order_goods_id">
				<input type="hidden" id="pay_money">
				<input type="hidden" id="refund_require_money">
				<button class="btn btn-primary" onclick="confirmRefundOk()">确认</button>
				<button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
			</div>
		</div>
	</div>
</div>
<div class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="refuseRefund" style="width:300px;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>拒绝退款</h3>
			</div>
			<div class="modal-body">
				<p>您可以拒绝本次退款或者永久拒绝</p>
			</div>
			<div class="modal-footer">
				<input type="hidden" id="refuse_order_id" />
				<input type="hidden" id="refuse_order_goods_id" />
				<button class="btn" onclick="refuseRefundType(1)">拒绝本次</button>
				<button class="btn" onclick="refuseRefundType(2)">永久拒绝</button>
			</div>
		</div>
	</div>
</div>
<div class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="agreeRefund" style="width:300px;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>同意退款</h3>
			</div>
			<div class="modal-body">
				<p>确定要同意退款吗？</p>
			</div>
			<div class="modal-footer">
				<input type="hidden" id="agreee_order_id" />
				<input type="hidden" id="agree_order_goods_id" />
				<button class="btn" onclick="agreeRefund()">同意</button>
				<button class="btn" onclick="agreeRefundCancle()">取消</button>
			</div>
		</div>
	</div>
</div>
<div class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="confirm_receipt" style="width:400px;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>确认收货</h3>
			</div>
			<div class="modal-body">
				<div style="height: 35px;line-height: 35px;">
					物流公司：<span id="logistics_company"></span>
				</div>
				<div style="height: 35px;line-height: 35px;">
					物流单号：<span id="logistics_number"></span>
				</div>
				<div style="height: 35px;line-height: 35px;">
					是否入库：
					<label for="no" style="display: inline-block;font-weight: normal;" >否</label>
					<input type="radio" name="isStorage" id="no" style="margin-top: -2px;" checked>
					<label for="yes" style="display: inline-block;font-weight: normal;margin-left: 15px;">是</label><input type="radio" name="isStorage" id="yes" style="margin-top: -2px;margin-left: 5px;">
				</div>
				<div id="storage_num" style="display: none;">
					入库件数：<input type="number">
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" id="hide_order_id" />
				<input type="hidden" id="hide_order_goods_id" />
				<input type="hidden" id="hide_receipt_goods_id" />
				<input type="hidden" id="hide_receipt_sku_id">
				<button class="btn" onclick="confirm_receipt()">同意</button>
				<button class="btn" onclick="cancel_receipt()">取消</button>
			</div>
		</div>
	</div>
</div>
<script>
//refund_require_money 退款金额
function refundOperation(operation_type, order_id, order_goods_id,refund_require_money){
	if(operation_type == 'agree'){
		//同意退款
		showAgreeRefund(order_id, order_goods_id);
	}else if(operation_type == 'refuse'){
		//拒绝退款
		refuseRefund(order_id,order_goods_id);
	}else if(operation_type == 'confirm_receipt'){
		//确认收货
		orderGoodsConfirmRecieve(order_id,order_goods_id);
	}else if(operation_type == 'confirm_refund'){
		//确认退款
		confirmRefund(order_id,order_goods_id,refund_require_money);
	}
}

function showAgreeRefund(order_id, order_goods_id){
	$("#agreee_order_id").val(order_id);
	$("#agree_order_goods_id").val(order_goods_id);
	var left = ($(window).width()+$('#agreeRefund').outerWidth())/2;
	var top = ($(window).height()-$('#agreeRefund').outerHeight())/2;
	$("#agreeRefund").css({"left": left, "top" : top});
	$("#agreeRefund").modal("show");
}

function agreeRefundCancle(){
	$("#agreeRefund").modal("hide");
}

// 同意退款
function agreeRefund(){
	var order_id = $("#agreee_order_id").val();
	var order_goods_id = $("#agree_order_goods_id").val();
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/order/ordergoodsrefundagree'); ?>",
		data : {'order_id':order_id,"order_goods_id":order_goods_id},
		success : function(data) {
			if (data['code'] > 0) {
				showMessage('success', data["message"],window.location.reload());
			} else {
				showMessage('error', data["code"]);
			}
		}
	});
}

// 拒绝退款展示
function refuseRefund(order_id,order_goods_id){
	$("#refuse_order_id").val(order_id);
	$("#refuse_order_goods_id").val(order_goods_id);
	var left = ($(window).width()+$('#refuseRefund').outerWidth())/2;
	var top = ($(window).height()-$('#refuseRefund').outerHeight())/2;
	$("#refuseRefund").css({"left": left, "top" : top});
	$("#refuseRefund").modal('show');
}

// 拒绝退款操作
function refuseRefundType(type){
	var order_id = $("#refuse_order_id").val();
	var order_goods_id = $("#refuse_order_goods_id").val();
	if(type == 1){
		refund_url = "<?php echo __URL('ADMIN_MAIN/order/ordergoodsrefuseonce'); ?>";
	} else{
		refund_url = "<?php echo __URL('ADMIN_MAIN/order/ordergoodsrefuseforever'); ?>";
	}
	$.ajax({
		type : "post",
		url : refund_url,
		data : {'order_id':order_id,"order_goods_id":order_goods_id},
		success : function(data) {
			if (data['code'] > 0) {
				showMessage('success', "已拒绝",window.location.reload());
			} else {
				showMessage('error', data["message"]);
			}
		}
	});
}
//确认收货
var isStorage = 0; //是否入库
$("#yes").click(function(){
	isStorage = 1;
	$("#storage_num").show();
})
$("#no").click(function(){
	isStorage = 0;
	$("#storage_num").hide();
})
var goodsNum = 0;
function orderGoodsConfirmRecieve(order_id,order_goods_id){
	$("#confirm_receipt").modal("show");
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/order/getOrderGoodsDetialAjax'); ?>",
		data : {"order_goods_id":order_goods_id},
		success : function(data) {
			$("#logistics_company").text(data['refund_shipping_company']);
			$("#logistics_number").text(data['refund_shipping_code']);
			goodsNum = data['num'];
			$("#storage_num input").val(data['num']);
			$("#hide_receipt_goods_id").val(data['goods_id']);
			$("#hide_receipt_sku_id").val(data['sku_id']);
		}
	});
	$("#hide_order_id").val(order_id);
	$("#hide_order_goods_id").val(order_goods_id);
}
$("#storage_num input").change(function(){
	if($(this).val()<0){
		$(this).val(1);
	}else if($(this).val()>goodsNum){
		$(this).val(goodsNum);
	}
})
function confirm_receipt(){
	var order_id = $("#hide_order_id").val();
	var order_goods_id = $("#hide_order_goods_id").val();
	var storage_num = $("#storage_num input").val();
	var goods_id = $("#hide_receipt_goods_id").val();
	var sku_id = $("#hide_receipt_sku_id").val();
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/order/ordergoodsconfirmrecieve'); ?>",
		data : {
			'order_id':order_id,
			"order_goods_id":order_goods_id,
			"storage_num" : storage_num,
			"isStorage" : isStorage,
			"goods_id" : goods_id,
			"sku_id" : sku_id
		},
		success : function(data) {
			if (data['code'] > 0) {
				showMessage('success', data["message"],window.location.reload());
			} else {
				showMessage('error', data["message"]);
			}
		}
	});
}
function cancel_receipt(){
	$("#confirm_receipt").modal("hide");
	$("#hide_order_id").val('');
	$("#hide_order_goods_id").val('');
	$("#hide_receipt_sku_id").val('');
	$("#hide_receipt_goods_id").val('');
}
//确认收货end
/**
 * 确认退款界面显示
 * refund_require_money 退款金额
 */
function confirmRefund(order_id,order_goods_id,refund_require_money){
	$("#confirm_order_id").val(order_id);
	$("#confirm_order_goods_id").val(order_goods_id);
	$("#apply_money").text(parseFloat(refund_require_money).toFixed(2));
	$("#refund_money_input").next().css("display","none");
	orderGoodsRefundMoney(order_goods_id);
	$("#confirmRefund").modal('show');
}

function hideModal(){
	$("#confirmRefund").modal('hide');
}

//验证用户输入的退款金额是否合法
function validation(){
	var refund_money = $("#refund_money_input").val();
	var pay_money = $("#pay_money").attr("data-pay-money");
	if(refund_money == ""){
		$("#refund_money_input").next().css("display","inline-block").text("请输入退款金额");
		$("#refund_money_input").focus();
		return false;
	}else{
		$("#refund_money_input").next().css("display","none");
	}
	
	if(isNaN(refund_money)){
		$("#refund_money_input").next().css("display","inline-block").text("请输入数字");
		$("#refund_money_input").focus();
		return false;
	}
	
	if(parseFloat(refund_money) < 0 || parseFloat(refund_money)>parseFloat(pay_money)){
		$("#refund_money_input").next().css("display","inline-block").text("退款金额必须大于等于0元小于"+parseFloat(pay_money).toFixed(2)+"元");
		$("#refund_money_input").focus();
		return false;
	}
	return true;
}

//确认退款执行
function confirmRefundOk(){
	var order_id = $("#confirm_order_id").val();
	var order_goods_id = $("#confirm_order_goods_id").val();
	var refund_money = $("#refund_money_input").val();
	if(validation()){
		$.ajax({
			type : "post",
			url : "<?php echo __URL('ADMIN_MAIN/order/ordergoodsconfirmrefund'); ?>",
			data : {'order_id':order_id,"order_goods_id":order_goods_id, "refund_real_money":refund_money},
			success : function(data) {
				if (data['code'] > 0) {
					showMessage('success', "已退款",window.location.reload());
				} else {
					showMessage('error', data["message"]);
				}
			}
		});
	}
}

//查询买家实际支付金额
function orderGoodsRefundMoney(order_goods_id){
	$.ajax({
		url : "<?php echo __URL('ADMIN_MAIN/order/ordergoodsrefundmoney'); ?>",
		type : "post",
		data : { "order_goods_id" : order_goods_id},
		success : function(data){
			$("#pay_money").text(parseFloat(data).toFixed(2));
			$("#pay_money").attr("data-pay-money",data);
		}
	})
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