<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
        $all = Recharge::query()->join('tbl_customer', 'tbl_customer.id', '=', 'tbl_recharge.customer_id')->get();
        return response()->json([
            "data" => $all,
        ]);
    }
    public function view_detail($recharge_id)
    {
        $all = Recharge::query()->join('tbl_customer', 'tbl_customer.id', '=', 'tbl_recharge.customer_id')->where('tbl_recharge.id', $recharge_id)->first();
        return response()->json($all);
    }
    public function create(Request $request)
    {
        $data = $request->all();
        $customer_id = Session::get('customer_id');
        $recharge = new Recharge();
        $recharge->customer_id = $customer_id;
        $recharge->txHash = $data['txHash'];
        $recharge->amount = $data['amount'];
        $recharge->tran_from = $data['from'];
        $recharge->tran_to = $data['to'];
        $recharge->save();
        $customer = Customer::query()->where('id','=', $customer_id)->first();
        $customer->customer_balance += $data['amount'];
        Session::put('customer_balance', $customer->customer_balance);
        $customer->save();
    }
    public function delete($id)
    {
        $recharge = Recharge::query()->where('id','=', $id)->first();
        $recharge->delete();
    }
    public function load_recharge(){
        $i = 1;
        $customer_id = Session::get('customer_id');
        $recharge = Recharge::query()->where('customer_id','=',$customer_id)->get();
        $output = '<table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Price</th>
                            <th scope="col">Created at</th>
                        </tr>
                    </thead>';
        foreach ($recharge as $key => $item) {
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
