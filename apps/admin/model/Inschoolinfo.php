<?php
namespace app\admin\Model;
use think\Model;
class Inschoolinfo extends Model
{
    public function Inschool($seach,$limitSql,$orderSql)
    {
        $Where=CheckRole();
        $data['sum']=db('inschoolinfo')->query("select count(*)  AS sum from inschoolinfo as SC LEFT JOIN studentinfo AS ST on ST.id=SC.Uid LEFT JOIN dormitoryinfo AS DO on ST.DId=DO.DormitoryId where $Where and ".$seach);
        $data['data']=db('inschoolinfo')->query("select InschoolId AS id,ST.StudentNo,ST.StudentName,ST.PhoneNo,ST.Email,CONCAT(DO.Building,'-',DO.Unit,'-',DO.DormitoryNo) as Dormitory,concat(MJ.MajorName,'-',CL.ClassName) as Class,SC.OutPlace,SC.OutReason,SC.BackTime,SC.BackFlag from inschoolinfo as SC LEFT JOIN studentinfo AS ST on ST.id=SC.Uid LEFT JOIN dormitoryinfo AS DO on ST.DId=DO.DormitoryId LEFT JOIN classinfo AS CL on ST.CId=CL.ClassId JOIN majorinfo as MJ on CL.MId=MJ.MajorId JOIN  academyinfo AS AC on MJ.AId=AC.AcademyId where $Where and ".$seach.$orderSql.$limitSql);
        return $data;
    }

}

