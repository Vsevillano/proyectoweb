<?php

Route::get('/', 'PagesController@home');
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/blog', 'PagesController@blog');
Route::get('/contacto', 'PagesController@contacto');
Route::get('/sistemas', 'PagesController@sistemas');
Route::get('/desarrollo', 'PagesController@desarrollo');

Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');



Route::get('sendemail', function() {
    
    $data = array(
        'name' => 'Curso Laravel',
    );

    Mail::send('emails.welcome', $data, function ($message) {
        
        $message->from('pruebasvsevillano@mail.com', 'Curso Laravel');
        
        $message->to('pruebasvsevillano@mail.com', 'test email Curso Laravel');
        
    });

    return "Tu email hasido enviado correctamente";
});
