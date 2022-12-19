<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;


Route::get('/', [TodolistController::class, 'index'])->name('index');
Route::post('/', [TodolistController::class, 'store'])->name('store');
Route::delete('/destroy',[TodolostController::class,'destroy'])->name('destroy');
