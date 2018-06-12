<?php
/**
 * User: Administrator
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ProductionCategory extends Model
{
    protected $table = 'production_categories';

    protected $guarded = [];

    public function production()
    {
        return $this->belongsToMany(Production::class);
    }
}