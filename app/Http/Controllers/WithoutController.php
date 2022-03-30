<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WithoutController extends Controller
{
    public function view()
    {
        return view('admin.manage.without');
    }
    public function fetchdata()
    {
        $all = without::join('tbl_customer', 'tbl_customer.customer_id', '=', 'tbl_without.customer_id')->get();
        return response()->json([
            "data" => $all,
        ]);
    }
    public function view_detail($without_id)
    {
        $all = without::join('tbl_customer', 'tbl_customer.customer_id', '=', 'tbl_without.customer_id')
        ->where('tbl_without.without_id', $without_id)->first();
        return response()->json([
            "data" => $all,
        ]);
    }
    public function create(Request $request)
    {
        $data = $request->all();
        $customer_id = Session::get('customer_id');
        $without = new without();
        $without->customer_id = $customer_id;
        $without->txHash = $data['txHash'];
        $without->amount = $data['amount'];
        $without->tran_from = $data['from'];
        $without->tran_to = $data['to'];
        $without->save();
        $customer = Customer::where('customer_id', $customer_id)->first();
        $customer->customer_balance += $data['amount'];
        Session::put('customer_balance', $customer->customer_balance);
        $customer->save();
    }
    public function delete($without_id)
    {
        $without = without::where('without_id', $without_id)->first();
        $without->delete();
    }
}
