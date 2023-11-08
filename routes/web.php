<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\post\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'index'])->name('post.index');

Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');

Route::get('/create_post', [PostController::class, 'create'])->name('post.create');
Route::post('/store_post', [PostController::class, 'store'])->name('post.store');

Route::get('/edit_post/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::put('/update_post/{id}', [PostController::class, 'update'])->name('post.update');


Route::delete('/delete/{id}', [PostController::class, 'destroy'])->name('post.destroy');

Route::view('/about', 'posts.about');


Route::resource('/categoria', CategoriaController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
