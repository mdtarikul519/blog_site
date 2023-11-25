<?php

namespace Database\Seeders;

use App\Models\BlogCommentReplies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCommentReplieySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogCommentReplies::truncate();
        BlogCommentReplies::create([
               'comment'=>'thank you for comment',
        ]);

        DB::table('blog_comment_blog_comment_repliy')->truncate();
        DB::table('blog_comment_blog_comment_repliy')->insert([
            'blog_comment_id' => 1,
            'blog_comment_repliy_id' => 1,
        ]);
    }
}
