<?php
/**
 * User: Administrator
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ArticleACategory extends Model
{
    protected $guarded = [];


    public function article()
    {
        return $this->belongsToMany(Article::class);
    }


}