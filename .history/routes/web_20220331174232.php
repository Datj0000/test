<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RechargeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\StatisticalController;
use App\Http\Controllers\BuyPackageController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\WithoutController;
//Home
Route::get('/',[HomeController::class,'view_home']);
Route::get('/home',[HomeController::class,'view_home']);
Route::get('/login',[HomeController::class,'view_login']);
Route::get('/register',[HomeController::class,'view_register']);
Route::get('/profile',[HomeController::class,'view_profile']);
Route::get('/changepass',[HomeController::class,'view_changepass']);
Route::get('/attendance-challenge',[HomeController::class,'view_buy']);
Route::get('/history',[HomeController::class,'view_history']);

Route::post('/login-user',[CustomerController::class,'login']);
Route::post('/register-user',[CustomerController::class,'register']);
Route::get('/logout',[CustomerController::class,'logout']);
Route::get('/login-google',[CustomerController::class,'login_google']);
Route::get('/google-callback',[CustomerController::class,'callback_google']);
Route::get('/login-facebook',[CustomerController::class,'login_facebook']);
Route::get('/facebook-callback',[CustomerController::class,'callback_facebook']);

//Admin
Route::get('/login-admin',[AdminController::class,'login_admin']);
Route::get('/logout-admin',[AdminController::class,'logout']);
Route::get('/admin',[AdminController::class,'show_admin']);
Route::post('/admin-dashboard',[AdminController::class,'dashboard']);
Route::get('/change-language/{language}',[AdminController::class,'change_language']);

Route::post('/recover-pass',[MailController::class,'recover']);
Route::post('/send-token',[MailController::class,'send_token']);
Route::post('/reset-pass',[AdminController::class,'reset_pass']);
Route::get('/change-pass',[AdminController::class,'change_pass']);
Route::post('/change-new-pass',[AdminController::class,'change_new_pass']);

Route::get('/view-profile',[AdminController::class,'view_profile']);
Route::get('/profile-admin',[AdminController::class,'profile']);
Route::post('/update-profile',[AdminController::class,'update_profile']);

 //Customer
Route::get('/all-customer',[CustomerController::class,'view']);
Route::get('/fetchdata-customer',[CustomerController::class,'fetchdata']);
Route::get('/update-role/{customer_id}{role}',[CustomerController::class,'update_role']);
Route::get('/load-profile-user',[CustomerController::class,'load_profile']);
Route::post('/update-profile-user',[CustomerController::class,'update_profile']);
Route::post('/change-pass-user',[CustomerController::class,'change_pass']);
Route::get('/delete-customer/{customer_id}',[CustomerController::class,'delete']);
Route::post('/forgot-pass',[MailController::class,'forgot_pass']);
Route::post('/resset-pass',[CustomerController::class,'resset_pass']);
//Recharge
Route::get('/all-recharge',[RechargeController::class,'view']);
Route::get('/fetchdata-recharge',[RechargeController::class,'fetchdata']);
Route::post('/create-recharge',[RechargeController::class,'create']);
Route::get('/view-recharge/{recharge_id}',[RechargeController::class,'view_detail']);
Route::get('/delete-recharge/{recharge_id}',[RechargeController::class,'delete']);
Route::get('/load-recharge',[RechargeController::class,'load_recharge']);
//Without
Route::get('/all-without',[WithoutController::class,'view']);
Route::get('/fetchdata-without',[WithoutController::class,'fetchdata']);
Route::post('/create-without',[WithoutController::class,'create']);
Route::get('/delete-without/{without_id}',[WithoutController::class,'delete']);
//Attendance
Route::get('/attendance/{buypackage_id}',[AttendanceController::class,'create']);
Route::get('/load-calendar/{buypackage_id}',[AttendanceController::class,'load']);
//BuyPackage
Route::get('/all-buypackage',[BuyPackageController::class,'view']);
Route::get('/delete-buypackage/{buypackage_id}',[BuyPackageController::class,'delete']);
Route::get('/fetchdata-buypackage',[BuyPackageController::class,'fetchdata']);
Route::get('/buy/{package}',[BuyPackageController::class,'create']);
Route::get('/load-package',[BuyPackageController::class,'load_package']);

//Statistical
Route::get('/all-statistical',[StatisticalController::class,'view']);
Route::post('/filter-by-date',[StatisticalController::class,'filter_by_date']);

//Setting
Route::get('/setting-wallet',[SettingController::class,'view']);
Route::get('/fetchdata-wallet',[SettingController::class,'fetchdata']);
Route::post('/update-wallet',[SettingController::class,'update']);

//Notification
Route::get('/load-noti',[NotificationController::class,'view']);
