<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\EmpruntController;
use App\Http\Controllers\RendreController;
use App\Http\Controllers\UserController;
use App\Models\Emprunt;
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
Route::get('book',[BookController::class,'show']);
Route::delete('book/{id}',[BookController::class,'delete']);
Route::post('book',[BookController::class,'add']);
Route::put('book/{id}',[BookController::class,'update']);

Route::get('user',[UserController::class,'show']);

Route::post('emprunt',[EmpruntController::class,'add']);
Route::get('emprunt',[EmpruntController::class,'show']);

Route::put('rendre/{id}',[RendreController::class,'rendre']);
Route::get('rendre',[RendreController::class,'show']);