<?php

use App\Http\Controllers\BahanAjarController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/hello', function () {
    return Inertia::render('Hello', [
        'name' => 'World',
    ]);
});

Route::get('/regist', function () {
    return Inertia::render('Regist', [
        'name' => 'World',
    ]);
});

Route::get('/BahanAjar', [BahanAjarController::class, 'index']);
Route::post('/BahanAjar', [BahanAjarController::class, 'store'])->middleware(['auth', 'verified'])->name('create.BahanAjar');
Route::get('/BahanAjar', [BahanAjarController::class, 'show'])->middleware(['auth', 'verified'])->name('bahan.Ajar');

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
