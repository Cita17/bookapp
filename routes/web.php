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

$router->get('/key', function () {
    return str_random(32);
});

//CRUD Book
$router->get('books', 'BooksController@index');
$router->get('books/{id}', 'BooksController@showById');
$router->post('books', 'BooksController@store');
$router->put('books/{id}', 'BooksController@update');
$router->delete('books/{id}', 'BooksController@destroy');

//CRUD Author
$router->get('author', 'AuthorController@index');
$router->get('author/{id}','AuthorController@Id');
$router->post('author', 'AuthorController@store');
$router->put('author/{id}', 'AuthorController@update');
$router->delete('author/{id}', 'AuthorController@destroy');

