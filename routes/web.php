<?php

foreach(config('settings.languages') as $lang => $name){
    $prefix = $lang === 'sk' ? '' : $lang;

    // Pages
    Route::get("$prefix/", ['as' => "web.home.$lang", 'uses' => 'PagesController@index']);

    if($lang == 'sk'){
        Route::get("$prefix/sluzby", ['as' => "web.services.$lang", 'uses' => 'PagesController@services']);
        Route::get("$prefix/vozovy-park", ['as' => "web.cars.$lang", 'uses' => 'PagesController@cars']);
        Route::get("$prefix/kariera", ['as' => "web.jobs.$lang", 'uses' => 'PagesController@jobs']);
        Route::get("$prefix/kontakt", ['as' => "web.contact.$lang", 'uses' => 'PagesController@contact']);
    }elseif($lang == 'de'){
        Route::get("$prefix/dienstleistungen", ['as' => "web.services.$lang", 'uses' => 'PagesController@services']);
        Route::get("$prefix/fuhrpark", ['as' => "web.cars.$lang", 'uses' => 'PagesController@cars']);
        Route::get("$prefix/karriere", ['as' => "web.jobs.$lang", 'uses' => 'PagesController@jobs']);
        Route::get("$prefix/kontakt", ['as' => "web.contact.$lang", 'uses' => 'PagesController@contact']);
    }

    Route::post("$prefix/kontakt", ['as' => "web.contact.post.$lang", 'uses' => 'PagesController@email']);
}


// ADMIN Routes
Route::middleware(['auth', 'admin'])->namespace('Admin')->prefix('admin')->group(function(){

    // Dashboard
    Route::get('/', ['as' => 'dashboard.index', 'uses' => 'DashboardController@index']);

    // Clients
    Route::get('/clients', ['as' => 'clients.index', 'uses' => 'ClientsController@index']);
    Route::get('/clients/create', ['as' => 'clients.create', 'uses' => 'ClientsController@create']);
    Route::post('/clients', ['as' => 'clients.store', 'uses' => 'ClientsController@store']);
    Route::get('/clients/edit/{id}', ['as' => 'clients.edit', 'uses' => 'ClientsController@edit']);
    Route::post('/clients/{id}', ['as' => 'clients.update', 'uses' => 'ClientsController@update']);
    Route::post('/clients/delete/{id}', ['as' => 'clients.delete', 'uses' => 'ClientsController@delete']);

    // Jobs
    Route::get('/jobs', ['as' => 'jobs.index', 'uses' => 'JobsController@index']);
    Route::get('/jobs/create', ['as' => 'jobs.create', 'uses' => 'JobsController@create']);
    Route::post('/jobs', ['as' => 'jobs.store', 'uses' => 'JobsController@store']);
    Route::get('/jobs/edit/{id}', ['as' => 'jobs.edit', 'uses' => 'JobsController@edit']);
    Route::post('/jobs/{id}', ['as' => 'jobs.update', 'uses' => 'JobsController@update']);
    Route::post('/jobs/delete/{id}', ['as' => 'jobs.delete', 'uses' => 'JobsController@delete']);

    //Images
    Route::post('/images/delete/{id}', ['as' => 'images.delete', 'uses' => "ImageController@delete"]);

});


// AUTH Routes
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');