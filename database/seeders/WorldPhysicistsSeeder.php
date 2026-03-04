<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorldPhysicistsSeeder extends Seeder
{
    public function run(): void
    {
        $physicists = [
            // === Эпоха Возрождения и научной революции ===
            [
                'name' => 'Николай Коперник (Nicolaus Copernicus)',
                'slug' => 'nicolaus-copernicus',
                'birth_date' => '1473-02-19',
                'death_date' => '1543-05-24',
                'biography' => 'Польский астроном, автор гелиоцентрической системы мира.',
            ],
            [
                'name' => 'Галилео Галилей (Galileo Galilei)',
                'slug' => 'galileo-galilei',
                'birth_date' => '1564-02-15',
                'death_date' => '1642-01-08',
                'biography' => 'Итальянский учёный, основоположник экспериментальной физики и телескопической астрономии.',
            ],
            [
                'name' => 'Иоганн Кеплер (Johannes Kepler)',
                'slug' => 'johannes-kepler',
                'birth_date' => '1571-12-27',
                'death_date' => '1630-11-15',
                'biography' => 'Немецкий математик и астроном, открывший законы движения планет.',
            ],
            [
                'name' => 'Исаак Ньютон (Isaac Newton)',
                'slug' => 'isaac-newton',
                'birth_date' => '1643-01-04',
                'death_date' => '1727-03-31',
                'biography' => 'Английский физик и математик, создатель классической механики и закона всемирного тяготения.',
            ],
            [
                'name' => 'Кристиан Гюйгенс (Christiaan Huygens)',
                'slug' => 'christiaan-huygens',
                'birth_date' => '1629-04-14',
                'death_date' => '1695-07-08',
                'biography' => 'Нидерландский физик, математик и астроном, создатель волновой теории света.',
            ],

            // === XVIII–XIX века: классическая физика ===
            [
                'name' => 'Даниэль Бернулли (Daniel Bernoulli)',
                'slug' => 'daniel-bernoulli',
                'birth_date' => '1700-02-08',
                'death_date' => '1782-03-17',
                'biography' => 'Швейцарский физик и математик, один из создателей гидродинамики.',
            ],
            [
                'name' => 'Леонард Эйлер (Leonhard Euler)',
                'slug' => 'leonhard-euler',
                'birth_date' => '1707-04-15',
                'death_date' => '1783-09-18',
                'biography' => 'Швейцарский математик и физик, внёсший фундаментальный вклад в механику и оптику.',
            ],
            [
                'name' => 'Шарль Кулон (Charles-Augustin de Coulomb)',
                'slug' => 'charles-coulomb',
                'birth_date' => '1736-06-14',
                'death_date' => '1806-08-23',
                'biography' => 'Французский физик, открывший закон взаимодействия электрических зарядов.',
            ],
            [
                'name' => 'Алессандро Вольта (Alessandro Volta)',
                'slug' => 'alessandro-volta',
                'birth_date' => '1745-02-18',
                'death_date' => '1827-03-05',
                'biography' => 'Итальянский физик, изобретатель первого источника постоянного тока — вольтова столба.',
            ],
            [
                'name' => 'Андре-Мари Ампер (André-Marie Ampère)',
                'slug' => 'andre-marie-ampere',
                'birth_date' => '1775-01-20',
                'death_date' => '1836-06-10',
                'biography' => 'Французский физик и математик, создатель электродинамики.',
            ],
            [
                'name' => 'Карл Фридрих Гаусс (Carl Friedrich Gauss)',
                'slug' => 'carl-friedrich-gauss',
                'birth_date' => '1777-04-30',
                'death_date' => '1855-02-23',
                'biography' => 'Немецкий математик и физик, внесший вклад в теорию магнетизма и оптику.',
            ],
            [
                'name' => 'Майкл Фарадей (Michael Faraday)',
                'slug' => 'michael-faraday',
                'birth_date' => '1791-09-22',
                'death_date' => '1867-08-25',
                'biography' => 'Английский физик, открывший электромагнитную индукцию и законы электролиза.',
            ],
            [
                'name' => 'Георг Ом (Georg Ohm)',
                'slug' => 'georg-ohm',
                'birth_date' => '1789-03-16',
                'death_date' => '1854-07-06',
                'biography' => 'Немецкий физик, открывший закон, связывающий ток, напряжение и сопротивление.',
            ],
            [
                'name' => 'Уильям Томсон (Лорд Кельвин) (William Thomson, Lord Kelvin)',
                'slug' => 'lord-kelvin',
                'birth_date' => '1824-06-26',
                'death_date' => '1907-12-17',
                'biography' => 'Британский физик, один из создателей термодинамики, ввёл абсолютную шкалу температур.',
            ],
            [
                'name' => 'Джеймс Клерк Максвелл (James Clerk Maxwell)',
                'slug' => 'james-clerk-maxwell',
                'birth_date' => '1831-06-13',
                'death_date' => '1879-11-05',
                'biography' => 'Шотландский физик, создатель классической теории электромагнитного поля.',
            ],
            [
                'name' => 'Людвиг Больцман (Ludwig Boltzmann)',
                'slug' => 'ludwig-boltzmann',
                'birth_date' => '1844-02-20',
                'death_date' => '1906-09-05',
                'biography' => 'Австрийский физик, один из основателей статистической механики и кинетической теории газов.',
            ],
            [
                'name' => 'Генрих Герц (Heinrich Hertz)',
                'slug' => 'heinrich-hertz',
                'birth_date' => '1857-02-22',
                'death_date' => '1894-01-01',
                'biography' => 'Немецкий физик, экспериментально подтвердивший существование электромагнитных волн.',
            ],
            [
                'name' => 'Вильгельм Рентген (Wilhelm Conrad Röntgen)',
                'slug' => 'wilhelm-roentgen',
                'birth_date' => '1845-03-27',
                'death_date' => '1923-02-10',
                'biography' => 'Немецкий физик, открывший рентгеновские лучи. Первый лауреат Нобелевской премии по физике (1901).',
            ],

            // === Революция в физике: конец XIX — начало XX века ===
            [
                'name' => 'Анри Пуанкаре (Henri Poincaré)',
                'slug' => 'henri-poincare',
                'birth_date' => '1854-04-29',
                'death_date' => '1912-07-17',
                'biography' => 'Французский математик и физик, один из создателей теории относительности и топологии.',
            ],
            [
                'name' => 'Хендрик Лоренц (Hendrik Lorentz)',
                'slug' => 'hendrik-lorentz',
                'birth_date' => '1853-07-18',
                'death_date' => '1928-02-04',
                'biography' => 'Нидерландский физик, разработавший электронную теорию и преобразования Лоренца.',
            ],
            [
                'name' => 'Макс Планк (Max Planck)',
                'slug' => 'max-planck',
                'birth_date' => '1858-04-23',
                'death_date' => '1947-10-04',
                'biography' => 'Немецкий физик, основатель квантовой теории. Лауреат Нобелевской премии (1918).',
            ],
            [
                'name' => 'Мария Склодовская-Кюри (Marie Curie)',
                'slug' => 'marie-curie',
                'birth_date' => '1867-11-07',
                'death_date' => '1934-07-04',
                'biography' => 'Польско-французский физик и химик, первооткрыватель радиоактивности. Двукратный лауреат Нобелевской премии.',
            ],
            [
                'name' => 'Альберт Эйнштейн (Albert Einstein)',
                'slug' => 'albert-einstein',
                'birth_date' => '1879-03-14',
                'death_date' => '1955-04-18',
                'biography' => 'Физик-теоретик, создатель специальной и общей теории относительности. Лауреат Нобелевской премии (1921).',
            ],
            [
                'name' => 'Эрнест Резерфорд (Ernest Rutherford)',
                'slug' => 'ernest-rutherford',
                'birth_date' => '1871-08-30',
                'death_date' => '1937-10-19',
                'biography' => 'Новозеландско-британский физик, создатель планетарной модели атома. Лауреат Нобелевской премии по химии (1908).',
            ],
            [
                'name' => 'Нильс Бор (Niels Bohr)',
                'slug' => 'niels-bohr',
                'birth_date' => '1885-10-07',
                'death_date' => '1962-11-18',
                'biography' => 'Датский физик, создатель квантовой модели атома. Лауреат Нобелевской премии (1922).',
            ],
            [
                'name' => 'Лиза Мейтнер (Lise Meitner)',
                'slug' => 'lise-meitner',
                'birth_date' => '1878-11-07',
                'death_date' => '1968-10-27',
                'biography' => 'Австрийско-шведский физик, одна из первооткрывателей деления ядра урана.',
            ],

            // === Золотой век квантовой физики (1920–1940) ===
            [
                'name' => 'Луи де Бройль (Louis de Broglie)',
                'slug' => 'louis-de-broglie',
                'birth_date' => '1892-08-15',
                'death_date' => '1987-03-19',
                'biography' => 'Французский физик, открывший волновые свойства материи. Лауреат Нобелевской премии (1929).',
            ],
            [
                'name' => 'Вольфганг Паули (Wolfgang Pauli)',
                'slug' => 'wolfgang-pauli',
                'birth_date' => '1900-04-25',
                'death_date' => '1958-12-15',
                'biography' => 'Австрийский физик-теоретик, сформулировал принцип запрета Паули. Лауреат Нобелевской премии (1945).',
            ],
            [
                'name' => 'Вернер Гейзенберг (Werner Heisenberg)',
                'slug' => 'werner-heisenberg',
                'birth_date' => '1901-12-05',
                'death_date' => '1976-02-01',
                'biography' => 'Немецкий физик, один из создателей квантовой механики, автор принципа неопределённости. Лауреат Нобелевской премии (1932).',
            ],
            [
                'name' => 'Эрвин Шрёдингер (Erwin Schrödinger)',
                'slug' => 'erwin-schrodinger',
                'birth_date' => '1887-08-12',
                'death_date' => '1961-01-04',
                'biography' => 'Австрийский физик, создатель волновой механики и уравнения Шрёдингера. Лауреат Нобелевской премии (1933).',
            ],
            [
                'name' => 'Поль Дирак (Paul Dirac)',
                'slug' => 'paul-dirac',
                'birth_date' => '1902-08-08',
                'death_date' => '1984-10-20',
                'biography' => 'Британский физик-теоретик, создатель релятивистской квантовой механики. Лауреат Нобелевской премии (1933).',
            ],
            [
                'name' => 'Энрико Ферми (Enrico Fermi)',
                'slug' => 'enrico-fermi',
                'birth_date' => '1901-09-29',
                'death_date' => '1954-11-28',
                'biography' => 'Итало-американский физик, создатель первого ядерного реактора. Лауреат Нобелевской премии (1938).',
            ],
            [
                'name' => 'Лев Ландау (Lev Landau)',
                'slug' => 'lev-landau',
                'birth_date' => '1908-01-22',
                'death_date' => '1968-04-01',
                'biography' => 'Советский физик-теоретик, создатель теории конденсированного состояния. Лауреат Нобелевской премии (1962).',
            ],

            // === Послевоенная физика и современные учёные ===
            [
                'name' => 'Ричард Фейнман (Richard Feynman)',
                'slug' => 'richard-feynman',
                'birth_date' => '1918-05-11',
                'death_date' => '1988-02-15',
                'biography' => 'Американский физик-теоретик, создатель квантовой электродинамики. Лауреат Нобелевской премии (1965).',
            ],
            [
                'name' => 'Роберт Оппенгеймер (J. Robert Oppenheimer)',
                'slug' => 'robert-oppenheimer',
                'birth_date' => '1904-04-22',
                'death_date' => '1967-02-18',
                'biography' => 'Американский физик-теоретик, научный руководитель Манхэттенского проекта.',
            ],
            [
                'name' => 'Андрей Сахаров (Andrei Sakharov)',
                'slug' => 'andrei-sakharov',
                'birth_date' => '1921-05-21',
                'death_date' => '1989-12-14',
                'biography' => 'Советский физик-теоретик, один из создателей водородной бомбы, правозащитник. Лауреат Нобелевской премии мира (1975).',
            ],
            [
                'name' => 'Стивен Хокинг (Stephen Hawking)',
                'slug' => 'stephen-hawking',
                'birth_date' => '1942-01-08',
                'death_date' => '2018-03-14',
                'biography' => 'Британский физик-теоретик и космолог, автор работ по чёрным дырам и квантовой гравитации.',
            ],
            [
                'name' => 'Пётр Капица (Pyotr Kapitsa)',
                'slug' => 'pyotr-kapitsa',
                'birth_date' => '1894-07-09',
                'death_date' => '1984-04-08',
                'biography' => 'Советский физик, исследователь низких температур и сверхтекучести. Лауреат Нобелевской премии (1978).',
            ],
            [
                'name' => 'Игорь Курчатов (Igor Kurchatov)',
                'slug' => 'igor-kurchatov',
                'birth_date' => '1903-01-12',
                'death_date' => '1960-02-07',
                'biography' => 'Советский физик, руководитель советского атомного проекта.',
            ],
            [
                'name' => 'Джоселин Белл Бёрнелл (Jocelyn Bell Burnell)',
                'slug' => 'jocelyn-bell-burnell',
                'birth_date' => '1943-07-15',
                'death_date' => null, // Жива
                'biography' => 'Британский астрофизик, открывшая пульсары. Лауреат Премии по фундаментальной физике (2018).',
            ],
        ];

        foreach ($physicists as $physicist) {
            DB::table('people')->updateOrInsert(
                ['slug' => $physicist['slug']],
                [
                    'name' => $physicist['name'],
                    'birth_date' => $physicist['birth_date'],
                    'death_date' => $physicist['death_date'],
                    'biography' => $physicist['biography'] ?? null,
                    'photo_path' => null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
