<?php

namespace Database\Seeders;

use App\Models\BlogVideoLinks;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogvideoLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogVideoLinks::truncate();
        BlogVideoLinks::create([
               'blog_id'=>'1',
               'video_link'=>'https://www.youtube.com/watch?v=nwDoyfxg9cM',
              
        ]);
    }
}
