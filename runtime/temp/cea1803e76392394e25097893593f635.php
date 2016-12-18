<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:59:"/mnt/www/html/myphpweb/apps/admin/view/majorinfo/index.html";i:1481725499;s:24:"public/header/index.html";i:1481728970;s:23:"public/header/head.html";i:1481729668;}*/ ?>

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
    <title>学生公寓管理系统->by wangbowen</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html">
                <img src="/../public/static/assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
            <div class="menu-toggler sidebar-toggler"> </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle" src="/../public/static/assets/layouts/layout/img/avatar3_small.jpg" />
                        <span class="username username-hide-on-mobile"> <?php echo \think\Session::get('name'); ?></span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="page_user_profile_1.html">
                                <i class="icon-user"></i> 个人信息 </a>
                        </li>

                        <!--<li>-->
                            <!--<a href="app_todo.html">-->
                                <!--<i class="icon-rocket"></i> My Tasks-->
                                <!--<span class="badge badge-success"> 7 </span>-->
                            <!--</a>-->
                        <!--</li>-->
                        <li class="divider"> </li>
                        <!--<li>-->
                            <!--<a href="page_user_lock_1.html">-->
                                <!--<i class="icon-lock"></i> Lock Screen </a>-->
                        <!--</li>-->
                        <li>
                            <a href="<?php echo url('index/index/logout'); ?>">
                                <i class="icon-key"></i> 退出 </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
         <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <li class="sidebar-toggler-wrapper hide">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler"> </div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>
                <?php if((\think\Session::get('type') == 3)): ?>
                <li class="nav-item start active open">
                    <a href="<?php echo url('student/index/index'); ?>" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">首页</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <?php else: ?>
                <li class="nav-item start active open">
                    <a href="<?php echo url('admin/index/index'); ?>" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">首页</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <?php endif; ?>

                <li class="heading">
                    <h3 class="uppercase">功能</h3>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-diamond"></i>
                        <span class="title">贵重物品管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="ui_colors.html" class="nav-link ">
                                <span class="title">Color Library</span>
                            </a>
                        </li>

                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <span class="title">Page Progress Bar</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item ">
                                    <a href="ui_page_progress_style_1.html" class="nav-link "> Flash </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-pointer"></i>
                        <span class="title">离校登记管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="maps_google.html" class="nav-link ">
                                <span class="title">Google Maps</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="maps_vector.html" class="nav-link ">
                                <span class="title">Vector Maps</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="maps_vector.html" class="nav-link nav-toggle">
                        <i class=" icon-wrench"></i>
                        <span class="title">报修信息管理</span>
                        <span class="badge badge-danger">2</span>
                    </a>
                </li>
                <?php if((\think\Session::get('type') == 0 OR \think\Session::get('type') == 1 OR \think\Session::get('type') == 2)): ?>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-layers"></i>
                        <span class="title">学校相关信息管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="<?php echo url('admin/academyinfo/index'); ?>" class="nav-link ">
                                <span class="title">学院信息</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('admin/majorinfo/index'); ?>" class="nav-link ">
                                <span class="title">专业信息</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('admin/classinfo/index'); ?>" class="nav-link ">
                                <span class="title">班级信息</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('admin/dormitoryinfo/index'); ?>" class="nav-link ">
                                <span class="title">宿舍信息</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <?php endif; ?>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-puzzle"></i>
                        <span class="title">违规信息管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="components_date_time_pickers.html" class="nav-link ">
                                <span class="title">宿舍违规</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_color_pickers.html" class="nav-link ">
                                <span class="title">晚归</span>
                                <span class="badge badge-danger">2</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
            <!-- END SIDEBAR MENU -->
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?php echo url('admin/majorinfo/MajorInfo'); ?>">学校相关信息管理</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>专业信息</span>
        </li>
    </ul>
    <div class="page-toolbar">
        <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
            <i class="icon-calendar"></i>&nbsp;
            <span class="thin uppercase hidden-xs">October 25, 2016 - November 23, 2016</span>&nbsp;
            <i class="fa fa-angle-down"></i>
        </div>
    </div>
</div>



