<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function AuthLogin()
    {
        $id = Auth::id();
        if ($id) {
            return Redirect::to('admin');
        } else {
            return Redirect::to('login-admin')->send();
        }
    }
    public function login_admin()
    {
        $id = Auth::id();
        if ($id) {
            return Redirect::to('admin')->send();
        } else {
            return view('adminlogin');
        }
    }
    public function show_admin()
    {
        $this->AuthLogin();
        return view('admin.dashboard');
    }
    public function dashboard(Request $request)
    {
        if (Auth::attempt(['admin_username' => $request->admin_username, 'admin_password' => $request->admin_password])) {
            Session::put('language', 'en');
            Session::save();
            return 1;
        } else {
            return 0;
        }
    }
    public function logout()
    {
        Auth::logout();
        return Redirect::to('/admin');
    }

    public function reset_pass(Request $request)
    {
        $data = $request->all();
        $token_random = Str::random();
        $admin = Admin::query()->where('admin_username','=', $data['admin_username'])->where('admin_token','=', $data['admin_token'])->first();
        if ($admin) {
            $admin->admin_password = md5($data['admin_password']);
            $admin->admin_token = $token_random;
            $admin->save();
            return 1;
        } else {
            return 0;
        }
    }
    public function change_pass()
    {
        return view('admin.account.change_pass');
    }
    public function change_new_pass(Request $request)
    {
        $data = $request->all();
        $id = Auth::id();
        $admin = Admin::query()->where('id','=', $id)->first();
        if ($admin->admin_password == md5($data['admin_old_password'])) {
            $admin->admin_password = md5($data['admin_password']);
            $admin->save();
            return 1;
        } else {
            return 0;
        }
    }
    public function profile()
    {
        return view('admin.account.profile');
    }
    public function view_profile()
    {
        $id = Auth::id();
        $profile_admin = Admin::query()->where('id','=', $id)->first();
        return response()->json($profile_admin);
    }
    public function update_profile(Request $request)
    {
        $data = $request->all();
        $id = Auth::id();
        $admin = Admin::query()->where('id','=', $id)->first();
        $admin->admin_name = $data['admin_name'];
        $admin->admin_email = $data['admin_email'];
        $get_image = $request->file('admin_image');
        $check_email = Admin::query()->where('admin_email','=', $data['admin_email'])->where('id', '!=', $id)->first();
        if ($check_email) {
            return 0;
        } else{
            if ($get_image) {
                if ($admin->admin_image) {
                    $destinationPath = 'uploads/avatar/' . $admin->admin_image;
                    if (file_exists($destinationPath)) {
                        unlink($destinationPath);
                    }
                }
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move('uploads/avatar', $new_image);
                $admin->admin_image = $new_image;
                $admin->save();
                return 1;
                } else {
                    $admin->save();
                    return 1;
                }
        }
    }
    public function change_language($language)
    {
        Session::put('language', $language);
        Session::save();
    }
}
