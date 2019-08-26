<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        $c1 = new Category();

        $c1->name = "Deshi";
        $c1->parent_id = 2;

        $c1->save();

        return "Success";
        
        // $categories = Category::all();
        // return view('Category/create_category',compact('categories'));
    }    
}
