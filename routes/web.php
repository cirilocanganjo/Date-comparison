<?php
use App\Http\Controllers\MonthsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::controller(MonthsController::class)->group(function () {
    Route::get("/show/payments/" , "showPayments");
    Route::get("/compare/dates/" , "compareDates");
});

