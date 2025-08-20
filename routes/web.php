<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class,'index']);

Route::get('/category/{slug}/{id}',[CategoryController::class,'detail']);



