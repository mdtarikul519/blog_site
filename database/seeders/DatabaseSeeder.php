<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

 use Database\Seeders\BlogCategoriesSeeder;
 use Database\Seeders\BlogCommentReplieySeeder;
 use Database\Seeders\BlogCommentSeeder;
 use Database\Seeders\BlogMetaSeeder;
 use Database\Seeders\BlogsSeeder;
 use Database\Seeders\BlogTagSeeder;
 use Database\Seeders\BlogvideoLinkSeeder;
 use Database\Seeders\BlogviewSeeder;
 use Database\Seeders\BlogWriterSeeder;

 


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
           // UserSeeder::class,
            // ExtraUserSeeder::class,
            
            BlogCategoriesSeeder::class,
            BlogCommentReplieySeeder::class,
            BlogCommentSeeder::class,
            BlogMetaSeeder::class,
            BlogsSeeder::class,
            BlogTagSeeder::class,
            BlogvideoLinkSeeder::class,
            BlogviewSeeder::class,
            BlogWriterSeeder::class,
        ]);
    }
}
