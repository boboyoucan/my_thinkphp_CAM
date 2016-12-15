<?php
namespace app\admin\controller;
use think\Controller;
include 'public/static/phpqrcode/phpqrcode.php';
class Valuablesinfo extends Controller
{
    public function index()
    {
        //判断是否登录
        if(session('name')=='' || session('type')=='') {
            $this->redirect('index/index/index');
        }
//        $value='http://www.myweb.com';
//        $errorCorrectionLevel = 'L';
//        $matrixPointSize = 16;
//        \QRcode::png($value, false, $errorCorrectionLevel, $matrixPointSize);
//        exit;
        return $this->fetch('valuablesinfo/index');
       }
       public function qrcode(){
           $value="http://{$_SERVER['HTTP_HOST']}/index.php/admin/index/index";
           // 纠错级别：L、M、Q、H
           $errorCorrectionLevel = 'L';
           // 点的大小：1到10,用于手机端4就可以了
           $matrixPointSize = 7;
           \QRcode::png($value, false, $errorCorrectionLevel, $matrixPointSize);
           exit;
       }
}

