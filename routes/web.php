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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::prefix('stocks')->group(function(){
    Route::get('/', 'StockController@index')->name('stocks');
    Route::get('/create', 'StockController@create')->name('stocks.create');
    Route::post('/create', 'StockController@create')->name('stocks.create');

    Route::get('/update/{id}', 'StockController@update')->name('stocks.update');
    Route::post('/update/{id}', 'StockController@update')->name('stocks.update');
    Route::post('/delete', 'StockController@delete')->name('stocks.delete');
});

Route::get('/requests', 'RequisitionController@index')->name('requests');
Route::get('/reports', 'ReportsController@index')->name('reports');

Route::prefix('profile')->group(function(){
    Route::get('/', 'UserController@index')->name('profile');
    Route::post('/update', 'UserController@update')->name('profile.update');
});

Route::prefix('account')->group(function(){
    Route::get('/', 'UserController@account')->name('profile');
    Route::post('/create', 'UserController@register')->name('profile.update');
});

Route::prefix('login')->group(function(){
    Route::get('/', 'LoginController@showLogin')->name('login.show');
    Route::post('/', 'LoginController@postLogin')->name('login.post');
});
Route::get('/logout', 'LoginController@logout')->name('logout');

////////////////////////////////////////////////////////////////////////////////



// Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('privilege')->name('privilege.')->middleware(['auth', 'auth.admin'])->group(function(){
    Route::get('index', 'PrivilegeController@index')->name('index');
    Route::get('create', 'PrivilegeController@create')->name('create');
    Route::post('store', 'PrivilegeController@store')->name('store');
    Route::get('{id}', 'PrivilegeController@show')->name('show');
    Route::get('{id}/edit', 'PrivilegeController@edit')->name('edit');
    Route::put('{privilege}', 'PrivilegeController@update')->name('update');
    Route::delete('{id}', 'PrivilegeController@destroy')->name('destroy');
});