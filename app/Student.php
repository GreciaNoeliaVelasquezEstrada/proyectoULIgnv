<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = 'Students';

    public function users(){
        return this->hasOne('App\User');
    }

    public function courses(){
        return this->hasOne('App\Course');
    }

    public function evaluations(){
        return this->hasMany('App\Evaluation');
    }

    public function subjects(){
        return this->hasMany('App\Subject');
    }

}
