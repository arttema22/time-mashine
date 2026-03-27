<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\People;
use App\Models\Organization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DdtSeeder extends Seeder
{
    /**
     * ДДТ: группа, участники и события
     */
    public function run(): void
    {
        // === Создаём группу ДДТ ===
        $ddt = Organization::updateOrCreate(
            ['slug' => 'ddt'],
            [
                'name' => 'ДДТ',
                'started_at' => '1980-05-01',
                'ended_at' => null,
                'type' => 'band',
                'description' => 'Советская и российская рок-группа, основанная в Уфе. Лидер и единственный постоянный участник — Юрий Шевчук. Одна из самых влиятельных групп русского рока.',
                'logo_path' => null,
            ]
        );

        $this->command->info('Группа ДДТ создана/обновлена');

        // === События группы ДДТ ===
        $bandEvents = [
            ['title' => 'Основание', 'date' => '1980-05-01', 'category' => 'milestone', 'description' => 'Юрий Шевчук и Ренат Шамсутдинов основали группу в Уфе'],
            ['title' => 'Первый концерт', 'date' => '1981-02-14', 'category' => 'milestone', 'description' => 'Первое выступление в Уфимском институте искусств'],
            ['title' => 'Выход альбома «ДДТ-1»', 'date' => '1982-01-01', 'category' => 'milestone', 'description' => 'Первый магнитоальбом, записанный в Уфе'],
            ['title' => 'Выход альбома «Компромисс»', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Альбом, записанный в Свердловске'],
            ['title' => 'Переезд в Ленинград', 'date' => '1985-07-01', 'category' => 'milestone', 'description' => 'Шевчук переехал в Ленинград, группа стала частью ленинградского рок-клуба'],
            ['title' => 'Выход альбома «Время»', 'date' => '1985-12-01', 'category' => 'milestone', 'description' => 'Первый альбом, записанный в Ленинграде'],
            ['title' => 'Выход альбома «Я получил эту роль»', 'date' => '1987-01-01', 'category' => 'milestone', 'description' => 'Один из самых известных альбомов группы'],
            ['title' => 'Фестиваль в Подольске', 'date' => '1987-09-01', 'category' => 'milestone', 'description' => 'Выступление на первом советском рок-фестивале'],
            ['title' => 'Выход альбома «Оттепель»', 'date' => '1989-01-01', 'category' => 'milestone', 'description' => 'Альбом, записанный в период перестройки'],
            ['title' => 'Выход альбома «Пластун»', 'date' => '1991-01-01', 'category' => 'milestone', 'description' => 'Последний советский альбом группы'],
            ['title' => 'Выход альбома «Актриса Весна»', 'date' => '1992-01-01', 'category' => 'milestone', 'description' => 'Первый постсоветский альбом'],
            ['title' => 'Выход альбома «Это всё...»', 'date' => '1994-01-01', 'category' => 'milestone', 'description' => 'Альбом с хитом «Это всё»'],
            ['title' => 'Выход альбома «Любовь»', 'date' => '1996-01-01', 'category' => 'milestone', 'description' => 'Альбом, посвящённый теме любви'],
            ['title' => 'Выход альбома «Просвистела»', 'date' => '1999-01-01', 'category' => 'milestone', 'description' => 'Альбом, записанный на рубеже веков'],
            ['title' => 'Выход альбома «Единочество. Часть 1»', 'date' => '2002-01-01', 'category' => 'milestone', 'description' => 'Экспериментальный сольный альбом Шевчука'],
            ['title' => 'Выход альбома «Пропавший без вести»', 'date' => '2005-01-01', 'category' => 'milestone', 'description' => 'Альбом о войне в Чечне'],
            ['title' => 'Выход альбома «Прекрасная любовь»', 'date' => '2011-01-01', 'category' => 'milestone', 'description' => 'Альбом, записанный к 30-летию группы'],
            ['title' => 'Выход альбома «История звука»', 'date' => '2017-01-01', 'category' => 'milestone', 'description' => 'Альбом, записанный в новом составе'],
            ['title' => 'Выход альбома «Трансевропа»', 'date' => '2021-01-01', 'category' => 'milestone', 'description' => 'Последний студийный альбом группы'],
            ['title' => 'Концерт на Красной площади', 'date' => '1993-07-01', 'category' => 'milestone', 'description' => 'Бесплатный концерт для 200 000 зрителей'],
            ['title' => '30-летие группы', 'date' => '2010-05-01', 'category' => 'milestone', 'description' => 'Юбилейный тур по России'],
        ];

        foreach ($bandEvents as $eventData) {
            Event::updateOrCreate(
                [
                    'eventable_type' => Organization::class,
                    'eventable_id' => $ddt->id,
                    'title' => $eventData['title'],
                ],
                [
                    'slug' => \Illuminate\Support\Str::slug($eventData['title'] . '-' . $eventData['date'] . '-ddt'),
                    'description' => $eventData['description'] ?? null,
                    'started_at' => $eventData['date'],
                    'ended_at' => null,
                    'category' => $eventData['category'] ?? null,
                    'cover_image' => null,
                ]
            );
        }

        $this->command->info('События ДДТ добавлены');

        // === Участники ДДТ ===
        $members = [
            // --- Основной участник ---
            [
                'name' => 'Юрий Шевчук',
                'slug' => 'yuri-shevchuk',
                'birth_date' => '1957-05-16',
                'death_date' => null,
                'biography' => 'Советский и российский рок-музыкант, лидер группы «ДДТ». Поэт, композитор, продюсер, актёр. Один из основоположников русского рока.',
                'role' => 'Вокал, гитара, автор песен',
                'joined' => '1980-05-01',
                'left' => null,
                'events' => [
                    ['title' => 'Родился', 'date' => '1957-05-16', 'category' => 'milestone', 'description' => 'Родился в селе Майкоп, Казахская ССР, в семье офицера'],
                    ['title' => 'Переезд в Уфу', 'date' => '1970-01-01', 'category' => 'milestone', 'description' => 'Семья переехала в Уфу, Башкирия'],
                    ['title' => 'Окончил художественное училище', 'date' => '1977-01-01', 'category' => 'milestone', 'description' => 'Закончил Уфимское училище искусств по специальности художник-оформитель'],
                    ['title' => 'Создание ДДТ', 'date' => '1980-05-01', 'category' => 'milestone', 'description' => 'Основал группу ДДТ вместе с Ренатом Шамсутдиновым'],
                    ['title' => 'Переезд в Ленинград', 'date' => '1985-07-01', 'category' => 'milestone', 'description' => 'Переехал в Ленинград, стал членом Ленинградского рок-клуба'],
                    ['title' => 'Брак с Эльмирой', 'date' => '1980-01-01', 'category' => 'milestone', 'description' => 'Первая женитьба'],
                    ['title' => 'Рождение сына Артёма', 'date' => '1981-01-01', 'category' => 'milestone', 'description' => 'Родился первый сын'],
                    ['title' => 'Развод', 'date' => '1986-01-01', 'category' => 'milestone', 'description' => 'Развёлся с первой женой'],
                    ['title' => 'Брак с Фатимой', 'date' => '1990-01-01', 'category' => 'milestone', 'description' => 'Женитьба на Фатиме Фаликовой'],
                    ['title' => 'Рождение дочери Феофании', 'date' => '1992-01-01', 'category' => 'milestone', 'description' => 'Родилась дочь'],
                    ['title' => 'Развод с Фатимой', 'date' => '2010-01-01', 'category' => 'milestone', 'description' => 'Развёлся после 20 лет брака'],
                    ['title' => 'Брак с Еленой', 'date' => '2013-01-01', 'category' => 'milestone', 'description' => 'Женитьба на Елене'],
                    ['title' => 'Концерт на Красной площади', 'date' => '1993-07-01', 'category' => 'milestone', 'description' => 'Бесплатный концерт для 200 000 зрителей в Москве'],
                    ['title' => 'Премия «Триумф»', 'date' => '1995-01-01', 'category' => 'milestone', 'description' => 'Получил независимую премию «Триумф»'],
                    ['title' => 'Орден «За заслуги перед Отечеством»', 'date' => '2007-01-01', 'category' => 'milestone', 'description' => 'Награждён орденом IV степени'],
                    ['title' => 'Протест против войны', 'date' => '2022-03-01', 'category' => 'milestone', 'description' => 'Выступил против военных действий'],
                ],
            ],

            // --- Другие участники ===
            [
                'name' => 'Константин Шумайлов',
                'slug' => 'konstantin-shumaylov',
                'birth_date' => '1962-01-01',
                'death_date' => null,
                'biography' => 'Гитарист группы ДДТ с 1980 года. Один из основателей группы вместе с Юрием Шевчуком.',
                'role' => 'Гитара',
                'joined' => '1980-05-01',
                'left' => '1983-01-01',
                'events' => [
                    ['title' => 'Родился', 'date' => '1962-01-01', 'category' => 'milestone', 'description' => 'Родился в Уфе'],
                    ['title' => 'Создание ДДТ', 'date' => '1980-05-01', 'category' => 'milestone', 'description' => 'Стал одним из основателей группы'],
                    ['title' => 'Уход из ДДТ', 'date' => '1983-01-01', 'category' => 'milestone', 'description' => 'Покинул группу'],
                ],
            ],
            [
                'name' => 'Ренат Шамсутдинов',
                'slug' => 'renat-shamsutdinov',
                'birth_date' => '1960-01-01',
                'death_date' => null,
                'biography' => 'Барабанщик, один из основателей группы ДДТ. Участвовал в записи первых альбомов.',
                'role' => 'Ударные',
                'joined' => '1980-05-01',
                'left' => '1985-01-01',
                'events' => [
                    ['title' => 'Родился', 'date' => '1960-01-01', 'category' => 'milestone', 'description' => 'Родился в Уфе'],
                    ['title' => 'Создание ДДТ', 'date' => '1980-05-01', 'category' => 'milestone', 'description' => 'Соосновал группу вместе с Шевчуком'],
                    ['title' => 'Уход из ДДТ', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Покинул группу перед переездом в Ленинград'],
                ],
            ],
            [
                'name' => 'Владимир Сигачёв',
                'slug' => 'vladimir-sigachev',
                'birth_date' => '1961-01-01',
                'death_date' => null,
                'biography' => 'Гитарист ДДТ в конце 1980-х. Участвовал в записи альбома «Я получил эту роль».',
                'role' => 'Гитара',
                'joined' => '1986-01-01',
                'left' => '1990-01-01',
                'events' => [
                    ['title' => 'Родился', 'date' => '1961-01-01', 'category' => 'milestone', 'description' => 'Родился в Ленинграде'],
                    ['title' => 'Приход в ДДТ', 'date' => '1986-01-01', 'category' => 'milestone', 'description' => 'Присоединился к группе'],
                    ['title' => 'Запись «Я получил эту роль»', 'date' => '1987-01-01', 'category' => 'milestone', 'description' => 'Участвовал в записи культового альбома'],
                    ['title' => 'Уход из ДДТ', 'date' => '1990-01-01', 'category' => 'milestone', 'description' => 'Покинул группу'],
                ],
            ],
            [
                'name' => 'Николай Мельников',
                'slug' => 'nikolay-melnikov',
                'birth_date' => '1960-01-01',
                'death_date' => '2016-01-01',
                'biography' => 'Гитарист ДДТ с 1990 года. Участвовал в записи большинства альбомов 1990-х и 2000-х.',
                'role' => 'Гитара',
                'joined' => '1990-01-01',
                'left' => '2016-01-01',
                'events' => [
                    ['title' => 'Родился', 'date' => '1960-01-01', 'category' => 'milestone', 'description' => 'Родился в Ленинграде'],
                    ['title' => 'Приход в ДДТ', 'date' => '1990-01-01', 'category' => 'milestone', 'description' => 'Присоединился к группе'],
                    ['title' => 'Запись «Актриса Весна»', 'date' => '1992-01-01', 'category' => 'milestone', 'description' => 'Участвовал в записи альбома'],
                    ['title' => 'Смерть', 'date' => '2016-01-01', 'category' => 'milestone', 'description' => 'Умер после тяжёлой болезни'],
                ],
            ],
            [
                'name' => 'Вадим Курылёв',
                'slug' => 'vadim-kurylev',
                'birth_date' => '1965-01-01',
                'death_date' => null,
                'biography' => 'Бас-гитарист ДДТ с 1990 года. Один из самых долгоиграющих участников группы.',
                'role' => 'Бас-гитара',
                'joined' => '1990-01-01',
                'left' => null,
                'events' => [
                    ['title' => 'Родился', 'date' => '1965-01-01', 'category' => 'milestone', 'description' => 'Родился в Ленинграде'],
                    ['title' => 'Приход в ДДТ', 'date' => '1990-01-01', 'category' => 'milestone', 'description' => 'Присоединился к группе'],
                    ['title' => 'Запись «Актриса Весна»', 'date' => '1992-01-01', 'category' => 'milestone', 'description' => 'Первый альбом с ДДТ'],
                ],
            ],
            [
                'name' => 'Игорь Тихомиров',
                'slug' => 'igor-tikhomirov',
                'birth_date' => '1962-01-01',
                'death_date' => null,
                'biography' => 'Бас-гитарист ДДТ в 1980-х. Участвовал в записи ранних ленинградских альбомов.',
                'role' => 'Бас-гитара',
                'joined' => '1985-01-01',
                'left' => '1990-01-01',
                'events' => [
                    ['title' => 'Родился', 'date' => '1962-01-01', 'category' => 'milestone', 'description' => 'Родился в Ленинграде'],
                    ['title' => 'Приход в ДДТ', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Присоединился к группе после переезда в Ленинград'],
                    ['title' => 'Уход из ДДТ', 'date' => '1990-01-01', 'category' => 'milestone', 'description' => 'Покинул группу'],
                ],
            ],
            [
                'name' => 'Александр Бровко',
                'slug' => 'alexander-brovko',
                'birth_date' => '1966-01-01',
                'death_date' => null,
                'biography' => 'Гитарист ДДТ с 2016 года. Заменил Николая Мельникова.',
                'role' => 'Гитара',
                'joined' => '2016-01-01',
                'left' => null,
                'events' => [
                    ['title' => 'Родился', 'date' => '1966-01-01', 'category' => 'milestone', 'description' => 'Родился в Ленинграде'],
                    ['title' => 'Приход в ДДТ', 'date' => '2016-01-01', 'category' => 'milestone', 'description' => 'Заменил Николая Мельникова'],
                    ['title' => 'Запись «История звука»', 'date' => '2017-01-01', 'category' => 'milestone', 'description' => 'Участвовал в записи альбома'],
                ],
            ],
            [
                'name' => 'Алексей Федичев',
                'slug' => 'alexey-fedichev',
                'birth_date' => '1968-01-01',
                'death_date' => null,
                'biography' => 'Гитарист ДДТ. Участвует в группе с 2000-х годов.',
                'role' => 'Гитара',
                'joined' => '2000-01-01',
                'left' => null,
                'events' => [
                    ['title' => 'Родился', 'date' => '1968-01-01', 'category' => 'milestone', 'description' => 'Родился в Санкт-Петербурге'],
                    ['title' => 'Приход в ДДТ', 'date' => '2000-01-01', 'category' => 'milestone', 'description' => 'Присоединился к группе'],
                ],
            ],
            [
                'name' => 'Павел Борисов',
                'slug' => 'pavel-borisov',
                'birth_date' => '1970-01-01',
                'death_date' => null,
                'biography' => 'Ударник ДДТ с 1990-х годов.',
                'role' => 'Ударные',
                'joined' => '1995-01-01',
                'left' => null,
                'events' => [
                    ['title' => 'Родился', 'date' => '1970-01-01', 'category' => 'milestone', 'description' => 'Родился в Санкт-Петербурге'],
                    ['title' => 'Приход в ДДТ', 'date' => '1995-01-01', 'category' => 'milestone', 'description' => 'Присоединился к группе'],
                ],
            ],
            [
                'name' => 'Дмитрий Кегр',
                'slug' => 'dmitry-kegr',
                'birth_date' => '1972-01-01',
                'death_date' => null,
                'biography' => 'Клавишник ДДТ. Участвует в концертных выступлениях.',
                'role' => 'Клавишные',
                'joined' => '2000-01-01',
                'left' => null,
                'events' => [
                    ['title' => 'Родился', 'date' => '1972-01-01', 'category' => 'milestone', 'description' => 'Родился в Санкт-Петербурге'],
                    ['title' => 'Приход в ДДТ', 'date' => '2000-01-01', 'category' => 'milestone', 'description' => 'Присоединился к группе'],
                ],
            ],
        ];

        // Сохраняем участников
        foreach ($members as $member) {
            $person = People::updateOrCreate(
                ['slug' => $member['slug']],
                [
                    'name' => $member['name'],
                    'birth_date' => $member['birth_date'],
                    'death_date' => $member['death_date'],
                    'biography' => $member['biography'],
                    'photo_path' => null,
                ]
            );

            // Добавляем связь с ДДТ
            DB::table('affiliations')->updateOrInsert(
                [
                    'people_id' => $person->id,
                    'organization_id' => $ddt->id,
                ],
                [
                    'role' => $member['role'],
                    'started_at' => $member['joined'],
                    'ended_at' => $member['left'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );

            // Добавляем события жизни
            foreach ($member['events'] as $eventData) {
                Event::updateOrCreate(
                    [
                        'eventable_type' => People::class,
                        'eventable_id' => $person->id,
                        'title' => $eventData['title'],
                    ],
                    [
                        'slug' => \Illuminate\Support\Str::slug($eventData['title'] . '-' . $eventData['date'] . '-' . $person->slug),
                        'description' => $eventData['description'] ?? null,
                        'started_at' => $eventData['date'],
                        'ended_at' => null,
                        'category' => $eventData['category'] ?? null,
                        'cover_image' => null,
                    ]
                );
            }

            $this->command->info("Добавлен: {$member['name']}");
        }

        $this->command->info('DdtSeeder завершён успешно!');
    }
}
