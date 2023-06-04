<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;

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



Route::get('/', [BlogPostController::class, 'welcome'])->name('welcome');

Route::get('/dashboard', [BlogPostController::class, 'display'])->middleware(['auth', 'verified'])->name('post.display');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//Route::get('post/home', [BlogPostController::class, 'display'])->name('post.display');


Route::resource('post', BlogPostController::class);
Route::patch('post/{id}', [BlogPostController::class, 'update'])->name('post.update');



require __DIR__.'/auth.php';
