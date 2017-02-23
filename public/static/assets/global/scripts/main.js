$(function () {
    //按钮单击刷新页面
    $("button[name='refresh']").on('click',function () {
        $('#DataTable').DataTable().ajax.reload();
    });
    //设置定时刷新，myrefresh为定时刷新执行的函数，3000为2秒
    //setInterval(myrefresh,30000);
    //定时刷新刷新页面处理方法
    $("select[name='refresh']").on('change',function () {
        var time=$(this).val();
        if(time == 0 ){
            var times=setInterval("$('#DataTable').DataTable().ajax.reload()",time);
            for(i=0;i<=times;i++){
                clearInterval(i);
            }
        }
        else{
            var times=setInterval("$('#DataTable').DataTable().ajax.reload()",time);
            for(i=0;i<times;i++){
                clearInterval(i);
            }
        }

    });
})


/**
 * Created by wbw on 2017/2/18.
 */
//全局ajaxx操作
$.ajaxSetup({
    waitting: false,
    $msg_box: null,
    beforeSend: function(XHR) {
        if ((this.type == 'POST' && this.waitting != false) || this.waitting != false) {
            if (true == this.waitting || this.waitting == '') {
                this.waitting = '请稍后...';
            }
            if (this.waitting != undefined) {
                this.$msg_box = alertMsg(this.waitting, -1);
            }
        }
        this.custom = {};
        this.custom.success = this.success;
        this.custom.error = this.error;
        this.custom.complete = this.complete;

        this.success = function(data, textStatus, jqXHR) {
            if (typeof data.msg == 'string' && data.msg != '') {
                alertMsg(data.msg);
            }
            var response_type = jqXHR.getResponseHeader("Content-Type");

            //bootstrap model获取的html代码获取
            if (this.dataType != 'json' && response_type == 'application/json; charset=utf-8') {
                if (typeof this.custom.success == 'function') {
                    data = $.parseJSON(data);
                    this.custom.success(data, textStatus, jqXHR);
                }
                return;
            }
            //注册页面的学院，专业，宿舍的数据返回
            if (this.dataType == 'json' && response_type == 'application/json; charset=utf-8' || response_type == 'application/json; charset=UTF-8') {
                if (typeof this.custom.success == 'function') {
                    this.custom.success(data, textStatus, jqXHR);
                }
                return;
            }
            //datatable表格数据处理
            if (this.dataType == 'json' && response_type == 'text/html; charset=utf-8' || response_type == 'text/html' || response_type == 'text/html; charset=UTF-8' ) {
                if (typeof this.custom.success == 'function') {
                    this.custom.success(data, textStatus, jqXHR);
                }
                return;
            }

            if (data.url !='') {
                // alert("123");
            }

            if (data.code !='') {
                if (data.code == 1) {
                    if (typeof this.custom.success == 'function') {
                        return this.custom.success(typeof data.msg == 'object' ? data.msg : {}, textStatus, jqXHR);
                    } else {
                        return;
                    }
                } else if (data.code == 0) {
                    if (typeof this.custom.error == 'function') {
                        if (typeof data.msg == 'object') {
                            alertMsg('操作失败！', 'warning');
                            return this.custom.error(data.msg, textStatus, jqXHR);
                        } else {
                            return this.custom.error({}, textStatus, jqXHR);
                        }
                    } else {
                        return;
                    }
                }
            } else if (typeof this.custom.success == 'function') {
                this.custom.success(data, textStatus, jqXHR);
            }
        };
        this.error = function(data, textStatus, jqXHR) {
            if (typeof this.custom.error == 'function') {
                this.custom.error({}, textStatus, jqXHR);
            } else {
                alertMsg('网络连接失败，请稍后再试！', 'error');
            }
        };
        this.complete = function(XHR, TS) {
            if (this.$msg_box != null) {
                this.$msg_box.remove();
            }
            if (typeof this.custom.complete == 'function') {
                this.custom.complete(XHR, TS);
            }

            if (typeof this.dialog == 'object') {
                this.dialog.remove();
            }
        };
    }
});




//jquery扩展ajax提交表单
$.fn.ajaxSubmit = function() {
    var $form = this;
    var $submit = $form.find(':submit');
    $submit.attr('disabled', true).toggleClass('btn-primary');
    $.ajax({
        url: $form.attr('action'),
        type: $form.attr('method'),
        data: $form.serialize(),
        dataType: 'json',
        success: function(data, str) {
            $form.data('submited', true);
            var result = $form.triggerHandler('submited', [data, str]);
            if (result == false) {
                return false;
            }

            var form_success = $form.data('success');
            // 表单提交后操作
            if (form_success == 'refresh') { // 刷新本页
                window.location.reload();
            } else {
                var $modal = $form.children('.modal');
                if ($modal.length == 0) {
                    if ($form.hasClass('modal')) {
                        $modal = $form;
                    } else {
                        var $parent = $form.parent();

                        if ($parent.hasClass('modal')) {
                            $modal = $parent;
                        }
                    }
                }

                if ($modal.length > 0) {
                    $modal.modal('hide');
                }

                $submit.removeAttr('disabled', false).toggleClass('btn-primary');
                $form.find('.form-group').removeClass('success');

            }
        },
        error: function(data) {
            $submit.removeAttr('disabled', false).toggleClass('btn-primary');
        },
        complete: function(data) {}
    });
};

