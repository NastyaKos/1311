<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserOfficeAddressController;

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
    return view('welcome');
});

Route::get('/address', [UserOfficeAddressController::class, 'show'])->name('show');
Route::post('/address', [UserOfficeAddressController::class, 'store'])->name('store');
