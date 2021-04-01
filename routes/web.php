<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//contract
Route::get('/contracts/create', 'ContractController@create');
Route::post('/contracts/pendings', 'ContractController@store');

//contract.pending
Route::get('/contracts/pendings', 'ContractController@indexP');
    //Show Pending Contract
    Route::get('/contracts/pendings/{pendingContract}', 'ContractController@showP');
    
    //Approve Pending Contract
    Route::get('/contracts/pendings/approve/{pendingContract}', 'ContractController@ApproveP')->middleware('auth');
    Route::patch('/contracts/pendings', 'ContractController@ApproveP')->middleware('auth');

    //Edit Pending Contract
    Route::get('/contracts/pendings/{pendingContract}/edit', 'ContractController@edit')->middleware('auth');
    Route::patch('/contracts/pendings/{pendingContract}', 'ContractController@update')->middleware('auth');

//contract.ongoing
Route::get('/contracts/ongoings', 'ContractController@indexOG');
    //Show Ongong Contract
    Route::get('/contracts/ongoings/{onGoingContracts}', 'ContractController@showOG');

    //Marked "Finish" Ongoing Contract
    Route::get('/contracts/ongoings/finished/{onGoingContracts}', 'ContractController@FinishedOG')->middleware('auth');
    Route::patch('/contracts/ongoings', 'ContractController@FinishedOG')->middleware('auth');

    Route::get('/contracts/finished', 'ContractController@indexF');

//invoice
Route::get('/contracts/generate', 'ContractController@generate');

//sales
Route::get('/sales', 'LaravelGoogleGraph@index');

//pdf
Route::get('/dynamic_pdf', 'DynamicPDFController@index');

Route::get('/dynamic_pdf/pdf', 'DynamicPDFController@pdf'); 

