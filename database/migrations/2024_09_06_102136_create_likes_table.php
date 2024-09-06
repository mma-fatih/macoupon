<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Kullanıcı id
            $table->unsignedBigInteger('cart_id'); // Puanlanan nesne id (cart tablosu ile ilişkilendiriliyor)
            $table->integer('rating')->default(0); // 5 üzerinden yıldız
            $table->timestamps(); // created_at ve updated_at

            // Foreign keys (yabancı anahtarlar)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('cart_id')->references('id')->on('cart')->onDelete('cascade');

            // Her kullanıcı bir nesneye sadece bir kez puan verebilir (benzersiz olacak)
            $table->unique(['user_id', 'cart_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like');
    }
}