<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'department_id', 'description',
    ];

    public function parentDepartment()
	{
	    return $this->belongsTo('App\Department', 'department_id');	    
	}

}
