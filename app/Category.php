<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';

    protected $fillable = ['category_name'];

    public function Posts(){
        return $this->hasMany("\App\Post");
    }

}
