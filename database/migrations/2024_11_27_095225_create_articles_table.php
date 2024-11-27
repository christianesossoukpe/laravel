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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');          // Titre de l'article
            $table->string('image_path');     // Chemin de l'image associée à l'article
            $table->text('summary');          // Résumé de l'article
            $table->string('file_path', 512); // Ajouter la colonne file_path avec une longueur de 512 caractères
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
