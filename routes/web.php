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

$router->get('/rental', 'rentalController@index');
$router->get('/rental/{id}', 'rentalController@show');
$router->post('/rental', 'rentalController@store');
$router->put('/rental/{id}', 'rentalController@update');
