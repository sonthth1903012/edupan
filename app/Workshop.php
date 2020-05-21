<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $table = "workshop";

    protected $fillable = ['location','time','capacity','attendees','fee','post_id'];

    public function Post(){
        return $this->belongsTo("\App\Post");
    }
}
