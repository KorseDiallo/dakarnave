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

Route::get('/', function () {
    return view('layout.index');
});
Route::get('/clients', function () {
    return view('clients.index');
});

Route::get('/factures', function () {
    return view('factures.index');
});
Route::get('/factures/ajout-facture', function () {
    return view('factures.create');
});

Route::get('/fieldOrders', function () {
    return view('fieldOrders.index');
});

Route::get('/fieldOrders/ajout-fieldOrders', function () {
    return view('fieldOrders.create');
});

Route::get('/memos', function () {
    return view('memos.index');
});

Route::get('/memos/ajout-memo', function () {
    return view('memos.create');
});



