<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('categoryId');
            $table->foreign('categoryId')->references('id')->on('category')->onDelete('cascade');
            $table->string('imgUrl');
            $table->integer('quantity');
            $table->decimal('priceSale', 15, 2);
            $table->text('description');
            $table->unsignedBigInteger('ramId');
            $table->foreign('ramId')->references('id')->on('ram')->onDelete('cascade');
            $table->unsignedBigInteger('romId');
            $table->foreign('romId')->references('id')->on('rom')->onDelete('cascade');
            $table->unsignedBigInteger('colorId');
            $table->foreign('colorId')->references('id')->on('color')->onDelete('cascade');
            $table->string('sim');
            $table->string('screen');
            $table->string('camera');
            $table->integer('ratingStart');
            $table->integer('viewCustomer');
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
        Schema::dropIfExists('phone');
    }
}
