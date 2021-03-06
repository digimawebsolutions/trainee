<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblJosh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tbl_josh' , function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('customer_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('created_date');
            $table->string('email');
            $table->string('contact_number');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_josh');
    }
}
