<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_item', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cartId');
            $table->foreign('cartId')->references('id')->on('cart')->onDelete('cascade');
            $table->unsignedBigInteger('phoneId');
            $table->foreign('phoneId')->references('id')->on('phone')->onDelete('cascade');
            $table->integer('quantity');
            $table->decimal('totalMoney',15,2);
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
        Schema::dropIfExists('cart_item');
    }
}
