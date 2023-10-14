<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{  
    Route::get('/', function(){
        return redirect('/login');
    });
    /**
     * Home Routes
     */
    // Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard');

        //Addresident
        Route::get('/residentprofile/add', 'ResidentProfileController@addresidentprofile')->name('residentprofile.add');
        Route::post('/residentprofile/add/save', 'ResidentProfileController@saveresidentprofile')->name('residentprofile.save');

        //List
        Route::get('/residentprofile/Lists', 'ListsController@listresidentprofile')->name('residentprofile.list');

        //updates
        Route::get('/Lists/edit/{id}', 'ListsController@editresidentprofile')->name('list.edit');
        Route::post('/Lists/edit/save', 'ListsController@updateresidentprofile')->name('list.edit.save');

        //delete
        Route::get('/Lists/delete/{id}', 'ListsController@deleteresidentprofile')->name('list.delete');
        Route::post('/Lists/delete', 'ListsController@deleteresidentprofile')->name('list.edit.delete');
       
       //view
        Route::get('/Lists/view/{id}', 'ListsController@viewresidentprofile')->name('list.view');
        Route::post('/Lists/view', 'ListsController@viewresidentprofile')->name('list.edit.view');
       
        
       //Reports

        //population
        Route::get('/reports/Population', 'ReportController@savepopulation')->name('population.save');
        //populatiobyage
        Route::get('/reports/PopulationByAge', 'ListPopulationController@savepopulationbyage')->name('populationbyage.save');
        //senior citizen
        Route::get('/reports/SeniorCitizen', 'ListPopulationController@savesenior')->name('senior.save');
        //PWD
        Route::get('/reports/PWD', 'ListPopulationController@savePWD')->name('PWD.save');
        //OFW
        Route::get('/reports/OFW', 'ListPopulationController@saveOFW')->name('OFW.save');
        //Solo Parent
        Route::get('/reports/SoloParent', 'ListPopulationController@saveSoloParent')->name('soloparent.save');
        //Unemployed
        Route::get('/reports/Unemployed', 'ListPopulationController@saveUnemployed')->name('Unemployed.save');



       
      
    });
});