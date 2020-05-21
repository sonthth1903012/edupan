<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table= 'school';

    protected $fillable = ['school_name','address','email','image', 'desc'];

    public function  Scholarship(){
       return $this->hasMany("\App\Scholarship");
    }
}
