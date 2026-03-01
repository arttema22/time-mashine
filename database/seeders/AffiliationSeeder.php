<?php

namespace Database\Seeders;

use App\Models\Affiliation;
use Illuminate\Database\Seeder;

class AffiliationSeeder extends Seeder
{
    public function run()
    {
        Affiliation::factory()->count(30)->create();
    }
}
