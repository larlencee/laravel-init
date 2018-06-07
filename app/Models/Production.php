<?php
/**
 * User: Administrator
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $guarded = [];

    public function productionExt()
    {
        return $this->hasOne(ProductionExt::class);
    }

    public function productionImage()
    {
        return $this->hasOne(ProductionImage::class);
    }
}