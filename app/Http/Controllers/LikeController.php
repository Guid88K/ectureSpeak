<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use App\Models\User;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function like($post_id, $user_id)
    {

        $user = User::find($user_id);

            $check_exists = Like::where('post_id', '=', $post_id)->where('user_id', '=', $user_id)->get();
            if (count($check_exists) < 1) {
                $like = new Like();
                $like->post_id = $post_id;
                
                $user->likes()->save($like);
            } else {
                $like = Like::where('post_id', '=', $post_id)->where('user_id', '=', $user_id)->delete();
            }
            return redirect()->back();
    }
}
