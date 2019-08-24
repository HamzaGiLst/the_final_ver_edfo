<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::post('/uploadCV','can\UploadcvController@CvUploadPost');


################################ FORMATION #####################################
Route::get('/f',function (){
    return view('formation');
});

Route::post('/submit','FormationController@addFormation');


################################# COACHING #####################################
Route::get('/coaching',function (){
    return view('coaching');
});

Route::post('/store','CoachingController@addcoach');



############################### RECRUTEMENT ET EMPLOI ########################
#### page search offre
Route::get('/choffre',function (){
    return view('rechercheoffre');
});
#####les offres disponible
Route::get('/jobs',function (){
    return view('offres');
});



///////entreprise profile
Route::get('/entre',function (){
    return view('entrepriseprofile');
});
