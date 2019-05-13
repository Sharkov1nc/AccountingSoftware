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

    public function updateProfitAmount(){
        $profit = Profits::find($this->profit_id);
        $pds = $this::where("profit_id",$this->profit_id)->get();
        $sum = 0;
        foreach ($pds as $pd) {
            $sum += $pd->item_price;
        }
        $profit->amount = $sum;
        $profit->save();
    }
}
