<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Country;
use App\Models\City;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Country::create(['name' => 'United Kingdom']);
        Country::create(['name' => 'Indonesia']);

        City::create(['name' => 'London', 'country_id' => 1]);
        City::create(['name' => 'Liverpool', 'country_id' => 1]);
        City::create(['name' => 'Leicester', 'country_id' => 1]);
        City::create(['name' => 'Jakarta', 'country_id' => 2]);
        City::create(['name' => 'Bandung', 'country_id' => 2]);
        City::create(['name' => 'Surabaya', 'country_id' => 2]);

        Tag::create(['name' => 'PHP', 'slug' => 'php']);
        Tag::create(['name' => 'Java', 'slug' => 'java']);
        Tag::create(['name' => 'Python', 'slug' => 'python']);
    }
}
