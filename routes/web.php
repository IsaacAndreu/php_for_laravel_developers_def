<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UsuariController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class,'index']);

Route::get('/tasks', [TaskController::class,'index']);

Route::get('/users', [UsuariController::class,'index']);

Route::get('/contact', [ContactController::class,'index']);

Route::get('/about', [AboutController::class,'index']);