<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/**
 * Pages
 */
Route::get('/', [
    'as'   => 'home',
    'uses' => 'PagesController@home'
]);
Route::get('about', [
    'as'    => 'about',  
    'uses'  => 'PagesController@about'
]);
Route::get('placead', [
    'as'    => 'placead',
    'uses'  => 'PagesController@placead' 
]);

/**
 * Products (Restful routing)
 */
Route::resource('products', 'ProductsController');
Route::get('productsByCategory/{category}', [
    'as' => 'products_by_category_path',
    'uses' => 'ProductsController@indexByCategory'
]);
Route::post('products/purchase/{id}', [
    'as' => 'products_purchase',
    'uses' => 'ProductsController@purchase'
]);
Route::get('products/purchase/{id}', [
    'as' => 'products_purchase',
    'uses' => 'ProductsController@purchaseShow'
]);
/**
 * Users (Restful routing)
 */
Route::resource('users', 'UsersController');

/**
 * Registration!
 */
Route::get('register', [
    'as'   => 'register_path',
    'uses' => 'RegistrationController@create'
]);

Route::post('register', [
    'as'   => 'register_path',
    'uses' => 'RegistrationController@store'
]);

/**
 * Sessions
 */
Route::get('login', [
    'as'   => 'login_path',
    'uses' => 'SessionsController@create'
]);

Route::post('login', [
    'as'   => 'login_path',
    'uses' => 'SessionsController@store'
]);

Route::get('logout', [
    'as'   => 'logout_path',
    'uses' => 'SessionsController@destroy'
]);