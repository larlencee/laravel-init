<?php
/**
 * Created by PhpStorm.
 * User: wenlong
 * Date: 2010/3/21
 * Time: 上午10:07
 */

use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{

    public function run()
    {
        factory(\App\Models\Page::class, 100)->create();
    }
}
