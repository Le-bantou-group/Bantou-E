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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id')->nullable();
            $table->foreign('users_id')->references('id')->on('users');
            $table->unsignedBigInteger('produits_id')->nullable();
            $table->foreign('produits_id')->references('id')->on('produits');
            $table->integer('total_prix');
            $table->string('statut')->default('en attente');
            $table->longText('nom');
            $table->longText('email');
            $table->longText('pays');
            $table->longText('numero');
            $table->longText('modeLivraison');
            $table->longText('adress');
            $table->longText('ville');
            $table->longText('code');   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};