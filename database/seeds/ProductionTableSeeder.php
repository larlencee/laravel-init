<?php
/**
 * Created by PhpStorm.
 * User: wenlong
 * Date: 2010/3/21
 * Time: 上午10:07
 */

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductionTableSeeder extends Seeder
{

    public function run()
    {
        factory(\App\Models\Production::class,1000)->create()->each(function ($item) {
            $item->production_ext()->save(factory(\App\Models\ProductionExt::class)->make());
            $item->production_images()->save(factory(\App\Models\ProductionImage::class)->make());
            $item->production_category()->save(factory(\App\Models\ProductionCategory::class)->make());
        });
    }


}
