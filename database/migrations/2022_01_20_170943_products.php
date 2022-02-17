<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
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
            $table->string('lang')->default('en');

            $table->string('name');
            $table->string('desc');
            $table->string('image');
            $table->integer('price');
            $table->integer('sale');
            // $table->integer('sale');
            $table->integer('rate')->default(1);
            $table->integer('quntity');
            $table->integer('descount_Type');
            $table->foreignId('attr_name_id');
            $table->foreignId('attr_value_id');
            $table->foreignId('categorie_id');
            $table->string('slug');

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
