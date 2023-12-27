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
        Schema::create('livraisons', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->foreignId('reservation_id')->references('id')->on('reservations')->onDelete('cascade')->onUpdate('cascade');

            $table->foreignId('facturation_id')->references('id')->on('facturations')->onDelete('cascade')->onUpdate('cascade');

            $table->date('date_livraison');

            $table->String('user_adresse');

            $table->foreign('user_adresse')->references('adresse')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->boolean('livré')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livraisons');
    }
};