<div class="portlet light bordered">
    <div class="common-alert alert alert-danger display-hide" >
        <button class="close" data-close="alert"></button>
        <span>请填写专业名称</span>
    </div>
    <div class="error-alert_danger alert alert-danger display-hide" id="error_log_danger">

    </div>
    <div class="error-alert_warning alert alert-warning display-hide" id="error_log_warning">

    </div>

    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject bold uppercase">专业信息表</span>
        </div>
        <div class="tools">
            <div class="row">
                <div class="col-md-12">
                    <div class="dt-buttons">
                        <a class="dt-button buttons-print btn purple btn-outline" id="add">
                            <span>添加</span>
                        </a>
                        <!--<a class="dt-button buttons-print btn dark btn-outline" >-->
                            <!--<span>打印</span>-->
                        <!--</a>-->
                        <!--<a class="dt-button buttons-copy buttons-flash btn red btn-outline" >-->
                            <!--<span>复制</span>-->
                            <!--<div style="position: absolute; left: 0px; top: 0px; width: 55px; height: 31px; z-index: 99;">-->
                                <!--<embed id="ZeroClipboard_TableToolsMovie_1" src="//cdn.datatables.net/buttons/1.0.0/swf/flashExport.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="55" height="31" name="ZeroClipboard_TableToolsMovie_1" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=1&amp;width=55&amp;height=31" wmode="transparent">-->
                            <!--</div>-->
                        <!--</a>-->
                        <!--<a class="dt-button buttons-pdf buttons-html5 btn green btn-outline" >-->
                            <!--<span>生成PDF</span>-->
                        <!--</a>-->
                        <a class="dt-button buttons-excel buttons-flash btn yellow btn-outline" >
                            <span>生成Excel</span>
                            <div style="position: absolute; left: 0px; top: 0px; width: 55px; height: 31px; z-index: 99;">
                                <embed id="ZeroClipboard_TableToolsMovie_2" src="//cdn.datatables.net/buttons/1.0.0/swf/flashExport.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="55" height="31" name="ZeroClipboard_TableToolsMovie_2" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=2&amp;width=55&amp;height=31" wmode="transparent">
                            </div>
                        </a>
                        <!--<a class="dt-button buttons-csv buttons-html5 btn purple btn-outline" >-->
                            <!--<span>生成CSV</span>-->
                        <!--</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div id="sample_1_wrapper" class="dataTables_wrapper no-footer">

            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="dataTables_length" id="sample_1_length">
                        <label>
                            <select name="select_page_Major" onchange="select_page('','')" id="select_page_Major" class="form-control input-sm input-xsmall input-inline">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="-1">All</option>
                            </select> 行
                        </label>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div id="sample_1_filter" class="dataTables_filter">
                        <label>
                            <input type="search" class="form-control input-sm input-small input-inline" id="MajorName" name="Name" placeholder="请输入学院或专业名称" aria-controls="sample_1">
                            <button class="btn" onclick="search_mj()">搜索</button>
                        </label>
                    </div>
                </div>
            </div>
            <div class="table-scrollable">
                <table class="table">
                    <thead>
                    <tr role="row">
                        <th class="sorting_desc" style="width: 163px;" >
                            学院名称
                        </th>
                        <th class="sorting_desc" style="width: 163px;" >
                            专业名称
                        </th>
                        <th class="sorting" style="width: 205px;">
                            操作
                        </th>
                    </tr>
                    </thead>
                    <tr role="row" id="add_tr" style="display: none">
                        <form action="<?php echo url('admin/majorinfo/MajorAdd'); ?>" method="post">
                            <td>
                                <select class="form-control" name="AId">
                                    <?php if(is_array($academyinfo) || $academyinfo instanceof \think\Collection): $i = 0; $__LIST__ = $academyinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $vo['AcademyId']; ?>"><?php echo $vo['AcademyName']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </td>
                            <td class="sorting_1 form-group">
                                <input type="text" id="add_input" name="Major" class="form-control input-small" value="">
                            </td>
                            <td>
                                <button id="save" type="submit" class="dt-button buttons-print btn green btn-outline">
                                    <span>保存</span>
                                </button>
                                <a id="cancel" class="dt-button buttons-print btn red btn-outline">
                                    <span>取消</span>
                                </a>
                            </td>
                        </form>
                    </tr>
                    <tbody id="Major_row">
                        <?php if(is_array($majorinfo) || $majorinfo instanceof \think\Collection): $i = 0; $__LIST__ = $majorinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <!--<form action="<?php echo url('admin/majorinfo/MajorUpdate'); ?>?MajorId=<?php echo $vo['MajorId']; ?>" method="post">-->
                        <tr role="row" class="even">
                            <td id="td_row_Academy_<?php echo $vo['MajorId']; ?>">
                                <?php echo $vo['AcademyName']; ?>
                            </td>
                            <td id="td_row_<?php echo $vo['MajorId']; ?>">
                                <?php echo $vo['MajorName']; ?>
                            </td>
                            <!--默认隐藏 更新时显示input标签-->
                            <td id="td_update_row_<?php echo $vo['MajorId']; ?>" style="display:none">
                                <input type="text" id="update_input" class="form-control input-small" name="Update_Major" value="<?php echo $vo['MajorName']; ?>">
                            </td>
                            <td>
                                <!--默认隐藏 更新时显示按钮-->
                                <button id="update_save_button_<?php echo $vo['MajorId']; ?>" onclick="save_change('<?php echo $vo['MajorId']; ?>')" class="dt-button buttons-print btn green btn-outline" style="display: none" href="" >
                                    <span>保存</span>
                                </button>
                                <a id="update_cal_button_<?php echo $vo['MajorId']; ?>" class="dt-button buttons-print btn red btn-outline" style="display:none" onclick="cancel('<?php echo $vo['MajorId']; ?>')" >
                                    <span>取消</span>
                                </a>
                            <!--默认隐藏-->
                                <a id="update_button_<?php echo $vo['MajorId']; ?>" class="dt-button buttons-print btn green btn-outline" onclick="change('<?php echo $vo['MajorId']; ?>')">
                                    <span>更新</span>
                                </a>
                                <a id="delete_button_<?php echo $vo['MajorId']; ?>" class="dt-button buttons-print btn red btn-outline" onclick="Delete('<?php echo $vo['MajorId']; ?>')">
                                    <span>删除</span>
                                </a>
                            </td>
                        </tr>
                            <!--</form>-->
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <div class="dataTables_info" role="status" aria-live="polite" id="page_all">
                        <?php echo $page_assign['page_all']; ?>

                    </div>
                </div>
                <div class="col-md-7 col-sm-12">
                    <div class="dataTables_paginate paging_bootstrap_number" id="paging" >
                        <?php echo $page_assign['page_content']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    /*
     * 页码显示函数
     */
    //获取select对象
    var se = document.getElementById("select_page_Major");
    function select_page(page,pagesize) {
        var select_page_v=se.value;
        if(page =='' && pagesize==''){
            //定义一页显示多少条
            var search=document.getElementById("MajorName").value;
            if(search ==''){
                data_trans={pagesize:select_page_v};
            }else{
                data_trans={pagesize:select_page_v,Name:search};
            }
        }else{
            data_trans={pagesize:pagesize,page:page};
        }
        $.ajax({
            cache:false,
            type:"POST",
            url:"<?php echo url('admin/majorinfo/majorinfo'); ?>",
            dataType:"json",
            data: data_trans,
            timeout:30000,
            error:function(){
                alert("出错");
            },
            success:function(data){
                $("#Major_row").empty();
                var count = data.length;
                var i = 0;
                var b="";
                for(i=0;i<count;i++){
                    //数据
                    b+="<tr role='row' class='even' ><td id='td_row_Academy_"+data[i].MajorId+"'>"+data[i].AcademyName+"</td><td id='td_row_"+data[i].MajorId+"'>"+data[i].MajorName+"</td>"
                    //操作按钮
                    b+="<td id='td_update_row_"+data[i].MajorId+"' style='display:none'><input type='text' id='update_input' class='form-control input-small' name='Update_Major' value='"+data[i].MajorName+"'> </td><td> <!--默认隐藏 更新时显示按钮--> <button id='update_save_button_"+data[i].MajorId+"' onclick='save_change("+data[i].MajorId+")' class='dt-button buttons-print btn green btn-outline' style='display: none'><span>保存</span></button><a id='update_cal_button_"+data[i].MajorId+"' class='dt-button buttons-print btn red btn-outline' style='display:none' onclick='cancel("+data[i].MajorId+")'><span>取消</span></a> <!--默认隐藏--> <a id='update_button_"+data[i].MajorId+"' class='dt-button buttons-print btn green btn-outline' onclick='change("+data[i].MajorId+")'><span>更新</span> </a> <a id='delete_button_"+data[i].MajorId+"' class='dt-button buttons-print btn red btn-outline' onclick='Delete("+data[i].MajorId+")'> <span>删除</span></a></td></tr>"
                }
                //从新加载数据
                $("#Major_row").append(b);
                //清空页码显示div
                $("#paging").empty();
                //重新加载页码div
                $("#paging").append(data[0].paging);
                //清空总页码
                $("#page_all").empty();
                //重新加载总页码div
                $("#page_all").append(data[0].pageall);
            }
        });
//        //使用localStorage存储当前select的值和位置，便于刷新的时候从新获取
//        localStorage.value = se.value;
//        localStorage.index = se.selectedIndex;
//        window.location.href="<?php echo url('admin/academyinfo/academyinfo'); ?>?pagesize="+select_page_v;
    }
    //页面重新加载时从localStorage读取select所在位置
    //    window.onload = function(){
    ////    alert( localStorage.index +";"+ localStorage.value );
    //        se.options[ localStorage.index ].selected = true;
    //    }
    //var search;
    function search_mj() {
        //var search=document.getElementById("search").value;
        select_page('','');
    }
    /**
     * 更新处理函数
     */
    function save_change(MajorId) {
        var MajorName =document.getElementById('update_input').value;
        //alert(MajorName);
        data_trans={MajorId:MajorId,MajorName:MajorName};
        $.ajax({
            cache:false,
            type:"POST",
            url:"<?php echo url('admin/majorinfo/MajorUpdate'); ?>",
            dataType:"json",
            data: data_trans,
            timeout:30000,
            error:function(){
                alert("系统出错，请联系我们！");
            },
            success:function(data){
                select_page('','');
                var m="";
                //显示更新成功对话框
                if(data.flag ==1){
                    $("#error_log_warning").empty();
                    m+="<button class='close' type='button'  data-close='alert'></button><span>"+data.mesg+"</span>"
                    $("#error_log_warning").append(m);
                    $(".error-alert_warning").show(100);
                }
                //显示更新失败对话框
                else{
                    $("#error_log_danger").empty();
                    m+="<button class='close' type='button'  data-close='alert'></button><span>"+data.mesg+"</span>"
                    $("#error_log_danger").append(m);
                    $(".error-alert_danger").show(100);
                }
            }


        });
    }
    /*
     *删除方法
     */
    function Delete(MajorId) {
        if(confirm("此操作不可逆，您真的要删除吗？")){
            data_trans={MajorId:MajorId};
            //alert(AcademyId);
            $.ajax({
                cache:false,
                type:"POST",
                url:"<?php echo url('admin/Majorinfo/MajorDelete'); ?>",
                dataType:"json",
                data: data_trans,
                timeout:30000,
                error:function(){
                    alert("系统出错，请联系我们！");
                },
                success:function(data){
                    select_page('','');
                    var m="";
                    //显示更新成功对话框
                    if(data.flag ==1){
                        $("#error_log_warning").empty();
                        m+="<button class='close' type='button'  data-close='alert'></button><span>"+data.mesg+"</span>"
                        $("#error_log_warning").append(m);
                        $(".error-alert_warning").show(100);
                    }
                    //显示更新失败对话框
                    else{
                        $("#error_log_danger").empty();
                        m+="<button class='close' type='button'  data-close='alert'></button><span>"+data.mesg+"</span>"
                        $("#error_log_danger").append(m);
                        $(".error-alert_danger").show(100);
                    }
                }


            });
        }
    }

</script>

        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner"> <?php echo date('Y');?> &copy; 学生公寓管理系统 by wangbowen.
        <a href="http://weibo.com/u/3640108854" title="my weibo" target="_blank">我的微博</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>

</body>

</html>
<script src="/../public/static/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>