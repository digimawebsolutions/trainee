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
        Schema::create('employees', function (Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('employee_id');
            $table->string('employee_first_name');
            $table->string('employee_last_name');
            $table->string('employee_contact_number');
            $table->string('employee_email_add');
            $table->string('employee_created_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            //
        });
    }
}
