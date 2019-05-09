<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string("item_position",256);
            $table->float("item_price");
            $table->unsignedInteger("expense_id");
            $table->timestamps();
        });
        Schema::table('expenses_details', function (Blueprint $table) {
            $table->foreign('expense_id')->references('id')->on('expenses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenses_details');
    }
}
