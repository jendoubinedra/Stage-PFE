<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
   public function indexcomment(){
       $comment=App\Models\Comments::all();
       return $comment;
      
   }
   public function addcomment(){
       $comment=App\Models\Comments();
       $comment->content=$request->content;
       $comment->save();
   }
}
