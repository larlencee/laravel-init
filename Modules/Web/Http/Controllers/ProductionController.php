<?php
/**
 * User: Administrator
 */

namespace Modules\Web\Http\Controllers;


use App\Packages\Production\Services\ProductionService;
use App\Packages\Web\Services\CategoryService;

use Illuminate\Http\Request;

class ProductionController extends WebController
{
    public function index(Request $request)
    {
        $categories = CategoryService::getAllCategory();
        $productions = ProductionService::getProduction($request->all());
        return view('web::production.production', [
            'categories' => $categories,
            'productions' => $productions
        ]);
    }
}