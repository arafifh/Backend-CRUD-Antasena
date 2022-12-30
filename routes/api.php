<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;

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

// Customer
Route::post('/form', [CustomerController::class, 'store']); // create
Route::put('/form/update/{id}', [CustomerController::class, 'update']); //update

// Admin
Route::get('/list', [AdminController::class, 'show']); // read
Route::delete('/form/delete/{id}', [AdminController::class, 'destroy']); // delete