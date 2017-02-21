<?php
namespace app\admin\model;
use think\Model;
class Valuablesinfo extends Model
{
/*****************************************
 * 作者：王波文
 * 时间：2017年2月21日
 *方法：贵重物品登记管理页面
 *****************************************/
    public function index($Where,$limitSql,$orderSql)
    {
        //判断为管理员动作
        if(session('type')==0){
            $where="1=1";
        }
        //判断为宿舍管理员的动作
        elseif (session('type')==1){
            $do=db('admininfo')->query("select WhichBuilding from admininfo where AdminId=".''.session('id'));
            $where="DO.Building=".''.$do[0]['WhichBuilding'];
        }
        //判断为学生时的动作
        elseif(session('type')==3){
            $where="ST.id=".''.session('id');
        }
        $data['sum']=db('valuablesinfo')->query("select count(*) as sum from valuablesinfo as VA JOIN studentinfo as ST JOIN classinfo as CL JOIN majorinfo as MA JOIN dormitoryinfo as DO where VA.Uid=ST.id and ST.CId=CL.ClassId and CL.MId=MA.MajorId and ST.DId=DO.DormitoryId AND ".$where.' and '.$Where);
//        var_dump("select count(*) as sum from valuablesinfo as VA JOIN studentinfo as ST JOIN classinfo as CL JOIN majorinfo as MA JOIN dormitoryinfo as DO where VA.Uid=ST.id and ST.CId=CL.ClassId and CL.MId=MA.MajorId and ST.DId=DO.DormitoryId AND ".$where.' and '.$Where);
//        exit;
        $data['data']=db('valuablesinfo')->query("select ST.StudentNo,ST.StudentName,concat(MA.MajorName,'-',CL.ClassName) as Major,concat(DO.Building,'-',DO.Unit,'-',DO.DormitoryNo) as Dormitory,VA.ValuablesName,VA.RegistrationTime,VA.ValuablesId,ST.PhoneNo from valuablesinfo as VA JOIN studentinfo as ST JOIN classinfo as CL JOIN majorinfo as MA JOIN dormitoryinfo as DO where VA.Uid=ST.id and ST.CId=CL.ClassId and CL.MId=MA.MajorId and ST.DId=DO.DormitoryId and $where and ".$Where.$orderSql.$limitSql);
//        var_dump("select ST.StudentName,concat(MA.MajorName,'-',CL.ClassName) as Major,concat(DO.Building,'-',DO.Unit,'-',DO.DormitoryNo) as Dormitory,VA.ValuablesName,VA.RegistrationTime,VA.ValuablesId,ST.PhoneNo from valuablesinfo as VA JOIN studentinfo as ST JOIN classinfo as CL JOIN majorinfo as MA JOIN dormitoryinfo as DO where VA.Uid=ST.id and ST.CId=CL.ClassId and CL.MId=MA.MajorId and ST.DId=DO.DormitoryId and $where and ".$Where.$limitSql.$orderSql);
//        exit;
        return $data;
       }
    /*****************************************
     * 作者：王波文
     * 时间：2017年2月21日
     *方法：贵重物品查看页面
     *****************************************/
    public function ViewTable($Where,$limitSql,$orderSql)
    {
        //判断为管理员动作
        if(session('type')==0){
            $where="1=1";
        }
        //判断为宿舍管理员的动作
        elseif (session('type')==1){
            $do=db('admininfo')->query("select WhichBuilding from admininfo where AdminId=".''.session('id'));
            $where="DO.Building=".''.$do[0]['WhichBuilding'];
        }
        //判断为学生时的动作
        elseif(session('type')==3){
            $where="ST.id=".''.session('id');
        }
        $data['sum']=db('studentinfo')->query("select count(*) as sum from studentinfo as ST JOIN classinfo as CL JOIN majorinfo as MA JOIN dormitoryinfo as DO where ST.CId=CL.ClassId and CL.MId=MA.MajorId and ST.DId=DO.DormitoryId AND ".$where.' and '.$Where);
//        var_dump("select count(*) as sum from valuablesinfo as VA JOIN studentinfo as ST JOIN classinfo as CL JOIN majorinfo as MA JOIN dormitoryinfo as DO where VA.Uid=ST.id and ST.CId=CL.ClassId and CL.MId=MA.MajorId and ST.DId=DO.DormitoryId AND ".$where.' and '.$Where);
//        exit;
        $data['data']=db('studentinfo')->query("select ST.id as Id,ST.StudentNo,ST.StudentName,concat(MA.MajorName,'-',CL.ClassName) as Major,concat(DO.Building,'-',DO.Unit,'-',DO.DormitoryNo) as Dormitory,ST.PhoneNo from studentinfo as ST JOIN classinfo as CL JOIN majorinfo as MA JOIN dormitoryinfo as DO where ST.CId=CL.ClassId and CL.MId=MA.MajorId and ST.DId=DO.DormitoryId and $where and ".$Where.$orderSql.$limitSql);
//        var_dump("select ST.StudentName,concat(MA.MajorName,'-',CL.ClassName) as Major,concat(DO.Building,'-',DO.Unit,'-',DO.DormitoryNo) as Dormitory,VA.ValuablesName,VA.RegistrationTime,VA.ValuablesId,ST.PhoneNo from valuablesinfo as VA JOIN studentinfo as ST JOIN classinfo as CL JOIN majorinfo as MA JOIN dormitoryinfo as DO where VA.Uid=ST.id and ST.CId=CL.ClassId and CL.MId=MA.MajorId and ST.DId=DO.DormitoryId and $where and ".$Where.$limitSql.$orderSql);
//        exit;
        return $data;
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
       public function qwe(){}

}

