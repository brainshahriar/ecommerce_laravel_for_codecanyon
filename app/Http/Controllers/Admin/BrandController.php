<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Brand;
use Illuminate\Support\Str;

class BrandController extends Controller
{
  public function index(){
      $brand=Brand::all();
      return view('admin.products.brand.index',compact('brand'));
  }
  public function store(Request $request)
  {
   
      $brand = new Brand;
      $brand->name = $request->name;
      $brand->meta_title = $request->meta_title;
      $brand->meta_description = $request->meta_description;
      if ($request->slug != null) {
          $brand->slug = str_replace(' ', '-', $request->slug);
      }
      else {
          $brand->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name)).'-'.Str::random(5);
      }
      if($request->hasFile('logo')){
          $brand->logo = $request->file('logo')->store('uploads/brands');
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
      // Product::where('brand_id', $brand->id)->delete();
      if(Brand::destroy($id)){
          if($brand->logo != null){
              //unlink($brand->logo);
          }
          $notification=array(
            'message'=>'Brand Delete Success',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
      }
      else{
          flash(__('Something went wrong'))->error();
          return back();
      }
  }
}
