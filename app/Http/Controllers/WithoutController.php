<?php

namespace App\Http\Controllers;

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
        $all = Without::join('tbl_customer', 'tbl_customer.customer_id', '=', 'tbl_without.customer_id')->get();
        return response()->json([
            "data" => $all,
        ]);
    }
    public function create(Request $request)
    {
        $amount = $request->amount;
        $balance = Session::get('customer_balance');
        if($balance >= $amount){
            $address_to = $request->address_to;
            $command = "/bin/python3.9 /var/www/sendtoken.py $amount $address_to";
            if(shell_exec($command) == 'success'){
                $customer_id = Session::get('customer_id');
                $customer = Customer::where('customer_id', $customer_id)->first();
                $customer->customer_balance -= $amount;
                $customer->save();
                Session::put('customer_balance', $customer->customer_balance);
            }
            echo shell_exec($command);
        }
        else{
            echo 1;
        }
    }
    public function delete($without_id)
    {
        $without = Without::where('without_id', $without_id)->first();
        $without->delete();
    }
}
