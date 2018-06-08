<?php
/**
 * User: Administrator
 */

namespace Modules\Web\Http\Controllers;


use App\Packages\Web\Services\CategoryService;

class IndexController extends WebController
{
    public function index()
    {
        $category = CategoryService::getAllCategory();
        return view('web::index', compact('category'));
    }

}