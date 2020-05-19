<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';

    protected $fillable = ['category_name'];

    public function Post(){
        return $this->hasMany("\App\User");
    }

//    public function Comment(){
//        return $this->hasMany("\App\Comment");
//    }

}
