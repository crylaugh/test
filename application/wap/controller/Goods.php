<?php
/**
 * Goods.php
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

use data\service\Goods as GoodsService;
use data\service\GoodsBrand as GoodsBrand;
use data\service\GoodsCategory;
use data\service\GoodsGroup;
use data\service\Order as OrderService;
use data\service\Platform;
use data\service\promotion\GoodsExpress;
use data\service\Address;
use data\service\Config as WebConfig;

/**
 * 商品相关
 *
 * @author Administrator
 *        
 */
class Goods extends BaseController
{

    /**
     * 商品详情
     *
     * @return Ambigous <\think\response\View, \think\response\$this, \think\response\View>
     */
    public function goodsDetail()
    {
        $goods_id = request()->get('id',0);
        if ($goods_id == 0) {
            $this->error("没有获取到商品信息");
        }
        $goods = new GoodsService();
        $goods_detail = $goods->getGoodsDetail($goods_id);
        if (empty($goods_detail)) {
            $this->error("没有获取到商品信息");
        }
        // 把属性值相同的合并
        $goods_attribute_list = $goods_detail['goods_attribute_list'];
        $goods_attribute_list_new = array();
        foreach ($goods_attribute_list as $item) {
            $attr_value_name = '';
            foreach ($goods_attribute_list as $key => $item_v) {
                if ($item_v['attr_value_id'] == $item['attr_value_id']) {
                    $attr_value_name .= $item_v['attr_value_name'] . ',';
                    unset($goods_attribute_list[$key]);
                }
            }
            if (! empty($attr_value_name)) {
                array_push($goods_attribute_list_new, array(
                    'attr_value_id' => $item['attr_value_id'],
                    'attr_value' => $item['attr_value'],
                    'attr_value_name' => rtrim($attr_value_name, ',')
                ));
            }
        }
        $goods_detail['goods_attribute_list'] = $goods_attribute_list_new;
        
        $user_location = get_city_by_ip();
        $this->assign("user_location", get_city_by_ip()); // 获取用户位置信息
        if ($user_location['status'] == 1) {
            // 定位成功，查询当前城市的运费
            $goods_express = new GoodsExpress();
            $address = new Address();
            $province = $address->getProvinceId($user_location["province"]);
            $city = $address->getCityId($user_location["city"]);
            $district = $address->getCityFirstDistrict($city['city_id']);
            $express = $goods_express->getGoodsExpressTemplate($goods_id, $province['province_id'], $city['city_id'], $district);
            $goods_info["shipping_fee_name"] = $express;
        }
        // 获取当前时间
        $current_time = $this->getCurrentTime();
        $this->assign('ms_time', $current_time);
        
        $this->assign("goods_detail", $goods_detail);
        $this->assign("shopname", $this->shop_name);
        $this->assign("price", intval($goods_detail["promotion_price"]));
        $this->assign("goods_id", $goods_id);
        $this->getCartInfo($goods_id);
        // 分享
        $ticket = $this->getShareTicket();
        $this->assign("signPackage", $ticket);
        // 评价数量
        $evaluates_count = $goods->getGoodsEvaluateCount($goods_id);
        $this->assign('evaluates_count', $evaluates_count);
        // 美洽客服
        $shop_id = $this->instance_id;
        $config_service = new WebConfig();
        $list = $config_service->getcustomserviceConfig($shop_id);
        if (empty($list)) {
            $list['id'] = '';
            $list['value']['service_addr'] = '';
        }
        $this->assign("list", $list);
        
        // 查询点赞记录表，获取详情再判断当天该店铺下该商品该会员是否已点赞
        $goods = new GoodsService();
        $shop_id = $this->instance_id;
        $uid = $this->uid;
        $click_detail = $goods->getGoodsSpotFabulous($shop_id, $uid, $goods_id);
        $this->assign('click_detail', $click_detail);
        //mymy 判断是否是新手大礼包
        if ($goods_id == 3) {
            //判断该用户是否已经购买了新手大礼包
            $res = $goods->findOrder($goods_id,$uid); 
            if ($res) {
                $buyed = 1;
            }else{
                $buyed = 0;
            }
        }else{
            $buyed = 0;
        }
        $this->assign('buyed', $buyed);


        return view($this->style . 'Goods/goodsDetail');
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
     * 功能：商品评论
     * 创建人：李志伟
     * 创建时间：2017年2月23日11:12:57
     */
    public function getGoodsComments()
    {
        $comments_type = request()->post('comments_type','');
        $order = new OrderService();
        $condition['goods_id'] = request()->post('goods_id','');
        switch ($comments_type) {
            case 1:
                $condition['explain_type'] = 1;
                break;
            case 2:
                $condition['explain_type'] = 2;
                break;
            case 3:
                $condition['explain_type'] = 3;
                break;
            case 4:
                $condition['image|again_image'] = array(
                    'NEQ',
                    ''
                );
                break;
        }
        $condition['is_show'] = 1;
        $goodsEvaluationList = $order->getOrderEvaluateDataList(1, PAGESIZE, $condition, 'addtime desc');
        return $goodsEvaluationList;
    }

    /**
     * 返回商品数量和当前商品的限购
     *
     * @param unknown $goods_id            
     */
    public function getCartInfo($goods_id)
    {
        $goods = new GoodsService();
        $cartlist = $goods->getCart($this->uid);
        $num = 0;
        foreach ($cartlist as $v) {
            if ($v["goods_id"] == $goods_id) {
                $num = $v["num"];
            }
        }
        $this->assign("carcount", count($cartlist)); // 购物车商品数量
        $this->assign("num", $num); // 购物车已购买商品数量
    }

    /**
     * 购物车页面
     */
    public function cart()
    {
        $this->is_member = $this->user->getSessionUserIsMember();
        if ($this->is_member == 0) {
            $redirect = __URL(__URL__ . "/wap/login");
            $this->redirect($redirect);
        }
        $this->assign("shopname", $this->shop_name);
        $goods = new GoodsService();
        
        $cartlist = $goods->getCart($this->uid, $this->instance_id);
        // 店铺，店铺中的商品
        $list = Array();
        for ($i = 0; $i < count($cartlist); $i ++) {
            // $cartlist[$i]["goods_name"] = mb_substr($cartlist[$i]["goods_name"], 0,20,"utf-8");
            // $cartlist[$i]["sku_name"] = mb_substr($cartlist[$i]["goods_name"], 0,20,"utf-8");
            $list[$cartlist[$i]["shop_id"] . ',' . $cartlist[$i]["shop_name"]][] = $cartlist[$i];
        }
        $this->assign("list", $list);
        $this->assign("countlist", count($cartlist));
        return view($this->style . '/Goods/cart');
    }

    /**
     * 添加购物车
     * 创建人：李广
     */
    public function addCart()
    {
        $cart_detail = request()->post('cart_detail','');
        if(!empty($cart_detail)){
            $cart_detail = json_decode($cart_detail,true);
        }
        $cart_tag = request()->post('cart_tag','');
        $uid = $this->uid;
        $shop_id = $cart_detail["shop_id"];
        $shop_name = $cart_detail["shop_name"];
        $goods_id = $cart_detail['trueId'];
        $goods_name = $cart_detail['goods_name'];
        $num = $cart_detail['count'];
        $sku_id = $cart_detail['select_skuid'];
        $sku_name = $cart_detail['select_skuName'];
        $price = $cart_detail['price'];
        $cost_price = $cart_detail['cost_price'];
        $picture = $cart_detail['picture'];
        $jifen = $cart_detail['jifen'];
        $this->is_member = $this->user->getSessionUserIsMember();
        if (! empty($this->uid) && $this->is_member == 1) {
            /* if($cart_tag == "addCart") { */
            $goods = new GoodsService();
            $retval = $goods->addCart($uid, $shop_id, $shop_name, $goods_id, $goods_name, $sku_id, $sku_name, $price, $num, $picture, 0, $jifen);
            
            /*
             * }else{
             * $retval = 0;
             * }
             */
        } else {
            $retval = "-1";
        }
        return $retval;
    }

    /**
     * 购物车修改数量
     */
    public function cartAdjustNum()
    {
        if (request()->isAjax()) {
            $cart_id = request()->post('cartid','');
            $num = request()->post('num','');
            $goods = new GoodsService();
            $retval = $goods->cartAdjustNum($cart_id, $num);
            return AjaxReturn($retval);
        } else
            return AjaxReturn(- 1);
    }

    /**
     * 购物车项目删除
     */
    public function cartDelete()
    {
        if (request()->isAjax()) {
            $cart_id_array = request()->post('del_id','');
            $goods = new GoodsService();
            $retval = $goods->cartDelete($cart_id_array);
            return AjaxReturn($retval);
        } else
            return AjaxReturn(- 1);
    }

    /**
     * 平台商品分类列表
     */
    public function goodsClassificationList()
    {
        $uid = $this->uid;
        $goods_category = new GoodsCategory();
        $goods_category_list_1 = $goods_category->getGoodsCategoryList(1, 0, [
            "is_visible" => 1,
            "level" => 1
        ], 'sort');
        
        $goods_category_list_2 = $goods_category->getGoodsCategoryList(1, 0, [
            "is_visible" => 1,
            "level" => 2
        ], 'sort');
        $goods_category_list_3 = $goods_category->getGoodsCategoryList(1, 0, [
            "is_visible" => 1,
            "level" => 3
        ], 'sort');
        
        $this->assign("goods_category_list_1", $goods_category_list_1["data"]);
        $this->assign("goods_category_list_2", $goods_category_list_2["data"]);
        $this->assign("goods_category_list_3", $goods_category_list_3["data"]);
        return view($this->style . 'Goods/goodsClassificationList');
    }

    /**
     * 店铺商品分组列表
     */
    public function goodsGroupList()
    {
        // 查询购物车中商品的数量
        $uid = $this->uid;
        $goods = new GoodsService();
        $cartlist = $goods->getCart($uid);
        $this->assign('uid', $uid);
        $this->assign("carcount", count($cartlist));
        
        $components = new Components();
        $grouplist = $components->goodsGroupList($this->shop_id);
        $group_frist_list = null;
        $group_second_list = null;
        foreach ($grouplist as $group) {
            if ($group["pid"] == 0) {
                $group_frist_list[] = $group;
            } else {
                $group_second_list[] = $group;
            }
        }
        $this->assign("group_frist_list", $group_frist_list);
        $this->assign("group_second_list", $group_second_list);
        
        $group_goods = new GoodsGroup();
        $tree_list = $group_goods->getGroupGoodsTree($this->shop_id);
        $this->assign("tree_list", $tree_list);
        return view($this->style . 'Goods/goodsGroupList');
    }

    /**
     * 商品分类列表
     */
    public function goodsCategoryList()
    {
        $goodscate = new GoodsCategory();
        $one_list = $goodscate->getGoodsCategoryListByParentId(0);
        if (! empty($one_list)) {
            foreach ($one_list as $k => $v) {
                $two_list = array();
                $two_list = $goodscate->getGoodsCategoryListByParentId($v['category_id']);
                $v['child_list'] = $two_list;
                if (! empty($two_list)) {
                    foreach ($two_list as $k1 => $v1) {
                        $three_list = array();
                        $three_list = $goodscate->getGoodsCategoryListByParentId($v1['category_id']);
                        $v1['child_list'] = $three_list;
                    }
                }
            }
        }
        return $one_list;
    }

    /**
     * 加入购物车前显示商品规格
     */
    public function joinCartInfo()
    {
        $goods = new GoodsService();
        $goods_id = request()->post('goods_id','');
        $goods_detail = $goods->getGoodsDetail($goods_id);
        $this->assign("goods_detail", $goods_detail);
        $this->assign("style", $this->style);
        return view($this->style . 'joinCart');
    }

    /**
     * 搜索商品显示
     */
    public function goodsSearchList()
    {
        if (request()->isAjax()) {
            $sear_name = request()->post('sear_name','');
            $sear_type = request()->post('sear_type','');
            $order_state = request()->post('order_state','desc');
            $controlType = request()->post('controlType','');
            $shop_id = request()->post('shop_id','');
            $goods = new GoodsService();
            $condition['goods_name'] = [
                'like',
                '%' . $sear_name . '%'
            ];
            // 排序类型
            switch ($sear_type) {
                case 1:
                    $order = 'create_time desc'; // 时间
                    break;
                case 2:
                    $order = 'sales desc'; // 销售
                    break;
                case 3:
                    $order = 'promotion_price ' . $order_state; // 促销价格
                    break;
                default:
                    $order = '';
                    break;
            }
            switch ($controlType) {
                case 1:
                    $condition = [
                        'is_new' => 1
                    ];
                    break;
                case 2:
                    $condition = [
                        'is_hot' => 1
                    ];
                    break;
                case 3:
                    $condition = [
                        'is_recommend' => 1
                    ];
                    break;
                default:
                    break;
            }
            if (! empty($shop_id)) {
                $condition['ng.shop_id'] = $shop_id;
            }
            $condition['ng.state'] = 1;
            
            $search_good_list = $goods->getGoodsList(1, 0, $condition, $order);
            return $search_good_list['data'];
        } else {
            $sear_name = request()->get('sear_name','');
            $controlType = request()->get('controlType','');// 什么类型 1最新 2精品 3推荐
            $controlTypeName = request()->get('controlTypeName','');// 什么类型 1最新 2精品 3推荐
            
            if (! empty($sear_name)) {
                $search_title = $sear_name;
            } else {
                $search_title = $controlTypeName;
            }
            if (mb_strlen($sear_name) > 10) {
                $sear_name = mb_substr($sear_name, 0, 7, 'utf-8') . '...';
            }
            $shop_id = $this->shop_id;
            $this->assign('controlType', $controlType);
            $this->assign('wherename', 'sear_name');
            $this->assign('sear_name', $sear_name);
            $this->assign('shop_id', $shop_id);
            $this->assign('search_title', $search_title);
            return view($this->style . 'Goods/goodsSearchList');
        }
    }

    /**
     * 品牌专区
     */
    public function brandlist()
    {
        $platform = new Platform();
        $goods = new GoodsService();
        // 品牌专区广告位
        $brand_adv = $platform->getPlatformAdvPositionDetail(1162);
        $this->assign('brand_adv', $brand_adv);
        
        if (request()->isAjax()) {
            $brand_id = request()->get("brand_id", "");
            
            if (! empty($brand_id)) {
                $condition['ng.brand_id'] = $brand_id;
            }
            // $goods_brand = new GoodsBrand();
            // $list = $goods_brand->getGoodsBrandList(1, '', $condition, 'sort');
            $list = $goods->getGoodsList(1, 0, $condition);
            return $list['data'];
        } else {
            $goods_category = new GoodsCategory();
            $goods_category_list_1 = $goods_category->getGoodsCategoryList(1, 0, [
                "is_visible" => 1,
                "level" => 1
            ]);
            $goods_brand = new GoodsBrand();
            $goods_brand_list = $goods_brand->getGoodsBrandList(1, 0, '', 'brand_initial asc');
            // print_r(json_encode($goods_brand_list));
            // return;
            // var_dump($goods_brand_list);
            $this->assign("goods_brand_list", $goods_brand_list['data']);
            $this->assign("goods_category_list_1", $goods_category_list_1["data"]);
            
            return view($this->style . 'Goods/brandlist');
        }
    }

    /**
     * 商品列表
     */
    public function goodsList()
    {
        // 查询购物车中商品的数量
        $uid = $this->uid;
        $goods = new GoodsService();
        $cartlist = $goods->getCart($uid);
        $this->assign('uid', $uid);
        $this->assign("carcount", count($cartlist));
        
        if (request()->isAjax()) {
            $category_id = request()->post('category_id','');// 商品分类
            $brand_id = request()->post('brand_id','');// 品牌
            $order = request()->post('order','');// 商品排序分类
            $sort = request()->post('sort','desc');// 商品排序分类
            
            switch ($order) {
                case 1: // 销量
                    $order = 'sales ';
                    break;
                case 2: // 新品
                    $order = 'is_new ';
                    break;
                case 3: // 价钱
                    $order = 'promotion_price ';
                    break;
                default:
                    $order = 'sale_date ';
                    break;
            }
            
            $orderby = ""; // 排序方式
            if ($order != "") {
                $orderby = $order . " " . $sort . ",ng.sort desc";
            } else {
                $orderby = "ng.sort desc";
            }
            
            $condition = array();
            if (! empty($category_id)) {
                $condition["ng.category_id"] = $category_id;
            } else 
                if (! empty($brand_id)) {
                    $condition["ng.brand_id"] = array(
                        "in",
                        $brand_id
                    );
                }
            $condition['ng.state'] = 1;
            $goods = new GoodsService();
            $goods_list = $goods->getGoodsList(1, 0, $condition, $orderby);
			foreach ($goods_list[data] as $key => $value) {
                $value[flag] = 0;
                if ($value[goods_id] == 3) {
                  //判断该用户是否已经购买了新手大礼包

                    $res = $goods->findOrder($value[goods_id],$uid); 
                    if ($res) {
                        $value[flag] = 1;
                    }
                }
            
            }
            return $goods_list;
        } else {
            $category_id = request()->get('category_id','');// 商品分类
            $brand_id = request()->get('brand_id','');// 品牌
            $this->assign('brand_id', $brand_id);
            $this->assign('category_id', $category_id);
            return view($this->style . 'Goods/goodsList');
        }
    }

    /**
     * 积分中心
     *
     * @return \think\response\View
     */
    public function integralCenter()
    {
        $platform = new Platform();
        // 积分中心广告位
        $discount_adv = $platform->getPlatformAdvPositionDetail(1165);
        $this->assign('discount_adv', $discount_adv);
        // 积分中心商品
        $this->goods = new GoodsService();
        $order = "";
        // 排序
        $id = request()->get('id','');
        if ($id) {
            if ($id == 1) {
                $order = "sales desc";
            } else 
                if ($id == 2) {
                    $order = "collects desc";
                } else 
                    if ($id == 3) {
                        $order = "evaluates desc";
                    } else 
                        if ($id == 4) {
                            $order = "shares desc";
                        } else {
                            $id = 0;
                            $order = "";
                        }
        } else {
            $id = 0;
        }
        
        $page_index = request()->get('page',1);
        $condition = array(
            "ng.state" => 1,
            "ng.point_exchange_type" => array(
                'NEQ',
                0
            )
        );
        $page_count = 25;
        $hotGoods = $this->goods->getGoodsList(1, 4, $condition, $order);
        $allGoods = $this->goods->getGoodsList($page_index, $page_count, $condition, $order);
        if ($page_index) {
            if (($page_index > 1 && $page_index <= $allGoods["page_count"])) {
                $page_index = 1;
            }
        }
        $this->assign("id", $id);
        $this->assign('page', $page_index);
        $this->assign("allGoods", $allGoods);
        $this->assign("hotGoods", $hotGoods);
        $this->assign('page_count', $allGoods['page_count']);
        $this->assign('total_count', $allGoods['total_count']);
        return view($this->style . 'Goods/integralCenter');
    }

    /**
     * 积分中心 全部积分商品
     *
     * @return \think\response\View
     */
    public function integralCenterList()
    {
        return view($this->style . 'Goods/integralCenterList');
    }

    /**
     * 积分中心全部商品Ajax
     */
    public function integralCenterListAjax()
    {
        $platform = new Platform();
        if (request()->isAjax()) {
            // 积分中心商品
            $this->goods = new GoodsService();
            $order = "";
            // 排序
            $id = request()->post('id','');
            if ($id) {
                if ($id == 1) {
                    $order = "sales desc";
                } else 
                    if ($id == 2) {
                        $order = "collects desc";
                    } else 
                        if ($id == 3) {
                            $order = "evaluates desc";
                        } else 
                            if ($id == 4) {
                                $order = "shares desc";
                            } else {
                                $id = 0;
                                $order = "";
                            }
            } else {
                $id = 0;
            }
            
            $page_index = request()->post('page','1');
            $condition = array(
                "ng.state" => 1,
                "ng.point_exchange_type" => array(
                    'NEQ',
                    0
                )
            );
            $page_count = 25;
            $allGoods = $this->goods->getGoodsList($page_index, $page_count, $condition, $order);
            return $allGoods['data'];
        }
    }

    /**
     * 设置点赞送积分
     */
    public function getClickPoint()
    {
        if (request()->isAjax()) {
            $shop_id = $this->instance_id;
            $uid = $this->uid;
            $goods_id = request()->post('goods_id', '');
            $goods = new GoodsService();
            $retval = 1;
            // $retval = $goods->setGoodsSpotFabulous($shop_id, $uid, $goods_id);
            return AjaxReturn($retval);
        }
    }

    /**
     * 获取商品分类下的商品
     */
    public function getCategoryChildGoods()
    {
        if (request()->isAjax()) {
            $page = request()->post("page", 1);
            $category_id = request()->post("category_id", "");
            $goods = new GoodsService();
            if ($category_id == 0) {
                $condition['ng.state'] = 1;
                $res = $goods->getGoodsList($page, 15, $condition);
                $result = $goods->getGoodsList($page, 0);
                $count = count($result['data']);
                $res['page_count'] = ceil($count / 15);
            } else {
                $condition['ng.category_id'] = $category_id;
                $condition['ng.state'] = 1;
                $res = $goods->getGoodsList($page, 15, $condition);
                $result = $goods->getGoodsList($page, 0, $condition);
                $count = count($result['data']);
                $res['page_count'] = ceil($count / 15);
            }
            return $res;
        }
    }

    /**
     * 查询商品的sku信息
     */
    public function getGoodsSkuInfo()
    {
        $goods_id = request()->post('goods_id','');
        $this->goods = new GoodsService();
        return $this->goods->getGoodsAttribute($goods_id);
    }
}