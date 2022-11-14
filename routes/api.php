<?php

use App\Http\Controllers\PhoneController;
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

// Route::resource('blog', BlogController::class);
// Route::resource('phone', PhoneController::class);

Route::controller(PhoneController::class)->group(function () {
    Route::get('/phone', 'index');
    Route::get('/phone/{id}', 'show');
    Route::post('/phone', 'store');
    Route::put('/phone/{id}', 'update');
    Route::delete('/phone/{id}', 'update');
});