<?php
namespace app\admin\controller;
use think\Controller;
class Repairinfo extends Checklogin
{
    public function index()
    {
        return $this->fetch('index');

    }
    /*****************************************
     * 作者：王波文
     * 时间：2017年2月23日
     *方法：报修首页数据bootstrap table 显示
     *****************************************/
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
                case 2;$orderSql = " order by DormitoryNo ".$order_dir;break;
                case 3;$orderSql = " order by RepairContent ".$order_dir;break;
                case 4;$orderSql = " order by RepairTime ".$order_dir;break;
                case 5;$orderSql = " order by CheckState ".$order_dir;break;
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
    /*****************************************
     * 作者：王波文
     * 时间：2017年2月23日
     *方法：报修管理,审核处理
     *****************************************/
    public function Check($Id = 0){
        $Id =intval($Id);
        if(empty($Id)){
            return info('数据id异常',0);
        }

        if(request()->isPost()){
            if(session('type')== 3){
                return info('您没有操作权限',0);
            }
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
    /*****************************************
     * 作者：王波文
     * 时间：2017年2月24日
     *方法：报修管理,取消审核处理
     *****************************************/
    public function Uncheck($Id){
        $del =model('Repairinfo')->UnCheck($Id);
        return $del;
    }
    /*****************************************
     * 作者：王波文
     * 时间：2017年2月24日
     *方法：报修管理删除
     * 参数：$Id post的报修唯一标示id
     *****************************************/

    public function del($Id){
        $del =model('Repairinfo')->del($Id);
        return $del;
    }
    /*****************************************
     * 作者：王波文
     * 时间：2017年2月24日
     *方法：报修管理添加
     * 参数：null
     *****************************************/
    public function add(){
        if(request()->isPost()){
            $data = request()->param();
            $add=model('Repairinfo')->add($data);
            return $add;
        }
        if(session('type')==0 || session('type')==1){
            return $this->fetch('adminadd');
        }
        elseif(session('type')==3){
            return $this->fetch('studentadd');
        }
    }
    public function edit($Id=0){
        $Id=intval($Id);
        if(empty($Id)){
            return info('数据id异常',0);
        }
        if(request()->isPost()){
            $data=request()->param();
            $edit=model('Repairinfo')->edit($data);
            return $edit;
        }
        $data=db('repairinfo')->where('RepairId',$Id)->find();
        $this->assign('data',$data);
        return $this->fetch('edit');
    }
}

