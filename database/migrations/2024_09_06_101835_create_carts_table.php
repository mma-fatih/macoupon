<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('phone')->nullable();
            $table->string('map_lath')->nullable();
            $table->string('map_long')->nullable();
            $table->decimal('discount', 8, 2)->nullable();
            $table->boolean('menu')->default(0);
            $table->boolean('brand_like')->default(0);
            $table->string('category')->nullable();
            $table->integer('position')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamp('created_at')->nullable(); 
            $table->timestamp('updated_at')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
}