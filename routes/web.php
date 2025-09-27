<?php

use App\Http\Controllers\Aboutcontroller;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Models\about;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/about', [Aboutcontroller::class, 'index']);

Route::get('/artikel', [ArticleController::class, 'index']);
Route::get('/artikel/list', [ArticleController::class, 'artikelList']);
route::get('/artikel/{id}', [ArticleController::class, 'showId'])->name('artikelId');

Route::get('/contact', function () {
    return view('contact');
});
route::post('/contact', [ContactController::class, 'post'])->name('contact');
