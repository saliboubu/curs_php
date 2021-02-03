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

Route::prefix('empresa')->group(function(){
    Route::get('quisom','FrontendController@quisom')->name('quisom');
    Route::get('filosofia','FrontendController@filo')->name('filosofia');
    Route::get('sostenibilitat','FrontendController@sostenibilitat')->name('sostenibilitat');
    Route::get('equip','FrontendController@equip')->name('equip');
    Route::get('contacte', 'FrontendController@contacte')->name('contacte');

});

Route::get('categories/{id}','FrontendController@categoria')->name('categoria');


//Alimentació 29/12/20
Route::get('categories','FrontendController@categories')->name('categories');

Route::get('botigues','FrontendController@botigues')->name('botigues');
Route::get('botigues/search','FrontendController@search')->name('search');
//Les dades que s'envien des del buscador són en format POST
Route::post('botigues/result_search','FrontendController@resultSearch')->name('result_search');
Route::get('botigues/{id}','FrontendController@shopdetail')->name('botiga');
//Crear ruta per fer buscador de productes
Route::get('products/search','FrontendController@productSearch')->name('product_search');
Route::post('products/result_search','FrontendController@productSearchResult')->name('result_product_search');
Route::get('products/{id}','FrontendController@product')->name('product');

//30/12/2020//
Route::prefix('admin')->group(function(){
    //Route::get('categories','CategoriesController@index')->name('admin.categories');
    Route::resource('categories','CategoriesController');//Amaga 7 rutes, mirar la documentació de Laravel
    Route::resource('shops','ShopController');
});
