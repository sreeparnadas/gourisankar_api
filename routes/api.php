<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\StateController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);


Route::get('/test/districts', [DistrictController::class, 'all_districts']);
Route::get('/test/district/{district_id}', [DistrictController::class, 'get_district_by_id']);
Route::get('/test/districts/{state_id}', [DistrictController::class, 'get_district_by_state']);

Route::get('/test/states',[StateController::class, 'all_states']);
Route::get('/test/state/{state_id}', [StateController::class, 'get_state_by_id']);

