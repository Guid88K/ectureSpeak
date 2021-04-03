<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MediaBookController extends Controller
{
    public function index()
    {
        $posts = Post::where('type_file', '=', 'doc')
            ->orwhere('type_file', '=', 'docx')
            ->orwhere('type_file', '=', 'fb2')
            ->orwhere('type_file', '=', 'pdf')
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        return view('media_book', ['posts' => $posts]);
    }
}
