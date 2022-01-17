<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Brand;
use App\Models\Admin\Subsubcategory;
use Image;

class ProductController extends Controller
{
  public function index(){
      //$category=Category::all();
      return view('admin.products.inhouse_products.index');
  }
  public function addproduct(){
    $categories=Category::all();
    $brands=Brand::all();
    return view('admin.products.inhouse_products.addproduct',compact('categories','brands'));
  }

  public function storeproduct(Request $request){

  }
  public function get_subsubcategories_by_subcategory(Request $request)
  {
      $subsubcategories = Subsubcategory::where('sub_category_id', $request->subcategory_id)->get();
      return $subsubcategories;
  }


  public function SellerProductsPending(){

    //$category=Category::all();
    return view('admin.products.seller_products.seller_products_pending');
}
public function SellerProducts(){
    //$category=Category::all();
    return view('admin.products.seller_products.seller_products');
}
public function ProductReview(){
    //$category=Category::all();
    return view('admin.products.product_review');
}

}
