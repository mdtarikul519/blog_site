<?php

namespace Database\Seeders;

use App\Models\BlogWriters;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogWriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogWriters::truncate();
        BlogWriters::create([
               'title'=>'tarek',
               'designation'=>'web developer',
               'description'=>'Are you busy recording your YouTube channel or podcast episodes and cant find the time to ALSO write content for your website?',
               'image' =>'uploads/blog/writer.png',           
        ]);

        DB::table('blog_blog_writer')->truncate();
        DB::table('blog_blog_writer')->insert([
            'blog_id' => 1,
            'blog_writer_id' => 1,
        ]);
    }
}
