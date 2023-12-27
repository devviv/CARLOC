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
        Schema::create('abonnements', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->foreignId('car_id')->references('id')->on('cars')->onDelete('cascade')->onUpdate('cascade');

            $table->foreignId('reservation_id')->references('id')->on('reservations')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('nbre_jour');

            $table->integer('prix');

            $table->date('date_retour');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abonnements');
    }
};
