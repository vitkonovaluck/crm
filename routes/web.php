<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\RolesController;
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

Route::get('/', [MainController::class,'index']);


Route::get('roles', [RolesController::class,'index']);
Route::post('roles', [RolesController::class, 'create']);
Route::put('roles/{role}', [RolesController::class, 'update']);
Route::get('roles/{roleId}', [RolesController::class,'show']);

