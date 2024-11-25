<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/movies', [MovieController::class, 'getAllMovies']);
Route::get('/movies/{id}', [MovieController::class, 'getMovieById']);
Route::post('/movies', [MovieController::class, 'createMovie']);
Route::put('/movies/{id}', [MovieController::class, 'updateMovie']);
Route::delete("/movies/{id}", [MovieController::class, 'delete']);

