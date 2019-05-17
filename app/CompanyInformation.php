<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyInformation extends Model
{
    protected $fillable = ["company","city","address","phone","fax","email","manager_id"];
}
