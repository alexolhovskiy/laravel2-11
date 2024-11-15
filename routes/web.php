<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return view('home');
});

// Route::get('/about', function () {
//     return view('about');
// });


Route::get('/about', [ProductController::class, 'about']);
Route::get('/catalog', [ProductController::class, 'catalog']);
Route::get('/add', [ProductController::class, 'add']);//тут просто выводим форму
Route::post('/add/check', [ProductController::class, 'add_check']);// тут же получаем данные из формы


require __DIR__.'/auth.php';