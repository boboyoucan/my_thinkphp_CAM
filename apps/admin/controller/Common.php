<?php
namespace app\admin\controller;
use think\Controller;
class Common extends Controller
{
    public function MajorInfo($academy)
    {
        $majorinfo=db('majorinfo')->query("select MajorId,MajorName from majorinfo  where AId=$academy order by MajorId desc");
        return $majorinfo;

    }
}

