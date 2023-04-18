<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Routing with paramaters
Route::get("/users/{name}", function ($name) {
    return "Welcome".$name;
});

// Routing with nullable route parameters

Route::get("/students/{name?}", function ($name=null) {
    return "Hello".$name;
});

// Routing with conditional route paramaters

Route::get("/products/{name?}", function ($name=null) {
    return "Product is ".$name;
})->where("name","[a-zA-Z]+");


Route::get("/product/{id?}", function ($id=null) {
    return " The product id ".$id;
})->where("id","[0-9]+");

