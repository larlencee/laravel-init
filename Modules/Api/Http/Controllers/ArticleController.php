<?php
/**
 * User: Administrator
 */

namespace Modules\Api\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Packages\Article\Services\ArticleService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return ArticleService::getArticleList('news');
    }

    public function store(Request $request)
    {
        dd($request->all());
        return ArticleService::createArticle($request->all());
    }
}