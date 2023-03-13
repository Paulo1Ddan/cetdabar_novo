<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CetdabarController;

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

Route::get('/', [CetdabarController::class, 'index'])->name('site.home');
Route::get('/sobre', [CetdabarController::class, 'sobre'])->name('site.sobre');
Route::get('/cursos', [CetdabarController::class, 'cursos'])->name('site.cursos');
Route::get('/cursos/{curso}', [CetdabarController::class, 'showCurso'])->name('site.cursos.show');
Route::get('/blog', [CetdabarController::class, 'index'])->name('site.blog');
Route::get('/blog/{artigo}', [CetdabarController::class, 'index'])->name('site.blog.show');
Route::get('/contato', [CetdabarController::class, 'index'])->name('site.contato');
Route::post('/contato', [CetdabarController::class, 'sendContato'])->name('site.contato');

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
