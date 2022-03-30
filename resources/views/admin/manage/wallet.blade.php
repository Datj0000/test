<form class="form" autocomplete="off" novalidate="novalidate" id="form_edit_setting">
    <div class="card card-custom card-stretch">
        <div class="card-header py-3">
            <div class="card-acc align-items-start flex-column">
                <h3 class="card-label font-weight-bolder text-dark">{{ __('lang.wallet') }}</h3>
                {{-- <span class="text-muted font-weight-bold font-size-sm mt-1">{{ __('lang.setting_manager') }}</span> --}}
            </div>
            <div class="card-toolbar">
                <button type="button" id="update_setting" class="btn btn-success mr-2">{{ __('lang.save') }}</button>
                <button type="reset" onclick="load_setting()" class="btn btn-secondary">{{ __('lang.reset') }}</button>
            </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.wallet_balance')}}:</label>
                    <div class="col-lg-9 col-xl-6">
                        <input style="cursor: no-drop" id="wallet_balance" name="wallet_balance" readonly class="form-control form-control-lg form-control-solid"
                            type="text" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.wallet_address')}}:</label>
                    <div class="col-lg-9 col-xl-6">
                        <input id="wallet_address" name="wallet_address" class="form-control form-control-lg form-control-solid"
                            type="text" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    var form = KTUtil.getById('form_edit_setting');
    var validation = FormValidation.formValidation(
        form, {
            fields: {
                wallet_address: {
                    validators: {
                        notEmpty: {
                            message: '{{ __('lang.notempty') }}'
                        },
                    }
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap()
            }
        }
    );

    load_setting();
    function load_setting() {
        axios.get('fetchdata-wallet',{
            wallet_address: wallet_address,
        })
        .then(function (response) {
            $('#wallet_balance').val(response.data.wallet_balance+ " FPI");
            $('#wallet_address').val(response.data.wallet_address);
            validation.validate();
        })
        .catch((error) => {
            console.log(error);
        });
    }
    $(document).ready(function() {
        $('#update_setting').click(function(e) {
            var wallet_address = $('#wallet_address').val();
            validation.validate().then(function(status) {
                if (status == 'Valid') {
                    axios.post('update-wallet',{
                        wallet_address: wallet_address,
                    })
                    .then(function (response) {
                        Swal.fire({
                            icon: "success",
                            title: "{{__('lang.success')}}",
                            text: "{{__('lang.update_success')}}",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    })
                    .catch((error) => {
                        console.log(error);
                    });
                } else {
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
                }
            });
        });
    })
</script>
