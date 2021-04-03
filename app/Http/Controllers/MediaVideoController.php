<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MediaVideoController extends Controller
{
    public function index()
    {
        $posts = Post::where('type_file', '=', 'mp4')
            ->orWhere('url_for_file', '!=', Null)
            ->where('content_post', '=', Null)
            ->orderBy('updated_at', 'desc')->paginate(8);

        return view('media_video', ['posts' => $posts]);
    }
}
