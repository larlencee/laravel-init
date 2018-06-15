<?php
/**
 * User: Administrator
 */

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryTree;
use App\Models\Production;
use App\Models\Tag;
use App\Packages\Admin\Services\AdminOptions;
use App\Packages\Admin\Services\TagService;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Widgets\Tab;

class ProductionController extends  Controller
{
    use ModelForm;

    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('产品');
            $content->description('产品列表');

            $content->body($this->grid());
        });
    }


    public function create()
    {
        return Admin::content(function (Content $content) {
            $content->header('编辑');
            $content->body($this->form());
        });
    }

    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {
            $content->header('编辑');
            $content->body($this->form()->edit($id));
        });
    }

    protected function grid()
    {
        return Admin::grid(Production::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->title('标题');
            $grid->price('价格');
            $grid->price('平台');
            $grid->visit_count('浏览数');
            $grid->like_count('点赞数');
            $grid->collect_count('收藏数');
            $grid->sort('排序')->sortable()->editable();
            $grid->updated_at('更新时间');
        });
    }

    protected function form()
    {
        return Admin::form(Production::class, function (Form $form) {

            $form->tab('产品基本信息',function () use ($form){
                $form->multipleSelect('production_categories', '分类')->options(CategoryTree::selectOptions());
                $form->multipleSelect('production_tags', '标签')->options(TagService::getTagOptions());
                $form->text('title','标题')->rules('required');
                $form->select('platform_type','平台类型')->options(AdminOptions::getPlatformOptions())->default(1)->rules('required');
                $form->url('platform_url','购买链接')->rules('required');
                $form->number('price','价格')->rules('required');
                $form->number('sort', '排序')->default(0);
                /*$form->multipleImage('images','图片');*/
                $form->editor('production_ext.contents','正文')->rules('required');
                //$form->textarea('production_ext.contents','正文')->rules('required');
            });

            $form->tab('产品图片',function () use ($form){
                $form->hasMany('production_images','产品图片', function (Form\NestedForm $form) {
                    $form->image('image_url', '图片');
                });
            });
        });
    }

}