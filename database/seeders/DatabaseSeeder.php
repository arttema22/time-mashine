<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PeopleSeeder::class,
            RockMusiciansSeeder::class,
            RussianRockMusiciansSeeder::class,
            MetallicaSeeder::class,
            DdtSeeder::class,
            RussianEmperorsSeeder::class,
            RussianWritersSeeder::class,
            WorldPhysicistsSeeder::class,
            PeopleLifeEventsSeeder::class,
            GlobalEventsSeeder::class,
            RussianHistoryEventsSeeder::class,
            // OrganizationSeeder::class,
            // AffiliationSeeder::class,
            // EventSeeder::class,
        ]);
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
