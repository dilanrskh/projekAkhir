<?php

use App\Http\Controllers\Api\CobaApiController;
use App\Http\Controllers\Api\CobaController;
use App\Http\Controllers\Api\MerkProdukController;
use App\Http\Controllers\Api\UserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::controller(CobaApiController::class)->group(function(){
    Route::get('/produk', 'produk');
});

