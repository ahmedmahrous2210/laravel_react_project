<?php

use App\Http\Controllers\API\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('movies', [MovieController::class, 'index']);
Route::post('/add-movie', [MovieController::class, 'store']);
Route::get('/edit-movie/{id}', [MovieController::class, 'edit']);
Route::put('update-movie/{id}', [MovieController::class, 'update']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
