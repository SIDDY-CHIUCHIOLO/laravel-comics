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
    return view('guest.comics', ['comics' => $comics]);
}) ->name('comics-page');

Route::get('/characters', function () {
    return view('guest.characters');
}) ->name('guest-characters');

Route::get('/movies', function () {
    return view('guest.movies');
}) ->name('guest-movies');

Route::get('/tv', function () {
    return view('guest.tv');
}) ->name('guest-tv');

Route::get('/games', function () {
    return view('guest.games');
}) ->name('guest-games');

Route::get('/collectibles', function () {
    return view('guest.collectibles');
}) ->name('guest-collectibles');

Route::get('/videos', function () {
    return view('guest.videos');
}) ->name('guest-videos');

Route::get('/fans', function () {
    return view('guest.fans');
}) ->name('guest-fans');

Route::get('/news', function () {
    return view('guest.news');
}) ->name('guest-news');

Route::get('/shop', function () {
    return view('guest.shop');
}) ->name('guest-shop');


