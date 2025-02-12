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
        Schema::create('bcm_service_subtypes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bcm_service_type_id')->constrained();
            $table->string('service_subtype_name')->nullable();
            $table->string('service_subtype_slug')->unique();
            $table->text('service_subtype_desc')->nullable();
            $table->integer('sort_order')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bcm_service_subtypes');
    }
};
