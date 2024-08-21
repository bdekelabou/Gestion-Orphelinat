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
        Schema::create('scolaires', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enfant_id')->constrained();
            $table->string('niveau');
            $table->string('etablissement');
            $table->string('classe_arrivee');
            $table->string('classe_actuelle');
            $table->boolean('redoublement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scolaires');
    }
};
