<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function index(){
        $comments = Comment::paginate(5);
        return view('comment.index', compact('comments'));
    }

    public function post(Post $post){
        $post_title = $post->title;
        $comments = Comment::where(["posts_id"=> $post->id])->paginate(5);
        return view('comment.index', compact('comments', 'post_title'));
    }
}
