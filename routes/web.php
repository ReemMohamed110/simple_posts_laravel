<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class,'home']);
Route::get('/all_posts',[PostController::class,'index']);
Route::get('/create_post',[PostController::class,'create']);
Route::post('/store_post',[PostController::class,'store']);
Route::get('/edit_post/{id}',[PostController::class,'edit']);
Route::delete('/delete_post/{id}',[PostController::class,'destroy']);
Route::put('/update_post/{id}',[PostController::class,'update']);
Route::get('/single_post/{id}',[PostController::class,'show']);
Route::get('/search_post',[PostController::class,'search']);