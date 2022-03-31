<div class="card card-custom">
    <div class="card-header flex-wrap py-5">
        <div class="card-title">
            <h3 class="card-label">{{__('lang.customer')}}
                {{-- <span class="d-block text-muted pt-2 font-size-sm">{{__('lang.accemployeemanager')}}</span> --}}
            </h3>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-separate table-head-custom table-checkable display nowrap" cellspacing="0"
            width="100%" id="kt_datatable">
            <thead>
                <tr>
                    <th>{{__('lang.no.')}}</th>
                    <th>{{__('lang.fullname')}}</th>
                    <th>Email</th>
                    <th>{{__('lang.phone')}}</th>
                    <th>{{__('lang.balance')}}</th>
                    <th>{{__('lang.role')}}</th>
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
            ajax: '{{ url('/fetchdata-customer') }}',
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
                    'data': 'customer_email'
                },
                {
                    'data': 'customer_phone'
                },
                {
                    'data': null,
                    render: function(data, type, row) {
                        return `${row.customer_balance} FPI`;
                    }
                },
                {
                    'data': null,
                    sortable: false,
                    overflow: 'visible',
                    autoHide: false,
                    render: function(data, type, row) {
                        if (row.customer_role == 1) {
                            return `\
                            <span data-role="0" data-id_customer='${row.id}' style="cursor: pointer" class="update_role label label-lg label-light-success label-inline">Vip Member</span>\
                            `;
                        } else if (row.customer_role == 0) {
                            return `\
                            <span data-role="1" data-id_customer='${row.id}' style="cursor: pointer" class="update_role label label-lg label-light-primary label-inline"">Member</span>\
                            `;
                        }
                    }
                },
                {
                    'data': null,
                    sortable: false,
                    width: '75px',
                    overflow: 'visible',
                    autoHide: false,
                    render: function(data, type, row) {
                        return `\
                            <span data-id_customer='${row.id}' class="delete btn btn-sm btn-clean btn-icon" title="Delete">\
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
        $(document).on('click', '.update_role', function(e) {
            e.preventDefault();
            var id = $(this).data('id_customer');
            var role = $(this).data('role');
            Swal.fire({
                    title: "{{__('lang.question')}}",
                    text: "{{__('lang.are_you_sure_update')}}?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonText: "{{__('lang.ok')}}!",
                    cancelButtonText: "{{__('lang.no')}}"
                })
                .then(function(result) {
                    if (result.value) {
                        axios.get('update-role/' + id + role)
                        .then(function (response) {
                            Swal.fire({
                                icon: "success",
                                title: "{{__('lang.success')}}",
                                text: "{{__('lang.update_success')}}",
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
        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            var id = $(this).data('id_customer');
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
                        axios.get('delete-customer/' + id)
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
        });
    })
</script>
