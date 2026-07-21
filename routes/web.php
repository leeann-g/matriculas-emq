<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/inicio');
Route::view('/inicio','pages.inicio.index')->name('index');