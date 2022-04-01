<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
$router->post('/insert_user','UserController@store');
$router->get('/show_user/{id}','UserController@show');
$router->post('/update_user/{id}','UserController@update');
$router->delete('/delete_user/{id}','UserController@delete');

$router->post('/insert_Reservations','ReservationsController@store');
$router->get('/show_Reservations/{id}','ReservationsController@show');
$router->post('/update_Reservations/{id}','ReservationsController@update');
$router->delete('/delete_Reservations{id}','ReservationsController@delete');

$router->post('/insert_club','ClubController@store');
$router->get('/show_club/{id}','ClubController@show');
$router->post('/update_club/{id}','ClubController@update');
$router->delete('/delete_club{id}','ClubController@delete');

$router->group([

    'prefix' => 'auth'

], function ($router) {

    $router->post('login', 'AuthController@login');
    $router->post('logout', 'AuthController@logout');
    $router->post('refresh', 'AuthController@refresh');
    $router->post('me', 'AuthController@me');
});