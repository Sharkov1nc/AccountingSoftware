<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $fillable = ["permission","permission_code"];
}
