<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('serviesTypes_id')->unsigned();
            $table->foreign('serviesTypes_id')->on('servies_types')->references('id');
            $table->integer('price_monthly')->unsigned();
            $table->integer('price_yearly')->unsigned();
            $table->enum('state' , ['0' , '1'])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servies');
    }
}
