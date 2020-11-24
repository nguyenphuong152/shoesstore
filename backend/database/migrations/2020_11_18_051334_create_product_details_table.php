<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_product');
            $table->foreign('id_product')->references('id')->on('products');
            $table->float('price');
            $table->float('cost');
            $table->unsignedBigInteger('id_color');
            $table->foreign('id_color')->references('id')->on('colors');
            $table->unsignedBigInteger('id_size');
            $table->foreign('id_size')->references('id')->on('sizes');
            $table->unsignedBigInteger('id_product_cata');
            $table->foreign('id_product_cata')->references('id')->on('product_catalogs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_details');
    }
}
