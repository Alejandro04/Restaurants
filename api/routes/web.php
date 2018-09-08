<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/test', function () use ($router) {
    return "test";
});

$router->get('restaurants', [
    'as' => 'restaurants', 'uses' => 'RestaurantController@index'
]);

$router->get('restaurants/{id}', [
    'as' => 'restaurante', 'uses' => 'RestaurantController@show'
]);

$router->post('restaurants', 'RestaurantController@store');


