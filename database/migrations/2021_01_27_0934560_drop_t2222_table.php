<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropT2222Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // drop the table
        Schema::dropIfExists('t2222');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('t2222', function (Blueprint $table) {
            //start_add_columns
            $table->integer("id")->nullable();
            //end_add_columns
        });
    }
}