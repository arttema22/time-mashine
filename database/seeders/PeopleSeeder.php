<?php

namespace Database\Seeders;

use App\Models\Affiliation;
use App\Models\Event;
use App\Models\Organization;
use App\Models\People;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    public function run()
    {
        // Человек
        $person = People::create([
            'name' => 'Юрий Гагарин',
            'slug' => 'yuri-gagarin',
            'birth_date' => '1934-03-09',
            'death_date' => '1968-03-27',
            'biography' => 'Первый человек в космосе'
        ]);
        // Событие (Event)
        Event::create([
            'title' => 'Полет в космос',
            'description' => 'Восток-1',
            'occurred_at' => '1961-04-12 09:07:00',
            'eventable_type' => People::class,
            'eventable_id' => $person->id,
            'category' => 'milestone'
        ]);
    }
}
