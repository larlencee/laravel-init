<?php
/**
 * User: Administrator
 */

namespace Modules\Web\Http\Controllers;


use App\Packages\Web\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends WebController
{
    public function index(Request $request)
    {
        $category = CategoryService::getAllCategory();
        return view('web::Category.category', compact('category'));
    }
}