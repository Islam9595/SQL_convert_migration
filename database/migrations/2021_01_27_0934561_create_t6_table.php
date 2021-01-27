<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT6Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('t6', function (Blueprint $table) {
            //start_add_columns
            $table->integer("id");
            $table->integer("name");
            $table->integer("phone")->nullable();
            $table->integer("Email")->default('10')->unsigned();
            //end_add_columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //start_reverse
         Schema::dropIfExists('t6');
        //end_reverse
    }
}