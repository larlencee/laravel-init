<?php
/**
 * Created by PhpStorm.
 * User: wenlong
 * Date: 2010/3/21
 * Time: 上午10:07
 */

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTableSeeder extends Seeder
{

    public function run()
    {

        factory(\App\Models\Article::class, 100)->create()->each(function ($item) {
            $item->article_ext()->save(factory(\App\Models\ArticleExt::class)->make());
            $item->article_a_categories()->save(factory(\App\Models\ArticleACategory::class)->make());
        });
    }


}
