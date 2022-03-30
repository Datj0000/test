<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recharge;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;

class RechargeController extends Controller
{
    public function view()
    {
        return view('admin.manage.recharge');
    }
    public function fetchdata()
    {
        $all = Recharge::join('tbl_customer', 'tbl_customer.customer_id', '=', 'tbl_recharge.customer_id')->get();
        return response()->json([
            "data" => $all,
        ]);
    }
    public function view_detail($recharge_id)
    {
        $all = Recharge::join('tbl_customer', 'tbl_customer.customer_id', '=', 'tbl_recharge.customer_id')
        ->where('tbl_recharge.recharge_id', $recharge_id)->first();
        return response()->json($all);
    }
    public function create(Request $request)
    {
        $data = $request->all();
        $customer_id = Session::get('customer_id');
        $Recharge = new Recharge();
        $Recharge->customer_id = $customer_id;
        $Recharge->txHash = $data['txHash'];
        $Recharge->amount = $data['amount'];
        $Recharge->tran_from = $data['from'];
        $Recharge->tran_to = $data['to'];
        $Recharge->save();
        $customer = Customer::where('customer_id', $customer_id)->first();
        $customer->customer_balance += $data['amount'];
        Session::put('customer_balance', $customer->customer_balance);
        $customer->save();
    }
    public function delete($Recharge_id)
    {
        $Recharge = Recharge::where('Recharge_id', $Recharge_id)->first();
        $Recharge->delete();
    }
    public function load_recharge(){
        $i = 1;
        $customer_id = Session::get('customer_id');
        $Recharge = Recharge::where('customer_id',$customer_id)->get();
        $output = '<table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Price</th>
                            <th scope="col">Created at</th>
                        </tr>
                    </thead>';
        foreach ($Recharge as $key => $item) {
                $output .= '
                    <tr>
                        <th scope="row">'.$i++.'</th>
                        <td>'.$item->amount.' FPI</td>
                        <td>'.$item->created_at.'</td>';
                $output .= '</tr>';
        }
        $output .= '</tbody>
                </table>';
        echo $output;
    }
}
