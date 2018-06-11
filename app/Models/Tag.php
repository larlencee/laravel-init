<?php
/**
 * User: Administrator
 */

namespace App\Models;


use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    public function tagCategory()
    {
        return $this->belongsTo(TagCategory::class);
    }
}