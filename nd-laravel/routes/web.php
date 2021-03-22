<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;
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
    return view('welcome');
});

// Route::get('calc/mult/{num1}/{num2}', [CalcController::class, 'mult']);

// Route::get('calc/add/{num1}/{num2}', [CalcController::class, 'add']);

// Route::get('calc/sub/{num1}/{num2}', [CalcController::class, 'sub']);

// Route::get('calc/div/{num1}/{num2}', [CalcController::class, 'div']);

// Route::get('calc/mod/{num1}/{num2}', [CalcController::class, 'mod']);

// version 3
Route::get('calc', [CalcController::class, 'show'])->name('show-calc');
Route::post('calc', [CalcController::class, 'calc'])->name('do-math');