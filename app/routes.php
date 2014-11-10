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
//Route::get('products', function() {
//    $products = Shop\Users\User::find(1)->products->first();
//    dd($products);
//});
Route::get('products', [
    'as' => 'products',
    'uses' => 'ProductsController@index'
]);
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