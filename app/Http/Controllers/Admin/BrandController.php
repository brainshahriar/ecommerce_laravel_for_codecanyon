<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Brand;
use Illuminate\Support\Str;
use Image;

class BrandController extends Controller
{
  public function index(){
      $brand=Brand::all();
      return view('admin.products.brand.index',compact('brand'));
  }
  public function store(Request $request)
  {  
        $image = $request->file('logo');
        $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(120,80)->save('uploads/brand/'.$name_gen);
        $save_url = 'uploads/brand/'.$name_gen;
        $brand = new Brand;
        $brand->name = $request->name;
        $brand->meta_title = $request->meta_title;
        $brand->meta_description = $request->meta_description;
        $brand->logo =$save_url;
      if ($request->slug != null) {
          $brand->slug = str_replace(' ', '-', $request->slug);
      }
      else {
          $brand->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name)).'-'.Str::random(5);
      }
      if($brand->save()){
        $notification=array(
          'message'=>'Brand Added Success',
          'alert-type'=>'success'
      );
      return Redirect()->back()->with($notification);
      }
      else{
          flash(__('Something went wrong'))->error();
          return back();
      }
  }
  public function destroy($id)
  {
    $brand = Brand::findOrFail($id);
    $img = $brand->logo;
    unlink($img);
    Brand::findOrFail($id)->delete();
    $notification=array(
    'message'=>'Brand Delete Success',
    'alert-type'=>'success'
 );
 return Redirect()->back()->with($notification);
}
}