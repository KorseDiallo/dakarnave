<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemoController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\FicheTravailController;
use App\Http\Controllers\InformationBancaireController;

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

Route::get('/',[AuthController::class,'login'])->name('login');

// Route::get('/register', function () {
//     return view('users.register');
// });

Route::get('/register',[AuthController::class,'register']);

Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('users.authenticate');
Route::post('/signup', [AuthController::class, 'store'])->name('users.store');
Route::post('/logout', [AuthController::class,'logout']);

// Route::middleware(['auth', 'role:superAdmin'])->group(function(){})


// Route::get('/clients', function () {
//     return view('clients.index');
// });

// Route::get('/factures', function () {
//     return view('factures.index');
// });
// Route::get('/factures/ajout-facture', function () {
//     return view('factures.create');
// });

// Route::get('/fieldOrders', function () {
//     return view('fieldOrders.index');
// });

// Route::get('/fieldOrders/ajout-fieldOrders', function () {
//     return view('fieldOrders.create');
// });

// Route::get('/memos', function () {
//     return view('memos.index');
// });

// Route::get('/memos/ajout-memo', function () {
//     return view('memos.create');
// });

// Route::get('/clients/ajout-client', function () {
//     return view('clients.create');
// });

/*routes pour admin*/


// Route::get('/users', [AuthController::class, 'index'])->name('users.index');
// Route::get('/users/create', [AuthController::class, 'create'])->name('users.create');
// Route::post('/users', [AuthController::class, 'store'])->name('users.store');
// Route::get('/login', [AuthController::class, 'login'])->name('login');
// Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*routes pour clients*/

Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');

Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');
Route::get('/clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('/clients/{client}', [ClientController::class, 'update'])->name('clients.update');
Route::delete('/clients/{client}', [ClientController::class, 'destroy'])->name('clients.destroy');

/*routes pour factures*/

Route::get('/factures', [FactureController::class, 'index'])->name('factures.index');
Route::get('/factures/validated', [FactureController::class, 'validated_facture'])->name('factures.validated');
Route::get('/factures/invalidated', [FactureController::class, 'invalidated_facture'])->name('factures.invalidated');
Route::get('/factures/create/{client}', [FactureController::class, 'create'])->name('factures.create');
Route::post('/factures/create_facture/{client}', [FactureController::class, 'store'])->name('factures.store');
Route::post('/factures/valider_facture/{facture}', [FactureController::class, 'validerFacture'])->name('factures.valider');
Route::post('/factures/archiver/{facture}', [FactureController::class, 'archiver'])->name('factures.archiver');
Route::post('/factures/desarchiver/{facture}', [FactureController::class, 'desarchiver'])->name('factures.desarchiver');
Route::get('/factures/{facture}', [FactureController::class, 'show'])->name('factures.show');
Route::get('/factures-download/{facture}', [FactureController::class, 'downloadFacture'])->name('factures.download');

Route::get('/factures/{facture}/edit', [FactureController::class, 'edit'])->name('factures.edit');
Route::put('/factures/{facture}', [FactureController::class, 'update'])->name('factures.update');
Route::delete('/factures/{facture}', [FactureController::class, 'destroy'])->name('factures.destroy');

/*routes pour field order*/

Route::get('/fiches_travails', [FicheTravailController::class, 'index'])->name('fiches_travails.index');
Route::get('/fiches_travails/create/{facture}', [FicheTravailController::class, 'create'])->name('fiches_travails.create');
Route::post('/fiches_travails/{facture}', [FicheTravailController::class, 'store'])->name('fiches_travails.store');
Route::post('/fiches_travails/valider_facture/{fichestravails}', [FicheTravailController::class, 'validerFicheTravail'])->name('fiches_travails.valider');
Route::post('/fiches_travails/archiver/{fichestravails}', [FicheTravailController::class, 'archiver'])->name('fiches_travails.archiver');
Route::post('/fiches_travails/desarchiver/{fichestravails}', [FicheTravailController::class, 'desarchiver'])->name('fiches_travails.desarchiver');
Route::get('/fiches_travails/{ficheTravail}', [FicheTravailController::class, 'show'])->name('fiches_travails.show');
Route::get('/fiches_travails-download/{ficheTravail}', [FicheTravailController::class, 'downloadFicheTravail'])->name('fiches_travails.download');


Route::get('/fiches_travails/{ficheTravail}/edit', [FicheTravailController::class, 'edit'])->name('fiches_travails.edit');
Route::put('/fiches_travails/{ficheTravail}', [FicheTravailController::class, 'update'])->name('fiches_travails.update');
Route::delete('/fiches_travails/{ficheTravail}', [FicheTravailController::class, 'destroy'])->name('fiches_travails.destroy');


/*routes pour memos*/

Route::get('/memos', [MemoController::class, 'index'])->name('memos.index');
Route::get('/memos/create/{ficheTravail}', [MemoController::class, 'create'])->name('memos.create');
Route::post('/memos/{ficheTravail}', [MemoController::class, 'store'])->name('memos.store');
Route::post('/memos/valider_memo/{memo}', [MemoController::class, 'validerMemo'])->name('memos.valider');
Route::post('/memos/archiver/{memo}', [MemoController::class, 'archiver'])->name('memos.archiver');
Route::post('/memos/desarchiver/{memo}', [MemoController::class, 'desarchiver'])->name('memos.desarchiver');
Route::get('/memos/{memo}', [MemoController::class, 'show'])->name('memos.show');
Route::get('/memos-download/{memo}', [MemoController::class, 'downloadMemo'])->name('memos.download');

Route::get('/memos/{memo}/edit', [MemoController::class, 'edit'])->name('memos.edit');
Route::put('/memos/{memo}', [MemoController::class, 'update'])->name('memos.update');
Route::delete('/memos/{memo}', [MemoController::class, 'destroy'])->name('memos.destroy');

/*routes pour informations bancaires*/
// Route::get('/informations_bancaires', [InformationBancaireController::class, 'index'])->name('informations_bancaires.index');
// Route::get('/informations_bancaires/create', [InformationBancaireController::class, 'create'])->name('informations_bancaires.create');
// Route::post('/informations_bancaires', [InformationBancaireController::class, 'store'])->name('informations_bancaires.store');
// Route::get('/informations_bancaires/{informationBancaire}', [InformationBancaireController::class, 'show'])->name('informations_bancaires.show');
// Route::get('/informations_bancaires/{informationBancaire}/edit', [InformationBancaireController::class, 'edit'])->name('informations_bancaires.edit');
// Route::put('/informations_bancaires/{informationBancaire}', [InformationBancaireController::class, 'update'])->name('informations_bancaires.update');
// Route::delete('/informations_bancaires/{informationBancaire}', [InformationBancaireController::class, 'destroy'])->name('informations_bancaires.destroy');



