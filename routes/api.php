<?php

use App\Http\Controllers\AccountController;
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
    Route::get('/update/{account}', [AccountController::class, 'edit']);
    Route::put('/update/{account}', [AccountController::class, 'update']);
    Route::delete('/delete/{account', [AccountController::class], 'destroy');
});
