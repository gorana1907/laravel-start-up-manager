<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvestitorController;
use App\Http\Controllers\InvesticijaController;

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
Route::get('investitor', [InvestitorController::class, 'index']);

Route::get('investitor/{investitor}', [InvestitorController::class, 'show']);

Route::put('investitor/{investitor}', [InvestitorController::class, 'update']);

Route::delete('investitor/{investitor}', [InvestitorController::class, 'destroy']);

Route::get('investicija', [InvesticijaController::class, 'index']);

Route::delete('investicija/{investicija}', [InvesticijaController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
