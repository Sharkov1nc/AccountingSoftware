<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    protected $fillable = ["title","note","recipient"];

    public function recipients(){
        return $this->belongsTo("App\User","recipient");
    }
}
