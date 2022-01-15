<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index(){
      //$category=Category::all();
      return view('admin.products.inhouse_products.index');
  }
  public function addproduct(){
    //$category=Category::all();
    return view('admin.products.inhouse_products.addproduct');
  }
  public function SellerProductsPending(){

    //$category=Category::all();
    return view('admin.products.seller_products.seller_products_pending');
}
public function SellerProducts(){
    //$category=Category::all();
    return view('admin.products.seller_products.seller_products');
}

}
