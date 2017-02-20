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
        if( request()->isPost() ){
//
        }
        return $this->fetch('valuablesinfo/index');
    }
    public function va(){
//        $valuablesinfo=model('Valuablesinfo')->index();
        //$search:全局查找条件
        $search= !empty($_REQUEST['search']['value']) ?  $_REQUEST['search']['value'] : '';
        //拼接查找的sql
        $like = "'%".$search."%'";
        $Where ="  ((StudentNo LIKE BINARY ".$like.") or (StudentName LIKE BINARY ".$like.") or (Sex LIKE BINARY ".$like.") or (Nationality LIKE BINARY ".$like.") or (Birthday LIKE BINARY ".$like.") or (PhoneNo LIKE BINARY ".$like.") or (Email LIKE BINARY ".$like.") or (Valuables LIKE BINARY ".$like.") or (EntranceTime LIKE BINARY ".$like."))";

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
                case 4;$orderSql = " order by Sex ".$order_dir;break;
                case 5;$orderSql = " order by Nationality ".$order_dir;break;
                case 6;$orderSql = " order by Birthday ".$order_dir;break;
                case 7;$orderSql = " order by PhoneNo ".$order_dir;break;
                case 8;$orderSql = " order by Email ".$order_dir;break;
                case 7;$orderSql = " order by Valuables ".$order_dir;break;
                case 7;$orderSql = " order by EntranceTime ".$order_dir;break;
                default;$orderSql = '';
            }
        }
        $datas = model('Valuablesinfo')->index($Where,$limitSql,$orderSql);
        //获取Datatables发送的参数 必要
        $data['draw'] = !empty($_REQUEST['draw']) ?  $_REQUEST['draw'] : 1;
        $data['recordsTotal'] = $datas['sum']['0']['sum'];
        $data['recordsFiltered'] = $datas['sum']['0']['sum'];
        $data['data'] = $datas['data'];
        echo json_encode($datas,JSON_UNESCAPED_UNICODE);
    }

/*****************************************
 * 作者：王波文
 * 时间：2017年1月16日
 *方法：贵重物品查看页面
 *****************************************/
    public function ValuablesView()
    {
        //判断为管理员动作
        if(session('type')==0){
            $where="1=1";
        }
        //判断为宿舍管理员的动作
        elseif (session('type')==1){
            $do=db('admininfo')->query("select WhichBuilding from admininfo where id=".''.session('id'));
            $where="DO.Building=".''.$do[0]['WhichBuilding'];
        }
        //判断为学生时的动作
        elseif(session('type')==3){
            $where="ST.id=".''.session('id');
        }

        $valuables=db('valuablesinfo')->query("select ST.StudentName,MA.MajorName,CL.ClassName,DO.Building,DO.Unit,DO.DormitoryNo,VA.ValuablesName,VA.RegistrationTime,VA.ValuablesId,ST.PhoneNo from valuablesinfo as VA JOIN studentinfo as ST JOIN classinfo as CL JOIN majorinfo as MA JOIN dormitoryinfo as DO where VA.Uid=ST.id and ST.CId=CL.ClassId and CL.MId=MA.MajorId and ST.DId=DO.DormitoryId and $where order by VA.RegistrationTime DESC");
        $this->assign('valuables',$valuables);
        return $this->fetch('valuablesinfo/index');
    }

    /*****************************************
     * 作者：王波文
     * 时间：2016年12月15日
     *方法：二维码展示页面
     *****************************************/
//       public function qrcode(){
//           $value="http://{$_SERVER['HTTP_HOST']}/index.php/student/Studentvaluablesinfo/index";
//           // 纠错级别：L、M、Q、H
////           L-默认：可以识别已损失的7%的数据
////           M-可以识别已损失15%的数据
////           Q-可以识别已损失25%的数据
////           H-可以识别已损失30%的数据
//           $errorCorrectionLevel = 'H';
//           // 点的大小：1到10,用于手机端4就可以了
//           $matrixPointSize = 1.4;
//           \QRcode::png($value, false, $errorCorrectionLevel, $matrixPointSize);
//           exit;
//       }


}

