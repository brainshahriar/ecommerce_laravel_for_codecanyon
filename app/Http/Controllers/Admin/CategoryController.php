<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Subcategory;
use App\Models\Admin\Subsubcategory;
use Illuminate\Support\Str;
use Image;


class CategoryController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('admin.products.category.index',compact('categories'));
    }
    public function store(Request $request)
    {

        $banner = $request->file('banner');
        $icon = $request->file('icon');
        $name_gen=hexdec(uniqid()).'.'.$banner->getClientOriginalExtension();
        $name_gen1=hexdec(uniqid()).'.'.$icon->getClientOriginalExtension();
        Image::make($banner)->resize(200,300)->save('uploads/category/'.$name_gen);
        Image::make($icon)->resize(32,32)->save('uploads/category/'.$name_gen1);
        $save_url = 'uploads/category/'.$name_gen;
        $save_url1 = 'uploads/category/'.$name_gen1;

        $category = new Category;
        $category->banner = $save_url;
        $category->icon = $save_url1;
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

        // if($request->hasFile('banner')){
        //     $category->banner = $request->file('banner')->store('uploads/categories/banner');
        // }
        // if($request->hasFile('icon')){
        //     $category->icon = $request->file('icon')->store('uploads/categories/icon');
        // }
        
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
   public function delete($id){
    $category = Category::findOrFail($id);
    $banner = $category->banner;
    $icon = $category->icon;
    unlink($banner);
    unlink($icon);
    Category::findOrFail($id)->delete();
    $notification=array(
     'message'=>'Delete Success',
     'alert-type'=>'success'
 );
 return Redirect()->back()->with($notification);
    }

    //subcategory

    public function indexsubcategory(){
        $categories=Category::all();
        $subcategories=Subcategory::all();
        return view('admin.products.subcategory.index',compact('subcategories','categories'));
    }
    public function storesubcategory(Request $request){
        $subcategory = new Subcategory;
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->meta_title = $request->meta_title;
        $subcategory->meta_description = $request->meta_description;
        if ($request->slug != null) {
            $subcategory->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
        }
        else {
            $subcategory->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name)).'-'.Str::random(5);
        }

        // $data = openJSONFile('en');
        // $data[$subcategory->name] = $subcategory->name;
        // saveJSONFile('en', $data);

        if($subcategory->save()){
            $notification=array(
                'message'=>'Added Success',
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
   public function deletesubcategory($subcat_id){
    Subcategory::findOrFail($subcat_id)->delete();
        $notification=array(
        'message'=>'SubCategory Delete Success',
        'alert-type'=>'success'
    );
    return Redirect()->back()->with($notification);
    }


    //subsubcategory
    public function get_subcategories_by_category(Request $request)
    {
        $subcategories = Subcategory::where('category_id', $request->category_id)->get();
        return $subcategories;
    }

    public function indexsubsubcategory(){
        $categories=Category::all();
        $subcategories=Subcategory::all();
        $subsubcategories=Subsubcategory::all();
        return view('admin.products.subsubcategory.index',compact('subcategories','categories','subsubcategories'));
    }
    //get subcategory with ajax
    public function getSubCat($cat_id){
        $subcat = Subcategory::where('category_id',$cat_id)->orderBy('subcategory_name','ASC')->get();
        return json_encode($subcat);
    }
    public function storesubsubcategory(Request $request){
        $subsubcategory = new Subsubcategory;
        $subsubcategory->name = $request->name;
        $subsubcategory->sub_category_id = $request->sub_category_id;
        $subsubcategory->category_id = $request->category_id;
        //$subsubcategory->attributes = json_encode($request->choice_attributes);
        //$subsubcategory->brands = json_encode($request->brands);
        $subsubcategory->meta_title = $request->meta_title;
        $subsubcategory->meta_description = $request->meta_description;
        if ($request->slug != null) {
            $subsubcategory->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
        }
        else {
            $subsubcategory->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name)).'-'.Str::random(5);
        }

        // $data = openJSONFile('en');
        // $data[$subsubcategory->name] = $subsubcategory->name;
        // saveJSONFile('en', $data);

        if($subsubcategory->save()){
            $notification=array(
                'message'=>'Added Success',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
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
