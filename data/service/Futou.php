<?php 
namespace data\service;

use data\model\FutouModel as FutouModel;
use data\service\Member\MemberAccount;
class Futou extends BaseService
{

    private $futou;

    function __construct()
    {
        parent::__construct();
        $this->futou = new FutouModel();
    }

    public function addFuTou($uid){
    	$data = array(
            'uid' => $uid,
            'max_ji' => 1,
            'present_ji' => 1
        );
        $result = $this->futou->save($data);
    }

    public function getInfoById($uid){
        $res = $this->futou->getInfo('uid=' . $uid, '*');
        return $res;
    }

    public function fuTouShengJi($uid,$sign=1){
        $res = $this->futou->getInfo('uid=' . $uid, '*');
        if ($sign) {
            $data = array(
                'uid' => $uid,
                'max_ji' => ($res['max_ji']+1),
                'present_ji' => ($res['present_ji']+1)
            );
        }else{
            $data = array(
                'uid' => $uid,
                'reduce_ji' => ($res['reduce_ji']+1),
                'present_ji' => ($res['present_ji']-1)
            );
        }
        
        $result = $this->futou->save($data,['uid'=>$uid]);
        return $result;
    }



}
?>