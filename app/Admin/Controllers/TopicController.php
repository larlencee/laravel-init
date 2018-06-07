<?php
/**
 * User: Administrator
 */

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Production;
use App\Models\Topic;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class TopicController extends  Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('主题');
            $content->description('主题列表');

            $content->body($this->grid());
        });
    }

    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {
            $content->header('编辑');
            $content->body($this->form()->edit($id));
        });
    }

    protected function form()
    {
        return Admin::form(Topic::class, function (Form $form) {

            $form->text('name','标题')->rules('required');
            $form->text('description','描述');

        });
    }

    protected function grid()
    {
        return Admin::grid(Topic::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->name('标题');
            $grid->updated_at('更新时间');
        });
    }
}