//** 弹出提示信息 **//
function alertMsg(content, time) {
    var option = { title: false, content: '', time: 3, status: 'info' };
    if (typeof content == 'object') {
        option = $.extend(option, content);
    } else if (typeof content == "string") {
        option.content = content;
    }

    if (time != undefined && time != '' && !isNaN(time)) {
        option.time = time;
    } else if (typeof time == 'string' && (time == 'info' || time == 'success' || time == 'error' || time == 'warning')) {
        option.status = time;
    }

    var html = '<div id="msg_box_div" style="position:fixed;left:20%;right:20%; top: 65px;z-index:9999;text-align: center;-webkit-transition: opacity .3s linear,top .3s ease-out; -moz-transition: opacity .3s linear,top .3s ease-out;-o-transition: opacity .3s linear,top .3s ease-out;transition: opacity .3s linear,top .3s ease-out;">';
    html += '	<div class="alert alert-' + option.status + '" style="display:inline-block; padding:4px 20px 4px 20px;margin: 0;">';
    if (option.title != undefined && option.title !== false && option.title != '') {
        html += '		<h4>' + option.title + '</h4>';
    }
    html += '		' + option.content;
    html += '	</div>';
    html += '</div>';

    if (option.time > 0) {
        $('#msg_box_div').remove();
    }

    var $msg_box = $(html);
    $msg_box.appendTo('body');

    setTimeout(function() {
        $msg_box.css('top', '60px');
    }, 10);

    if (option.time > 0) {
        var timer = setTimeout(function() {
            $msg_box.remove();
        }, option.time * 1000 + 60);

        $('#msg_box_div').hover(function() {
            window.clearTimeout(timer);
        }, function() {
            timer = setTimeout(function() {
                $msg_box.remove();
            }, option.time * 1000 + 60);
        });
    }

    return $msg_box;
}


 function validate(object) { // jquery.validate验证
    var $form = $(object);
    if ($form.length == 0) {
        return;
    }
    zh_validator();
    $form.each(function(i, form) {
        $form.eq(i).validate({
            errorClass: "help-block",
            errorElement: "span",
            ignore: ".ignore",
            highlight: function(element, errorClass, validClass) {
                var $element = $(element);
                $element.parents('.form-group:eq(0)').addClass('has-error');
                $element.parents('.form-group:eq(0)').removeClass('has-success');
            },
            unhighlight: function(element, errorClass, validClass) {
                var $element = $(element);
                if ($element.attr('aria-invalid') != true) {
                    $element.parents('.form-group:eq(0)').removeClass('has-error');
                    $element.parents('.form-group:eq(0)').addClass('has-success');
                }
            },
            errorPlacement: function($error, $element) {
                if ($element[0].tagName == 'SELECT' && $error.text() == '必须填写') {
                    $error.html('必须选择');
                }
                if (this.errorClass == 'help-block') {
                    $error.insertAfter($element.parent());
                } else {
                    $error.appendTo($element.parent());
                }
            },
            submitHandler: function() {
                var result = $form.eq(i).triggerHandler('valid');
                if (result === false) {
                    return false;
                }
                //判断是不是ajax提交
                if ($form.eq(i).attr('submit') == 'ajax') {
                    $form.eq(i).ajaxSubmit();
                    return false;
                }
                return true;
            }
        });
    });
}



// validator
function zh_validator() {
    // 验证手机号
    jQuery.validator.addMethod("mobile", function(value, element) {
        var tel = /^1[3|4|5|7|8]\d{9}$/;
        return this.optional(element) || (tel.test(value));
    }, "请输入有效的手机号码");
    //验证学号
    jQuery.validator.addMethod("studentno", function(value, element) {
        var tel = /^[2|3|4|5|6][0|1|2|3|4]\d{9}$/;
        return this.optional(element) || (tel.test(value));
    }, "请输入有效的学号");

    // 验证身份证号
    jQuery.validator.addMethod("cardid", function(value, element) {
        var tel = /^(\d{15}$|^\d{18}$|^\d{17}(\d|X|x))$/;
        return this.optional(element) || (tel.test(value));
    }, "请输入有效的身份证号");

    // 自定义正则验证
    jQuery.validator.addMethod("regular", function(value, element) {
        var regular = eval(element.getAttribute('data-rule-regular'));
        return this.optional(element) || (regular.test(value));
    }, "输入有误");

    $.extend($.validator.messages, {
        required: "这是必填字段",
        remote: "请修正此字段",
        email: "请输入有效的电子邮件地址",
        url: "请输入有效的网址",
        date: "请输入有效的日期",
        dateISO: "请输入有效的日期 (YYYY-MM-DD)",
        number: "请输入有效的数字",
        digits: "只能输入数字",
        creditcard: "请输入有效的信用卡号码",
        equalTo: "你的输入不相同",
        extension: "请输入有效的后缀",
        maxlength: $.validator.format("最多可以输入 {0} 个字符"),
        minlength: $.validator.format("最少要输入 {0} 个字符"),
        rangelength: $.validator.format("请输入长度在 {0} 到 {1} 之间的字符串"),
        range: $.validator.format("请输入范围在 {0} 到 {1} 之间的数值"),
        max: $.validator.format("请输入不大于 {0} 的数值"),
        min: $.validator.format("请输入不小于 {0} 的数值")
    });
}

