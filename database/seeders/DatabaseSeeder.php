<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Comment::factory(100)->create();
        \App\Models\Image::factory(100)->create();
        \App\Models\Video::factory(100)->create();
        \App\Models\Tag::factory(10)->create();
        \App\Models\Post::factory(100)->create();

        // post_tag table has no Model so to seed it we need our own logic
        for ($i = 0; $i < 100; $i++) {
            DB::table('post_tag')->insertOrIgnore([
                'post_id' => mt_rand(1, 100),
                'tag_id' => mt_rand(1, 10),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
