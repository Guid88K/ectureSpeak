<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SearchController extends Controller
{
    public function category_search_video($subject)
    {

        $posts = Post::where('category_post', '=', $subject)
            ->where(function ($q) {
                $q->where('type_file', '=', 'mp4')
                    ->orWhere('url_for_file', '!=', Null);
            })->where('content_post', '=', Null)

            ->orderBy('updated_at', 'desc')
            ->paginate(8);
        return view('media_video', ['posts' => $posts]);
    }

    public function search_by_name_video(Request $request)
    {
        $posts = Post::where('category_post', 'like', '%' . $request->name . '%')
            ->where(function ($q) {
                $q->where('type_file', '=', 'mp4')
                    ->orWhere('url_for_file', '!=', Null);
            })->where('content_post', '=', Null)

            ->orderBy('updated_at', 'desc')
            ->paginate(8);
        return view('media_video', ['posts' => $posts]);
    }

    public function category_search_book($subject)
    {

       
        $posts = Post::where('category_post', '=', $subject)->where(function ($q) {
            $q->where('type_file', '=', 'doc')
                ->orwhere('type_file', '=', 'fb2')
                ->orwhere('type_file', '=', 'docx')
                ->orwhere('type_file', '=', 'pdf');
        })->paginate(8);

        return view('media_book', ['posts' => $posts]);
    }

    public function search_by_name_book(Request $request)
    {

        $posts = Post::where('name_post', 'like', '%' . $request->name . '%')
            ->where(function ($q) {
                $q->where('type_file', '=', 'doc')
                    ->orwhere('type_file', '=', 'fb2')
                    ->orwhere('type_file', '=', 'docx')
                    ->orwhere('type_file', '=', 'pdf');
            })->paginate(8);

        return view('media_book', ['posts' => $posts]);
    }

    public function category_search_presantaion($subject)
    {

       
        $posts = Post::where('category_post', '=', $subject)
            ->where(function ($q) {
                $q->where('type_file', '=', 'ppt')
                    ->orWhere('type_file', '=', 'pptx');
            })->orderBy('updated_at', 'desc')
            ->paginate(8);
        return view('media_presentation', ['posts' => $posts]);
    }

    public function search_by_name_presantaion(Request $request)
    {
        $posts = Post::where('category_post', 'like', '%' . $request->name . '%')
            ->where(function ($q) {
                $q->where('type_file', '=', 'ppt')
                    ->orWhere('type_file', '=', 'pptx');
            })->orderBy('updated_at', 'desc')
            ->paginate(8);
        return view('media_presentation', ['posts' => $posts]);
    }
}
