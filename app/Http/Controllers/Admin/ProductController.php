<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Brand;
use App\Models\Admin\Subsubcategory;
use App\Models\Admin\Product;
use Image;

class ProductController extends Controller
{
  public function index(){
      //$category=Category::all();
      $products=Product::all();
      return view('admin.products.inhouse_products.index',compact('products'));
  }
  public function addproduct(){
    $categories=Category::all();
    $brands=Brand::all();
    return view('admin.products.inhouse_products.addproduct',compact('categories','brands'));
  }

  public function storeproduct(Request $request){

    $main_image = $request->file('main_image');
    $thumbnail_image = $request->file('thumbnail_image');
    $featured_image = $request->file('featured_image');
    $flashdeal_image = $request->file('flashdeal_image');
    $meta_image = $request->file('meta_image');
    $name_gen1=hexdec(uniqid()).'.'.$main_image->getClientOriginalExtension();
    $name_gen2=hexdec(uniqid()).'.'.$thumbnail_image->getClientOriginalExtension();
    $name_gen3=hexdec(uniqid()).'.'.$featured_image->getClientOriginalExtension();
    $name_gen4=hexdec(uniqid()).'.'.$flashdeal_image->getClientOriginalExtension();
    $name_gen5=hexdec(uniqid()).'.'.$meta_image->getClientOriginalExtension();
    Image::make($main_image)->save('uploads/products/'.$name_gen1);
    Image::make($thumbnail_image)->save('uploads/products/'.$name_gen2);
    Image::make($featured_image)->save('uploads/products/'.$name_gen3);
    Image::make($flashdeal_image)->save('uploads/products/'.$name_gen4);
    Image::make($meta_image)->save('uploads/products/'.$name_gen5);
    $save_url1 = 'uploads/products/'.$name_gen1;
    $save_url2 = 'uploads/products/'.$name_gen2;
    $save_url3 = 'uploads/products/'.$name_gen3;
    $save_url4 = 'uploads/products/'.$name_gen4;
    $save_url5 = 'uploads/products/'.$name_gen5;


    Product::insert([

        'name' => $request->name,
        'category_id' => $request->category_id,
        'subcategory_id' => $request->subcategory_id,
        'subsubcategory_id' => $request->subsubcategory_id,
        'brand_id' => $request->brand_id,
        'unit' => $request->unit,
        'approved' => $request->approved,
        'main_image' => $save_url1,
        'thumbnail_image' => $save_url2,
        'featured_image' => $save_url3,
        'flashdeal_image' => $save_url4,
        'meta_image' => $save_url5,
        'video_provider' => $request->video_provider,
        'video_link' => $request->video_link,
        'meta_title' => $request->meta_title,
        'meta_description' => $request->meta_description,
        'meta_tag' => $request->meta_tag,
        'color' => $request->color,
        'size' => $request->size,
        'seller_rate' => $request->seller_rate,
        'video_link' => $request->video_link,
        'admin_rate' => $request->admin_rate,
        'tax' => $request->tax,
        'discount' => $request->discount,
        'seller_commission' => $request->seller_commission,
        'cashback' => $request->cashback,
        'quantity' => $request->quantity,
        'description' => $request->description,
        'shipping_type' => $request->shipping_type,
        'flat_shipping_cost' => $request->flat_shipping_cost,
    ]);

    $notification=array(
        'message'=>'Product Upload Success',
        'alert-type'=>'success'
    );
    return Redirect()->back()->with($notification);
  }
  public function get_subsubcategories_by_subcategory(Request $request)
  {
      $subsubcategories = Subsubcategory::where('sub_category_id', $request->subcategory_id)->get();
      return $subsubcategories;
  }
  public function delete($id){
    Product::findOrFail($id)->delete();
    $notification=array(
    'message'=>'Delete Success',
    'alert-type'=>'success'
 );
 return Redirect()->back()->with($notification);
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
