<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_information', function (Blueprint $table) {
            $table->increments('id');
            $table->string("company",64);
            $table->string("city",64);
            $table->string("address",128);
            $table->bigInteger("phone");
            $table->string("fax",64);
            $table->string("email",64);
            $table->unsignedInteger("manager_id");
            $table->timestamps();
        });
        Schema::table('company_information', function (Blueprint $table) {
            $table->foreign('manager_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_information');
    }
}
