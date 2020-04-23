<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $table = 'category';

    protected $fillable = ['school_name','address','email'];
}
