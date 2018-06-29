<?php
/**
 * User: Administrator
 */

namespace App\Packages\Article\services;

use App\Models\ATag;


class ATagService
{

    public static function getTagOptions()
    {
        return ATag::all()->pluck('name', 'id');
    }

}