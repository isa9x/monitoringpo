<?php

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

// Route::patch('/po/{po}', 
//       array('uses'=>'App\Controllers\PoController@updateBarang',
//              'as' => 'po.updateBarang'));
Route::get('/po/{po}/editbarang', 'PoController@editBarang');

Route::resource('po','PoController');
Route::put('/po/{po}','PoController@updateBarang')->name('po.updateBarang');

Route::get('/search',[
	'as' => 'api.search',
	'uses' => 'PoController@searching'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');