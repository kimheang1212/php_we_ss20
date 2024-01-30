<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/article/index', [ArticleController::class, 'index']);
Route::resource("/user", UserController::class);

Route::resource('/article', ArticleController::class);


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/page2/{a}/{b}', function ($a, $b) {
    
    return view('page2', compact('a', 'b'));
});

Route::get('/page3/{a}/{b}', function ($a, $b) {
    
    return view('page3', compact('a', 'b'));
});



Route::get('/', function () {
    return view('index');
})->name("myindex");


Route::get('article/{a}/{b}', function ($x, $y) {
    $id = $x;
    $name = $y;
    
    // return view("article", ["id"=>$x, "name"=>$y]);
    return view("article", compact("id", "name"));
   
})->where(["a"=>"[0-9]+", "b"=>"[a-zA-Z]+"]);


Route::get("/create-sessions", [ArticleController::class, 'createSessions']);
Route::get("/use-sessions", [ArticleController::class, 'useSessions']);
Route::get("/remove-sessions", [ArticleController::class, 'removeSessions']);