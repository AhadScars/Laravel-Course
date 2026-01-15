<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
          \App\Models\User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // keep two handcrafted examples
        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'djs@gmail.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'We are looking for a senior Laravel developer to join our team and'
        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Tech Solutions',
        //     'location' => 'New York, NY',
        //     'email' => 'techsolutions@gmail.com',
        //     'website' => 'https://www.techsolutions.com',
        //     'description' => 'We are looking for a full-stack engineer to join our team and'
        // ]);



        Listing::factory(5)->create();

    }
}
