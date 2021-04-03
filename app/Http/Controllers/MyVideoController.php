<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;
use phpDocumentor\Reflection\Types\Null_;
use App\Models\Post;

class MyVideoController extends Controller
{
    public function index()
    {

        $user = User::find(Auth::user()->id);

        $posts = $user->posts()->where(function ($q) {
            $q->where('type_file', '=', 'mp4')
                ->orWhere('url_for_file', '!=', Null);
        })->where('content_post', '=', Null)
            ->orderBy('updated_at', 'desc')->paginate(8);

        /*$posts = Post::orderBy('created_at','desc')->get(); */

        $like = Like::all();
        return view('my_account_video', ['posts' => $posts, 'like' => $like]);
    }

    public function create()
    {
        return view('pages.my_video_add');
    }

    public function store(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $post = new Post();
        $post->name_post = $request->name_post;
        $post->url_for_file = $request->url_for_file;
        $post->category_post = $request->category_post;

        $user->posts()->save($post);

        return redirect('/my_video');
    }
}
