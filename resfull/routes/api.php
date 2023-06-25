<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\KomentarController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/', function (){
    echo env('APP_NAME');
});

Route::get('/users', [Controller::class,'index']);
Route::get('/users/{id}', [Controller::class,'show']);
Route::post('/users', [Controller::class,'store']);
Route::put('/users',[Controller::class, 'update']);
Route::delete('/users/{id}',[Controller::class, 'destroy']);

Route::get('/postings', [PostingController::class, 'index']);
Route::get('/postings/{id}', [PostingController::class, 'show']);
Route::post('/postings', [PostingController::class, 'store']);
Route::put('/postings/{id}', [PostingController::class, 'update']);
Route::delete('/postings/{id}', [PostingController::class, 'destroy']);

Route::get('/comments', [KomentarController::class, 'index']);
Route::get('/comments/{id}', [KomentarController::class, 'show']);
Route::post('/comments', [KomentarController::class, 'store']);
Route::put('/comments/{id}', [KomentarController::class, 'update']);
Route::delete('/comments/{id}', [KomentarController::class, 'destroy']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
