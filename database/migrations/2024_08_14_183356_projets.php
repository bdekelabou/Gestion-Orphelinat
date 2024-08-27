<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description'); 
            $table->integer('budget');
            $table->date('date_debut');
            $table->boolean('statut');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};
