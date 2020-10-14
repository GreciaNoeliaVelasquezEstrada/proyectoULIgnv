<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    //
    protected $table = 'Evaluation';

    public function subjects(){
        return this->hasMany('App\Subject');
    }

    public function students(){
        return this->belongTo('App\Student','student_id');
    }

    public function teachers(){
        return this->belongTo('App\Teacher','teacher_id');
    }

    public function matter(){
        return this->hasMany('App\Matter');
    }
}
