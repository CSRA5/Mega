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


Route::get('seguro-para-personas/seguro-de-salud', function () {
    return view('insurances-for-persons/health-insurance');
});

Route::get('seguro-para-personas/soat', function () {
    return view('insurances-for-persons/soat');
});

Route::get('seguro-para-personas/seguro-vehicular', function () {
    return view('insurances-for-persons/vehicle-insurance');
});

Route::get('seguro-para-personas/seguro-domiciliario', function () {
    return view('insurances-for-persons/safe-house');
});

Route::get('seguro-para-personas/seguro-oncologico', function () {
    return view('insurances-for-persons/cancer-insurance');
});

Route::get('seguro-para-personas/seguro-de-vida', function () {
    return view('insurances-for-persons/life-insurance');
});

Route::get('seguro-para-personas/accidentes-personales', function () {
    return view('insurances-for-persons/personal-accident');
});

Route::get('seguro-para-personas/rapiseguros', function () {
    return view('insurances-for-persons/rapiseguros');
});

/*
End insurances for persons
*/

/*
Insurances for companies
*/

Route::get('seguro-para-empresas', function () {
    return view('insurances-for-companies/list-insurances-for-companies');
});

Route::get('seguro-para-empresas/seguro-de-vida-ley', function () {
    return view('insurances-for-companies/life-insurance-law');
});

Route::get('seguro-para-empresas/seguro-de-flota-vehicular', function () {
    return view('insurances-for-companies/vehicle-fleet-insurance');
});

Route::get('seguro-para-empresas/seguro-de-transporte', function () {
    return view('insurances-for-companies/transportation-insurance');
});


Route::get('seguro-para-empresas/responsabilidad-civil-para-hidrocarburos', function () {
    return view('insurances-for-companies/hydrocarbons');
});

Route::get('seguro-para-empresas/responsabilidad-civil-general', function () {
    return view('insurances-for-companies/general');
});

Route::get('seguro-para-empresas/seguros-de-ingieneria', function () {
    return view('insurances-for-companies/engineering-insurance');
});

Route::get('seguro-para-empresas/multiriesgo-pyme', function () {
    return view('insurances-for-companies/pyme');
});

Route::get('seguro-para-empresas/eps', function () {
    return view('insurances-for-companies/eps');
});

Route::get('seguro-para-empresas/sctr', function () {
    return view('insurances-for-companies/sctr');
});



/*
End Insurances for companies
*/


/*
Team
*/
Route::get('nuestro-equipo', function () {
    return view('team');
});

/*
End team
*/


/*Contacto*/ 
Route::get('contacto', function () {
    return view('contact');
});

/*
End contact
*/


/* Posts*/ 

Route::get('10-consejos-para-conducir-bien', function () {
    return view('blog/post-1');
});

Route::get('soat-y-seguro-vehicular-cual-debo-comprar', function () {
    return view('blog/post-2');
});

Route::get('como-reaccionar-ante-una-emergencia-mientras-manejas', function () {
    return view('blog/post-3');
});

Route::get('que-hacer-frente-a-un-siniestro', function () {
    return view('blog/post-4');
});



/* En posts*/


/*Lists*/ 

Route::get('listado-leads', ['as' => 'list-leads', 'uses' => 'Lead@index']);


/*End Lists/*