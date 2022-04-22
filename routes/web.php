<?php

use App\Http\Controllers\IpController;
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

Route::get('/', [IpController::class,'index'])->name('ip.index');
Route::get('/create', [IpController::class,'create'])->name('ip.create');
Route::post('/store', [IpController::class,'store'])->name('ip.store');
