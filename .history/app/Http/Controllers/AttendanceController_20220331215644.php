<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\BuyPackage;
use App\Models\Statistical;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function create($buypackage_id)
    {
        $attendance = new Attendance();
        $attendance->buypackage_id = $buypackage_id;
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        $check = Attendance::query()->where('buypackage_id','=',$buypackage_id)->orderBy('id', 'DESC')->first();
        if($check){
            if(Carbon::parse($check->created_at)->lt($today)){
                $check_statistical = Statistical::query()->where('created_at','>=',$today)->first();
                if($check_statistical){
                    $check_statistical->statistical_quantity += 1;
                    $check_statistical->created_at = Carbon::now('Asia/Ho_Chi_Minh');
                    $check_statistical->save();
                }else{
                    $statistical = new Statistical();
                    $statistical->statistical_quantity = 1;
                    $statistical->created_at = Carbon::now('Asia/Ho_Chi_Minh');
                    $statistical->save();
                }
                $attendance->save();
                $check_attendane = Attendance::query()->where('buypackage_id',$buypackage_id)->get();
                if($check_attendane->count() == 7){
                    return 0;
                } else{
                    return 1;
                }
            } else{
                return 2;
            }
        } else{
            $attendance->save();
            $check_statistical = Statistical::query()->where('created_at','>=',$today)->first();
            if($check_statistical){
                $check_statistical->statistical_quantity += 1;
                $check_statistical->created_at = Carbon::now('Asia/Ho_Chi_Minh');
                $check_statistical->save();
            }
            else{
                $statistical = new Statistical();
                $statistical->statistical_quantity = 1;
                $statistical->created_at = Carbon::now('Asia/Ho_Chi_Minh');
                $statistical->save();
            }
            return 1;
        }
    }
    public function load($buypackage_id)
    {
        $attendance = Attendance::query()->where('buypackage_id','=',$buypackage_id)->get();
        $data = array();
        foreach($attendance as $key => $item){
            $data[] = array(
                'title' => 'Attendance',
                'start' => $item->created_at,
            );
        }
        return json_encode($data);
    }

}
