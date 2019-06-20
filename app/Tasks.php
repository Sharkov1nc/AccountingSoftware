<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $fillable = ["name","task","recipient","priority","completed"];

    public function recipients(){
       return $this->belongsTo("App\User","recipient");
    }
}
