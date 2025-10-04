<?php

use App\Http\Controllers\Aboutcontroller;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ListContactController;
use App\Models\about;
use Illuminate\Support\Facades\Route;

//home
Route::get('/', function () {
    return view('home');
})->name('home');

//about
Route::get('/about', [Aboutcontroller::class, 'index']);

//artikel
Route::get('/artikel', [ArticleController::class, 'index']);
Route::get('/artikel/list', [ArticleController::class, 'artikelList']);
route::get('/artikel/{id}', [ArticleController::class, 'showId'])->name('artikelId');

//contact
Route::get('/contact', function () {
    return view('contact');
});
route::post('/contact', [ContactController::class, 'post'])->name('contact');

route::get('/listcontact', function () {
    return view('/ListContact');
});

//Login
Route::post('/login', [LoginController::class, 'login'])->name('login.admin.attempt');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth:admin');
Route::get('/dashboard', function () {
    return view('/dashboard');
})->middleware('auth:admin')->name('dashboard');
Route::get('/listcontact', [ListContactController::class, 'index'])->middleware('auth:admin')->name('admin.contact');
route::get('/login', function () {
    return redirect()->route('home');
})->name('login');
