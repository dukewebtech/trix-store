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
    return view('index');
});
Route::get('/stocks', function () {
    return view('requests');
});
Route::get('/requests', function () {
    return view('requests');
});
Route::get('/reports', function () {
    return view('requests');
});
Route::get('/login', function () {
    return view('requests');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('privilege')->name('privilege.')->middleware(['auth', 'auth.admin'])->namespace('/Privilege')->group(function(){
    Route::get('index', 'PrivilegeController@index')->name('index');
    Route::get('create', 'PrivilegeController@create')->name('create');
    Route::post('store', 'PrivilegeController@store')->name('store');
    Route::get('{id}', 'PrivilegeController@show')->name('show');
    Route::get('{id}/edit', 'PrivilegeController@edit')->name('edit');
    Route::put('{privilege}', 'PrivilegeController@update')->name('update');
    Route::delete('{id}', 'PrivilegeController@destroy')->name('destroy');

});




























