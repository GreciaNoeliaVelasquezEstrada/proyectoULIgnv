<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matter extends Model
{
    //

    protected $table = 'Matters';

    public function subjects(){
        return this->hasMany('App\Subject');
    }

    public function evaluations(){
        return this->hasMany('App\Evaluation');
    }
}
