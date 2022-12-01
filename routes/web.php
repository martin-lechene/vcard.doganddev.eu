<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VCardController;

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

// Route group vcard CRUD
Route::group(['prefix' => 'vcard'], function () {
    Route::get('/', [VCardController::class, 'index'])->name('vcard.index');
    Route::get('/create', [VCardController::class, 'create'])->name('vcard.create');// GET
    Route::post('/create', [VCardController::class, 'store'])->name('vcard.create.store');// POST
//    Route::post('/store', [VCardController::class, 'store'])->name('vcard.store');
    Route::get('/edit/{id}', [VCardController::class, 'edit'])->name('vcard.edit');
    Route::post('/update/{id}', [VCardController::class, 'update'])->name('vcard.update');
    Route::get('/delete/{id}', [VCardController::class, 'destroy'])->name('vcard.delete');
    // downloadVcard
    Route::get('/downloadVcard/{id}', [VCardController::class, 'downloadVcard'])->name('vcard.downloadVcard');
});


Route::get('/downloadcard', 'App\Http\Controllers\VCardController@downloadVcard');
