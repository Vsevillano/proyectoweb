<?php

/** Menu nav */
Route::get('/', 'PagesController@home');
Route::get('/portfolio', 'PagesController@portfolio');
//Route::get('/blog', 'PagesController@blog');
Route::get('/contacto', 'PagesController@contacto');
Route::get('/sistemas', 'PagesController@sistemas');
Route::get('/desarrollo', 'PagesController@desarrollo');

/** Enviar email desde pagina contacto */
Route::post('/contacto', 'PagesController@postContacto');

/** Login */
Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

/** Registro */
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

/** Recuperar password */
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset/{token}', 'Auth\ForgotPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'Auth\ForgotPasswordController@reset');

/** Blog */
Route::get('/blog', 'PostController@listPosts');
Route::get('/blog/post/editpost/{id}', 'PostController@getEditpost');
Route::get('/blog/post/{id}', 'PostController@getPost');

//Route::resource('/blog/post', 'PostController');
//Route::resource('/blog/comments', 'CommentController');