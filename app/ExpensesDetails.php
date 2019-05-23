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

    public function updateExpenseAmount(){
        $expense = Expenses::find($this->expense_id);
        $eds = $this::where("expense_id",$this->expense_id)->get();
        $sum = 0;
        foreach ($eds as $pd) {
            $sum += $pd->item_price;
        }
        $expense->amount = $sum;
        $expense->save();
    }
}
