<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cocktails', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('suggested_glass');
            $table->boolean('is_alcoholic');
            $table->string('instructions');
            $table->string('ingredient1');
            $table->string('ingredient2');
            $table->string('ingredient3');
            $table->string('ingredient4');
            $table->string('ingredient5');
            $table->string('ingredient6');
            $table->string('ingredient7');
            $table->string('ingredient8');
            $table->string('measure1');
            $table->string('measure2');
            $table->string('measure3');
            $table->string('measure4');
            $table->string('measure5');
            $table->string('measure6');
            $table->string('measure7');
            $table->string('measure8');
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
        Schema::dropIfExists('cocktails');
    }
};
