<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = [
        "client",
        "contact_person",
        "type",
        "phone",
        "email",
        "city",
        "address"
    ];
}
