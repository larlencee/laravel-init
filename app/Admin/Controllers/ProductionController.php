<?php
/**
 * User: Administrator
 */

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Production;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class ProductionController extends  Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('产品');
            $content->description('产品列表');

            $content->body($this->grid());
        });
    }

    protected function grid()
    {
        return Admin::grid(Production::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->title('标题');
            $grid->price('价格');
            $grid->visit_count('浏览数');
            $grid->like_count('点赞数');
            $grid->collect_count('收藏数');
            $grid->sort('排序')->sortable();
            $grid->created_at('创建时间');
            $grid->updated_at('更新时间');
        });
    }
}