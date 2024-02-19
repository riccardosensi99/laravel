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
        Schema::table('articles', function (Blueprint $table) {
            // crea un numero senza segno intero
            $table->unsignedBigInteger('user_id')->dafault(1);
            // questa serve per dire che la colonna user id sarà una foreign key
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            // il vincolo di integrità referenziale indica che si deve mantenere integro tutto il database
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};
