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
        Schema::create('post_tags', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('post_id');        // -> Связь один-ко-многим.  
            $table->unsignedBigInteger('tag_id');        // -> Связь один-ко-многим.
            
            //IDX
            $table->index('post_id', 'post_tag_post_idx');      // Таблиыца Post
            $table->index('tag_id', 'post_tag_tag_idx');       // Таблиыца Tag

            //FK
            $table->foreign('post_id', 'post_tag_post_fk')->on('posts')->references('id');           //   post_id соответствует колонке id в таблице posts
            $table->foreign('tag_id', 'post_tag_tag_fk')->on('tags')->references('id');              //   tag_id  соответствует колонке id в таблице tags
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tags');
    }
};
