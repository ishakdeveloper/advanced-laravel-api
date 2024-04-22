<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\SpaceController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/spaces', SpaceController::class);
Route::apiResource('spaces.boards', BoardController::class);
Route::apiResource('spaces.tasks', TaskController::class);
Route::apiResource('spaces.users', TaskController::class);
Route::apiResource('/tasks', TaskController::class);
Route::apiResource('/boards', BoardController::class);
Route::apiResource('boards.tasks', BoardController::class);
