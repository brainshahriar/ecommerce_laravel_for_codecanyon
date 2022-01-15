<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Subcategory;
use App\Models\Admin\Subsubcategory;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    public function index(){
        $category=Category::all();
        return view('admin.products.category.index',compact('category'));
    }
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->cash_back = !empty($request->cash_back) ? $request->cash_back : 0.00;
        $category->cash_back_adjust = !empty($request->cash_back_adjust) ? $request->cash_back_adjust : 0.00;
        $category->user_package_discount = !empty($request->user_package_discount) ? 'on' : 'off';
        $category->status = $request->status ? 'on' : 'off';
        if ($request->slug != null) {
            $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
        }
        else {
            $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name)).'-'.Str::random(5);
        }
        // if ($request->commision_rate != null) {
        //     $category->commision_rate = $request->commision_rate;
        // }

        // $data = openJSONFile('en');
        // $data[$category->name] = $category->name;
        // saveJSONFile('en', $data);

        if($request->hasFile('banner')){
            $category->banner = $request->file('banner')->store('uploads/categories/banner');
        }
        if($request->hasFile('icon')){
            $category->icon = $request->file('icon')->store('uploads/categories/icon');
        }
        
        $category->serial = $request->serial; 

        if($category->save()){
            $notification=array(
                'message'=>'Category Added Success',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
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
        $subsubcategory=Subsubcategory::all();
        return view('admin.products.subsubcategory.index',compact('subcategory','categories','subsubcategory'));
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
   public function deletesubsubcategory($subsubcat_id){
    Subsubcategory::findOrFail($subsubcat_id)->delete();
        $notification=array(
        'message'=>'Delete Success',
        'alert-type'=>'success'
    );
    return Redirect()->back()->with($notification);
    }
}
