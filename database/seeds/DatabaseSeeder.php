<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
            // Disable all mass assignment restrictions



        $this->call(CustomersTableSeeder::class);

        // Re enable all mass assignment restrictions

    }
}
