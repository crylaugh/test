<?php
/**
 * Member.php
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

use data\service\NfxPromoter;
use data\service\NfxShopConfig;
use data\service\NfxUser as NfxUserService;
use data\service\Member\MemberAccount as MemberAccount;
use data\service\Member as MemberService;
use data\service\Platform;
use data\service\Shop;
use data\service\WebSite;
use data\service\Weixin;
use data\service\User;
use data\service\Futou;
use data\service\Constant;
use think\Request;
use data\service\promotion\PromoteRewardRule;
use think;
use think\Session;
use data\service\Promotion;
use data\service\UnifyPay;
use data\service\Config;
use data\service\Order as OrderService;
/**
 * 会员
 *
 * @author Administrator
 *        
 */
class Member extends BaseController
{
    public $notice;
    public $login_verify_code;
    
    public function __construct()
    {
        parent::__construct();
        $this->checkLogin();
        // 是否开启验证码
        $web_config = new Config();
        $this->login_verify_code = $web_config->getLoginVerifyCodeConfig($this->instance_id);
        $this->assign("login_verify_code", $this->login_verify_code["value"]);
        // 是否开启通知
        $instance_id = 0;
        $web_config = new Config();
        $noticeMobile = $web_config->getNoticeMobileConfig($instance_id);
        $noticeEmail = $web_config->getNoticeEmailConfig($instance_id);
        $this->notice['noticeEmail'] = $noticeEmail[0]['is_use'];
        $this->notice['noticeMobile'] = $noticeMobile[0]['is_use'];
        $this->assign("notice", $this->notice);
    }

  

    /**
     * 检测用户
     */
    private function checkLogin()
    {
        $uid = $this->uid;
        if (empty($uid)) {
            $redirect = __URL(__URL__."/wap/login");
            $this->redirect($redirect); // 用户未登录
        }
        $is_member = $this->user->getSessionUserIsMember();
        if (empty($is_member)) {
             $redirect = __URL(__URL__."/wap/login");
            $this->redirect($redirect); // 用户未登录
        }
    }

    /**
     * 获取交易记录
     */
    public function getAccountArr(){
        $uid = $this->uid;
        $member = new MemberService();
        $arr['uid'] = $uid;
        $list = $member->getAccountList(1, 0, $arr, $order = '', $field = '*');
        $this->assign("list", $this->list);
    }

    /**
     * 用户首页
     *
     * @return Ambigous <\think\response\View, \think\response\$this, \think\response\View>
     */
    public function index()
    {
        switch (NS_VERSION) {
            case NS_VER_B2C:
                $retval = $this->memberIndex(); // 单店B2C版
                break;
            case NS_VER_B2C_FX:
                $retval = $this->memberIndexFx(); // 单店B2C分销版
                break;
        }
        return $retval;
    }

    /*
     * 单店B2C版
     */
    public function memberIndex()
    {
        $member = new MemberService();
        $platform = new Platform();
        // 基本信息行级显示菜单项
        $member_menu_arr = array(
            'personal' => array(
                lang('member_personal_data'),
                'member/personaldata'
            ),
            'address' => array(
                lang('member_delivery_address'),
                'Member/memberAddress?flag=1'
            ),
            'qr_code' => array(
                lang('extend_qrcode'),
                'member/getWchatQrcode'
            ),
            "shop_code" => array(
                lang('shop_qrcode'),
                'member/getShopQrcode'
            ),
            "memberCoupon" => array(
                lang('member_coupons'),
                'member/memberCoupon'
            )
        );

        $member_info = $member->getMemberDetail($this->instance_id);
        // 头像
        if (! empty($member_info['user_info']['user_headimg'])) {
            $member_img = $member_info['user_info']['user_headimg'];
        } else {
            $member_img = '0';
        }
        $index_adv = $platform->getPlatformAdvPositionDetail(1152);
        // 平台广告位
        $menu_arr = array(
            $member_menu_arr
        );
        foreach ($menu_arr as $arr_key => $arr_item) {
            if (empty($arr_item)) {
                unset($menu_arr[$arr_key]);
                continue;
            }
            foreach ($arr_item as $key => $item) {
                $class_item = array(
                    'class' => $key,
                    'title' => $item[0],
                    'url' => $item[1]
                );
                $menu_arr[$arr_key][$key] = $class_item;
            }
        }

        //今日封顶剩余量
        $account = new MemberAccount();
        $reee = $account -> getAllToday($this->uid);
        print_r($reee);

        // 判断是否开启了签到送积分
        $config = new Config();
        $integralconfig = $config->getIntegralConfig($this->instance_id);
        $this->assign('integralconfig', $integralconfig);
        // dump($integralconfig);
        // 判断用户是否签到
        $dataMember = new MemberService();
        $isSign = $dataMember->getIsMemberSign($this->uid, $this->instance_id);
        $this->assign("isSign", $isSign);
        //待支付订单数量
        $order = new OrderService(); 
        $unpaidOrder = $order->getOrderNumByOrderStatu(['order_status'=>0,"buyer_id"=>$this->uid]);
        $this->assign("unpaidOrder",$unpaidOrder);
        //待发货订单数量
        $shipmentPendingOrder = $order->getOrderNumByOrderStatu(['order_status'=>1,"buyer_id"=>$this->uid]);
        $this->assign("shipmentPendingOrder",$shipmentPendingOrder);
        //待收货订单数量
        $goodsNotReceivedOrder = $order->getOrderNumByOrderStatu(['order_status'=>2,"buyer_id"=>$this->uid]);
        $this->assign("goodsNotReceivedOrder",$goodsNotReceivedOrder);
        //退款订单
        $condition['order_status'] = array(
            'in',
            [
                - 1,
                - 2,
            ]
        );
        $condition['buyer_id'] = $this->uid;
        $refundOrder = $order->getOrderNumByOrderStatu($condition);

        if ($member_info['user_info']['par_tel']) {
            $tui = $member->getUserInfoByUid($member_info['user_info']['par_tel']);
        }else{
            $tui['real_name']='无';
        }

        $son = $member->getSon($this->uid);
        // $son =count($son);
        // $sonTwo = $member->getSonTwo($this->uid);
        // $sonTwo =count($sonTwo);
        // $sonThree = $member->getSonThree($this->uid);
        // $sonThree =count($sonThree);
        // $sum = $son + $sonTwo + $sonThree;
        // print_r($son);

        //测试
        
         //$resss = $member->UpdateAgent('150967230992541000');
         //print_r($resss);

        //常量展示
        $constant = new Constant();
        $constant10 = $constant->getAConstant(10);
        $this->assign("constant10",$constant10);
        //会员等级
        $ns_member = $member -> getMemberLevel();
        $this->assign("ns_member",$ns_member);
        $member_level_id = $member -> getMemberInfo();
        //判断是否可以升星
        $res = $member->updateUserLevel(0,$this->uid);
        
        if ($res[0]["level_id"] > $member_level_id['member_level']) {
            $updateUserLevel = $res[0]["level_id"];
        }else{
            $updateUserLevel = '';
        }
        $this->assign("updateUserLevel",$updateUserLevel);
        //复投等级
        $futou = new Futou();
        $futou_level = $futou->getInfoById($this->uid);
        $this->assign("futou_level",$futou_level);
        //推荐奖
        $conditions['nmar.shop_id'] = 0;
        $conditions['nmar.uid'] = $this->uid;
        $conditions['nmar.account_type'] = 1;
        $conditions['nmar.from_type'] = 24;
        $member_point_list = $member->getAccountList(1, 0, $conditions);
        foreach ($member_point_list[data] as $key) {
           $point_sum += $key[number];
        }

        //团队返利
        $team['nmar.shop_id'] = 0;
        $team['nmar.uid'] = $this->uid;
        $team['nmar.account_type'] = 1;
        $team['nmar.from_type'] = 27;
        $teamfen = $member->getAccountList(1, 0, $team);
        foreach ($teamfen[data] as $key) {
           $team_sum += $key[number];
        }

        //日返利
        $rifen['nmar.shop_id'] = 0;
        $rifen['nmar.uid'] = $this->uid;
        $rifen['nmar.account_type'] = 1;
        $rifen['nmar.from_type'] = 26;
        $accout26_list = $member->getAccountList(1, 0, $rifen);
        foreach ($accout26_list[data] as $key) {
           $accout26_sum += $key[number];
        }
        //积分总数
        $Account_info = $member->getMemberDetail($shop_id); 
        $this->assign("Account_info",$Account_info);   

        $this->assign("point_sum",$point_sum);
        $this->assign("team_sum",$team_sum);
        $this->assign("accout26_sum",$accout26_sum);
        $this->assign("tui",$tui);
        $this->assign("refundOrder",$refundOrder);
        $this->assign('member_info', $member_info);
        $this->assign('index_adv', $index_adv["adv_list"][0]);
        $this->assign('member_img', $member_img);
        $this->assign('menu_arr', $menu_arr);
        
        return view($this->style . '/Member/memberIndexB2C');
    }

