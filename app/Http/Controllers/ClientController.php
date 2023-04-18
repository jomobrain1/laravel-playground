<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    //HttpClient controller
    
    public function posts()
    {
        return Http::get("https://jsonplaceholder.typicode.com/posts")->json();
    }

    public function post($id)
    {
        return Http::get("https://jsonplaceholder.typicode.com/posts/".$id)
                    ->json();
    }

    public function store()
    {
        return Http::post("https://jsonplaceholder.typicode.com/posts", [
             "userId"=>1,
             "title"=>"Jomo you are becoming a beast",
             "body"=>"This here is also the body"
         ])->json();
    }

    public function update()
    {
        return Http::put("https://jsonplaceholder.typicode.com/posts/1", [
          "title"=>"title changed",
          "body"=>"body has been updated"
        ])->json();
    }

    public function destroy($id)
    {
        return Http::delete("https://jsonplaceholder.typicode.com/posts/".$id)
                     ->json();
    }
     

}
