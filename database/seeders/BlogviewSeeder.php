<?php

namespace Database\Seeders;

use App\Models\BlogViews;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogViews::truncate();
        BlogViews::create([
               'blog_id'=>'1',
               'device_ip'=>'123097',
              
        ]);
    }
}
