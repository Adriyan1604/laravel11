<?php 

use Illuminate\Auth\Middleware\Authenticate; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;

Route::get('/user', function (Request $request) { 
    return $request->user(); 
})->middleware(Authenticate::using('sanctum')); 
//posts 

Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);
Route::apiResource('/posts', PostController::class);
Route::put('/posts/{id}', [PostController::class, 'update']);