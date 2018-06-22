<?php
/**
 * User: Administrator
 */

namespace App\Packages\Web\Services;


use App\Models\CategoryTree;

class CategoryService
{

    public static function getAllCategory()
    {
        return CategoryTree::limit(5)->get();
    }
}