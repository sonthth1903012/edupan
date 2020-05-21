<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    protected $table = 'scholarship';
    protected $fillable = ['name', 'amount', 'thumbnail', 'content', 'duedate', 'school_id'];

    public function School()
    {
        return $this->belongsTo("\App\School");
    }

    public function Student()
    {
        return $this->belongsToMany("App\Student", "scholarship_student", "scholarship_id","student_id");
    }
}
