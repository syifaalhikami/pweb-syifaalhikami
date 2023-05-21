<?php

use App\Http\Controllers\PostController;
use App\Models\post;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return 'Halaman About';
// });
// Route::get('/blog', function () {
//     return 'Halaman Blog';
// });
// Route::get('/posts', function () {
//     return 'Halaman Posts';
// });

Route::get('/about', function () {
    return view('about',[
        "title" => "about",
        "name" => "Syifa Alhikami",
        "email" =>"syifaboy@yahoo.com",
        "image" => "Syifa.JPG"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
        "name" => "Syifa Alhikami",
        "email" =>"syifaboy@yahoo.com",
        "image" => "Syifa.JPG"
    ]);
});



// Route::get('/posts', function () {
//     // return view('posts', [
//     //     "title" => "posts",
//     //     "name" => "Syifa Alhikami",
//     //     "email" =>"syifaboy@yahoo.com",
//     //     "image" => "Syifa.JPG",
//     //     "posts" => post::all()

//     // ]);
// }

//dengan controller
Route::get('/posts',[PostController::class, 'index']);

//halaman single post tanpa controller
// Route::get('posts/{slug}', function($slug){

//     // return view('post', [
//     //     "title" => "single post",
//     //     "post" => post::find($slug)
//     // ]);
// });

//halaman single post dengan controller
Route::get('/posts/{post::slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
        return view('category', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});