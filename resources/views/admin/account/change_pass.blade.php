<form class="form" autocomplete="off" novalidate="novalidate" id="kt_login_change_form">
    <div class="card card-custom card-stretch">
        <div class="card-header py-3">
            <div class="card-title align-items-start flex-column">
                <h3 class="card-label font-weight-bolder text-dark">{{ __('lang.changepass') }}</h3>
                <span class="text-muted font-weight-bold font-size-sm mt-1">{{ __('lang.changeyourpass') }}</span>
            </div>
            <div class="card-toolbar">
                <button type="button" id="change_pass" class="btn btn-success mr-2">{{ __('lang.save') }}</button>
                <button type="reset" class="btn btn-secondary">{{ __('lang.reset') }}</button>
            </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="form-group">
                    <label>{{ __('lang.oldpass') }}:</label>
                    <input id="old_password" class="form-control form-control-solid" type="password"
                        placeholder="{{ __('lang.oldpass') }}" name="opassword" autocomplete="off" />
                </div>
                <div class="form-group">
                    <label>{{ __('lang.newpass') }}:</label>
                    <input id="password" class="form-control form-control-solid" type="password"
                        placeholder="{{ __('lang.newpass') }}" name="password" autocomplete="off" />
                </div>
                <div class="form-group">
                    <label>{{ __('lang.repass') }}:</label>
                    <input id="re_password" class="form-control form-control-solid" type="password"
                        placeholder="{{ __('lang.repass') }}" name="cpassword" autocomplete="off" />
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    var validation;
    var form = KTUtil.getById('kt_login_change_form');
    FormValidation.validators.checkPassword = strongPassword;
    validation = FormValidation.formValidation(
        form, {
            fields: {
                opassword: {
                    validators: {
                        notEmpty: {
                            message: '{{ __('lang.notempty') }}'
                        },
                        stringLength: {
                            max: 255,
                            message: '{{ __('lang.stringLength') }}',
                        },
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: '{{ __('lang.notempty') }}'
                        },
                        checkPassword: {
                            message: '{{ __('lang.notpass') }}'
                        },
                        stringLength: {
                            max: 255,
                            message: '{{ __('lang.stringLength') }}',
                        },
                    }
                },
                cpassword: {
                    validators: {
                        notEmpty: {
                            message: '{{ __('lang.notempty') }}'
                        },
                        identical: {
                            compare: function() {
                                return form.querySelector('[name="password"]').value;
                            },
                            message: '{{ __('lang.notrepass') }}'
                        }
                    }
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap()
            }
        }
    );
    $('#change_pass').on('click', function(e) {
        e.preventDefault();
        var admin_old_password = $('#old_password').val();
        var admin_password = $('#password').val();
        validation.validate().then(function(status) {
            if (status != 'Valid') {
                swal.fire({
                    text: "{{ __('lang.sorry') }}",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "{{ __('lang.ok') }}!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-primary"
                    }
                }).then(function() {
                    KTUtil.scrollTop();
                });
            } else {
                axios.post('change-new-pass',{
                    admin_old_password: admin_old_password,
                    admin_password: admin_password,
                })
                .then(function (response) {
                    console.log(response);
                    if (response.data == 0) {
                        Swal.fire("", "{{ __('lang.old_pass_incorrect') }}!", "warning");
                    } else if (response.data == 1) {
                        Swal.fire("", "{{ __('lang.change_pass_success') }}!", "success");
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
            }
        });
    });
</script>
