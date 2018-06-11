<?php
/**
 * User: Administrator
 */

namespace App\Admin\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryTree;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Form;
use Encore\Admin\Layout\Content;

class CategoryController extends Controller
{
    use ModelForm;

    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header('分类');
            $content->body(CategoryTree::tree());
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
        return Admin::form(Category::class, function (Form $form) {
            $form->select('parent_id', '上级分类')->options(CategoryTree::selectOptions());
            $form->text('name', '名称 *')->rules('required');
            $form->image('cover_url', '图片');
            $form->text('sort', '排序')->default(0);

        });
    }

}