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


$router->get('users','UserController@index');

$router->put('users/{id}','UserController@update');
$router->put('changepassword/{id}','UserController@changePassword');

$router->get('gits','GitController@index');
$router->post('git','GitController@store');

$router->get('prime','TaskController@index');