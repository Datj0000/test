<div class="card card-custom">
    <div class="card-header flex-wrap py-5">
        <div class="card-title">
            <h3 class="card-label">{{__('lang.attendance_statistics')}}
                {{-- <span class="d-block text-muted pt-2 font-size-sm">extended pagination options</span> --}}
            </h3>
        </div>
    </div>
    <div class="card-header h-auto border-0">
        <div class="card-title py-5">
            <h3 class="card-label">
                <span class="d-block text-dark font-weight-bolder">{{__('lang.filter')}}</span>
                <span class="d-block text-dark-50 mt-2 font-size-sm">{{__('lang.select_time')}}</span>
            </h3>
        </div>
        <div class="card-toolbar">
            <ul class="nav nav-pills nav-pills-sm nav-dark-75" role="tablist">
                <li id="chart_year" class="nav-item">
                    <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_charts_widget_2_chart_tab_1">
                        <span class="nav-text font-size-sm">{{__('lang.year')}}</span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_charts_widget_2_chart_tab_2">
                        <span class="nav-text font-size-sm">{{__('lang.precious')}}</span>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a id="chart_month" class="nav-link py-2 px-4 active" data-toggle="tab"
                        href="#kt_charts_widget_2_chart_tab_3">
                        <span class="nav-text font-size-sm">{{__('lang.month')}}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group row">
            <div class="col-lg-4 col-md-9 col-sm-12">
                <div class="input-daterange input-group" id="kt_datepicker_5">
                    <label class="col-form-label text-right">{{__('lang.form')}}</label>
                    <input style="border-radius: 7px; margin: 0px 10px" autocomplete="off" id="from_date" type="text"
                        class="form-control" name="start" />
                    <label class="col-form-label text-right">{{__('lang.to')}}</label>
                    <input style="border-radius: 7px; margin: 0px 10px" autocomplete="off" id="to_date" type="text"
                        class="form-control" name="end" />
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom gutter-b">
                <div class="card-body">
                    <div id="chart"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('backend/js/pages/crud/forms/widgets/bootstrap-datepicker.js') }}"></script>
<script>
    var dt = new Date();
        year = dt.getFullYear();
        ltyear = dt.getFullYear() - 1;
        month = (dt.getMonth() + 1).toString().padStart(2, "0");
        ltmonth = (dt.getMonth()).toString().padStart(2, "0");
        day = dt.getDate().toString().padStart(2, "0");
        var today = year + '-' + month + '-' + day;
        var lastmonth = year + '-' + ltmonth + '-' + day;
        if (lastmonth < 0) {
            lastmonth = year - 1 + '-' + 12 + '-' + day;
        }
        var lastyear = ltyear + '-' + month + '-' + day;
    $(document).ready(function() {
        var chart = new Morris.Line({
            element: 'chart',
            parseTime: false,
            hideHover: 'auto',
            xkey: 'statistical_time',
            ykeys: ['statistical_quantity'],
            labels: ['Number of attendees']
        });
        load_chart(lastmonth, today);

        function load_chart(from_date, to_date) {
            var from_date = from_date;
            var to_date = to_date;
            axios.post('filter-by-date',{
                from_date: from_date,
                to_date: to_date
            })
            .then(function (response) {
                chart.setData(response.data);
            })
            .catch((error) => {
                console.log(error);
            });
        }
        $('#from_date').change(function() {
            var from_date = $('#from_date').val();
            var to_date = $('#to_date').val();
            load_chart(from_date, to_date);
        });
        $('#to_date').change(function() {
            load_chart(from_date, to_date);
        });
        $('#chart_month').click(function() {
            load_chart(lastmonth, today);
        });
        $('#chart_year').click(function() {
            load_chart(lastyear, today);
        });
    });
</script>
