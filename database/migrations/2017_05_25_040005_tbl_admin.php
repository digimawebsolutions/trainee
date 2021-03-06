<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tbl_admin', function (Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('email');
            $table->string('created_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_admin');
    }
}
