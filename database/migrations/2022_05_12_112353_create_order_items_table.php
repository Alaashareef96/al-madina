<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->string('brand');
            $table->string('size');
            $table->string('taste');
            $table->string('qty');
            $table->float('price',8,2);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
