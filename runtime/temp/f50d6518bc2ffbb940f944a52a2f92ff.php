<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"/mnt/www/html/myphpweb/apps/student/view/studentvaluablesinfo/index.html";i:1481974710;s:23:"public/header/head.html";i:1481729668;}*/ ?>

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

<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="index.html">
        <img src="/../public/static/assets/pages/img/logo-big.png" alt="" /> </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <div class="alert alert-danger display-hide" id="message_danger">
    </div>
    <div class="alert alert-info display-hide" id="message_info">
    </div>
        <h3 style="text-align: center"> 贵重物品登记</h3>
        <div class="form-group">
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" id="StudentNo" type="text" autocomplete="off" oninput="get_valuables()" onporpertychange="get_valuables()" placeholder="请输入学号" name="StudentNo"/></div>
        </div>
        <div class="form-group">
            <div class="input-icon">
                <i class="fa fa-cubes"></i>
                <input class="form-control placeholder-no-fix" id="Valuables" type="text" autocomplete="off" name="valuables" placeholder="请输入贵重物品" /> </div>
        </div>
        <div class="form-actions">
            <button onclick="valuables_submit()" class="btn green btn-block"> 提交 </button>
        </div>
        <p>注：输入学号后，如您注册的时候已经添加贵重物品，贵重物品会自动加载出来，如您贵重物品已经变了，直接删除自动加载出来的任何重新填写</p>
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright"> <?php echo date('Y');?> &copy; wangbowen - 高校公寓管理系统. </div>
</body>

</html>
<script>
    $.backstretch([
                "/../public/static/assets/pages/media/bg/xuex1.jpg",
                "/../public/static/assets/pages/media/bg/xuex7.jpeg",
                "/../public/static/assets/pages/media/bg/xuex5.jpg",
                "/../public/static/assets/pages/media/bg/xuex4.jpg"
            ], {
                fade: 1000,
                duration: 8000
            }
    );
    /**
     * 输入学号后加载贵重物品方法
     */
    function get_valuables() {
        var StudentNo=document.getElementById("StudentNo").value;
        StudentNolength=StudentNo.length;
        if(StudentNolength == 11){
            $.ajax({
                cache:false,
                type:"POST",
                url:"<?php echo url('admin/common/ValuablesInfo'); ?>",
                dataType:"json",
                data:{StudentNo:StudentNo},
                timeout:30000,
                error:function(){
                    alert('admin/Common/ValuablesInfo?StudentNo='+StudentNo);
                },
                success:function(data){
                    document.getElementById("Valuables").value=data[0].Valuables;
                }
            });
        }else{
            get_valuables;
        }
    }
    function valuables_submit(){
        var StudentNo=document.getElementById("StudentNo").value;
        var Valuables=document.getElementById("Valuables").value;
        data_Valuables={StudentNo:StudentNo,Valuables:Valuables};
        $.ajax({
            cache:false,
            type:"POST",
            url:"<?php echo url('student/studentvaluablesinfo/valuablesregistration'); ?>",
            dataType:"json",
            data: data_Valuables,
            timeout:30000,
            error:function(){
                alert('student/studentvaluablesinfo/valuablesregistration');
            },
            success:function(data){
                m="";
                if(data.flag ==1){
                    $("#message_info").empty();
                    m+="<button class='close' data-close='alert'></button><span> "+data.mes+"</span>";
                    $("#message_info").append(m);
                    $("#message_info").show(100);
                }else{
                    $("#message_danger").empty();
                    m+="<button class='close' data-close='alert'></button><span> "+data.mes+"</span>";
                    $("#message_danger").append(m);
                    $("#message_danger").show(100);
                }
            }
        });
    }
</script>

