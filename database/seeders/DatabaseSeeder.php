<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            Post::create([
                'author_id' => rand(1,10),
                'title' => $faker->text(20),
                'content' => $faker->text,
            ]);

            Comment::create([
                'post_id' => rand(1,10),
                'reply' => $faker->text,
            ]);
        }


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
