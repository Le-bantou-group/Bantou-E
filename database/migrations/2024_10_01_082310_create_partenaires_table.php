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
        Schema::create('form_partenaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('nomcompany');
            $table->string('image');
            $table->bigInteger('numero');
            $table->string('numerocompany');
            $table->string('pays');
            $table->string('ville');
            $table->string('motif');
            $table->longText('contenu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partenaires');
    }
};