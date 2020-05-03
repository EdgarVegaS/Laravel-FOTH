<?php

use Illuminate\Database\Seeder;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('favorites')->truncate();
      DB::table('favorites')->insert([
        'name' => 'Favorite Test',
        'movie_id' => 1,
        'user_id' => 1,
      ]);
    }
}
