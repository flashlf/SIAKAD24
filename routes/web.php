<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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
    $name = request('name');
    return view('index', [
        'name' => $name
    ]);
});

Route::get('/about',function()  {
    return view('about');
});
// Route::get('/post/{param}', function($param) {
//     $tmp = [
//         'first-post'    => "Hello ini post pertama dari param",
//         'second-post'   => "Ini post kedua dari param"
//     ];
//     if(! array_key_exists($param, $tmp)) abort(404,'Maaf, halaman tidak ditemukan');
//     return view('post', [
//         'post' => $tmp[$param]
//     ]);
// });

Route::get('/post/{param}', [PostsController::class, 'show']);

Route::get('/welcome', function() {
    return view('welcome');
});

