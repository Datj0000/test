<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class NotificationController extends Controller
{
    public function view(){
        $id = Session::get('customer_id');
        $noti = Notification::query()->where('customer_id','=', $id)->orderBy('id', 'DESC')->limit(5)->get();
        $today = Carbon::now('Asia/Ho_Chi_Minh');
        $output ='';
        if ($noti->count() > 0) {
            foreach($noti as $key => $item){
//                $day = $today->diffInDays($item->created_at);
//                $hour = $today->diffInHours($item->created_at);
//                $minute = $today->diffInMinutes($item->created_at);
//                $second = $today->diffInSeconds($item->created_at);
//                if ($day > 0){
//                    $time = $day.' day ago';
//                }
//                else if($hour > 0){
//                    $time = $hour.' hour ago';
//                }
//                else if($minute > 0){
//                    $time = $minute.' minute ago';
//                }
//                else{
//                    $time = $second.' second ago';
//                }
                if($item->notification_status == 0){
                    $output .='<li>
                                <span class="d-name">You failed the attendance challenge</span>
                                <span class="d-time">'.$item->created_at.'</span>
                            </li>';
                }
                else{
                    $output .='<li>
                                <span class="d-name">You have completed the challenge to participate and receive '.$item->notification_amount.' FPI</span>
                                <span class="d-time">'.$item->created_at.'</span>
                            </li>';
                }
            }
            return $output;
        } else {
            return '<li><span class="d-name">No notice for you</span></li>';
        }
    }
}
