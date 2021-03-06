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
        $where['u_id'] = $id;
//        $result = $this->_db->where('id=',$id)->find();
        $result = $this->_db->where($where)->find();
        return $result;
    }
    public function getAdminByUsername($username='') {
        $res = $this->_db->where('username="'.$username.'"')-> find();
        return $res;
    }
    public function getAdminByMobile($mobile='') {
        $res = $this->_db->where('mobile="'.$mobile.'"')-> find();
        return $res;
    }
    public function set_Info($insert_arr){
        $insert_arr['balance'] = 50;
        $this->_db->add($insert_arr);
    }
    public function get_Balance($u_id){
        $result = $this->get_Info($u_id);
        return $result['balance'];
    }
    public function set_Balance($u_id,$p_money){
        $result = $this->get_Info($u_id);
        $result['balance'] = $result['balance'] - $p_money;
        $where['u_id'] = $u_id;
        $this->_db->where($where)->save($result);
    }
    public function get_UserList(){
        $result = $this->_db->where()->select();
        return $result;
    }
    public function update_Info($data,$u_id){
        $where['u_id']= $u_id;
        $this->_db->where($where)->save($data);
    }
    public function get_PhotoList(){
        $photo_list = $this->_db->field('photo')->limit('9')->select();
        return $photo_list;
    }
}