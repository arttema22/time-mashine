<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\People;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {
        $eventableType = $this->faker->randomElement([People::class, Organization::class]);
        $eventableId = $eventableType::factory();

        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'started_at' => $this->faker->dateTimeBetween('-50 years', 'now'),
            'eventable_type' => $eventableType,
            'eventable_id' => $eventableId,
            'category' => $this->faker->randomElement(['formation', 'album', 'tour', 'award', 'event', 'milestone']),
            'cover_image' => $this->faker->optional()->imageUrl(800, 400),
        ];
    }
}
