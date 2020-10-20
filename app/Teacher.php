<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //

    protected $table = 'Teachers';

    public function users(){
        return $this->hasOne('App\User');
    }
    
    public function courses(){
        return $this->hasMany('App\Course');
    }

    public function assitances(){
        return $this->belongTo('App\Assistance', 'assitance_id');
    }

    public function subjects(){
        return $this->hasMany('App\Subject');
    }

    public function evaluations(){
        return $this->hasMany('App\Evaluation');
    }

}
