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
    return view('welcome');
});

use App\Http\Controllers\ReportController;

Route::get('/report/today', [ReportController::class, 'generateTodayReport'])->name('report.today');
Route::get('/report/today/download', [ReportController::class, 'downloadTodayReport'])->name('report.today.download');