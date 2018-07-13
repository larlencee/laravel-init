<?php
/**
 * User: Administrator
 */

namespace Modules\Web\Http\Controllers;


use App\Packages\Article\Services\ArticleService;
use App\Packages\Web\Services\CategoryService;

class ArticleController extends WebController
{
    public function index()
    {
        $articles = ArticleService::getArticleList();
        $hotArticles = ArticleService::getHotArticleList();
        return view('web::article.index', compact('category','articles','hotArticles'));
    }

}