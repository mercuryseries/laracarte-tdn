<?php

use App\Mail\ContactMessageCreated;

Route::get('/', [
    'as' => 'root_path',
    'uses' => 'PagesController@home'
]);

Route::get('/test-email', function() {
    return new ContactMessageCreated('Honoré Hounwanou', 'mercuryseries@gmail.com', 'Merci pour laracarte.');
});

Route::get('/about', [
    'as' => 'about_path',
    'uses' => 'PagesController@about'
]);

Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactsController@create'
]);

Route::post('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactsController@store'
]);
