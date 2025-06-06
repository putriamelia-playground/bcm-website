<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bcm_articles', function (Blueprint $table) {
            $table->id();
            $table->string('article_slug')->unique();
            $table->string('article_title')->nullable();
            $table->date('article_date')->nullable();
            $table->text('article_desc')->nullable();
            $table->string('article_image')->nullable();
            $table->integer('sort_order')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bcm_articles');
    }
};
