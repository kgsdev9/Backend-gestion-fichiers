<?php

use App\Http\Controllers\Api\ControllerLaravelEpi;
use App\Http\Controllers\Api\Departement\DepartementController;
use App\Http\Controllers\Api\ExportController;
use App\Http\Controllers\UserController;
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

Route::resource('departements', DepartementController::class);

Route::get('/export', [ExportController::class, 'export']);
