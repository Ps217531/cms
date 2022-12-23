<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    DB::table('headers')->insert([
      'title' => 'Header',
      'published' => 1,
    ]);


    DB::table('footers')->insert([
      'title' => 'Footer',
      'published' => 1,
    ]);


    DB::table('homepages')->insert([
      'title' => 'Home',
      'published' => 1,
      'footer_id' => 1,
      'header_id' => 1,
    ]);

    DB::table('news')->insert([
      'title' => 'News',
      'published' => 1,
      'footer_id' => 1,
      'header_id' => 1,
    ]);

    DB::table('categories')->insert([
      'name' => 'oorlog',
    ]);
    DB::table('categories')->insert([
      'name' => 'politiek',
    ]);
    DB::table('categories')->insert([
      'name' => 'onzin',
    ]);
    DB::table('categories')->insert([
      'name' => 'event',
    ]);
    DB::table('categories')->insert([
      'name' => 'sport',
    ]);
    DB::table('categories')->insert([
      'name' => 'kunst',
    ]);
    DB::table('categories')->insert([
      'name' => 'muziek',
    ]);
    DB::table('categories')->insert([
      'name' => 'film',
    ]);
    DB::table('categories')->insert([
      'name' => 'boek',
    ]);
    DB::table('categories')->insert([
      'name' => 'theater',
    ]);
    DB::table('categories')->insert([
      'name' => 'kunst',
    ]);
    
  }
}
