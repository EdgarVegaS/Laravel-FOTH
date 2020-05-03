<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->truncate();
      DB::table('users')->insert([
        'first_name' => 'User',
        'last_name' => 'Test',
        'email' => 'test@test.cl',
        'password' => '1234',
        'role_id' => 1,
      ]);
    }
}
