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
    $data = [
        'page_title'=> 'Primi passi con Laravel',
        'passaggi'=>[
            'installare Laravel',
            'creare repo',
            'seguire la traccia'
        ],
    ];
    return view('home', $data);
})->name('home');

Route::get('/about us', function () {
    $page_title = "Primi passi con Laravel";
    $intro = "This is us";
    $description = "Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet";

    return view('about', compact('intro', 'description', 'page_title'));
})->name('about');

Route::get('/contacts', function () {
    $page_title = "Primi passi con Laravel";


    return view('contacts', compact('page_title'));
})->name('contacts');