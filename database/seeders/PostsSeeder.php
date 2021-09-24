<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();

        Post::create(['title' => 'How to use arrays in js', 'slug' => null, 'body' => '<p>Lorem ipsum this is a test</p>', 'type' => 'brands/js']);
        Post::create(['title' => 'Make an app with vue', 'slug' => null, 'body' => '<p>Lorem ipsum this is a vue test</p>', 'type' => 'brands/vuejs']);
        Post::create(['title' => 'Laravel 101', 'slug' => null, 'body' => '<p>Making an api with laravel</p>', 'type' => 'brands/php']);
        Post::create(['title' => 'Design patterns', 'slug' => null, 'body' => '<p>Body</p>', 'type' => 'briefcase']);
    }
}
