<?php

use App\Http\Controllers\PageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/','home');

// Route::get('/buy', function() {
//     return view('buymeacamera');
// });
Route::get('/',[PageController::class,'main']);
Route::get("/buy",[PageController::class,'buy']);
Route::get("/secret",[PageController::class,'secret']);
Route::get("/milap",[PageController::class,'milap']);
// Route::get("/secret",[PageController::class,'secret']);
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
