<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(\Encore\Admin\Auth\Database\AdminTablesSeeder::class);
        $this->call(AdminMenuTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ACategoryTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(ATagTableSeeder::class);
        $this->call(TagCategoriesTableSeeder::class);
        $this->call(ProductionTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
        $this->call(PageTableSeeder::class);
    }
}
