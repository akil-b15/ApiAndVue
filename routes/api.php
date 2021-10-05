<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

// list articles
Route::get('/articles', [ArticleController::class, 'index']);

// list single article 
Route::get('/article/{id}', [ArticleController::class, 'show']);

// create new article 
Route::post('/article', [ArticleController::class, 'store']);

// update article 
Route::put('/article', [ArticleController::class, 'store']);

// delete article 
Route::delete('/article', [ArticleController::class, 'destroy']);
