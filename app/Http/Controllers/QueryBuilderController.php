<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{
    public function index()
    {
        $posts=DB::table("posts")->get();
        return view("query.query", compact("posts"));
    }

    public function store(Request $request)
    {
        DB::table("posts")->insert([
            "title"=>$request->title,
            "body"=>$request->body,
        ]);

        return back()->with("msg", "Posts created successFully");

    }

  public function single($id)
  {
      $post=DB::table("posts")->where("id", $id)->first();
      return view("query.single", compact("post"));
  }

  public function update(Request $request){
    DB::table("posts")->where("id",$request->id)->update([
        "title"=>$request->title,
        "body"=>$request->body,
    ]);
    return back()->with("msg","post updated");
  }

  public function destroy($id)
  {
    DB::table('posts')->where("id",$id)->delete();
    return back()->with("msg","Post deleted success");
  }



}
