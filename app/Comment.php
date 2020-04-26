<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

    protected $fillable = ['content','user_id','post_id'];

    public function User(){
        return $this->belongsTo("\App\User");
    }

    public function Post(){
        return $this->belongsTo("\App\Post");
    }


}
