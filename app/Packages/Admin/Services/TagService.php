<?php
/**
 * User: Administrator
 */

namespace App\Packages\Admin\Services;

use App\Models\Tag;
use App\Models\TagCategory;

class TagService
{
    public static function getTagCategoriesOptions()
    {
        $tagCategories =  TagCategory::all()->toArray();
        $option = [];
        foreach ($tagCategories as $value) {
            $option [$value['id']] = $value['name'];
        }
        return $option;
    }

    public static function getTagOptions()
    {
        return Tag::all()->pluck('name', 'id');
    }

}