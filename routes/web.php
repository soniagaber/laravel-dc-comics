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
    $comics = config('comics');
    $headerlinks = config('headerlinks');
    $footerLinksSx = config('footerLinksSx');
    $footerLinksCentro = config('footerLinksCentro');
    $footerLinksDx = config('footerLinksDx');
    return view('home', compact('comics', 'headerlinks', 'footerLinksSx', 'footerLinksCentro', 'footerLinksDx'));
});
