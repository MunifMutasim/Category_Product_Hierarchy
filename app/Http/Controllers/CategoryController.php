<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        $categories = Category::all();
        return view('Category/create_category',compact('categories'));
    }    

    public function show(){
        $parentCategories= Category::where('parent_id',NULL)->get();
        return view('Category/show_categories',compact('parentCategories'));
    }

    public function store(Request $request){
        $name = request('category_name');
        $parent = request('parent_category');
        
        $category = new Category();
        $category->name = $name;
        
        if(strcmp($parent,"none")){
            $parent_category= Category::where('name',$parent)->first();

            $category->parent_id = $parent_category->id;
        }

        $category->save();

        return redirect('category/show');
    }
}
