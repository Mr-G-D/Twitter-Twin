<?php

use App\Http\Controllers\followController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Auth;

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
    Route::post('/tweet/{tweet}/like',[followController::class,'like'])->name('like');
    Route::post('/tweet/{tweet}/dislike',[followController::class,'dislike'])->name('dislike');
    
    //Follow
    Route::post('/profile/{user:username}/follow', [followController::class,'store'])->name('profile');

    //View Profile
    Route::get('/profile/{user:username}', [profileController::class,'show'])->name('profile');
    
    //Edit Profile
    Route::get('/profile/{user:username}/edit', [profileController::class,'editProfile'])->name('edit');
    Route::patch('/profile/{user:username}', [profileController::class,'updateProfile'])->name('profile');

    //Explore
    Route::get('/explore', [profileController::class,'explore'])->name('explore');

    //Logout
    Route::get('/logout', [HomeController::class,'logout'])->name('logout');
});
