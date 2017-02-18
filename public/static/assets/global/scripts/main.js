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
            var response_type = jqXHR.getResponseHeader("Content-Type");
            //bootstrap model获取的html代码获取
            if (this.dataType != 'json' && response_type == 'application/json; charset=utf-8') {
                if (typeof this.custom.success == 'function') {
                    data = $.parseJSON(data);
                    this.custom.success(data, textStatus, jqXHR);
                }
                return;
            }
            //datatable表格数据处理
            if (this.dataType == 'json' && response_type == 'text/html; charset=UTF-8' || response_type == 'text/html' ) {
                if (typeof this.custom.success == 'function') {
                    this.custom.success(data, textStatus, jqXHR);
                }
                return;
            }

            if (typeof data.msg == 'string' && data.msg != '') {
                alertMsg(data.msg);
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
//wqeweqw

