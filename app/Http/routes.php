<?php

Route::get('/', function () {
    return view('website.index');
});

Route::get('/acerca', function () {
    return view('website.acerca');
});

Route::get('/contacto', function () {
    return view('website.contacto');
});

Route::get('/productos', function () {
    return view('website.productos');
});

Route::get('/login', function () {
    return view('website.login');
});

Route::get('/registro', function () {
    return view('website.registro');
});