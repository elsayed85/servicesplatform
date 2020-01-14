<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('fname');
            $table->string('lname');
            $table->string('profilePicture');
            $table->integer('compEmpType_id')->unsigned();
            $table->foreign('compEmpType_id')->on('comapny_emp_types')->references('id');
            $table->bigInteger('company_id')->unsigned();
            $table->foreign('company_id')->on('companies')->references('id');
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
        Schema::drop('employees');
    }
}
