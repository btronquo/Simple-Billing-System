<?php

use Illuminate\Database\Seeder;

class CompagnyTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compagny_types')->insert([
            [
                'type_id' => 1,
                'name' => 'AE'
            ],
            [
                'type_id' => 2,
                'name' => 'SARL'
            ],
            [
                'type_id' => 3,
                'name' => 'SAS'
            ],
            [
                'type_id' => 4,
                'name' => 'EURL'
            ],
            [
                'type_id' => 5,
                'name' => 'SA'
            ],
            [
                'type_id' => 6,
                'name' => 'Publique'
            ]
        ]);
    }
}
