<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    protected $fillable = ["client_id", "date", "clarification", "amount", "created_by"];

    public function client()
    {
        return $this->belongsTo('App\Clients');
    }
    public function createdBy()
    {
        return $this->belongsTo('App\User','created_by');
    }
}
