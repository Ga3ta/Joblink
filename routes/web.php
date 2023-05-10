<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/', [HomeController::class, 'showPosts'])->name('posts');

Route::post('/home', [HomeController::class, 'newPost'])->name('newP');

Route::get('/home', [HomeController::class, 'index'])->name('add');

Route::post('/apply/{id}', [HomeController::class, 'testID'])->name('IDT');

Route::post('/applied', [HomeController::class, 'addApp'])->name('Applied');

Route::get('/view', [HomeController::class, 'seeApp']);
