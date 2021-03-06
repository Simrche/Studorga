<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Auth/Login', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\StageController::class, 'index'])->name('dashboard');

    Route::get('/createStage', [App\Http\Controllers\StageController::class, 'create'])->name('createStage');

    Route::post('/createStage', [App\Http\Controllers\StageController::class, 'store'])->name('createStagePost');

    Route::delete('/deleteStage/{id}', [App\Http\Controllers\StageController::class, 'destroy'])->name('deleteStage');

    Route::get('/editStage/{id}', [App\Http\Controllers\StageController::class, 'edit'])->name('editStage');

    Route::put('/editStage/{id}', [App\Http\Controllers\StageController::class, 'update'])->name('editStagePut');

    Route::get('/stage/{id}', [App\Http\Controllers\StageController::class, 'show'])->name('showStage');
});

