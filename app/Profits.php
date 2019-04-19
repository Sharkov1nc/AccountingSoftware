<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profits extends Model
{
    protected $fillable = [
        "client_id",
        "clarification",
        "amount",
        "created_by"
    ];
}
