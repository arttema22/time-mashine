<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RussianWritersSeeder extends Seeder
{
    public function run(): void
    {
        $writers = [
            // === Золотой век русской литературы (XVIII - первая половина XIX) ===
            [
                'name' => 'Михаил Васильевич Ломоносов',
                'slug' => 'mikhail-lomonosov',
                'birth_date' => '1711-11-19',
                'death_date' => '1765-04-15',
                'biography' => 'Учёный-энциклопедист, поэт, реформатор русского языка.',
            ],
            [
                'name' => 'Гавриил Романович Державин',
                'slug' => 'gavriil-derzhavin',
                'birth_date' => '1743-07-14',
                'death_date' => '1816-07-20',
                'biography' => 'Поэт екатерининской эпохи, государственный деятель.',
            ],
            [
                'name' => 'Александр Сергеевич Грибоедов',
                'slug' => 'alexander-griboedov',
                'birth_date' => '1795-01-15',
                'death_date' => '1829-02-11',
                'biography' => 'Дипломат, драматург, автор комедии «Горе от ума».',
            ],
            [
                'name' => 'Александр Сергеевич Пушкин',
                'slug' => 'alexander-pushkin',
                'birth_date' => '1799-06-06',
                'death_date' => '1837-02-10',
                'biography' => 'Солнце русской поэзии, основатель современного русского литературного языка.',
            ],
            [
                'name' => 'Михаил Юрьевич Лермонтов',
                'slug' => 'mikhail-lermontov',
                'birth_date' => '1814-10-15',
                'death_date' => '1841-07-27',
                'biography' => 'Поэт, прозаик, драматург. Автор «Героя нашего времени».',
            ],
            [
                'name' => 'Николай Васильевич Гоголь',
                'slug' => 'nikolai-gogol',
                'birth_date' => '1809-04-01',
                'death_date' => '1852-03-04',
                'biography' => 'Классик русской литературы, автор «Мёртвых душ» и «Ревизора».',
            ],
            [
                'name' => 'Иван Сергеевич Тургенев',
                'slug' => 'ivan-turgenev',
                'birth_date' => '1818-11-09',
                'death_date' => '1883-09-03',
                'biography' => 'Писатель, поэт, переводчик. Автор «Отцов и детей».',
            ],
            [
                'name' => 'Иван Александрович Гончаров',
                'slug' => 'ivan-goncharov',
                'birth_date' => '1812-06-18',
                'death_date' => '1891-06-27',
                'biography' => 'Автор романа «Обломов».',
            ],
            [
                'name' => 'Александр Николаевич Островский',
                'slug' => 'alexander-ostrovsky',
                'birth_date' => '1823-04-12',
                'death_date' => '1886-06-14',
                'biography' => 'Драматург, реформатор русского театра.',
            ],

            // === Вторая половина XIX века (Реализм) ===
            [
                'name' => 'Фёдор Михайлович Достоевский',
                'slug' => 'fyodor-dostoevsky',
                'birth_date' => '1821-11-11',
                'death_date' => '1881-02-09',
                'biography' => 'Классик мировой литературы, автор «Преступления и наказания».',
            ],
            [
                'name' => 'Лев Николаевич Толстой',
                'slug' => 'leo-tolstoy',
                'birth_date' => '1828-09-09',
                'death_date' => '1910-11-20',
                'biography' => 'Граф, автор «Войны и мира», «Анны Карениной».',
            ],
            [
                'name' => 'Николай Алексеевич Некрасов',
                'slug' => 'nikolai-nekrasov',
                'birth_date' => '1821-12-10',
                'death_date' => '1878-01-08',
                'biography' => 'Поэт, издатель, редактор. Автор «Кому на Руси жить хорошо».',
            ],
            [
                'name' => 'Михаил Евграфович Салтыков-Щедрин',
                'slug' => 'mikhail-saltykov-shchedrin',
                'birth_date' => '1826-01-27',
                'death_date' => '1889-05-10',
                'biography' => 'Сатирик, автор «Истории одного города».',
            ],
            [
                'name' => 'Николай Семёнович Лесков',
                'slug' => 'nikolai-leskov',
                'birth_date' => '1831-02-16',
                'death_date' => '1895-03-05',
                'biography' => 'Писатель, автор «Левши».',
            ],
            [
                'name' => 'Афанасий Афанасьевич Фет',
                'slug' => 'afanasy-fet',
                'birth_date' => '1820-12-05',
                'death_date' => '1892-11-21',
                'biography' => 'Поэт-лирик, переводчик.',
            ],
            [
                'name' => 'Фёдор Иванович Тютчев',
                'slug' => 'fyodor-tyutchev',
                'birth_date' => '1803-12-05',
                'death_date' => '1873-07-27',
                'biography' => 'Поэт-философ, дипломат.',
            ],
            [
                'name' => 'Антон Павлович Чехов',
                'slug' => 'anton-chekhov',
                'birth_date' => '1860-01-29',
                'death_date' => '1904-07-15',
                'biography' => 'Писатель, драматург, врач. Мастер короткого рассказа.',
            ],
            [
                'name' => 'Владимир Галактионович Короленко',
                'slug' => 'vladimir-korolenko',
                'birth_date' => '1853-07-27',
                'death_date' => '1921-12-25',
                'biography' => 'Писатель, журналист, общественный деятель.',
            ],

            // === Серебряный век (конец XIX - начало XX) ===
            [
                'name' => 'Иван Алексеевич Бунин',
                'slug' => 'ivan-bunin',
                'birth_date' => '1870-10-22',
                'death_date' => '1953-11-08',
                'biography' => 'Первый русский лауреат Нобелевской премии по литературе (1933).',
            ],
            [
                'name' => 'Александр Александрович Блок',
                'slug' => 'alexander-blok',
                'birth_date' => '1880-11-28',
                'death_date' => '1921-08-07',
                'biography' => 'Поэт-символист, автор «Двенадцати».',
            ],
            [
                'name' => 'Сергей Александрович Есенин',
                'slug' => 'sergei-esenin',
                'birth_date' => '1895-10-03',
                'death_date' => '1925-12-28',
                'biography' => 'Поэт, один из самых популярных русских поэтов XX века.',
            ],
            [
                'name' => 'Владимир Владимирович Маяковский',
                'slug' => 'vladimir-mayakovsky',
                'birth_date' => '1893-07-19',
                'death_date' => '1930-04-14',
                'biography' => 'Поэт-футурист, драматург, художник.',
            ],
            [
                'name' => 'Анна Андреевна Ахматова',
                'slug' => 'anna-akhmatova',
                'birth_date' => '1889-06-23',
                'death_date' => '1966-03-05',
                'biography' => 'Поэтесса, одна из ключевых фигур русской литературы XX века.',
            ],
            [
                'name' => 'Осип Эмильевич Мандельштам',
                'slug' => 'osip-mandelstam',
                'birth_date' => '1891-01-15',
                'death_date' => '1938-12-27',
                'biography' => 'Поэт, эссеист, переводчик. Репрессирован.',
            ],
            [
                'name' => 'Марина Ивановна Цветаева',
                'slug' => 'marina-tsvetaeva',
                'birth_date' => '1892-10-08',
                'death_date' => '1941-08-31',
                'biography' => 'Поэтесса, прозаик, переводчица.',
            ],
            [
                'name' => 'Борис Леонидович Пастернак',
                'slug' => 'boris-pasternak',
                'birth_date' => '1890-02-10',
                'death_date' => '1960-05-30',
                'biography' => 'Поэт, писатель, переводчик. Лауреат Нобелевской премии (1958).',
            ],

            // === Советский период ===
            [
                'name' => 'Максим Горький (Алексей Пешков)',
                'slug' => 'maxim-gorky',
                'birth_date' => '1868-03-28',
                'death_date' => '1936-06-18',
                'biography' => 'Писатель, основоположник социалистического реализма.',
            ],
            [
                'name' => 'Михаил Афанасьевич Булгаков',
                'slug' => 'mikhail-bulgakov',
                'birth_date' => '1891-05-15',
                'death_date' => '1940-03-10',
                'biography' => 'Писатель, драматург, автор «Мастера и Маргариты».',
            ],
            [
                'name' => 'Михаил Александрович Шолохов',
                'slug' => 'mikhail-sholokhov',
                'birth_date' => '1905-05-24',
                'death_date' => '1984-02-21',
                'biography' => 'Лауреат Нобелевской премии (1965), автор «Тихого Дона».',
            ],
            [
                'name' => 'Александр Исаевич Солженицын',
                'slug' => 'alexander-solzhenitsyn',
                'birth_date' => '1918-12-11',
                'death_date' => '2008-08-03',
                'biography' => 'Писатель, диссидент, лауреат Нобелевской премии (1970).',
            ],
            [
                'name' => 'Иосиф Александрович Бродский',
                'slug' => 'joseph-brodsky',
                'birth_date' => '1940-05-24',
                'death_date' => '1996-01-28',
                'biography' => 'Поэт, эссеист, лауреат Нобелевской премии (1987).',
            ],
            [
                'name' => 'Варлам Тихонович Шаламов',
                'slug' => 'varlam-shalamov',
                'birth_date' => '1907-06-18',
                'death_date' => '1982-01-17',
                'biography' => 'Писатель, автор «Колымских рассказов».',
            ],
            [
                'name' => 'Андрей Платонович Платонов',
                'slug' => 'andrei-platonov',
                'birth_date' => '1899-09-28',
                'death_date' => '1951-01-05',
                'biography' => 'Писатель, автор «Котлована».',
            ],
            [
                'name' => 'Евгений Иванович Замятин',
                'slug' => 'evgeny-zamyatin',
                'birth_date' => '1884-02-01',
                'death_date' => '1937-03-10',
                'biography' => 'Писатель, автор антиутопии «Мы».',
            ],
        ];

        foreach ($writers as $writer) {
            DB::table('people')->updateOrInsert(
                ['slug' => $writer['slug']],
                [
                    'name' => $writer['name'],
                    'birth_date' => $writer['birth_date'],
                    'death_date' => $writer['death_date'],
                    'biography' => $writer['biography'] ?? null,
                    'photo_path' => null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
