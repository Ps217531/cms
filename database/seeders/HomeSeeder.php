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
  }
}
