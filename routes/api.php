<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DistributorController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('distributor', [DistributorController::class, 'index']);
Route::post('distributor', [DistributorController::class, 'create']);
Route::put('/distributor/{id_distri}', [DistributorController::class, 'update']);
Route::delete('distributor/{id_distri}', [DistributorController::class, 'destroy']);
