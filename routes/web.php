<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GeneralSettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// route for Dashbord
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

// route for General Setting
Route::get('/admin/setting', [GeneralSettingController::class, 'index'])->name('admin.setting');
