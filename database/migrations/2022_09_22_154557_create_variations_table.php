<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('product_id');
            $table->string('title');
            $table->integer('price')->unsigned()->default(0);
            $table->string('type');
            $table->string('sku')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable(); // black, 10, 20, 30
            $table->integer('order')->nullable();

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
        Schema::dropIfExists('variations');
    }
}
