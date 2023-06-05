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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/pay",[\App\Http\Controllers\PaymentController::class, 'pay'])->name(("pay"));
Route::post("dopay.online",[\App\Http\Controllers\PaymentController::class, 'handleonlinepay'])->name(("dopay.online'"));
// Route::get('/pay','PaymentController@pay')->name('pay');
// Route::post('/dopay/online', 'PaymentController@handleonlinepay')->name('dopay.online');
