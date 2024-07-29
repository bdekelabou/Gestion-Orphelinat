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
        Schema::create('medical', function (Blueprint $table) {
            $table->id();
            $table->string('antécédents_familiaux');
            $table->string('vaccinations');
            $table->string('maladies_antérieures'); 
            $table->string(' examen_physique');
            $table->string('etat_mental');
            $table->string('autres_examens');
            $table->string('appareils_medicaux');
            $table->string('soins_speciaux');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical');
    }
};
