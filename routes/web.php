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

$router->group(['prefix' => 'api'], function () use ($router) {
    // Kategori
    $router->get('kategori', ['uses' => 'KategoriController@index']);
    $router->get('kategori/{id}', ['uses' => 'KategoriController@show']);
    $router->put('kategori/{id}', ['uses' => 'KategoriController@update']);
    $router->post('kategori', ['uses' => 'KategoriController@store']);
    $router->delete('kategori/{id}', ['uses' => 'KategoriController@destroy']);

    // Mahasiswa
    $router->get('mahasiswa', ['uses' => 'MahasiswaController@index']);
    $router->get('mahasiswa/{id}', ['uses' => 'MahasiswaController@show']);
    $router->put('mahasiswa/{id}', ['uses' => 'MahasiswaController@update']);
    $router->post('mahasiswa', ['uses' => 'MahasiswaController@store']);
    $router->post('mahasiswa', ['uses' => 'MahasiswaController@create']);
    $router->delete('mahasiswa/{id}', ['uses' => 'MahasiswaController@destroy']);
});
