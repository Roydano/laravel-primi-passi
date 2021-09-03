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
        'title' => 'Hello World',
    ];
    return view('home', $data);
})->name('homepage');

Route::get('/about-me', function () {
    $data = [
        'nome' => 'Danilo',
        'cognome' => 'D\'Alessandro',
        'eta' => 30,
    ];
    return view('about', $data);
})->name('about-me');

Route::get('/contact', function () {
    $data = [
        'descr' => 'Se avete bisogno consultate i dati di seguito:',
        'dati' => ['Cell: 1661212123', 'Mail: danilo@danilo.danit', 'Indirizzo: Via dei Danili Ignoti']
    ];
    return view('contact', $data);
})->name('contact');
