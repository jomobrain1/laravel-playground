<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function about()
    {
        return view("blade-templates.about");

    }
    public function contact()
    {
        return view("blade-templates.contact");
    }
}
