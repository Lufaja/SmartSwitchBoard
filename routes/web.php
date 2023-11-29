<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
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

Route::post('/device/store',[DeviceController::class, 'store'])->name('device.store');
Route::get('/device/create', [DeviceController::class, 'create'])->name('device.create');
Route::get('/device/index', [DeviceController::class, 'index'])->name('device.index');
Route::get('/device/destroy/{device}', [DeviceController::class, 'destroy'])->name('device.destroy');
