<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('details');
            $table->string('calories');
            $table->string('fats');
            $table->string('protein');
            $table->string('carbohydrate');
            $table->string('vitamin');
            $table->string('price');
            $table->foreignId('brand_id');
            $table->foreignId('size_id');
            $table->foreignId('taste_id');
            $table->foreign('brand_id')->on('categories')->references('id')->onDelete('cascade');
            $table->foreign('size_id')->on('categories')->references('id')->onDelete('cascade');
            $table->foreign('taste_id')->on('categories')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
