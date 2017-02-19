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
    /*****************************************
     * 作者：王波文
     * 时间：2017年2月17日
     *方法：角色管理首页数据添加
     *****************************************/

    public function add(){
        if( request()->isPost() ){
            $data = request()->param();
            $add =model('Rolemanagement')->add($data);
             return $add;
        }
        return $this->fetch('add');
    }
    /*****************************************
     * 作者：王波文
     * 时间：2017年2月17日
     *方法：角色管理首页数据编辑
     *****************************************/

    public function edit($Id = 0){
        $Id = intval($Id);
        if(empty($Id)){
            return info('数据ID异常',0);
        }
        if(request()->isPost()){
            $data= request()->param();
            $edit = model('Rolemanagement')->edit($data);
            return $edit;
        }
        $data = db('admininfo')->where('AdminId',$Id)->find();
        $this->assign('data',$data);
        return $this->fetch('edit');
    }
    /*****************************************
     * 作者：王波文
     * 时间：2017年2月18日
     *方法：角色管理首页数据删除
     *****************************************/

    public function del($AdminId){
        $add =model('Rolemanagement')->del($AdminId);
        return $add;
    }

    public function student()
    {
        return $this->fetch('student');
    }
    public function StudentRole()
    {
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
        $datas = model('Rolemanagement')->StudentRole($Where,$limitSql,$orderSql);
        //获取Datatables发送的参数 必要
        $data['draw'] = !empty($_REQUEST['draw']) ?  $_REQUEST['draw'] : 1;
        $data['recordsTotal'] = $datas['sum']['0']['sum'];
        $data['recordsFiltered'] = $datas['sum']['0']['sum'];
        $data['data'] = $datas['data'];
        echo json_encode($data,JSON_UNESCAPED_UNICODE);exit;
    }
    /*****************************************
     * 作者：王波文
     * 时间：2017年2月17日
     *方法：角色管理学生首页数据编辑
     *****************************************/

    public function StudentEdit($Id = 0){
        $Id = intval($Id);
        if(empty($Id)){
            return info('数据ID异常',0);
        }
        if(request()->isPost()){
            $data= request()->param();
            $edit = model('Rolemanagement')->edit($data);
            return $edit;
        }
        $data = db('admininfo')->where('AdminId',$Id)->find();
        $this->assign('data',$data);
        return $this->fetch('edit');
    }
}

