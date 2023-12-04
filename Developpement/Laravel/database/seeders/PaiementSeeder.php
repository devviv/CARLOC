<?php

namespace Database\Seeders;

use App\Models\Paiement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaiementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $paiements = Paiement::factory()->count(10)->make();
    }
}
