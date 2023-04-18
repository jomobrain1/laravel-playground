<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpRequestsController extends Controller
{
    public function index(){
        return view("httprequests");
    }
    public function store(Request $request){
        $request->validate([
            "name"=>"required"
        ]);
        $name=$request->input("name");
        $all =$request->all();

        return "<p>Name is : ".$name."</p>";
    }
}
