$(function () {
    //注册表单
    $('#regForm')
        .bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    message: '用户名验证失败',
                    validators: {
                        notEmpty: {
                            message: '用户名必填不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 12,
                            message: '用户名长度在6到12为之间'
                        },
                    }
                },
                password: {
                    message: '密码验证失败',
                    validators: {
                        notEmpty: {
                            message: '密码必填不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 12,
                            message: '密码长度在6到12为之间'
                        },
                    }
                },
                checkPwd: {
                    message: '密码验证失败',
                    validators: {
                        notEmpty: {
                            message: '请再次填写密码'
                        },
                        stringLength: {
                            min: 6,
                            max: 12,
                            message: '确认密码长度在6到12为之间'
                        },
                        identical: {
                            field: 'password',
                            message: '两次输入的密码不一致'
                        }
                    }
                },
                mobile: {
                    message: '手机号验证失败',
                    validators: {
                        notEmpty: {
                            message: '手机号必填不能为空'
                        },
                        regexp: {
                            regexp: /^((1[358][0-9])|(14[57])|(17[0678])|(19[7]))\d{8}$/,
                            message: '手机号码格式不正确'
                        }
                    }
                },
                email: {
                    message: '邮箱验证失败',
                    validators: {
                        notEmpty: {
                            message: '邮箱必填不能为空'
                        },
                        emailAddress: {
                            message: '电子邮件格式不正确'
                        }
                    }
                },


            }
        })
        .on('success.form.bv', function (e) {
            e.preventDefault();
            var $form = $(e.target);
            var bv = $form.data('bootstrapValidator');
            const reqUrl = "./api/userAdd.php";
            const data = $form.serialize();
            $.post(reqUrl, data, function (result) {
                //console.log(result);
                if (result.isSuccess) {
                    alert(result.message);
                    location.href = "./login.php";
                }
                else {
                    alert(result.message);
                }
            }, 'json');
        });
    //登陆表单
    $('#loginForm')
        .bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    message: '用户名验证失败',
                    validators: {
                        notEmpty: {
                            message: '用户名必填不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 12,
                            message: '用户名长度在6到12为之间'
                        },
                    }
                },
                password: {
                    message: '密码验证失败',
                    validators: {
                        notEmpty: {
                            message: '密码必填不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 12,
                            message: '密码长度在6到12为之间'
                        },
                    }
                }


            }
        })
        .on('success.form.bv', function (e) {
            e.preventDefault();
            var $form = $(e.target);
            var bv = $form.data('bootstrapValidator');
            const reqUrl = "./api/userCheck.php";
            const data = $form.serialize();
            $.post(reqUrl, data, function (result) {
                console.log(result);
                if (result.isSuccess) {
                    //登陆成功显示蒙成
                    //设置蒙城标题
                    $("#myModalLabel").text("登陆成功")
                    //设置蒙城内容
                    $("#msgContent").html(`<span class='glyphicon glyphicon-ok'>
                    </span>${result.message},等待<span id='num'>5</span>跳转到个人中心页面~~~`)
                    //定时器修改等待的数字
                    let num = 5;
                    var times = setInterval(() => {
                        num--;
                        $("#num").text(num);
                        if (num == 0) {
                            clearInterval(times);
                            location.href = "./personal.php";
                        }

                    }, 1000)
                    //alert(result.message);

                }
                else {
                    //设置蒙城标题
                    $("#myModalLabel").text("登陆失败")
                    //设置蒙城内容
                    $("#msgContent").html("<span class='glyphicon glyphicon-remove'></span>" + result.message)

                }
                //显示蒙城
                $('#myModal').modal('show')
            }, 'json');
        });
});