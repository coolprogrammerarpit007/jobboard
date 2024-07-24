<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create(); // will create the 10 dummy users

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'JavaScript,Python,PHP',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, USA',
        //     'email' => 'email@gmail.com',
        //     'website' => 'www.acme.com',
        //     'description' => 'Our Company requires an Experienced and Passionate Software Engineer!'

        // ]);
        Listing::factory(10)->create();
    }
}
