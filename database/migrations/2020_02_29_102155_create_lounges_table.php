<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoungesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lounges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lounge_name');
            $table->string('location');
            $table->string('img');
            $table->string('price');
            $table->string('max_num');
            $table->string('max_num_hour');
            $table->string('ameniti')->nullable();
            $table->string('opening_hour_from')->nullable();
            $table->string('opening_hour_to')->nullable();
            $table->string('days')->nullable();
            $table->text('condition');
            $table->text('overview');
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
        Schema::dropIfExists('lounges');
    }
}
