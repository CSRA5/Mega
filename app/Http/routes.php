<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});


/*
Company
*/

Route::get('empresa', function () {
    return view('company');
});

/*
End Company
*/


/*
Insurances for persons
*/

Route::get('seguro-para-personas', function () {
    return view('insurances-for-persons/list-insurances-for-persons');
});

Route::get('seguro-para-empresas', function () {
    return view('insurances-for-companies/list-insurances-for-companies');
});

Route::get('seguro-de-salud', function () {
    return view('insurances-for-persons/health-insurance');
});

Route::get('soat', function () {
    return view('insurances-for-persons/soat');
});

Route::get('seguro-vehicular', function () {
    return view('insurances-for-persons/vehicle-insurance');
});

Route::get('seguro-domiciliario', function () {
    return view('insurances-for-persons/safe-house');
});

Route::get('seguro-oncologico', function () {
    return view('insurances-for-persons/cancer-insurance');
});

Route::get('seguro-de-vida', function () {
    return view('insurances-for-persons/life-insurance');
});

Route::get('accidentes-personales', function () {
    return view('insurances-for-persons/personal-accident');
});

/*
End insurances for persons
*/

/*
Insurances for companies
*/

Route::get('seguro-de-vida-ley', function () {
    return view('insurances-for-companies/life-insurance-law');
});


Route::get('seguro-flota-vehicular', function () {
    return view('insurances-for-companies/vehicle-fleet-insurance');
});

Route::get('seguro-de-transporte', function () {
    return view('insurances-for-companies/transportation-insurance');
});



/*

*/