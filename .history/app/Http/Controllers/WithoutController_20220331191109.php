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
        $customer_id = Session::get('customer_id');
        $customer = Customer::query()->where('id','=', $customer_id)->first();
        $balance =$customer->customer_balance;
        $amount = $request->amount;
        if($balance >= $amount  + $request->fee){
            $address_to = $request->address_to;
            $command = "/bin/python3.9 /var/www/sendtoken.py $amount $address_to";
            $output = shell_exec($command);
            if($output == 2){
                $customer->customer_balance -= $amount + $request->fee;
                $customer->save();
                Session::put('customer_balance', $customer->customer_balance);
                $without = new Without();
                $without->customer_id = $customer_id;
                $without->without_amount = $amount;
                $without->without_account = $address_to;
                $without->created_at = Carbon::now('Asia/Ho_Chi_Minh');
                $without->save();
            }
            echo $output;
        } else {
            echo 1;
        }
    }
    public function delete($id)
    {
        $without = Without::query()->where('id','=', $id)->first();
        $without->delete();
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
