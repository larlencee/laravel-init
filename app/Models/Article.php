<?php
/**
 * User: Administrator
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public function setTable($table)
    {
        $this->table = $table;
        return $this;
    }


}