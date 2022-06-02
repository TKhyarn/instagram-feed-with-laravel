<?php

use \Dymantic\InstagramFeed\InstagramFeed;
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
Route::get('/caddy-check', 'App\Http\Controllers\CaddyController@check');
Route::get('/', function () {
    $feed = InstagramFeed::for('testapi278');
    ddd($feed);
    return view('welcome');
});
