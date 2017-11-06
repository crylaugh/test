<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:41:"template/adminblue\Cms\updateArticle.html";i:1503280183;s:28:"template/adminblue\base.html";i:1505297354;s:45:"template/adminblue\controlCommonVariable.html";i:1503719297;s:32:"template/adminblue\urlModel.html";i:1504865854;s:34:"template/adminblue\pageCommon.html";i:1505550036;s:34:"template/adminblue\openDialog.html";i:1500263975;}*/ ?>
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
<script type="text/javascript" charset="utf-8" src="ADMIN_JS/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" 	src="ADMIN_JS/ueditor/ueditor.all.common.js"></script>
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/defau.css">
<style type="text/css">
.article_head{margin:10px;}
.article_head label{float:left;margin-right:20px;width:120px;font-weight:normal;line-height: 32px;color:#333;font-size:13px; text-align: right;}
.article_head>div{overflow: hidden;}
.article_head>div .content_ue{width:100%;}
.textarea{width:70%;height:100px;max-width:70%;max-height:100px;}
.at_img{width:97%;height:135px;}
.at_btn{color: #FFF;background-color: #01B044;border-color: #01B044;font: normal 12px/20px "microsoft yahei";text-decoration: NONE; height: 35px; padding: 8px 10px;border: solid 1px;cursor: pointer;}
.class-logo{background-color: #F8F8F8;}
dd{margin-left: 0px;}
dl{margin:0px;}
input[type="radio"], input[type="checkbox"] { margin: 0 0 0;}
.required{color:red;margin-right:10px;}
.ar_top{background:#F8F8F8; margin-top: 10px;padding: 10px;border: 1px solid #e9e9e9;}
.ar_bottom>div,.ar_top>div{clear: both;overflow: hidden;}
.article_head h3{margin: 0 0 10px 0;line-height: 30px;font-size: 14px;font-weight: bold;color: #333;padding-left: 10px;}
.ar_center{background:#F8F8F8; margin-top: 10px;padding: 10px;border: 1px solid #e9e9e9;}
.ar_bottom{background:#F8F8F8; margin-top: 10px;padding: 10px;border: 1px solid #e9e9e9;margin-bottom:10px;}
.ke-inline-block{display: none;vertical-align: middle;zoom: 0;}
#image_file {width: 400px;}
input[type="file"]{border: none;}
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
		<img src="__STATIC__/blue/img/top_logo.png"/>
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
				<img src="__STATIC__/blue/img/logo.png"/>
				<span>提供技术支持服务电话：400-886-7993</span>
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
			
<div class="article_head">
	<input type="hidden" value="<?php echo $article_id; ?>" id="article_id"/>
	<div class="ar_top">
		<h3>常规信息</h3>
		<div>
			<label><span class="required">*</span>文章标题</label>
			<input id="title" type="text" value="<?php echo $ArticleDetail['title']; ?>" class="input-common" name="title" style="width:70%;"/>
			<span class="error">请输入文章标题</span>
		</div>
	
		<div>
			<label>文章短标题</label>
			<input id="short_title" type="text" value="<?php echo $ArticleDetail['short_title']; ?>" class="input-common" style="width:50%;"/>
		</div>
	
		<div>
			<label >文章标签</label>
			<input id="tag" type="text" class="input-common" value="<?php echo $ArticleDetail['tag']; ?>" style="width:50%;"/>
		</div>
		
		<div>
			<label>文章标题图片</label>
			<div style="float:left;">
				<dl>
					<dd>
						<div class="class-logo">
							<p>
								<?php if($ArticleDetail['image'] != ''): ?>
								<img id="imgLogo" src="<?php echo __IMG($ArticleDetail['image']); ?>">
								<?php else: ?>
								<img id="imgLogo" />
								<?php endif; ?>
							</p>
						</div>
						<div class="upload-btn">
							<span>
								<input class="input-file" name="file_upload" id="uploadImg" type="file" onchange="imgUpload(this);">
							</span>
							<p><i class="fa fa-cloud-upload"></i>上传图片</p>
							<input type="hidden" id="Logo" />
						</div>
						<p class="hint">
							<span style="color:orange;">建议使用宽200像素-高60像素内的GIF或PNG透明图片；点击下方"提交"按钮后生效。</span>
						</p>
					</dd>
				</dl>
			</div>
		</div>
		
		<div>
			<label>文章作者</label>
			<input id="author" type="text" value="<?php echo $ArticleDetail['author']; ?>" class="input-common" name="author"/>
		</div>
	
		<div>
			<label>文章来源</label>
			<input id="source" type="text" value="<?php echo $ArticleDetail['source']; ?>" class="input-common" />
		</div>
	
		<div>
			<label>文章来源链接</label>
			<input id="url" type="text" value="<?php echo $ArticleDetail['url']; ?>" class="input-common" />
		</div>
		
		<div>
			<label><span class="required">*</span>所属分类</label>
			<select id="class_id" class="select-common">
				<option value="0">请选择</option>
					<?php if(is_array($articleClassList['data']) || $articleClassList['data'] instanceof \think\Collection || $articleClassList['data'] instanceof \think\Paginator): $i = 0; $__LIST__ = $articleClassList['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['pid'] == 0): ?>
						<option value="<?php echo $vo['class_id']; ?>"><?php echo $vo['name']; ?></option>
							<?php if(is_array($articleClassList['data']) || $articleClassList['data'] instanceof \think\Collection || $articleClassList['data'] instanceof \think\Paginator): $i = 0; $__LIST__ = $articleClassList['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;if($v1['pid'] == $vo['class_id']): ?>
									<option value="<?php echo $v1['class_id']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $v1['name']; ?></option>
								<?php endif; endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
			</select>
			<span class="error">请选择分类</span>
		</div>
		
		<div>
			<label>文章关键字</label>
			<input id="keyword" type="text" value="<?php echo $ArticleDetail['keyword']; ?>" class="input-common" />
		</div>
	
		<div>
			<label>文章摘要</label>
			<textarea id="summary" cols="10" rows="20" class="textarea input-common"><?php echo $ArticleDetail['summary']; ?></textarea>
		</div>
	</div>
	<div class="ar_center">
		<h3>文章内容</h3>
		<div style="overflow: hidden;margin: 10px 0;">
			<label>文章内容</label>
<!-- 			<textarea class="input-common" id="content" name="g_body" style="width: 70%; height: 400px; visibility: hidden; display: none;"><?php echo $ArticleDetail['content']; ?></textarea> -->
				<div style="float: left;">
					<script id="editor" type="text/plain" style="height: 400px;width:750px;"><?php echo $ArticleDetail['content']; ?></script>
				</div>
		</div>
		<div style="overflow: hidden;margin-top:10px;">
			<label>文章附件</label>
			<div style="float:left;">
				<dl>
					<dd>
						<?php if($attachment_path != ''): ?>
						<div class="class-logo">
							<a href="<?php echo __IMG($attachment_path); ?>"><p id="p_file_upload_input">文章附件</p></a>
						</div>
						<?php else: ?>
						<div class="class-logo">
								<a id="filepath"><p id="p_file_upload_input"></p></a>
						</div>
						<?php endif; ?>
						<div class="upload-btn">
							<span>
								<input class="input-file" id="file_upload_input" name="file_upload" type="file">
								<input type="hidden" id="hidden_file_upload_input" value="<?php echo $attachment_path; ?>" />
							</span>
							<p><i class="fa fa-cloud-upload"></i>附件上传</p>
						</div>
					</dd>
				</dl>
			</div>
		</div>
		
		<div>
			<label>相关文章</label>
			<input id="article_id_array" class="input-common" type="text" value="<?php echo $ArticleDetail['article_id_array']; ?>"/>
		</div>
	</div>
	
	<div class="ar_bottom">
		<h3>文章阐述</h3>
		<div>
			<label>推荐</label>
			<div style="margin-top:5px;float:left;">
				<?php if($ArticleDetail['commend_flag'] == 1): ?>
				<input type="checkbox" id="commend_flag" checked="checked" class="input-common" />
				<?php else: ?>
				<input type="checkbox" id="commend_flag" class="input-common" />
				<?php endif; ?>
			</div>
		</div>
		
		<div>
			<label>允许评论</label> 
			<div style="margin-top:5px;float:left;">
				<?php if($ArticleDetail['comment_flag'] == 1): ?>
				<input type="checkbox" class="input-common" id="comment_flag" checked="checked"/>
				<?php else: ?>
				<input type="checkbox" class="input-common" id="comment_flag" />
				<?php endif; ?>
			</div>
		</div>
		
		<div>
			<label>文章排序</label>
			<input id="sort" class="input-common" value="<?php echo $ArticleDetail['sort']; ?>" type="number" min="0" onkeyup="value=value.replace(/[^\d+(\.\d+)?]/g,'')"/>
		</div>
		
		<div>
			<label>文章点击量</label>
			<input id="click" class="input-common" value="<?php echo $ArticleDetail['click']; ?>" type="number" min="0" onkeyup="value=value.replace(/[^\d+(\.\d+)?]/g,'')"/>
		</div>

		<div>
			<label>文章评论数</label>
			<input id="comment_count" class="input-common" value="<?php echo $ArticleDetail['comment_count']; ?>" type="number" min="0" onkeyup="value=value.replace(/[^\d+(\.\d+)?]/g,'')"/>
		</div>
		
		<div>
			<label>文章分享数</label>
			<input id="share_count" class="input-common" value="<?php echo $ArticleDetail['share_count']; ?>" type="number" min="0" onkeyup="value=value.replace(/[^\d+(\.\d+)?]/g,'')"/>
		</div>
	</div>
	
	<div style="margin:auto;width:30%;">
		<button class="btn-common" onclick="save(1)" style="float:left;margin-right:15px;">修改文章</button>
		<button class="btn-common" onclick="save(2)" style="float:left;">修改并预览</button>
	</div>
</div>

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
var platform_shopname= 'Niushop开源商城';
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

<script src="ADMIN_JS/ajax_file_upload.js" type="text/javascript"></script>
<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
<script src="__STATIC__/kindeditor/kindeditor-min.js" charset="utf-8"></script>
<script src="__STATIC__/kindeditor/lang/zh_cn.js" charset="utf-8"></script>
<script>
var ue = UE.getEditor('editor',{
	toolbars : [
		[ 'source', // 源代码
		'bold', // 加粗
		'italic', // 斜体
		'underline', // 下划线
		'strikethrough', // 删除线
		'forecolor', // 字体颜色
		'backcolor', // 背景色
		'fontfamily', // 字体
		'fontsize', // 字号
		'paragraph', // 段落格式
		'justifyleft', // 居左对齐
		'justifycenter', // 居中对齐
		'justifyright', // 居右对齐
		'superscript', // 上标
		'blockquote', // 引用
		'selectall', // 全选
		'preview', // 预览
		'removeformat', // 清除格式
		'inserttable', // 插入表格
		'unlink', // 取消链接
		'insertrow', // 前插入行
		'insertcol', // 前插入列
		'mergeright', // 右合并单元格
		'mergedown', // 下合并单元格
		'deleterow', // 删除行
		'deletecol', // 删除列
		'splittorows', // 拆分成行
		'splittocols', // 拆分成列
		'splittocells', // 完全拆分单元格
		'deletecaption', // 删除表格标题
		'inserttitle', // 插入标题
		'mergecells', // 合并多个单元格
		'deletetable', // 删除表格
		'cleardoc', // 清空文档
		 'simpleupload', // 单图上传
		'insertimage', // 多图上传
		'link', // 超链接
		'emotion', // 表情
		'insertorderedlist', // 有序列表
		'insertunorderedlist', // 无序列表
		'fullscreen', // 全屏
		'directionalityltr', // 从左向右输入
		'directionalityrtl', // 从右向左输入
		'imagenone', // 默认
		'imageleft', // 左浮动
		'imageright', // 右浮动
		// 'attachment', // 附件
		'imagecenter', // 居中
		'lineheight', // 行间距
		'customstyle', // 自定义标题
		]]
});
$(function(){
	UE.getEditor('editor').addListener( 'ready', function() {
		if($("#content").val()){
			UE.getEditor('editor').setContent($("#content").val());
		}
	} );
})

$("#class_id").val(<?php echo $ArticleDetail['class_id']; ?>);

$("#file_upload_input").live("change",function(){
	var data = { 'file_path' : UPLOADCOMMON };
	uploadFile("file_upload_input",data,function(res){
		if(res.code){
			$("#p_file_upload_input").text("文章附件");
			$("#filepath").attr("href",__IMG(res.data));
			$("#hidden_file_upload_input").val(res.data);
			showTip(res.message,"success");
		}
	});
});
function validation(){
	var title=$("#title");//文章标题
	var class_id=$("#class_id");//所属分类
	if(title.val() == ""){
		title.next().css("display","inline-block");
		title.focus();
		return false;
	}else{
		$('.error').hide();
	}
	if(class_id.val() == 0){
		class_id.next().css("display","inline-block");
		class_id.focus();
		return false;
	}else{
		$('.error').hide();
	}
	return true;
}

var flag = false;//防止重复提交
function save(type){
	if(!validation()){
		return;
	}
	var comment_flag=$('#comment_flag').is(':checked')?'1':'0';
	var commend_flag=$('#commend_flag').is(':checked')?'1':'0';
	var article_id=$("#article_id").val();
	var title=$("#title").val();
	var class_id=$("#class_id").val();
	var short_title=$("#short_title").val();
	var source=$("#source").val();
	var url=$("#url").val();
	var author=$("#author").val();
	var summary=$("#summary").val();
	var content = UE.getEditor('editor').getContent();
	//var image=$("#imgLogo").attr("data-id");
	var image=$("#Logo").val();
	var keyword=$("#keyword").val();
	var article_id_array=$("#article_id_array").val();
	var click=$("#click").val();
	var sort=$("#sort").val();
	var tag=$("#tag").val();
	var comment_count=$("#comment_count").val();
	var share_count=$("#share_count").val();
	var attachment_path = $("#hidden_file_upload_input").val();
	if(flag){
		return;
	}
	flag = true;
	$.ajax({
		type:"post",
		url:"<?php echo __URL('ADMIN_MAIN/cms/ajax_updatearticle'); ?>",
	 	data:{
			'article_id':article_id,
			'title':title,
			'class_id':class_id,
			'short_title':short_title,
			'source':source,
			'url':url,
			'author':author,
			'summary':summary,
			'content':content,
			'image':image,
			'keyword':keyword,
			'article_id_array':article_id_array,
			'click':click,
			'sort':sort,
			'commend_flag':commend_flag,
			'comment_flag':comment_flag,
			'attachment_path':attachment_path,
			'tag':tag,
			'comment_count':comment_count,
			'share_count':share_count
		},
		success:function(data){
			if (data["code"] > 0) {
				showMessage('success', data["message"]);
				if(type==2 && article_id>0){
					window.open(__URL("SHOP_MAIN/cms/articleclassinfo?article_id="+article_id));
				}else if(type==1){
					location.href=__URL("ADMIN_MAIN/cms/articlelist");	
				}
			}else{
				showMessage('error', data["message"]);
				flag = false;
			}
		}
	});
}

//图片上传
function imgUpload(event) {
	var fileid = $(event).attr("id");
	var data = { 'file_path' : UPLOADCMS };
	uploadFile(fileid,data,function(res){
		if(res.code){
			$("#imgLogo").attr("src",__IMG(res.data));
			$("#Logo").val(res.data);
			showTip(res.message,"success");
		}else{
			showTip(res.message,"error");
		}
	});
}

//上传附件
function FileUpload(event) {
	var fileid = "file_upload_input";
	if($('#'+fileid).val()==''){
		$("#dialog").dialog({
			buttons: {
				"确定,#e57373": function() {
					$(this).dialog('close');
				}
			},
			contentText:"请选择附件"
		});
	}else{
		$.ajaxFileUpload({
			url : "<?php echo __URL('ADMIN_MAIN/system/file_upload'); ?>", //用于文件上传的服务器端请求地址
			secureuri : false, //一般设置为false
			fileElementId : fileid, //文件上传空间的id属性  <input type="file" id="file" name="file" />
			dataType : 'text', //返回值类型 一般设置为json
			contentType : "text/json;charset=utf-8",
			success : function(data){
				if (data) {
					$( "#dialog" ).dialog({
						buttons: {
							"确定,#01B044": function() {
								$(this).dialog('close');
							}
						},
						contentText:"附件上传成功",
						time:1,
					});
					$('.files').append('<p><span>'+data+'</span><a href="javascript:;" onclick="delete_file(\''+data+'\',this)">删除</a></p>');
				}else{
					$( "#dialog" ).dialog({
						buttons: {
							"确定,#e57373": function() {
								$(this).dialog('close');
							}
						},
						contentText:"附件上传失败"
					});
				}
			}
		});
	}
}

/**
 * 删除文件
 * @param {Object} file_url
 * @param {Object} even
 */
function delete_file(file_url,even){
	$.ajax({
		type:"post",
		url:"<?php echo __URL('ADMIN_MAIN/system/delete_file'); ?>",
		data:{'file_url':file_url},
		dataType:'json',
		success:function(data){
			if (data['code']>0) {
					$( "#dialog" ).dialog({
						buttons: {
							"确定,#01B044": function() {
								$(this).dialog('close');
							}
						},
						contentText:"附件移除成功",
						time:1,
					});
					$(even).parent().empty();
			}else{
				$( "#dialog" ).dialog({
					buttons: {
						"确定,#e57373": function() {
							$(this).dialog('close');
						}
					},
					contentText:data['message'],
				});
			}
		}
	});
} 
</script>

</body>
</html>