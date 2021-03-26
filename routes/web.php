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
    return view('welcome');
});

Route::any('/vk/callback', 'App\Http\Controllers\VkController@callback');

/* маршруты для изменений в базе по Cat*/
Route::any('/cat/add', 'App\Http\Controllers\CatController@add');
Route::any('/cat/update', 'App\Http\Controllers\CatController@update');
Route::any('/cat/delete', 'App\Http\Controllers\CatController@delete');
Route::any('/cat/get', 'App\Http\Controllers\CatController@get');

/* маршруты для изменений в базе по CatsOwner*/
Route::any('/catsowner/add', 'App\Http\Controllers\CatsOwnerController@add');
Route::any('/catsowner/update', 'App\Http\Controllers\CatsOwnerController@update');
Route::any('/catsowner/delete', 'App\Http\Controllers\CatsOwnerController@delete');
Route::any('/catsowner/get', 'App\Http\Controllers\CatsOwnerController@get');

/* маршруты для изменений в базе по CatsVaccine*/
Route::any('/catsvaccine/add', 'App\Http\Controllers\CatsVaccineController@add');
Route::any('/catsvaccine/update', 'App\Http\Controllers\CatsVaccineController@update');
Route::any('/catsvaccine/delete', 'App\Http\Controllers\CatsVaccineController@delete');
Route::any('/catsvaccine/get', 'App\Http\Controllers\CatsVaccineController@get');

/* маршруты для изменений в базе по Curator*/
Route::any('/curator/add', 'App\Http\Controllers\CuratorController@add');
Route::any('/curator/update', 'App\Http\Controllers\CuratorController@update');
Route::any('/curator/delete', 'App\Http\Controllers\CuratorController@delete');
Route::any('/curator/get', 'App\Http\Controllers\CuratorController@get');

/* маршруты для изменений в базе по Vaccine*/
Route::any('/vaccine/add', 'App\Http\Controllers\VaccineController@add');
Route::any('/vaccine/update', 'App\Http\Controllers\VaccineController@update');
Route::any('/vaccine/delete', 'App\Http\Controllers\VaccineController@delete');
Route::any('/vaccine/get', 'App\Http\Controllers\VaccineController@get');

/* маршруты для изменений в базе по Owner*/
Route::any('/owner/add', 'App\Http\Controllers\OwnerController@add');
Route::any('/owner/update', 'App\Http\Controllers\OwnerController@update');
Route::any('/owner/delete', 'App\Http\Controllers\OwnerController@delete');
Route::any('/owner/get', 'App\Http\Controllers\OwnerController@get');
