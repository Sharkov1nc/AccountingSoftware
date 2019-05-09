<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfitsDetails extends Model
{
    protected $fillable = [
        "item_position",
        "item_price",
        "profit_id"
    ];

    public function profits()
    {
        return $this->belongsTo('App\Profits');
    }
}
