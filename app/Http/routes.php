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