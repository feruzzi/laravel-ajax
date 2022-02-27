<?php

use App\Http\Controllers\InstansiController;
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

Route::get('/', [InstansiController::class, 'index']);
Route::get('create', [InstansiController::class, 'create']);
Route::post('store', [InstansiController::class, 'store']);
Route::get('destroy/{id}', [InstansiController::class, 'destroy']);
Route::get('show/{id}', [InstansiController::class, 'show']);
Route::get('update/{id}', [InstansiController::class, 'update']);
Route::get('read', [InstansiController::class, 'read']);
