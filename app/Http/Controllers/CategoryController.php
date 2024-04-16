<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index()
    {
    //     $cats = Category::all();
    // //    return view('admin.index');
    //     $categories =  json_encode($cats);
         return view('admin.index');
      
        // dd($cats);
    }

   public function show()
   {

    //     $cats = Category::all();
    // //    return view('admin.index');
    //     $categories =  json_encode($cats);
    //     echo json_encode($categories);
   }
}
