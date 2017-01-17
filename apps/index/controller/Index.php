<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
//      老师和学生通用的标记
        $this->assign('common_nf','1');
        return $this->fetch('index');
    }

/*****************************************
 * 作者：王波文
 * 时间：2016年11月16日
 *方法：登录方法（包括学生登录，和管理员登录）
 *****************************************/
    public function login()
    {
        //获取post的值$_POST['username'];
        //$_POST['password'];
        //$_POST['remember'];
        //remember等于1表示登录类型为管理员
        if( isset($_POST['remember']) && $_POST['remember'] == 1 ){
            $db_admin=db('admininfo')
                ->where('AdminName',$_POST['username'])
                ->where('AdminPassword',$_POST['password'])
                ->find();
            if($db_admin == null){
                $this->assign('common_nf','0');
                return $this->fetch('index/index');
            }
            else{
                session('name',$db_admin['AdminName']);
                session('type',$db_admin['AdminType']);
                session('id',$db_admin['id']);
                //session('wb',$db_admin['WhichBuilding']);
                return $this->redirect('Admin/index/index');
               }
        }
        //remember=3没设置表示登录类型为学生
        elseif(isset($_POST['remember']) && $_POST['remember'] == 3 ){
            $db_student=db('studentinfo')
                ->where('StudentNo',$_POST['username'])
                ->where('Password',md5($_POST['password']))
                ->find();
            if($db_student == null){
                $this->assign('common_nf','0');
                return $this->fetch('index/index');
                echo "用户不存在";
            }
            else{
                session('name',$db_student['StudentName']);
                session('type','3');
                session('id',$db_student['id']);
                $this->assign('common_nf','1');
                $this->redirect("admin/index/index");
                echo "用户存在";
            }
        }
        //remember=2没设置表示登录类型为老师
        elseif(isset($_POST['remember']) && $_POST['remember'] == 2 ){

        }

    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月16日
     *方法：退出方法
     *****************************************/
    public function logout()
    {
        //清空session
        session('name',null);
        session('type',null);
        session('id',null);
        //退回登界面
        return $this->redirect('index/index/index');
    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年12月13日
     *方法：注册方法（包括学生注册）
     *****************************************/
    public function register(){
        if($_POST){
            $db_student=db('studentinfo')->execute("insert into studentinfo (StudentNo, StudentName, Password, Sex, Nationality, Birthday, PhoneNo, Email, Valuables, DId, CId, EntranceTime, Role) values ('{$_POST['StudentNo']}','{$_POST['Name']}',md5({$_POST['Password']}),'{$_POST['Sex']}','{$_POST['Nationality']}','{$_POST['Birthday']}','{$_POST['PhoneNo']}','{$_POST['Email']}','{$_POST['Valuables']}','{$_POST['Dormitory']}','{$_POST['Class']}','{$_POST['EntranceTime']}','{$_POST['Role']}')");
            if($db_student){
                session('name',$_POST['Name']);
                session('type','3');
                $this->redirect("admin/index/index");
            }else{
                echo "注册失败";
            }
        }else{
            echo "非法访问";
        }
    }
    public function sendMail($email){
        $student=db('studentinfo')->query("select StudentName from studentinfo where Email='$email'");
        if($student){
            //生成随机验证码
            $yanz=rand(10000,99999);
            $headers = "From: 西南林业大学宿舍公寓管理系统官方邮件<wbw@boboyoucan1.cn>";
            $body = "尊敬的{$student[0]['StudentName']}您好！\n您的邮箱验证码为：$yanz";
            $subject = "邮箱验证";
            $to = "$email";
            if (mail($to, $subject, $body, $headers))
            {
                $common_forget['mes']='邮件发送成功';
                $common_forget['flag']=1;
                $common_forget['code']=md5(md5($yanz));
                $this->assign('common_forget','$common_forget');
                return $common_forget;
                //return $this->fetch('index');
            }
            else
            {
                $common_forget['mes']='邮件发送失败';
                $common_forget['flag']=0;
                $this->assign('common_forget','$common_forget');
                return $common_forget;
            }
        }else{
            //没有注册，本邮件问测试邮件，督促注册
            $headers = "From: 西南林业大学宿舍公寓管理系统官方邮件<wbw@boboyoucan1.cn>";
            $body = "您好！\n您的邮箱暂时未关联我们的网站，本邮件为测试邮件，请先到我们的网站注册，网站地址：http://{$_SERVER['HTTP_HOST']}/index.php";
            $subject = "测试邮件";
            $to = "$email";
            if (mail($to, $subject, $body, $headers))
            {
                $common_forget['mes']='您尚未注册,我们已发送一封测试邮件给您，请先进行注册！!';
                $common_forget['flag']=0;
                $this->assign('common_forget','$common_forget');
                return $common_forget;
            }
            else
            {
                $common_forget['mes']='您尚未注册,我们本来准备发送一份测试邮件给您，但系统出现错误！请先进行注册！';
                $common_forget['flag']=0;
                $this->assign('common_forget','$common_forget');
                return $common_forget;
            }
        }
    }
    public function forget($email,$code,$qrcode,$forget_Password){
        //判断两次验证码是否一致
        if($code == md5(md5($qrcode))){
            $student=db('studentinfo')->query("select id from studentinfo where Email='$email'");
            if($student){
                $reset=db('studentinfo')->execute("update studentinfo set Password=md5('$forget_Password') where id= '{$student[0]['id']}'");
//                echo $reset;
//                echo "update studentinfo set Password=md5('$forget_Password') where id= '{$student[0]['id']}'";
                if($reset){
                    $reset_pa['flag']=1;
                    $reset_pa['mes']='密码修改成功';
                    return $reset_pa;
                }else{
                    $reset_pa['flag']=0;
                    $reset_pa['mes']='很抱歉！系统出错,密码修改失败！';
                    return $reset_pa;
                }
            }else{
                $reset_pa['flag']=0;
                $reset_pa['mes']='很抱歉！该学生不存在';
                return $reset_pa;
            }
        }else{
            $reset_pa['flag']=0;
            $reset_pa['mes']='很抱歉！ 验证码有误，请确认！';
            return $reset_pa;
        }
    }
}