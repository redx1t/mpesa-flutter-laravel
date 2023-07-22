<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return response()->json(["info" => "this project is meant to demo api response for mpesa. I do charged consult calls if your stuck. send me an email at muthomi[at]muthomikathurima.com"], 200);
});
