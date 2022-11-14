<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customerId');
            $table->foreign('customerId')->references('id')->on('customer')->onDelete('cascade');
            $table->text('orderCode');
            $table->integer('totalQuantity');
            $table->decimal('totalPrice',15,2);
            $table->unsignedBigInteger('paymentId');
            $table->foreign('paymentId')->references('id')->on('payment_method');
            $table->unsignedBigInteger('shipId');
            $table->foreign('shipId')->references('id')->on('ship_method')->onDelete('cascade');
            $table->text('noteMess');
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
        Schema::dropIfExists('order');
    }
}
