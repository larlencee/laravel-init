<?php
/**
 * Created by PhpStorm.
 * User: wenlong
 * Date: 2010/3/21
 * Time: 上午10:07
 */

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ATagTableSeeder extends Seeder
{

    public function run()
    {
        factory(\App\Models\ATag::class, 100)->create();
    }


}
