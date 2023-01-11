<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $frase = 'Ciao Mondo';

    return view('home',['frase' => $frase]);
});

Route::get('/faq', function () {

    

    return view('faq');
});

Route::get('/about', function () {

    

    return view('about');
});