    /**
     * 单店B2C分销版
     *
     * @return Ambigous <\think\response\View, \think\response\$this, \think\response\View>
     */
    public function memberIndexFx()
    {
        $member = new MemberService();
        $nfx_promoter = new NfxPromoter();
        $nfx_shop_config = new NfxShopConfig();
        $platform = new Platform();
        // 基本信息行级显示菜单项
        $member_menu_arr = array(
            'personal' => array(
                '个人资料',
                'member/personaldata'
            ),
            'address' => array(
                '收货地址',
                'Member/memberAddress?flag=1'
            ),
            'withdrawals' => array(
                '提现账号',
                'member/accountList?flag=1'
            ),
            'qr_code' => array(
                '推广二维码',
                'member/getWchatQrcode'
            ),
            "shop_code" => array(
                '店铺二维码',
                'member/getShopQrcode'
            ),
            "memberCoupon" => array(
                '优惠券',
                'member/memberCoupon'
            )
        );
        
        // 推广信息
        $apply_promoter_menu = null;
        $promoter_center = ""; // 推广中心
        
        $member_info = $member->getMemberDetail($this->instance_id);
        // 头像
        if (! empty($member_info['user_info']['user_headimg'])) {
            $member_img = $member_info['user_info']['user_headimg'];
        } else {
            $member_img = '0';
        }
        
        $promoter_info = $nfx_promoter->getUserPromoter($this->uid, $this->instance_id);
        // 平台/店铺 会员中心
        $shop_config = $nfx_shop_config->getShopConfigDetail($this->instance_id);
        // 店铺详情类型
        $promoter_detail = null;
        if (empty($promoter_info)) {
            $apply_promoter_menu = array(
                'class' => 'extension',
                'title' => '申请推广员',
                'url' => 'distribution/applyPromoter'
            );
            $promoter_center = 'distribution/applyPromoter';
        } else {
            if ((empty($promoter_info['is_audit']) || $promoter_info['is_audit'] == - 1) && $shop_config['is_distribution_enable'] == 1) {
                $apply_promoter_menu = array(
                    'class' => 'extension',
                    'title' => '申请推广员',
                    'url' => 'distribution/applyPromoter'
                );
                $promoter_center = 'distribution/applyPromoter';
            } elseif ($promoter_info['is_audit'] == 1) { // 通过显示推广中心
                $promoter_detail = $nfx_promoter->getPromoterDetail($promoter_info['promoter_id']);
                $promoter_center = 'distribution/distributionCenter';
            }
        }
        
        $count = 0;
        $commission_cash = 0;
        if (! empty($promoter_detail)) {
            $count = $promoter_detail['team_count']; // 我的团队人数
            $commission_cash = $promoter_detail['commission']['commission_cash']; // 可提现佣金
        }
        $commission_cash = number_format($commission_cash, 2); // 保留两位数
        $menu_arr = array(
            $member_menu_arr
        );
        
        foreach ($menu_arr as $arr_key => $arr_item) {
            if (empty($arr_item)) {
                unset($menu_arr[$arr_key]);
                continue;
            }
            foreach ($arr_item as $key => $item) {
                $class_item = array(
                    'class' => $key,
                    'title' => $item[0],
                    'url' => $item[1]
                );
                $menu_arr[$arr_key][$key] = $class_item;
            }
        }
        
        // 判断用户是否签到
        $dataMember = new MemberService();
        $isSign = $dataMember->getIsMemberSign($this->uid, $this->instance_id);
        $this->assign("isSign", $isSign);
        
        $index_adv = $platform->getPlatformAdvPositionDetail(1152); // 广告位
        $this->assign('counts', $count); // 我的团队
        $this->assign('commission_cash', $commission_cash); // 我的佣金
        $this->assign('promoter_center', $promoter_center); // 推广中心地址
        
        $this->assign('member_img', $member_img); // 会员头像
        $this->assign('member_info', $member_info); // 会员信息
        $this->assign('index_adv', $index_adv["adv_list"][0]); // 广告位
        $this->assign('promoter_info', $promoter_detail); // 推广员信息（包括我的团队人数、）
        $this->assign('menu_arr', $menu_arr); // 菜单项
        $this->assign('apply_promoter_menu', $apply_promoter_menu); // 推广中心菜单项
        
        return view($this->style . 'Member/memberIndexB2CFX');
    }


    /**
     * 复投升级
     */
    public function fuTouShengJi()
    {   
        $futou = new Futou();
        $futou_level = $futou->getInfoById($this->uid);
        //获取常量 复投积分 3
        $constant = new Constant();
        $account = new MemberAccount();
        $constant3 = $constant->getAConstant(3);
        $constant9 = $constant->getAConstant(9);
        if ($futou_level[present_ji]>=10) {
            return AjaxReturn(0,'最高复投十级');
        }
        $member = new MemberService();
        $mem_info = $member -> getUserInfo();
        $menber_info = $member->getMemberDetail(0);
        if ($menber_info['point'] < $constant3['val']) {
            return AjaxReturn(0,'消费积分不足'+$constant3['val']);
        }
        $futoures=$futou->fuTouShengJi($this->uid);
        if ($futoures) {
            $member->updateAccountData(0, 1, $this->uid, -$constant3['val'], 25, '复投');
            if ($mem_info['par_tel']) {
                $reee = $account -> getAllToday($mem_info['par_tel']);
                if ($reee) {
                    if ($constant9['val'] > $reee) {
                        $constant9['val'] = $reee;
                    }
                    $member->updateAccountData(0, 1, $mem_info['par_tel'], $constant9['val'], 29, '子复投奖励');
                }
            }
            return AjaxReturn(1);
        }
        return AjaxReturn(0,'操作失败');
    }
    /**
     * 升星
     */
    public function shengxing()
    {   
        $id = request()->post('id','');
        $member = new MemberService();
        //获取常量 升星扣除开户积分 10
        $constant = new Constant();
        $constant10 = $constant->getAConstant(10);

        $menber_info = $member->getMemberDetail(0);
        if ($menber_info['balance'] < $constant10['val']) {
            return AjaxReturn(0,'开户积分不足');
        }
        if ($member -> shengxing($id)) {
            $member->updateAccountData(0, 2, $this->uid, -$constant10['val'], 30, '升星扣除');
            return AjaxReturn(1);
        }


        return AjaxReturn(0,'操作失败');
    }

