<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;
use App\Models\Post;

class MyPresentationController extends Controller
{
    public function index()
    {

        $user = User::find(Auth::user()->id);

        $posts = $user->posts()->where(function ($q) {
            $q->where('type_file', '=', 'ppt')
                ->orwhere('type_file', '=', 'pptx');
        })->orderBy('updated_at', 'desc')->paginate(8);
       
        /*$posts = Post::orderBy('created_at','desc')->get(); */

        $like = Like::all();
        return view('my_account_presentation', ['posts' => $posts, 'like' => $like]);
    }


    public function create()
    {
        return view('pages.my_presentation_add');
    }

    public function store(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $post = new Post();
        $post->name_post = $request->name_post;


        if ($files = $request->file('file')) {
            $destinationPath = 'uploads'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $post->file = $profileImage;
            $arra_type = array();
            $arra_type =  explode('.', $post->file);
            $post->type_file = end($arra_type);
        }
        if ($files = $request->file('f_file')) {
            $destinationPath = 'uploads'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $post->preview = $profileImage;
        }
        $post->category_post = $request->category_post;
        $post->autor = $request->autor;
        $user->posts()->save($post);

        return redirect('/my_presentation');
    }
}
