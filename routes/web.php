<?php

use App\Http\Controllers\BlogController;
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

Route::get('category/create',[MakeController::class,'create'])->name('category.create');
Route::post('category/store',[MakeController::class,'store'])->name('category.store');
Route::get('category/table',[MakeController::class,'table'])->name('category.table');
Route::get('category/edit/{id}',[MakeController::class,'edit'])->name('category.edit');
Route::post('category/update/{id}',[MakeController::class,'update'])->name('category.update');
Route::get('category/delete/{id}',[MakeController::class,'delete'])->name('category.delete');

// FrontController

Route::get('/',[FrontController::class,'index'])->name('index');
Route::get('blog/create',[BlogController::class,'create'])->name('blog.create');
Route::post('blog/store',[BlogController::class,'store'])->name('blog.store');
Route::get('blog/table',[BlogController::class,'table'])->name('blog.table');
Route::get('blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
Route::post('blog/update/{id}',[BlogController::class,'update'])->name('blog.update');
Route::get('blog/delete/{id}',[BlogController::class,'delete'])->name('blog.delete');


Route::get('blog/detail/{id}',[FrontController::class,'detail'])->name('blog.detail');


Route::get('blog/about',[FrontController::class,'about'])->name('blog.about');
Route::get('blog/contact',[FrontController::class,'contact'])->name('blog.contact');




 Route::get('master',[FrontController::class,'master'])->name('master');
Route::get('dashboard',[FrontController::class,'dashboard'])->name('dashboard');
Route::get('category/{id}',[FrontController::class,'view'])->name('category.view');

