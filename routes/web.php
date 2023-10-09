<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
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

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/email', [SiteController::class, 'email'])->name('email');
Route::get('/objavi-rad', [SiteController::class, 'publish'])->name('publish');
Route::get('/category/{category:slug}', [PostController::class, 'byCategory'])->name('by-category');
Route::get('/ads.txt', function(){
    return view('ads');
});
Route::get('/bilten', [SiteController::class, 'bilten'])->name('bilten');
Route::post('/bilten', [SiteController::class, 'subscribe'])->name('subscribe');
Route::get('/{post:slug}', [PostController::class, 'show'])->name('view');
Route::post('/unsubscribe{token}', [Subscription::class, 'unsubscribe'])->name('unsubscribe');
// Route::get('/about-us', [SiteController::class, 'about'])->name('about-us');

