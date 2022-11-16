<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
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

Route::get('/cars', [CarController::class, 'index'])->Name('cars.index');

Route::get('cars/create', [CarController::class, 'create']);

Route::get('/cars/{id}', [CarController::class, 'show'])->Name('cars.show');

Route::get('cars/{id}/edit', [CarController::class, 'edit']);

Route::post('/cars', [CarController::class, 'store']);

Route::delete('/cars/{id}', [CarController::class, 'destroy']);

Route::put('/cars/{id}', [CarController::class, 'update']);
