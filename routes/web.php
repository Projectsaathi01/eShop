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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function() {
    return view('welcome');
});


// Route::get('products', 'ProductsController@index')->name('products.index');
// Route::get('products/create', 'ProductsController@create')->name('products.create');
// Route::get('products/show', 'ProductsController@index')->name('products.display');
// Route::post('products/store', 'ProductsController@store')->name('products.store');
// Route::get('products/edit/{id}', 'ProductsController@edit')->name('products.edit');
// Route::put('products/update/{id}', 'ProductsController@update')->name('products.update');
// Route::delete('products/delete/{id}', 'ProductsController@destroy')->name('products.destroy');



// Route for Voyager


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route for admin
Route::group(['as'=>'admin.', 'middleware'=>['auth','admin'], 'prefix'=>'admin'], function(){
	Route::get('dashboard', 'AdminController@index')->name('index');
	Route::resource('product', 'ProductController');
	Route::resource('category', 'CategoryController');	
});