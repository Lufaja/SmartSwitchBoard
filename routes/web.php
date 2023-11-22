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


Route::view("welcome", 'welcome')->name('welcome');
Route::view("", 'home')->name('home');
Route::view("settings", 'settings')->name('settings');
Route::view("ship", 'ship')->name('ship');
Route::view("login", 'login')->name('login');
