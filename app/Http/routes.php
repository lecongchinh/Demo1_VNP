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


Route::get('user/create', 'UserController@getCreate');
Route::post('user/create', 'UserController@postCreate');

Route::get('user/login', 'LoginController@getLogin');
Route::post('user/login', 'LoginController@postLogin');

// Route::group(['middleware' => ['checklogin']], function() {
    
    Route::get('/', function () {
        return view('index-content');
    });
    Route::get('user/logout', 'LoginController@getLogout');
    Route::get('index', 'ReadDataController@readIndex');
    
    Route::get('/icon-material', 'ReadDataController@readIcon_material');
    
    Route::get('/map-google', 'ReadDataController@readMap_google');
    
    Route::get('/pages-blank', 'ReadDataController@readPages_blank');
    
    Route::get('/pages-error-404', 'ReadDataController@readPages_error_404');
    
    Route::get('/pages-profile', 'ReadDataController@readPages_profile');
    
    Route::get('/table-basic', 'ReadDataController@readTable_basic');

    //reviewer
    Route::get('/com-reviewers', 'CrudComReviewersController@reada');
    Route::get('/com-reviewers/delete/{id}', 'CrudComReviewersController@deleteData');
    Route::get('/com-reviewers/edit/{id}', 'CrudComReviewersController@getEdit');
    Route::post('/com-reviewers/edit/{id}', 'CrudComReviewersController@postEdit');


// });