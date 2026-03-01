<?php

namespace Database\Factories;

use App\Models\People;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PeopleFactory extends Factory
{
    protected $model = People::class;

    public function definition()
    {
        $name = $this->faker->name;
        return [
            'name' => $this->faker->name,
            'slug' => Str::slug($this->faker->name),
            'birth_date' => $this->faker->date(),
            'death_date' => $this->faker->optional(0.3)->date(),
            'biography' => $this->faker->paragraphs(3, true),
            'photo_path' => $this->faker->optional()->imageUrl(400, 400, 'people'),
        ];
    }
}
