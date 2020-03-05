<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ran_ordr_id');
            $table->integer('package_id')->nullable();
            $table->integer('room_id')->nullable();
             $table->integer('hotel_id')->nullable();
            $table->integer('lounge_id')->nullable();
            $table->integer('pickup_id')->nullable();
            $table->integer('rentCar_id')->nullable();
            $table->integer('user_id');
            $table->string('order_status');
            $table->string('payment_method');
            $table->string('price');
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
        Schema::dropIfExists('orders');
    }
}
