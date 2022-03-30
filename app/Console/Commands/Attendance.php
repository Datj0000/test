<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Attendance as AttendanceModel;
use App\Models\BuyPackage as BuyPackageModel;
use App\Models\Wallet as WalletModel;
use App\Models\Customer as CustomerModel;
use App\Models\Statistical as StatisticalModel;
use App\Models\Setting as SettingModel;
use App\Models\Notification as NotificationModel;

class Attendance extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'attendance:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $i = 0;
        $sum = 0;
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        $get_buypackage = BuyPackageModel::query()->where('status','=', '0')->get();
        if($get_buypackage){
            foreach($get_buypackage as $key => $item){
                $customer = CustomerModel::query()->where('id','=',$item->customer_id)->first();
                if($customer->customer_role == 1){
                    $attendance = new AttendanceModel();
                    $attendance->buypackage_id = $item->buypackage_id;
                    $check = AttendanceModel::query()->where('buypackage_id','=',$item->buypackage_id)->where('created_at','=',$today)->first();
                    if(!$check){
                        $check_statistical = StatisticalModel::query()->where('created_at','=',$today)->first();
                        if($check_statistical){
                            $check_statistical->statistical_quantity += 1;
                            $check_statistical->save();
                        }
                        else{
                            $statistical = new StatisticalModel();
                            $statistical->statistical_quantity = 1;
                            $statistical->created_at = Carbon::now('Asia/Ho_Chi_Minh');
                            $statistical->save();
                        }
                        $attendance->save();
                    }
                }
                $attendance2 = AttendanceModel::query()->where('buypackage_id','=', $item->buypackage_id)->orderBy('id', 'DESC')->first();
                if ($attendance2) {
                    if($attendance2->created_at < $today){
                        $item->status = 1;
                        $item->save();
                        $check_wallet2 = WalletModel::query()->where('created_at','=',$today)->first();
                        if($check_wallet2){
                            $check_wallet2->wallet_balance += $item->package;
                            $check_wallet2->save();
                        }
                        else{
                            $wallet2 = new WalletModel();
                            $wallet2->wallet_balance = $item->package;
                            $wallet2->created_at = Carbon::now('Asia/Ho_Chi_Minh');
                            $wallet2->save();
                        }
                        $noti2 = new NotificationModel();
                        $noti2->notification_status = 0;
                        $noti2->notification_amount = $item->package;
                        $noti2->customer_id = $item->customer_id;
                        $noti2->created_at = Carbon::now('Asia/Ho_Chi_Minh');
                        $noti2->save();
                    }
                } else {
                    if($item->created_at < $today){
                        $item->status = 1;
                        $item->save();
                        $check_wallet = WalletModel::query()->where('created_at',$today)->first();
                        if($check_wallet){
                            $check_wallet->wallet_balance += $item->package;
                            $check_wallet->save();
                        }
                        else{
                            $wallet = new WalletModel();
                            $wallet->wallet_balance = $item->package;
                            $wallet->save();
                        }
                        $noti = new NotificationModel();
                        $noti->notification_status = 0;
                        $noti->notification_amount = $item->package;
                        $noti->customer_id = $item->customer_id;
                        $noti->created_at = Carbon::now('Asia/Ho_Chi_Minh');
                        $noti->save();
                    }
                }
                $check_attendane = AttendanceModel::query()->where('buypackage_id',$item->buypackage_id)->get();
                if($check_attendane->count() == 7){
                    $i++;
                    $sum += $item->package;
                }
            }
            foreach($get_buypackage as $key => $item){
                $check_attendane2 = AttendanceModel::query()->where('buypackage_id',$item->buypackage_id)->get();
                if($check_attendane2->count() == 7){
                    $item->status = 2;
                    $item->save();
                    $customer = CustomerModel::query()->where('id',$item->customer_id)->first();
                    $noti3 = new NotificationModel();
                    $get_balance = WalletModel::query()->where('created_at', $today)->first();
                    if ($get_balance) {
                        $bonus = $item->package / $sum * $get_balance->wallet_balance/100*80;
                        $customer->customer_balance += $item->package + $bonus;
                        $noti3->notification_amount = $item->package + $bonus;
                    } else {
                        $customer->customer_balance += $item->package;
                        $noti3->notification_amount = $item->package;
                    }
                    $noti3->created_at = Carbon::now('Asia/Ho_Chi_Minh');
                    $noti3->notification_status = 1;
                    $noti3->customer_id = $item->customer_id;
                    $customer->save();
                    $noti3->save();
                }
            }
        }
        $get_wallet_balance = WalletModel::query()->where('created_at',$today)->first();
        if($get_wallet_balance){
            $setting = SettingModel::query()->where('id',1)->first();
            if ($i>0) {
                $setting->wallet_balance += $get_wallet_balance->wallet_balance/100*20;
            } else {
                $setting->wallet_balance += $get_wallet_balance->wallet_balance;
            }
            $setting->save();
        }
    }
}
