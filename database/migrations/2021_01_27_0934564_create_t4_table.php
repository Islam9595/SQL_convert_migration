<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('t4', function (Blueprint $table) {
            //start_add_columns
            $table->increments("id");
            $table->integer("status");
            $table->date("c1");
            $table->integer("c2")->nullable();
            $table->float("c3");
            $table->integer("c4")->unsigned();
            $table->date("c5");
            $table->timestamp("c10");
            $table->time("c11");
            $table->mediumText("c12");
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
         Schema::dropIfExists('t4');
        //end_reverse
    }
}