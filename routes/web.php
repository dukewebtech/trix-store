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

Route::get('/', function(){
    return view('welcome');
});
Route::get('/home', function(){
    return view('home');
});
Route::get('/stocks/index', function(){
    if (Gate::allows('admin-access', Auth::user())) {
        // The current user can view dashboard the post...
        return view('mypriviledge');
    }
    return 'You are not authorised my friend :)';




});
Route::auth();
Route::prefix('stocks')->name('stocks.')->group(function(){
        Route::get('index', 'StockController@index')->name('index');
        Route::get('create', 'StockController@create')->name('create');
        Route::post('store', 'StockController@store')->name('store');
        Route::get('{id}', 'StockController@show')->name('show');
        Route::get('{stock}/edit', 'StockController@edit')->name('edit');
        Route::put('{stock}', 'StockController@update')->name('update');
        Route::delete('{id}', 'StockController@destroy')->name('destroy');

});
Route::prefix('measurements')->name('measurements.')->group(function(){
    Route::get('index', 'MeasurementController@index')->name('index');
    Route::get('create', 'MeasurementController@create')->name('create');
    Route::POST('store', 'MeasurementController@store')->name('store');
    Route::get('{measure}/edit', 'MeasurementController@edit')->name('edit');
    Route::put('{measures}', 'MeasurementController@update')->name('update');
//    Route::delete('{id}', 'MeasurementController@destroy')->name('destroy');
//    Route::get('{id}', 'MeasurementController@show')->name('show')
});
