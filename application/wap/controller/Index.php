<?php
/**
 * Index.php
 * Niushop商城系统 - 团队十年电商经验汇集巨献!
 * =========================================================
 * Copy right 2015-2025 山西牛酷信息科技有限公司, 保留所有权利。
 * ----------------------------------------------
 * 官方网址: http://www.niushop.com.cn
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用。
 * 任何企业和个人不允许对程序代码以任何形式任何目的再发布。
 * =========================================================
 * @author : niuteam
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace app\wap\controller;

use data\service\Config;
use data\service\Goods;
use data\service\GoodsBrand as GoodsBrand;
use data\service\GoodsCategory;
use data\service\Member;
use data\service\User;
use data\service\Member as MemberService;
use data\service\Platform;
use data\service\promotion\PromoteRewardRule;
use data\service\WebSite;
use think\Cookie;
use data\service\Article;
use data\service\Member\MemberAccount as MemberAccount;
use data\service\Futou;
use data\service\Constant;

class Index extends BaseController
{

    /**
     * 商品楼层板块每层显示商品个数
     *
     * @var unknown
     */
    public $category_good_num = 4;

    /**
     * 商品标签板块每层显示商品个数
     *
     * @var unknown
     */
    public $recommend_goods_num = 4;

      /**
     * 定时任务
     */
    public function timedTask()
    {   
        $member = new MemberService();
        $memberAccount = new MemberAccount();
        $memberList = $member->getList();
        $constant = new Constant();
        $constant1 = $constant->getAConstant(5);
        //循环所有激活会员
        $futou = new Futou();
        foreach ($memberList as $key) {
            //判断是否有复投等级 若没有停止奖励
            $present_ji = $futou->getInfoById($key['uid']);
            if ($present_ji[present_ji]) {
                $this->teamFen($key['uid']);
            }
            
        }
        
        

        // $conditions['nmar.shop_id'] = 0;
        // $conditions['nmar.uid'] = $this->uid;
        // $conditions['nmar.account_type'] = 1;
        // $conditions['nmar.from_type'] = 26;
        // $member_point_list = $member->getAccountList(1, 0, $conditions);
        // foreach ($member_point_list[data] as $key) {
        //    $point_sum += $key[number];
        // }
    }
    /**
     * 团队返利
     */
    public function teamFen($uid){
        $member = new MemberService();
        $memberAccount = new MemberAccount();
        $constant = new Constant();
        $constant1 = $constant->getAConstant(5);
        $constant2 = $constant->getAConstant(6);
        $constant3 = $constant->getAConstant(7);
        $mem_level = $member -> getMemberById($uid);
        $son = $member->getSon($uid);
        //获取激活会员的第一级子会员
        foreach ($son as $k1) {
            $info1=$memberAccount->getInfoById($k1[uid]);
            if ($info1) {
                $fenhong1 += $info1[rifenhong];
            } 
        }
        $sonTwo = $member->getSonTwo($uid);
        foreach ($sonTwo as $k2) {
            $info2=$memberAccount->getInfoById($k2[uid]);
            if ($info2) {
                $fenhong2 += $info2[rifenhong];
            }
            
        }
        $sonThree = $member->getSonThree($uid);
        foreach ($sonThree as $k3) {
            $info3=$memberAccount->getInfoById($k3[uid]);
            if ($info3) {
                $fenhong3 += $info3[rifenhong];
            }
            
        }
        $teamjifen = ($fenhong1*$constant1[val] + $fenhong2*$constant2[val] + $fenhong3*$constant3[val])/100;

        $res = $this->dayFen($uid);
        if ($teamjifen) {
            if ($teamjifen > $mem_level[goods_discount]-$res) {
                $teamjifen = $mem_level[goods_discount]-$res;
            }
            $member->updateAccountData(0, 1, $uid, $teamjifen, 27, '团队返利');
        }
        
    }
    /**
     * 日返利
     */
    public function dayFen($uid){
        $member = new MemberService();
        $futou = new Futou();
        $constant = new Constant();
        $rifenhong = 0;
        $memberAccount = new MemberAccount();
        $constant4 = $constant->getAConstant(4);
        $constant8 = $constant->getAConstant(8);
        $constant1 = $constant->getAConstant(1);
        $futou_level = $futou->getInfoById($uid);
        if ($futou_level[present_ji]) {
            $rifenhong = $futou_level[present_ji]*$constant8[val];
            $member->updateAccountData(0, 1, $uid, $rifenhong, 26, '日返利');
            $memberAccount ->updateRiFen($uid,$rifenhong);
            
            $accout26['nmar.shop_id'] = 0;
            $accout26['nmar.uid'] = $uid;
            $accout26['nmar.account_type'] = 1;
            $accout26['nmar.from_type'] = 26;
            $accout26_list = $member->getAccountList(1, 0, $accout26);
            foreach ($accout26_list[data] as $key) {
               $accout26_sum += $key[number];
            }
            if (floor($accout26_sum/$constant4['val']) > $futou_level['reduce_ji']) {
                $futou->fuTouShengJi($uid,0);
            }
            
        }
        
        if ($constant1[val]) {
            $time = date('d',time());
            if ($time==1) {
                $member->updateAccountData(0, 1, $uid, -$constant1[val], 28, '平台维护费');
            }
        }
        
        return $rifenhong;
    }
	
	 /**
     * 完善
     */
     public function wanShan()
    {   
        $user = new User();
        $uid = $user->getSessionUid();
        $member = new MemberService();
        $member_info = $member->getMemberDetail();
        if (request()->isAjax()) {
            $real_name = request()->post('real_name', '');
            $sex = request()->post('sex', '');
            $location = request()->post('location', '');

            $user_tel = request()->post('user_tel', '');
            $par_tel = request()->post('par_tel', '');

            if (!$user_tel=='' && !$par_tel=='') {
                if ($user_tel==$par_tel) {
                    return AjaxReturn(0,'推荐人不能是本人'); 
                }

                $rr=$user->getbyUsertel($user_tel);
                if ($rr) {
                    return AjaxReturn(0,'手机号已存在'); 
                }

                $ra=$member->getAUser($par_tel);
                if (!$ra) {
                    return AjaxReturn(0,'请输入正确的推荐人'); 
                }
                $par_tel = $ra['uid'];
                $arr= array('user_name'=>$user_tel,'user_tel'=>$user_tel,'par_tel'=>$par_tel,'real_name' => $real_name,'sex' => $sex,'location' => $location);
            }else{
                $arr= array('real_name' => $real_name,'sex' => $sex,'location' => $location);
            }
            
            
            
            
            $res=$user->xiugaiInfo($uid,$arr);
            return AjaxReturn($res);   

        }else{
            
            return 1;
        }  
    }
    public function wanShanTest(){
        $member = new MemberService();
        $member_info = $member->getMemberDetail();
        if (!$member_info['user_info']['user_tel']) {
            $res = $this->wanShan();
            return $res;
        }
    }



    /**
     * 手机端首页
     *
     * @return Ambigous <\think\response\View, \think\response\$this, \think\response\View>
     */
    public function index()
    {   
        // 分享
        // $ticket = $this->getShareTicket();
        // $this->assign("signPackage", $ticket);
        // 首页轮播图

        //定时任务
        // $res = $this->timedTask();
        // print_r($res);
        //强制完善信息
		// if($this->uid){
		// 	$res1=$this->wanShanTest();
		// 	if($res1){
		// 		return view($this->style . 'Index/wanshan');
		// 	}
		// }
		
        $platform = new Platform();
        $plat_adv_list = $platform->getPlatformAdvPositionDetail(1105);
        $this->assign('plat_adv_list', $plat_adv_list);
        // 首页新品推荐下方广告位
        $index_adv_one = $platform->getPlatformAdvPositionDetail(1188);
        $this->assign('index_adv_one', $index_adv_one);
        // 首页品牌推荐下方广告位
        $index_adv_two = $platform->getPlatformAdvPositionDetail(1189);
        $this->assign('index_adv_two', $index_adv_two);
        
        //首页导航
        $good_category = new GoodsCategory();
        $categorys = $good_category->getcategorys();
        $this->assign('categorys', $categorys);


        //商城快报
        //最新
        $article = new Article();
        $article_list = $article->getArticleList(1, 0, [
            'nca.class_id' => 1
        ], 'nca.public_time desc');
        $this->assign('article_list', $article_list);
        //最热
        $hot_article = $article->getArticleList(1, 0, [
            'nca.class_id' => 1
        ], 'nca.sort desc');
        $this->assign('hot_article', $hot_article);
        //折扣广告位
        $discounts_adv = $platform->getPlatformAdvPositionDetail(1166);
        $this->assign('discounts_adv', $discounts_adv);
        // 促销模块
        // $cx_condition = [
        // 'class_type' => 2,
        // 'is_use' => 1,
        // 'show_type' => 1
        // ];
        // $class_list = $platform->getPlatformGoodsRecommendClass($cx_condition);
        // $this->assign("class_list", $class_list);
        
        // 首页楼层版块
        // $good_category = new GoodsCategory();
        // $shop_id = $this->instance_id;
        // $block_list = $good_category->getGoodsCategoryBlockList($shop_id);
        // $good_category = new GoodsCategory();
        $shop_id = $this->instance_id;
        $block_list = $good_category->getGoodsCategoryBlockQuery($shop_id, $this->category_good_num);
        $this->assign('block_list', $block_list);
        
        // 首页新品推荐列表
        $goods_platform = new Platform();
        $shop_id = $this->instance_id;
        $goods_platform_list = $goods_platform->getRecommendGoodsList($shop_id, $this->recommend_goods_num);
        $this->assign('goods_platform_list', $goods_platform_list);
        
        // 品牌列表
        $goods_brand = new GoodsBrand();
        $list = $goods_brand->getGoodsBrandList(1, 6, '', 'sort');
        $this->assign('list', $list['data']);
        
        // 限时折扣列表
        $goods = new Goods();
        $condition['status'] = 1;
        $condition['ng.state'] = 1;
        $discount_list = $goods->getDiscountGoodsList(1, 0, $condition, 'end_time');
        
        foreach ($discount_list['data'] as $k => $v) {
            $v['discount'] = str_replace('.00', '', $v['discount']);
            $info = $goods->getGoodsInfo($v[goods_id]);
            $v['jifen'] = $info[jifen];
            // $v['promotion_price'] = str_replace('.00', '', $v['promotion_price']);
            // $v['price'] = str_replace('.00', '', $v['price']);
        }
        
        $this->assign('discount_list', $discount_list['data']);
        // 获取当前时间
        $current_time = $this->getCurrentTime();
        $this->assign('ms_time', $current_time);
        
        // 首页商城热卖
        $val['is_hot'] = 1;
        $goods_hot_list = $goods_platform->getPlatformGoodsList(1, 0, $val);
        
        $this->assign('goods_hot_list', $goods_hot_list['data']);
        // $hot_selling_adv = $platform->getPlatformAdvPositionDetail(1164);
        // $this->assign('hot_selling_adv', $hot_selling_adv);
        
        // 首页商城推荐
        $val1['is_recommend'] = 1;
        $goods_recommend_list = $goods_platform->getPlatformGoodsList(1, 0, $val1);
        
        $this->assign('goods_recommend_list', $goods_recommend_list['data']);
        
        // 公众号配置查询
        $config = new Config();
        $wchat_config = $config->getInstanceWchatConfig($this->instance_id);
        
        $is_subscribe = 0; // 标识：是否显示顶部关注 0：[隐藏]，1：[显示]
                           // 检查是否配置过微信公众号
        if (! empty($wchat_config['value'])) {
            if (! empty($wchat_config['value']['appid']) && ! empty($wchat_config['value']['appsecret'])) {
                // 如何判断是否关注
                if (isWeixin()) {
                    if (! empty($this->uid)) {
                        // 检查当前用户是否关注
                        $user_sub = $this->user->checkUserIsSubscribeInstance($this->uid, $this->instance_id);
                        if ($user_sub == 0) {
                            // 未关注
                            $is_subscribe = 1;
                        }
                    }
                }
            }
        }
        
        $this->assign("is_subscribe", $is_subscribe);
        // 公众号二维码获取
        $this->web_site = new WebSite();
        $web_info = $this->web_site->getWebSiteInfo();
        $this->assign('web_info', $web_info);
        $member = new MemberService();
        $source_user_name = "";
        $source_img_url = "";
        $source_uid = request()->get('source_uid', '');
        if (! empty($source_uid)) {
            $_SESSION['source_uid'] = $source_uid;
            $user_info = $member->getUserInfoByUid($_SESSION['source_uid']);
            if (! empty($user_info)) {
                $source_user_name = $user_info["nick_name"];
                if (! empty($user_info["user_headimg"])) {
                    $source_img_url = $user_info["user_headimg"];
                }
            }
        }
        // 首页公告
        $notice_arr = $config->getNotice(0);
        $this->assign('notice', $notice_arr);
        $this->assign('source_user_name', $source_user_name);
        $this->assign('source_img_url', $source_img_url);
        
        // 首页优惠券
        $member = new Member();
        $coupon_list = $member->getMemberCouponTypeList($this->instance_id, $this->uid);
        $this->assign('coupon_list', $coupon_list);
        // 判断是否开启了自定义模块
        if (hook_is_exist("customtemplate")) {
            // 获取自定义模板信息
            return view($this->style . 'Index/customTemplateIndex');
        } else {
            
            return view($this->style . 'Index/index');
        }
    }

    /**
     * 得到当前时间戳的毫秒数
     *
     * @return number
     */
    public function getCurrentTime()
    {
        $time = time();
        $time = $time * 1000;
        return $time;
    }

    /**
     * 自定义模板界面
     * 创建时间：2017年8月14日 16:54:36
     *
     * @return \think\response\View
     */
    public function customTemplateControl()
    {
        $id = request()->get("id", "");
        $config = new Config();
        $custom_template_info = [];
        $this->assign("custom_template", $custom_template_info);
        return view($this->style . 'Index/customTemplateControl');
    }

    /**
     * 限时折扣
     */
    public function discount()
    {
        $platform = new Platform();
        // 限时折扣广告位
        $discounts_adv = $platform->getPlatformAdvPositionDetail(1163);
        $this->assign('discounts_adv', $discounts_adv);
        if (request()->isAjax()) {
            $goods = new Goods();
            $category_id = request()->get('category_id', '0');
            $condition['ng.state'] = 1;
            $condition['status'] = 1;
            if (! empty($category_id)) {
                $condition['category_id_1'] = $category_id;
            }
            $discount_list = $goods->getDiscountGoodsList(1, 0, $condition);
            foreach ($discount_list['data'] as $k => $v) {
                $v['discount'] = str_replace('.00', '', $v['discount']);
                $v['promotion_price'] = str_replace('.00', '', $v['promotion_price']);
                $v['price'] = str_replace('.00', '', $v['price']);
            }
            return $discount_list['data'];
        } else {
            $goods_category = new GoodsCategory();
            $goods_category_list_1 = $goods_category->getGoodsCategoryList(1, 0, [
                "is_visible" => 1,
                "level" => 1
            ]);
            
            $this->assign('goods_category_list_1', $goods_category_list_1['data']);
            
            return view($this->style . 'Index/discount');
        }
    }
    
    // 分享送积分
    public function shareGivePoint()
    {
        if (request()->isAjax()) {
            $rewardRule = new PromoteRewardRule();
            $url = request()->post('share_url', '');
            $url_arr = parse_url($url);
            if (stristr($url_arr['path'], 'goods/goodsdetail')) {
                
                $url_query_arr = explode('&', $url_arr['query']);
                $params = array();
                foreach ($url_query_arr as $param) {
                    $item = explode('=', $param);
                    $params[$item[0]] = $item[1];
                }
                if (! empty($params['id'])) {
                    hook('pointShareGoods', [
                        'goods_id' => $params['id']
                    ]);
                }
            }
            $res = $rewardRule->memberShareSendPoint($this->instance_id, $this->uid);
            return AjaxReturn($res);
        }
    }

    /**
     * 设置页面打开cookie
     */
    public function setClientCookie()
    {
        $client = request()->post('client', '');
        Cookie::set("default_client", $client);
        $cookie = request()->cookie('default_client', '');
        if ($cookie != "") {
            return AjaxReturn(1);
        }
    }

    /**
     * 首页领用优惠券
     */
    public function getCoupon()
    {
        $coupon_type_id = request()->post('coupon_type_id', 0);
        if (! empty($this->uid)) {
            $member = new Member();
            $retval = $member->memberGetCoupon($this->uid, $coupon_type_id, 2);
            return AjaxReturn($retval);
        } else {
            return AjaxReturn(NO_LOGIN);
        }
    }

    /**
     * 查看首页商城热卖更多
     */
    public function getGoodsHotList()
    {
        if (request()->isAjax()) {
            $goods_platform = new Platform();
            $condition['is_hot'] = 1;
            $goods_hot_list = $goods_platform->getPlatformGoodsList(1, 0, $condition);
            return $goods_hot_list;
        }
        $this->style = "wap/aozhou/";
        $style = "wap/aozhou/";
        $this->assign('style', $style);
        return view($this->style . 'Index/hot');
    }

    /**
     * 查看首页商城推荐更多
     */
    public function getGoodsRecommendList()
    {
        if (request()->isAjax()) {
            $goods_platform = new Platform();
            $condition['is_recommend'] = 1;
            $goods_recommend_list = $goods_platform->getPlatformGoodsList(1, 0, $condition);
            return $goods_recommend_list;
        }
        $this->style = "wap/aozhou/";
        $style = "wap/aozhou/";
        $this->assign('style', $style);
        return view($this->style . 'Index/recommend');
    }
}