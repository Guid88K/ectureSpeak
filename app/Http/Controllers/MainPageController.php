<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Like;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class MainPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index_for_main_page()
    {

      
        $posts = Post::where('type_file', '=', NULL)
            ->where('content_post', '!=', NULL)
            ->orderBy('created_at', 'desc')->paginate(8);
        $like = Like::all();
        $your_likes = Like::where('user_id', '=' ,Auth::user()->id)->get();
        
        $comment = Comment::all();
        return view('main_page', ['posts' => $posts, 'comment' => $comment, 'like' => $like,'your_likes' => $your_likes]);
    }
}
