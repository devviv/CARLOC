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
        Schema::create('facturations', function (Blueprint $table) {
            $table->id();

            $table->string('user_nom')->references('name')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->string('user_adresse')->references('adresse')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->string('user_telephone')->references('telephone')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->string('user_email')->references('email')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->string('car_nom')->references('nom')->on('cars')->onDelete('cascade')->onUpdate('cascade');

            $table->string('car_modele')->references('modele')->on('cars')->onDelete('cascade')->onUpdate('cascade');

            $table->string('paiement_prix')->references('prix')->on('paiements')->onDelete('cascade')->onUpdate('cascade');

            $table->date('paiement_date')->references('created_at')->on('paiements')->onDelete('cascade')->onUpdate('cascade');

            $table->foreignId('reservation_id')->references('id')->on('reservations')->onDelete('cascade')->onUpdate('cascade');

            $table->date('reservation_findate')->references('date_retour')->on('reservations')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('montant_total');

            $table->integer('remise');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturations');
    }
};
