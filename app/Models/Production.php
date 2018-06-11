<?php
/**
 * User: Administrator
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $guarded = [];

    public function productionCategories()
    {
        return $this->hasMany(Category::class);
    }

    public function productionExt()
    {
        return $this->hasOne(ProductionExt::class);
    }

    public function productionImage()
    {
        return $this->hasMany(ProductionImage::class);
    }


    public function setImagesAttribute($images)
    {
        if (is_array($images)) {
            $this->attributes['images'] = json_encode($images);
        }
    }

    public function getImagesAttribute($images)
    {
        return json_decode($images, true);
    }
}