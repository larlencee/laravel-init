<?php
/**
 * User: Administrator
 */

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ACategoryTree;
use App\Models\Article;
use App\Packages\Article\Services\ATagService;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class ArticleController extends  Controller
{
    use ModelForm;

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

    public function create()
    {
        return Admin::content(function (Content $content) {
            $content->header('创建');
            $content->body($this->form());
        });
    }

    protected function form()
    {
        return Admin::form(Article::class, function (Form $form) {

            $form->tab('文章基本信息', function () use ($form){
                $form->multipleSelect('article_a_categories', '分类*')->options(ACategoryTree::selectOptions())->rules('required');
                $form->multipleSelect('tag', '标签')->options(ATagService::getTagOptions());
                $form->text('title','标题*')->rules('required');
                $form->text('description','描述');
                $form->editor('article_ext.contents','正文*')->rules('required');
                $form->image('cover_url','封面*');
                $form->number('visit_count','浏览数');
                $form->number('like_count','点赞数');
                $form->number('collect_count','收藏数');
                $form->number('sort','排序');
                $form->text('author','作者');
                $form->text('source','来源');
                $form->time('published_at','发布时间');
            });
            $form->tab('SEO 信息', function () use ($form){
                $form->text('meta_keywords','关键词');
                $form->text('meta_description','描述');
            });

        });
    }

    protected function grid()
    {
        return Admin::grid(Article::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->title('标题');
            $grid->cover_url('标题')->image(null, 50, 50);
            $grid->visit_count('浏览数')->sortable();
            $grid->like_count('点赞数')->sortable();
            $grid->collect_count('收藏数')->sortable();
            $grid->sort('排序')->sortable()->sortable();
            $grid->updated_at('更新时间')->sortable();
        });
    }
}