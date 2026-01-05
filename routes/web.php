<?php

use Illuminate\Support\Facades\Route;
use  asmaa\slug\Http\Controllers\SlugController;

Route::get('/homess',[SlugController::class,'index'])->name('homess');










