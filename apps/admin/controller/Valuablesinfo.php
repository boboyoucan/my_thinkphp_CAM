<?php
namespace app\admin\controller;
use think\Controller;
include 'public/static/phpqrcode/phpqrcode.php';
class Valuablesinfo extends Checklogin
{
/*****************************************
 * 作者：王波文
 * 时间：2017年1月15日
 *方法：贵重物品登记管理页面
 *****************************************/
    public function index()
    {
        return $this->fetch('valuablesinfo/index');
    }
    /*****************************************
     * 作者：王波文
     * 时间：2017年2月21日
     *方法：贵重物品登记管理datatable处理
     *****************************************/
    public function IndexTable(){
        //$search:全局查找条件
        $search= !empty($_REQUEST['search']['value']) ?  $_REQUEST['search']['value'] : '';
        //拼接查找的sql
        $like = "'%".$search."%'";
        $Where ="  ((StudentNo LIKE BINARY ".$like.") or (StudentName LIKE BINARY ".$like.") or (MajorName LIKE BINARY ".$like.") or (Building LIKE BINARY ".$like.") or (ValuablesName LIKE BINARY ".$like.") or (PhoneNo LIKE BINARY ".$like.") or (RegistrationTime LIKE BINARY ".$like."))";

        //分页$start:数据开始;$length:数据长度
        $start = $_REQUEST['start'];//从多少开始
        $length = $_REQUEST['length'];//数据长度
        $limitSql = '';
        $limitFlag = isset($_REQUEST['start']) && $length != -1 ;
        if ($limitFlag ) {
            //intval函数将变量转成整数类型
            $limitSql = " LIMIT ".intval($start).", ".intval($length);
        }

        //排序
        $order_column = $_REQUEST['order']['0']['column'];//哪一列排序，从0开始
        $order_dir = $_REQUEST['order']['0']['dir'];//ase desc 升序或者降序
        //拼接排序sql
        $orderSql = "";
        if(isset($order_column)){
            $i = intval($order_column);
            switch($i){
                case 2;$orderSql = " order by StudentNo ".$order_dir;break;
                case 3;$orderSql = " order by StudentName ".$order_dir;break;
                case 4;$orderSql = " order by MajorName ".$order_dir;break;
                case 5;$orderSql = " order by Building ".$order_dir;break;
//                case 6;$orderSql = " order by ValuablesName ".$order_dir;break;
                case 7;$orderSql = " order by PhoneNo ".$order_dir;break;
                case 8;$orderSql = " order by RegistrationTime ".$order_dir;break;
                default;$orderSql = '';
            }
        }
        $datas = model('Valuablesinfo')->index($Where,$limitSql,$orderSql);
        //获取Datatables发送的参数 必要
        $data['draw'] = !empty($_REQUEST['draw']) ?  $_REQUEST['draw'] : 1;
        $data['recordsTotal'] = $datas['sum']['0']['sum'];
        $data['recordsFiltered'] = $datas['sum']['0']['sum'];
        $data['data'] = $datas['data'];
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
    }

/*****************************************
 * 作者：王波文
 * 时间：2017年1月16日
 *方法：贵重物品查看页面
 *****************************************/
    public function ValuablesView()
    {
        return $this->fetch('view');
    }
/*****************************************
 * 作者：王波文
 * 时间：2017年2月21日
 *方法：贵重物品查看datatable处理
 *****************************************/
    public function ViewTable(){
        //$search:全局查找条件
        $search= !empty($_REQUEST['search']['value']) ?  $_REQUEST['search']['value'] : '';
        //拼接查找的sql
        $like = "'%".$search."%'";
        $Where ="  ((StudentNo LIKE BINARY ".$like.") or (StudentName LIKE BINARY ".$like.") or (MajorName LIKE BINARY ".$like.") or (Building LIKE BINARY ".$like.") or (PhoneNo LIKE BINARY ".$like."))";
        //分页$start:数据开始;$length:数据长度
        $start = $_REQUEST['start'];//从多少开始
        $length = $_REQUEST['length'];//数据长度
        $limitSql = '';
        $limitFlag = isset($_REQUEST['start']) && $length != -1 ;
        if ($limitFlag ) {
            //intval函数将变量转成整数类型
            $limitSql = " LIMIT ".intval($start).", ".intval($length);
        }
        //排序
        $order_column = $_REQUEST['order']['0']['column'];//哪一列排序，从0开始
        $order_dir = $_REQUEST['order']['0']['dir'];//ase desc 升序或者降序
        //拼接排序sql
        $orderSql = "";
        if(isset($order_column)){
            $i = intval($order_column);
            switch($i){
                case 2;$orderSql = " order by StudentNo ".$order_dir;break;
                case 3;$orderSql = " order by StudentName ".$order_dir;break;
                case 4;$orderSql = " order by MajorName ".$order_dir;break;
                case 5;$orderSql = " order by Building ".$order_dir;break;
                case 6;$orderSql = " order by PhoneNo ".$order_dir;break;
                default;$orderSql = '';
            }
        }
        $datas = model('Valuablesinfo')->ViewTable($Where,$limitSql,$orderSql);
        //获取Datatables发送的参数 必要
        $data['draw'] = !empty($_REQUEST['draw']) ?  $_REQUEST['draw'] : 1;
        $data['recordsTotal'] = $datas['sum']['0']['sum'];
        $data['recordsFiltered'] = $datas['sum']['0']['sum'];
        $data['data'] = $datas['data'];
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
    }

    /*****************************************
     * 作者：王波文
     * 时间：2016年2月21日
     *方法：二维码扫码二维码图像页面
     *****************************************/
    public function ValuablesRegistr(){

        return $this->fetch("valuablesregistr");
    }


    /*****************************************
     * 作者：王波文
     * 时间：2016年12月15日
     *方法：二维码展示页面
     *****************************************/
       public function qrcode(){
           $value="http://{$_SERVER['HTTP_HOST']}/student/Studentvaluablesinfo/index";
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

