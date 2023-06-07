<?php

use App\Http\Controllers\Buycontroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\TestIdMissingException;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buys', [BuyController::class,'index'])->name('buys.index');
Route::get('/buys/create', [BuyController::class,'create'])->name('buys.create');
Route::post('/buys', [BuyController::class,'shop'])->name('buys.shop');
Route::get('/buys/{id}/edit', [BuyController::class,'edit'])->name('buys.edit');
Route::put('/buys/{id}', [BuyController::class,'update'])->name('buys.update');
Route::delete('/buys{id}', [BuyController::class, 'destroy'])->name('buys.destroy');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile', [ProfileController::class, 'shop'])->name('profile.shop');
});

require __DIR__.'/auth.php';
