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
        Schema::create('medicals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enfant_id')->constrained();
            $table->json('vaccin')->nullable();
            $table->json('antecedent_medicaux')->nullable();
            $table->json('appareil_medicaux')->nullable();
            $table->json('soin_speciaux')->nullable();
            $table->string('groupe_sanguin')->nullable();
            $table->integer('poids')->nullable();
            $table->integer('taille')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicals');
    }
};
