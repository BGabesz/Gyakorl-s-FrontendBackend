<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\bejegyzesekController;
use App\Http\Controllers\api\tevekenysegekController;
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
Route::get('/bejegyzesek', [bejegyzesekController::class, 'index']);
Route::post('/bejegyzes', [bejegyzesekController::class, 'store']);
Route::get('/bejegyzesek2', [bejegyzesekController::class, 'osztaly_id']);
Route::get('/chartshoz', [bejegyzesekController::class, 'charts']);
Route::get('/tevekenysegek', [tevekenysegekController::class, 'index']);