<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\CetdabarController::class, 'index'])->name('site.home');
Route::get('/sobre', [\App\Http\Controllers\CetdabarController::class, 'sobre'])->name('site.sobre');
Route::get('/cursos', [\App\Http\Controllers\CetdabarController::class, 'cursos'])->name('site.cursos');
Route::get('/blog', [\App\Http\Controllers\CetdabarController::class, 'index'])->name('site.blog');
Route::get('/contato', [\App\Http\Controllers\CetdabarController::class, 'index'])->name('site.contato');
Route::get('/dashboard', function () {
    return view('app.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/teste', function () {
    return view('app.dashboard');
})->middleware(['auth', 'verified'])->name('teste');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
