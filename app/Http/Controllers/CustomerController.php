<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Social;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
class CustomerController extends Controller
{
    //User
    public function login(Request $request)
    {
        $data = $request->all();
        $customer_username = $data['username'];
        $customer_pass = md5($data['password']);
        $result = Customer::where('customer_username', $customer_username)->where('customer_pass', $customer_pass)->first();
        if($result){
            Session::put('customer_id', $result->customer_id);
            Session::put('customer_name', $result->customer_name);
            Session::put('customer_image', $result->customer_image);
            Session::put('customer_pass', $result->customer_pass);
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
        Session::put('customer_pass', null);
        Session::put('customer_balance', null);
    }
    public function register(Request $request)
    {
        $data = $request->all();
        $register = new Customer();
        $register->customer_name = $data['name'];
        $register->customer_email = $data['email'];
        $register->customer_phone = $data['phone'];
        $register->customer_username = $data['username'];
        $register->customer_image = '';
        $register->customer_pass = md5($data['pass']);
        $check_username = Customer::where('customer_username', $data['username'])->first();
        $check_email = Customer::where('customer_email', $data['email'])->first();
        $check_phone = Customer::where('customer_phone', $data['phone'])->first();
        if ($check_username) {
            echo 0;
        }
        else if ($check_email){
            echo 1;
        }
        else if ($check_phone){
            echo 2;
        }
        else {
            $register->save();
            echo 3;
        }
    }
    public function login_google()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callback_google()
    {
        $users = Socialite::driver('google')->user();
        $authUser = $this->findOrCreateUser($users, 'google');
        if ($authUser) {
            $account_name = Customer::where('customer_id', $authUser->user)->first();
            Session::put('customer_type', 'social');
            Session::put('customer_id', $account_name->customer_id);
            Session::put('customer_name', $account_name->customer_name);
            Session::put('customer_image', $account_name->customer_image);
            Session::put('customer_pass', $account_name->customer_pass);
            Session::put('customer_balance', $account_name->customer_balance);
        }
        return redirect('/');
    }
    public function login_facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function callback_facebook()
    {
        $users = Socialite::driver('facebook')->user();
        $authUser = $this->findOrCreateUser($users, 'facebook');
        if ($authUser) {
            $account_name = Customer::where('customer_id', $authUser->user)->first();
            Session::put('customer_type', 'social');
            Session::put('customer_id', $account_name->customer_id);
            Session::put('customer_name', $account_name->customer_name);
            Session::put('customer_image', $account_name->customer_image);
            Session::put('customer_pass', $account_name->customer_pass);
            Session::put('customer_balance', $account_name->customer_balance);
        }
        return redirect('/');
    }
    public function findOrCreateUser($users, $provider)
    {
        $authUser = Social::where('provider_user_id', $users->getId())->first();
        if ($authUser) {
            return $authUser;
        }
        else{
            $account = new Social([
                'provider_user_id' => $users->getId(),
                'provider_user_email' => $users->getEmail(),
                'provider' => strtoupper($provider)
            ]);
            $orang = Customer::where('customer_email', $users->email)->first();
            if (!$orang) {
                $orang = Customer::create([
                    'customer_name' => $users->getName(),
                    'customer_email' => $users->getEmail(),
                    'customer_image' => $users->getAvatar(),
                    'customer_pass' => '',
                    'customer_username' => '',
                    'customer_phone' => ''
                ]);
            }
            $account->login()->associate($orang);
            $account->save();
            return $account;
        }

    }
    public function load_profile()
    {
        $customer_id = Session::get('customer_id');
        $all = Customer::where('customer_id', $customer_id)->first();
        return response()->json($all);
    }
    public function update_profile(Request $request)
    {
        $customer_id = Session::get('customer_id');
        $data = $request->all();
        $customer = Customer::where('customer_id', $customer_id)->first();
        $customer->customer_name = $data['name'];
        $customer->customer_email = $data['email'];
        $customer->customer_phone = $data['phone'];
        $get_image = $request->file('image');
        $check_email = Customer::where('customer_email', $data['email'])->where('customer_id', '!=', $customer_id)->first();
        $check_phone = Customer::where('customer_phone', $data['phone'])->where('customer_id', '!=', $customer_id)->first();
        if ($check_email) {
            echo 0;
        } else if ($check_phone) {
            echo 1;
        } else if ($get_image) {
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
            $result = $customer->save();
            if ($result) {
                echo 2;
                Session::put('customer_type', null);
                Session::put('customer_name', $data['name']);
                Session::put('customer_image', $new_image);
            }
        } else {
            $customer->customer_image = $customer->customer_image;
            $result = $customer->save();
            if ($result) {
                echo 2;
                Session::put('customer_name', $data['name']);
            }
        }
    }
    public function change_pass(Request $request)
    {
        $customer_id = Session::get('customer_id');
        $data = $request->all();
        $customer = Customer::where('customer_id', $customer_id)->where('customer_pass', $data['old_pass'])->first();
        if ($customer) {
            echo 0;
        } else {
            $customer->customer_pass = $data['new_pass'];
            $customer->save();
            echo 1;
        }
    }
    public function resset_pass(Request $request)
    {
        $data = $request->all();
        $token_random = Str::random();
        $customer = Customer::where('customer_username', $data['username'])->where('customer_token', $data['token'])->first();
        if ($customer) {
            $customer->customer_pass = md5($data['pass']);
            $customer->customer_token = $token_random;
            $customer->save();
            echo 1;
        } else {
            echo 0;
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
    public function update_role($customer_id, $role)
    {
        $customer = Customer::where('customer_id', $customer_id)->first();
        $customer->customer_role = $role;
        $customer->save();
    }
    public function delete($customer_id)
    {
        $customer = Customer::where('customer_id', $customer_id)->first();
        $customer->delete();
    }
}
