<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpensesDetails extends Model
{
    protected $fillable = [
        "item_position",
        "item_price",
        "expense_id"
    ];

    public function expenses()
    {
        return $this->belongsTo('App\Expenses');
    }
}
