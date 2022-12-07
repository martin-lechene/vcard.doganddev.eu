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
    Route::post('/create', [VCardController::class, 'store'])->name('vcard.create');// POST
    Route::get('/store', [VCardController::class, 'store'])->name('vcard.store');
    Route::post('/store', [VCardController::class, 'store'])->name('vcard.store');
    Route::get('/edit/{id}', [VCardController::class, 'edit'])->name('vcard.edit');
    Route::post('/update/{id}', [VCardController::class, 'update'])->name('vcard.update');
    // Delete Supported methods GET,HEAD
    // destroy Supported methods DELETE
    Route::delete('/delete/{id}', [VCardController::class, 'destroy'])->name('vcard.destroy');
    Route::get('/delete/{id}', [VCardController::class, 'delete'])->name('vcard.delete');
    Route::post('/delete/{id}', [VCardController::class, 'delete'])->name('vcard.delete');
    // downloadVcard
    Route::get('/downloadVcard/{id}', [VCardController::class, 'downloadVcard'])->name('vcard.downloadVcard');
});


Route::get('/downloadcard', 'App\Http\Controllers\VCardController@downloadVcard');
