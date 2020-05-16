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
      $mov=[[
        'name' => 'Movie Test',
        'description' => 'Description Test',
        'url' => 'https://youtu.be/SIPQi2coZo0',
        'category_id' => 1,
      ],[
        'name' => 'Movie Test 2',
        'description' => 'Description Test 2',
        'url' => 'https://youtu.be/SIPQi2coZo0',
        'category_id' => 2,
      ],[
        'name' => 'Movie Test 3',
        'description' => 'Description Test 3',
        'url' => 'https://youtu.be/cCWNbYwEfdw',
        'category_id' => 3,
      ],[
        'name' => 'Movie Test 4',
        'description' => 'Description Test 4',
        'url' => 'https://youtu.be/cCWNbYwEfdw',
        'category_id' => 1,
      ],[
        'name' => 'Movie Test 5',
        'description' => 'Description Test 5',
        'url' => 'https://youtu.be/wsVFmCoykZ4',
        'category_id' => 2,
      ],[
        'name' => 'Movie Test 6',
        'description' => 'Description Test 6',
        'url' => 'https://youtu.be/medNY-mmcb0',
        'category_id' => 3,
      ],[
        'name' => 'Movie Test 7',
        'description' => 'Description Test 7',
        'url' => 'https://youtu.be/medNY-mmcb0',
        'category_id' => 1,
      ],[
        'name' => 'Movie Test 8',
        'description' => 'Description Test 8',
        'url' => 'https://youtu.be/lSpDOagneR4',
        'category_id' => 2,
      ],[
        'name' => 'Movie Test 9',
        'description' => 'Description Test 9',
        'url' => 'https://youtu.be/lSpDOagneR4',
        'category_id' => 3,
      ],[
        'name' => 'Movie Test 10',
        'description' => 'Description Test 10',
        'url' => 'https://youtu.be/o-hzTmeCqN0',
        'category_id' => 1,
      ],[
        'name' => 'Movie Test 11',
        'description' => 'Description Test 11',
        'url' => 'https://youtu.be/o-hzTmeCqN0',
        'category_id' => 2,
      ],[
        'name' => 'Movie Test 12',
        'description' => 'Description Test 12',
        'url' => 'https://youtu.be/oIqGW0B3dKM',
        'category_id' => 3,
      ],[
        'name' => 'Movie Test 13',
        'description' => 'Description Test 13',
        'url' => 'https://youtu.be/oIqGW0B3dKM',
        'category_id' => 1,
      ],[
        'name' => 'Movie Test 14',
        'description' => 'Description Test 14',
        'url' => 'https://youtu.be/dQw4w9WgXcQ',
        'category_id' => 2,
      ],[
        'name' => 'Movie Test 15',
        'description' => 'Description Test 15',
        'url' => 'https://youtu.be/dQw4w9WgXcQ',
        'category_id' => 3,
      ],[
        'name' => 'Movie Test 16',
        'description' => 'Description Test 16',
        'url' => 'https://youtu.be/H3aqR_n3sM4',
        'category_id' => 1,
      ],[
        'name' => 'Movie Test 17',
        'description' => 'Description Test 17',
        'url' => 'https://youtu.be/H3aqR_n3sM4',
        'category_id' => 2,
      ],[
        'name' => 'Movie Test 18',
        'description' => 'Description Test 18',
        'url' => 'https://youtu.be/H3aqR_n3sM4',
        'category_id' => 3,
      ]];
      DB::table('movies')->insert($mov);
    }
}
