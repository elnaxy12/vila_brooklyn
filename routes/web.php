<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VilaController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/beranda', [VilaController::class, 'beranda'])->name('vila.beranda');
