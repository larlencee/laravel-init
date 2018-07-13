<?php
/**
 * User: Administrator
 */

namespace App\Packages\Article\Services;


use App\Models\Article;

class ArticleService
{
    public static function getNewestArticleList()
    {
        return Article::limit(10)->get();
    }

    public static function getHotArticleList()
    {
        return Article::limit(10)->orderBy('visit_count')->get();
    }

    public static function getArticleList()
    {
        return Article::limit(10)->orderBy('visit_count')->paginate(10);
    }

    public static function createArticle($table, $data)
    {
        $model = new Article();
        return $model->setTable($table)->create($data);
    }

}