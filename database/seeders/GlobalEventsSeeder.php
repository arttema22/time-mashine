<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GlobalEventsSeeder extends Seeder
{
    public function run(): void
    {
        $events = [
            // === Ранняя эра ===
            [
                'title' => 'Начало нашей эры',
                'description' => 'Традиционное начало летоисчисления от Рождества Христова',
                'occurred_at' => '0001-01-01 00:00:00',
                'ended_at' => null,
                'category' => 'religious',
            ],
            [
                'title' => 'Падение Западной Римской империи',
                'description' => 'Ромул Августул низложен Одоакром. Конец античности и начало Средневековья в Европе',
                'occurred_at' => '0476-09-04 00:00:00',
                'ended_at' => null,
                'category' => 'political',
            ],
            [
                'title' => 'Хиджра — начало исламского календаря',
                'description' => 'Переселение пророка Мухаммеда из Мекки в Медину',
                'occurred_at' => '0622-07-16 00:00:00',
                'ended_at' => null,
                'category' => 'religious',
            ],

            // === Средневековье и Возрождение ===
            [
                'title' => 'Изобретение книгопечатания',
                'description' => 'Иоганн Гутенберг изобрёл печатный станок с подвижными литерами в Майнце',
                'occurred_at' => '1440-01-01 00:00:00',
                'ended_at' => null,
                'category' => 'technology',
            ],
            [
                'title' => 'Падение Константинополя',
                'description' => 'Османские войска под предводительством Мехмеда II захватили столицу Византийской империи',
                'occurred_at' => '1453-05-29 00:00:00',
                'ended_at' => null,
                'category' => 'war',
            ],
            [
                'title' => 'Открытие Америки Колумбом',
                'description' => 'Христофор Колумб достиг островов Карибского моря, начав эпоху Великих географических открытий',
                'occurred_at' => '1492-10-12 00:00:00',
                'ended_at' => null,
                'category' => 'milestone',
            ],
            [
                'title' => 'Начало Реформации',
                'description' => 'Мартин Лютер прибил 95 тезисов к двери Замковой церкви в Виттенберге',
                'occurred_at' => '1517-10-31 00:00:00',
                'ended_at' => null,
                'category' => 'religious',
            ],
            [
                'title' => 'Публикация труда Коперника',
                'description' => 'Выход книги «О вращении небесных сфер», положившей начало научной революции',
                'occurred_at' => '1543-05-24 00:00:00',
                'ended_at' => null,
                'category' => 'science',
            ],

            // === Новое время ===
            [
                'title' => 'Вестфальский мир',
                'description' => 'Окончание Тридцатилетней войны, формирование системы национальных государств в Европе',
                'occurred_at' => '1648-10-24 00:00:00',
                'ended_at' => null,
                'category' => 'political',
            ],
            [
                'title' => 'Промышленная революция',
                'description' => 'Переход от ручного труда к машинному производству, начавшийся в Великобритании',
                'occurred_at' => '1760-01-01 00:00:00',
                'ended_at' => '1840-12-31 23:59:59',
                'category' => 'technology',
            ],
            [
                'title' => 'Великая французская революция',
                'description' => 'Взятие Бастилии, свержение монархии и установление Первой французской республики',
                'occurred_at' => '1789-07-14 00:00:00',
                'ended_at' => '1799-11-09 23:59:59',
                'category' => 'political',
            ],
            [
                'title' => 'Наполеоновские войны',
                'description' => 'Серия военных конфликтов между Французской империей и европейскими коалициями',
                'occurred_at' => '1803-05-18 00:00:00',
                'ended_at' => '1815-11-20 23:59:59',
                'category' => 'war',
            ],
            [
                'title' => 'Отмена рабства в Британской империи',
                'description' => 'Король Вильгельм IV подписал закон об отмене рабства',
                'occurred_at' => '1833-08-28 00:00:00',
                'ended_at' => null,
                'category' => 'political',
            ],
            [
                'title' => 'Публикация «Происхождения видов»',
                'description' => 'Чарльз Дарвин опубликовал труд, революционизировавший биологию',
                'occurred_at' => '1859-11-24 00:00:00',
                'ended_at' => null,
                'category' => 'science',
            ],

            // === XX век ===
            [
                'title' => 'Первая мировая война',
                'description' => 'Австро-Венгрия объявила войну Сербии после убийства эрцгерцога Франца Фердинанда',
                'occurred_at' => '1914-07-28 00:00:00',
                'ended_at' => '1918-11-11 23:59:59',
                'category' => 'war',
            ],
            [
                'title' => 'Русская революция',
                'description' => 'Октябрьская революция: большевики во главе с Лениным пришли к власти',
                'occurred_at' => '1917-11-07 00:00:00',
                'ended_at' => '1923-06-16 23:59:59',
                'category' => 'political',
            ],
            [
                'title' => 'Образование СССР',
                'description' => 'Договор об образовании Союза Советских Социалистических Республик',
                'occurred_at' => '1922-12-30 00:00:00',
                'ended_at' => '1991-12-26 23:59:59',
                'category' => 'political',
            ],
            [
                'title' => 'Создание Лиги Наций',
                'description' => 'Первая международная организация для поддержания мира после Первой мировой войны',
                'occurred_at' => '1920-01-10 00:00:00',
                'ended_at' => '1946-04-20 23:59:59',
                'category' => 'political',
            ],
            [
                'title' => 'Начало Великой депрессии',
                'description' => 'Биржевой крах на Уолл-стрит («Чёрный вторник»)',
                'occurred_at' => '1929-10-29 00:00:00',
                'ended_at' => '1939-01-01 23:59:59',
                'category' => 'milestone',
            ],
            [
                'title' => 'Вторая мировая война',
                'description' => 'Германия напала на Польшу. Крупнейший конфликт в истории человечества',
                'occurred_at' => '1939-09-01 00:00:00',
                'ended_at' => '1945-09-02 23:59:59',
                'category' => 'war',
            ],
            [
                'title' => 'Создание ООН',
                'description' => 'Подписание Устава Организации Объединённых Наций в Сан-Франциско',
                'occurred_at' => '1945-06-26 00:00:00',
                'ended_at' => null,
                'category' => 'political',
            ],
            [
                'title' => 'Атомная бомбардировка Хиросимы и Нагасаки',
                'description' => 'Первое и единственное применение ядерного оружия в войне',
                'occurred_at' => '1945-08-06 00:00:00',
                'ended_at' => '1945-08-09 23:59:59',
                'category' => 'war',
            ],

            // === Послевоенная эпоха ===
            [
                'title' => 'Открытие структуры ДНК',
                'description' => 'Джеймс Уотсон и Фрэнсис Крик опубликовали модель двойной спирали ДНК',
                'occurred_at' => '1953-04-25 00:00:00',
                'ended_at' => null,
                'category' => 'science',
            ],
            [
                'title' => 'Запуск первого искусственного спутника',
                'description' => 'СССР запустил «Спутник-1», начав космическую эру',
                'occurred_at' => '1957-10-04 00:00:00',
                'ended_at' => null,
                'category' => 'technology',
            ],
            [
                'title' => 'Первый полёт человека в космос',
                'description' => 'Юрий Гагарин на корабле «Восток-1» совершил орбитальный полёт',
                'occurred_at' => '1961-04-12 00:00:00',
                'ended_at' => null,
                'category' => 'milestone',
            ],
            [
                'title' => 'Высадка на Луну',
                'description' => 'Аполлон-11: Нил Армстронг и Базз Олдрин ступили на поверхность Луны',
                'occurred_at' => '1969-07-20 00:00:00',
                'ended_at' => null,
                'category' => 'milestone',
            ],
            [
                'title' => 'Создание ARPANET',
                'description' => 'Первая успешная передача данных между компьютерами — начало интернета',
                'occurred_at' => '1969-10-29 00:00:00',
                'ended_at' => '1983-01-01 23:59:59',
                'category' => 'technology',
            ],
            [
                'title' => 'Выход первого персонального компьютера Apple II',
                'description' => 'Начало эры массовых персональных компьютеров',
                'occurred_at' => '1977-04-01 00:00:00',
                'ended_at' => null,
                'category' => 'technology',
            ],
            [
                'title' => 'Авария на Чернобыльской АЭС',
                'description' => 'Крупнейшая катастрофа в истории атомной энергетики',
                'occurred_at' => '1986-04-26 00:00:00',
                'ended_at' => null,
                'category' => 'milestone',
            ],
            [
                'title' => 'Падение Берлинской стены',
                'description' => 'Символический конец Холодной войны и разделения Германии',
                'occurred_at' => '1989-11-09 00:00:00',
                'ended_at' => null,
                'category' => 'political',
            ],

            // === Современная эпоха ===
            [
                'title' => 'Создание Всемирной паутины (WWW)',
                'description' => 'Тим Бернерс-Ли создал первый веб-сайт и браузер',
                'occurred_at' => '1991-08-06 00:00:00',
                'ended_at' => null,
                'category' => 'technology',
            ],
            [
                'title' => 'Образование Европейского Союза',
                'description' => 'Вступление в силу Маастрихтского договора',
                'occurred_at' => '1993-11-01 00:00:00',
                'ended_at' => null,
                'category' => 'political',
            ],
            [
                'title' => 'Завершение проекта «Геном человека»',
                'description' => 'Международная научная группа завершила расшифровку ДНК человека',
                'occurred_at' => '2003-04-14 00:00:00',
                'ended_at' => null,
                'category' => 'science',
            ],
            [
                'title' => 'Запуск Facebook',
                'description' => 'Марк Цукерберг запустил социальную сеть TheFacebook',
                'occurred_at' => '2004-02-04 00:00:00',
                'ended_at' => null,
                'category' => 'technology',
            ],
            [
                'title' => 'Выпуск первого iPhone',
                'description' => 'Apple представила первый смартфон, изменивший мобильную индустрию',
                'occurred_at' => '2007-06-29 00:00:00',
                'ended_at' => null,
                'category' => 'technology',
            ],
            [
                'title' => 'Глобальный финансовый кризис',
                'description' => 'Банкротство Lehman Brothers вызвало мировой экономический кризис',
                'occurred_at' => '2008-09-15 00:00:00',
                'ended_at' => '2009-12-31 23:59:59',
                'category' => 'milestone',
            ],
            [
                'title' => 'Открытие бозона Хиггса',
                'description' => 'ЦЕРН объявил об обнаружении бозона Хиггса на Большом адронном коллайдере',
                'occurred_at' => '2012-07-04 00:00:00',
                'ended_at' => null,
                'category' => 'science',
            ],
            [
                'title' => 'Пандемия COVID-19',
                'description' => 'ВОЗ объявила пандемию коронавируса. Глобальные карантинные меры',
                'occurred_at' => '2020-03-11 00:00:00',
                'ended_at' => '2023-05-05 23:59:59',
                'category' => 'health',
            ],
            [
                'title' => 'Запуск ChatGPT',
                'description' => 'OpenAI выпустила чат-бот на базе ИИ, начав эру массового использования генеративного ИИ',
                'occurred_at' => '2022-11-30 00:00:00',
                'ended_at' => null,
                'category' => 'technology',
            ],
        ];

        foreach ($events as $event) {
            DB::table('events')->updateOrInsert(
                [
                    'title' => $event['title'],
                    'occurred_at' => $event['occurred_at'],
                ],
                [
                    'description' => $event['description'],
                    'ended_at' => $event['ended_at'],
                    'category' => $event['category'],
                    'eventable_type' => null,
                    'eventable_id' => null,
                    'cover_image' => null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
