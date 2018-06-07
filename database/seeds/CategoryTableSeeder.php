<?php
/**
 * Created by PhpStorm.
 * User: wenlong
 * Date: 2010/3/21
 * Time: 上午10:07
 */

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{

    public function run()
    {

        $data = [
            ['parent_id' => 0, 'sort' => 1, 'name' => '创意'],
            ['parent_id' => 0, 'sort' => 2, 'name' => '配饰'],
            ['parent_id' => 0, 'sort' => 3, 'name' => '百货'],
            ['parent_id' => 0, 'sort' => 4, 'name' => '综合'],
            ['parent_id' => 0, 'sort' => 5, 'name' => '玩具'],
            ['parent_id' => 0, 'sort' => 6, 'name' => '饰品'],
            ['parent_id' => 0, 'sort' => 7, 'name' => '数码'],

            ['parent_id' => 1, 'sort' => 0, 'name' => '个性定制'],
            ['parent_id' => 1, 'sort' => 0, 'name' => '新奇特'],
            ['parent_id' => 1, 'sort' => 0, 'name' => '创意杯子'],
            ['parent_id' => 1, 'sort' => 0, 'name' => '创意灯'],
            ['parent_id' => 1, 'sort' => 0, 'name' => '相册'],
            ['parent_id' => 1, 'sort' => 0, 'name' => '水晶定制'],
            ['parent_id' => 1, 'sort' => 0, 'name' => '巧克力'],
            ['parent_id' => 1, 'sort' => 0, 'name' => '鲜花速递'],
            ['parent_id' => 1, 'sort' => 0, 'name' => '订蛋糕'],
            ['parent_id' => 1, 'sort' => 0, 'name' => '糖果'],
            ['parent_id' => 1, 'sort' => 0, 'name' => '暖手宝'],
        ];

        $menu = new \App\Models\Category();
        $menu->truncate();
        foreach ($data as $item) {
            $menu->firstOrCreate($item);
        }

    }


}
