<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MediaPresentationController extends Controller
{
    public function index()
    {
        $posts = Post::where('type_file', '=', 'ppt')
            ->orWhere('type_file', '=', 'pptx')
            ->orderBy('updated_at', 'desc')->paginate(8);
        return view('media_presentation', ['posts' => $posts]);
    }
}
