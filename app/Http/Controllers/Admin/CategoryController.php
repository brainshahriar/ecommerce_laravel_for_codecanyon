<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;

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
}
