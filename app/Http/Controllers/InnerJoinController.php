<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InnerJoinController extends Controller
{
    public function innerJoinClause()
    {
        return  DB::table("users")
          ->join("posts", "users.id", "=", "posts.user_id")
          ->select("users.name", "posts.title", "posts.body")
          ->get();
    }

    public function leftJoinClause()
    {
        return  DB::table("users")
          ->leftjoin("posts", "users.id", "=", "posts.user_id")
          ->get();
    }
    public function rightJoinClause()
    {
        return  DB::table("users")
          ->rightjoin("posts", "users.id", "=", "posts.user_id")
          ->get();
    }
}
