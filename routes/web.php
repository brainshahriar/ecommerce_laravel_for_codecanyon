<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Alluser\AlluserController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;

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
    Route::get('categories',[CategoryController::class,'index'])->name('category');
    Route::post('category/store',[CategoryController::class,'store'])->name('category-store');
    Route::get('category/delete/{id}',[CategoryController::class,'delete']);
    Route::get('brands',[BrandController::class,'index'])->name('brand');


    //subcategory route
    Route::get('subcategories',[CategoryController::class,'indexsubcategory'])->name('subcategory');
    Route::post('subcategory/store',[CategoryController::class,'storesubcategory'])->name('subcategory-store');
    Route::get('subcategory/delete/{id}',[CategoryController::class,'deletesubcategory']);

    //subsubcategory route
    Route::get('subsubcategories',[CategoryController::class,'indexsubsubcategory'])->name('subsubcategory');
    Route::get('subcategory/ajax/{cat_id}',[CategoryController::class,'getSubCat']);
    Route::post('subsubcategory/store',[CategoryController::class,'storesubsubcategory'])->name('subsubcategory-store');
    Route::get('subsubcategory/delete/{id}',[CategoryController::class,'deletesubsubcategory']);

    //inhouse products
    Route::get('inhouse-products',[ProductController::class,'index'])->name('inhouse-products');
    Route::get('add/products',[ProductController::class,'addproduct'])->name('add-products');

    //seller products
    Route::get('seller-products.pending',[ProductController::class,'SellerProductsPending'])->name('seller-products-pending');
    Route::get('seller-products',[ProductController::class,'SellerProducts'])->name('seller-products');

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
