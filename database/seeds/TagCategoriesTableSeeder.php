<?php
/**
 * Created by PhpStorm.
 * User: wenlong
 * Date: 2010/3/21
 * Time: 上午10:07
 */

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagCategoriesTableSeeder extends Seeder
{

    public function run()
    {

        $data = [
            ['name' => '赠送对象', 'sort' => 1],
            ['name' => '赠送场合', 'sort' => 2],
            ['name' => '赠送节日', 'sort' => 3],
        ];

        $menu = new \App\Models\TagCategory();
        $menu->truncate();
        foreach ($data as $item) {
            $menu->firstOrCreate($item);
        }

    }


}
