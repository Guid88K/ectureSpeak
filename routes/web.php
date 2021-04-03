<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ForEditUserController;
use Faker\Guesser\Name;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\MediaBookController;
use App\Http\Controllers\MediaPresentationController;
use App\Http\Controllers\MediaVideoController;
use App\Http\Controllers\MyBookController;
use App\Http\Controllers\MyPresentationController;
use App\Http\Controllers\MyVideoController;
use App\Http\Controllers\SearchController;
use PhpParser\Node\Stmt\For_;
use App\Http\Controllers\MyLikesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();



Route::resource('/post', PostController::class);
Route::get('my_book', [MyBookController::class, 'index'])->name('my_book.index');
Route::get('my_book/create', [MyBookController::class, 'create'])->name('my_book.create');
Route::post('my_book', [MyBookController::class, 'store'])->name('my_book.store');


Route::get('my_presentation', [MyPresentationController::class, 'index'])->name('my_presentation.index');
Route::get('my_presentation/create', [MyPresentationController::class, 'create'])->name('my_presentation.create');
Route::post('my_presentation', [MyPresentationController::class, 'store'])->name('my_presentation.store');



Route::get('my_video', [MyVideoController::class, 'index'])->name('video.index');
Route::get('my_video/create', [MyVideoController::class, 'create'])->name('video.create');
Route::post('my_video', [MyVideoController::class, 'store'])->name('video.store');




Route::get('/comment/store/{id}', [CommentController::class, 'store'])->name('comment.store');
Route::delete('/comment/delete/{id}', [CommentController::class, 'destroy'])->name('comment.delete');

Route::get('/main', [MainPageController::class, 'index_for_main_page']);

Route::post('like/store/{post_id}/{user_id}', [LikeController::class, 'like'])->name('like.store');

Route::get('/media_video', [MediaVideoController::class, 'index'])->name('media_video.index');
Route::get('/media_book', [MediaBookController::class, 'index'])->name('media_book.index');
Route::get('/media_presentation', [MediaPresentationController::class, 'index'])->name('media_presentation.index');


Route::get('/video/search/{subject}', [SearchController::class, 'category_search_video'])->name('category_search_video');
Route::get('/video/search/', [SearchController::class, 'search_by_name_video'])->name('search_by_name_video');


Route::get('/book/search/{subject}', [SearchController::class, 'category_search_book'])->name('category_search_book');
Route::get('/book/search', [SearchController::class, 'search_by_name_book'])->name('search_by_name_book');

Route::get('/presantation/search/{subject}', [SearchController::class, 'category_search_presantaion'])->name('category_search_presantation');
Route::get('/presantation/search', [SearchController::class, 'search_by_name_presantaion'])->name('search_by_name_presantation');


Route::get('/osob', [ForEditUserController::class, 'index'])->name('osob.index');
Route::patch('/osob/{id}', [ForEditUserController::class, 'update'])->name('osob.update');

Route::get('/my_likes', [MyLikesController::class, 'index'])->name('my_likes.index');

Route::get('/', function () {
    $check = Auth::check();

    if ($check == true)
        return redirect('/main');
    else
        return view('root_file');
});
