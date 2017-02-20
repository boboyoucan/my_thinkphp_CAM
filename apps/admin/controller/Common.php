<?php
namespace app\admin\controller;
use think\Controller;
class Common extends Controller
{
    //公共方法 学院信息
    public function AcademyInfo(){
        $academyinfo=db('academyinfo')->query("select * from academyinfo order by AcademyId desc");
        return $academyinfo;
    }
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
    //公共方法 贵重物品列表
    public function ValuablesInfo($StudentNo){
        $valuables=db('studentinfo')->query("select Valuables from studentinfo where StudentNo='$StudentNo'");
        return $valuables;
    }
    //公共方法宿舍信息
    public function DormitoryInfo(){
        $dormitoryinfo=db('dormitoryinfo')->query("select DormitoryId,Building,Unit,DormitoryNo from dormitoryinfo order by Building,Unit,DormitoryNo ASC");
        return $dormitoryinfo;
    }

    //公共方法宿舍几栋信息
    public function BuildingInfo(){
        $BuildingInfo=db('dormitoryinfo')->query("select Building from dormitoryinfo order by Building group by Building ");
        return $BuildingInfo;
    }
    //分页方法
    public function paging($count,$page,$pagesize){
        $pagemax=$count[0]['count']/$pagesize;
        $pgmx=ceil($pagemax);
        if($page>=$pagemax &&$pagemax !=0 )
        {$page=ceil($pagemax);}
        $startpage=$pagesize*($page-1);
        $page_assign['pagemax']=$pgmx;
        $page_assign['pagestart']=$startpage;
        $page_assign['page']=$page;
        $page_assign['count']=$count[0]['count'];
        $page_assign['pagesize']=$pagesize;
        $page_assign['page_content']="<ul class='pagination' style='visibility: visible;'>";
        if($page_assign['page'] ==1 ){
            $page_assign['page_content']=$page_assign['page_content']."  <li class='prev disabled' ><a href='#' title='Prev' style='height: 33px'><i class='fa fa-angle-left'></i></a></li>";
        }else{
            $page_assign['page_content']=$page_assign['page_content']." <li class='prev' ><a onclick='select_page(1,{$page_assign['pagesize']})' title='Prev' style='height: 33px'><i class='fa fa-angle-left'></i></a></li>";

        }
        for($i=1;$i<=$page_assign['pagemax'];$i++){
            if($i == $page_assign['page']){
                $page_assign['page_content']=$page_assign['page_content']."<li class='pages_{$i} active' id='page_{$i}'><a onclick='select_page({$i},{$page_assign['pagesize']})'>{$i}</a></li>";

            }else{
                $page_assign['page_content']=$page_assign['page_content']."<li class='pages_{$i}'><a onclick='select_page({$i},{$page_assign['pagesize']})'>{$i}</a></li>";
            }
        }
        if($page_assign['page'] ==$page_assign['pagemax'] ){
            $page_assign['page_content']=$page_assign['page_content']."<li class='next disabled'><a  title='Next' style='height: 33px'><i class='fa fa-angle-right'></i></a></li>";

        }else{
            $page_assign['page_content']=$page_assign['page_content']."<li class='next'><a onclick='select_page({$page_assign['pagemax']},{$page_assign['pagesize']})' title='Next' style='height: 33px'><i class='fa fa-angle-right'></i></a></li>";
        }
        //页码显示
        $page_assign['page_content']=$page_assign['page_content']."</ul>";
        //共多少条显示
        if($page_assign['page'] == $page_assign['pagemax'] ){
            $pg=$page_assign['pagestart']+1;
            $page_assign['page_all']="显示 第 $pg 条 到 {$page_assign['count']} 条 共 {$page_assign['count']} 条";
        }else{
            $pg=$page_assign['pagestart']+1;
            $pg_end=$page_assign['page']*$page_assign['pagesize'];
            $page_assign['page_all']="显示 第 $pg 条 到 $pg_end 条 共 {$page_assign['count']} 条";
        }
        return $page_assign;
    }
}

