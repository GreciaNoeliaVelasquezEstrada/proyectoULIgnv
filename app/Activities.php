<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    //
    protected $table = 'Activities';

    public function subjects(){
        return this->hasMany('App\Subject');
    }

    public function matters(){
        return this->belongTo('App\Subject','matter_id');
    }
}
