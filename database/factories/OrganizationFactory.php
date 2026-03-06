<?php

namespace Database\Factories;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrganizationFactory extends Factory
{
    protected $model = Organization::class;

    public function definition()
    {
        $name = $this->faker->company;
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'started_at' => $this->faker->date('-50 years'),
            'ended_at' => $this->faker->optional(0.1)->date('-1 years'),
            'type' => $this->faker->randomElement(['band', 'company', 'non-profit', 'government']),
            'description' => $this->faker->paragraphs(3, true),
            'logo_path' => $this->faker->optional()->imageUrl(400, 200, 'business'),
        ];
    }
}
