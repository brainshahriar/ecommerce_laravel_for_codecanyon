<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Alluser\AlluserController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin','middleware' =>['admin','auth'],'namespace'=>'Admin'], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    //category route
    Route::get('category',[CategoryController::class,'index'])->name('category');


});

Route::group(['prefix'=>'user','middleware' =>['user','auth'],'namespace'=>'User'], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
});
Route::group(['prefix'=>'seller','middleware' =>['seller','auth'],'namespace'=>'Seller'], function(){
    Route::get('dashboard',[SellerController::class,'index'])->name('seller.dashboard');
});

Route::group(['prefix'=>'alluser','middleware' =>['alluser','auth'],'namespace'=>'Alluser'], function(){
    Route::get('dashboard',[AlluserController::class,'index'])->name('alluser.dashboard');
});

