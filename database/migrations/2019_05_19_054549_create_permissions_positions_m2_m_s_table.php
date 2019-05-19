<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsPositionsM2MSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions_positions_m2m', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("position");
            $table->unsignedInteger("permission");
            $table->timestamps();
        });
        Schema::table('permissions_positions_m2m', function (Blueprint $table) {
            $table->foreign('position')->references('id')->on('positions');
            $table->foreign('permission')->references('id')->on('permissions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions_positions_m2m');
    }
}
