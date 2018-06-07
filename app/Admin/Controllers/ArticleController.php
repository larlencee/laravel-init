<?php
/**
 * User: Administrator
 */

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Production;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class ArticleController extends  Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('文章');
            $content->description('文章列表');

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
        return Admin::form(Article::class, function (Form $form) {

            $form->text('title','标题')->rules('required');
            $form->text('description','描述');
            $form->text('visit_count','浏览数');
            $form->text('like_count','点赞数');
            $form->text('collect_count','收藏数');
            $form->text('sort','排序');

        });
    }

    protected function grid()
    {
        return Admin::grid(Article::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->title('标题');
            $grid->visit_count('浏览数');
            $grid->like_count('点赞数');
            $grid->collect_count('收藏数');
            $grid->sort('排序')->sortable();
            $grid->created_at('创建时间');
            $grid->updated_at('更新时间');
        });
    }
}