<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $fillable = ['student_name', 'email', 'date_of_birth', 'address', 'phone', 'status','skill'];

    const APPROVED = 1;
    const PENDING = 0;
    const DELETED = 2;

    public function Scholarship()
    {
        return $this->belongsToMany("App/Scholarship", "scholarship_id","scholarship_student", "student_id");
    }



}
