<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CreditCardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::prefix('/accounts')->group(function () {
    Route::get('/', [AccountController::class, 'index']);
    Route::post('/create', [AccountController::class, 'store']);
    Route::get('/{id}/edit', [AccountController::class, 'edit']);
    Route::put('/{id}/edit/', [AccountController::class, 'update']);
    Route::delete('/{id}', [AccountController::class, 'destroy']);
    Route::get('/get-currencies', [AccountController::class, 'getCurrency']);
});

Route::prefix('/credits')->group(function() {
    Route::get('/', [CreditCardController::class, 'index']);
    Route::post('/create', [CreditCardController::class, 'store']);
    Route::get('/{id}/edit', [CreditCardController::class, 'edit']);
    Route::put('/{id}/edit', [CreditCardController::class, 'update']);
    Route::delete('/{id}', [CreditCardController::class, 'destroy']);
});
