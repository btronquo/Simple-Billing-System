<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaiementStatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paiement_states')->insert([
            [
                'status_id' => 1,
                'status_text' => 'En cours'
            ],
            [
                'status_id' => 2,
                'status_text' => 'Attente Paiement'
            ],
            [
                'status_id' => 3,
                'status_text' => 'Annulé'
            ]
        ]);
    }
}
