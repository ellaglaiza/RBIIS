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
        //household records list
        Route::get('/residentprofile/Lists/records', 'ListsController@recordslistresidentprofile')->name('records.residentprofile.list');


        //updates
        Route::get('/Lists/edit/{id}', 'ListsController@editresidentprofile')->name('list.edit');
        Route::post('/Lists/edit/save', 'ListsController@updateresidentprofile')->name('list.edit.save');

        //delete
        Route::get('/Lists/delete/{id}', 'ListsController@deleteresidentprofile')->name('list.delete');
        Route::post('/Lists/delete', 'ListsController@deleteresidentprofile')->name('list.edit.delete');
       
       //view
        Route::get('/Lists/view/{id}', 'ListsController@viewresidentprofile')->name('list.view');
        Route::post('/Lists/view', 'ListsController@viewresidentprofile')->name('list.edit.view');

        //household records
        Route::get('/Lists/view/records/{id}', 'ListsController@recordviewresidentprofile')->name('records.list');
        Route::post('/Lists/view/records', 'ListsController@recordviewresidentprofile')->name('records.list.view');

      
       
        
       //Reports

        //population
        Route::get('/reports/Population', 'ReportController@savepopulation')->name('population.save');

         Route::get('/reports/Population/list', 'ReportController@listresidentprofile')->name('list.residentprofile.list');

        //certificate fo indigency
        Route::get('/reports/Certificate-of-Indigency', 'ReportController@savecertificateofindigency')->name('certificateofindigency.save');
        Route::post('/reports/Indigency', 'ReportController@saveindigency')->name('indigency.save');
        //populatiobyage
        Route::get('/reports/PopulationByAge', 'ListPopulationController@savepopulationbyage')->name('populationbyage.save');
        //senior citizen

        Route::get('/reports/SeniorCitizen', 'ListPopulationController@savesenior')->name('senior.save');
        Route::get('/reports/SeniorCitizenlist', 'ListPopulationController@listssavesenior')->name('list.senior.save');
        //PWD
        Route::get('/reports/PWD', 'ListPopulationController@savePWD')->name('PWD.save');
        Route::get('/reports/PWD/list', 'ListPopulationController@listsavePWD')->name('list.PWD.save');

        //OFW
        Route::get('/reports/OFW', 'ListPopulationController@saveOFW')->name('OFW.save');
        Route::get('/reports/OFW/list', 'ListPopulationController@listsaveOFW')->name('list.OFW.save');

        //Solo Parent
        Route::get('/reports/SoloParent', 'ListPopulationController@saveSoloParent')->name('soloparent.save');
         Route::get('/reports/SoloParent/list', 'ListPopulationController@listsaveSoloParent')->name('list.soloparent.save');
        //Unemployed
        Route::get('/reports/Unemployed', 'ListPopulationController@saveUnemployed')->name('Unemployed.save');
        Route::get('/reports/Unemployed/list', 'ListPopulationController@listsaveUnemployed')->name('list.Unemployed.save');

        //Children's out of school
        Route::get('/reports/ChildrensOutofSchool', 'ListPopulationController@saveChildrensOutofSchool')->name('ChildrensOutofSchool.save');
        Route::get('/reports/ChildrensOutofSchool/list', 'ListPopulationController@listsaveChildrensOutofSchool')->name('list.ChildrensOutofSchool.save');
        //HOUSEHOLD SURVEY 
        Route::get('/reports/HouseholdSurvey', 'ListPopulationController@saveHouseholdSurvey')->name('HouseholdSurvey.save');
        //MonitoringReport
        Route::get('/reports/MonitoringReport', 'ListPopulationController@saveMonitoringReport')->name('MonitoringReport.save');

      
    });
});