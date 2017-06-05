<?php

/**
 * Created by PhpStorm.
 * User: Rain
 * Date: 2017/5/20
 * Time: 13:54
 */
namespace Common\Model;
use Think\Model;

class LoginModel extends Model{
    private $_db = '';

    public function __construct() {
        $this->_db = M('user');
    }
    /**获取单个密码
     * @param $id 单个密码的id
     * @return mixed
     */
    public function get_Info($id){
        $where['id'] = $id;
//        $result = $this->_db->where('id=',$id)->find();
        $result = $this->_db->where($where)->find();
        return $result;
    }
    public function getAdminByUsername($username='') {
        $res = $this->_db->where('username="'.$username.'"')-> find();
        return $res;
    }
    public function set_Info($insert_arr){
        $this->_db->add($insert_arr);
    }
}