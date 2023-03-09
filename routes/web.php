<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BankController;

use App\Http\Controllers\TraitementController;

use App\Http\Controllers\AdminsController;

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
//Route class bankController

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('', [BankController::class, 'login'])->name('logins');

Route::group(['middleware'=>['auth',]], function(){

    Route::get('account', [BankController::class, 'account'])->name('account')->middleware('verifierEtape');

Route::get('profil', [BankController::class, 'profil'])->name('profil')->middleware('verifierEtape');

Route::get('editprofil', [BankController::class, 'editprofil'])->name('editprofil')->middleware('verifierEtape');

Route::get('security', [BankController::class, 'security'])->name('security')->middleware('verifierEtape');

Route::get('carte', [BankController::class, 'carte'])->name('carte')->middleware('verifierEtape');

Route::get('approvisionnement', [BankController::class, 'approvisionnement'])->name('approvisionnement')->middleware('verifierEtape');

Route::get('transfert', [BankController::class, 'transfert'])->name('transfert')->middleware('verifierEtape');

Route::get('etape1', [BankController::class, 'etape1'])->name('etape1');

Route::get('/etape', [BankController::class, 'etape'])->name('etape');

Route::get('etape2', [BankController::class, 'etape2'])->name('etape2');

Route::get('etape3', [BankController::class, 'etape3'])->name('etape3');

Route::get('etape4', [BankController::class, 'etape4'])->name('etape4');

Route::get('etape5', [BankController::class, 'etape5'])->name('etape5');

Route::get('comptebloque', [BankController::class, 'comptebloque'])->name('comptebloque');
});




Route::get('deconnexion', [BankController::class, 'deconnexion'])->name('deconnexion');

//Route::post('register', [TraitementController::class, 'register'])->name('register');

//end class BankController

//Route class traitementController

//Route::post('login', [TraitementController::class, 'login'])->name('loginpost');

Route::post('profil/{id}',[TraitementController::class, 'profil'])->whereNumber('id')->name('Eprofil');

Route::post('password/{id}', [TraitementController::class, 'password'])->whereNumber('id')->name('password');

Route::post('read', [TraitementController::class, 'read'])->name('read');

Route::get('compter', [TraitementController::class, 'compter'])->name('compter');

Route::post('/etape', [TraitementController::class, 'etape'])->name('etape');



//Route::group(['middleware'=>['auth', 'Code:admin', 'admin']], function(){

    Route::get('liste', [AdminsController::class, 'index'])->name('listes');

    Route::get('crediter', [AdminsController::class, 'crediter'])->name('crediter');
    
    Route::get('select/{id}', [AdminsController::class,'select'])->whereNumber('id')->name('select');
    
    Route::post('update/{id}', [AdminsController::class, 'update'])->whereNumber('id')->name('update');
    
    Route::get('tencour', [AdminsController::class, 'tencour'])->name('tencour');
    
    Route::get('message', [AdminsController::class, 'message'])->name('message');
    
    Route::get('tmessage/{id}', [AdminsController::class, 'tmessage'])->whereNumber('id')->name('tmessage');
    
    Route::post('Emessage/{id}', [AdminsController::class, 'Emessage'])->whereNumber('id')->name('Emessage');
    
    Route::get('modify', [AdminsController::class, 'modify'])->name('modify');
    
    Route::get('smodify/{id}', [AdminsController::class,'smodify'])->whereNumber('id')->name('smodify');
    
    
    Route::get('downloadPDF', [AdminsController::class, 'downloadPDF'])->name('downloadPDF');
    
    Route::post('tmodify/{id}', [AdminsController::class, 'tmodify'])->whereNumber('id')->name('tmodify');
    
    Route::get('delete/{id}', [AdminsController::class, 'delete'])->whereNumber('id')->name('delete');