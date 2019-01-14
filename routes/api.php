<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('author','AuthorController@index');
Route::get('/author/{id}','AuthorController@view');
Route::post('author','AuthorController@create');
Route::put('/author/{id}','AuthorController@update');
Route::delete('/author/{id}','AuthorController@delete');

Route::get('article','ArticleController@index');
Route::get('/article/{id}','ArticleController@view');
Route::post('article','ArticleController@create');
Route::put('/article/{id}','ArticleController@update');
Route::delete('/article/{id}','ArticleController@delete');