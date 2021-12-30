<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\ShiftController::class, 'index'])->name('shift.index');
Route::get('shift/{shift}', [App\Http\Controllers\ShiftController::class, 'show'])->name('shift.show');
