<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'category';

    protected $fillable = ['school_id','category_id','content','description'];


}
