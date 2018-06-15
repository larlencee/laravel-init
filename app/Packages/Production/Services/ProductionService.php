<?php
/**
 * User: Administrator
 */

namespace App\Packages\Production\Services;

use Illuminate\Support\Facades\DB;

class ProductionService
{
    public static function getProduction(array $data)
    {
        $category_id = $data['category_id']??0;
        return DB::table('productions')
            ->leftJoin('production_categories', 'productions.id', '=', 'production_categories.production_id')
            ->leftJoin('production_images', 'productions.id', '=', 'production_images.production_id')
            ->where('production_categories.category_id',$category_id)
            ->paginate(12);
    }
}