<?php

namespace Database\Seeders;


use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(10)->create();

        Post::all()->each(function ($post) {
            $randomUser = DB::table('users')
                ->inRandomOrder()
                ->first();

            $post->user_id = $randomUser->id;
        });
    }
}
