<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function view()
    {
        return view('admin.manage.wallet');
    }
    public function fetchdata()
    {
        $all = Setting::where('setting_id', 1)->first();
        return response()->json($all);
    }
    public function update(Request $request)
    {
        $setting = Setting::where('setting_id', 1)->first();
        $setting->wallet_address = $request->wallet_address;
        $setting->save();
    }
}
