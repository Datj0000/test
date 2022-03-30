<div class="card card-custom">
    <div class="card-header flex-wrap py-5">
        <div class="card-title">
            <h3 class="card-label">{{__('lang.recharge')}}
                {{-- <span class="d-block text-muted pt-2 font-size-sm">{{__('lang.accemployeemanager')}}</span> --}}
            </h3>
        </div>
    </div>
    <div class="modal fade" id="exampleModalPopovers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('lang.decentralization')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form">
                        <div class="card-body">
                            <div class="form-group">
                                <label>{{__('lang.fullname')}}:</label>
                                <input id="customer_name" readonly type="text"
                                    class="form-control form-control-solid" />
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input id="customer_email" readonly type="text"
                                    class="form-control form-control-solid" />
                            </div>
                            <div class="form-group">
                                <label>{{__('lang.phone')}}:</label>
                                <input id="customer_phone" readonly type="text"
                                    class="form-control form-control-solid" />
                            </div>
                            <div class="form-group">
                                <label>{{__('lang.tran_from')}}:</label>
                                <input id="tran_from" readonly type="text" class="form-control form-control-solid" />
                            </div>
                            <div class="form-group">
                                <label>{{__('lang.tran_to')}}:</label>
                                <input id="tran_to" readonly type="text" class="form-control form-control-solid" />
                            </div>
                            <div class="form-group">
                                <label>{{__('lang.txHash')}}:</label>
                                <input id="txHash" readonly type="text" class="form-control form-control-solid" />
                            </div>
                            <div class="form-group">
                                <label>{{__('lang.amount')}}:</label>
                                <input id="amount" readonly type="text" class="form-control form-control-solid" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-separate table-head-custom table-checkable display nowrap" cellspacing="0"
            width="100%" id="kt_datatable">
            <thead>
                <tr>
                    <th>{{__('lang.no.')}}</th>
                    <th>{{__('lang.fullname')}}</th>
                    <th>{{__('lang.amount')}}</th>
                    <th>{{__('lang.created_at')}}</th>
                    <th>{{__('lang.function')}}</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        var i = 0;
        var table = $('#kt_datatable').DataTable({
            ajax: '{{ url('/fetchdata-recharge') }}',
            columns: [{
                    'data': null,
                    render: function() {
                        return i = i + 1
                    }
                },
                {
                    'data': 'customer_name'
                },
                {
                    'data': null,
                    render: function(data, type, row) {
                        return `${row.amount} FPI`;
                    }
                },
                {
                    'data': 'created_at'
                },
                {
                    'data': null,
                    sortable: false,
                    width: '75px',
                    overflow: 'visible',
                    autoHide: false,
                    render: function(data, type, row) {
                        return `\
                            <span data-toggle="modal" data-target="#exampleModalPopovers" data-id_recharge='${row.recharge_id}' class="view btn btn-sm btn-clean btn-icon" title="View detail">\
								<i class="la la-eye"></i>\
							</span>\
                            <span data-id_recharge='${row.recharge_id}' class="delete btn btn-sm btn-clean btn-icon" title="Delete">\
								<i class="la la-trash"></i>\
							</span>\
                            `
                    }
                },
            ],
            responsive: true,
            language: {
                processing: "{{__('lang.loading')}}",
                search: "{{__('lang.search')}}:",
                lengthMenu: "{{__('lang.lengthMenu')}} _MENU_ {{__('lang.lengthMenu2')}}",
                info: "{{__('lang.info')}} _START_ {{__('lang.info2')}} _END_ {{__('lang.info3')}} _TOTAL_ {{__('lang.info4')}}",
                infoEmpty: "{{__('lang.infoEmpty')}}",
                loadingRecords: "{{__('lang.loading')}}",
                zeroRecords: "{{__('lang.zeroRecords')}}",
                emptyTable: "{{__('lang.infoEmpty')}}",
            },
        });
        $(document).on('click', '.view', function(e) {
            e.preventDefault();
            var recharge_id = $(this).data('id_recharge');
            axios.get('view-recharge/' + recharge_id)
            .then(function (response) {
                $('#customer_name').val(response.data.data.customer_name);
                $('#customer_email').val(response.data.data.customer_email);
                $('#customer_phone').val(response.data.data.customer_phone);
                $('#tran_from').val(response.data.data.tran_from);
                $('#tran_to').val(response.data.data.tran_to);
                $('#txHash').val(response.data.data.txHash);
                $('#amount').val(response.data.data.amount);
            })
            .catch((error) => {
                console.log(error);
            });
        });

        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            var recharge_id = $(this).data('id_recharge');
            Swal.fire({
                    title: "{{__('lang.question')}}",
                    text: "{{__('lang.are_you_sure')}}?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonText: "{{__('lang.ok')}}!",
                    cancelButtonText: "{{__('lang.no')}}"
                })
                .then(function(result) {
                    if (result.value) {
                        axios.get('delete-recharge/' + recharge_id)
                        .then(function (response) {
                            Swal.fire({
                                icon: "success",
                                title: "{{__('lang.success')}}",
                                text: "{{__('lang.delete_success')}}",
                                showConfirmButton: false,
                                timer: 1500
                            });
                            i = 0;
                            table.ajax.reload();
                        })
                        .catch((error) => {
                            console.log(error);
                        });
                    }
                });
            e.preventDefault();
        });
    })
</script>
