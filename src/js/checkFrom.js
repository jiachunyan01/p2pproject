$(function() {
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
                phone: {
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
        .on('success.form.bv', function(e) {
            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});