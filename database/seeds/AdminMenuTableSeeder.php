<?php
/**
 * Created by PhpStorm.
 * User: wenlong
 * Date: 2018/3/21
 * Time: 上午10:07
 */

use Illuminate\Database\Seeder;
use Encore\Admin\Auth\Database\Menu;
use Illuminate\Support\Facades\DB;

class AdminMenuTableSeeder extends Seeder
{

    public function run()
    {

        $data = [
            ['parent_id' => 0, 'order' => 00, 'title' => '控制台', 'icon' => 'fa-bar-chart', 'uri' => '/'],
            ['parent_id' => 0, 'order' => 0, 'title' => '文章', 'icon' => 'fa-list-alt', 'uri' => '/articles'],
            ['parent_id' => 0, 'order' => 0, 'title' => '商品', 'icon' => 'fas fa-gift', 'uri' => '/productions'],
            ['parent_id' => 0, 'order' => 0, 'title' => '用户', 'icon' => 'fa fa-user-md', 'uri' => '/users'],
            ['parent_id' => 0, 'order' => 0, 'title' => '系统', 'icon' => 'fa-tasks', 'uri' => ''],


            ['parent_id' => 2, 'order' => 0, 'title' => '写文章', 'icon' => 'fa-list-alt', 'uri' => '/articles'],
            ['parent_id' => 2, 'order' => 0, 'title' => '分类', 'icon' => 'fa fa-bars', 'uri' => '/article_categories'],
            ['parent_id' => 2, 'order' => 0, 'title' => '标签', 'icon' => 'fas fa-tags', 'uri' => '/article_tags'],

            ['parent_id' => 3, 'order' => 0, 'title' => '发布商品', 'icon' => 'fas fa-gift', 'uri' => '/productions'],
            ['parent_id' => 3, 'order' => 0, 'title' => '分类', 'icon' => 'fa fa-bars', 'uri' => '/production_categories'],
            ['parent_id' => 3, 'order' => 0, 'title' => '标签', 'icon' => 'fas fa-tags', 'uri' => '/production_tags'],

            ['parent_id' => 5, 'order' => 0, 'title' => '管理员', 'icon' => 'fa-users', 'uri' => 'auth/users'],
            ['parent_id' => 5, 'order' => 0, 'title' => '角色', 'icon' => 'fa-user', 'uri' => 'auth/roles'],
            ['parent_id' => 5, 'order' => 0, 'title' => '权限', 'icon' => 'fa-ban', 'uri' => 'auth/permissions'],
            ['parent_id' => 5, 'order' => 0, 'title' => '菜单', 'icon' => 'fa-bars', 'uri' => 'auth/menu'],
            ['parent_id' => 5, 'order' => 0, 'title' => '日志', 'icon' => 'fa-history', 'uri' => 'auth/logs'],
        ];

        $menu = new Menu();
        DB::table('admin_menu')->truncate();
        foreach ($data as $item) {
            $menu->firstOrCreate($item);
        }

    }


}
