"use strict";

// Class Definition
var KTLogin = (function() {
    var _login;

    var _showForm = function(form) {
        var cls = "login-" + form + "-on";
        var form = "kt_login_" + form + "_form";

        _login.removeClass("login-forgot-on");
        _login.removeClass("login-signin-on");
        _login.removeClass("login-signup-on");

        _login.addClass(cls);

        KTUtil.animateClass(
            KTUtil.getById(form),
            "animate__animated animate__backInUp"
        );
    };

    function _send_token(admin_username) {
        $.ajax({
            url: "send-token",
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name = "csrf-token" ]').attr("content"),
            },
            data: {
                admin_username: admin_username,
            },
        });
    }
    const strongPassword = function() {
        return {
            validate: function(input) {
                const value = input.value;
                if (value === "") {
                    return {
                        valid: true,
                    };
                }

                if (value.length < 8) {
                    return {
                        valid: false,
                    };
                }

                if (value === value.toLowerCase()) {
                    return {
                        valid: false,
                    };
                }

                if (value === value.toUpperCase()) {
                    return {
                        valid: false,
                    };
                }

                if (value.search(/[0-9]/) < 0) {
                    return {
                        valid: false,
                    };
                }

                return {
                    valid: true,
                };
            },
        };
    };
    var _handleSignInForm = function() {
        var validation;

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
            KTUtil.getById("kt_login_signin_form"), {
                fields: {
                    username: {
                        validators: {
                            notEmpty: {
                                message: "Please enter your account",
                            },
                        },
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: "Please enter password",
                            },
                        },
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                    //defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
                    bootstrap: new FormValidation.plugins.Bootstrap(),
                },
            }
        );

        $("#kt_login_signin_submit").on("click", function(e) {
            e.preventDefault();
            var admin_username = $("#admin_username").val();
            var admin_password = $("#admin_password").val();
            validation.validate().then(function(status) {
                if (status != "Valid") {
                    swal.fire({
                        text: "Sorry, there seems to have been some error, please try again.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "OK!",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light-primary",
                        },
                    }).then(function() {
                        KTUtil.scrollTop();
                    });
                } else {
                    $.ajax({
                        url: "admin-dashboard",
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": $(
                                'meta[name = "csrf-token" ]'
                            ).attr("content"),
                        },
                        data: {
                            admin_username: admin_username,
                            admin_password: admin_password,
                        },
                        success: function(data) {
                            if (data == 0) {
                                Swal.fire(
                                    "",
                                    "Wrong account or password!",
                                    "warning"
                                );
                            } else {
                                window.location = "admin";
                            }
                        },
                    });
                }
            });
        });

        // Handle forgot button
        $("#kt_login_forgot").on("click", function(e) {
            e.preventDefault();
            _showForm("forgot");
        });

        // Handle signup
        $("#kt_login_signup").on("click", function(e) {
            e.preventDefault();
            _showForm("signup");
        });
    };
    var _handleSignUpForm = function(e) {
        var validation;
        var form = KTUtil.getById("kt_login_signup_form");
        FormValidation.validators.checkPassword = strongPassword;
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(form, {
            fields: {
                token: {
                    validators: {
                        notEmpty: {
                            message: "Please enter the token code",
                        },
                    },
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: "Please enter password",
                        },
                        checkPassword: {
                            message: "Password must be at least 8 characters including numbers and uppercase and lowercase letters",
                        },
                    },
                },
                cpassword: {
                    validators: {
                        notEmpty: {
                            message: "Please enter password",
                        },
                        identical: {
                            compare: function() {
                                return form.querySelector('[name="password"]')
                                    .value;
                            },
                            message: "Two passwords please match",
                        },
                    },
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap(),
            },
        });
        $("#kt_login_signup_submit").on("click", function(e) {
            e.preventDefault();
            var admin_username = $("#username_forgot").val();
            var admin_token = $("#token").val();
            var admin_password = $("#password").val();
            validation.validate().then(function(status) {
                if (status == "Valid") {
                    $.ajax({
                        url: "reset-pass",
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": $(
                                'meta[name = "csrf-token" ]'
                            ).attr("content"),
                        },
                        data: {
                            admin_username: admin_username,
                            admin_token: admin_token,
                            admin_password: admin_password,
                        },
                        success: function(data) {
                            if (data == 0) {
                                Swal.fire(
                                    "",
                                    "Your token has expired!",
                                    "warning"
                                );
                            } else if (data == 1) {
                                Swal.fire(
                                    "",
                                    "Change password successfully!",
                                    "success"
                                );
                                _showForm("signin");
                            }
                        },
                    });
                } else {
                    swal.fire({
                        text: "Sorry, there seems to have been some error, please try again.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "OK!",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light-primary",
                        },
                    }).then(function() {
                        KTUtil.scrollTop();
                    });
                }
            });
        });

        // Handle cancel button
        $("#kt_login_signup_cancel").on("click", function(e) {
            e.preventDefault();

            _showForm("signin");
        });
    };
    var _handleForgotForm = function(e) {
        var validation;

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
            KTUtil.getById("kt_login_forgot_form"), {
                fields: {
                    username: {
                        validators: {
                            notEmpty: {
                                message: "Please enter your user name",
                            },
                        },
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap(),
                },
            }
        );

        // Handle submit button
        $("#kt_login_forgot_submit").on("click", function(e) {
            e.preventDefault();
            validation.validate().then(function(status) {
                if (status == "Valid") {
                    var admin_username = $("#username_forgot").val();
                    $.ajax({
                        url: "recover-pass",
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": $(
                                'meta[name = "csrf-token" ]'
                            ).attr("content"),
                        },
                        data: {
                            admin_username: admin_username,
                        },
                        success: function(data) {
                            if (data == 0) {
                                Swal.fire(
                                    "",
                                    "This username has not been registered for an account!",
                                    "warning"
                                );
                            } else if (data == 1) {
                                Swal.fire(
                                    "",
                                    "Please check your email to reset your password!",
                                    "success"
                                );
                                _showForm("signup");
                                _send_token(admin_username);
                            }
                        },
                    });
                } else {
                    swal.fire({
                        text: "Sorry, there seems to have been some error, please try again.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "OK!",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light-primary",
                        },
                    }).then(function() {
                        KTUtil.scrollTop();
                    });
                }
            });
        });
        // Handle cancel button
        $("#kt_login_forgot_cancel").on("click", function(e) {
            e.preventDefault();

            _showForm("signin");
        });
    };

    // Public Functions
    return {
        // public functions
        init: function() {
            _login = $("#kt_login");

            _handleSignInForm();
            _handleSignUpForm();
            _handleForgotForm();
        },
    };
})();

// Class Initialization
jQuery(document).ready(function() {
    KTLogin.init();
});