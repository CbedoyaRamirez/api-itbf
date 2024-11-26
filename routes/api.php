<?php

use App\Http\Controllers\HotelesController;
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
Route::get("/hoteles", function () {
    return "get hoteles";
});

Route::post("/hoteles", [HotelesController::class, "store"]);

Route::put("/hoteles", function () {
    return "put hoteles";
});

Route::delete("/hoteles", function () {
    return "put hoteles";
});