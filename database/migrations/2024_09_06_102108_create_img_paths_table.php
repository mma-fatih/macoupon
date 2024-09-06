<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImgPathTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_path', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cart_id'); // Cart ile ilişki için cart_id sütunu
            $table->string('url');
            $table->string('name');
            $table->timestamps(); // created_at ve updated_at sütunları
            
            // Yabancı anahtar (foreign key) ekliyoruz
            $table->foreign('cart_id')->references('id')->on('cart')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('img_path');
    }
}