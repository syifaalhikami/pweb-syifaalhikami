<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Post::create([
            'name' =>'Syifa',
            'email' => 'Syifa@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' =>'Amang boy',
            'slug' => 'Amang'

        ]);

        Post::create([
            'name' =>'Personal',
            'slug' => 'personal',

        ]);

         Post::create([
            'title' =>'Judul 1',
            'slug' => 'Judul 1',
            'excerpt' => 'Oke',
            'body' => 'Okeeee',
            'category_id' => 1,
            'user_id' => 1
        ]);
    }
}