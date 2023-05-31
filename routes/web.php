<?php

use App\Http\Controllers\ProfileController;
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


Route::get('/dashboard', function () {
    return redirect()->route('Users');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Public
Route::get('/',[\App\Http\Controllers\PublicController::class,'index']);
Route::get('/index',[\App\Http\Controllers\PublicController::class,'index'])->name('index');
Route::get('/directions',[\App\Http\Controllers\PublicController::class,'directions'])->name('directions');
Route::get('/blog',[\App\Http\Controllers\PublicController::class,'blog'])->name('blog');
Route::get('/contact',[\App\Http\Controllers\PublicController::class,'contact'])->name('contact');

//Admin
Route::get("/Admin/Posts",[\App\Http\Controllers\AdminController::class,'posts'])->middleware(['auth', 'verified'])->name("Posts");
Route::get("/Admin/Users",[\App\Http\Controllers\AdminController::class,'users'])->middleware(['auth','verified'])->name('Users');
Route::get("/Admin/Message",[\App\Http\Controllers\AdminController::class,'message'])->middleware(['auth','verified'])->name('Message');

//Resource
Route::resource("/Post",\App\Http\Controllers\PostController::class)->middleware(['auth', 'verified']);
Route::resource("/User",\App\Http\Controllers\UserController::class)->middleware(['auth','verified']);
Route::resource("/Message",\App\Http\Controllers\ContactController::class);
Route::resource("/Blog",\App\Http\Controllers\BlogController::class);
