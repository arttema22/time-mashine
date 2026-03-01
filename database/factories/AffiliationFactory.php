<?php

namespace Database\Factories;

use App\Models\Affiliation;
use App\Models\People;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

class AffiliationFactory extends Factory
{
    protected $model = Affiliation::class;

    public function definition()
    {
        $startedAt = $this->faker->dateTimeBetween('-50 years', '-5 years');
        $endedAt = $this->faker->optional(0.3)->dateTimeBetween($startedAt, 'now');

        return [
            'people_id' => People::factory(),
            'organization_id' => Organization::factory(),
            'role' => $this->faker->randomElement(['member', 'founder', 'lead vocalist', 'guitarist', 'bassist', 'drummer', 'manager']),
            'started_at' => $startedAt,
            'ended_at' => $endedAt,
        ];
    }
}
