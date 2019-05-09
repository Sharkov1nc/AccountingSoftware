<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profits extends Model
{
    protected $fillable = [
        "client_id",
        "date",
        "clarification",
        "amount",
        "created_by"
    ];

    protected $table = "profits";

    public function client()
    {
        return $this->belongsTo('App\Clients');
    }
    public function createdBy()
    {
        return $this->belongsTo('App\User','created_by');
    }

}
