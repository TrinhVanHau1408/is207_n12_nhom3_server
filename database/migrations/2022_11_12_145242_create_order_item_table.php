<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_item', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('orderId');
            $table->foreign('orderId')->references('id')->on('order')->onDelete('cascade');
            $table->unsignedBigInteger('phoneId');
            $table->foreign('phoneId')->references('id')->on('phone')->onDelete('cascade');
            $table->integer('quantity');
            $table->decimal('priceSale',15,2);
            $table->decimal('totalPrice',15,2);
            $table->integer('trash');
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
        Schema::dropIfExists('order_item');
    }
}
