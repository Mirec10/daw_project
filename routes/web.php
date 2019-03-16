<?php

foreach(config('settings.languages') as $lang => $name){
    $prefix = $lang === 'sk' ? '' : $lang;

    // Pages
    Route::get("$prefix/", ['as' => "web.home.$lang", 'uses' => 'PagesController@index']);
}


// ADMIN Routes
Route::middleware(['auth', 'admin'])->namespace('Admin')->prefix('admin')->group(function(){

    // Dashboard
    Route::get('/', ['as' => 'dashboard.index', 'uses' => 'DashboardController@index']);

});


// AUTH Routes
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');