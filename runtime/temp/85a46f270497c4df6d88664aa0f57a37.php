<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:55:"/mnt/www/html/myphpweb/apps/index/view/index/index.html";i:1484574598;s:23:"public/header/head.html";i:1481729668;}*/ ?>

<link href="/../public/static/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="/../public/static/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
<link href="/../public/static/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="/../public/static/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
<link href="/../public/static/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->

<link href="/../public/static/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />

<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="/../public/static/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="/../public/static/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="/../public/static/assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="/../public/static/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="/../public/static/assets/pages/css/login-4.css" rel="stylesheet" type="text/css" />
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="/../public/static/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
<link href="/../public/static/assets/layouts/layout/css/themes/light2.min.css" rel="stylesheet" type="text/css" id="style_color" />

<!-- END THEME LAYOUT STYLES -->

<!--[if lt IE 9]-->
<script src="/../public/static/assets/global/plugins/respond.min.js"></script>
<script src="/../public/static/assets/global/plugins/excanvas.min.js"></script>
<!--[endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="/../public/static/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/../public/static/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="/../public/static/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<script src="/../public/static/assets/global/scripts/addtable.js" type="text/javascript"></script>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>高校公寓管理系统->by wbw</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class=" login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="index.html">
        <img src="/../public/static/assets/pages/img/logo-big.png" alt="" /> </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" action="<?php echo url('index/login'); ?>" method="post">
        <h3 class="form-title" style="text-align: center">请输入账号登录</h3>
        <div class="login-alert alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> 请输入用户名和密码. </span>
        </div>
        <input id="common_check" type="hidden" value="<?php echo $common_nf; ?>"/>
        <div class="common-alert alert alert-danger display-hide" >
            <button class="close" data-close="alert"></button>
            <span> 用户名或密码错误. </span>
        </div>

        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">用户名/学号</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="用户名/学号" name="username" /> </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">密码</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="密码" name="password" /> </div>
        </div>
        <div class="form-actions">
            <label class="checkbox">
                <input type="radio" name="remember" value="1" /> 管理员 </label>
            <label class="checkbox">
                <input type="radio" name="remember" value="2" /> 教师 </label>
            <label class="checkbox">
                <input type="radio" name="remember" value="3" checked="checked" /> 学生 </label>
            <button type="submit" class="btn green pull-right"> 登录 </button>
        </div>
        <div class="forget-password">
            <h4>忘记登录密码 ?</h4>
            <p> 不用担心, 点击
                <a href="javascript:;" id="forget-password"> 这里 </a> 重置密码. </p>
        </div>
        <div class="create-account">
            <p> 还没有账号 ?&nbsp;
                <a onclick="get_Academy_Dormitory()" id="register-btn"> 注册 </a>
            </p>
        </div>
        <!--&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp   &nbsp<p style="font-size: small">违规登记</p><br>-->
        <!--<div style="width: 100%"><p style="font-size: small;margin:0 0;"><label>贵重物品登记 </label><label style="float: right">违规登记</label></p><img src="<?php echo url('admin/Valuablesinfo/qrcode'); ?>">-->
        <!--<img src="<?php echo url('admin/Valuablesinfo/qrcode'); ?>" style="float: right"></div>-->
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <!--action="<?php echo url('index/forget'); ?>" method="post"-->
    <form class="forget-form" onkeydown="if(event.keyCode==13)return false;">
        <h3 >忘记密码 ?</h3>
        <p> 请输入邮箱地址;如未注册,请先返回注册 </p>
        <!--信息提示区-->
        <div class="common-alert alert alert-info display-hide" id="forget_alert">
        </div>
        <div class="form-group">
            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="请输入注册预留邮箱" id="email" name="email" /> </div>
        </div>
        <div class="form-actions" id="email_send">
            <button type="button" id="back-btn" class="btn red btn-outline">返回 </button>
            <button type="button" onclick="forget_password()" class="btn green pull-right"> 提交 </button>
        </div>
        <p>注：如未收到邮件,参考<a href="/../public/static/assets/helppic/help_qqmail.png">这里</a>并重新提交本页面</p>
    </form>
    <!--重置密码-->
    <!--隐藏的-->
    <form class="reset-form" id="forget_div" style="display: none" onkeydown="if(event.keyCode==13)return false;">
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">邮箱验证码</label>
            <div class="input-icon">
                <i class="fa fa-envelope-square"></i>
                <input type="text" name="code" id="code" style="display: none"/>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off"  placeholder="邮箱验证码" id="Qrcode" name="Qrcode" /> </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">密码</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off"  placeholder="密码" id="forget_Password" name="forget_Password" /> </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">再次输入密码</label>
            <div class="controls">
                <div class="input-icon">
                    <i class="fa fa-check"></i>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="forget_rpassword" placeholder="再次输入密码" name="forget_rpassword" /> </div>
            </div>
        </div>
        <div class="form-actions">
            <button type="button" id="reset" onclick="reset_password()" class="btn-block btn green pull-right"> 提交 </button>
        </div>
    </form>

    <!-- END FORGOT PASSWORD FORM -->
    <!-- BEGIN REGISTRATION FORM -->
    <form class="register-form" action="<?php echo url('index/register'); ?>" method="post">
        <h3 style="text-align: center">注册</h3>
        <p> 在下方输入您的个人信息进行注册： </p>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">姓名</label>
            <div class="input-icon">
                <i class="fa fa-font"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="姓名" name="Name" /> </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">性别</label>
            <div class="input-icon">
                <i class="fa fa-odnoklassniki"></i>
                <select name="Sex" id="sex_list" class="select2 form-control">
                    <option value="">选择性别</option>
                    <option value="男">男</option>
                    <option value="女">女</option>
                </select></div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">民族</label>
            <div class="input-icon">
                <i class="fa fa-user-secret"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="民族" name="Nationality" /> </div>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">生日</label>
            <div class="input-icon">
                <i class="fa fa-calendar-check-o"></i>
                <input class="form-control placeholder-no-fix" type="text" onfocus="(this.type='date')" placeholder="生日" name="Birthday" /></div>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">电话</label>
            <div class="input-icon">
                <i class="fa fa-phone"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="电话" name="PhoneNo" /> </div>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">邮箱</label>
            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="邮箱" name="Email" /> </div>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">贵重物品</label>
            <div class="input-icon">
                <i class="fa fa-cubes"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="贵重物品" name="Valuables" /> </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">宿舍</label>
            <div class="input-icon">
                <i class="fa fa-institution"></i>
                <select name="Dormitory" id="dormitory_list" class="select2 form-control">
                    <option value="">选择宿舍</option>
                </select></div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">学院</label>
            <div class="input-icon">
                <i class="fa fa-mortar-board"></i>
                <select name="Academy" id="academy_list" class="select2 form-control" onchange="chage_Major()" >
                    <option value="">选择学院</option>
                </select></div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">专业</label>
            <div class="input-icon">
                <i class="fa fa-mortar-board"></i>
                <select name="Major" id="major_list" class="select2 form-control" onchange="chage_Class()">
                    <option value="">选择专业</option>
                </select></div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">班级</label>
            <div class="input-icon">
                <i class="fa fa-mortar-board"></i>
                <select name="Class" id="class_list" class="select2 form-control">
                    <option value="">选择班级</option>
                </select></div>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">入学时间</label>
            <div class="input-icon">
                <i class="fa fa-calendar-check-o"></i>
                <input class="form-control placeholder-no-fix" type="text" onfocus="(this.type='date')"  placeholder="入学时间" name="EntranceTime" /> </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">班级</label>
            <div class="input-icon">
                <i class="fa fa-mortar-board"></i>
                <select name="Role" id="Role_list" class="select2 form-control">
                    <option value="">选择宿舍角色（不选是普通成员）</option>
                    <option value="1">舍长</option>
                    <option value="2">宿舍成员</option>
                </select></div>
        </div>
        <p> 输入您的登录用户信息: </p>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">学号</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="学号" name="StudentNo" /> </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">密码</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="Password" placeholder="密码" id="Password" name="Password" /> </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">再次输入密码</label>
            <div class="controls">
                <div class="input-icon">
                    <i class="fa fa-check"></i>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="再次输入密码" name="rpassword" /> </div>
            </div>
        </div>
        <div class="form-actions">
            <button id="register-back-btn" type="button" class="btn red btn-outline"> 返回 </button>
            <button type="submit" id="register-submit-btn" class="btn green pull-right"> 注册 </button>
        </div>
    </form>
    <!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright"> <?php echo date('Y');?> &copy; wangbowen - 高校公寓管理系统. </div>
</body>

</html>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/../public/static/assets/pages/scripts/login-4.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    /**
     * 点击注册按钮出发加载学院、宿舍
     */
    function get_Academy_Dormitory() {
        //加载学院
        $.ajax({
            cache:false,
            type:"POST",
            url:"<?php echo url('admin/common/AcademyInfo'); ?>",
            dataType:"json",
            //data:['academy','$academy'],
            timeout:30000,
            error:function(){
                alert('admin/Common/AcademyInfo');
            },
            success:function(data){
                $("#academy_list").empty();
                var count = data.length;
                var i = 0;
                var b="<option value=''>选择学院</option>";
                for(i=0;i<count;i++){
                    b+="<option value='"+data[i].AcademyId+"'>"+data[i].AcademyName+"</option>";
                }
                $("#academy_list").append(b);
            }
        });
        //加载宿舍
        $.ajax({
            cache:false,
            type:"POST",
            url:"<?php echo url('admin/common/DormitoryInfo'); ?>",
            dataType:"json",
            //data:['academy','$academy'],
            timeout:30000,
            error:function(){
                alert('admin/Common/DormitoryInfo');
            },
            success:function(data){
                $("#dormitory_list").empty();
                var count = data.length;
                var i = 0;
                var b="<option value=''>选择宿舍</option>";
                for(i=0;i<count;i++){
                    if(data[i].Unit ==''){
                        b+="<option value='"+data[i].DormitoryId+"'>"+data[i].Building+"栋"+data[i].DormitoryNo+"室</option>";
                    }else{
                        b+="<option value='"+data[i].DormitoryId+"'>"+data[i].Building+"栋"+data[i].Unit+"单元"+data[i].DormitoryNo+"室</option>";
                    }
                }
                $("#dormitory_list").append(b);
            }
        });

    }
    /**
     * 选择学院时触发学院对应的专业
     */
    function chage_Major() {
        var academy=document.getElementById("academy_list").value;
        $.ajax({
            cache:false,
            type:"POST",
            url:"<?php echo url('admin/common/MajorInfo'); ?>?academy="+academy,
            dataType:"json",
            data:['academy','$academy'],
            timeout:30000,
            error:function(){
                alert('admin/Common/MajorInfo?academy='+academy);
            },
            success:function(data){
                $("#major_list").empty();
                var count = data.length;
                var i = 0;
                var b="<option value=''>选择专业</option>";
                for(i=0;i<count;i++){
                    b+="<option value='"+data[i].MajorId+"'>"+data[i].MajorName+"</option>";
                }
                $("#major_list").append(b);
            }
        });
    }
    function chage_Class() {
        var major=document.getElementById("major_list").value;
        $.ajax({
            cache:false,
            type:"POST",
            url:"<?php echo url('admin/common/ClassInfo'); ?>?major="+major,
            dataType:"json",
            data:{'major':major},
            timeout:30000,
            error:function(){
                alert('admin/Common/MajorInfo?academy='+major);
            },
            success:function(data){
                $("#class_list").empty();
                var count = data.length;
                var i = 0;
                var b="<option value=''>选择班级</option>";
                for(i=0;i<count;i++){
                    b+="<option value='"+data[i].ClassId+"'>"+data[i].ClassName+"</option>";
                }
                $("#class_list").append(b);
            }
        });
    }
    //发送邮箱验证码
    function forget_password(){
        if($('.forget-form').validate().form()){
            var email=document.getElementById("email").value;
            $.ajax({
                cache:false,
                type:"POST",
                url:"<?php echo url('index/sendMail'); ?>",
                dataType:"json",
                data:{email: email},
                timeout:500000,
                error:function(){
                    alert('出错');
                },
                success:function(data){
                    $("#forget_alert").empty();
                    var b="";
                    alert(data.mes);
                    b+="<button class='close' data-close='alert'></button><span> "+data.mes+"</span>";
                    $("#forget_alert").append(b);
                    $("#forget_alert").show();
                    if(data.flag ==1 ){
                        //$("#email_send").hide();
                        document.getElementById("code").value=data.code;
                        //显示重置密码框
                        $("#forget_div").show();
                    }
                }
            });
        }

    }
    //重置密码
    function reset_password() {
        if($('.reset-form').validate().form()){
            var email=document.getElementById("email").value;
            var code= document.getElementById("code").value;
            var qrcode=document.getElementById("Qrcode").value;
            var forget_Password=document.getElementById("forget_Password").value;
            alert("123");
            data_json={email:email,code:code,qrcode:qrcode,forget_Password:forget_Password};
            $.ajax({
                cache:false,
                type:"POST",
                url:"<?php echo url('index/forget'); ?>",
                dataType:"json",
                data:data_json,
                timeout:30000,
                error:function(){
                    alert('出错');
                },
                success:function(data){
                    $("#forget_alert").empty();
                    var b="";
                    alert(data.mes);
                    b+="<button class='close' data-close='alert'></button><span> "+data.mes+"</span>";
                    $("#forget_alert").append(b);
                    $("#forget_alert").show();
                    if(data.flag == 1 ){
                       window.location.href="<?php echo url('index/index'); ?>";
                    }
                }
            });
        }

    }
</script>

