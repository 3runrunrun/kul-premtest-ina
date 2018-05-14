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

$router->get('/key', function() {
  return str_random(64);
});

$router->group(['middleware' => 'auth'], function () use ($router) {
  // user
  $router->post('/user', 'UserController@get_data');
  $router->post('/get-user', 'UserController@show');

  // user review
  $router->post('/create-review', 'UserReviewController@create');
  $router->get('/review', 'UserReviewController@get_data');
  $router->get('/show-review/{id}', 'UserReviewController@show');
  $router->put('/update-review/{id}', 'UserReviewController@update');
  $router->delete('/delete-review/{id}', 'UserReviewController@destroy');
});

$router->post('/prime', 'AlgorithmTest@primeNumber');
$router->get('/fibo/{max}', 'AlgorithmTest@fiboNumber');
$router->get('/zero/{number}', 'AlgorithmTest@bringTheZero');
