<?php
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('home',[
        'active'=>"home",
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'active'=>"about",
        "title" => "About",
        "name" => "Muhammad Hasin Munadi",
        "email" => "muhammadhasinmunadi@gmail.com",
        "phone" => "+628996429674",
        "image"=> "poto.png"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories',function(){
    return view('categories' , [
        'title'=> 'Post Categories',
        'active'=>"categories",
        'categories'=> Category::all()
    ]);
});
Route::get('/login',[LoginController::class,'index']);
Route::get('/register',[RegisterController::class,'index']);
