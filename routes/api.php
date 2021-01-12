<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('paises', \App\Http\Controllers\API\PaisController::class)->except(['store', 'destroy']);

Route::resource('municipios.localidades', \App\Http\Controllers\API\LocalidadController::class)->shallow();

Route::get('municipios', [\App\Http\Controllers\API\MunicipioController::class, 'index']);

Route::get('municipios/{id}', [\App\Http\Controllers\API\MunicipioController::class, 'show']);
