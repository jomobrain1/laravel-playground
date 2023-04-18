<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function getSessionData(Request $request)
    {

        if ($request->session()->has("name")) {
            echo $request->session()->get("name");
        }
        else{
            echo "<h1> No name sesion</h1>";
        }
    }

    public function storeSessionData(Request $request){
       $request->session()->put("name","JomoBrain1");
       echo "<h1>Session data added</h1>";
    }
    public function deleteSessionData(Request $request){
        $request->session()->forget("name");
        echo "<h3>Session data has been deleted</h3>";
     }
}
