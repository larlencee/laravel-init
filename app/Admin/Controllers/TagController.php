<?php
/**
 * User: Administrator
 */

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Production;
use App\Models\Tag;
use App\Models\Topic;
use App\Packages\Admin\TagService;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class TagController extends  Controller
{
    use ModelForm;

    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('标签');
            $content->description('标签列表');

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

    public function create()
    {
        return Admin::content(function (Content $content) {
            $content->header('编辑');
            $content->body($this->form());
        });
    }

    protected function form()
    {
        return Admin::form(Tag::class, function (Form $form) {
            $form->select('tag_category_id', '上级分类')->options(TagService::getTagCategoriesOptions())->rules('required');
            $form->text('name','标题')->rules('required');
            $form->image('cover_url','图片');
            $form->text('sort', '排序')->default(0);
        });
    }

    protected function grid()
    {
        return Admin::grid(Tag::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->name('标题');
            $grid->tagCategory()->name('标签分类');
            $grid->sort('排序')->sortable();
            $grid->created_at('创建时间');
            $grid->updated_at('更新时间');
        });
    }
}