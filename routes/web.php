<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KlienController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\NotarisController;

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
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

// Post
Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post:id}', [PostController::class, 'show']);

Route::get('/dashboard',function() {
    return view('dashboard.index');
});

// --CRUD Notaris
Route::resource('/dashboard/notaris', NotarisController::class);
// --CRUD Klien
Route::resource('/dashboard/klien', KlienController::class);
// --CRUD Notaris
Route::resource('/dashboard/booking', BookingController::class);
// --CRUD Posts
Route::resource('/dashboard/posts', DashboardPostController::class);