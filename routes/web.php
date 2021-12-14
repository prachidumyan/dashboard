<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', [Dashboard::class, 'dashboard'])->name('dashboard');

Route::get('/dashboard/vehicale-Details', [Dashboard::class, 'vehicle_details'])->name('vehicle_details');

Route::get('/dashboard/vehicale-list', [Dashboard::class, 'vehicle_list'])->name('vehicle_list');
