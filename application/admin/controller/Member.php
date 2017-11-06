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
namespace app\admin\controller;

use data\service\Member as MemberService;
use data\service\User;
use data\service\Weixin;
use data\service\Supplier;

/**
 * 会员管理
 *
 * @author Administrator
 *        
 */
class Member extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 会员列表主页
     *
     * @return Ambigous <\think\response\View, \think\response\$this, \think\response\View>
     */
    public function memberList()
    {
        $member = new MemberService();
        if (request()->isAjax()) {
            $page_index = request()->post("page_index", 1);
            $page_size = request()->post('page_size', PAGESIZE);
            $search_text = request()->post('search_text', '');
            $level_id = request()->post('levelid', - 1);
            $condition = [
                'su.is_member' => 1,
                'su.nick_name|su.user_tel|su.user_email' => array(
                    'like',
                    '%' . $search_text . '%'
                ),
                
                'su.is_system' => 0
            ];
            if ($level_id != - 1) {
                $condition['nml.level_id'] = $level_id;
            }
            $list = $member->getMemberList($page_index, $page_size, $condition, 'su.reg_time desc');
            
            return $list;
        } else {
            // 查询会员等级
            $list = $member->getMemberLevelList(1, 0);
            $this->assign('level_list', $list);
            return view($this->style . 'Member/memberList');
        }
    }
    /**
     * 团队列表
     */
    public function teamList()
    {
        $member = new MemberService();
        if (request()->isAjax()) {
            $page_index = request()->post("page_index", 1);
            $page_size = request()->post('page_size', PAGESIZE);
            $search_text = request()->post('search_text', '');
            $level_id = request()->post('levelid', - 1);
            $condition = [
                'su.is_member' => 1,
                'su.nick_name|su.user_tel|su.user_email' => array(
                    'like',
                    '%' . $search_text . '%'
                ),
                
                'su.is_system' => 0
            ];
            if ($level_id != - 1) {
                $condition['nml.level_id'] = $level_id;
            }
            $list = $member->getMemberTeamList($page_index, $page_size, $condition, 'su.reg_time desc');
            
            return $list;
        } else {
            // 查询会员等级
            $list = $member->getMemberLevelList(1, 0);
            $this->assign('level_list', $list);
            return view($this->style . 'Member/teamList');
        }
    }


    /**
     * 查询单个 会员
     *
     * @return multitype:unknown
     */
    public function getMemberDetail()
    {
        $user = new User();
        $uid = request()->post("uid", 0);
        $info = $user->getUserInfoDetail($uid);
        if ($info['par_tel']) {
            $res = $user->getUserInfoByUid($info['par_tel']);
            $info['par_tel'] = $res['user_tel'];
        }
        
        return $info;
    }

    /**
     * 修改会员
     */
    public function updateMember()
    {
        if (request()->isAjax()) {
            $member = new MemberService();
            $uid = request()->post('uid', '');
            $user_tel = request()->post('user_tel', '');
            $member_level = request()->post('level_name', '');
            $tuijian = request()->post('tuijian', '');
            $real_name = request()->post('real_name', '');
            $sex = request()->post('sex', '');
            $status = request()->post('status', '');
            $info =  $member->getUserInfoByUid($uid);
            if (!$user_tel == $info['user_tel']) {
                $rr = $member->getbyUsertel($user_tel);
                if ($rr) {
                    return AjaxReturn(0,'已存在手机号');
                }
            }
            if ($tuijian == $info['user_tel']) {
                return AjaxReturn(0,'推荐人错误');
            }
            if ($tuijian) {
                $aa = $member->getAUser($tuijian);
                $tuijian = $aa['uid'];
            }
            $res = $member->updateMemberByAdmin($uid, $user_tel, $email, $sex, $status, $user_tel, $user_tel, $member_level, $tuijian, $real_name);
            if ($res) {
                return AjaxReturn($res);
            }
            return AjaxReturn($res,'修改失败');
        }
    }

    /**
     * 修改密码
     */
    public function updateMemberPassword()
    {
        $user = new User();
        $userid = request()->post('uid', '');
        $password = request()->post('user_password', '');
        $result = $user->updateUserInfoByUserid($userid, $password);
        return AjaxReturn($result);
    }

    /**
     * 删除 会员
     *
     * @return multitype:unknown
     */
    public function deleteMember()
    {
        $member = new MemberService();
        $uid = request()->post("uid", 0);
        $res = $member->deleteMember($uid);
        return AjaxReturn($res);
    }

    /**
     * 获取数据库中用户列表
     */
    public function check_username()
    {
        if (request()->isAjax()) {
            // 获取数据库中的用户列表
            $username = request()->get('username','');
            $exist = false;
            $member = new MemberService();
            $user_list = $member->getMemberList();
            foreach ($user_list["data"] as $user_list2) {
                if ($user_list2["user_name"] == $username) {
                    $exist = true;
                }
            }
            return $exist;
        }
    }

    public function check_user_tel()
    {
        if (request()->isAjax()) {
            // 获取数据库中的用户列表
            $user_tel = request()->get('user_tel','');
            $exist = false;
            $member = new MemberService();
            $user_list = $member->getMemberList();
            foreach ($user_list["data"] as $user_list2) {
                if ($user_list2["user_tel"] == $user_tel) {
                    $exist = true;
                }
            }
            return $exist;
        }
    }

    public function checkTuiJian()
    {
        if (request()->isAjax()) {
            $tuijian = request()->get('tuijian','');
            $member = new MemberService();
            $res = $member->getbytel($tuijian);
            
            return $res;
        }
    }

    /**
     * 添加会员信息
     */
    public function addMember()
    {   
        $member = new MemberService();
        $real_name = request()->post('real_name', '');
        $tuijian = request()->post('tuijian', '');
        $res = $member->getAUser($tuijian);
        $tuijian = $res['uid'];
        $password = request()->post('password', '');
        $member_level = request()->post('level_name', '');
        $mobile = request()->post('user_tel', '');
        $sex = request()->post('sex', '');
        $status = request()->post('status', '');

        $retval = $member->addMember($mobile, $password, '', $sex, $status, $mobile, $member_level, $tuijian, $real_name);
        return AjaxReturn($retval);
    }

    /**
     * 会员积分明细
     */
    public function pointdetail()
    {
        if (request()->isAjax()) {
            $page_index = request()->post("page_index", 1);
            $page_size = request()->post('page_size', PAGESIZE);
            $member_id = request()->post('member_id', '');
            $search_text = request()->post('search_text');
            $start_date = request()->post('start_date') == "" ? 0 : request()->post('start_date');
            $end_date = request()->post('end_date') == "" ? 0 : request()->post('end_date');
            $condition['nmar.uid'] = $member_id;
            $condition['nmar.account_type'] = 1;
            if($start_date != 0 && $end_date != 0){
                $condition["nmar.create_time"] = [
                    [
                        ">",
                        getTimeTurnTimeStamp($start_date)
                    ],
                    [
                        "<",
                        getTimeTurnTimeStamp($end_date)
                    ]
                ];
            }elseif($start_date != 0 && $end_date == 0){
                $condition["nmar.create_time"] = [
                    [
                        ">",
                        getTimeTurnTimeStamp($start_date)
                    ]
                ];
            }elseif($start_date == 0 && $end_date != 0){
                $condition["nmar.create_time"] = [
                    [
                        "<",
                        getTimeTurnTimeStamp($end_date)
                    ]
                ];
            }
            $condition['su.nick_name'] = [
                'like',
                '%' . $search_text . '%'
            ];
            
            $member = new MemberService();
            $list = $member->getPointList($page_index, $page_size, $condition, $order = '', $field = '*');
            return $list;
        }
        $member_id = request()->get('member_id','');
        $this->assign('member_id', $member_id);
        return view($this->style . 'Member/pointDetailList');
    }

     public function teamSon()
    {
        $id = request()->get('member_id','');

        $member = new MemberService();
        $son1 = $member->getSon($id);
        $this->assign("son1",$son1);

        $son2 = $member->getSonTwo($id);
        $this->assign("son2",$son2);
        
        $son3 = $member->getSonThree($id);
        $this->assign("son3",$son3);
        $info = $member->getUserInfoByUid($id);
        $this->assign("info",$info);
        return view($this->style . 'Member/teamSon');
    }

    /**
     * 会员积分管理
     */
    public function pointlist()
    {
        if (request()->isAjax()) {
            $page_index = request()->post("page_index", 1);
            $page_size = request()->post('page_size', PAGESIZE);
            $search_text = request()->post('search_text', '');
            $form_type = request()->post('form_type');
            $start_date = request()->post('start_date') == "" ? 0 : request()->post('start_date');
            $end_date = request()->post('end_date') == "" ? 0 : request()->post('end_date');
            $condition['nmar.account_type'] = 1;
            if ($form_type != '') {
                $condition['nmar.from_type'] = $form_type;
            }
            if($start_date != 0 && $end_date != 0){
                $condition["nmar.create_time"] = [
                    [
                        ">",
                        getTimeTurnTimeStamp($start_date)
                    ],
                    [
                        "<",
                        getTimeTurnTimeStamp($end_date)
                    ]
                ];
            }elseif($start_date != 0 && $end_date == 0){
                $condition["nmar.create_time"] = [
                    [
                        ">",
                        getTimeTurnTimeStamp($start_date)
                    ]
                ];
            }elseif($start_date == 0 && $end_date != 0){
                $condition["nmar.create_time"] = [
                    [
                        "<",
                        getTimeTurnTimeStamp($end_date)
                    ]
                ];
            }
            $condition['su.nick_name'] = [
                'like',
                '%' . $search_text . '%'
            ];
            
            $member = new MemberService();
            $list = $member->getPointList($page_index, $page_size, $condition, $order = '', $field = '*');
            return $list;
        }
        return view($this->style . 'Member/pointList');
    }

    /**
     * 会员余额明细
     */
    public function accountdetail()
    {
        if (request()->isAjax()) {
            $member = new MemberService();
            $page_index = request()->post("page_index", 1);
            $page_size = request()->post('page_size', PAGESIZE);
            $member_id = request()->post('member_id');
            $search_text = request()->post('search_text');
            $start_date = request()->post('start_date') == "" ? 0 : request()->post('start_date');
            $end_date = request()->post('end_date') == "" ? 0 : request()->post('end_date');
            $condition['nmar.uid'] = $member_id;
            $condition['nmar.account_type'] = 2;
            if($start_date != 0 && $end_date != 0){
                $condition["nmar.create_time"] = [
                    [
                        ">",
                        getTimeTurnTimeStamp($start_date)
                    ],
                    [
                        "<",
                        getTimeTurnTimeStamp($end_date)
                    ]
                ];
            }elseif($start_date != 0 && $end_date == 0){
                $condition["nmar.create_time"] = [
                    [
                        ">",
                        getTimeTurnTimeStamp($start_date)
                    ]
                ];
            }elseif($start_date == 0 && $end_date != 0){
                $condition["nmar.create_time"] = [
                    [
                        "<",
                        getTimeTurnTimeStamp($end_date)
                    ]
                ];
            }
            $condition['su.nick_name'] = [
                'like',
                '%' . $search_text . '%'
            ];
            
            $list = $member->getAccountList($page_index, $page_size, $condition, $order = '', $field = '*');
            return $list;
        }
        $member_id = request()->get('member_id','');
        $this->assign('member_id', $member_id);
        return view($this->style . 'Member/accountDetailList');
    }

    /**
     * 会员余额管理
     */
    public function accountlist()
    {
        if (request()->isAjax()) {
            $member = new MemberService();
            $page_index = request()->post("page_index", 1);
            $page_size = request()->post('page_size', PAGESIZE);
            $search_text = request()->post('search_text', '');
            $form_type = request()->post('form_type');
            $start_date = request()->post('start_date') == "" ? 0 : request()->post('start_date');
            $end_date = request()->post('end_date') == "" ? 0 : request()->post('end_date');
            
            $condition['nmar.account_type'] = 2;
            $condition['su.nick_name'] = [
                'like',
                '%' . $search_text . '%'
            ];
        if($start_date != 0 && $end_date != 0){
                $condition["nmar.create_time"] = [
                    [
                        ">",
                        getTimeTurnTimeStamp($start_date)
                    ],
                    [
                        "<",
                        getTimeTurnTimeStamp($end_date)
                    ]
                ];
            }elseif($start_date != 0 && $end_date == 0){
                $condition["nmar.create_time"] = [
                    [
                        ">",
                        getTimeTurnTimeStamp($start_date)
                    ]
                ];
            }elseif($start_date == 0 && $end_date != 0){
                $condition["nmar.create_time"] = [
                    [
                        "<",
                        getTimeTurnTimeStamp($end_date)
                    ]
                ];
            }
            if ($form_type != '') {
                $condition['nmar.from_type'] = $form_type;
            }
            $list = $member->getAccountList($page_index, $page_size, $condition, $order = '', $field = '*');
            return $list;
        }
        
        return view($this->style . 'Member/accountList');
    }

    /**
     * 用户锁定
     */
    public function memberLock()
    {
        $uid = request()->post('id','');
        $retval = 0;
        if (! empty($uid)) {
            $member = new MemberService();
            $retval = $member->userLock($uid);
        }
        return AjaxReturn($retval);
    }

    /**
     * 用户解锁
     */
    public function memberUnlock()
    {
        $uid = request()->post('id','');
        $retval = 0;
        if (! empty($uid)) {
            $member = new MemberService();
            $retval = $member->userUnlock($uid);
        }
        return AjaxReturn($retval);
    }

    /**
     * 粉丝列表
     *
     * @return multitype:number unknown |Ambigous <\think\response\View, \think\response\$this, \think\response\View>
     */
    public function weixinFansList()
    {
        if (request()->isAjax()) {
            $page_index = request()->post("page_index", 1);
            $page_size = request()->post('page_size', PAGESIZE);
            $search_text = request()->post('search_text','');
            $condition = array(
                'nickname_decode' => array(
                    'like',
                    '%' . $search_text . '%'
                )
            );
            $weixin = new Weixin();
            $list = $weixin->getWeixinFansList($page_index, $page_size, $condition);
            return $list;
        } else {
            return view($this->style . 'Member/weixinFansList');
        }
    }

    /**
     * 积分、余额调整
     */
    public function addMemberAccount()
    {
        $member = new MemberService();
        $uid = request()->post('id','');
        $type = request()->post('type','');
        $num = request()->post('num','');
        $text = request()->post('text','');
        $retval = $member->addMemberAccount(0, $type, $uid, $num, $text);
        return AjaxReturn($retval);
    }

    /**
     * 会员等级列表
     */
    public function memberLevelList()
    {
        $member = new MemberService();
        if (request()->isAjax()) {
            $page_index = request()->post("page_index", 1);
            $page_size = request()->post('page_size', PAGESIZE);
            $list = $member->getMemberLevelList($page_index, $page_size);
            return $list;
        }
        return view($this->style . 'Member/memberLevelList');
    }

    /**
     * 添加会员等级
     */
    public function addMemberLevel()
    {
        $member = new MemberService();
        if (request()->isAjax()) {
            $level_name = request()->post("level_name", '');
            $min_integral = request()->post("min_integral", '');
            $quota = request()->post("quota", '');
            $upgrade = request()->post("upgrade", '');
            $goods_discount = request()->post("goods_discount", '');
            $desc = request()->post("desc", '');
            $relation = request()->post("relation", '');
            $res = $member->addMemberLevel($this->instance_id, $level_name, $min_integral, $quota, $upgrade, $goods_discount, $desc, $relation);
            return AjaxReturn($res);
        }
        return view($this->style . 'Member/addMemberLevel');
    }

    /**
     * 修改会员等级
     */
    public function updateMemberLevel()
    {
        $member = new MemberService();
        if (request()->isAjax()) {
            $level_id = request()->post("level_id", 0);
            $level_name = request()->post("level_name", '');
            $min_integral = request()->post("min_integral", '');
            $quota = request()->post("quota", '');
            $upgrade = request()->post("upgrade", '');
            $goods_discount = request()->post("goods_discount", '');
            $desc = request()->post("desc", '');
            $relation = request()->post("relation", '');
            $res = $member->updateMemberLevel($level_id, $this->instance_id, $level_name, $min_integral, $quota, $upgrade, $goods_discount, $desc, $relation);
            return AjaxReturn($res);
        }
        $level_id = request()->get("level_id", 0);
        $info = $member->getMemberLevelDetail($level_id);
        $this->assign('info', $info);
        return view($this->style . 'Member/updateMemberLevel');
    }

    /**
     * 删除 会员等级
     *
     * @return multitype:unknown
     */
    public function deleteMemberLevel()
    {
        $member = new MemberService();
        $level_id = request()->post("level_id", 0);
        $res = $member->deleteMemberLevel($level_id);
        return AjaxReturn($res);
    }

    /**
     * 修改 会员等级 单个字段
     *
     * @return multitype:unknown
     */
    public function modityMemberLevelField()
    {
        $member = new MemberService();
        $level_id = request()->post("level_id", 0);
        $field_name = request()->post("field_name", '');
        $field_value = request()->post("field_value", '');
        $res = $member->modifyMemberLevelField($level_id, $field_name, $field_value);
        return AjaxReturn($res);
    }

    /**
     * 会员提现列表
     */
    public function userCommissionWithdrawList()
    {
        if (request()->isAjax()) {
            $member = new MemberService();
            $pageindex = request()->post('pageIndex','');
            $user_phone = request()->post('user_phone','');
            if ($user_phone != "") {
                $condition["mobile"] = array(
                    "like",
                    "" . $user_phone . "%"
                );
            }
            $uid_string = "";
            $where = array();
            if ($user_phone != "") {
                $where["nick_name"] = array(
                    "like",
                    "%" . $user_phone . "%"
                );
            }
            if (! empty($where)) {
                $uid_string = $this->getUserUids($where);
                if ($uid_string != "") {
                    $condition["uid"] = array(
                        "in",
                        $uid_string
                    );
                } else {
                    $condition["uid"] = 0;
                }
            }
            $condition["shop_id"] = $this->instance_id;
            $list = $member->getMemberBalanceWithdraw($pageindex, PAGESIZE, $condition, 'ask_for_date desc');
            return $list;
        } else {
            return view($this->style . "Member/userCommissionWithdrawList");
        }
    }

    /**
     * 用户提现审核
     *
     * @return Ambigous <multitype:unknown, multitype:unknown unknown string >
     */
    public function userCommissionWithdrawAudit()
    {
        $id = request()->post('id','');
        $status = request()->post('status','');
        $member = new MemberService();
        $retval = $member->MemberBalanceWithdrawAudit($this->instance_id, $id, $status);
        return AjaxReturn($retval);
    }

    /**
     * 拒绝提现请求
     *
     * @return Ambigous <multitype:unknown, multitype:unknown unknown string >
     */
    public function userCommissionWithdrawRefuse()
    {
        $id = request()->post('id','');
        $status = request()->post('status','');
        $remark = request()->post('remark','');
        $member = new MemberService();
        $retval = $member->userCommissionWithdrawRefuse($this->instance_id, $id, $status, $remark);
        return AjaxReturn($retval);
    }

    /**
     * 查寻符合条件的数据并返回id （多个以“,”隔开）
     *
     * @param unknown $condition            
     * @return string
     */
    public function getUserUids($condition)
    {
        $member = new MemberService();
        $list = $member->getMemberAll($condition);
        $uid_string = "";
        foreach ($list as $k => $v) {
            $uid_string = $uid_string . "," . $v["uid"];
        }
        if ($uid_string != "") {
            $uid_string = substr($uid_string, 1);
        }
        return $uid_string;
    }

    /**
     * 获取提现详情
     *
     * @return unknown
     */
    public function getWithdrawalsInfo()
    {
        $id = request()->post('id','');
        $member = new MemberService();
        $retval = $member->getMemberWithdrawalsDetails($id);
        return $retval;
    }
    /**
     * 供货商列表
     */
    public function supplierList(){
        $supplier = new Supplier();
        if(request()->isAjax()){
            $page_index = request()->post("page_index", 1);
            $page_size = request()->post('page_size', PAGESIZE);
            $search_text = request()->post('search_text', '');
            $condition['supplier_name'] = array('like', '%'.$search_text.'%');
            $list = $supplier->getSupplierList($page_index, $page_size, $condition);
            return $list;
        }
        return view($this->style.'Member/supplierList');
    }
    /**
     * 添加供货商
     * @return multitype:unknown
     */
    public function addSupplier(){
        $supplier = new Supplier();
        if(request()->isAjax()){
            $uid = request()->post('uid', 0);
            $supplier_name = request()->post('supplier_name', '');
            $linkman_name = request()->post('linkman_name', '');
            $linkman_tel = request()->post('linkman_tel', '');
            $linkman_address = request()->post('linkman_address', '');
            $desc = request()->post('desc', '');
            $res = $supplier->addSupplier($uid, $supplier_name, $linkman_name, $linkman_tel, $linkman_address, $desc);
            return AjaxReturn($res);
        }
        return view($this->style.'Member/addSupplier');
    }
    /**
     * 修改代理商
     * @return multitype:unknown
     */
    public function updateSupplier(){
        $supplier = new Supplier();
        if(request()->isAjax()){
            $supplier_id = request()->post('supplier_id', 0);
            $supplier_name = request()->post('supplier_name', '');
            $linkman_name = request()->post('linkman_name', '');
            $linkman_tel = request()->post('linkman_tel', '');
            $linkman_address = request()->post('linkman_address', '');
            $desc = request()->post('desc', '');
            $res = $supplier->updateSupplier($supplier_id, $supplier_name, $linkman_name, $linkman_tel, $linkman_address,  $desc);
            return AjaxReturn($res);
        }
        $supplier_id = request()->get('supplier_id', 0);
        $info = $supplier->getSupplierInfo($supplier_id);
        $this->assign('supplier_id', $supplier_id);
        $this->assign('info', $info);
        return view($this->style.'Member/updateSupplier');
    }
    /**
     * 删除代理商
     * @return multitype:unknown
     */
    public function deleteSupplier(){
        $supplier = new Supplier();
        $supplier_id_array = request()->post('supplier_id', 0);
        $res = $supplier->deleteSupplier($supplier_id_array);
        return AjaxReturn($res);
    }
    
    /**
     * 订单数据excel导出
     */
    public function memberDataExcel(){
        $xlsName  = "会员数据列表";
        $xlsCell  = array(
            array('user_name','用户名'),
            array('nick_name','昵称'),
            array('user_tel','手机'),
            array('user_email','邮箱'),
            array('level_name','会员等级'),
            array('point','积分'),
            array('balance','账户余额'),
            array('reg_time','注册时间'),
            array('current_login_time','最后登录时间'),
        );
        $search_text = request()->get('search_text', '');
        $level_id = request()->get('levelid', -1);
        $condition = [
            'su.is_member' => 1,
            'su.nick_name|su.user_tel|su.user_email' => array(
                'like',
                '%' . $search_text . '%'
            ),
        
            'su.is_system' => 0
        ];
        if ($level_id != - 1) {
            $condition['nml.level_id'] = $level_id;
        }
        $member = new MemberService();
        $list = $member->getMemberList(1, 0, $condition, 'su.reg_time desc');
        $list = $list["data"];
        foreach($list as $k=>$v){
            $list[$k]["reg_time"] = getTimeStampTurnTime($v["reg_time"]);
            $list[$k]["current_login_time"] = getTimeStampTurnTime($v["current_login_time"]);
        }
        dataExcel($xlsName,$xlsCell,$list);
    }
}