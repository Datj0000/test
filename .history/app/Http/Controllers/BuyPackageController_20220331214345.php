<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuyPackage;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class BuyPackageController extends Controller
{
    public function create($package)
    {
        $customer_id = Session::get('customer_id');
        $buypackage = new BuyPackage();
        $buypackage->customer_id = $customer_id;
        $buypackage->package = $package;
        $check = BuyPackage::query()->where('customer_id','=',$customer_id)->where('status','=',0)->orderBy('id', 'DESC')->first();
        $customer = Customer::query()->where('id','=',$customer_id)->first();
        if($check){
            return 1;
        }else{
            if($customer->customer_balance >= $package){
                $buypackage->created_at = Carbon::now('Asia/Ho_Chi_Minh');
                $buypackage->save();
                $customer->customer_balance -= $package;
                $customer->save();
                return 0;
                Session::put('customer_balance', $customer->customer_balance);
            }else{
                return 2;
            }
        }
    }
    public function load_package(){
        $i = 1;
        $customer_id = Session::get('customer_id');
        $buypackage = BuyPackage::query()->where('customer_id','=',$customer_id)->get();
        $output = '<table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Price</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>';
        foreach ($buypackage as $key => $item) {
            $output .= '
                    <tr>
                        <th scope="row">'.$i++.'</th>
                        <td>'.$item->package.' FPI</td>
                        <td>'.$item->created_at.'</td>
                        ';
            if($item->status == 0){
                $output .= '<td>In progress</td>';
            }
            else if($item->status == 1){
                $output .= '<td>Failed</td>';
            }
            else {
                $output .= '<td>Successfully</td>';
            }
            $output .= '</tr>';
        }
        $output .= '</tbody>
                </table>';
        return $output;
    }
    public function view()
    {
        return view('admin.manage.buypackage');
    }
    public function fetchdata()
    {
        $all = BuyPackage::query()->join('tbl_customer', 'tbl_customer.id', '=', 'tbl_buypackage.customer_id')->get();
        return response()->json([
            "data" => $all,
        ]);
    }
    public function delete($id)
    {
        $buypackage = BuyPackage::query()->where('id','=', $id)->first();
        $buypackage->delete();
    }
}
