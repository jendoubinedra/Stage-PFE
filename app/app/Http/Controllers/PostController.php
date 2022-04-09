<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function affiche(){
        $post=\App\Models\Post:: all();
        return $post;
    }
    public function insertion(){
        return view('post');
    }
 /*  public function addpost(){
      $post=new \App\Models\Post();
      $post->titre=$request->titre;
      $post->content=$request->content;
      $post->save();
  } */
}
