<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::paginate(5);
        return view('post.index', compact('posts'));
    }

    public function user(User $user){
        $username = $user->name;
        $posts = Post::where(["users_id"=> $user->id])->paginate(5);
        return view('post.index', compact('posts', 'username'));
    }
}
