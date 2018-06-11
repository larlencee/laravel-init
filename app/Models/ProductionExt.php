<?php
/**
 * User: Administrator
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ProductionExt extends Model
{
    protected $guarded = [];

    public function production()
    {
        return $this->belongsTo(Production::class);
    }
}