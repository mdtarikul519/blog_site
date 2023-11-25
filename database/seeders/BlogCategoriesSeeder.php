<?php

namespace Database\Seeders;

use App\Models\BlogCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogCategories::truncate();
        BlogCategories::create([
            'title' => 'Programming',
            'image' => 'uploads/blog/babr.png',

        ]);

        BlogCategories::create([
            'title' => 'web design',
            'image' => 'uploads/blog/babr.png',

        ]);

        BlogCategories::create([
            'title' => 'degital marketing',
            'image' => 'uploads/blog/eeu.png',

        ]);

        DB::table('blogs_blogs_category')->truncate();
        DB::table('blogs_blogs_category')->insert([
            'blogs_categories_id' => 1,
            'blogs_id' => 1,
        ]);
        DB::table('blogs_blogs_category')->insert([
            'blogs_categories_id' => 2,
            'blogs_id' => 2,
        ]);
        DB::table('blogs_blogs_category')->insert([
            'blogs_categories_id' => 3,
            'blogs_id' => 3,
        ]);
    }
}
