<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \Illuminate\Support\Facades\DB;
use App\Constants;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->increments('id');
            $table->string("position",64);
            $table->string("position_code",64);
            $table->timestamps();
        });
        foreach (Constants::positions as $key => $val){
            $this->InsertPositions($val,$key);
        }

    }

    /**
     * Insert Positions Function
     * @param $position
     * @param $positionCode
     */

    public function InsertPositions($position,$positionCode){
     DB::table("positions")->insert([
            "position" => $position,
            "position_code" => $positionCode
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('positions');
    }
}
