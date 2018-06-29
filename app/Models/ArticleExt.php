<?php
/**
 * User: Administrator
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ArticleExt extends Model
{
    protected $guarded = [];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}