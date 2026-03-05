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
        Schema::create('medecin_non_conventionnes', function (Blueprint $table) {
            $table->id();
            $table->string('specialite')->nullable();
            $table->string('praticien'); // Nom de la clinique, du médecin, du labo...
            $table->text('adresse')->nullable();
            $table->string('telephone')->nullable();
            $table->text('accord_tarifaire')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medecin_non_conventionnes');
    }
};
