<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Without;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;

class WithoutController extends Controller
{
    public function view()
    {
        return view('admin.manage.without');
    }
    public function fetchdata()
    {
        $all = Without::query()->join('tbl_customer', 'tbl_customer.id', '=', 'tbl_without.customer_id')->get();
        return response()->json([
            "data" => $all,
        ]);
    }
    public function create(Request $request)
    {
        $amount = $request->amount + $request->fee;
        $balance = Session::get('customer_balance');
        if($balance >= $amount){
            $address_to = $request->address_to;
            $command = "/bin/python3.9 /var/www/sendtoken.py $amount $address_to";
            if(shell_exec($command) == 'success'){
                $customer_id = Session::get('customer_id');
                $customer = Customer::query()->where('customer_id','=', $customer_id)->first();
                $customer->customer_balance -= $amount;
                $customer->created_at = Carbon::now('Asia/Ho_Chi_Minh');
                $customer->save();
                Session::put('customer_balance', $customer->customer_balance);
            }
            echo shell_exec($command);
        } else {
            echo 1;
        }
    }
    public function delete($id)
    {
        $without = Without::query()->where('id', $id)->first();
        $without->delete();
    }
}
