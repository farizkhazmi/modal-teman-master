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
    return view('common.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('registerlenderindividu', function () {
    return view('common.registerlenderindividu');
});

Route::post('registerlenderindividu', 'Auth\registerlenderindividuController@create');

Route::get('list-lender-profile-individu','LenderController@listProfileIndividu')->name('listprofile');

Route::get('lender-profile-individu/{id}','LenderController@profileIndividu')->name('profileIndividu');

Route::get('lender-edit-individu/{id}', 'LenderController@editIndividu')->name('editProfileIndividu');

Route::post('lender-update-individu/{id}', 'LenderController@updateIndividu')->name('updateProfileIndividu');


Route::post('registerlendercorp', 'Auth\registerlendercorpController@create');

Route::get('list-lender-profile-corp','LenderController@listprofilecorp')->name('listprofilecorp');

Route::get('lender-profile-corp/{id}','LenderController@profilecorp')->name('profilecorp');

Route::get('lender-edit-corp/{id}', 'LenderController@editcorp')->name('editprofilecorp');

Route::post('lender-update-corp/{id}','LenderController@updatecorp')->name('updateprofilecorp');