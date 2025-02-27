<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clothing_ItemsController;

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

// Default Laravel Breeze routes for authentication
Route::get('/', function () {
    return view('welcome');
});

// Dashboard route (protected by auth middleware)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Clothing_Items routes (protected by auth middleware)
Route::middleware('auth')->group(function () {
    Route::get('/clothing_items', [Clothing_ItemsController::class, 'index'])->name('clothing_items.index');
    Route::get('/clothing_items/create', [Clothing_ItemsController::class, 'create'])->name('clothing_items.create');
    Route::post('/clothing_items', [Clothing_ItemsController::class, 'store'])->name('clothing_items.store');
    Route::get('/clothing_items/{clothing_items}/edit', [Clothing_ItemsController::class, 'edit'])->name('clothing_items.edit');
    Route::put('/clothing_items/{clothing_items}', [Clothing_ItemsController::class, 'update'])->name('clothing_items.update');
    Route::delete('/clothing_items/{clothing_items}', [Clothing_ItemsController::class, 'destroy'])->name('clothing_items.destroy');
});


