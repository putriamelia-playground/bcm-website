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
        Schema::create('bcm_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bcm_agenda_id')->constrained();
            $table->string('participant_name')->nullable();
            $table->string('participant_email')->nullable();
            $table->string('company_name')->nullable();
            $table->string('participant_orgunit')->nullable();
            $table->string('company_address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('company_email')->nullable();
            $table->boolean('privacy_agreement')->nullable();
            $table->boolean('email_agreement')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bcm_forms');
    }
};
