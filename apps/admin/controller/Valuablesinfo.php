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

    /*****************************************
     * 作者：王波文
     * 时间：2016年12月15日
     *方法：二维码展示页面
     *****************************************/
       public function qrcode(){
           $value="http://{$_SERVER['HTTP_HOST']}/index.php/student/Studentvaluablesinfo/index";
           // 纠错级别：L、M、Q、H
//           L-默认：可以识别已损失的7%的数据
//           M-可以识别已损失15%的数据
//           Q-可以识别已损失25%的数据
//           H-可以识别已损失30%的数据
           $errorCorrectionLevel = 'H';
           // 点的大小：1到10,用于手机端4就可以了
           $matrixPointSize = 1.4;
           \QRcode::png($value, false, $errorCorrectionLevel, $matrixPointSize);
           exit;
       }

}

