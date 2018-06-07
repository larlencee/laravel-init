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
            ['parent_id' => 0, 'order' => 1, 'title' => '首页', 'icon' => 'fa-bar-chart', 'uri' => '/'],
            ['parent_id' => 0, 'order' => 2, 'title' => '控制台', 'icon' => 'fa-tasks', 'uri' => ''],
            ['parent_id' => 2, 'order' => 3, 'title' => '用户', 'icon' => 'fa-users', 'uri' => 'auth/users'],
            ['parent_id' => 2, 'order' => 4, 'title' => '角色', 'icon' => 'fa-user', 'uri' => 'auth/roles'],
            ['parent_id' => 2, 'order' => 5, 'title' => '权限', 'icon' => 'fa-ban', 'uri' => 'auth/permissions'],
            ['parent_id' => 2, 'order' => 6, 'title' => '菜单', 'icon' => 'fa-bars', 'uri' => 'auth/menu'],
            ['parent_id' => 2, 'order' => 7, 'title' => '日志', 'icon' => 'fa-history', 'uri' => 'auth/logs'],
            ['parent_id' => 0, 'order' => 8, 'title' => '用户', 'icon' => 'fa fa-user-md', 'uri' => '/users'],
            ['parent_id' => 0, 'order' => 9, 'title' => '主题', 'icon' => 'far fa-heart', 'uri' => '/topics'],
            ['parent_id' => 0, 'order' => 9, 'title' => '商品', 'icon' => 'fas fa-gift', 'uri' => '/productions'],
            ['parent_id' => 0, 'order' => 9, 'title' => '文章', 'icon' => 'fa-list-alt', 'uri' => '/articles'],
            ['parent_id' => 0, 'order' => 9, 'title' => '分类', 'icon' => 'fa fa-bars', 'uri' => '/categories'],
            ['parent_id' => 0, 'order' => 9, 'title' => '标签', 'icon' => 'fas fa-tags', 'uri' => '/tags'],
        ];

        $menu = new Menu();
        DB::table('admin_menu')->truncate();
        foreach ($data as $item) {
            $menu->firstOrCreate($item);
        }

    }


}
