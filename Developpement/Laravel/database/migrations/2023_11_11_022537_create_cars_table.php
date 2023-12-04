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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->String('nom');
            $table->string('Modele');
            $table->date('date_creation');
            $table->integer('prix');
            $table->integer('vitesse');
            $table->integer('plaque');
            $table->string('img_path');
            $table->integer('numero_chassis');
            $table->boolean('disponible')->default('true');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
