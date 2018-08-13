<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationshipsFoods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('foods', function (Blueprint $table) {
            //
            $table->string('weight')->after('name');
            $table->integer('unit_id')->unsigned()->after('weight');
            $table->foreign('unit_id')->references('id')->on('units');

            
            $table->integer('measure_id')->unsigned()->after('unit_id');
            $table->foreign('measure_id')->references('id')->on('home_measures');
            $table->integer('home_measure_id')->unsigned()->after('measure_id');
            $table->foreign('home_measure_id')->references('id')->on('home_measures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('foods', function (Blueprint $table) {
            //
        });
    }
}
