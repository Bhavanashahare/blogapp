<?php

use App\Http\Controllers\api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/signup',[AuthController::class,'signup']);
Route::post('/signin',[AuthController::class,'signin']);

//  Route::post('store',[AuthController::class,'store']);
//  Route::get('table',[AuthController::class,'table']);
//  Route::post('update/{id}',[AuthController::class,'update']);
//  Route::get('delete/{id}',[AuthController::class,'delete']);

