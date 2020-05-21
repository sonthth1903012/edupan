<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'post';

    protected $fillable = ['title','content','shortDesc','thumbnail','user_id','category_id'];

    public function Category(){
        return $this->belongsTo("\App\Category");
    }

    public function User(){
        return $this->belongsTo("\App\User");
    }

    public function Workshop(){
        return $this->hasMany("\App\Workshop");
    }


}
