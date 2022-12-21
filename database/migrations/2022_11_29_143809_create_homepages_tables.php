<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepagesTables extends Migration
{
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->foreignId('header_id')->nullable()->constrained()->onDelete('set null');

            $table->foreignId('footer_id')->nullable()->constrained()->onDelete('set null');
            
            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            $table->string('title', 200)->nullable();

            $table->string('padding')->nullable();

            $table->string('main_color', 10)->nullable();

            // your generated model and form include a description field, to get you started, but feel free to get rid of it if you don't need it
            
            $table->integer('position')->unsigned()->nullable();
            
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('homepage_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'homepage');
        });

        Schema::create('homepage_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'homepage');
        });
    }

    public function down()
    {
        Schema::dropIfExists('homepage_revisions');
        Schema::dropIfExists('homepage_slugs');
        Schema::dropIfExists('homepages');
    }
}
