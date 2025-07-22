<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            PersonTypesTableSeeder::class,
            DocumentTypesTableSeeder::class,
            HowDidYouHearSeeder::class,
            CountriesTableSeeder::class,
            TaxResponsabilitiesTableSeeder::class,
            GenderTableSeeder::class,
            BloodTypesTableSeeder::class,
            DeptosCitiesColombia::class
        ]);
    }
}
