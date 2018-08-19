<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubField extends Model
{
    //
    public function department(){
        return $this->belongsTo('App\Departments');
    }

}
