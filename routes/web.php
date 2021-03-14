<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TovarController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/', [TovarController::class,'index'])->name('home');
