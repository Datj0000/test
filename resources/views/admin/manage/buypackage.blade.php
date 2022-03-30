<div class="card card-custom">
    <div class="card-header flex-wrap py-5">
        <div class="card-title">
            <h3 class="card-label">{{__('lang.buypackage')}}
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
                    <th>{{__('lang.package')}}</th>
                    <th>{{__('lang.created_at')}}</th>
                    <th>{{__('lang.status')}}</th>
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
            ajax: '{{ url('/fetchdata-buypackage') }}',
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
                        return `${row.package} FPI`;
                    }
                },
                {
                    'data': 'created_at'
                },
                {
                    'data': null,
                    sortable: false,
                    overflow: 'visible',
                    autoHide: false,
                    render: function(data, type, row) {
                        if (row.status == 0) {
                            return `<span class="label label-lg label-light-warning label-inline">In progress</span>`;
                        } else if (row.status == 1) {
                            return `<span class="label label-lg label-light-danger label-inline"">Failed</span>`;
                        } else {
                            return `<span class="label label-lg label-light-success label-inline"">Succeeded</span>`;
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
                            <span data-id_buypackage='${row.buypackage_id}' class="delete btn btn-sm btn-clean btn-icon" title="Delete">\
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

        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            var buypackage_id = $(this).data('id_buypackage');
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
                        axios.get('delete-buypackage/' + buypackage_id)
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
