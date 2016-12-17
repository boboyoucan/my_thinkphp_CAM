<?php
namespace app\admin\controller;
use think\Controller;
class Common extends Controller
{
    //公共方法 专业列表
    public function MajorInfo($academy)
    {
        $majorinfo=db('majorinfo')->query("select MajorId,MajorName from majorinfo  where AId=$academy order by MajorId desc");
        return $majorinfo;

    }
    //公共方法 班级列表
    public function ClassInfo($major)
    {
        $Classinfo=db('classinfo')->query("select ClassId,ClassName from classinfo  where MId=$major order by ClassId desc");
        return $Classinfo;

    }
    //公共方法 班级列表
    public function ValuablesInfo($StudentNo){
        $valuables=db('studentinfo')->query("select Valuables from studentinfo where StudentNo='$StudentNo'");
        return $valuables;
    }

}

