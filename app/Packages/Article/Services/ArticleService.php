<?php
/**
 * User: Administrator
 */

namespace App\Packages\Article\Services;


use App\Models\Article;

class ArticleService
{
    public static function getArticleList()
    {
        $model = new Article();
        return $model->get();
    }

    public static function createArticle($table, $data)
    {
        $model = new Article();
        return $model->setTable($table)->create($data);
    }

}