<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('categories')->truncate();

    $categ = [[
      'name' => 'Category Test',
      'description' => 'Category Description'
    ],
    [
      'name' => 'Category Test 2',
      'description' => 'Category Description 2'
    ],
    [
      'name' => 'Category Test 3',
      'description' => 'Category Description 3'
    ],[
      'name' => 'Category Test 4',
      'description' => 'Category Description 4'
    ],[
      'name' => 'Category Test 5',
      'description' => 'Category Description 5'
    ],[
      'name' => 'Category Test 6',
      'description' => 'Category Description 6'
    ],[
      'name' => 'Category Test 7',
      'description' => 'Category Description 7'
    ]];
    DB::table('categories')->insert($categ);
  }
}
