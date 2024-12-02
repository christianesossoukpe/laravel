<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Vérifie si la colonne user_id n'existe pas déjà
        if (!Schema::hasColumn('articles', 'user_id')) {
            Schema::table('articles', function (Blueprint $table) {
                $table->foreignId('user_id')->constrained()->after('content')->onDelete('cascade');
            });
        }
    }
    
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            if (Schema::hasColumn('articles', 'user_id')) {
                $table->dropForeign(['user_id']);
                $table->dropColumn('user_id');
            }
        });
    }
};