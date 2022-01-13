<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Subcategory;

class CategoryController extends Controller
{
    public function index(){
        $category=Category::all();
        return view('admin.products.category.index',compact('category'));
    }
    public function store(Request $request){
       Category::insert([
        'category_name' => $request->category_name,
        'category_slug' => strtolower(str_replace(' ','-',$request->category_name)),

       ]);

       $notification=array(
        'message'=>'Catetory Added Success',
        'alert-type'=>'success'
    );
    return Redirect()->back()->with($notification);
    }
        //delete Category
   public function delete($cat_id){
    Category::findOrFail($cat_id)->delete();
        $notification=array(
        'message'=>'Category Delete Success',
        'alert-type'=>'success'
    );
    return Redirect()->back()->with($notification);
    }

    //subcategory

    public function indexsubcategory(){
        $categories=Category::all();
        $subcategory=Subcategory::all();
        return view('admin.products.subcategory.index',compact('subcategory','categories'));
    }
    public function storesubcategory(Request $request){
       Subcategory::insert([
        'category_id' => $request->category_id,
        'subcategory_name' => $request->subcategory_name,
        'meta_title' => $request->meta_title,
        'description' => $request->description,

       ]);

       $notification=array(
        'message'=>'SubCatetory Added Success',
        'alert-type'=>'success'
    );
    return Redirect()->back()->with($notification);
    }
        //delete Category
   public function deletesubcategory($subcat_id){
    Subcategory::findOrFail($subcat_id)->delete();
        $notification=array(
        'message'=>'SubCategory Delete Success',
        'alert-type'=>'success'
    );
    return Redirect()->back()->with($notification);
    }


    //subsubcategory


    public function indexsubsubcategory(){
        $categories=Category::all();
        $subcategory=Subcategory::all();
        return view('admin.products.subsubcategory.index',compact('subcategory','categories'));
    }
    //get subcategory with ajax
    public function getSubCat($cat_id){
        $subcat = Subcategory::where('category_id',$cat_id)->orderBy('subcategory_name','ASC')->get();
        return json_encode($subcat);
    }
    public function storesubsubcategory(Request $request){
       Subsubcategory::insert([
        'category_id' => $request->category_id,
        'subcategory_id' => $request->subcategory_id,
        'subsubcategory_name' => $request->subsubcategory_name,
        'meta_title' => $request->meta_title,
        'description' => $request->description,

       ]);

       $notification=array(
        'message'=>'SubCatetory Added Success',
        'alert-type'=>'success'
    );
    return Redirect()->back()->with($notification);
    }
//         //delete Category
//    public function deletesubsubcategory($subcat_id){
//     Subcategory::findOrFail($subcat_id)->delete();
//         $notification=array(
//         'message'=>'SubCategory Delete Success',
//         'alert-type'=>'success'
//     );
//     return Redirect()->back()->with($notification);
//     }
}
