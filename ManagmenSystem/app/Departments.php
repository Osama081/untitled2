<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    //
    public function subFields(){
        return $this->hasMany('App\SubField');
    }
}
