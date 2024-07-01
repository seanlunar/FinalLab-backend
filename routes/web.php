<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ResourcesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});


Route::resource('programs', ProgramController::class);
Route::resource('assignment', AssignmentController::class);
Route::resource('sharedcontent', ResourcesController::class);

