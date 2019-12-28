<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Boris Tronquoy',
                'email' => 'demo@example.com',
                'password' => '$2y$10$t18aXvsylkySLMXNThByQuI.K/pSU5UV1nifSArbVarPiHpXu2kK6' //password123
            ]
        ]);
    }
}
