<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

Route::get('/animales', [AnimalController::class, 'index']);
Route::get('/animales/{id}', [AnimalController::class, 'show']);
Route::post('/animales', [AnimalController::class, 'store']);
Route::put('/animales/{id}', [AnimalController::class, 'update']);
Route::delete('/animales/{id}', [AnimalController::class, 'destroy']);
