<?php

Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Web\Http\Controllers'], function()
{
    Route::get('/', 'IndexController@index');
    Route::get('/articles', 'ArticleController@index');
    Route::get('/categories', 'CategoryController@index');
    Route::get('/productions', 'ProductionController@index');

});
