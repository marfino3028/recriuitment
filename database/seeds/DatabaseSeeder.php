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
        DB::table('users')->insert([
           'name' => 'Marfino Hamzah',
           'email'  => 'admin@transisi.id',
           'password'   => bcrypt('transisi'),
           'role' => 'administrator'
        ]);
    }
}
