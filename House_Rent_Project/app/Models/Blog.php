<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    /**
     * @var string
     */
    protected $table = 'blog';
    /**
     * @var array
     */
    protected $fillable = ['title','address','description','price','sub_title','beds','bath','garage','sq_ft','image'];
}
