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
        Schema::create('bcm_agendas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bcm_service_type_id')->constrained();
            $table->string('agenda_name')->unique();
            $table->date('agenda_date')->nullable();
            $table->string('agenda_desc')->nullable();
            $table->string('agenda_pamphlet')->nullable();
            $table->integer('sort_order')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bcm_agendas');
    }
};
