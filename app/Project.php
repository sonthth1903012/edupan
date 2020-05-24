<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';
    protected $fillable = ['project_name', 'goal', 'thumbnail', 'content', 'due_date', 'organization_id'];

    public function Organization()
    {
        return $this->belongsTo("\App\Organization");
    }

    public function Users()
    {
        return $this->belongsToMany("\App\User", 'project_user', 'user_id', 'project_id')->withPivot("amount","method");
    }

    public function getRaisedAttribute(){
        $total = 0;
        foreach($this->Users as $user){
            $total += $user->pivot->amount;
        }
        return $total;
    }
}
