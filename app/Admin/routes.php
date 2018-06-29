<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');


    $router->resource('topics', 'TopicController');

    $router->resource('articles', 'ArticleController');
    $router->resource('article_categories', 'CategoryController');
    $router->resource('article_tags', 'TagController');

    $router->resource('productions', 'ProductionController');
    $router->resource('production_categories', 'CategoryController');
    $router->resource('production_tags', 'TagController');
});
