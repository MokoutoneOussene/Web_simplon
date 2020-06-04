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

Route::post('ajout','ActualiteController@store');
Route::post('ajouer-apprenant','ApprenantController@store');
Route::get('/','HomeController@index');
Route::get('form-actu','ActualiteController@creer');
Route::get('/','ActualiteController@list');
Route::get('Nos actualites','PageActuController@index');
Route::get('form-even','EvenController@affiche');
Route::get('form-apprenant','ApprenantController@affiche');
Route::get('Nos Apprenants','ApprenantController@list_appren');

Route::get('Nos alumnis','ApprenantController@list_alumni');
Route::post('ajouter-evenement','EvenController@store');
Route::get('Nos evenements','EvenController@listeven');