<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefreshController extends Controller
{

//   Laravel Components


    public function view(){
        $name="beast402";
        $details=array(
         "name"=>"jomobrain1",
         "salary"=>145000,
         "role"=>"backend developer"
        );
        return view("view",compact("name","details"));
    }

    public function index(){
        $fruits=array("mango","apple","oranges","banana");
        return view("welcome",compact("fruits"));
    }
}
