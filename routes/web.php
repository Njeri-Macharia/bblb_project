<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('posts', PostController::class);
Route::get('posts/{post}/pdf',[PostController::class,'exportPdf'])->name('posts.pdf');
