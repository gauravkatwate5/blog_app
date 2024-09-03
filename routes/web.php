<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AppController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GstController;
use App\Http\Controllers\VenderInvoice;

// basic route
Route::get('/', [AppController::class, 'index'])->name('/');

// blog routes
Route::get('/add-blog', [BlogController::class, 'addblog'])->name('add-blog');
Route::post('/create-blog',[BlogController::class,'createblog'])->name('create-blog');
Route::get('/blog-view/{id}', [BlogController::class, 'index'])->name('blog-view');

Route::post('/store-comment',[BlogController::class,'store_comment'])->name('store-comment');

Auth::routes();

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
