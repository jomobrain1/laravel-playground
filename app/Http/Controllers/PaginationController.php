<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PaginationController extends Controller
{
    public function posts(){
        $posts=Post::paginate(10);
        return view("paginate",compact("posts"));
    }
}