    /**
     * 会员地址管理
     *
     * @return Ambigous <\think\response\View, \think\response\$this, \think\response\View>
     */
    public function memberAddress()
    {
        $member = new MemberService();
        $addresslist = $member->getMemberExpressAddressList();
        $this->assign("list", $addresslist);
        $flag = request()->get('flag','');
        $url = request()->get('url','');
        $pre_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        // dump($pre_url);
        $_SESSION['address_pre_url'] = $pre_url;
        $this->assign("pre_url", $pre_url);
        $this->assign("flag", $flag);
        $this->assign("url", $url);
        return view($this->style . "/Member/memberAddress");
    }

    /**
     * 添加地址
     *
     * @return Ambigous <multitype:unknown, multitype:unknown unknown string >
     */
    public function addMemberAddress()
    {
        if (request()->isAjax()) {
            $member = new MemberService();
            $consigner = request()->post('consigner','');
            $mobile = request()->post('mobile','');
            $phone = request()->post('phone','');
            $province = request()->post('province','');
            $city = request()->post('city','');
            $district = request()->post('district','');
            $address = request()->post('address','');
            $zip_code = request()->post('zip_code','');
            $alias = request()->post('alias','');
            $retval = $member->addMemberExpressAddress($consigner, $mobile, $phone, $province, $city, $district, $address, $zip_code, $alias);
            return AjaxReturn($retval);
        } else {
            $address_id = request()->get('addressid',0);
            $this->assign("address_id", $address_id);
            if (! empty($_SESSION['address_pre_url'])) {
                $pre_url = $_SESSION['address_pre_url'];
            } else {
                $pre_url = '';
            }
            $this->assign("pre_url", $pre_url);
            $flag = request()->get('flag','');
            $this->assign("flag", $flag);
            return view($this->style . "/Member/addMemberAddress");
        }
    }

    /**
     * 修改会员地址
     *
     * @return Ambigous <multitype:unknown, multitype:unknown unknown string >|Ambigous <\think\response\View, \think\response\$this, \think\response\View>
     */
    public function updateMemberAddress()
    {
        $member = new MemberService();
        if (request()->isAjax()) {
            $id = request()->post('id','');
            $consigner = request()->post('consigner','');
            $mobile = request()->post('mobile','');
            $phone = request()->post('phone','');
            $province = request()->post('province','');
            $city = request()->post('city','');
            $district = request()->post('district','');
            $address = request()->post('address','');
            $zip_code = request()->post('zip_code','');
            $alias = request()->post('alias','');
            $retval = $member->updateMemberExpressAddress($id, $consigner, $mobile, $phone, $province, $city, $district, $address, $zip_code, $alias);
            return AjaxReturn($retval);
        } else {
            $id = request()->get('id','');
            if(!is_numeric($id)){
                $this->error('未获取到信息');
            }
            $flag = request()->get('flag','');
            $info = $member->getMemberExpressAddressDetail($id);
            if(empty($info)){
                $this->error("没有获取到地址信息");
            }
            $this->assign("address_info", $info);
            $this->assign("flag", $flag);
            $pre_url = $_SERVER['HTTP_REFERER'];
            $_SESSION['address_pre_url'] = $pre_url;
            $this->assign("pre_url", $pre_url);
            return view($this->style . "/Member/updateMemberAddress");
        }
    }

    /**
     * 获取用户地址详情
     *
     * @return Ambigous <\think\static, multitype:, \think\db\false, PDOStatement, string, \think\Model, \PDOStatement, \think\db\mixed, multitype:a r y s t i n g Q u e \ C l o , \think\db\Query, NULL>
     */
    public function getMemberAddressDetail()
    {
        $address_id = request()->post('id',0);
        $member = new MemberService();
        $info = $member->getMemberExpressAddressDetail($address_id);
        return $info;
    }

    /**
     * 会员地址删除
     *
     * @return Ambigous <multitype:unknown, multitype:unknown unknown string >
     */
    public function memberAddressDelete()
    {
        if(request()->isAjax()){
            $id = request()->post('id','');
            $member = new MemberService();
            $res = $member->memberAddressDelete($id);
            return AjaxReturn($res); 
        }

    }

    /**
     * 修改会员地址
     *
     * @return Ambigous <multitype:unknown, multitype:unknown unknown string >
     */
    public function updateAddressDefault()
    {
        $id = request()->post('id','');
        $member = new MemberService();
        $res = $member->updateAddressDefault($id);
        return AjaxReturn($res);
    }

    /**
     * 店铺积分列表和平台积分
     */
    public function integral()
    {
        $market_isset = false;
        $shop_isset = false;
        $market_list = '';
        $shop_list = '';
        // 获取店铺的积分列表
        $integral_list = $this->user->getShopAccountListByUser($this->uid, 1, 0);
        // 获取店铺的信息
        if (! empty($integral_list["data"])) {
            foreach ($integral_list["data"] as $shop_list) {
                if ($shop_list["shop_id"] == 0) {
                    // 此时为商场
                    $market_isset = true;
                    $market = new WebSite();
                    $market_list = $market->getWebSiteInfo();
                } else {
                    $shop_isset = true;
                    $shop = new Shop();
                    $shop_list['extra'] = $shop->getShopInfo($shop_list['shop_id']);
                }
            }
        }
        $this->assign([
            'market_isset' => $market_isset,
            'shop_isset' => $shop_isset,
            'integral' => $integral_list,
            'market_list' => $market_list
        ]);
        return view($this->style . '/Member/integral');
    }

    /**
     * 店铺积分流水  创业积分
     */
    public function integralWater()
    {
        $shop_id = $this->instance_id;
        $condition['nmar.shop_id'] = $shop_id;
        $condition['nmar.uid'] = $this->uid;
        $condition['nmar.account_type'] = 1;
        // 查看用户在该商铺下的积分消费流水
        $member_point_list = $this->user->getAccountList(1, 0, $condition);
        // 查看积分总数
        $member = new MemberService();
        $menber_info = $member->getMemberDetail($shop_id);
        // 查找店铺积分说明
        $pointConfig = new Promotion();
        $pointconfiginfo = $pointConfig->getPointConfig();
        $this->assign([
            "sum" => $menber_info['point'],
            "member_point_list" => $member_point_list,
            "pointconfiginfo" => $pointconfiginfo
        ]);
        return view($this->style . '/Member/integralWater');
    }
    /**
     * 消费积分
     */
    // public function kaihujifen()
    // {   
    //     $shop_id = $this->instance_id;
    //     $condition['nmar.shop_id'] = $shop_id;
    //     $condition['nmar.uid'] = $this->uid;
    //     $condition['nmar.account_type'] = 1;
    //     // 查看用户在该商铺下的积分消费流水
    //     $member_point_list = $this->user->getAccountList(1, 0, $condition);
    //     // 查看积分总数
    //     $member = new MemberService();
    //     $menber_info = $member->getMemberDetail($shop_id);
    //     // 查找店铺积分说明
    //     $pointConfig = new Promotion();
    //     $pointconfiginfo = $pointConfig->getPointConfig();
    //     $this->assign([
    //         "sum" => $menber_info['point'],
    //         "member_point_list" => $member_point_list,
    //         "pointconfiginfo" => $pointconfiginfo
    //     ]);
    //     return view($this->style . "/Member/kaihujifen");
    // }