/**
 * 处理添加、编辑、删除操作
 * @param url 操作地址
 * @param data 数据
 * @constructor
 *
 */
function OpenModal(url,action) {
    if(action == 'Edit' || action == 'Delete' || action == 'Check'){
        var table = $('#DataTable').dataTable();
        if( table.$('tr').hasClass('selected')){
            //获取行数据
            var data_row = table.fnGetData(table.$('tr.selected').get(0));
            data = {Id:data_row.id};
        }else{
            alertMsg('请先选择要操作的数据!','danger');
            return false;
        }
        //删除操作ajax提交
        if(action == 'Delete'){
            if(!confirm("此操作不可逆，您真的要删除吗？")){
                return;
            }
            else{
                $.ajax({
                    url: url,
                    waitting: true,
                    dataType: 'json',
                    data: data,
                    waitting: '正在加载，请稍后...',
                    success: function(html) {
                        //alertMsg(html.msg);
                    },
                    error: function() {
                        alertMsg('网络连接失败，请稍后再试！', 'error');
                    },
                });
                $('#DataTable').DataTable().ajax.reload();
                return;
            }
        }
    }else{
        data = '';
    }
    //添加和编辑操作ajax
    $.ajax({
        url: url,
        waitting: true,
        dataType: 'html',
        data: data,
        waitting: '正在加载，请稍后...',
        success: function(html) {
            var $html = $('<div class="dialogModal">' + html + '</div>');
            var $form = $html.find('form');
            if ($form.length == 0) {
                var $modal = $html.find('.modal:eq(0)');
            } else {
                var $modal = $form.find('.modal:eq(0)');
            }
            $html.appendTo('body');

            //检测form表单提交
            var selector = $('body');
            validate(selector.find('form[data-validate="true"]'));
            var $form = selector.find('form[submit="ajax"]');
            $form.each(function(i, item) {
                if ($form.eq(i).data('validate') == true) {
                    return true;
                }
                $form.eq(i).on('submit', function() {
                    $form.eq(i).ajaxSubmit();
                    return false;
                });
            });
            $modal.modal().show();
            //隐藏模态框 刷新表单 移除模态框等元素
            //hide.bs.modal:当调用 hide 实例方法时触发。
            $modal.on('hide.bs.modal', function() {
                if ($form.length > 0 && $form.data('submited') == true) {
                    $('#DataTable').DataTable().ajax.reload();
                }
                $html.remove();
            })

        }
    });


}
// /**
//  *
//  * @param data
//  */
// function del(data) {
//     if(confirm("此操作不可逆，您真的要删除吗？")){
//         data={AdminId:data};
//         $.ajax({
//             url: 'del',
//             waitting: true,
//             dataType: 'json',
//             data: data,
//             waitting: '正在加载，请稍后...',
//             success: function(html) {
//                 //alertMsg(html.msg);
//             },
//             error: function() {
//                 alertMsg('网络连接失败，请稍后再试！', 'error');
//             },
//         });
//         $('#DataTable').DataTable().ajax.reload();
//     }
// }
//datatable的初始化设置
function datatable_extend(){
    $.extend( $.fn.dataTable.defaults, {
        "processing": true,		//显示加载信息
        "serverSide": true,		//开启服务器模式
        "searching": false,		//开启搜索功能
        "autoWidth": false, 	//让Datatables自动计算宽度
        "searching": true,		//开启全局搜索功能
        "select": true,           //开启行选择
        "lengthMenu": [[5, 10, 20, 30, -1], ["5", "10", "20", "30", "all"]],//改变每页显示条数列表的选项
        "pagingType": "full_numbers",		//分页按钮种类显示选项
        "order": [[1, "asc"]], //默认用那列排序
        "iDisplayLength": 5,//jquery datatable默认每页显示多少条数据
        "bFilter": false, //过滤功能

        //表格初始化排序【全选框不用排序】
        "language": {
            "processing": "玩命加载中...",
            "lengthMenu": "显示 _MENU_ 项结果",
            "zeroRecords": "没有匹配结果",

            "search": "搜索:",
            "sSearchPlaceholder": "输入需要搜索的关键字",//输入框内提示
            "url": "",
            "emptyTable": "表中数据为空",
            "loadingRecords": "正在加载数据...",

            //下面三者构成了总体的左下角的内容。
            "info": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
            "infoEmpty": "显示第 0 至 0 项结果，共 0 项",
            "infoFiltered": "(由 _MAX_ 项结果过滤)",
            //"infoPostFix": "",
            "paginate": {
                "first": "首页",
                "previous": "上一页",
                "next": "下一页",
                "last": "尾页"
            },
        },
    });
}















