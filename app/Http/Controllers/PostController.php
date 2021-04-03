<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\ViewServiceProvider;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);

        $posts = $user->posts()
        ->where('type_file', '=', NULL)
        ->where('content_post', '!=', NULL)
        ->orderBy('updated_at', 'desc')->paginate(8);

        /*$posts = Post::orderBy('created_at','desc')->get(); */
        $your_likes = Like::where('user_id', '=' ,Auth::user()->id)->get();
        $like = Like::all();
        return view('my_account', ['posts' => $posts, 'like' => $like,'your_likes' =>$your_likes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = User::find(Auth::user()->id);

        $post = new Post();
        $post->name_post = $request->name_post;
        $post->content_post = $request->content_post;


        if ($files = $request->file('file')) {
            $destinationPath = 'uploads'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $post->file = $profileImage;
            $arra_type = array();
            $arra_type =  explode('.', $post->file);
            $post->type_file = end($arra_type);
        } else {

            $post->url_for_file = $request->url_for_file;
        }

        $post->category_post = $request->category;

        $user->posts()->save($post);

        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $user = User::all();
        $post = Post::find($id);
        $comments = $post->comments()->orderBy('updated_at', 'desc')->paginate(10);

        return view('pages.show_comment', ['post' => $post, 'comments' => $comments, 'user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if ($post->user_id == User::find(Auth::user()->id)->id) {
            $post->delete();
        }
        return redirect()->back();
    }
}
