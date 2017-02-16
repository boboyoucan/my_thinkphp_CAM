<?php
namespace app\admin\controller;
use think\Controller;
class  Rolemanagement extends Checklogin

{
    /*****************************************
     * 作者：王波文
     * 时间：2017年1月25日
     *方法：角色管理首页
     *****************************************/
    public function index()
    {
        return $this->fetch('index');
    }
    /*****************************************
     * 作者：王波文
     * 时间：2017年2月16日
     *方法：角色管理首页数据bootstrap table 显示
     *****************************************/
    public function Role()
    {
        //$search:全局查找条件
        $search= !empty($_REQUEST['search']['value']) ?  $_REQUEST['search']['value'] : '';
        //拼接查找的sql
        $like = "'%".$search."%'";
        $Where =" where (AdminName LIKE ".$like.") or (PhoneNo LIKE ".$like.") or (Email LIKE ".$like.") or (AdminType LIKE ".$like.") or (WhichBuilding LIKE ".$like.")";

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
                case 1;$orderSql = " order by AdminName ".$order_dir;break;
                case 2;$orderSql = " order by PhoneNo ".$order_dir;break;
                case 3;$orderSql = " order by Email ".$order_dir;break;
                default;$orderSql = '';
            }
        }
        $datas = model('Rolemanagement')->index($Where,$limitSql,$orderSql);
        //获取Datatables发送的参数 必要
        $data['draw'] = !empty($_REQUEST['draw']) ?  $_REQUEST['draw'] : 1;
        $data['recordsTotal'] = $datas['sum']['0']['sum'];
        $data['recordsFiltered'] = $datas['sum']['0']['sum'];
        $data['data'] = $datas['data'];
        echo json_encode($data,JSON_UNESCAPED_UNICODE);exit;
    }


}

