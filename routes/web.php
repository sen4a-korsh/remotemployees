<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LotController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Auth::routes();

Route::get('/', [LotController::class, 'index'])->name('lot.index');
Route::get('/lots/create', [LotController::class, 'create'])->name('lot.create');
Route::get('/lots/{lot}', [LotController::class, 'show'])->name('lot.show');
Route::get('/lots/{lot}/edit', [LotController::class, 'edit'])->name('lot.edit');

Route::post('/lots/create', [LotController::class, 'store'])->name('lot.store');
Route::patch('/lots/{lot}', [LotController::class, 'update'])->name('lot.update');
Route::delete('/lots/{lot}', [LotController::class, 'destroy'])->name('lot.delete');


Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');

Route::post('/categories/create', [CategoryController::class, 'store'])->name('category.store');
Route::patch('/categories/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('category.delete');


