<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

// Define route to fetch all comments
Route::get('/comments', [CommentController::class, 'index']);
Route::post('/save', [CommentController::class, 'store']);

// Define a route for authenticated user (Sanctum middleware)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
