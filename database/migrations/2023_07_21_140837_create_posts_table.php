<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->unsignedBigInteger('category_id')->nullable();        // -> Связь один-ко-многим. | -> Может не быть категорий.
            
            $table->timestamps();

            $table->index('category_id', 'post_category_idx');            // Привязка таблиц post & category 
            $table->foreign('category_id', 'post_category_fk')->on('categories')->references('id');           //   category_id соответствует колонке id в таблице categories
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
