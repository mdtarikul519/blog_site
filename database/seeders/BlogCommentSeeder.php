<?php

namespace Database\Seeders;

use App\Models\BlogComments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogComments::truncate();
        BlogComments::create([
               'blog_id'=>'1',
               'user_id'=>'1',
               'comment'=>'this is a good post',
        ]);
    }
}
