<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
    protected $table = 'Subject';

    public function matters(){
        return this->belongTo('App\matter','matter_id');
    }

    
}
