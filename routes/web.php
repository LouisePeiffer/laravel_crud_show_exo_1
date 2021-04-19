<?php

use App\Http\Controllers\IngredientController;
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

// FRONT
Route::get('/', [IngredientController::class, 'index'])->name('home');

// CRUD CREATE 
Route::get('/admin/create/ingredient', [IngredientController::class, 'create'])->name('create.ingredient');
Route::post('/admin/store/ingredient', [IngredientController::class, 'store'])->name('store.ingredient');

// CRUD DELETE
Route::delete('/admin/delete/{id}', [IngredientController::class, 'destroy'])->name('destroy.ingredient');

// CRUD SHOW
Route::get('/admin/show/{id}', [IngredientController::class, 'show'])->name('show.details');