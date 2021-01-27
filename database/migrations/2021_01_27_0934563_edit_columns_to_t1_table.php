<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditColumnsToT1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('t1', function (Blueprint $table) {
            //start_add_columns
            $table->integer("phone")->default('qu')->change();
            $table->integer("ss")->nullable();
            $table->integer("ssq")->nullable();
            $table->integer("islam")->default('1');

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
        Schema::table('t1', function (Blueprint $table) {
            //start_reverse

            $table->string("phone")->default('15');

            $table->dropColumn('ss');
       

            $table->dropColumn('ssq');
       

            $table->dropColumn('islam');
       

            //end_reverse
        });
    }
}