<?php
/**
 * User: Administrator
 */

namespace Modules\Web\Http\Controllers;


use App\Packages\Article\Services\ArticleService;
use App\Packages\Web\Services\CategoryService;

class IndexController extends WebController
{
    public function index()
    {
        $category = CategoryService::getAllCategory();
        $articles = ArticleService::getNewestArticleList();
        $hotArticles = ArticleService::getHotArticleList();
        return view('web::index', compact('category','articles','hotArticles'));
    }

    public function show($article_id)
    {
        dd($article_id);
    }

}