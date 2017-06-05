<?php
/**
 * Created by PhpStorm.
 * User: w-pc
 * Date: 2017/02/20
 * Time: 9:56
 * 公用的方法
 * @param $status
 * @param $message
 * @param array $data
 */
function show($status, $message, $data=array()){
    $result = array(
        'status' => $status,
        'message' => $message,
        'data' => $data,
    );

    exit(json_encode($result));
}
function getMd5Password($password){
    return md5($password.C('MD5_PRE'));
}
function getLoginUsername(){
    return session('adminUser');
}
function check_verify($code, $id = ""){
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}
function get_left_menu($num){
    $left_menu = D('LeftMenu')->getAdminByLeft_Menu();
    $left_menu[$num]['show'] = 'active';
    sort($left_menu);
    return $left_menu;
}

/**
 * @param $class 设置请求类型，post，get
 * @param $type 设置参数类型，str，int
 * @param $name 设置参数名称
 * @param $default 可选参数，设置参数的默认值
 *
 */
function request($class,$type,$name,$default){
    $flag = 1;
    if($class=='get'){
        if(empty($_GET[$name])){
            $flag = 0;
        }else{
            $value = $_GET[$name];
        }
    }else{
        if(empty($_POST[$name])){
            $flag = 0;
        }else{
            $value = $_POST[$name];
        }
    }
    if($type=='str'){
        if($flag==1){
            //          $value = utf8_encode($value);
            //删除字符串两端的空白字符和其他预定义字符
            $value = trim($value);
        }else{
            $value = '';
            if(!empty($default)){
                $value = $default;
            }
        }
    }else{
        if($flag==1){
            //          $value = utf8_encode($value);
            //删除字符串两端的空白字符和其他预定义字符
            $value = trim($value);
        }else{
            $value = 0;
            if(!empty($default)){
                $value = $default;
            }
        }
    }
    return $value;
}
function set_Behavior($behavior,$content){
    $time = date("Y-m-d h:i:sa");
    $arr['behavior'] = $behavior;
    $arr['time'] = $time;
    $arr['content'] = $content;
    D('BehaviorLog')->add_Behavior($arr);
}
function start_session($expire = 0)
{
    if ($expire == 0) {
        $expire = ini_get('session.gc_maxlifetime');
    } else {
        ini_set('session.gc_maxlifetime', $expire);
    }
    if (empty($_COOKIE['PHPSESSID'])) {
        session_set_cookie_params($expire);
        session_start();
    } else {
        session_start();
        setcookie('PHPSESSID', session_id(), time() + $expire);
    }
}
function getMonthNum( $date1, $date2, $tags='-' ){
    $date1 = explode($tags,$date1);
    $date2 = explode($tags,$date2);
    return abs($date1[0] - $date2[0]) * 12 + abs($date1[1] - $date2[1]);
}