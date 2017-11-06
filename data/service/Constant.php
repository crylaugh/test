<?php 
namespace data\service;

use data\model\ConstantModel as ConstantModel;
use data\service\Member\MemberAccount;
class Constant extends BaseService
{

    private $constant;

    function __construct()
    {
        parent::__construct();
        $this->constant = new ConstantModel();
    }

    public function getConstantInfo(){
        $res = $this->constant->select();
        return $res;
    }

    public function updateConstant($id,$arr){
        $res = $this->constant->save($arr,["id" => $id]);
        return $res;
    }
    public function getAConstant($id){
        $res = $this->constant->getInfo('id=' . $id, '*');
        return $res;
    }
    



}
?>