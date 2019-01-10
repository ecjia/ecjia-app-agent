// JavaScript Document
;(function (app, $) {
    app.agent = {
        init: function () {
            app.agent.submit_form();
        },

        submit_form: function () {
            var $form = $("form[name='theForm']");
            var option = {
                rules: {
                    agent_name: {required: true},
                    mobile_phone: {required: true},
                    login_password: {required: true}
                },
                messages: {
                    agent_name: {required: "请输入代理商名称！"},
                    mobile_phone: {required: "请输入手机号码！"},
                    login_password: {required: "请输入登录密码！"}
                },
                submitHandler: function () {
                    $form.ajaxSubmit({
                        dataType: "json",
                        success: function (data) {
                            ecjia.admin.showmessage(data);
                        }
                    });
                }
            }
            var options = $.extend(ecjia.admin.defaultOptions.validate, option);
            $form.validate(options);
        }
    };
})(ecjia.admin, jQuery);

// end