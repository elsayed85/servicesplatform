<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanServiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_servies', function (Blueprint $table) {
            $table->integer('plan_id')->unsigned();
            $table->foreign('plan_id')->on('plans')->references('id');
            $table->integer('servies_id')->unsigned();
            $table->foreign('servies_id')->on('servies')->references('id');
            $table->primary(['plan_id', 'servies_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_servies');
    }
}
