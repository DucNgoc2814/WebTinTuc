<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Media;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $categories = Category::pluck('id')->toArray();
        $users = User::pluck('id')->toArray();
        $post = Post::pluck('id')->toArray();
        for ($i = 0; $i < 100; $i++) {


            Media::insert([
                'url' => 'https://example.com/image' . $i . '.jpg',
                'mime_id' => $i+1,
                'mime_type' => 'post',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
