<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\grelinController;

Route::get('/',[grelinController::class,'index'])->name('grelin_index'); 
Route::get('/sinopse',[grelinController::class,'sinopse'])->name('grelin_sinopse');