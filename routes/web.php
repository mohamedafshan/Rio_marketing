<?php

use App\Http\Controllers\Backend\BillsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample', function () {
    return view('dummy.sample');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Bills Manage
Route::controller(BillsController::class)->group(function(){
    Route::get('all/bills','AllBills')->name('all.bills'); 
    Route::get('add/bills','AddBills')->name('add.bills');
    Route::get('credit/collection','CreditCollection')->name('credit.collection');
});
