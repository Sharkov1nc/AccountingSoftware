<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name",64);
            $table->mediumText("task");
            $table->unsignedInteger("recipient");
            $table->boolean("completed")->nullable(true);
            $table->timestamps();
        });
        Schema::table('tasks', function (Blueprint $table) {
            $table->foreign('recipient')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