    /**
     * 会员余额
     */
    public function balance()
    {
        $market_isset = false;
        $shop_isset = false;
        $market_list = '';
        $shop_list = '';
        // 获取店铺的积分列表
        $balance_list = $this->user->getShopAccountListByUser($this->uid, 1, 0);
        // 获取店铺的信息
        foreach ($balance_list["data"] as $shop_list) {
            if ($shop_list["shop_id"] == 0) {
                // 此时为商场
                $market_isset = true;
                $market = new WebSite();
                $market_list = $market->getWebSiteInfo();
            } else {
                $shop_isset = true;
                $shop = new Shop();
                $shop_list['extra'] = $shop->getShopInfo($shop_list['shop_id']);
            }
        }
        $this->assign([
            'market_isset' => $market_isset,
            'shop_isset' => $shop_isset,
            'balance' => $balance_list,
            'market_list' => $market_list
        ]);
        return view($this->style . '/Member/balance');
    }

    /**
     * 会员余额流水
     */
    public function balanceWater()
    {
        // $start_time = isset($_POST['start_time']) ? $_POST['start_time'] : '2016-01-01';
        // $end_time = isset($_POST['end_time']) ? $_POST['end_time'] : '2099-01-01';
        // $page_index = isset($_GET['page']) ? $_GET['page'] : '1';
        // $page_count = '';
        // 该店铺下的余额流水
        $member = new MemberService();
        $uid = $this->uid;
        $shopid = $this->instance_id;
        $condition['nmar.uid'] = $uid;
        $condition['nmar.shop_id'] = $shopid;
        $condition['nmar.account_type'] = 2;
        $list = $member->getAccountList(1, 0, $condition);
        // 用户在该店铺的账户余额总数
        $member = new MemberService();
        $member_info = $member->getMemberDetail($this->instance_id);
        $config = new Config();
        $balanceConfig = $config->getBalanceWithdrawConfig($shopid);
        $info = $member->getUserInfo();
        $this->assign("info", $info);
        $this->assign("is_use", $balanceConfig['is_use']);
        $this->assign("sum", $member_info['balance']);
        $this->assign("balances", $list);
        $this->assign("shopid", $shopid);
        return view($this->style . '/Member/balanceWater');
    }
    /**
     * 余额提现记录
     */
    public function balanceWithdraw(){
        // 该店铺下的余额提现记录
        $member = new MemberService();
        $uid = $this->uid;
        $shopid = $this->instance_id;
        $condition['uid'] = $uid;
        $condition['shop_id'] = $shopid;
        /* $condition['status'] = 1; */
        $withdraw_list = $member->getMemberBalanceWithdraw(1, 0, $condition);
        foreach ($withdraw_list['data'] as $k=>$v){
            if($v['status'] == 1){
                $withdraw_list['data'][$k]['status'] = '已同意';
            }else if($v['status'] == 0){
                $withdraw_list['data'][$k]['status'] = '已申请';
            }else{
                $withdraw_list['data'][$k]['status'] = '已拒绝';
            }
        }
        // 用户在该店铺的账户余额总数
        $member = new MemberService();
        $member_info = $member->getMemberDetail($this->instance_id);
        $config = new Config();
        $balanceConfig = $config->getBalanceWithdrawConfig($shopid);
        $this->assign("is_use", $balanceConfig['is_use']);
        $this->assign("sum", $member_info['balance']);
        $this->assign("withdraws", $withdraw_list);
        $this->assign("shopid", $shopid);
        return view($this->style . '/Member/balanceWithdraw');
    }
    
    /**
     * mymy 余额互转 消费积分
     */
    public function kaihu_zhuan(){
        $member = new MemberService();
        $arr=$member->getAccount();
        $uid = $this->uid;
        $condition['nmar.shop_id'] = $this->instance_id;
        $condition['nmar.uid'] = $this->uid;
        $condition['nmar.account_type'] = 2;
        $condition['nmar.from_type'] = array('in','21,22');
        $list = $this->user->getAccountList(1, 0, $condition);
        $this->assign("list", $list);
        if (request()->isAjax()) {
            $type = request()->post('type','');
            $num = request()->post('num','');
            $username_zc = request()->post('username_zc','');
            $yzpassword = request()->post('yzpassword','');
            $text = '消费积分互转';
            $res=$member->getAUser($username_zc);
            $zhuan_id = $res[uid];
            $erji = $member->getUserInfoByUid($uid)['erji_psw'];
            $handle_obj[0] = $member->getUserInfoByUid($uid)['user_tel'];
            $handle_obj[1] = $res['user_tel'];
            if (md5($yzpassword)!=$erji) {
                $res='二级密码不正确';
                return AjaxReturn(0,$res);
            }
            if (!$res) {
                $r='转出账户不存在';
                return AjaxReturn(0,$r);
            }
            $retval = $member->kaihu_zhuan(0, $type, $uid, $num, $text,$zhuan_id,$handle_obj);
            return AjaxReturn($retval);
        }
        $this->assign("arr", $arr);
        return view($this->style . "/Member/kaihu_zhuan");
    }

    /**
     * mymy创业积分互转
     */
    public function chuangye_zhuan(){
        $member = new MemberService();
        $arr=$member->getAccount();
        $uid = $this->uid;
        $condition['nmar.shop_id'] = $this->instance_id;
        $condition['nmar.uid'] = $this->uid;
        $condition['nmar.account_type'] = 1;
        $condition['nmar.from_type'] = array('in','21,22');
        $list = $this->user->getAccountList(1, 0, $condition);
        $this->assign("list", $list);
        if (request()->isAjax()) {
            $type = request()->post('type','');
            $num = request()->post('num','');
            $username_zc = request()->post('username_zc','');
            $yzpassword = request()->post('yzpassword','');
            $text = '创业积分互转';
            $res=$member->getAUser($username_zc);
            $zhuan_id = $res[uid];
            $erji = $member->getUserInfoByUid($uid)['erji_psw'];
            $handle_obj[0] = $member->getUserInfoByUid($uid)['user_tel'];
            $handle_obj[1] = $res['user_tel'];
            if (md5($yzpassword)!=$erji) {
                $res='二级密码不正确';
                return AjaxReturn(0,$res);
            }
            if (!$res) {
                $r='转出账户不存在';
                return AjaxReturn(0,$r);
            }
            $retval = $member->kaihu_zhuan(0, $type, $uid, $num, $text,$zhuan_id,$handle_obj);
            return AjaxReturn($retval);
        }
        $this->assign("arr", $arr);
        return view($this->style . "/Member/chuangye_zhuan");
    }
    /**
     * mymy 钱包
     */
    public function member_wallet(){
        $member = new MemberService();
        $conditions['nmar.shop_id'] = 0;
        $conditions['nmar.uid'] = $this->uid;
        $conditions['nmar.account_type'] = 1;
        $conditions['nmar.from_type'] = array('in','24,26,27,29');
        $member_point_list = $member->getAccountList(1, 0, $conditions);
        foreach ($member_point_list[data] as $key) {
           $point_sum += $key[number];
        }
        $son = $member->getSon($this->uid);
        $son =count($son);
        $sonTwo = $member->getSonTwo($this->uid);
        $sonTwo =count($sonTwo);
        $sonThree = $member->getSonThree($this->uid);
        $sonThree =count($sonThree);
        $this->assign("son", $son);
        $this->assign("sonTwo", $sonTwo);
        $this->assign("sonThree", $sonThree);
        $this->assign("point_sum", $point_sum);
        return view($this->style . "/Member/member_wallet");
    }

