<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GiftcardController;
use App\Http\Controllers\OutletController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth'])->name('welcome');

require __DIR__.'/auth.php';


//__Gift card Route__//
Route::get('create', [GiftcardController::class, 'create'])->name('giftcard.create');


//__Outlet Route__//
Route::get('outlet/create', [OutletController::class, 'create'])->name('outlet.create');
Route::get('outlet/store', [OutletController::class, 'store'])->name('outlet.store');
