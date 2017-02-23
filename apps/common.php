<?php

// 应用公共文件
function info($msg = '', $code = '', $url = '',  $data = '', $wait = 3 )
{
    if (is_numeric($msg)) {
        $code = $msg;
        $msg  = '';
    }
    if (is_null($url) && isset($_SERVER["HTTP_REFERER"])) {
        $url = $_SERVER["HTTP_REFERER"];
    } elseif ('' !== $url) {
        $url = preg_match('/^(https?:|\/)/', $url) ? $url : Url::build($url);
    }
    $result = [
        'code' => $code,
        'msg'  => $msg,
        'data' => $data,
        'url'  => $url,
        'wait' => $wait,
    ];
    return $result;
//    return json_encode($result,JSON_UNESCAPED_UNICODE);
//    exit;

}
function CheckRole(){
    //判断为管理员动作
    if(session('type')==0){
        return "1=1";
    }
    //判断为宿舍管理员的动作
    elseif (session('type')==1){
        $do=db('admininfo')->query("select WhichBuilding from admininfo where AdminId=".''.session('id'));
        return "DO.Building=".''.$do[0]['WhichBuilding'];
    }
    //判断为学生时的动作
    elseif(session('type')==3){
        return "ST.id=".''.session('id');
    }
}

