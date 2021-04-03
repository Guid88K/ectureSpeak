<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class MyLikesController extends Controller
{
    public function paginate($items, $perPage = 8, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    public function index()
    {

        $user = User::find(Auth::user()->id);
        $posts_all = Post::where('type_file', '=', NULL)
            ->where('content_post', '!=', NULL)
            ->orderBy('updated_at', 'desc')->paginate(8);
        $your_post = array();
        $check_user_likes = $user->likes()->get();

        foreach ($posts_all as $p) {
            foreach ($check_user_likes as $cul) {
                if ($p->id == $cul->post_id) {
                    array_push($your_post, $p);
                }
            }
        }

        $posts = $this->paginate($your_post);
      
        /*   $posts = Post::where('type_file', '=', NULL)
            ->where('content_post', '!=', NULL)
            ->orderBy('updated_at', 'desc')->paginate(8); */

        /*$posts = Post::orderBy('created_at','desc')->get(); */
        $your_likes = Like::where('user_id', '=', Auth::user()->id)->get();
        $like = Like::all();
        return view('my_likes', ['posts' => $posts, 'like' => $like, 'your_likes' => $your_likes]);
    }
}
