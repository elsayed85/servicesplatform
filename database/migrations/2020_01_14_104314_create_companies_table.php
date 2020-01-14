<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('logo')->nullable();
            $table->text('desc')->nullable();
            $table->string('doc');
            $table->integer('companyOwner_id')->unsigned();
            $table->foreign('companyOwner_id')->on('companyowners')->references('id');
            $table->integer('companyType_id')->unsigned();
            $table->foreign('companyType_id')->on('comapny_types')->references('id');
            $table->integer('plan_id')->unsigned();
            $table->foreign('plan_id')->on('plans')->references('id');
            $table->enum('state' , ['0' , '1'])->default('0');
            $table->softDeletes();
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
        Schema::dropIfExists('companies');
    }
}
