<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuyPackage;
use App\Models\Statistical;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use App\Models\Customer;

class BuyPackageController extends Controller
{
    public function create($package)
    {
        $customer_id = Session::get('customer_id');
        $buypackage = new BuyPackage();
        $buypackage->customer_id = $customer_id;
        $buypackage->package = $package;
        $buypackage->created_at = Carbon::now('Asia/Ho_Chi_Minh');
        $check = BuyPackage::query()->where('customer_id','=',$customer_id)->where('status','=',0)->orderBy('id', 'DESC')->first();
        $customer = Customer::query()->where('id',$customer_id)->first();
        if($check){
            $nextweek = Carbon::parse($check->created_at)->addWeek();
            $check_date = BuyPackage::query()->where('customer_id','=',$customer_id)->where('status','=',0)->where('created_at','>',$nextweek)->first();
            if($check_date){
                if($customer->customer_balance >= $package){
                    $customer->customer_balance -= $package;
                    $customer->save();
                    $buypackage->save();
                    Session::put('customer_balance', $customer->customer_balance);
                    echo 0;
                }
                else{
                    echo 2;
                }
            }
            else{
                echo 1;
            }
        }
        else{
            if($customer->customer_balance >= $package){
                $buypackage->save();
                $customer->customer_balance -= $package;
                $customer->save();
                Session::put('customer_balance', $customer->customer_balance);
                echo 0;
            }
            else{
                echo 2;
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
                        if($item->statu == 0){
                            $output .= '<td>In progress</td>';
                        }
                        else if($item->statu == 1){
                            $output .= '<td>Failed</td>';
                        }
                        else {
                            $output .= '<td>Succeeded</td>';
                        }
                $output .= '</tr>';
        }
        $output .= '</tbody>
                </table>';
        echo $output;
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
