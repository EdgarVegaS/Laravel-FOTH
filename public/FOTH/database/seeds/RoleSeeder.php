<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->truncate();
      DB::table('roles')->insert([
        'name' => 'Role Test',
      ]);
    }
}
