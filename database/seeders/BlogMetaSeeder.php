<?php

namespace Database\Seeders;

use App\Models\BlogMeta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogMetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // BlogMeta::truncate();
        BlogMeta::create([
            'blog_id'=>'1',
            'title'=>'Learn and Master Python in a Month',
            'description'=>'Remember, one month has plenty of time. If you can spend 6–7hours every day. You will finish much more than you think.',
            'keywords'=>'Master,Learn,Python',
            'image' => 'uploads/blog/babr.png',
            'image_alter_text'=>'Learn and Master Python in a Month',
            'image_title'=>'tarek.jpg',

       ]);
    }
}
