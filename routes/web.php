<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HttpRequestsController;
use App\Http\Controllers\InnerJoinController;
use App\Http\Controllers\QueryBuilderController;
use App\Http\Controllers\RefreshController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [RefreshController::class,"index"]);

Route::get("/view", [RefreshController::class,"view"]);


// Http Client
// http://127.0.0.1:8000/http/posts
Route::controller(ClientController::class)
->prefix("http")
->group(function () {
    Route::get("/posts", "posts");
    Route::get("/post/{id}", "post");
    Route::get("/addpost", "store");
    Route::get("updatepost", "update");
    Route::get("deletepost/{id}", "destroy");
});

// HttpRequests and Form

Route::get("/requests", [HttpRequestsController::class,"index"])->middleware("checkuser");
Route::post("/requests", [HttpRequestsController::class,"store"])->name("store-requests");


// Sessions
Route::controller(SessionController::class)
->prefix("session")
->group(function () {
    Route::get("/get", "getSessionData");
    Route::get("/set", "storeSessionData");
    Route::get("/delete", "deleteSessionData");

});


// Query Builder routes
Route::controller(QueryBuilderController::class)
->prefix("query")
->group(function () {
    Route::get("/posts", "index");
    Route::post("/posts", "store")->name("store.posts");
    Route::get("/post/{id}","single");
    Route::post("/update-post","update")->name("update.post");
    Route::get("delete-post/{id}","destroy");
    
});


// Joins
Route::controller(InnerJoinController::class)
->prefix("joins")
->group(function () {
    Route::get("/inner-join", "innerJoinClause");
    Route::get("/left-join", "leftJoinClause");
    Route::get("/right-join", "rightJoinClause");
    
});
