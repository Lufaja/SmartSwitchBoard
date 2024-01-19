<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\StartersController;
use App\Http\Controllers\EnginesController;

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
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
  
Route::get('2fa', [App\Http\Controllers\TwoFAController::class, 'index'])->name('2fa.index');
Route::post('2fa', [App\Http\Controllers\TwoFAController::class, 'store'])->name('2fa.post');
Route::get('2fa/reset', [App\Http\Controllers\TwoFAController::class, 'resend'])->name('2fa.resend');


Route::post('/device/store',[DeviceController::class, 'store'])->name('device.store');
Route::get('/device/create', [DeviceController::class, 'create'])->name('device.create');
Route::get('/device', [DeviceController::class, 'index'])->name('device.index');
Route::get('/device/destroy/{device}', [DeviceController::class, 'destroy'])->name('device.destroy');

// Dashboard route
Route::get('/starters', [StartersController::class, 'index'])->name('starters');

// Engine route 
Route::get('/engines', [EnginesController::class, 'index'])->name('engines');

Route::get('/lube-oil', [EnginesController::class, 'lubeOil'])->name('lube-oil');
Route::get('/workshop', [EnginesController::class, 'workshop'])->name('workshop');
Route::get('/cw', [EnginesController::class, 'cw'])->name('cw');
Route::get('/hydrolicOil', [EnginesController::class, 'hydrolicOil'])->name('hydrolicOil');
Route::get('/fuelOil', [EnginesController::class, 'fuelOil'])->name('fuelOil');
Route::get('/accelerieSystems', [EnginesController::class, 'accelerieSystems'])->name('accelerieSystems');
Route::get('/fans', [EnginesController::class, 'fans'])->name('fans');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
