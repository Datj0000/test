<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
class CustomerController extends Controller
{
    //User
    public function login(Request $request)
    {
        $data = $request->all();
        $customer_username = $data['username'];
        $customer_pass = md5($data['password']);
        $result = Customer::query()->where('customer_username','=', $customer_username)->where('customer_pass','=', $customer_pass)->first();
        if($result){
            Session::put('customer_id', $result->id);
            Session::put('customer_name', $result->customer_name);
            Session::put('customer_image', $result->customer_image);
            Session::put('customer_balance', $result->customer_balance);
            return 1;
        }
        else{
            return 0;
        }
    }
    public function logout()
    {
        Session::put('customer_name', null);
        Session::put('customer_id', null);
        Session::put('customer_image', null);
        Session::put('customer_balance', null);
    }
    public function register(Request $request)
    {
        $data = $request->all();
        $check_username = Customer::query()->where('customer_username', '=', $data['username'])->first();
        $check_email = Customer::query()->where('customer_email', '=', $data['email'])->first();
        $check_phone = Customer::query()->where('customer_phone', '=', $data['phone'])->first();
        if ($check_username) {
            return 0;
        }
        else if ($check_email){
            return 1;
        }
        else if ($check_phone){
            return 2;
        }
        else {
            $register = new Customer();
            $register->customer_name = $data['name'];
            $register->customer_email = $data['email'];
            $register->customer_phone = $data['phone'];
            $register->customer_username = $data['username'];
            $register->customer_pass = md5($data['pass']);
            $register->save();
            return 3;
        }
    }

    public function load_profile()
    {
        $id = Session::get('customer_id');
        $all = Customer::query()->where('id','=',$id)->first();
        return response()->json($all);
    }
    public function update_profile(Request $request)
    {
        $id = Session::get('customer_id');
        $data = $request->all();
        $customer = Customer::query()->where('id','=',$id)->first();
        $customer->customer_name = $data['name'];
        $customer->customer_email = $data['email'];
        $customer->customer_phone = $data['phone'];
        $get_image = $request->file('image');
        $check_email = Customer::query()->where('customer_email','=', $data['email'])->where('id', '!=', $id)->first();
        $check_phone = Customer::query()->where('customer_phone','=', $data['phone'])->where('id', '!=', $id)->first();
        if ($check_email) {
            return 0;
        } else if ($check_phone) {
            return 1;
        } else{
            if ($get_image) {
            if ($customer->customer) {
                $destinationPath = 'uploads/avatar/' . $customer->customer_image;
                if (file_exists($destinationPath)) {
                    unlink($destinationPath);
                }
            }
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('uploads/avatar', $new_image);
            $customer->customer_image = $new_image;
            $customer->save();
            Session::put('customer_name', $data['name']);
            Session::put('customer_image', $new_image);
            return 2;
        } else {
            $customer->save();
            Session::put('customer_name', $data['name']);
            return 2;
        }
    }
    }
    public function change_pass(Request $request)
    {
        $id = Session::get('customer_id');
        $data = $request->all();
        $customer = Customer::query()->where('id','=',$id)->where('customer_pass', '=', $data['old_pass'])->first();
        if ($customer) {
            return 0;
        } else {
            $customer->customer_pass = $data['new_pass'];
            $customer->save();
            return 1;
        }
    }
    public function resset_pass(Request $request)
    {
        $data = $request->all();
        $token_random = Str::random();
        $customer = Customer::query()->where('customer_username', '=', $data['username'])->where('customer_token', '=', $data['token'])->first();
        if ($customer) {
            $customer->customer_pass = md5($data['pass']);
            $customer->customer_token = $token_random;
            $customer->save();
            return 1;
        } else {
            return 0;
        }
    }

    //Admin
    public function view()
    {
        return view('admin.manage.customer');
    }
    public function fetchdata()
    {
        $all = Customer::all();
        return response()->json([
            "data" => $all,
        ]);
    }
    public function update_role($id, $role)
    {
        $customer = Customer::query()->where('id','=',$id)->first();
        $customer->customer_role = $role;
        $customer->save();
    }
    public function delete($id)
    {
        $customer = Customer::query()->where('id','=',$id)->first();
        $customer->delete();
    }
}
