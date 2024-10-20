<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AirdataAPIController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/drones', [AirdataAPIController::class, 'getDrones'])->name('drones.index');
