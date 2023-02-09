<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakeController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('category/create',[MakeController::class,'create'])->name('category.create');
Route::post('category/store',[MakeController::class,'store'])->name('category.store');
Route::get('category/table',[MakeController::class,'table'])->name('category.table');
Route::get('category/edit/{id}',[MakeController::class,'edit'])->name('category.edit');
Route::post('category/update/{id}',[MakeController::class,'update'])->name('category.update');
Route::get('category/delete/{id}',[MakeController::class,'delete'])->name('category.delete');

// FrontController

Route::get('index',[FrontController::class,'index'])->name('index');
