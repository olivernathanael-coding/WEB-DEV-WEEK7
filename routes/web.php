<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [LaptopController::class, 'index']);

Route::get('/create-laptop', [LaptopController::class, 'create']);

Route::post('/save-laptop', [LaptopController::class, 'store'])->name('save-laptop');

Route::delete('/laptops/{laptop}',[LaptopController::class, 'destroy'])->name('delete-laptop');

Route::get('/laptops/{laptop}/edit', [LaptopController::class, 'edit']);

Route::post('/laptops/{laptop}', [LaptopController::class, 'update']);