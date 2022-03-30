<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Notification as NotificationModel;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class Notification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notification:cron';

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
        $customer_id = Session::get('customer_id');
        if($customer_id){
            $noti = NotificationModel::where('customer_id', $customer_id)->limit(5)->get();
            $today = Carbon::now('Asia/Ho_Chi_Minh');
            $output ='';
            if ($noti->count() > 0) {
                foreach($noti as $key => $item){

                }
                echo $output;
            }
        }
        else{

        }
    }
}
