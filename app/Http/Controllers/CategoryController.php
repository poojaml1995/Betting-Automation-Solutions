<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function detail($slug, $id){
        return view('category'); 
    }
}
