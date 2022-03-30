<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Customer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class MailController extends Controller
{
    public function recover(Request $request)
    {
        $data = $request->all();
        $admin = Admin::where('admin_username', $data['admin_username'])->first();
        if ($admin) {
            echo 1;
        } else {
            echo 0;
        }
    }
    public function send_token(Request $request)
    {
        $data = $request->all();
        $title_mail = "Reset password";
        $admin = Admin::where('admin_username', $data['admin_username'])->first();
        if ($admin) {
            $token_random = Str::random();
            $admin->admin_token = $token_random;
            $admin->save();
            $logo = "";
            $data = array("name" => $title_mail, "body" => $token_random, 'email' => $admin->admin_email, 'logo' => $logo); //body of mail.blade.php

            Mail::send('mail.emailforgotpass', ['data' => $data], function ($message) use ($title_mail, $data) {
                $message->to($data['email'])->subject($title_mail); //send this mail with subject
                $message->from($data['email'], $title_mail); //send from this mail
            });
        }
    }
    public function forgot_pass(Request $request)
    {
        $data = $request->all();
        $customer = Customer::where('customer_username', $data['username'])->first();
        if ($customer) {
            $token_random = Str::random();
            $title_mail = "Reset password";
            $customer->customer_token = $token_random;
            $customer->save();
            $logo = "";
            $data = array("name" => $title_mail, "body" => $token_random, 'email' => $customer->customer_email, 'logo' => $logo); //body of mail.blade.php
            Mail::send('mail.emailforgotpass', ['data' => $data], function ($message) use ($title_mail, $data) {
                $message->to($data['email'])->subject($title_mail); //send this mail with subject
                $message->from($data['email'], $title_mail); //send from this mail
            });
            echo 1;
        }else {
            echo 0;
        }
    }
}
