<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComapnyTypeEmpTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comapny_type_emp_types', function (Blueprint $table) {
            $table->integer('companyType_id')->unsigned();
            $table->integer('compEmpType_id')->unsigned();
            $table->foreign('companyType_id')->on('comapny_types')->references('id');
            $table->foreign('compEmpType_id')->on('comapny_emp_types')->references('id');
            $table->primary(['companyType_id', 'compEmpType_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comapny_type_emp_types');
    }
}
