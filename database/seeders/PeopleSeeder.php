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
        // People::factory()->count(20)->create();

        // Организация
        $org = Organization::create([
            'name' => 'The Rolling Stones',
            'slug' => 'the-rolling-stones',
            'founded_date' => '1962-07-12',
            'type' => 'band',
            'description' => 'Легендарная британская рок-группа',
        ]);

        // Человек (Билл Уайман)
        $person = People::create([
            'name' => 'Билл Уайман',
            'slug' => 'bill-wyman',
            'birth_date' => '1936-10-24',
            'death_date' => null,
            'biography' => 'Английский музыкант, бас-гитарист группы The Rolling Stones',
        ]);

        // Связь (Affiliation)
        Affiliation::create([
            'people_id' => $person->id,
            'organization_id' => $org->id,
            'role' => 'Бас-гитарист',
            'started_at' => '1962-01-01',
            'ended_at' => '1993-01-01',
        ]);

        // События
        Event::create([
            'title' => 'Вступление в группу',
            'description' => 'Стал бас-гитаристом The Rolling Stones',
            'occurred_at' => '1962-01-01 12:00:00',
            'eventable_type' => People::class,
            'eventable_id' => $person->id,
            'category' => 'career',
        ]);

        Event::create([
            'title' => 'Уход из группы',
            'description' => 'Официально покинул The Rolling Stones',
            'occurred_at' => '1993-01-01 12:00:00',
            'eventable_type' => People::class,
            'eventable_id' => $person->id,
            'category' => 'career',
        ]);

        // Организация
        $airforce = Organization::create([
            'name' => 'ВВС СССР',
            'slug' => 'ussr-airforce',
            'founded_date' => '1918-01-01',
            'type' => 'military'
        ]);

        // Человек
        $person = People::create([
            'name' => 'Юрий Гагарин',
            'slug' => 'yuri-gagarin',
            'birth_date' => '1934-03-09',
            'death_date' => '1968-03-27',
            'biography' => 'Первый человек в космосе'
        ]);

        // Связь (Affiliation)
        Affiliation::create([
            'people_id' => $person->id,
            'organization_id' => $airforce->id,
            'role' => 'Летчик-космонавт',
            'started_at' => '1955-10-27',
            'ended_at' => '1968-03-27'
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

        // ==================== АЛЕКСАНДР ОВЕЧКИН ====================

        // Организации (хоккейные клубы)
        $dynamoMoscow = Organization::create([
            'name' => 'Динамо Москва',
            'slug' => 'dynamo-moscow',
            'founded_date' => '1946-01-01',
            'dissolved_date' => null,
            'type' => 'hockey_club',
            'description' => 'Хоккейный клуб из Москвы',
        ]);

        $washingtonCapitals = Organization::create([
            'name' => 'Washington Capitals',
            'slug' => 'washington-capitals',
            'founded_date' => '1974-06-11',
            'dissolved_date' => null,
            'type' => 'hockey_club',
            'description' => 'Хоккейный клуб из Вашингтона (NHL)',
        ]);

        $nhl = Organization::create([
            'name' => 'НХЛ (NHL)',
            'slug' => 'nhl',
            'founded_date' => '1917-11-26',
            'dissolved_date' => null,
            'type' => 'league',
            'description' => 'Национальная хоккейная лига',
        ]);


        $russiaNationalTeam = Organization::create([
            'name' => 'Сборная России по хоккею',
            'slug' => 'russia-hockey-team',
            'founded_date' => '1992-01-01',
            'dissolved_date' => null,
            'type' => 'national_team',
            'description' => 'Национальная сборная России по хоккею',
        ]);

        // Человек (Александр Овечкин)
        $ovechkin = People::create([
            'name' => 'Александр Овечкин',
            'slug' => 'alexander-ovechkin',
            'birth_date' => '1985-09-17',
            'death_date' => null,
            'biography' => 'Российский хоккеист, капитан Washington Capitals. Один из лучших бомбардиров в истории НХЛ.',
        ]);

        // Связи (Affiliations)
        Affiliation::create([
            'people_id' => $ovechkin->id,
            'organization_id' => $dynamoMoscow->id,
            'role' => 'Нападающий',
            'started_at' => '2001-09-01',
            'ended_at' => '2005-06-30',
        ]);


        Affiliation::create([
            'people_id' => $ovechkin->id,
            'organization_id' => $washingtonCapitals->id,
            'role' => 'Нападающий, Капитан',
            'started_at' => '2005-10-01',
            'ended_at' => null, // По настоящее время
        ]);

        Affiliation::create([
            'people_id' => $ovechkin->id,
            'organization_id' => $russiaNationalTeam->id,
            'role' => 'Нападающий',
            'started_at' => '2004-01-01',
            'ended_at' => null,
        ]);

        // События (Events)
        Event::create([
            'title' => 'Дебют в КХЛ',
            'description' => 'Первый матч за Динамо Москва',
            'occurred_at' => '2001-09-01 19:00:00',
            'eventable_type' => People::class,
            'eventable_id' => $ovechkin->id,
            'category' => 'career',
        ]);

        Event::create([
            'title' => 'Драфт НХЛ',
            'description' => 'Выбран под 1-м номером Washington Capitals',
            'occurred_at' => '2004-06-26 10:00:00',
            'eventable_type' => People::class,
            'eventable_id' => $ovechkin->id,
            'category' => 'career',
        ]);

        Event::create([
            'title' => 'Дебют в НХЛ',
            'description' => 'Первый матч за Washington Capitals',
            'occurred_at' => '2005-10-05 19:00:00',
            'eventable_type' => People::class,
            'eventable_id' => $ovechkin->id,
            'category' => 'career',
        ]);

        Event::create([
            'title' => 'Первый Харт Трофи',
            'description' => 'Самый ценный игрок НХЛ (первый раз)',
            'occurred_at' => '2008-06-18 10:00:00',
            'eventable_type' => People::class,
            'eventable_id' => $ovechkin->id,
            'category' => 'award',
        ]);

        Event::create([
            'title' => 'Кубок Стэнли',
            'description' => 'Первая победа в Кубке Стэнли с Washington Capitals',
            'occurred_at' => '2018-06-07 20:00:00',
            'eventable_type' => People::class,
            'eventable_id' => $ovechkin->id,
            'category' => 'achievement',
        ]);

        Event::create([
            'title' => '800-я шайба в НХЛ',
            'description' => 'Забросил 800-ю шайбу в регулярных чемпионатах НХЛ',
            'occurred_at' => '2022-03-17 19:00:00',
            'eventable_type' => People::class,
            'eventable_id' => $ovechkin->id,
            'category' => 'milestone',
        ]);


        Event::create([
            'title' => '850-я шайба в НХЛ',
            'description' => 'Забросил 850-ю шайбу в регулярных чемпионатах НХЛ',
            'occurred_at' => '2023-12-23 19:00:00',
            'eventable_type' => People::class,
            'eventable_id' => $ovechkin->id,
            'category' => 'milestone',
        ]);

    }
}
