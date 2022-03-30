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
        $from_date = Carbon::createFromDate($data['from_date']);
        $to_date = Carbon::createFromDate($data['to_date']);
        $get = Statistical::query()->whereBetween('created_at', [$from_date, $to_date])->orderBy('created_at', 'ASC')->get();
        $check = $get->count();
        if ($check > 0) {
            foreach ($get as $key => $val) {
                $chart_data[] = array(
                    'statistical_time' => $val->created_at,
                    'statistical_quantity' => $val->statistical_quantity
                );
            }
        } else {
            $chart_data[] = array(
                'statistical_time' => 0,
                'statistical_quantity' => 0
            );
        }
        echo json_encode($chart_data);
    }
}
