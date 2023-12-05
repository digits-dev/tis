<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminSalesController;
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

Route::get('/sa', function () {
    return view('sales');
});

Route::group(['middleware' => ['web']], function() {
    Route::get(config('crudbooster.ADMIN_PATH'),[AdminSalesController::class, 'getIndex']);
});