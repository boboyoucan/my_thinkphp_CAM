<?php
namespace app\admin\controller;
use think\Controller;
class Repairinfo extends Checklogin
{
    public function index()
    {
        return $this->fetch('index');

    }
    public function Repair(){
        //$search:全局查找条件
        $search= !empty($_REQUEST['search']['value']) ?  $_REQUEST['search']['value'] : '';
        //拼接查找的sql
        $like = "'%".$search."%'";
        $Where ="  ((StudentNo LIKE BINARY ".$like.") or (StudentName LIKE BINARY ".$like.") or (Building LIKE BINARY ".$like.") or (Unit LIKE BINARY ".$like.") or (DormitoryNo LIKE BINARY ".$like.") or (ST.PhoneNo LIKE BINARY ".$like.") or (RepairContent LIKE BINARY ".$like.") or (RepairTime LIKE BINARY ".$like."))";
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
        $datas = model('Repairinfo')->Repair($Where,$limitSql,$orderSql);
        //获取Datatables发送的参数 必要
        $data['draw'] = !empty($_REQUEST['draw']) ?  $_REQUEST['draw'] : 1;
        $data['recordsTotal'] = $datas['sum']['0']['sum'];
        $data['recordsFiltered'] = $datas['sum']['0']['sum'];
        $data['data'] = $datas['data'];
        echo json_encode($data,JSON_UNESCAPED_UNICODE);

    }
    public function Check($Id = 0){
        $Id =intval($Id);
        if(empty($Id)){
            return info('数据id异常',0);
        }
        if(request()->isPost()){
            $datas = model('Repairinfo')->Check();
            return $datas;
        }
        $da=db('repairinfo')->where('RepairId',$Id)->find();
        $data['RepairId']=$da['RepairId'];
        $data['CheckState']= $da['CheckState'];
        $data['CheckSuggest']=$da['CheckSuggest'];
        $this->assign('data',$data);
        return $this->fetch("check");

    }
}

