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
        Schema::create('intervention_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  // Utilisateur qui crée la demande
            $table->unsignedBigInteger('technician_id')->nullable();  // Technicien assigné
            $table->string('title');
            $table->text('description');
            $table->enum('status', ['pending', 'assigned', 'in_progress', 'completed', 'closed'])->default('pending');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('technician_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intervention_requests');
    }
};
