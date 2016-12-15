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
           $value="admin/classinfo/index";
           $errorCorrectionLevel = 'L';
           $matrixPointSize = 20;
           \QRcode::png($value, false, $errorCorrectionLevel, $matrixPointSize);
           exit;
       }
}

