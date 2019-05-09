<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfitsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profits_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string("item_position",256);
            $table->float("item_price");
            $table->unsignedInteger("profit_id");
            $table->timestamps();
        });
        Schema::table('profits_details', function (Blueprint $table) {
            $table->foreign('profit_id')->references('id')->on('profits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profits_details');
    }
}
