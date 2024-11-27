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
        Schema::create('réalisations', function (Blueprint $table) {
            $table->id();
            $table->string('image_principal');
            $table->string('image_sous1');
            $table->string('sous_titre1');
            $table->text('description1');
            $table->string('image_sous2');
            $table->string('sous_titre2');
            $table->text('description2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('réalisations');
    }
};