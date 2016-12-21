var Login = function () {

	var handleLogin = function() {
		$('.login-form').validate({
	            errorElement: 'span', //default input error message container
	            errorClass: 'help-block', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            rules: {
	                username: {
	                    required: true
	                },
	                password: {
	                    required: true
	                },
	                remember: {
	                    required: false
	                }
	            },

	            messages: {
	                username: {
	                    required: "请输入用户名."
	                },
	                password: {
	                    required: "请输入密码."
	                }
	            },

	            invalidHandler: function (event, validator) { //display error alert on form submit   
	                $('.login-alert', $('.login-form')).show();
	            },

	            highlight: function (element) { // hightlight error inputs
	                $(element)
	                    .closest('.form-group').addClass('has-error'); // set error class to the control group
	            },

	            success: function (label) {
	                label.closest('.form-group').removeClass('has-error');
	                label.remove();
	            },

	            errorPlacement: function (error, element) {
	                error.insertAfter(element.closest('.input-icon'));
	            },

	            submitHandler: function (form) {
	                form.submit();
	            }
	        });

	        $('.login-form input').keypress(function (e) {
	            if (e.which == 13) {
	                if ($('.login-form').validate().form()) {
	                    $('.login-form').submit();
	                }
	                return false;
	            }
	        });
	}

	var handleForgetPassword = function () {
		$('.forget-form').validate({
	            errorElement: 'span', //default input error message container
	            errorClass: 'help-block', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            ignore: "",
	            rules: {
	                email: {
	                    required: true,
	                    email: true
	                }
	            },

	            messages: {
	                email: {
	                    required: "请输入注册预留邮箱.",
						email: "请输入正确的邮箱格式"
	                }
	            },

	            invalidHandler: function (event, validator) { //display error alert on form submit   

	            },

	            highlight: function (element) { // hightlight error inputs
	                $(element)
	                    .closest('.form-group').addClass('has-error'); // set error class to the control group
	            },

	            success: function (label) {
	                label.closest('.form-group').removeClass('has-error');
	                label.remove();
	            },

	            errorPlacement: function (error, element) {
	                error.insertAfter(element.closest('.input-icon'));
	            },

	            submitHandler: function (form) {
	                form.submit();
	            }
	        });

	        $('.forget-form input').keypress(function (e) {
	            if (e.which == 13) {
	                if ($('.forget-form').validate().form()) {
	                    $('.forget-form').submit();
	                }
	                return false;
	            }
	        });

	        jQuery('#forget-password').click(function () {
	            jQuery('.login-form').hide();
	            jQuery('.forget-form').show();
	        });

	        jQuery('#back-btn').click(function () {
	            jQuery('.login-form').show();
	            jQuery('.forget-form').hide();
	        });



	}
	var resetPassword = function () {
		//重置密码验证两次密码相等
		$('.reset-form').validate({
			errorElement: 'span', //default input error message container
			errorClass: 'help-block', // default input error message class
			focusInvalid: false, // do not focus the last invalid input
			ignore: "",
			rules: {
				Qrcode: {
					required: true,
					maxlength:5,
					minlength:5,
					number:true
				},
				forget_Password: {
					required: true
				},
				forget_rpassword: {
					required: true,
					equalTo: "#forget_Password"
				}
			},
			messages: {
				Qrcode: {
					required: "请输入邮箱验证码.",
					maxlength:"邮箱验证码为5位",
					minlength:"邮箱验证码为5位",
					number:"邮箱验证码为5位数字"
				},
				forget_Password: {
					required: '请输入密码',
				},
				forget_rpassword: {
					required:'请再次输入密码',
					equalTo: '两次密码不一致'
				}
			},
			invalidHandler: function (event, validator) { //display error alert on form submit

			},
			highlight: function (element) { // hightlight error inputs
				$(element)
					.closest('.form-group').addClass('has-error'); // set error class to the control group
			},

			success: function (label) {
				label.closest('.form-group').removeClass('has-error');
				label.remove();
			},

			errorPlacement: function (error, element) {
				error.insertAfter(element.closest('.input-icon'));
			},

			submitHandler: function (form) {
				form.submit();
			}
		});
	}

	var handleRegister = function () {

         $('.register-form').validate({
	            errorElement: 'span', //default input error message container
	            errorClass: 'help-block', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            ignore: "",
	            rules: {
	                name: {
	                    required: true
	                },
	                email: {
	                    required: true,
						email: true
	                },
	                sex: {
	                    required: true
	                },
					Nationality: {
	                    required: true
	                },
					Birthday: {
	                    required: false
	                },
					PhoneNo:{
						required: true,
						maxlength:11,
						minlength:11,
					},
					Valuables:{
						required: true
					},
					dormitory:{
						required: true
					},
					academy:{
						required: true
					},
					major:{
						required: true
					},
					class:{
						required: true
					},
					EntranceTime:{
						required: true
					},
					StudentNo: {
	                    required: true
	                },
	                Password: {
	                    required: true
	                },
	                rpassword: {
						required: true,
	                    equalTo: "#Password"
	                }
	            },
	            messages: { // custom messages for radio buttons and checkboxes
					name:{
						required:'请输入姓名',
					},
					sex:{
						required:'请选择性别',
					},
					Nationality:{
						required:'请输入民族',
					},
					PhoneNo:{
						required:'请输入电话号码',
						minlength:'电话号码为11位',
						maxlength:'电话号码为11位',
					},
					email:{
						required:'请输入邮箱地址',
						email:'请检查您输入的邮箱',
					},
					Valuables:{
						required:'请输入贵重物品',
					},
					dormitory:{
						required:'请选择宿舍',
					},
					academy:{
						required: '请选择学院',
					},
					major:{
						required: '请选择专业',
					},
					class:{
						required: '请选择班级',
					},
					EntranceTime:{
						required: '请输入入学年份',
					},
					StudentNo: {
						required: '请输入学号',
					},
					Password: {
						required: '请输入密码',
					},
					rpassword: {
						required:'请再次输入密码',
						equalTo: '两次密码不一致'
					}
	            },
				 invalidHandler: function (event, validator) { //display error alert on form submit

				 },

				 highlight: function (element) { // hightlight error inputs
					 $(element)
						 .closest('.form-group').addClass('has-error'); // set error class to the control group
				 },

				 success: function (label) {
					 label.closest('.form-group').removeClass('has-error');
					 label.remove();
				 },

				 errorPlacement: function (error, element) {
					 if (element.closest('.input-icon').size() === 1) {
						 error.insertAfter(element.closest('.input-icon'));
					 } else {
						 error.insertAfter(element);
					 }
				 },

				 submitHandler: function (form) {
					 form.submit();
				 }
	        });
			$('.register-form input').keypress(function (e) {
	            if (e.which == 13) {
	                if ($('.register-form').validate().form()) {
	                    $('.register-form').submit();
	                }
	                return false;
	            }
	        });

	        jQuery('#register-btn').click(function () {
	            jQuery('.login-form').hide();
	            jQuery('.register-form').show();
	        });

	        jQuery('#register-back-btn').click(function () {
	            jQuery('.login-form').show();
	            jQuery('.register-form').hide();
	        });
	}
    
    return {
        //main function to initiate the module
        init: function () {
        	
            handleLogin();
            handleForgetPassword();
            handleRegister();
			resetPassword();

            // init background slide images
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
        }
    };

}();

jQuery(document).ready(function() {
    Login.init();
	var $common =document.getElementById("common_check").value;
	if($common == '0'){
		$('.common-alert', $('.login-form')).show();
	}
});