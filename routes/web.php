<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GridController;
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

Route::get('/', [GridController::class, 'index']);
Route::resource('grids', GridController::class);
Route::get('data/retrieve-display', [GridController::class, 'getDisplay']);
Route::get('data/retrieve-form', [GridController::class, 'getForm']);
