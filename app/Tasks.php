<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $fillable = ["name","task","recipient","completed"];

    public function recipients(){
       return $this->belongsTo("App\User","recipient");
    }
}
