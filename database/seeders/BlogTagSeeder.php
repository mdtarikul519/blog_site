<?php

namespace Database\Seeders;

use App\Models\BlogTags;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogTags::truncate();
        BlogTags::create([
               'title'=>'Master Python',
               
            ]);

            BlogTags::create([
                'title'=>'Become a Programmer',
                
             ]);

             DB::table('blog_blog_tag')->truncate();
             DB::table('blog_blog_tag')->insert([
                 'blog_id' => 1,
                 'blog_tag_id' => 1,
             ]);
    }
}
