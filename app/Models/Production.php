<?php
/**
 * User: Administrator
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $guarded = [];

    public function production_categories()
    {
        return $this->belongsToMany(Category::class, 'production_categories', 'production_id', 'category_id');
    }

    public function production_tags()
    {
        return $this->belongsToMany(Tag::class, 'production_tags', 'production_id', 'tag_id');
    }

    public function production_ext()
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