<?php

use App\Http\Controllers\followController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\profileController;

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
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

    // Tweet
    Route::post('/tweet',[HomeController::class,'tweet'])->name('tweet');
    
    Route::post('/profile/{user:name}/follow', [followController::class,'store'])->name('profile');
});

Route::get('/profile/{user:name}', [profileController::class,'show'])->name('profile');