<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('v1')->name('api.v1.')->group(function () {
    Route::prefix('article')->namespace('Article')->group(function () {
        Route::get('article_md_enum', 'ArticleMdController@enum')->name('article_md.enum');
        Route::get('article_md', 'ArticleMdController@index')->name('article_md.index');
        Route::get('article_md/{id}', 'ArticleMdController@view')->name('article_md.view');
        Route::post('article_md', 'ArticleMdController@store')->name('article_md.store');
        Route::post('article_md/{id}', 'ArticleMdController@update')->name('article_md.update');
        Route::delete('article_md/{id}', 'ArticleMdController@destroy')->name('article_md.destroy');
    });
});