    /**
     * mymy 我的下级
     */
     public function my_son(){
        $id = request()->get('id','');
        $member = new MemberService();
        switch ($id) {
            case '1':
                $son = $member->getSon($this->uid);
                $this->assign("son",$son);
                break;
            case '2':
                $son = $member->getSonTwo($this->uid);
                $this->assign("son",$son);
                break;
            case '3':
                $son = $member->getSonThree($this->uid);
                $this->assign("son",$son);
                break;
            default:
                break;
        }
        return view($this->style . "/Member/my_son");
    }

    /**
     * 检测转出账号
     */
    public function outCheck(){
        $username_zc = request()->post('username_zc','');
        $member = new MemberService();
        $res=$member->getAUser($username_zc);
        // return AjaxReturn($res);
        return $res;
    }

    /**
     * 会员优惠券
     */
    public function memberCoupon()
    {
        if (request()->isAjax()) {
            $member = new MemberService();
            $type = request()->post('type','');
            $shop_id = $this->instance_id;
            $counpon_list = $member->getMemberCounponList($type, $shop_id);
            foreach ($counpon_list as $key => $item) {
                $counpon_list[$key]['start_time'] = date("Y-m-d", $item['start_time']);
                $counpon_list[$key]['end_time'] = date("Y-m-d", $item['end_time']);
            }
            return $counpon_list;
        } else {
            return view($this->style . "/Member/memberCoupon");
        }
    }

