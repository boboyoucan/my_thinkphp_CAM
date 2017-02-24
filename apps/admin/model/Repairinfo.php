<?php
namespace app\admin\model;

use think\Config;
use think\Db;
use think\Loader;
use think\Model;

class  Repairinfo extends Model

{
    /*****************************************
     * 作者：王波文
     * 时间：2017年2月23日
     *方法：报修首页数据bootstrap table 显示
     *****************************************/
    public function Repair($search,$limitSql,$orderSql)
    {
        $Where=CheckRole();
        //由admin发布的添加条件
        if(session('type')==1){
           $Where=$Where." or RE.UId='0'";
        }
        $data['sum']=db('repairinfo')->query("select count(*) as sum from repairinfo RE JOIN studentinfo as ST  JOIN dormitoryinfo as DO where ST.DId=DO.DormitoryId and RE.Uid=ST.id and $Where and ".$search);
        $data['data']=db('repairinfo')->query("SELECT RepairId AS id,ST.id as StudentId,ST.StudentNo,ST.StudentName,ST.PhoneNo,CONCAT(DO.Building,'-',DO.Unit,'-',DO.DormitoryNo) as Dormitory,RE.RepairContent,RE.RepairTime,RE.CheckState,RE.CheckSuggest,RE.CheckTime,AD.AdminName FROM repairinfo AS RE LEFT JOIN admininfo as AD on AD.AdminId=RE.CheckId LEFT JOIN studentinfo AS ST on ST.id = RE.UId LEFT JOIN dormitoryinfo AS DO on ST.DId = DO.DormitoryId where $Where and ".$search.$orderSql.$limitSql);
//        var_dump("SELECT RepairId AS id,ST.id as StudentId,ST.StudentNo,ST.StudentName,ST.PhoneNo,CONCAT(DO.Building,'-',DO.Unit,'-',DO.DormitoryNo) as Dormitory,RE.RepairContent,RE.RepairTime,RE.CheckState,RE.CheckSuggest,RE.CheckTime,AD.AdminName FROM repairinfo AS RE LEFT JOIN admininfo as AD on AD.AdminId=RE.CheckId LEFT JOIN studentinfo AS ST on ST.id = RE.UId LEFT JOIN dormitoryinfo AS DO on ST.DId = DO.DormitoryId where $Where and ".$search.$orderSql.$limitSql);
//        exit;
        return $data;
    }
    /*****************************************
     * 作者：王波文
     * 时间：2017年2月23日
     *方法：报修管理,审核处理
     *****************************************/
    public function Check(){
        $data=request()->param();
        $repair=db('repairinfo')->where('RepairId',$data['Id'])->find();
        if($repair == null){
            return info('该报修记录不存在！！',0);
        }

        $CheckTime=date('Y-m-d H:i:s');
        $res=db('repairinfo')->execute("update repairinfo set CheckSuggest='{$data['CheckSuggest']}',CheckState='1',CheckTime='{$CheckTime}',CheckId=".session('id')." where RepairId='{$data['Id']}'");
//        var_dump("update repairinfo set CheckSuggest='{$data['CheckSuggest']}',CheckState='1',CheckTime='{$CheckTime}',CheckId=".session('id')." where RepairId='{$data['Id']}'");
//        exit;
        if($res ==1){
           return info('审核成功！！',1);
        } else{
            return info('审核失败！！',0);
        }
    }
    /*****************************************
     * 作者：王波文
     * 时间：2017年2月23日
     *方法：报修管理，添加报修
     * 参数：提交的参数，数组形式
     *****************************************/
    public function add(array $data = []){
        $RepairTime=date('Y-m-d H:i:s');
        if(session('type')==0 || session('type')==1){
            $admin=db('admininfo')->query(" select AdminName from admininfo where AdminId=".session('id'));
            $content="该信息由".$admin[0]['AdminName']."发布,具体信息: ".$data['Dormitory']."宿舍：".$data['RepairContent'];
            $res=db('repairinfo')->execute("insert into repairinfo (UId,RepairContent,RepairTime,CheckState) VALUES ('0','$content','$RepairTime','0')");
        }
        elseif(session('type')==3){
            $UId=session('id');
            $res=db('repairinfo')->execute("insert into repairinfo (UId,RepairContent,RepairTime,CheckState) VALUES ('$UId','{$data['RepairContent']}','$RepairTime','0')");
        }
        if($res == 1){
             return info('添加成功！',1);
        }else{
             return info('添加失败！',0);
        }
    }

    /*****************************************
     * 作者：王波文
     * 时间：2017年2月18日
     *方法：报修界面数据取消审核
     *****************************************/

    public function UnCheck($data){
        $RepairId= intval($data);
        if($RepairId ==''){
            return info('数据id异常',0);
        }
        $res=db('repairinfo')->where('RepairId',$RepairId)->find();
        if($res != null){
            $UnCheck=db('repairinfo')->execute("update repairinfo set CheckState=0,CheckSuggest='',CheckTime='0000-00-00 00:00:00',CheckId=0 where RepairId=$RepairId");
            if($UnCheck==1 ){
                return info('取消审核成功！',1);
            }else{
                return info('取消审核失败！',0);
            }
        }else{
            return info('要取消审核的对象不存在！',0);
        }
    }

    /*****************************************
     * 作者：王波文
     * 时间：2017年2月24日
     *方法：报修界面数据编辑
     *****************************************/

    public function edit(array $data = [])
    {
        $res=db('repairinfo')->execute("update repairinfo set RepairContent='{$data['RepairContent']}' where RepairId='{$data['Id']}'");
        if($res == 1){
            return info('编辑成功！',1);
        }else{
            return info('编辑失败！',0);
        }
    }
    /*****************************************
     * 作者：王波文
     * 时间：2017年2月18日
     *方法：报修界面数据删除
     *****************************************/

    public function del($data){
        $RepairId= intval($data);
        if($RepairId ==''){
            return info('数据id异常',0);
        }

        $res=db('repairinfo')->where('RepairId',$RepairId)->find();
        if($res != null){
            $del=db('repairinfo')->where('RepairId',$RepairId)->delete();
            if($del==1 ){
                return info('删除成功！',1);
            }else{
                return info('删除失败！',0);
            }
            return info('删除成功！',1);
        }else{
            return info('要删除的对象不存在！',0);
        }
    }
}

