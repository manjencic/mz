<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        Blog::updateOrCreate(
            ['slug' => 'info/same-title'],
            [
                'title' => 'Same Title',
                'body' => 'This is the blog body.',
                'published_at' => now(),
            ]
        );
    }
}