    /**
     * 会员个人资料主界面
     */
    public function personalData()
    {
        $shop_id = request()->get('shop_id',0);
        $_SESSION['bund_pre_url'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $uid = $this->user->getSessionUid();
        $member = new MemberService();
        $member_info = $member->getMemberDetail();
        $this->assign('member_info', $member_info);
        // 查询账户信息
        // $user = new UserModel();
        // $nick_name = $user->getInfo(["uid" => $this->uid], "nick_name");
        
        if (! empty($member_info['user_info']['user_headimg'])) {
            $member_img = $member_info['user_info']['user_headimg'];
        } elseif (! empty($member_info['user_info']['qq_openid'])) {
            $member_img = $member_info['user_info']['qq_info_array']['figureurl_qq_1'];
        } elseif (! empty($member_info['user_info']['wx_openid'])) {
            $member_img = '0';
        } else {
            $member_img = '0';
        }
        $this->assign("shop_id", $shop_id);
        $this->assign('qq_openid', $member_info['user_info']['qq_openid']);
        $this->assign('member_img', $member_img);
        return view($this->style . "/Member/personalData");
    }

    /**
     * mymy修改个人信息
     */
    public function memberXiugai()
    {   
        $uid = $this->user->getSessionUid();
        $member = new MemberService();
        $member_info = $member->getMemberDetail();
        if (request()->isAjax()) {
            $real_name = request()->post('real_name', '');
            $sex = request()->post('sex', '');
            $location = request()->post('location', '');

            $par_tel = request()->post('par_tel', '');
            if (!$par_tel=='') {

                $ra=$this->user->getbytel($par_tel);
                if (!$ra) {
                    return AjaxReturn(0,'请输入正确的推荐人'); 
                }
                $rr = $member->getAUser($par_tel);
                if ($rr['uid']==$this->uid) {
                    return AjaxReturn(0,'推荐人不能是本人'); 
                }
                $arr= array('par_tel'=>$rr['uid'],'real_name' => $real_name,'sex' => $sex,'location' => $location);
            }else{
                $arr= array('real_name' => $real_name,'sex' => $sex,'location' => $location);
            }
            
            $res=$this->user->xiugaiInfo($uid,$arr);
            return AjaxReturn($res);   

        }else{
            if ($member_info['user_info']['par_tel']) {
                $par=$member->getUserInfoByUid($member_info['user_info']['par_tel']);
            }else{
                $par['user_tel']='';
            }
            $this->assign('par', $par);
            $member_info['user_info']['location']=explode('#',$member_info['user_info']['location']); 
            $this->assign('member_info', $member_info);
            return view($this->style . "/Member/memberXiugai");
        }
        
        
    }

    /**
     * mymy修改密码
     */
    public function gaimi()
    {
        return view($this->style . "/Member/gaimi");
    }


    /**
     * 修改密码
     */
    public function modifyPassword()
    {
        $member = new MemberService();
        $uid = $this->user->getSessionUid();
        $old_password = request()->post('old_password','');
        $new_password = request()->post('new_password','');
        $retval = $member->ModifyUserPassword($uid, $old_password, $new_password);
        return AjaxReturn($retval);
    }
     /**
     * mymy设置二级密码
     */
    public function erji_psw()
    {   
        if (request()->isAjax()) {
            $member = new MemberService();
            $uid = $this->user->getSessionUid();
            $erji_psw = request()->post('erji_psw','');
            $data = array(
                'erji_psw' => md5($erji_psw)
            );
            $retval = $this->user->updateUserByUserid($uid,$data);
            return AjaxReturn($retval);
        }
        return view($this->style . "/Member/erji_psw");
    }
    /**
     * mymy修改二级密码
     */
    public function erji_xiugai()
    {   
        if (request()->isAjax()) {
            $member = new MemberService();
            $uid = $this->user->getSessionUid();
            $old_password = request()->post('old_password','');
            $new_password = request()->post('new_password','');
            $retval = $member->ModifyErji($uid, $old_password, $new_password);
            return AjaxReturn($retval);
        }
            return view($this->style . "/Member/erji_xiugai");
    }


    /**
     * 修改邮箱
     */
    public function modifyEmail()
    {
        $member = new MemberService();
        $uid = $this->user->getSessionUid();
        $email = request()->post('email','');
        $retval = $member->modifyEmail($uid, $email);
        return AjaxReturn($retval);
    }

    /**
     * 修改手机
     */
    public function modifyMobile()
    {
        $uid = $this->user->getSessionUid();
        $mobile = request()->post('mobilephone','');
        $member = new MemberService();
        $retval = $member->modifyMobile($uid, $mobile);
        return AjaxReturn($retval);
    }

    /**
     * 修改昵称
     *
     * @return unknown[]
     */
    public function modifyNickName()
    {
        $uid = $this->user->getSessionUid();
        $nickname = request()->post('nickname','');
        $member = new MemberService();
        $retval = $member->modifyNickName($uid, $nickname);
        return AjaxReturn($retval);
    }

    /**
     * 修改qq
     *
     * @return Ambigous <multitype:unknown, multitype:unknown unknown string >
     */
    public function modifyQQ()
    {
        $uid = $this->user->getSessionUid();
        $qq = request()->post('qqno','');
        $member = new MemberService();
        $retval = $member->modifyQQ($uid, $qq);
        return AjaxReturn($retval);
    }

    /**
     * 退出登录
     */
    public function logOut()
    {
        $member = new MemberService();
        $member->Logout();
        return AjaxReturn(1);
    }

    /**
     * 解除QQ绑定
     */
    public function removeBindQQ()
    {
        $retval = $this->user->removeBindQQ();
        $this->success('解除绑定成功', $_SESSION['bund_pre_url']);
    }

    /**
     * 积分兑换余额
     *
     * @return \think\response\View
     */
    public function integralExchangeBalance()
    {
        // 获取兑换比例
        $account = new MemberAccount();
        $accounts = $account->getConvertRate($this->shop_id);
        
        // 查看积分总数
        $conponAccount = new MemberAccount();
        $conponSum = $conponAccount->getMemberAccount($this->shop_id, $this->uid, 1);
        
        $this->assign('conponSum', $conponSum);
        $this->assign('accounts', $accounts['convert_rate']);
        return view($this->style . "/Member/integralExchangeBalance");
    }

    /**
     * 积分兑换余额
     *
     * @return \think\response\View
     */
    public function ajaxIntegralExchangeBalance()
    {
        $point = request()->post('amount','');
        $point = (float)$point;
        $shop_id = request()->post('shop_id','');
        $result = $this->user->memberPointToBalance($this->uid, $shop_id, $point);
        return AjaxReturn($result);
    }

    /**
     * 账户列表
     * 任鹏强
     * 2017年3月13日10:52:59
     */
    public function accountList()
    {
        $flag = request()->get('flag','0');// 标识，1：从会员中心的提现账号进来，0：从申请提现进来
        if ($flag != 0) {
            $_SESSION['account_flag'] = $flag;
        } else {
            if (! empty($_SESSION['account_flag'])) {
                $flag = $_SESSION['account_flag'];
            }
        }
        $account_list = 1;
        $this->assign('flag', $flag);
        $member = new MemberService();
        $account_list = $member->getMemberBankAccount();
        $this->assign('account_list', $account_list);
        return view($this->style . "/Member/accountList");
    }

    /**
     * 添加账户
     * 任鹏强
     * 2017年3月13日10:53:06
     */
    public function addAccount()
    {
        if (request()->isAjax()) {
            $member = new MemberService();
            $uid = $this->uid;
            $realname = request()->post('realname','');
            $mobile = request()->post('mobile','');
            $bank_type = request()->post('bank_type','1');
            $account_number = request()->post('account_number','');
            $branch_bank_name = request()->post('branch_bank_name','');
            $retval = $member->addMemberBankAccount($uid, $bank_type, $branch_bank_name, $realname, $account_number, $mobile);
            return AjaxReturn($retval);
        } else {
            return view($this->style . "/Member/addAccount");
        }
    }

    /**
     * 修改账户信息
     */
    public function updateAccount()
    {
        $member = new MemberService();
        if (request()->isAjax()) {
            $uid = $this->uid;
            $account_id = request()->post('id','');
            $realname = request()->post('realname','');
            $mobile = request()->post('mobile','');
            $bank_type = request()->post('bank_type','1');
            $account_number = request()->post('account_number','');
            $branch_bank_name = request()->post('branch_bank_name','');
            $retval = $member->updateMemberBankAccount($account_id, $branch_bank_name, $realname, $account_number, $mobile);
            return AjaxReturn($retval);
        } else {
            $id = request()->get('id','');
            if(!is_numeric($id)){
                $this->error('未获取到信息');
            }
            $result = $member->getMemberBankAccountDetail($id);
            if(empty($result)){
                $this->error("没有获取到该账户信息");
            }
            $this->assign('result', $result);
            return view($this->style . "/Member/updateAccount");
        }
    }

    /**
     * 删除账户信息
     */
    public function delAccount()
    {
        if (request()->isAjax()) {
            $member = new MemberService();
            $uid = $this->uid;
            $account_id = request()->post('id','');
            $retval = $member->delMemberBankAccount($account_id);
            return AjaxReturn($retval);
        }
    }

    /**
     * 设置选中账户
     */
    public function checkAccount()
    {
        if (request()->isAjax()) {
            $member = new MemberService();
            $uid = $this->uid;
            $account_id = request()->post('id','');
            $retval = $member->setMemberBankAccountDefault($uid, $account_id);
            return AjaxReturn($retval);
        }
    }

    /**
     * 获取微信推广二维码
     */
    public function getWchatQrcode()
    {
        // 获取微信配置
        $config = new Config();
        $auth_info = $config->getInstanceWchatConfig($this->instance_id);
        if (! isWeixin()) {
            $this->assign("is_weixin", - 1);
        } else 
            if ($auth_info['value']['appid'] == '') {
                $this->assign("is_weixin", 0);
            } else {
                $this->assign("is_weixin", 1);
            }
        $uid = $this->user->getSessionUid();
        $instance_id = $this->instance_id;
        $this->assign("shop_id", $instance_id);
        // 分享
        $ticket = $this->getShareTicket();
        $this->assign("signPackage", $ticket);
        
        return view($this->style . "/Member/myqrcode");
    }

    /**
     * 生成个人店铺二维码
     */
    public function getShopQrcode()
    {
        $weisite = new WebSite();
        $weisite_info = $weisite->getWebSiteInfo();
        $info["logo"] = $weisite_info["logo"];
        $info["shop_name"] = $weisite_info["title"];
        $info["phone"] = $weisite_info["web_phone"];
        $info["address"] = $weisite_info["web_address"];
        $this->assign("info", $info);
        // 分享
        $ticket = $this->getShareTicket();
        $this->assign("signPackage", $ticket);
        return view($this->style . "/Member/shopqrcode");
    }

    /**
     * 用户更换模板
     */
    public function updateUserQrcodeTemplate()
    {
        $uid = $this->user->getSessionUid();
        $instance_id = $this->instance_id;
        // 获取微信配置
        $config = new Config();
        $auth_info = $config->getInstanceWchatConfig($this->instance_id);
        if (! isWeixin()) {
            $this->assign("is_weixin", - 1);
        } else 
            if ($auth_info['value']['appid'] == '') {
                $this->assign("is_weixin", 0);
            } else {
                $this->assign("is_weixin", 1);
            }
        $weixin = new Weixin();
        $data = $weixin->updateMemberQrcodeTemplate($instance_id, $uid);
        $this->assign("shop_id", $instance_id);
        // 分享
        $ticket = $this->getShareTicket();
        $this->assign("signPackage", $ticket);
        return view($this->style . "/Member/myqrcode");
    }

    /**
     * 制作推广二维码
     */
    function showUserQrcode()
    {
        $uid = $this->user->getSessionUid();
        $instance_id = $this->instance_id;
        // 读取生成图片的位置配置
        $weixin = new Weixin();
        $data = $weixin->getWeixinQrcodeConfig($instance_id, $uid);
        $member_info = $this->user->getUserDetail();
        // 获取所在店铺信息
        $web = new WebSite();
        $shop_info = $web->getWebDetail();
        $shop_logo = $shop_info["logo"];
        
        $upload_path = "upload/qrcode/promote_qrcode/user"; // 推广二维码手机端展示
        if (! file_exists($upload_path)) {
            $mode = intval('0777',8);
            mkdir($upload_path, $mode, true);
        }
        // 查询并生成二维码
        $path = $upload_path . '/qrcode_' . $uid . '_' . $instance_id . '.png';
        
        if (! file_exists($path)) {
            $weixin = new Weixin();
            $url = $weixin->getUserWchatQrcode($uid, $instance_id);
            if ($url == WEIXIN_AUTH_ERROR) {
                exit();
            } else {
                getQRcode($url, $upload_path, "qrcode_" . $uid . '_' . $instance_id);
            }
        }
        // 定义中继二维码地址
        $thumb_qrcode = $upload_path . '/thumb_' . 'qrcode_' . $uid . '_' . $instance_id . '.png';
        $image = \think\Image::open($path);
        // 生成一个固定大小为360*360的缩略图并保存为thumb_....jpg
        $image->thumb(288, 288, \think\Image::THUMB_CENTER)->save($thumb_qrcode);
        // 背景图片
        $dst = $data["background"];
        if (! file_exists($dst)) {
            $dst = "public/static/images/qrcode_bg/qrcode_user_bg.png";
        }
        // 生成画布
        list ($max_width, $max_height) = getimagesize($dst);
        $dests = imagecreatetruecolor($max_width, $max_height);
        $dst_im = getImgCreateFrom($dst);
        imagecopy($dests, $dst_im, 0, 0, 0, 0, $max_width, $max_height);
        imagedestroy($dst_im);
        // 并入二维码
        // $src_im = imagecreatefrompng($thumb_qrcode);
        $src_im = getImgCreateFrom($thumb_qrcode);
        $src_info = getimagesize($thumb_qrcode);
        imagecopy($dests, $src_im, $data["code_left"] * 2, $data["code_top"] * 2, 0, 0, $src_info[0], $src_info[1]);
        imagedestroy($src_im);
        // 并入用户头像
        $user_headimg = $member_info["user_headimg"];
        // $user_headimg = "upload/user/1493363991571.png";
        if (! file_exists($user_headimg)) {
            $user_headimg = "public/static/images/qrcode_bg/head_img.png";
        }
        $src_im_1 = getImgCreateFrom($user_headimg);
        $src_info_1 = getimagesize($user_headimg);
        // imagecopy($dests, $src_im_1, $data['header_left'] * 2, $data['header_top'] * 2, 0, 0, $src_info_1[0], $src_info_1[1]);
        imagecopyresampled($dests, $src_im_1, $data['header_left'] * 2, $data['header_top'] * 2, 0, 0, 80, 80, $src_info_1[0], $src_info_1[1]);
        // imagecopy($dests, $src_im_1, $data['header_left'] * 2, $data['header_top'] * 2, 0, 0, $src_info_1[0], $src_info_1[1]);
        imagedestroy($src_im_1);
        
        // 并入网站logo
        if ($data['is_logo_show'] == '1') {
            // $shop_logo = $shop_logo;
            if (! file_exists($shop_logo)) {
                $shop_logo = "public/static/images/logo.png";
            }
            $src_im_2 = getImgCreateFrom($shop_logo);
            $src_info_2 = getimagesize($shop_logo);
            imagecopy($dests, $src_im_2, $data['logo_left'] * 2, $data['logo_top'] * 2, 0, 0, $src_info_2[0], $src_info_2[1]);
            imagedestroy($src_im_2);
        }
        // 并入用户姓名
        $rgb = hColor2RGB($data['nick_font_color']);
        $bg = imagecolorallocate($dests, $rgb['r'], $rgb['g'], $rgb['b']);
        $name_top_size = $data['name_top'] * 2 + $data['nick_font_size'];
        @imagefttext($dests, $data['nick_font_size'], 0, $data['name_left'] * 2, $name_top_size, $bg, "public/static/font/Microsoft.ttf", $member_info["nick_name"]);
        header("Content-type: image/jpeg");
        imagejpeg($dests);
    }

    /**
     * 制作店铺二维码
     */
    function showShopQecode()
    {
        $uid = $this->user->getSessionUid();
        $instance_id = $this->instance_id;
        if ($instance_id == 0) {
            $url = __URL(__URL__ . '/wap?source_uid=' . $uid);
        } else {
            $url = __URL(__URL__ . '/wap/shop/index?shop_id=' . $instance_id . '&source_uid=' . $uid);
        }
        // 查询并生成二维码
        
        $upload_path = "upload/qrcode/promote_qrcode/shop"; // 后台推广二维码模版
        if (! file_exists($upload_path)) {
            mkdir($upload_path, 0777, true);
        }
        $path = $upload_path . '/shop_' . $uid . '_' . $instance_id . '.png';
        if (! file_exists($path)) {
            getQRcode($url, $upload_path, "shop_" . $uid . '_' . $instance_id);
        }
        
        // 定义中继二维码地址
        $thumb_qrcode = $upload_path . '/thumb_shop_' . 'qrcode_' . $uid . '_' . $instance_id . '.png';
        $image = \think\Image::open($path);
        // 生成一个固定大小为360*360的缩略图并保存为thumb_....jpg
        $image->thumb(260, 260, \think\Image::THUMB_CENTER)->save($thumb_qrcode);
        // 背景图片
        $dst = "public/static/images/qrcode_bg/shop_qrcode_bg.png";
        
        // $dst = "http://pic107.nipic.com/file/20160819/22733065_150621981000_2.jpg";
        // 生成画布
        list ($max_width, $max_height) = getimagesize($dst);
        $dests = imagecreatetruecolor($max_width, $max_height);
        $dst_im = getImgCreateFrom($dst);
        // if (substr($dst, - 3) == 'png') {
        // $dst_im = imagecreatefrompng($dst);
        // } elseif (substr($dst, - 3) == 'jpg') {
        // $dst_im = imagecreatefromjpeg($dst);
        // }
        imagecopy($dests, $dst_im, 0, 0, 0, 0, $max_width, $max_height);
        imagedestroy($dst_im);
        // 并入二维码
        // $src_im = imagecreatefrompng($thumb_qrcode);
        $src_im = getImgCreateFrom($thumb_qrcode);
        $src_info = getimagesize($thumb_qrcode);
        imagecopy($dests, $src_im, "94px" * 2, "170px" * 2, 0, 0, $src_info[0], $src_info[1]);
        imagedestroy($src_im);
        // 获取所在店铺信息
        
        $web = new WebSite();
        $shop_info = $web->getWebDetail();
        $shop_logo = $shop_info["logo"];
        $shop_name = $shop_info["title"];
        $shop_phone = $shop_info["web_phone"];
        $live_store_address = $shop_info["web_address"];
        
        // logo
        if (! file_exists($shop_logo)) {
            $shop_logo = "public/static/images/logo.png";
        }
        // if (substr($shop_logo, - 3) == 'png') {
        // $src_im_2 = imagecreatefrompng($shop_logo);
        // } elseif (substr($shop_logo, - 3) == 'jpg') {
        // $src_im_2 = imagecreatefromjpeg($shop_logo);
        // }
        $src_im_2 = getImgCreateFrom($shop_logo);
        $src_info_2 = getimagesize($shop_logo);
        imagecopy($dests, $src_im_2, "10px" * 2, "380px" * 2, 0, 0, $src_info_2[0], $src_info_2[1]);
        imagedestroy($src_im_2);
        // 并入用户姓名
        $rgb = hColor2RGB("#333333");
        $bg = imagecolorallocate($dests, $rgb['r'], $rgb['g'], $rgb['b']);
        $name_top_size = "430px" * 2 + "23";
        @imagefttext($dests, 23, 0, "10px" * 2, $name_top_size, $bg, "public/static/font/Microsoft.ttf", "店铺名称：" . $shop_name);
        @imagefttext($dests, 23, 0, "10px" * 2, $name_top_size + 50, $bg, "public/static/font/Microsoft.ttf", "电话号码：" . $shop_phone);
        @imagefttext($dests, 23, 0, "10px" * 2, $name_top_size + 100, $bg, "public/static/font/Microsoft.ttf", "店铺地址：" . $live_store_address);
        header("Content-type: image/jpeg");
        imagejpeg($dests);
    }
    // 用户签到
    public function signIn()
    {
        if (request()->isAjax()) {
            $rewardRule = new PromoteRewardRule();
            $res = $rewardRule->memberSign($this->uid, $this->instance_id);
            return AjaxReturn($res);
        }
    }
    // 分享送积分
    public function shareGivePoint()
    {
        if (request()->isAjax()) {
            $rewardRule = new PromoteRewardRule();
            $res = $rewardRule->memberShareSendPoint($this->instance_id, $this->uid);
            return AjaxReturn($res);
        }
    }

    /**
     * 用户充值余额
     */
    public function recharge()
    {
        $pay = new UnifyPay();
        $pay_no = $pay->createOutTradeNo();
        $this->assign("pay_no", $pay_no);
        return view($this->style . "/Member/recharge");
    }

    /**
     * 创建充值订单
     */
    public function createRechargeOrder()
    {
        $recharge_money = request()->post('recharge_money',0);
        $out_trade_no = request()->post('out_trade_no','');
        if (empty($recharge_money) || empty($out_trade_no)) {
            return AjaxReturn(0);
        } else {
            $member = new MemberService();
            $retval = $member->createMemberRecharge($recharge_money, $this->uid, $out_trade_no);
            return AjaxReturn($retval);
        }
    }

    /**
     * 提现页面
     */
    public function userShopCommission()
    {
        return view($this->style . "/Member/userShopCommission");
    }

    /**
     * 代理升级界面
     */
    public function agent()
    {
        $pay = new UnifyPay();
        $user = new User(); 
        $pay_no = $pay->createOutTradeNo();
        $info = $user->getUserInfo();
        $this->assign("pay_no", $pay_no);
        $this->assign("info", $info);
        return view($this->style . "/Member/agent");
    }
    /**
     * mymy创建代理订单
     */
    public function createAgentOrder(){

        $level = request()->post('level',0);
        $out_trade_no = request()->post('out_trade_no','');
        if (empty($level) || empty($out_trade_no)) {
            return AjaxReturn(0);
        } else {
            $member = new MemberService();
            $user = new User();
            $info = $user->getUserInfo();
            $persent = $member->getAgentMoney($info[agent]);
            $want = $member->getAgentMoney($level);
            $money = $want-$persent;
          
            $retval = $member->createAgent($money, $this->uid, $out_trade_no, $level);
            return AjaxReturn($retval);
        }
    }

    /**
     * 申请提现
     */
    public function toWithdraw()
    {
        if (request()->isAjax()) {
            // 提现
            $uid = $this->uid;
            $withdraw_no = time() . rand(111, 999);
            $bank_account_id = request()->post('bank_account_id', '');
            $cash = request()->post('cash', '');
            $shop_id = $this->instance_id;
            $member = new MemberService();
            $retval = $member->addMemberBalanceWithdraw($shop_id, $withdraw_no, $uid, $bank_account_id, $cash);
            return AjaxReturn($retval);
        } else {
            $member = new MemberService();
            $account_list = $member->getMemberBankAccount(1);
            // 获取会员余额
            $uid = $this->uid;
            $shop_id = $this->shop_id;
            $members = new MemberAccount();
            $account = $members->getMemberBalance($uid);
            $instance_id = $this->instance_id;
            $this->assign('shop_id', $instance_id);
            $this->assign('account', $account);
            $config = new Config();
            $balanceConfig = $config->getBalanceWithdrawConfig($shop_id);
            // dump($balanceConfig);
            $cash = $balanceConfig['value']["withdraw_cash_min"];
            $this->assign('cash', $cash);
            $poundage = $balanceConfig['value']["withdraw_multiple"];
            $this->assign('poundage', $poundage);
            $withdraw_message = $balanceConfig['value']["withdraw_message"];
            $this->assign('withdraw_message', $withdraw_message);
            
            $this->assign('account_list', $account_list);
            return view($this->style . "/Member/toWithdraw");
        }
    }
    /**
     * 绑定时发送短信验证码或邮件验证码
     * @return number[]|string[]|string|mixed
     */
    function sendBindCode(){
        if(request()->isAjax()){
            $params['email'] = request()->post('email', '');
            $params['mobile'] = request()->post('mobile','');
            $params['user_id'] = $this->uid;
            $type = request()->post("type",'');
            $vertification = request()->post('vertification', '');
            if ($this->login_verify_code["value"]["pc"] == 1) {
                if (! captcha_check($vertification)) {
                    $result = [
                        'code' => -1,
                        'message' => "验证码错误"
                    ];
                    return $result;
                }else{
                    $params['shop_id'] = 0;
                    if($type == 'email'){
                        $result = runhook('Notify', 'bindEmail', $params);
                        Session::set('VerificationCode',$result['param']);
                    }elseif($type == 'mobile'){
                        $result = runhook('Notify', 'bindMobile', $params);
                        Session::set('VerificationCode',$result['param']);
                    }
                }
                return $result;
            }else{
                $params['shop_id'] = 0;
                if($type == 'email'){
                    $result = runhook('Notify', 'bindEmail', $params);
                    Session::set('VerificationCode',$result['param']);
                }elseif($type == 'mobile'){
                    $result = runhook('Notify', 'bindMobile', $params);
                    Session::set('VerificationCode',$result['param']);
                }
                return $result;
            }
        }
    }
    /**
     * 检侧动态验证码是否输入正确
     */
    public function check_dynamic_code(){
        if(request()->isAjax()){
            $code = request()->post("vertification",'');
            $verificationCode = Session::get("VerificationCode");
            if($code != $verificationCode){
                return $result = array(
                    "code" => -1,
                    "message" => "动态验证码不一致"
                );
            }
        }
    }
    /**
     * 检测验证码是否正确
     */
    public function check_code(){
        if(request()->isAjax()){
            $vertification = request()->post("vertification",'');
            if (! captcha_check($vertification)) {
                $result = [
                    'code' => -1,
                    'message' => "验证码错误"
                ];
                return $result;
            }
        }
    }
    
    /**
     * 更改用户头像
     */
    public function modifyFace(){
        $member = new MemberService();
        if(Request()->isAjax()){
            $user_headimg = request()->post('user_headimg','');
            $res = $member->ModifyUserHeadimg($this->uid, $user_headimg);
            return AjaxReturn($res);
        }else{
            $member_info = $member->getMemberDetail();
            $member_img = $member_info['user_info']['user_headimg'];
            $this->assign("member_img", $member_img);
        }
        return view($this->style."/Member/modifyFace");
    }
}