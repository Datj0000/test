<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistical;
use Carbon\Carbon;

class StatisticalController extends Controller
{
    public function view()
    {
        return view('admin.manage.statistical');
    }
    public function filter_by_date(Request $request)
    {
        $data = $request->all();
        $from_date = Carbon::parse($data['from_date'])->format('Y-m-d');
        $to_date = Carbon::parse($data['to_date'])->format('Y-m-d');
        $get = Statistical::whereBetween('statistical_time', [$from_date, $to_date])->orderBy('statistical_time', 'ASC')->get();
        $check = $get->count();
        if ($check > 0) {
            foreach ($get as $key => $val) {
                $chart_data[] = array(
                    'statistical_time' => $val->statistical_time,
                    'statistical_quantity' => $val->statistical_quantity
                );
            }
        } else {
            $chart_data[] = array(
                'statistical_time' => 0,
                'statistical_quantity' => 0
            );
        }
        echo $data = json_encode($chart_data);
    }
}
