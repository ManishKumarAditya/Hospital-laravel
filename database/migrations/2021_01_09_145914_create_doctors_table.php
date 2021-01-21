<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('contact');
            $table->foreignId('user_id')->constrained();
            $table->string('address');
            $table->string('state');
            $table->string('country');
            $table->string('gender');
            $table->string('dp');
            $table->string('specialist');
            $table->string('treatment');
            $table->string('experience');
            $table->string('designation');
            $table->string('fees');
           
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
        Schema::dropIfExists('doctors');
    }
}
