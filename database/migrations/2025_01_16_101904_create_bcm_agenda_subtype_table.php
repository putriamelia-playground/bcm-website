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
        Schema::create('bcm_agenda_subtype', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bcm_agenda_id');
            $table->unsignedBigInteger('bcm_service_subtype_id');
            $table->foreign('bcm_agenda_id')->references('id')->on('bcm_agendas')->onDelete('cascade');
            $table->foreign('bcm_service_subtype_id')->references('id')->on('bcm_service_subtypes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bcm_agenda_subtype');
    }
};
