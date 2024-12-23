<?php

use Illuminate\Support\Facades\Route;

Route::get('{any}', function () {
    return file_get_contents(public_path('index.html'));
})->where('any', '.*');

Route::get('/catalogo', function () {
    return view('catalogo', ['tipo' => 'tecnologia']);
});
