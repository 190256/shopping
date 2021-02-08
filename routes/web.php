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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'prefix' => 'admin/item',
    'namespace' => 'Admin',
    'as' => 'admin.item.',
    'middleware' => 'auth',
], function () {
    Route::get('/', 'CartController@index')->name('index');
    Route::get('add/{id}', 'CartController@add')->name('add');
    Route::get('remove/{id}', 'CartController@remove')->name('remove');
    Route::get('clear', 'CartController@clear')->name('clear');
});
