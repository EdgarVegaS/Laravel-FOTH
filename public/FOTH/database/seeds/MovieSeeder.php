<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('movies')->truncate();
      DB::table('movies')->insert([
        'name' => 'Movie Test',
        'description' => 'Description Test',
        'url' => 'Url Test',
        'category_id' => 1,
      ]);
    }
}
