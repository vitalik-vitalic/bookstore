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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('brand');
            $table->string('author');
            $table->string('publisher');
            $table->string('rating');
            $table->string('year');
            $table->string('isbn');
            $table->string('weight');
            $table->integer('pages');
            $table->string('code');
            $table->string('availability');
            $table->string('description');
            $table->float('price');
            $table->text('body');
            $table->string('small_body');
            $table->enum('showhide',['0','1'])->default('1');
            $table->integer('catalog_id');
            $table->string('picture');
            $table->integer('user_id');
            $table->string('status');
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
