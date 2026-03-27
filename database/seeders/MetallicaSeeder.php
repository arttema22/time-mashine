<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\People;
use App\Models\Organization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetallicaSeeder extends Seeder
{
    /**
     * Metallica: группа, участники и события
     */
    public function run(): void
    {
        // === Создаём группу Metallica ===
        $metallica = Organization::updateOrCreate(
            ['slug' => 'metallica'],
            [
                'name' => 'Metallica',
                'started_at' => '1981-10-28',
                'ended_at' => null,
                'type' => 'band',
                'description' => 'Американская хеви-метал группа, образованная в Лос-Анджелесе. Одна из самых влиятельных метал-групп в истории.',
                'logo_path' => null,
            ]
        );

        $this->command->info('Группа Metallica создана/обновлена');

        // === События группы Metallica ===
        $bandEvents = [
            ['title' => 'Основание', 'date' => '1981-10-28', 'category' => 'milestone', 'description' => 'Ларс Ульрих и Джеймс Хэтфилд основали Metallica в Лос-Анджелесе'],
            ['title' => 'Первый концерт', 'date' => '1982-03-14', 'category' => 'milestone', 'description' => 'Первое выступление в Радио Сити, Анахайм, Калифорния'],
            ['title' => 'Выход No Life \'Til Leather', 'date' => '1982-07-01', 'category' => 'milestone', 'description' => 'Первое демо, распространявшееся на кассетах'],
            ['title' => 'Выход Kill \'Em All', 'date' => '1983-07-25', 'category' => 'milestone', 'description' => 'Дебютный альбом. Продано более 3 млн копий в США'],
            ['title' => 'Выход Ride the Lightning', 'date' => '1984-07-27', 'category' => 'milestone', 'description' => 'Второй альбом. Первый с Клиффом Бёртоном на басу'],
            ['title' => 'Выход Master of Puppets', 'date' => '1986-03-03', 'category' => 'milestone', 'description' => 'Третий альбом. Считается одним из лучших метал-альбомов всех времён'],
            ['title' => 'Выход ...And Justice for All', 'date' => '1988-08-25', 'category' => 'milestone', 'description' => 'Четвёртый альбом. Первый с Джейсоном Ньюстедом'],
            ['title' => 'Выход Metallica (Black Album)', 'date' => '1991-08-12', 'category' => 'milestone', 'description' => 'Пятый альбом. Продано более 16 млн копий только в США'],
            ['title' => 'Выход Load', 'date' => '1996-06-04', 'category' => 'milestone', 'description' => 'Шестой альбом. Изменение стиля в сторону альтернативного рока'],
            ['title' => 'Выход ReLoad', 'date' => '1997-11-18', 'category' => 'milestone', 'description' => 'Седьмой альбом. Продолжение экспериментов со стилем'],
            ['title' => 'Выход S&M', 'date' => '1999-11-23', 'category' => 'milestone', 'description' => 'Концертный альбом с симфоническим оркестром Сан-Франциско'],
            ['title' => 'Выход St. Anger', 'date' => '2003-06-05', 'category' => 'milestone', 'description' => 'Восьмой альбом. Продюсер Боб Рок играл на басу'],
            ['title' => 'Выход Death Magnetic', 'date' => '2008-09-12', 'category' => 'milestone', 'description' => 'Девятый альбом. Возвращение к трэш-металу'],
            ['title' => 'Включение в Зал славы рок-н-ролла', 'date' => '2009-04-04', 'category' => 'milestone', 'description' => 'Metallica включена в Зал славы рок-н-ролла'],
            ['title' => 'Выход Hardwired... to Self-Destruct', 'date' => '2016-11-18', 'category' => 'milestone', 'description' => 'Десятый альбом. Первый альбом с Робертом Трухильо'],
            ['title' => 'Выход 72 Seasons', 'date' => '2023-04-14', 'category' => 'milestone', 'description' => 'Одиннадцатый студийный альбом'],
            ['title' => 'M72 World Tour', 'date' => '2023-04-27', 'category' => 'milestone', 'description' => 'Начало мирового тура в поддержку 72 Seasons'],
        ];

        foreach ($bandEvents as $eventData) {
            Event::updateOrCreate(
                [
                    'eventable_type' => Organization::class,
                    'eventable_id' => $metallica->id,
                    'title' => $eventData['title'],
                ],
                [
                    'slug' => \Illuminate\Support\Str::slug($eventData['title'] . '-' . $eventData['date'] . '-metallica'),
                    'description' => $eventData['description'] ?? null,
                    'started_at' => $eventData['date'],
                    'ended_at' => null,
                    'category' => $eventData['category'] ?? null,
                    'cover_image' => null,
                ]
            );
        }

        $this->command->info('События Metallica добавлены');

        // === Участники Metallica ===
        $members = [
            // --- Текущие участники ---
            [
                'name' => 'Джеймс Хэтфилд (James Hetfield)',
                'slug' => 'james-hetfield',
                'birth_date' => '1963-08-03',
                'death_date' => null,
                'biography' => 'Вокалист, ритм-гитарист и основной автор песен Metallica. Сооснователь группы. Один из величайших метал-вокалистов и гитаристов.',
                'role' => 'Вокал, ритм-гитара',
                'joined' => '1981-10-28',
                'left' => null,
                'events' => [
                    ['title' => 'Родился', 'date' => '1963-08-03', 'category' => 'milestone', 'description' => 'Родился в Дауни, Калифорния, в семье оперной певицы и водителя грузовика'],
                    ['title' => 'Развод родителей', 'date' => '1974-01-01', 'category' => 'milestone', 'description' => 'Родители развелись, когда Джеймсу было 13 лет'],
                    ['title' => 'Смерть матери', 'date' => '1979-12-15', 'category' => 'milestone', 'description' => 'Мать умерла от рака, что сильно повлияло на творчество'],
                    ['title' => 'Создание Metallica', 'date' => '1981-10-28', 'category' => 'milestone', 'description' => 'Основал Metallica вместе с Ларсом Ульрихом'],

                    ['title' => 'Брак с Фрэнкой Голони', 'date' => '1988-01-01', 'category' => 'milestone', 'description' => 'Первая женитьба'],
                    ['title' => 'Рождение дочери Кали', 'date' => '1998-08-01', 'category' => 'milestone', 'description' => 'Родилась первая дочь от Фрэнки'],
                    ['title' => 'Развод', 'date' => '1995-01-01', 'category' => 'milestone', 'description' => 'Развёлся с Фрэнкой Голони'],
                    ['title' => 'Брак с Фрэнкой (повторный)', 'date' => '1997-01-01', 'category' => 'milestone', 'description' => 'Повторная женитьба на Фрэнке'],
                    ['title' => 'Ожог на сцене', 'date' => '1992-08-08', 'category' => 'milestone', 'description' => 'Получил ожоги второй и третьей степени во время выступления в Монреале'],
                    ['title' => 'Реабилитация от алкоголя', 'date' => '2001-01-01', 'category' => 'milestone', 'description' => 'Прошёл курс реабилитации от алкоголизма'],
                    ['title' => 'Брак с Фрэнкой (окончательный)', 'date' => '2015-01-01', 'category' => 'milestone', 'description' => 'Третья женитьба на Фрэнке после развода в 2004'],
                ],
            ],
            [
                'name' => 'Ларс Ульрих (Lars Ulrich)',
                'slug' => 'lars-ulrich',
                'birth_date' => '1963-12-26',
                'death_date' => null,
                'biography' => 'Барабанщик и сооснователь Metallica. Датчанин по происхождению. Первый музыкант, включённый в Зал славы тенниса Дании.',
                'role' => 'Ударные',
                'joined' => '1981-10-28',
                'left' => null,
                'events' => [
                    ['title' => 'Родился', 'date' => '1963-12-26', 'category' => 'milestone', 'description' => 'Родился в Гентофте, Дания, в семье теннисиста'],
                    ['title' => 'Переезд в США', 'date' => '1973-01-01', 'category' => 'milestone', 'description' => 'Семья переехала в Калифорнию'],
                    ['title' => 'Увлечение теннисом', 'date' => '1978-01-01', 'category' => 'milestone', 'description' => 'Стал одним из лучших юных теннисистов Дании'],
                    ['title' => 'Отказ от тенниса', 'date' => '1980-01-01', 'category' => 'milestone', 'description' => 'Бросил теннис ради музыки'],
                    ['title' => 'Брак с Дебби Джонс', 'date' => '1988-01-01', 'category' => 'milestone', 'description' => 'Первая женитьба'],
                    ['title' => 'Рождение сына Лэйна', 'date' => '1992-01-01', 'category' => 'milestone', 'description' => 'Родился первый сын'],
                    ['title' => 'Развод', 'date' => '2004-01-01', 'category' => 'milestone', 'description' => 'Развёлся с Дебби Джонс'],
                    ['title' => 'Брак с Джессикой Миллер', 'date' => '2005-01-01', 'category' => 'milestone', 'description' => 'Женитьба на модели Playboy'],
                    ['title' => 'Рождение близнецов', 'date' => '2007-01-01', 'category' => 'milestone', 'description' => 'Родились сыновья-близнецы Магнус и Мэй'],
                ],
            ],
            [
                'name' => 'Кирк Хэммет (Kirk Hammett)',
                'slug' => 'kirk-hammett',
                'birth_date' => '1962-11-18',
                'death_date' => null,
                'biography' => 'Соло-гитарист Metallica с 1983 года. До этого играл в Exodus. Известен своим мелодичным стилем и использованием вау-педали.',
                'role' => 'Соло-гитара',
                'joined' => '1983-04-01',
                'left' => null,
                'events' => [
                    ['title' => 'Родился', 'date' => '1962-11-18', 'category' => 'milestone', 'description' => 'Родился в Сан-Франциско, Калифорния'],
                    ['title' => 'Первая гитара', 'date' => '1976-01-01', 'category' => 'milestone', 'description' => 'Купил первую гитару за 49 долларов'],
                    ['title' => 'Создание Exodus', 'date' => '1980-01-01', 'category' => 'milestone', 'description' => 'Соосновал трэш-метал группу Exodus'],
                    ['title' => 'Приход в Metallica', 'date' => '1983-04-01', 'category' => 'milestone', 'description' => 'Заменил Дэйва Мастейна в Metallica'],
                    ['title' => 'Брак с Ребеккой Блю', 'date' => '1990-01-01', 'category' => 'milestone', 'description' => 'Женитьба на гримёре'],
                    ['title' => 'Рождение сына Энджела', 'date' => '1995-01-01', 'category' => 'milestone', 'description' => 'Родился первый сын'],
                    ['title' => 'Смерть жены', 'date' => '2017-01-01', 'category' => 'milestone', 'description' => 'Ребекка умерла от передозировки лекарств'],
                    ['title' => 'Брак с Лани Минелло', 'date' => '2017-10-01', 'category' => 'milestone', 'description' => 'Женитьба на Лани Минелло'],
                ],
            ],
            [
                'name' => 'Роберт Трухильо (Robert Trujillo)',
                'slug' => 'robert-trujillo',
                'birth_date' => '1964-10-23',
                'death_date' => null,
                'biography' => 'Бас-гитарист Metallica с 2003 года. До этого играл в Suicidal Tendencies, Infectious Grooves и с Оззи Осборном.',
                'role' => 'Бас-гитара',
                'joined' => '2003-02-24',
                'left' => null,
                'events' => [
                    ['title' => 'Родился', 'date' => '1964-10-23', 'category' => 'milestone', 'description' => 'Родился в Санта-Монике, Калифорния'],
                    ['title' => 'Первая группа', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Начал играть в Suicidal Tendencies'],
                    ['title' => 'Infectious Grooves', 'date' => '1989-01-01', 'category' => 'milestone', 'description' => 'Соосновал фанк-метал группу'],
                    ['title' => 'Тур с Оззи Осборном', 'date' => '1996-01-01', 'category' => 'milestone', 'description' => 'Присоединился к группе Оззи Осборна'],
                    ['title' => 'Приход в Metallica', 'date' => '2003-02-24', 'category' => 'milestone', 'description' => 'Заменил Джейсона Ньюстеда в Metallica'],
                    ['title' => 'Брак с Шерри Миллер', 'date' => '1995-01-01', 'category' => 'milestone', 'description' => 'Женитьба'],
                    ['title' => 'Рождение сына Ти', 'date' => '1996-01-01', 'category' => 'milestone', 'description' => 'Родился сын Ти'],
                ],
            ],

            // --- Бывшие участники ===
            [
                'name' => 'Дэйв Мастейн (Dave Mustaine)',
                'slug' => 'dave-mustaine',
                'birth_date' => '1961-09-13',
                'death_date' => null,
                'biography' => 'Первый соло-гитарист Metallica (1981-1983). Уволен из группы перед записью Kill \'Em All. Основал Megadeth. Один из «большой четвёрки» трэш-метала.',
                'role' => 'Соло-гитара',
                'joined' => '1981-10-28',
                'left' => '1983-04-01',
                'events' => [
                    ['title' => 'Родился', 'date' => '1961-09-13', 'category' => 'milestone', 'description' => 'Родился в Ла-Меса, Калифорния'],
                    ['title' => 'Приход в Metallica', 'date' => '1981-10-28', 'category' => 'milestone', 'description' => 'Стал первым соло-гитаристом Metallica'],
                    ['title' => 'Увольнение из Metallica', 'date' => '1983-04-01', 'category' => 'milestone', 'description' => 'Уволен из-за проблем с алкоголем и агрессивного поведения'],
                    ['title' => 'Создание Megadeth', 'date' => '1983-07-01', 'category' => 'milestone', 'description' => 'Основал Megadeth после ухода из Metallica'],
                    ['title' => 'Выход Killing Is My Business...', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Дебютный альбом Megadeth'],
                    ['title' => 'Выход Peace Sells...', 'date' => '1986-09-01', 'category' => 'milestone', 'description' => 'Культовый альбом Megadeth'],
                    ['title' => 'Брак с Дианой Дэвис', 'date' => '1991-01-01', 'category' => 'milestone', 'description' => 'Первая женитьба'],
                    ['title' => 'Развод', 'date' => '1998-01-01', 'category' => 'milestone', 'description' => 'Развёлся с Дианой'],
                    ['title' => 'Брак с Эми Потингер', 'date' => '2000-01-01', 'category' => 'milestone', 'description' => 'Женитьба на Эми'],
                    ['title' => 'Примирение с Metallica', 'date' => '2010-01-01', 'category' => 'milestone', 'description' => 'Выступил с Metallica на Big 4 в Софии'],
                    ['title' => 'Диагноз рак горла', 'date' => '2019-01-01', 'category' => 'milestone', 'description' => 'Диагностирован рак горла'],
                    ['title' => 'Выздоровление', 'date' => '2019-12-01', 'category' => 'milestone', 'description' => 'Объявил о ремиссии'],
                ],
            ],
            [
                'name' => 'Рон Макговни (Ron McGovney)',
                'slug' => 'ron-mcgovney',
                'birth_date' => '1962-11-02',
                'death_date' => null,
                'biography' => 'Первый бас-гитарист Metallica (1982-1983). Ушёл из группы из-за личных разногласий.',
                'role' => 'Бас-гитара',
                'joined' => '1982-01-01',
                'left' => '1983-01-01',
                'events' => [
                    ['title' => 'Родился', 'date' => '1962-11-02', 'category' => 'milestone', 'description' => 'Родился в Калифорнии'],
                    ['title' => 'Приход в Metallica', 'date' => '1982-01-01', 'category' => 'milestone', 'description' => 'Стал первым бас-гитаристом Metallica'],
                    ['title' => 'Уход из Metallica', 'date' => '1983-01-01', 'category' => 'milestone', 'description' => 'Ушёл из-за конфликтов с Джеймсом и Дэйвом'],
                    ['title' => 'Phantom Lord', 'date' => '1983-01-01', 'category' => 'milestone', 'description' => 'Краткосрочный проект после Metallica'],
                ],
            ],
            [
                'name' => 'Клифф Бёртон (Cliff Burton)',
                'slug' => 'cliff-burton',
                'birth_date' => '1962-02-10',
                'death_date' => '1986-09-27',
                'biography' => 'Бас-гитарист Metallica (1982-1986). Считается одним из величайших бас-гитаристов в истории метала. Погиб в автокатастрофе в Швеции.',
                'role' => 'Бас-гитара',
                'joined' => '1982-11-01',
                'left' => '1986-09-27',
                'events' => [
                    ['title' => 'Родился', 'date' => '1962-02-10', 'category' => 'milestone', 'description' => 'Родился в Кастро-Вэлли, Калифорния'],
                    ['title' => 'Первая группа Agents of Misfortune', 'date' => '1980-01-01', 'category' => 'milestone', 'description' => 'Играл в своей первой группе'],
                    ['title' => 'Приход в Metallica', 'date' => '1982-11-01', 'category' => 'milestone', 'description' => 'Заменил Рона Макговни в Metallica'],
                    ['title' => 'Автотура в Европе', 'date' => '1986-09-01', 'category' => 'milestone', 'description' => 'Европейский тур в поддержку Master of Puppets'],
                    ['title' => 'Смерть', 'date' => '1986-09-27', 'category' => 'milestone', 'description' => 'Погиб в автокатастрофе в Швеции в возрасте 24 лет'],
                ],
            ],
            [
                'name' => 'Джейсон Ньюстед (Jason Newsted)',
                'slug' => 'jason-newsted',
                'birth_date' => '1963-03-04',
                'death_date' => null,
                'biography' => 'Бас-гитарист Metallica (1986-2001). Заменил Клиффа Бёртона. Ушёл из группы по личным причинам.',
                'role' => 'Бас-гитара, бэк-вокал',
                'joined' => '1986-10-28',
                'left' => '2001-01-17',
                'events' => [
                    ['title' => 'Родился', 'date' => '1963-03-04', 'category' => 'milestone', 'description' => 'Родился в Батл-Крике, Мичиган'],
                    ['title' => 'Первая группа Flotsam and Jetsam', 'date' => '1983-01-01', 'category' => 'milestone', 'description' => 'Играл в Flotsam and Jetsam'],
                    ['title' => 'Приход в Metallica', 'date' => '1986-10-28', 'category' => 'milestone', 'description' => 'Заменил погибшего Клиффа Бёртона'],
                    ['title' => 'Проект Echobrain', 'date' => '2000-01-01', 'category' => 'milestone', 'description' => 'Создал сайд-проект Echobrain'],
                    ['title' => 'Уход из Metallica', 'date' => '2001-01-17', 'category' => 'milestone', 'description' => 'Ушёл из группы по личным причинам и из-за проблем со здоровьем'],
                    ['title' => 'Тур с Оззи Осборном', 'date' => '2003-01-01', 'category' => 'milestone', 'description' => 'Заменил Роберта Трухильо в туре с Оззи'],
                    ['title' => 'Возвращение в Metallica', 'date' => '2012-12-04', 'category' => 'milestone', 'description' => 'Выступил с Metallica на концерте в честь 30-летия'],
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

            // Добавляем связь с Metallica
            DB::table('affiliations')->updateOrInsert(
                [
                    'people_id' => $person->id,
                    'organization_id' => $metallica->id,
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

        $this->command->info('MetallicaSeeder завершён успешно!');
    }
}
