<?php

use App\Http\Controllers\RipController;
use App\Http\Controllers\TuitionController;
use App\Models\Tuition;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/inicio');
Route::view('/inicio','pages.inicio.index')->name('index');
Route::resource('/matricula', TuitionController::class);
Route::resource('/rotura', RipController::class);