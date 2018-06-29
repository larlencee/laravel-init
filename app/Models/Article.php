<?php
/**
 * User: Administrator
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    /*public function setTable($table)
    {
        $this->table = $table;
        return $this;
    }*/

    public function article_a_categories()
    {
        return $this->belongsToMany(ACategory::class, 'article_a_categories', 'article_id', 'category_id');
    }

    public function article_ext()
    {
        return $this->hasOne(ArticleExt::class);
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'article_a_tags', 'article_id', 'tag_id');
    }



}