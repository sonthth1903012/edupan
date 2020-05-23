<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $table = 'organization';
    protected $fillable = ['organization_name', 'email', 'address', 'thumbnail', 'desc'];

    public function Projects()
    {
        return $this->hasMany("\App\Project");
    }
}
