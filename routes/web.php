<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/page1', [HomeController::class,'page1'])->name('page1');
Route::get('/page2', [HomeController::class,'page2'])->name('page2');
Route::get('/page3', [HomeController::class,'page3'])->name('page3');
Route::get('/page4', [HomeController::class,'page4'])->name('page4');
Route::get('/page5', [HomeController::class,'page5'])->name('page5');
