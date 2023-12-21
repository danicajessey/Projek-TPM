<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mhsController;


Route::get("/", [mhsController::class,'show'])->name('show');

Route::get("/create", [mhsController::class,'create'])->name('create');

Route::post("/store", [mhsController::class,'store'])->name('store');

Route::get('/edit/{id}', [mhsController::class,'edit'])->name('edit');

Route::patch('/update/{id}', [mhsController::class,'update'])->name('update');

Route::delete('/delete/{id}', [mhsController::class,'delete'])->name('delete');

