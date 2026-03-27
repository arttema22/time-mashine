<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\People;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RockMusiciansSeeder extends Seeder
{
    /**
     * Рок-музыканты и их биографические события
     */
    public function run(): void
    {
        // Сначала добавляем музыкантов в таблицу people
        $musicians = [
            // === Классики рока (1950-1960-е) ===
            [
                'name' => 'Элвис Пресли (Elvis Presley)',
                'slug' => 'elvis-presley',
                'birth_date' => '1935-01-08',
                'death_date' => '1977-08-16',
                'biography' => 'Король рок-н-ролла, американский певец и актёр, один из самых влиятельных музыкантов XX века.',
            ],
            [
                'name' => 'Чак Берри (Chuck Berry)',
                'slug' => 'chuck-berry',
                'birth_date' => '1926-10-18',
                'death_date' => '2017-03-18',
                'biography' => 'Американский гитарист, певец и композитор, один из основоположников рок-н-ролла.',
            ],
            [
                'name' => 'Бадди Холли (Buddy Holly)',
                'slug' => 'buddy-holly',
                'birth_date' => '1936-09-07',
                'death_date' => '1959-02-03',
                'biography' => 'Американский певец и автор песен, пионер рок-н-ролла.',
            ],
            [
                'name' => 'Литл Ричард (Little Richard)',
                'slug' => 'little-richard',
                'birth_date' => '1932-12-05',
                'death_date' => '2020-05-09',
                'biography' => 'Американский певец, пианист и композитор, один из создателей рок-н-ролла.',
            ],

            // === The Beatles ===
            [
                'name' => 'Джон Леннон (John Lennon)',
                'slug' => 'john-lennon',
                'birth_date' => '1940-10-09',
                'death_date' => '1980-12-08',
                'biography' => 'Британский музыкант, сооснователь The Beatles, певец, автор песен, активист мира.',
            ],
            [
                'name' => 'Пол Маккартни (Paul McCartney)',
                'slug' => 'paul-mccartney',
                'birth_date' => '1942-06-18',
                'death_date' => null,
                'biography' => 'Британский музыкант, сооснователь The Beatles, один из самых успешных композиторов в истории.',
            ],
            [
                'name' => 'Джордж Харрисон (George Harrison)',
                'slug' => 'george-harrison',
                'birth_date' => '1943-02-25',
                'death_date' => '2001-11-29',
                'biography' => 'Британский музыкант, гитарист The Beatles, продюсер, автор песен.',
            ],
            [
                'name' => 'Ринго Старр (Ringo Starr)',
                'slug' => 'ringo-starr',
                'birth_date' => '1940-07-07',
                'death_date' => null,
                'biography' => 'Британский барабанщик, актёр, участник The Beatles.',
            ],

            // === The Rolling Stones ===
            [
                'name' => 'Мик Джаггер (Mick Jagger)',
                'slug' => 'mick-jagger',
                'birth_date' => '1943-07-26',
                'death_date' => null,
                'biography' => 'Британский рок-музыкант, вокалист и фронтмен The Rolling Stones.',
            ],
            [
                'name' => 'Кит Ричардс (Keith Richards)',
                'slug' => 'keith-richards',
                'birth_date' => '1943-12-18',
                'death_date' => null,
                'biography' => 'Британский гитарист, сооснователь и гитарист The Rolling Stones.',
            ],

            // === The Who ===
            [
                'name' => 'Роджер Долтри (Roger Daltrey)',
                'slug' => 'roger-daltrey',
                'birth_date' => '1944-03-01',
                'death_date' => null,
                'biography' => 'Британский певец, вокалист и сооснователь The Who.',
            ],
            [
                'name' => 'Пит Таунсенд (Pete Townshend)',
                'slug' => 'pete-townshend',
                'birth_date' => '1945-05-19',
                'death_date' => null,
                'biography' => 'Британский гитарист, автор песен, лидер The Who.',
            ],

            // === Led Zeppelin ===
            [
                'name' => 'Роберт Плант (Robert Plant)',
                'slug' => 'robert-plant',
                'birth_date' => '1948-08-20',
                'death_date' => null,
                'biography' => 'Британский певец, вокалист Led Zeppelin, один из лучших рок-вокалистов.',
            ],
            [
                'name' => 'Джимми Пейдж (Jimmy Page)',
                'slug' => 'jimmy-page',
                'birth_date' => '1944-01-09',
                'death_date' => null,
                'biography' => 'Британский гитарист, продюсер, лидер Led Zeppelin.',
            ],
            [
                'name' => 'Джон Бонэм (John Bonham)',
                'slug' => 'john-bonham',
                'birth_date' => '1948-05-31',
                'death_date' => '1980-09-25',
                'biography' => 'Британский барабанщик, один из величайших рок-барабанщиков, участник Led Zeppelin.',
            ],
            [
                'name' => 'Джон Пол Джонс (John Paul Jones)',
                'slug' => 'john-paul-jones',
                'birth_date' => '1946-01-03',
                'death_date' => null,
                'biography' => 'Британский мультиинструменталист, бас-гитарист и клавишник Led Zeppelin.',
            ],

            // === Pink Floyd ===
            [
                'name' => 'Сид Барретт (Syd Barrett)',
                'slug' => 'syd-barrett',
                'birth_date' => '1946-01-06',
                'death_date' => '2006-07-07',
                'biography' => 'Британский музыкант, сооснователь и первый лидер Pink Floyd.',
            ],
            [
                'name' => 'Роджер Уотерс (Roger Waters)',
                'slug' => 'roger-waters',
                'birth_date' => '1943-09-06',
                'death_date' => null,
                'biography' => 'Британский музыкант, бас-гитарист, автор концептуальных альбомов Pink Floyd.',
            ],
            [
                'name' => 'Дэвид Гилмор (David Gilmour)',
                'slug' => 'david-gilmour',
                'birth_date' => '1946-03-06',
                'death_date' => null,
                'biography' => 'Британский гитарист, вокалист, лидер Pink Floyd.',
            ],
            [
                'name' => 'Ник Мейсон (Nick Mason)',
                'slug' => 'nick-mason',
                'birth_date' => '1944-01-27',
                'death_date' => null,
                'biography' => 'Британский барабанщик, единственный участник, игравший во всех составах Pink Floyd.',
            ],
            [
                'name' => 'Ричард Райт (Richard Wright)',
                'slug' => 'richard-wright',
                'birth_date' => '1943-07-28',
                'death_date' => '2008-09-15',
                'biography' => 'Британский клавишник, сооснователь Pink Floyd.',
            ],

            // === Black Sabbath ===
            [
                'name' => 'Оззи Осборн (Ozzy Osbourne)',
                'slug' => 'ozzy-osbourne',
                'birth_date' => '1948-12-03',
                'death_date' => null,
                'biography' => 'Британский певец, вокалист Black Sabbath, «Крёстный отец хеви-метала».',
            ],
            [
                'name' => 'Тони Айомми (Tony Iommi)',
                'slug' => 'tony-iommi',
                'birth_date' => '1948-02-19',
                'death_date' => null,
                'biography' => 'Британский гитарист, сооснователь и гитарист Black Sabbath, пионер хеви-метала.',
            ],
            [
                'name' => 'Гизер Батлер (Geezer Butler)',
                'slug' => 'geezer-butler',
                'birth_date' => '1949-07-17',
                'death_date' => null,
                'biography' => 'Британский бас-гитарист, автор текстов Black Sabbath.',
            ],
            [
                'name' => 'Билл Уорд (Bill Ward)',
                'slug' => 'bill-ward',
                'birth_date' => '1948-05-05',
                'death_date' => null,
                'biography' => 'Британский барабанщик, сооснователь Black Sabbath.',
            ],

            // === Deep Purple ===
            [
                'name' => 'Иэн Гиллан (Ian Gillan)',
                'slug' => 'ian-gillan',
                'birth_date' => '1945-08-19',
                'death_date' => null,
                'biography' => 'Британский певец, вокалист Deep Purple и Black Sabbath.',
            ],
            [
                'name' => 'Ричи Блэкмор (Ritchie Blackmore)',
                'slug' => 'ritchie-blackmore',
                'birth_date' => '1945-04-14',
                'death_date' => null,
                'biography' => 'Британский гитарист, сооснователь Deep Purple и Rainbow.',
            ],

            // === Queen ===
            [
                'name' => 'Фредди Меркьюри (Freddie Mercury)',
                'slug' => 'freddie-mercury',
                'birth_date' => '1946-09-05',
                'death_date' => '1991-11-24',
                'biography' => 'Британский певец, вокалист и автор песен Queen, один из величайших рок-вокалистов.',
            ],
            [
                'name' => 'Брайан Мэй (Brian May)',
                'slug' => 'brian-may',
                'birth_date' => '1947-07-19',
                'death_date' => null,
                'biography' => 'Британский гитарист, астрофизик, сооснователь Queen.',
            ],
            [
                'name' => 'Роджер Тейлор (Roger Taylor)',
                'slug' => 'roger-taylor-queen',
                'birth_date' => '1949-07-26',
                'death_date' => null,
                'biography' => 'Британский барабанщик, сооснователь Queen.',
            ],
            [
                'name' => 'Джон Дикон (John Deacon)',
                'slug' => 'john-deacon',
                'birth_date' => '1951-08-19',
                'death_date' => null,
                'biography' => 'Британский бас-гитарист, автор хита «Another One Bites the Dust».',
            ],

            // === AC/DC ===
            [
                'name' => 'Бон Скотт (Bon Scott)',
                'slug' => 'bon-scott',
                'birth_date' => '1946-07-09',
                'death_date' => '1980-02-19',
                'biography' => 'Австралийский певец, вокалист AC/DC (1974-1980).',
            ],
            [
                'name' => 'Брайан Джонсон (Brian Johnson)',
                'slug' => 'brian-johnson',
                'birth_date' => '1947-10-05',
                'death_date' => null,
                'biography' => 'Британский певец, вокалист AC/DC с 1980 года.',
            ],
            [
                'name' => 'Ангус Янг (Angus Young)',
                'slug' => 'angus-young',
                'birth_date' => '1955-03-31',
                'death_date' => null,
                'biography' => 'Австралийский гитарист, сооснователь и лидер AC/DC.',
            ],
            [
                'name' => 'Малкольм Янг (Malcolm Young)',
                'slug' => 'malcolm-young',
                'birth_date' => '1953-01-06',
                'death_date' => '2017-11-18',
                'biography' => 'Австралийский гитарист, сооснователь AC/DC, ритм-гитарист.',
            ],

            // === Kiss ===
            [
                'name' => 'Джин Симмонс (Gene Simmons)',
                'slug' => 'gene-simmons',
                'birth_date' => '1949-08-25',
                'death_date' => null,
                'biography' => 'Американский бас-гитарист, вокалист и сооснователь Kiss.',
            ],
            [
                'name' => 'Пол Стэнли (Paul Stanley)',
                'slug' => 'paul-stanley',
                'birth_date' => '1952-01-20',
                'death_date' => null,
                'biography' => 'Американский гитарист, вокалист и сооснователь Kiss.',
            ],

            // === Aerosmith ===
            [
                'name' => 'Стивен Тайлер (Steven Tyler)',
                'slug' => 'steven-tyler',
                'birth_date' => '1948-03-26',
                'death_date' => null,
                'biography' => 'Американский певец, вокалист Aerosmith, «Демон крика».',
            ],

            // === Punk Rock ===
            [
                'name' => 'Джо Страммер (Joe Strummer)',
                'slug' => 'joe-strummer',
                'birth_date' => '1952-08-21',
                'death_date' => '2002-12-22',
                'biography' => 'Британский певец, гитарист и сооснователь The Clash.',
            ],
            [
                'name' => 'Мик Джонс (Mick Jones)',
                'slug' => 'mick-jones-clash',
                'birth_date' => '1955-06-26',
                'death_date' => null,
                'biography' => 'Британский гитарист, сооснователь The Clash.',
            ],
            [
                'name' => 'Джонни Роттен (Johnny Rotten)',
                'slug' => 'johnny-rotten',
                'birth_date' => '1956-01-31',
                'death_date' => null,
                'biography' => 'Британский певец, вокалист Sex Pistols, пионер панк-рока.',
            ],
            [
                'name' => 'Сид Вишес (Sid Vicious)',
                'slug' => 'sid-vicious',
                'birth_date' => '1957-05-10',
                'death_date' => '1979-02-02',
                'biography' => 'Британский бас-гитарист Sex Pistols, икона панк-рока.',
            ],

            // === Hard Rock / Heavy Metal ===
            [
                'name' => 'Брюс Дикинсон (Bruce Dickinson)',
                'slug' => 'bruce-dickinson',
                'birth_date' => '1958-08-07',
                'death_date' => null,
                'biography' => 'Британский певец, вокалист Iron Maiden с 1981 года.',
            ],
            [
                'name' => 'Стив Харрис (Steve Harris)',
                'slug' => 'steve-harris',
                'birth_date' => '1956-03-12',
                'death_date' => null,
                'biography' => 'Британский бас-гитарист, сооснователь и лидер Iron Maiden.',
            ],
            [
                'name' => 'Роб Хэлфорд (Rob Halford)',
                'slug' => 'rob-halford',
                'birth_date' => '1951-08-25',
                'death_date' => null,
                'biography' => 'Британский певец, вокалист Judas Priest, «Металлический Бог».',
            ],
            [
                'name' => 'Лемми Килмистер (Lemmy Kilmister)',
                'slug' => 'lemmy-kilmister',
                'birth_date' => '1945-12-24',
                'death_date' => '2015-12-28',
                'biography' => 'Британский певец, бас-гитарист, сооснователь и лидер Motörhead.',
            ],

            // === Grunge ===
            [
                'name' => 'Курт Кобейн (Kurt Cobain)',
                'slug' => 'kurt-cobain',
                'birth_date' => '1967-02-20',
                'death_date' => '1994-04-05',
                'biography' => 'Американский певец, гитарист и автор песен Nirvana, икона гранжа.',
            ],
            [
                'name' => 'Эдди Веддер (Eddie Vedder)',
                'slug' => 'eddie-vedder',
                'birth_date' => '1964-12-23',
                'death_date' => null,
                'biography' => 'Американский певец, вокалист и автор песен Pearl Jam.',
            ],
            [
                'name' => 'Лейн Стейли (Layne Staley)',
                'slug' => 'layne-staley',
                'birth_date' => '1967-08-22',
                'death_date' => '2002-04-05',
                'biography' => 'Американский певец, вокалист Alice in Chains.',
            ],
            [
                'name' => 'Крис Корнелл (Chris Cornell)',
                'slug' => 'chris-cornell',
                'birth_date' => '1964-07-20',
                'death_date' => '2017-05-18',
                'biography' => 'Американский певец, вокалист Soundgarden и Audioslave.',
            ],

            // === Альтернативный рок ===
            [
                'name' => 'Том Йорк (Thom Yorke)',
                'slug' => 'thom-yorke',
                'birth_date' => '1968-10-07',
                'death_date' => null,
                'biography' => 'Британский певец, вокалист и автор песен Radiohead.',
            ],
            [
                'name' => 'Билли Корган (Billy Corgan)',
                'slug' => 'billy-corgan',
                'birth_date' => '1967-03-17',
                'death_date' => null,
                'biography' => 'Американский певец, гитарист и автор песен The Smashing Pumpkins.',
            ],

            // === Русский рок ===
            [
                'name' => 'Виктор Цой',
                'slug' => 'viktor-tsoi',
                'birth_date' => '1962-06-21',
                'death_date' => '1990-08-15',
                'biography' => 'Советский рок-музыкант, лидер группы «Кино», культовая фигура русского рока.',
            ],
            [
                'name' => 'Борис Гребенщиков',
                'slug' => 'boris-grebenshchikov',
                'birth_date' => '1953-11-27',
                'death_date' => null,
                'biography' => 'Советский и российский рок-музыкант, лидер группы «Аквариум».',
            ],
            [
                'name' => 'Константин Кинчев',
                'slug' => 'konstantin-kinchev',
                'birth_date' => '1958-12-25',
                'death_date' => null,
                'biography' => 'Советский и российский рок-музыкант, лидер группы «Алиса».',
            ],
            [
                'name' => 'Егор Летов',
                'slug' => 'egor-letov',
                'birth_date' => '1964-09-10',
                'death_date' => '2008-02-19',
                'biography' => 'Советский и российский рок-музыкант, лидер группы «Гражданская оборона».',
            ],
            [
                'name' => 'Александр Башлачёв',
                'slug' => 'alexander-bashlachev',
                'birth_date' => '1960-05-27',
                'death_date' => '1988-02-17',
                'biography' => 'Советский рок-поэт, музыкант, автор-исполнитель.',
            ],
        ];

        foreach ($musicians as $musician) {
            DB::table('people')->updateOrInsert(
                ['slug' => $musician['slug']],
                [
                    'name' => $musician['name'],
                    'birth_date' => $musician['birth_date'],
                    'death_date' => $musician['death_date'],
                    'biography' => $musician['biography'] ?? null,
                    'photo_path' => null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }

        $this->command->info("Добавлено музыкантов: " . count($musicians));

        // Теперь добавляем события для каждого музыканта
        $this->addMusicianEvents();
    }

    /**
     * Добавляет события жизни для рок-музыкантов
     */
    private function addMusicianEvents(): void
    {
        $peopleEvents = [
            // === Элвис Пресли ===
            [
                'slug' => 'elvis-presley',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1935-01-08', 'category' => 'milestone', 'description' => 'Родился в Тупело, Миссисипи, в бедной семье'],
                    ['title' => 'Первая запись на Sun Records', 'date' => '1953-07-18', 'category' => 'milestone', 'description' => 'Записал песню «My Happiness» как подарок матери'],
                    ['title' => 'Первый коммерческий сингл', 'date' => '1954-07-19', 'category' => 'milestone', 'description' => 'Вышел «That\'s All Right» — первая рок-н-ролльная запись'],
                    ['title' => 'Первое выступление на ТВ', 'date' => '1956-01-28', 'category' => 'milestone', 'description' => 'Выступление в шоу Stage Show'],
                    ['title' => 'Служба в армии США', 'date' => '1958-03-24', 'category' => 'military', 'description' => 'Призван в армию, служил в Германии'],
                    ['title' => 'Встреча с Присциллой', 'date' => '1959-01-01', 'category' => 'milestone', 'description' => 'Познакомился с Присциллой Пресли в Германии'],
                    ['title' => 'Брак с Присциллой', 'date' => '1967-05-01', 'category' => 'milestone', 'description' => 'Женитьба в Лас-Вегасе'],
                    ['title' => 'Рождение дочери Лизы Марии', 'date' => '1968-02-01', 'category' => 'milestone', 'description' => 'Родилась единственная дочь'],
                    ['title' => 'Comeback Special', 'date' => '1968-12-03', 'category' => 'milestone', 'description' => 'Телевизионный концерт, вернувший популярность'],
                    ['title' => 'Концерт в Гонолулу', 'date' => '1973-01-14', 'category' => 'milestone', 'description' => 'Aloha from Hawaii — первый концерт через спутник'],
                    ['title' => 'Развод', 'date' => '1973-02-23', 'category' => 'milestone', 'description' => 'Официальный развод с Присциллой'],
                    ['title' => 'Последний концерт', 'date' => '1977-06-26', 'category' => 'milestone', 'description' => 'Последнее выступление в Индианаполисе'],
                    ['title' => 'Смерть', 'date' => '1977-08-16', 'category' => 'milestone', 'description' => 'Найден мёртвым в Грейсленде в возрасте 42 лет'],
                ],
            ],

            // === Джон Леннон ===
            [
                'slug' => 'john-lennon',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1940-10-09', 'category' => 'milestone', 'description' => 'Родился в Ливерпуле, Англия'],
                    ['title' => 'Создание The Quarrymen', 'date' => '1956-01-01', 'category' => 'milestone', 'description' => 'Основал свою первую группу'],
                    ['title' => 'Встреча с Полом Маккартни', 'date' => '1957-07-06', 'category' => 'milestone', 'description' => 'Встретился с Полом на празднике в церкви'],
                    ['title' => 'Создание The Beatles', 'date' => '1960-01-01', 'category' => 'milestone', 'description' => 'Группа получила название The Beatles'],
                    ['title' => 'Первый хит «Please Please Me»', 'date' => '1963-01-11', 'category' => 'milestone', 'description' => 'Первый номер один в британских чартах'],
                    ['title' => 'Брак с Синтией Пауэлл', 'date' => '1962-08-23', 'category' => 'milestone', 'description' => 'Первая женитьба'],
                    ['title' => 'Рождение сына Джулиана', 'date' => '1963-04-08', 'category' => 'milestone', 'description' => 'Родился первый сын'],
                    ['title' => 'Встреча с Йоко Оно', 'date' => '1966-11-09', 'category' => 'milestone', 'description' => 'Познакомился на выставке в Лондоне'],
                    ['title' => 'Распад The Beatles', 'date' => '1970-04-10', 'category' => 'milestone', 'description' => 'Объявил об уходе из группы'],
                    ['title' => 'Брак с Йоко Оно', 'date' => '1969-03-20', 'category' => 'milestone', 'description' => 'Женитьба на Гибралтаре'],
                    ['title' => 'Bed-In за мир', 'date' => '1969-03-25', 'category' => 'political', 'description' => 'Акция протеста против войны во Вьетнаме'],
                    ['title' => 'Переезд в Нью-Йорк', 'date' => '1971-08-31', 'category' => 'milestone', 'description' => 'Переехал в США'],
                    ['title' => 'Альбом «Imagine»', 'date' => '1971-09-09', 'category' => 'milestone', 'description' => 'Вышел культовый альбом'],
                    ['title' => 'Рождение сына Шона', 'date' => '1975-10-09', 'category' => 'milestone', 'description' => 'Родился второй сын'],
                    ['title' => 'Возвращение к музыке', 'date' => '1980-01-01', 'category' => 'milestone', 'description' => 'Запись альбома «Double Fantasy»'],
                    ['title' => 'Убийство', 'date' => '1980-12-08', 'category' => 'milestone', 'description' => 'Застрелен Марком Чепменом у дома в Нью-Йорке'],
                ],
            ],

            // === Пол Маккартни ===
            [
                'slug' => 'paul-mccartney',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1942-06-18', 'category' => 'milestone', 'description' => 'Родился в Ливерпуле, Англия'],
                    ['title' => 'Встреча с Джоном Ленноном', 'date' => '1957-07-06', 'category' => 'milestone', 'description' => 'Присоединился к The Quarrymen'],
                    ['title' => 'Смерть матери', 'date' => '1956-10-31', 'category' => 'milestone', 'description' => 'Умерла мать Мэри, что повлияло на творчество'],
                    ['title' => 'Создание The Beatles', 'date' => '1960-01-01', 'category' => 'milestone', 'description' => 'Стал сооснователем группы'],
                    ['title' => 'Первый номер один', 'date' => '1963-01-11', 'category' => 'milestone', 'description' => '«Please Please Me» возглавил чарты'],
                    ['title' => 'Брак с Линдой Истман', 'date' => '1969-03-12', 'category' => 'milestone', 'description' => 'Женитьба на американском фотографe'],
                    ['title' => 'Распад The Beatles', 'date' => '1970-04-10', 'category' => 'milestone', 'description' => 'Объявил об уходе из группы'],
                    ['title' => 'Создание Wings', 'date' => '1971-01-01', 'category' => 'milestone', 'description' => 'Основал новую группу с Линдой'],
                    ['title' => 'Альбом «Band on the Run»', 'date' => '1973-12-05', 'category' => 'milestone', 'description' => 'Самый успешный альбом Wings'],
                    ['title' => 'Рыцарское звание', 'date' => '1997-03-11', 'category' => 'milestone', 'description' => 'Посвящён в рыцари королевой Елизаветой II'],
                    ['title' => 'Смерть Линды', 'date' => '1998-04-17', 'category' => 'milestone', 'description' => 'Умерла жена Линда от рака груди'],
                    ['title' => 'Брак с Хизер Миллс', 'date' => '2002-06-11', 'category' => 'milestone', 'description' => 'Вторая женитьба'],
                    ['title' => 'Развод с Хизер', 'date' => '2008-03-15', 'category' => 'milestone', 'description' => 'Один из самых дорогих разводов в истории'],
                    ['title' => 'Брак с Нэнси Шевелл', 'date' => '2011-10-09', 'category' => 'milestone', 'description' => 'Третья женитьба'],
                    ['title' => 'Концерт на Красной площади', 'date' => '2003-05-24', 'category' => 'milestone', 'description' => 'Первый западный рок-музыкант на Красной площади'],
                ],
            ],

            // === Фредди Меркьюри ===
            [
                'slug' => 'freddie-mercury',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1946-09-05', 'category' => 'milestone', 'description' => 'Родился Фаррух Булсара в Занзибаре'],
                    ['title' => 'Переезд в Англию', 'date' => '1964-01-01', 'category' => 'milestone', 'description' => 'Семья бежала от революции в Занзибаре'],
                    ['title' => 'Окончание художественного колледжа', 'date' => '1969-01-01', 'category' => 'milestone', 'description' => 'Получил диплом графического дизайнера'],
                    ['title' => 'Встреча с Брайаном Мэем', 'date' => '1970-01-01', 'category' => 'milestone', 'description' => 'Познакомился с будущими коллегами по Queen'],
                    ['title' => 'Создание Queen', 'date' => '1970-01-01', 'category' => 'milestone', 'description' => 'Основал группу с Мэем и Тейлором'],
                    ['title' => 'Первый альбом Queen', 'date' => '1973-07-13', 'category' => 'milestone', 'description' => 'Вышел дебютный альбом'],
                    ['title' => 'Альбом «A Night at the Opera»', 'date' => '1975-11-21', 'category' => 'milestone', 'description' => 'Вышел альбом с «Bohemian Rhapsody»'],
                    ['title' => 'Концерт в Уэмбли', 'date' => '1985-07-13', 'category' => 'milestone', 'description' => 'Легендарное выступление на Live Aid'],
                    ['title' => 'Концерт в Уэмбли (Magic Tour)', 'date' => '1986-07-12', 'category' => 'milestone', 'description' => 'Последний тур с группой'],
                    ['title' => 'Диагноз СПИД', 'date' => '1987-01-01', 'category' => 'health', 'description' => 'Узнал о своём диагнозе'],
                    ['title' => 'Последнее появление на публике', 'date' => '1990-02-18', 'category' => 'milestone', 'description' => 'Церемония Brit Awards с группой'],
                    ['title' => 'Публичное заявление о болезни', 'date' => '1991-11-23', 'category' => 'health', 'description' => 'Официально подтвердил диагноз СПИД'],
                    ['title' => 'Смерть', 'date' => '1991-11-24', 'category' => 'milestone', 'description' => 'Умер от бронхопневмонии, вызванной СПИДом'],
                ],
            ],

            // === Курт Кобейн ===
            [
                'slug' => 'kurt-cobain',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1967-02-20', 'category' => 'milestone', 'description' => 'Родился в Абердине, штат Вашингтон'],
                    ['title' => 'Развод родителей', 'date' => '1976-01-01', 'category' => 'milestone', 'description' => 'Развод родителей сильно повлиял на психику'],
                    ['title' => 'Первая гитара', 'date' => '1981-01-01', 'category' => 'milestone', 'description' => 'Получил первую гитару в подарок от дяди'],
                    ['title' => 'Создание Nirvana', 'date' => '1987-01-01', 'category' => 'milestone', 'description' => 'Основал группу с Крисом Новоселичем'],
                    ['title' => 'Первый альбом «Bleach»', 'date' => '1989-06-15', 'category' => 'milestone', 'description' => 'Дебютный альбом на Sub Pop'],
                    ['title' => 'Встреча с Кортни Лав', 'date' => '1990-01-01', 'category' => 'milestone', 'description' => 'Познакомился на концерте в Портленде'],
                    ['title' => 'Альбом «Nevermind»', 'date' => '1991-09-24', 'category' => 'milestone', 'description' => 'Альбом сделал гранж мейнстримом'],
                    ['title' => 'Хит «Smells Like Teen Spirit»', 'date' => '1991-11-01', 'category' => 'milestone', 'description' => 'Песня стала гимном поколения X'],
                    ['title' => 'Брак с Кортни Лав', 'date' => '1992-02-24', 'category' => 'milestone', 'description' => 'Женитьба на Гавайях'],
                    ['title' => 'Рождение дочери Фрэнсис', 'date' => '1992-08-18', 'category' => 'milestone', 'description' => 'Родилась дочь Фрэнсис Бин Кобейн'],
                    ['title' => 'Альбом «In Utero»', 'date' => '1993-09-21', 'category' => 'milestone', 'description' => 'Последний студийный альбом'],
                    ['title' => 'Передозировка в Риме', 'date' => '1994-03-04', 'category' => 'health', 'description' => 'Коматозное состояние после передозировки'],
                    ['title' => 'Побег из реабилитационного центра', 'date' => '1994-04-01', 'category' => 'health', 'description' => 'Сбежал из центра в Лос-Анджелесе'],
                    ['title' => 'Смерть', 'date' => '1994-04-05', 'category' => 'milestone', 'description' => 'Найден мёртвым в своём доме в Сиэтле'],
                ],
            ],

            // === Виктор Цой ===
            [
                'slug' => 'viktor-tsoi',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1962-06-21', 'category' => 'milestone', 'description' => 'Родился в Ленинграде в семье инженера и учительницы'],
                    ['title' => 'Окончание художественного училища', 'date' => '1982-01-01', 'category' => 'milestone', 'description' => 'Окончил училище имени Мухиной'],
                    ['title' => 'Создание «Кино»', 'date' => '1982-01-01', 'category' => 'milestone', 'description' => 'Основал группу вместе с Алексеем Рыбиным'],
                    ['title' => 'Первый альбом «45»', 'date' => '1982-01-01', 'category' => 'milestone', 'description' => 'Записан совместно с Аквариумом'],
                    ['title' => 'Альбом «Начальник Камчатки»', 'date' => '1984-01-01', 'category' => 'milestone', 'description' => 'Культовый альбом ленинградского рока'],
                    ['title' => 'Работа кочегаром', 'date' => '1982-01-01', 'category' => 'milestone', 'description' => 'Работал кочегаром в котельной «Камчатка»'],
                    ['title' => 'Альбом «Группа крови»', 'date' => '1988-01-01', 'category' => 'milestone', 'description' => 'Альбом стал символом перестройки'],
                    ['title' => 'Концерт в Лужниках', 'date' => '1990-05-05', 'category' => 'milestone', 'description' => 'Выступление на стадионе перед 70 000 зрителей'],
                    ['title' => 'Альбом «Чёрный альбом»', 'date' => '1990-01-01', 'category' => 'milestone', 'description' => 'Последний альбом, записанный при жизни'],
                    ['title' => 'Съёмки в фильме «Игла»', 'date' => '1988-01-01', 'category' => 'milestone', 'description' => 'Главная роль в культовом фильме'],
                    ['title' => 'Гибель', 'date' => '1990-08-15', 'category' => 'milestone', 'description' => 'Погиб в автокатастрофе под Ригой в возрасте 28 лет'],
                ],
            ],

            // === Брайан Мэй ===
            [
                'slug' => 'brian-may',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1947-07-19', 'category' => 'milestone', 'description' => 'Родился в Хэмптоне, Англия'],
                    ['title' => 'Создание Red Special', 'date' => '1963-01-01', 'category' => 'milestone', 'description' => 'Смастерил легендарную гитару с отцом'],
                    ['title' => 'Окончание Imperial College', 'date' => '1968-01-01', 'category' => 'milestone', 'description' => 'Получил степень бакалавра по физике'],
                    ['title' => 'Встреча с Фредди Меркьюри', 'date' => '1970-01-01', 'category' => 'milestone', 'description' => 'Познакомился через общих знакомых'],
                    ['title' => 'Создание Queen', 'date' => '1970-01-01', 'category' => 'milestone', 'description' => 'Основал группу с Меркьюри и Тейлором'],
                    ['title' => 'Первый альбом Queen', 'date' => '1973-07-13', 'category' => 'milestone', 'description' => 'Дебютный альбом группы'],
                    ['title' => 'Хит «Bohemian Rhapsody»', 'date' => '1975-11-21', 'category' => 'milestone', 'description' => 'Автор музыки к культовой песне'],
                    ['title' => 'Концерт Live Aid', 'date' => '1985-07-13', 'category' => 'milestone', 'description' => 'Легендарное выступление на Уэмбли'],
                    ['title' => 'Смерть Фредди Меркьюри', 'date' => '1991-11-24', 'category' => 'milestone', 'description' => 'Смерть друга и коллеги'],
                    ['title' => 'The Freddie Mercury Tribute Concert', 'date' => '1992-04-20', 'category' => 'milestone', 'description' => 'Организация концерта памяти'],
                    ['title' => 'Защита докторской диссертации', 'date' => '2007-08-01', 'category' => 'science', 'description' => 'Защитил PhD по астрофизике через 30 лет'],
                    ['title' => 'Рыцарское звание', 'date' => '2023-03-14', 'category' => 'milestone', 'description' => 'Посвящён в рыцари за заслуги в музыке и благотворительности'],
                ],
            ],

            // === Лемми Килмистер ===
            [
                'slug' => 'lemmy-kilmister',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1945-12-24', 'category' => 'milestone', 'description' => 'Родился в Сток-он-Трент, Англия'],
                    ['title' => 'Первая гитара', 'date' => '1957-01-01', 'category' => 'milestone', 'description' => 'Начал учиться играть на гитаре'],
                    ['title' => 'Игра в The Rockin\' Vickers', 'date' => '1965-01-01', 'category' => 'milestone', 'description' => 'Первая профессиональная группа'],
                    ['title' => 'Работа с Джими Хендриксом', 'date' => '1967-01-01', 'category' => 'milestone', 'description' => 'Работал дорожным техником Хендрикса'],
                    ['title' => 'Вступление в Hawkwind', 'date' => '1971-01-01', 'category' => 'milestone', 'description' => 'Стал бас-гитаристом космической рок-группы'],
                    ['title' => 'Увольнение из Hawkwind', 'date' => '1975-05-01', 'category' => 'milestone', 'description' => 'Уволен за употребление наркотиков на границе'],
                    ['title' => 'Создание Motörhead', 'date' => '1975-06-01', 'category' => 'milestone', 'description' => 'Основал свою группу'],
                    ['title' => 'Хит «Ace of Spades»', 'date' => '1980-11-08', 'category' => 'milestone', 'description' => 'Вышел культовый альбом'],
                    ['title' => 'Успех альбома «Ace of Spades»', 'date' => '1981-01-01', 'category' => 'milestone', 'description' => 'Альбом стал платиновым'],
                    ['title' => 'Камео в фильме «Танкистка»', 'date' => '1994-01-01', 'category' => 'milestone', 'description' => 'Снялся в фильме с Джонни Деппом'],
                    ['title' => 'Диагноз диабета', 'date' => '1990-01-01', 'category' => 'health', 'description' => 'Узнал о диабете 2 типа'],
                    ['title' => 'Диагноз аритмии', 'date' => '2013-01-01', 'category' => 'health', 'description' => 'Установлен кардиостимулятор'],
                    ['title' => 'Диагноз рака', 'date' => '2015-12-26', 'category' => 'health', 'description' => 'Обнаружен агрессивный рак мозга'],
                    ['title' => 'Смерть', 'date' => '2015-12-28', 'category' => 'milestone', 'description' => 'Умер в своём доме в Лос-Анджелесе'],
                ],
            ],

            // === Дэвид Гилмор ===
            [
                'slug' => 'david-gilmour',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1946-03-06', 'category' => 'milestone', 'description' => 'Родился в Кембридже, Англия'],
                    ['title' => 'Встреча с Сидом Барреттом', 'date' => '1954-01-01', 'category' => 'milestone', 'description' => 'Познакомился в школе'],
                    ['title' => 'Первая гитара', 'date' => '1954-01-01', 'category' => 'milestone', 'description' => 'Получил первую гитару в возрасте 11 лет'],
                    ['title' => 'Вступление в Pink Floyd', 'date' => '1968-01-01', 'category' => 'milestone', 'description' => 'Пришёл в группу для замены Барретта'],
                    ['title' => 'Альбом «The Dark Side of the Moon»', 'date' => '1973-03-01', 'category' => 'milestone', 'description' => 'Культовый альбом, 15 лет в чартах'],
                    ['title' => 'Альбом «Wish You Were Here»', 'date' => '1975-09-12', 'category' => 'milestone', 'description' => 'Посвящён Сиду Барретту'],
                    ['title' => 'Альбом «The Wall»', 'date' => '1979-11-30', 'category' => 'milestone', 'description' => 'Рок-опера о рок-звезде Пинке'],
                    ['title' => 'Концерт в Венеции', 'date' => '1989-07-15', 'category' => 'milestone', 'description' => 'Бесплатный концерт на плавучей сцене'],
                    ['title' => 'Уход Роджера Уотерса', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Уотерс покинул группу'],
                    ['title' => 'Альбом «A Momentary Lapse of Reason»', 'date' => '1987-09-07', 'category' => 'milestone', 'description' => 'Первый альбом без Уотерса'],
                    ['title' => 'Концерт Live 8', 'date' => '2005-07-02', 'category' => 'milestone', 'description' => 'Воссоединение классического состава на 20 минут'],
                    ['title' => 'Рыцарское звание', 'date' => '2023-03-14', 'category' => 'milestone', 'description' => 'Посвящён в рыцари за заслуги в музыке'],
                ],
            ],

            // === Оззи Осборн ===
            [
                'slug' => 'ozzy-osbourne',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1948-12-03', 'category' => 'milestone', 'description' => 'Родился в Бирмингеме, Англия'],
                    ['title' => 'Тюремное заключение', 'date' => '1965-01-01', 'category' => 'milestone', 'description' => 'Провёл 6 недель в тюрьме за кражу'],
                    ['title' => 'Встреча с Тони Айомми', 'date' => '1968-01-01', 'category' => 'milestone', 'description' => 'Познакомился через общих знакомых'],
                    ['title' => 'Создание Black Sabbath', 'date' => '1968-08-01', 'category' => 'milestone', 'description' => 'Основал группу с Айомми и Батлером'],
                    ['title' => 'Первый альбом Black Sabbath', 'date' => '1970-02-13', 'category' => 'milestone', 'description' => 'Дебютный альбом, родоначальник хеви-метала'],
                    ['title' => 'Альбом «Paranoid»', 'date' => '1970-09-18', 'category' => 'milestone', 'description' => 'Культовый альбом с хитами'],
                    ['title' => 'Уход из Black Sabbath', 'date' => '1979-04-27', 'category' => 'milestone', 'description' => 'Уволен из-за проблем с наркотиками'],
                    ['title' => 'Сольный альбом «Blizzard of Ozz»', 'date' => '1980-09-20', 'category' => 'milestone', 'description' => 'Первый сольный альбом с Рэнди Роадсом'],
                    ['title' => 'Инцидент с летучей мышью', 'date' => '1982-01-20', 'category' => 'milestone', 'description' => 'Откусил голову летучей мыши на концерте'],
                    ['title' => 'Брак с Шэрон Арден', 'date' => '1982-07-04', 'category' => 'milestone', 'description' => 'Женитьба на менеджере'],
                    ['title' => 'Шоу «The Osbournes»', 'date' => '2002-03-05', 'category' => 'milestone', 'description' => 'Реалити-шоу на MTV'],
                    ['title' => 'Диагноз болезни Паркинсона', 'date' => '2003-01-01', 'category' => 'health', 'description' => 'Диагностирована болезнь Паркинсона'],
                    ['title' => 'Последний тур', 'date' => '2018-05-01', 'category' => 'milestone', 'description' => 'Объявил о прощальном туре'],
                ],
            ],

            // === Роджер Уотерс ===
            [
                'slug' => 'roger-waters',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1943-09-06', 'category' => 'milestone', 'description' => 'Родился в Грейт-Букхэме, Англия'],
                    ['title' => 'Смерть отца на войне', 'date' => '1944-01-01', 'category' => 'milestone', 'description' => 'Отец погиб в Анцио, Италия'],
                    ['title' => 'Встреча с Сидом Барреттом', 'date' => '1961-01-01', 'category' => 'milestone', 'description' => 'Познакомился в архитектурном колледже'],
                    ['title' => 'Создание Pink Floyd', 'date' => '1965-01-01', 'category' => 'milestone', 'description' => 'Сооснователь группы'],
                    ['title' => 'Альбом «The Dark Side of the Moon»', 'date' => '1973-03-01', 'category' => 'milestone', 'description' => 'Концептуальный альбом о жизни'],
                    ['title' => 'Альбом «The Wall»', 'date' => '1979-11-30', 'category' => 'milestone', 'description' => 'Рок-опера, полуавтобиография'],
                    ['title' => 'Концерт The Wall в Берлине', 'date' => '1990-07-21', 'category' => 'milestone', 'description' => 'Масштабное шоу после падения стены'],
                    ['title' => 'Уход из Pink Floyd', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Объявил группу «творчески банкротной»'],
                    ['title' => 'Суд за права на название', 'date' => '1987-01-01', 'category' => 'milestone', 'description' => 'Пытался запретить использовать название'],
                    ['title' => 'Альбом «Amused to Death»', 'date' => '1992-09-01', 'category' => 'milestone', 'description' => 'Критика телевидения и войны'],
                    ['title' => 'Концерт Live 8', 'date' => '2005-07-02', 'category' => 'milestone', 'description' => 'Воссоединение с группой на 20 минут'],
                    ['title' => 'Тур «The Wall Live»', 'date' => '2010-09-20', 'category' => 'milestone', 'description' => 'Самый кассовый тур соло-артиста'],
                ],
            ],

            // === Джимми Пейдж ===
            [
                'slug' => 'jimmy-page',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1944-01-09', 'category' => 'milestone', 'description' => 'Родился в Хестоне, Англия'],
                    ['title' => 'Первая гитара', 'date' => '1957-01-01', 'category' => 'milestone', 'description' => 'Получил гитару в возрасте 13 лет'],
                    ['title' => 'Работа сессионным музыкантом', 'date' => '1963-01-01', 'category' => 'milestone', 'description' => 'Играл на сотнях записей'],
                    ['title' => 'Вступление в The Yardbirds', 'date' => '1966-01-01', 'category' => 'milestone', 'description' => 'Заменил Джеффа Бека'],
                    ['title' => 'Создание Led Zeppelin', 'date' => '1968-08-01', 'category' => 'milestone', 'description' => 'Основал группу с Плантом'],
                    ['title' => 'Первый альбом Led Zeppelin', 'date' => '1969-01-12', 'category' => 'milestone', 'description' => 'Дебютный альбом'],
                    ['title' => 'Альбом «Led Zeppelin IV»', 'date' => '1971-11-08', 'category' => 'milestone', 'description' => 'Альбом с «Stairway to Heaven»'],
                    ['title' => 'Песня «Stairway to Heaven»', 'date' => '1971-11-08', 'category' => 'milestone', 'description' => 'Самая известная рок-песня'],
                    ['title' => 'Фильм «The Song Remains the Same»', 'date' => '1976-10-20', 'category' => 'milestone', 'description' => 'Концертный фильм'],
                    ['title' => 'Смерть Джона Бонэма', 'date' => '1980-09-25', 'category' => 'milestone', 'description' => 'Смерть барабанщика, распад группы'],
                    ['title' => 'The Firm', 'date' => '1984-01-01', 'category' => 'milestone', 'description' => 'Группа с Полом Роджерсом'],
                    ['title' => 'Концерт Live Aid', 'date' => '1985-07-13', 'category' => 'milestone', 'description' => 'Выступление с оставшимися участниками'],
                    ['title' => 'Концерт Ahmet Ertegun Tribute', 'date' => '2007-12-10', 'category' => 'milestone', 'description' => 'Воссоединение Led Zeppelin в Лондоне'],
                ],
            ],

            // === Роберт Плант ===
            [
                'slug' => 'robert-plant',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1948-08-20', 'category' => 'milestone', 'description' => 'Родился в Уэст-Бромидже, Англия'],
                    ['title' => 'Первые группы', 'date' => '1965-01-01', 'category' => 'milestone', 'description' => 'Играл в местных группах'],
                    ['title' => 'Встреча с Джимми Пейджем', 'date' => '1968-07-01', 'category' => 'milestone', 'description' => 'Познакомился через общих знакомых'],
                    ['title' => 'Создание Led Zeppelin', 'date' => '1968-08-01', 'category' => 'milestone', 'description' => 'Стал вокалистом группы'],
                    ['title' => 'Первый альбом', 'date' => '1969-01-12', 'category' => 'milestone', 'description' => 'Дебютный альбом Led Zeppelin'],
                    ['title' => 'Альбом «Led Zeppelin IV»', 'date' => '1971-11-08', 'category' => 'milestone', 'description' => 'Альбом с «Stairway to Heaven»'],
                    ['title' => 'Смерть сына Карака', 'date' => '1977-07-26', 'category' => 'milestone', 'description' => 'Сын умер от желудочной инфекции в 5 лет'],
                    ['title' => 'Смерть Джона Бонэма', 'date' => '1980-09-25', 'category' => 'milestone', 'description' => 'Распад Led Zeppelin'],
                    ['title' => 'Сольный альбом «Pictures at Eleven»', 'date' => '1982-01-01', 'category' => 'milestone', 'description' => 'Первый сольный альбом'],
                    ['title' => 'Сотрудничество с Page', 'date' => '1994-01-01', 'category' => 'milestone', 'description' => 'Альбом «No Quarter»'],
                    ['title' => 'Альбом с Элисон Краусс', 'date' => '2007-09-18', 'category' => 'milestone', 'description' => '«Raising Sand» — премия Грэмми'],
                    ['title' => 'Рыцарское звание', 'date' => '2023-03-14', 'category' => 'milestone', 'description' => 'Посвящён в рыцари за заслуги в музыке'],
                ],
            ],

            // === Кит Ричардс ===
            [
                'slug' => 'keith-richards',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1943-12-18', 'category' => 'milestone', 'description' => 'Родился в Дартфорде, Англия'],
                    ['title' => 'Встреча с Миком Джаггером', 'date' => '1950-01-01', 'category' => 'milestone', 'description' => 'Познакомились в начальной школе'],
                    ['title' => 'Встреча на вокзале', 'date' => '1961-10-01', 'category' => 'milestone', 'description' => 'Случайная встреча на вокзале Дартфорда'],
                    ['title' => 'Создание The Rolling Stones', 'date' => '1962-01-01', 'category' => 'milestone', 'description' => 'Основал группу с Джаггером'],
                    ['title' => 'Первый сингл', 'date' => '1963-06-07', 'category' => 'milestone', 'description' => 'Кавер на «Come On» Чака Берри'],
                    ['title' => 'Первый номер один', 'date' => '1964-05-01', 'category' => 'milestone', 'description' => 'Хит Its All Over Now'],
                    ['title' => 'Арест за наркотики', 'date' => '1967-02-12', 'category' => 'milestone', 'description' => 'Арестован в своём доме'],
                    ['title' => 'Альбом «Exile on Main St.»', 'date' => '1972-05-12', 'category' => 'milestone', 'description' => 'Двойной альбом, записанный во Франции'],
                    ['title' => 'Инцидент в Торонто', 'date' => '1977-02-01', 'category' => 'milestone', 'description' => 'Арест за хранение героина'],
                    ['title' => 'Падение с дерева', 'date' => '2006-07-01', 'category' => 'health', 'description' => 'Упал с дерева на Фиджи, операция на голове'],
                    ['title' => 'Сольный тур', 'date' => '2015-09-01', 'category' => 'milestone', 'description' => 'Первый сольный тур с The Winos'],
                ],
            ],

            // === Мик Джаггер ===
            [
                'slug' => 'mick-jagger',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1943-07-26', 'category' => 'milestone', 'description' => 'Родился в Дартфорде, Англия'],
                    ['title' => 'Встреча с Китом Ричардсом', 'date' => '1950-01-01', 'category' => 'milestone', 'description' => 'Познакомились в начальной школе'],
                    ['title' => 'Учёба в LSE', 'date' => '1961-01-01', 'category' => 'milestone', 'description' => 'Поступил в Лондонскую школу экономики'],
                    ['title' => 'Создание The Rolling Stones', 'date' => '1962-01-01', 'category' => 'milestone', 'description' => 'Основал группу с Ричардсом'],
                    ['title' => 'Первый концерт', 'date' => '1962-07-12', 'category' => 'milestone', 'description' => 'Первое выступление в Marquee Club'],
                    ['title' => 'Первый хит', 'date' => '1963-06-07', 'category' => 'milestone', 'description' => 'Кавер на «Come On»'],
                    ['title' => 'Брак с Бьянкой Перес-Мора Масиэль', 'date' => '1971-05-12', 'category' => 'milestone', 'description' => 'Женитьба во Франции'],
                    ['title' => 'Рождение дочери Джейд', 'date' => '1971-10-21', 'category' => 'milestone', 'description' => 'Родилась первая дочь'],
                    ['title' => 'Развод с Бьянкой', 'date' => '1978-01-01', 'category' => 'milestone', 'description' => 'Официальный развод'],
                    ['title' => 'Альбом «Tattoo You»', 'date' => '1981-08-24', 'category' => 'milestone', 'description' => 'Последний коммерчески успешный альбом'],
                    ['title' => 'Рыцарское звание', 'date' => '2003-07-26', 'category' => 'milestone', 'description' => 'Посвящён в рыцари'],
                    ['title' => 'Сольный альбом «Goddess in the Doorway»', 'date' => '2001-11-20', 'category' => 'milestone', 'description' => 'Записан после 11 сентября'],
                ],
            ],

            // === Эдди Веддер ===
            [
                'slug' => 'eddie-vedder',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1964-12-23', 'category' => 'milestone', 'description' => 'Родился в Эванстоне, Иллинойс'],
                    ['title' => 'Узнал об отчиме', 'date' => '1980-01-01', 'category' => 'milestone', 'description' => 'Узнал, что человек которого считал отцом — отчим'],
                    ['title' => 'Переезд в Сан-Диего', 'date' => '1984-01-01', 'category' => 'milestone', 'description' => 'Переехал в Калифорнию'],
                    ['title' => 'Игра в Bad Radio', 'date' => '1988-01-01', 'category' => 'milestone', 'description' => 'Первая группа'],
                    ['title' => 'Получение демо от Стоуна Госсарда', 'date' => '1990-01-01', 'category' => 'milestone', 'description' => 'Получил кассету с инструменталами'],
                    ['title' => 'Запись вокала для демо', 'date' => '1990-01-01', 'category' => 'milestone', 'description' => 'Записал вокал для трёх песен'],
                    ['title' => 'Переезд в Сиэтл', 'date' => '1990-01-01', 'category' => 'milestone', 'description' => 'Присоединился к группе'],
                    ['title' => 'Создание Pearl Jam', 'date' => '1990-01-01', 'category' => 'milestone', 'description' => 'Группа сменила название на Pearl Jam'],
                    ['title' => 'Альбом «Ten»', 'date' => '1991-08-27', 'category' => 'milestone', 'description' => 'Дебютный альбом, продан 13 млн копий'],
                    ['title' => 'Хит «Alive»', 'date' => '1991-07-01', 'category' => 'milestone', 'description' => 'Первый хит группы'],
                    ['title' => 'Бойкот Ticketmaster', 'date' => '1994-01-01', 'category' => 'political', 'description' => 'Протест против монополии Ticketmaster'],
                    ['title' => 'Альбом «Vs.»', 'date' => '1993-10-19', 'category' => 'milestone', 'description' => 'Второй альбом, 950 000 копий за неделю'],
                    ['title' => 'Саундтрек к «Большой рыбе»', 'date' => '2003-01-01', 'category' => 'milestone', 'description' => 'Песня «Man of the Hour»'],
                    ['title' => 'Сольный альбом «Into the Wild»', 'date' => '2007-09-18', 'category' => 'milestone', 'description' => 'Саундтрек к фильму'],
                ],
            ],

            // === Роджер Тейлор (Queen) ===
            [
                'slug' => 'roger-taylor-queen',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1949-07-26', 'category' => 'milestone', 'description' => 'Родился в Кингс-Линне, Англия'],
                    ['title' => 'Учёба в стоматологической школе', 'date' => '1967-01-01', 'category' => 'milestone', 'description' => 'Поступил в Лондонскую стоматологическую школу'],
                    ['title' => 'Встреча с Брайаном Мэем', 'date' => '1968-01-01', 'category' => 'milestone', 'description' => 'Познакомился в университете'],
                    ['title' => 'Создание Queen', 'date' => '1970-01-01', 'category' => 'milestone', 'description' => 'Сооснователь группы'],
                    ['title' => 'Первый альбом Queen', 'date' => '1973-07-13', 'category' => 'milestone', 'description' => 'Дебютный альбом'],
                    ['title' => 'Хит «Radio Ga Ga»', 'date' => '1984-01-23', 'category' => 'milestone', 'description' => 'Написал и спел хит'],
                    ['title' => 'Концерт Live Aid', 'date' => '1985-07-13', 'category' => 'milestone', 'description' => 'Легендарное выступление на Уэмбли'],
                    ['title' => 'Смерть Фредди Меркьюри', 'date' => '1991-11-24', 'category' => 'milestone', 'description' => 'Смерть друга и коллеги'],
                    ['title' => 'The Freddie Mercury Tribute Concert', 'date' => '1992-04-20', 'category' => 'milestone', 'description' => 'Организация концерта памяти'],
                    ['title' => 'Сотрудничество с The Cross', 'date' => '1987-01-01', 'category' => 'milestone', 'description' => 'Сольная группа'],
                ],
            ],

            // === Тони Айомми ===
            [
                'slug' => 'tony-iommi',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1948-02-19', 'category' => 'milestone', 'description' => 'Родился в Бирмингеме, Англия'],
                    ['title' => 'Травма пальцев', 'date' => '1965-01-01', 'category' => 'milestone', 'description' => 'Потерял кончики двух пальцев на правой руке'],
                    ['title' => 'Создание самодельных накладок', 'date' => '1965-01-01', 'category' => 'milestone', 'description' => 'Сделал накладки из пластиковой бутылки'],
                    ['title' => 'Встреча с Оззи Осборном', 'date' => '1968-01-01', 'category' => 'milestone', 'description' => 'Познакомился через общих знакомых'],
                    ['title' => 'Создание Black Sabbath', 'date' => '1968-08-01', 'category' => 'milestone', 'description' => 'Основал группу'],
                    ['title' => 'Первый альбом Black Sabbath', 'date' => '1970-02-13', 'category' => 'milestone', 'description' => 'Родоначальник хеви-метала'],
                    ['title' => 'Альбом «Paranoid»', 'date' => '1970-09-18', 'category' => 'milestone', 'description' => 'Культовый альбом'],
                    ['title' => 'Уход Оззи из группы', 'date' => '1979-04-27', 'category' => 'milestone', 'description' => 'Оззи уволен'],
                    ['title' => 'Приход Ронни Джеймса Дио', 'date' => '1979-06-01', 'category' => 'milestone', 'description' => 'Новый вокалист'],
                    ['title' => 'Диагноз лимфомы', 'date' => '2011-01-01', 'category' => 'health', 'description' => 'Диагностирована лимфома'],
                    ['title' => 'Прощальный тур', 'date' => '2016-02-04', 'category' => 'milestone', 'description' => 'Начало прощального тура «The End»'],
                    ['title' => 'Последний концерт', 'date' => '2017-02-04', 'category' => 'milestone', 'description' => 'Последний концерт в Бирмингеме'],
                ],
            ],

            // === Бон Скотт ===
            [
                'slug' => 'bon-scott',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1946-07-09', 'category' => 'milestone', 'description' => 'Родился в Шотландии'],
                    ['title' => 'Переезд в Австралию', 'date' => '1952-01-01', 'category' => 'milestone', 'description' => 'Семья эмигрировала в Австралию'],
                    ['title' => 'Первая группа The Spektors', 'date' => '1964-01-01', 'category' => 'milestone', 'description' => 'Начал карьеру барабанщика'],
                    ['title' => 'Вступление в AC/DC', 'date' => '1974-09-01', 'category' => 'milestone', 'description' => 'Стал вокалистом группы'],
                    ['title' => 'Альбом «High Voltage»', 'date' => '1976-05-14', 'category' => 'milestone', 'description' => 'Первый международный альбом'],
                    ['title' => 'Альбом «Highway to Hell»', 'date' => '1979-07-27', 'category' => 'milestone', 'description' => 'Последний альбом с Боном'],
                    ['title' => 'Смерть', 'date' => '1980-02-19', 'category' => 'milestone', 'description' => 'Умер в Лондоне от алкогольной интоксикации'],
                ],
            ],

            // === Ангус Янг ===
            [
                'slug' => 'angus-young',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1955-03-31', 'category' => 'milestone', 'description' => 'Родился в Глазго, Шотландия'],
                    ['title' => 'Переезд в Австралию', 'date' => '1963-01-01', 'category' => 'milestone', 'description' => 'Семья эмигрировала в Сидней'],
                    ['title' => 'Создание AC/DC с Малкольмом', 'date' => '1973-11-01', 'category' => 'milestone', 'description' => 'Основал группу с братом'],
                    ['title' => 'Школьная форма на сцене', 'date' => '1974-01-01', 'category' => 'milestone', 'description' => 'Придумал сценический образ'],
                    ['title' => 'Приход Бона Скотта', 'date' => '1974-09-01', 'category' => 'milestone', 'description' => 'Бон стал вокалистом'],
                    ['title' => 'Альбом «Highway to Hell»', 'date' => '1979-07-27', 'category' => 'milestone', 'description' => 'Прорыв на международном рынке'],
                    ['title' => 'Смерть Бона Скотта', 'date' => '1980-02-19', 'category' => 'milestone', 'description' => 'Смерть вокалиста'],
                    ['title' => 'Приход Брайана Джонсона', 'date' => '1980-03-01', 'category' => 'milestone', 'description' => 'Новый вокалист'],
                    ['title' => 'Альбом «Back in Black»', 'date' => '1980-07-25', 'category' => 'milestone', 'description' => 'Трибьют Бону, 50 млн копий'],
                    ['title' => 'Альбом «The Razors Edge»', 'date' => '1990-09-21', 'category' => 'milestone', 'description' => 'Возвращение к успеху'],
                    ['title' => 'Смерть брата Малкольма', 'date' => '2017-11-18', 'category' => 'milestone', 'description' => 'Смерть брата и сооснователя'],
                ],
            ],
        ];

        foreach ($peopleEvents as $personData) {
            $person = People::where('slug', $personData['slug'])->first();

            if (!$person) {
                $this->command->warn("Персона не найдена: {$personData['slug']}");
                continue;
            }

            foreach ($personData['events'] as $eventData) {
                Event::updateOrCreate(
                    [
                        'title' => $eventData['title'],
                        'eventable_type' => People::class,
                        'eventable_id' => $person->id,
                    ],
                    [
                        'description' => $eventData['description'],
                        'started_at' => $eventData['date'],
                        'ended_at' => null,
                        'category' => $eventData['category'],
                        'cover_image' => null,
                    ]
                );
            }

            $this->command->info("  → {$person->name}: добавлено событий: " . count($personData['events']));
        }
    }
}
