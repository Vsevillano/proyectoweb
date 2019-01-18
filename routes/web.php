<?php

Route::get('/', 'PagesController@home');
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/blog', 'PagesController@blog');
Route::get('/contacto', 'PagesController@contacto');
Route::get('/sistemas', 'PagesController@sistemas');
Route::get('/desarrollo', 'PagesController@desarrollo');



Route::get('/about', 'PagesController@about');
Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::get('/tickets', 'TicketsController@index');
Route::get('/ticket/{slug?}', 'TicketsController@show');
Route::get('/ticket/{slug?}/edit', 'TicketsController@edit');
Route::post('/ticket/{slug?}/delete', 'TicketsController@destroy');
Route::post('/comment', 'TicketsController@newComment');


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
