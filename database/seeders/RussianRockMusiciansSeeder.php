<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\People;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RussianRockMusiciansSeeder extends Seeder
{
    /**
     * Русские рок-музыканты и их биографические события
     */
    public function run(): void
    {
        // Сначала добавляем музыкантов в таблицу people
        $musicians = [
            // === Аквариум ===
            [
                'name' => 'Борис Гребенщиков',
                'slug' => 'boris-grebenshchikov',
                'birth_date' => '1953-11-27',
                'death_date' => null,
                'biography' => 'Советский и российский рок-музыкант, лидер группы «Аквариум», поэт, один из пионеров русского рока.',
            ],
            [
                'name' => 'Андрей Романов',
                'slug' => 'andrei-romanov',
                'birth_date' => '1956-03-05',
                'death_date' => null,
                'biography' => 'Советский и российский музыкант, флейтист, клавишник группы «Аквариум».',
            ],

            // === Кино ===
            [
                'name' => 'Виктор Цой',
                'slug' => 'viktor-tsoi',
                'birth_date' => '1962-06-21',
                'death_date' => '1990-08-15',
                'biography' => 'Советский рок-музыкант, лидер группы «Кино», культовая фигура русского рока.',
            ],
            [
                'name' => 'Юрий Каспарян',
                'slug' => 'yuri-kasparyan',
                'birth_date' => '1963-10-02',
                'death_date' => null,
                'biography' => 'Советский и российский гитарист, гитарист группы «Кино».',
            ],
            [
                'name' => 'Игорь Тихомиров',
                'slug' => 'igor-tikhomirov',
                'birth_date' => '1962-05-09',
                'death_date' => '2023-11-11',
                'biography' => 'Советский и российский бас-гитарист, басист группы «Кино».',
            ],
            [
                'name' => 'Георгий Гурьянов',
                'slug' => 'georgy-guryanov',
                'birth_date' => '1961-06-19',
                'death_date' => '2013-07-20',
                'biography' => 'Советский музыкант, барабанщик группы «Кино», художник, модельер.',
            ],

            // === ДДТ ===
            [
                'name' => 'Юрий Шевчук',
                'slug' => 'yuri-shevchuk',
                'birth_date' => '1957-05-16',
                'death_date' => null,
                'biography' => 'Советский и российский рок-музыкант, лидер группы «ДДТ», поэт, продюсер.',
            ],
            [
                'name' => 'Константин Шумайлов',
                'slug' => 'konstantin-shumaylov',
                'birth_date' => '1960-02-05',
                'death_date' => null,
                'biography' => 'Российский клавишник, клавишник группы «ДДТ».',
            ],

            // === Алиса ===
            [
                'name' => 'Константин Кинчев',
                'slug' => 'konstantin-kinchev',
                'birth_date' => '1958-12-25',
                'death_date' => null,
                'biography' => 'Советский и российский рок-музыкант, лидер группы «Алиса».',
            ],
            [
                'name' => 'Петр Самойлов',
                'slug' => 'petr-samoylov',
                'birth_date' => '1963-02-07',
                'death_date' => null,
                'biography' => 'Советский и российский гитарист, гитарист группы «Алиса».',
            ],

            // === Гражданская Оборона ===
            [
                'name' => 'Егор Летов',
                'slug' => 'egor-letov',
                'birth_date' => '1964-09-10',
                'death_date' => '2008-02-19',
                'biography' => 'Советский и российский рок-музыкант, лидер группы «Гражданская оборона».',
            ],
            [
                'name' => 'Кузя УО',
                'slug' => 'kuzya-uo',
                'birth_date' => '1966-01-01',
                'death_date' => null,
                'biography' => 'Российский музыкант, участник «Гражданской Обороны».',
            ],

            // === Наутилус Помпилиус ===
            [
                'name' => 'Вячеслав Бутусов',
                'slug' => 'vyacheslav-butusov',
                'birth_date' => '1961-10-15',
                'death_date' => null,
                'biography' => 'Советский и российский рок-музыкант, лидер группы «Наутилус Помпилиус».',
            ],
            [
                'name' => 'Илья Кормильцев',
                'slug' => 'ilya-kormiltsev',
                'birth_date' => '1959-10-17',
                'death_date' => '2007-02-04',
                'biography' => 'Советский и российский поэт, переводчик, автор текстов «Наутилус Помпилиус».',
            ],

            // === Ария ===
            [
                'name' => 'Валерий Кипелов',
                'slug' => 'valeriy-kipelov',
                'birth_date' => '1957-07-12',
                'death_date' => null,
                'biography' => 'Советский и российский рок-музыкант, первый вокалист группы «Ария».',
            ],
            [
                'name' => 'Владимир Холстинин',
                'slug' => 'vladimir-kholstinin',
                'birth_date' => '1958-08-12',
                'death_date' => null,
                'biography' => 'Советский и российский гитарист, сооснователь группы «Ария».',
            ],
            [
                'name' => 'Михаил Серышев',
                'slug' => 'mikhail-seryshev',
                'birth_date' => '1962-01-18',
                'death_date' => null,
                'biography' => 'Российский вокалист, второй вокалист группы «Ария».',
            ],

            // === Мастер ===
            [
                'name' => 'Алексей Булгаков',
                'slug' => 'aleksey-bulgakov',
                'birth_date' => '1962-03-23',
                'death_date' => '2022-04-27',
                'biography' => 'Советский и российский рок-музыкант, лидер группы «Мастер».',
            ],

            // === Автограф ===
            [
                'name' => 'Александр Ситковецкий',
                'slug' => 'alexander-sitkovetsky',
                'birth_date' => '1954-09-19',
                'death_date' => null,
                'biography' => 'Советский и российский рок-музыкант, лидер группы «Автограф».',
            ],

            // === Парк Горького ===
            [
                'name' => 'Стас Намин',
                'slug' => 'stas-namin',
                'birth_date' => '1951-11-08',
                'death_date' => null,
                'biography' => 'Советский и российский музыкант, продюсер, основатель группы «Цветы».',
            ],
            [
                'name' => 'Алексей Белов',
                'slug' => 'aleksey-belov',
                'birth_date' => '1964-01-01',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, вокалист группы «Парк Горького».',
            ],

            // === Черный Обелиск ===
            [
                'name' => 'Анатолий Крупнов',
                'slug' => 'anatoly-krupnov',
                'birth_date' => '1965-03-07',
                'death_date' => '1997-02-27',
                'biography' => 'Советский и российский рок-музыкант, лидер группы «Черный Обелиск».',
            ],

            // === Шах ===
            [
                'name' => 'Александр Ф. Скляр',
                'slug' => 'alexander-sklyar',
                'birth_date' => '1964-04-07',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, лидер группы «Ва-Банкъ».',
            ],

            // === Ва-Банкъ ===
            [
                'name' => 'Гарик Сукачёв',
                'slug' => 'garik-sukachev',
                'birth_date' => '1959-12-01',
                'death_date' => null,
                'biography' => 'Советский и российский рок-музыкант, поэт, актёр, режиссёр.',
            ],

            // === Бригада С ===
            [
                'name' => 'Фёдор Чистяков',
                'slug' => 'fedor-chistyakov',
                'birth_date' => '1964-01-01',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, лидер группы «Бригада С».',
            ],

            // === Зоопарк ===
            [
                'name' => 'Майк Науменко',
                'slug' => 'mike-naumenko',
                'birth_date' => '1955-04-18',
                'death_date' => '1991-08-27',
                'biography' => 'Советский рок-музыкант, лидер группы «Зоопарк», поэт, переводчик.',
            ],

            // === Сектор Газа ===
            [
                'name' => 'Юрий Клинских (Хой)',
                'slug' => 'yuri-klinskikh',
                'birth_date' => '1964-07-19',
                'death_date' => '2000-07-04',
                'biography' => 'Советский и российский рок-музыкант, лидер группы «Сектор Газа».',
            ],

            // === Король и Шут ===
            [
                'name' => 'Михаил Горшенёв',
                'slug' => 'mikhail-gorshenev',
                'birth_date' => '1973-08-07',
                'death_date' => '2013-07-19',
                'biography' => 'Российский рок-музыкант, вокалист группы «Король и Шут».',
            ],
            [
                'name' => 'Александр Балунов',
                'slug' => 'alexander-balunov',
                'birth_date' => '1971-05-07',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, басист группы «Король и Шут».',
            ],
            [
                'name' => 'Александр Щиголев',
                'slug' => 'alexander-shchigolev',
                'birth_date' => '1971-09-07',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, барабанщик группы «Король и Шут».',
            ],

            // === Ленинград ===
            [
                'name' => 'Сергей Шнуров',
                'slug' => 'sergey-shnurov',
                'birth_date' => '1973-04-13',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, лидер группы «Ленинград», поэт, актёр.',
            ],

            // === Би-2 ===
            [
                'name' => 'Лёва Би-2',
                'slug' => 'leva-bi2',
                'birth_date' => '1968-08-02',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, вокалист группы «Би-2».',
            ],
            [
                'name' => 'Шура Би-2',
                'slug' => 'shura-bi2',
                'birth_date' => '1968-11-18',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, гитарист группы «Би-2».',
            ],

            // === Сплин ===
            [
                'name' => 'Александр Васильев',
                'slug' => 'alexander-vasilyev',
                'birth_date' => '1969-08-20',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, лидер группы «Сплин».',
            ],

            // === Мумий Тролль ===
            [
                'name' => 'Илья Лагутенко',
                'slug' => 'ilya-lagutenko',
                'birth_date' => '1968-10-16',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, лидер группы «Мумий Тролль».',
            ],

            // === Земфира ===
            [
                'name' => 'Земфира Рамазанова',
                'slug' => 'zemfira',
                'birth_date' => '1976-08-26',
                'death_date' => null,
                'biography' => 'Российская рок-певица, автор песен.',
            ],

            // === Агата Кристи ===
            [
                'name' => 'Вадим Самойлов',
                'slug' => 'vadim-samoylov',
                'birth_date' => '1964-04-29',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, сооснователь группы «Агата Кристи».',
            ],
            [
                'name' => 'Глеб Самойлов',
                'slug' => 'gleb-samoylov',
                'birth_date' => '1970-07-11',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, сооснователь группы «Агата Кристи».',
            ],

            // === Найк Борзов ===
            [
                'name' => 'Найк Борзов',
                'slug' => 'nayk-borzov',
                'birth_date' => '1970-09-09',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, бывший лидер группы «Смысловые Галлюцинации».',
            ],

            // === Смысловые Галлюцинации ===
            [
                'name' => 'Сергей Бобунец',
                'slug' => 'sergey-bobunets',
                'birth_date' => '1970-09-09',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, лидер группы «Смысловые Галлюцинации».',
            ],

            // === Ногу Свело ===
            [
                'name' => 'Макс Покровский',
                'slug' => 'max-pokrovsky',
                'birth_date' => '1969-05-11',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, лидер группы «Ногу Свело!».',
            ],

            // === Чайф ===
            [
                'name' => 'Владимир Шахрин',
                'slug' => 'vladimir-shakhrin',
                'birth_date' => '1959-01-18',
                'death_date' => null,
                'biography' => 'Советский и российский рок-музыкант, лидер группы «Чайф».',
            ],

            // === Настя ===
            [
                'name' => 'Анастасия Полева',
                'slug' => 'anastasia-poleva',
                'birth_date' => '1963-06-05',
                'death_date' => null,
                'biography' => 'Советская и российская рок-певица, лидер группы «Настя».',
            ],

            // === Тревога ===
            [
                'name' => 'Сергей Калугин',
                'slug' => 'sergey-kalugin',
                'birth_date' => '1972-01-01',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, лидер группы «Оргия Праведников».',
            ],

            // === Пикник ===
            [
                'name' => 'Эдмунд Шклярский',
                'slug' => 'edmund-shklyarsky',
                'birth_date' => '1956-08-25',
                'death_date' => null,
                'biography' => 'Советский и российский рок-музыкант, лидер группы «Пикник».',
            ],

            // === Сталкер ===
            [
                'name' => 'Юрий Шевчук',
                'slug' => 'yuri-shevchuk-2',
                'birth_date' => '1957-05-16',
                'death_date' => null,
                'biography' => 'Советский и российский рок-музыкант.',
            ],

            // === АукцЫон ===
            [
                'name' => 'Леонид Фёдоров',
                'slug' => 'leonid-fedorov',
                'birth_date' => '1963-05-04',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, лидер группы «АукцЫон».',
            ],

            // === Восьмой День ===
            [
                'name' => 'Сергей Бугаев',
                'slug' => 'sergey-bugaev',
                'birth_date' => '1964-01-01',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант.',
            ],

            // === Кипелов ===
            [
                'name' => 'Александр Манякин',
                'slug' => 'alexander-manyakin',
                'birth_date' => '1962-01-01',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, барабанщик.',
            ],

            // === Эпидемия ===
            [
                'name' => 'Юрий Мелисов',
                'slug' => 'yuri-melisov',
                'birth_date' => '1971-01-01',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, лидер группы «Эпидемия».',
            ],

            // === Арктида ===
            [
                'name' => 'Иван Хрипунов',
                'slug' => 'ivan-khripunov',
                'birth_date' => '1980-01-01',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант.',
            ],

            // === Catharsis ===
            [
                'name' => 'Алексей Виноградов',
                'slug' => 'aleksey-vinogradov',
                'birth_date' => '1974-01-01',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, лидер группы Catharsis.',
            ],

            // === Slot ===
            [
                'name' => 'Дария Ставрович',
                'slug' => 'daria-stavrovich',
                'birth_date' => '1981-01-01',
                'death_date' => null,
                'biography' => 'Российская рок-певица, вокалистка группы Slot.',
            ],

            // === Louna ===
            [
                'name' => 'Лусинэ Геворкян',
                'slug' => 'lusine-gevorkyan',
                'birth_date' => '1981-01-01',
                'death_date' => null,
                'biography' => 'Российская рок-певица, вокалистка группы Louna.',
            ],

            // === Amatory ===
            [
                'name' => 'Игорь Лобанов',
                'slug' => 'igor-lobanov',
                'birth_date' => '1980-01-01',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, вокалист группы Amatory.',
            ],

            // === Jane Air ===
            [
                'name' => 'Сергей Комаров',
                'slug' => 'sergey-komarov',
                'birth_date' => '1979-01-01',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, вокалист группы Jane Air.',
            ],

            // === Stigmata ===
            [
                'name' => 'Илья Чёрт',
                'slug' => 'ilya-chert',
                'birth_date' => '1978-01-01',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, вокалист группы Stigmata.',
            ],

            // === Психея ===
            [
                'name' => 'Дмитрий Спирин',
                'slug' => 'dmitry-spirin',
                'birth_date' => '1974-01-01',
                'death_date' => null,
                'biography' => 'Российский панк-рок музыкант, лидер группы «Психея».',
            ],

            // === Тараканы ===
            [
                'name' => 'Дмитрий Спирин',
                'slug' => 'dmitry-spirin-tarakany',
                'birth_date' => '1974-01-01',
                'death_date' => null,
                'biography' => 'Российский панк-рок музыкант, лидер группы «Тараканы!».',
            ],

            // === Элвис ===
            [
                'name' => 'Александр Красовицкий',
                'slug' => 'alexander-krasovitsky',
                'birth_date' => '1976-01-01',
                'death_date' => null,
                'biography' => 'Украинский рок-музыкант, вокалист группы «Элизиум».',
            ],

            // === Ляпис Трубецкой ===
            [
                'name' => 'Сергей Михалок',
                'slug' => 'sergey-mikhalok',
                'birth_date' => '1972-01-01',
                'death_date' => null,
                'biography' => 'Белорусский рок-музыкант, лидер группы «Ляпис Трубецкой».',
            ],

            // === Neuro Dubel ===
            [
                'name' => 'Александр Куллинкович',
                'slug' => 'alexander-kullinkovich',
                'birth_date' => '1970-01-01',
                'death_date' => null,
                'biography' => 'Белорусский рок-музыкант, лидер группы Neuro Dubel.',
            ],

            // === J:МОРС ===
            [
                'name' => 'Олег Скрипка',
                'slug' => 'oleg-skrypka',
                'birth_date' => '1964-05-24',
                'death_date' => null,
                'biography' => 'Украинский рок-музыкант, лидер группы «Вопли Видоплясова».',
            ],

            // === Океан Ельзы ===
            [
                'name' => 'Святослав Вакарчук',
                'slug' => 'svyatoslav-vakarchuk',
                'birth_date' => '1975-05-14',
                'death_date' => null,
                'biography' => 'Украинский рок-музыкант, лидер группы «Океан Ельзы».',
            ],

            // === Бумбокс ===
            [
                'name' => 'Андрей Хлывнюк',
                'slug' => 'andrei-khlyvnyuk',
                'birth_date' => '1979-01-01',
                'death_date' => null,
                'biography' => 'Украинский рок-музыкант, лидер группы «Бумбокс».',
            ],

            // === Мумий Тролль ===
            [
                'name' => 'Юрий Усачёв',
                'slug' => 'yuri-usachev',
                'birth_date' => '1970-01-01',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант.',
            ],

            // === Анимация ===
            [
                'name' => 'Алексей Каминский',
                'slug' => 'aleksey-kaminsky',
                'birth_date' => '1969-01-01',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант.',
            ],

            // === Глеб Самойлоff ===
            [
                'name' => 'Александр Яновский',
                'slug' => 'alexander-yanovsky',
                'birth_date' => '1970-01-01',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант.',
            ],

            // === 25/17 ===
            [
                'name' => 'Антон Завьялов',
                'slug' => 'anton-zavyalov',
                'birth_date' => '1980-01-01',
                'death_date' => null,
                'biography' => 'Российский рэп-рок музыкант, участник группы 25/17.',
            ],

            // === Animal ДжаZ ===
            [
                'name' => 'Александр Красовицкий',
                'slug' => 'alexander-krasovitsky-animal',
                'birth_date' => '1976-01-01',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, вокалист группы Animal ДжаZ.',
            ],

            // === Порнофильмы ===
            [
                'name' => 'Владимир Котляров',
                'slug' => 'vladimir-kotlyarov',
                'birth_date' => '1985-01-01',
                'death_date' => null,
                'biography' => 'Российский панк-рок музыкант, вокалист группы «Порнофильмы».',
            ],

            // === F.P.G. ===
            [
                'name' => 'Алексей «Фред»',
                'slug' => 'aleksey-fred',
                'birth_date' => '1975-01-01',
                'death_date' => null,
                'biography' => 'Российский панк-рок музыкант.',
            ],

            // === Distemper ===
            [
                'name' => 'Алексей «Яга»',
                'slug' => 'aleksey-yaga',
                'birth_date' => '1975-01-01',
                'death_date' => null,
                'biography' => 'Российский ска-панк музыкант, лидер группы Distemper.',
            ],

            // === Tequilajazzz ===
            [
                'name' => 'Евгений Фёдоров',
                'slug' => 'evgeny-fedorov',
                'birth_date' => '1969-01-01',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, лидер группы Tequilajazzz.',
            ],

            // === Motorama ===
            [
                'name' => 'Владислав Паршин',
                'slug' => 'vladislav-parshin',
                'birth_date' => '1985-01-01',
                'death_date' => null,
                'biography' => 'Российский инди-рок музыкант, лидер группы Motorama.',
            ],

            // === Shortparis ===
            [
                'name' => 'Николай Комягин',
                'slug' => 'nikolai-komyagin',
                'birth_date' => '1985-01-01',
                'death_date' => null,
                'biography' => 'Российский рок-музыкант, вокалист группы Shortparis.',
            ],

            // === IC3PEAK ===
            [
                'name' => 'Настя Креслина',
                'slug' => 'nastya-kreslina',
                'birth_date' => '1993-01-01',
                'death_date' => null,
                'biography' => 'Российская электронная рок-музыкант, вокалистка IC3PEAK.',
            ],

            // === Хаски ===
            [
                'name' => 'Дмитрий Кузнецов',
                'slug' => 'dmitry-kuznetsov',
                'birth_date' => '1993-01-01',
                'death_date' => null,
                'biography' => 'Российский хип-хоп исполнитель.',
            ],

            // === Oxxxymiron ===
            [
                'name' => 'Мирон Фёдоров',
                'slug' => 'oxxxymiron',
                'birth_date' => '1985-01-31',
                'death_date' => null,
                'biography' => 'Российский рэп-исполнитель.',
            ],

            // === Баста ===
            [
                'name' => 'Василий Вакуленко',
                'slug' => 'basta',
                'birth_date' => '1980-01-01',
                'death_date' => null,
                'biography' => 'Российский рэп-исполнитель.',
            ],
        ];

        foreach ($musicians as $musician) {
            // Пропускаем дубликаты
            if (in_array($musician['slug'], ['yuri-shevchuk-2'])) {
                continue;
            }

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

        $this->command->info("Добавлено русских рок-музыкантов: " . count($musicians));

        // Теперь добавляем события для каждого музыканта
        $this->addMusicianEvents();
    }

    /**
     * Добавляет события жизни для русских рок-музыкантов
     */
    private function addMusicianEvents(): void
    {
        $peopleEvents = [
            // === Виктор Цой (уже есть события, пропускаем) ===
            
            // === Борис Гребенщиков ===
            [
                'slug' => 'boris-grebenshchikov',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1953-11-27', 'category' => 'milestone', 'description' => 'Родился в Ленинграде в семье интеллигентов'],
                    ['title' => 'Окончание школы', 'date' => '1971-01-01', 'category' => 'milestone', 'description' => 'Окончил среднюю школу'],
                    ['title' => 'Поступление в университет', 'date' => '1971-09-01', 'category' => 'milestone', 'description' => 'Поступил на прикладную математику в ЛГУ'],
                    ['title' => 'Создание «Аквариума»', 'date' => '1972-01-01', 'category' => 'milestone', 'description' => 'Основал группу с Анатолием Гуницким'],
                    ['title' => 'Первый концерт', 'date' => '1973-01-01', 'category' => 'milestone', 'description' => 'Первое выступление в ДК им. Горького'],
                    ['title' => 'Знакомство с Майком Науменко', 'date' => '1976-01-01', 'category' => 'milestone', 'description' => 'Начало дружбы и сотрудничества'],
                    ['title' => 'Альбом «Треугольник»', 'date' => '1981-01-01', 'category' => 'milestone', 'description' => 'Один из самых известных альбомов'],
                    ['title' => 'Альбом «Аквариум» (Синий альбом)', 'date' => '1981-01-01', 'category' => 'milestone', 'description' => 'Записан на квартире у БГ'],
                    ['title' => 'Фестиваль в Тбилиси', 'date' => '1980-03-01', 'category' => 'milestone', 'description' => 'Выступление на первом советском рок-фестивале'],
                    ['title' => 'Альбом «Дети декабря»', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов 80-х'],
                    ['title' => 'Альбом «Radio Silence»', 'date' => '1989-01-01', 'category' => 'milestone', 'description' => 'Первый сольный альбом, записанный в США'],
                    ['title' => 'Альбом «Лилит»', 'date' => '1997-01-01', 'category' => 'milestone', 'description' => 'Возвращение к корням'],
                    ['title' => 'Альбом «Знак Огня»', 'date' => '2014-01-01', 'category' => 'milestone', 'description' => 'Возвращение к активной записи'],
                    ['title' => '70-летие', 'date' => '2023-11-27', 'category' => 'milestone', 'description' => 'Юбилейный концерт в Кремле'],
                ],
            ],

            // === Юрий Шевчук ===
            [
                'slug' => 'yuri-shevchuk',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1957-05-16', 'category' => 'milestone', 'description' => 'Родился в посёлке Ягодное, Магаданская область'],
                    ['title' => 'Переезд в Уфу', 'date' => '1970-01-01', 'category' => 'milestone', 'description' => 'Семья переехала в Уфу'],
                    ['title' => 'Окончание школы', 'date' => '1974-01-01', 'category' => 'milestone', 'description' => 'Окончил среднюю школу'],
                    ['title' => 'Создание «ДДТ»', 'date' => '1980-01-01', 'category' => 'milestone', 'description' => 'Основал группу в Уфе'],
                    ['title' => 'Первый концерт', 'date' => '1981-01-01', 'category' => 'milestone', 'description' => 'Первое выступление в Уфе'],
                    ['title' => 'Переезд в Ленинград', 'date' => '1982-01-01', 'category' => 'milestone', 'description' => 'Переехал в Ленинград'],
                    ['title' => 'Альбом «Компромисс»', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Культовый альбом ленинградского рока'],
                    ['title' => 'Альбом «Время»', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Фестиваль в Черноголовке', 'date' => '1987-01-01', 'category' => 'milestone', 'description' => 'Выступление на фестивале'],
                    ['title' => 'Альбом «Оттепель»', 'date' => '1990-01-01', 'category' => 'milestone', 'description' => 'Альбом о перестройке'],
                    ['title' => 'Альбом «Актриса Весна»', 'date' => '1992-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов 90-х'],
                    ['title' => 'Концерт в Грозном', 'date' => '1995-12-01', 'category' => 'political', 'description' => 'Выступление в Чечне во время войны'],
                    ['title' => 'Альбом «Мир №0»', 'date' => '2014-01-01', 'category' => 'milestone', 'description' => 'Альбом о современной России'],
                    ['title' => 'Концерт на Красной площади', 'date' => '2013-06-12', 'category' => 'milestone', 'description' => 'Выступление на День России'],
                ],
            ],

            // === Константин Кинчев ===
            [
                'slug' => 'konstantin-kinchev',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1958-12-25', 'category' => 'milestone', 'description' => 'Родился в Москве в семье актёров'],
                    ['title' => 'Начало актёрской карьеры', 'date' => '1976-01-01', 'category' => 'milestone', 'description' => 'Начал сниматься в кино'],
                    ['title' => 'Вступление в «Алису»', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Стал вокалистом группы'],
                    ['title' => 'Альбом «Энергия»', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Первый альбом с Кинчевым'],
                    ['title' => 'Альбом «Блокдаун»', 'date' => '1987-01-01', 'category' => 'milestone', 'description' => 'Культовый альбом'],
                    ['title' => 'Альбом «Ст. 206 ч. 2»', 'date' => '1988-01-01', 'category' => 'milestone', 'description' => 'Альбом о преследовании рокеров'],
                    ['title' => 'Принятие православия', 'date' => '1990-01-01', 'category' => 'religious', 'description' => 'Крестился в православие'],
                    ['title' => 'Альбом «Шабаш»', 'date' => '1991-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Альбом «Для тех, кто свалился с Луны»', 'date' => '1993-01-01', 'category' => 'milestone', 'description' => 'Концептуальный альбом'],
                    ['title' => 'Альбом «Солнцеворот»', 'date' => '1995-01-01', 'category' => 'milestone', 'description' => 'Альбом с элементами этники'],
                    ['title' => 'Альбом «Дурдом»', 'date' => '2002-01-01', 'category' => 'milestone', 'description' => 'Возвращение к хард-року'],
                    ['title' => 'Альбом «Эксперимент»', 'date' => '2012-01-01', 'category' => 'milestone', 'description' => 'Попытка нового звучания'],
                    ['title' => '35-летие «Алисы»', 'date' => '2020-01-01', 'category' => 'milestone', 'description' => 'Юбилейный тур'],
                ],
            ],

            // === Егор Летов ===
            [
                'slug' => 'egor-letov',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1964-09-10', 'category' => 'milestone', 'description' => 'Родился в Омске'],
                    ['title' => 'Исключение из школы', 'date' => '1980-01-01', 'category' => 'milestone', 'description' => 'Исключён за неуспеваемость'],
                    ['title' => 'Психиатрическая больница', 'date' => '1985-01-01', 'category' => 'health', 'description' => 'Принудительное лечение'],
                    ['title' => 'Создание «Гражданской Обороны»', 'date' => '1984-01-01', 'category' => 'milestone', 'description' => 'Основал группу'],
                    ['title' => 'Альбом «Прыг-скок»', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Один из первых альбомов'],
                    ['title' => 'Альбом «Всё идёт по плану»', 'date' => '1988-01-01', 'category' => 'milestone', 'description' => 'Культовый альбом'],
                    ['title' => 'Альбом «Так закалялась сталь»', 'date' => '1987-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Проект «Коммунизм»', 'date' => '1988-01-01', 'category' => 'milestone', 'description' => 'Сайд-проект'],
                    ['title' => 'Проект «Егор и Опизденевшие»', 'date' => '1990-01-01', 'category' => 'milestone', 'description' => 'Другой сайд-проект'],
                    ['title' => 'Альбом «Сто лет одиночества»', 'date' => '1993-01-01', 'category' => 'milestone', 'description' => 'Возвращение к записи'],
                    ['title' => 'Альбом «Солнцеворот»', 'date' => '1997-01-01', 'category' => 'milestone', 'description' => 'Психоделический альбом'],
                    ['title' => 'Брак с Анастасией Старыгиной', 'date' => '2000-01-01', 'category' => 'milestone', 'description' => 'Женитьба'],
                    ['title' => 'Альбом «Звездопад»', 'date' => '2002-01-01', 'category' => 'milestone', 'description' => 'Кавер-альбом'],
                    ['title' => 'Смерть', 'date' => '2008-02-19', 'category' => 'milestone', 'description' => 'Умер во сне от остановки сердца'],
                ],
            ],

            // === Вячеслав Бутусов ===
            [
                'slug' => 'vyacheslav-butusov',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1961-10-15', 'category' => 'milestone', 'description' => 'Родился в Бугачёве, Свердловская область'],
                    ['title' => 'Окончание школы', 'date' => '1978-01-01', 'category' => 'milestone', 'description' => 'Окончил среднюю школу'],
                    ['title' => 'Поступление в УПИ', 'date' => '1979-01-01', 'category' => 'milestone', 'description' => 'Поступил в Уральский политехнический институт'],
                    ['title' => 'Создание «Наутилуса»', 'date' => '1982-01-01', 'category' => 'milestone', 'description' => 'Основал группу с Дмитрием Умецким'],
                    ['title' => 'Альбом «Переезд»', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Первый студийный альбом'],
                    ['title' => 'Альбом «Князь Тишины»', 'date' => '1988-01-01', 'category' => 'milestone', 'description' => 'Прорывной альбом'],
                    ['title' => 'Альбом «Раскол»', 'date' => '1990-01-01', 'category' => 'milestone', 'description' => 'Последний альбом в Свердловске'],
                    ['title' => 'Переезд в Москву', 'date' => '1991-01-01', 'category' => 'milestone', 'description' => 'Переезд в столицу'],
                    ['title' => 'Альбом «Чужая земля»', 'date' => '1992-01-01', 'category' => 'milestone', 'description' => 'Первый московский альбом'],
                    ['title' => 'Альбом «Титаник»', 'date' => '1993-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Распад «Наутилуса»', 'date' => '1997-01-01', 'category' => 'milestone', 'description' => 'Группа прекратила существование'],
                    ['title' => 'Сольная карьера', 'date' => '1998-01-01', 'category' => 'milestone', 'description' => 'Начало сольной карьеры'],
                    ['title' => 'Группа «Ю-Питер»', 'date' => '2002-01-01', 'category' => 'milestone', 'description' => 'Создание новой группы'],
                    ['title' => 'Воссоединение «Наутилуса»', 'date' => '2016-01-01', 'category' => 'milestone', 'description' => 'Юбилейный тур'],
                ],
            ],

            // === Майк Науменко ===
            [
                'slug' => 'mike-naumenko',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1955-04-18', 'category' => 'milestone', 'description' => 'Родился во Владивостоке'],
                    ['title' => 'Переезд в Ленинград', 'date' => '1972-01-01', 'category' => 'milestone', 'description' => 'Переехал с семьёй'],
                    ['title' => 'Встреча с Борисом Гребенщиковым', 'date' => '1976-01-01', 'category' => 'milestone', 'description' => 'Начало дружбы'],
                    ['title' => 'Создание «Зоопарка»', 'date' => '1981-01-01', 'category' => 'milestone', 'description' => 'Основал группу'],
                    ['title' => 'Альбом «Уездный город N»', 'date' => '1983-01-01', 'category' => 'milestone', 'description' => 'Первый альбом'],
                    ['title' => 'Альбом «Зоопарк» (Белая полоса)', 'date' => '1983-01-01', 'category' => 'milestone', 'description' => 'Культовый альбом'],
                    ['title' => 'Фестиваль в Черноголовке', 'date' => '1987-01-01', 'category' => 'milestone', 'description' => 'Выступление на фестивале'],
                    ['title' => 'Альбом «Музыка для фильма»', 'date' => '1988-01-01', 'category' => 'milestone', 'description' => 'Саундтрек к фильму «Асса»'],
                    ['title' => 'Альбом «Рок-н-рольный Ленинград»', 'date' => '1989-01-01', 'category' => 'milestone', 'description' => 'Последний альбом'],
                    ['title' => 'Смерть', 'date' => '1991-08-27', 'category' => 'milestone', 'description' => 'Умер от кровоизлияния в мозг'],
                ],
            ],

            // === Юрий Клинских (Хой) ===
            [
                'slug' => 'yuri-klinskikh',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1964-07-19', 'category' => 'milestone', 'description' => 'Родился в Воронеже'],
                    ['title' => 'Служба в армии', 'date' => '1982-01-01', 'category' => 'military', 'description' => 'Служил в армии'],
                    ['title' => 'Создание «Сектора Газа»', 'date' => '1987-01-01', 'category' => 'milestone', 'description' => 'Основал группу'],
                    ['title' => 'Альбом «Колхозный панк»', 'date' => '1989-01-01', 'category' => 'milestone', 'description' => 'Первый альбом'],
                    ['title' => 'Альбом «Зловещие мертвецы»', 'date' => '1989-01-01', 'category' => 'milestone', 'description' => 'Культовый альбом'],
                    ['title' => 'Альбом «Ядрёна вошь»', 'date' => '1990-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Альбом «Гуляй, мужик!»', 'date' => '1991-01-01', 'category' => 'milestone', 'description' => 'Прорывной альбом'],
                    ['title' => 'Альбом «Сектор Газа» (Лирика)', 'date' => '1994-01-01', 'category' => 'milestone', 'description' => 'Лирический альбом'],
                    ['title' => 'Альбом «Газовая атака»', 'date' => '1997-01-01', 'category' => 'milestone', 'description' => 'Последний студийный альбом'],
                    ['title' => 'Смерть', 'date' => '2000-07-04', 'category' => 'milestone', 'description' => 'Умер от сердечного приступа в 36 лет'],
                ],
            ],

            // === Михаил Горшенёв ===
            [
                'slug' => 'mikhail-gorshenev',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1973-08-07', 'category' => 'milestone', 'description' => 'Родился в Ленинграде'],
                    ['title' => 'Встреча с Александром Балуновым', 'date' => '1988-01-01', 'category' => 'milestone', 'description' => 'Начало сотрудничества'],
                    ['title' => 'Создание «Короля и Шута»', 'date' => '1989-01-01', 'category' => 'milestone', 'description' => 'Основал группу'],
                    ['title' => 'Альбом «Камнем по голове»', 'date' => '1996-01-01', 'category' => 'milestone', 'description' => 'Первый студийный альбом'],
                    ['title' => 'Альбом «Будь как дома, путник»', 'date' => '1997-01-01', 'category' => 'milestone', 'description' => 'Второй альбом'],
                    ['title' => 'Альбом «Акустический альбом»', 'date' => '1999-01-01', 'category' => 'milestone', 'description' => 'Акустический альбом'],
                    ['title' => 'Альбом «Герои и злодеи»', 'date' => '2000-01-01', 'category' => 'milestone', 'description' => 'Концептуальный альбом'],
                    ['title' => 'Альбом «Жаль, нет ружья»', 'date' => '2002-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Альбом «Продавец кошмаров»', 'date' => '2004-01-01', 'category' => 'milestone', 'description' => 'Рок-опера'],
                    ['title' => 'Альбом «Бунт на корабле»', 'date' => '2006-01-01', 'category' => 'milestone', 'description' => 'Пиратский альбом'],
                    ['title' => 'Альбом «Тень клоуна»', 'date' => '2008-01-01', 'category' => 'milestone', 'description' => 'Последний альбом при жизни Горшка'],
                    ['title' => 'Смерть', 'date' => '2013-07-19', 'category' => 'milestone', 'description' => 'Умер от сердечной недостаточности в 39 лет'],
                ],
            ],

            // === Сергей Шнуров ===
            [
                'slug' => 'sergey-shnurov',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1973-04-13', 'category' => 'milestone', 'description' => 'Родился в Ленинграде'],
                    ['title' => 'Окончание школы', 'date' => '1990-01-01', 'category' => 'milestone', 'description' => 'Окончил среднюю школу'],
                    ['title' => 'Поступление в Герцена', 'date' => '1991-01-01', 'category' => 'milestone', 'description' => 'Поступил в педагогический университет'],
                    ['title' => 'Создание «Ленинграда»', 'date' => '1997-01-01', 'category' => 'milestone', 'description' => 'Основал группу'],
                    ['title' => 'Альбом «Мат без музыки»', 'date' => '1999-01-01', 'category' => 'milestone', 'description' => 'Первый альбом'],
                    ['title' => 'Альбом «Пуля»', 'date' => '2001-01-01', 'category' => 'milestone', 'description' => 'Прорывной альбом'],
                    ['title' => 'Альбом «Маде ин жопа»', 'date' => '2002-01-01', 'category' => 'milestone', 'description' => 'Культовый альбом'],
                    ['title' => 'Хит «Экспонат»', 'date' => '2016-01-01', 'category' => 'milestone', 'description' => 'Вирусный хит про лабутены'],
                    ['title' => 'Распад группы', 'date' => '2008-01-01', 'category' => 'milestone', 'description' => 'Объявил о распаде'],
                    ['title' => 'Воссоединение', 'date' => '2010-01-01', 'category' => 'milestone', 'description' => 'Группа воссоединилась'],
                    ['title' => 'Второй распад', 'date' => '2022-01-01', 'category' => 'milestone', 'description' => 'Объявил о прекращении выступлений'],
                    ['title' => 'Политическая карьера', 'date' => '2021-01-01', 'category' => 'political', 'description' => 'Вступил в Партию Роста'],
                ],
            ],

            // === Гарик Сукачёв ===
            [
                'slug' => 'garik-sukachev',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1959-12-01', 'category' => 'milestone', 'description' => 'Родился в Москве'],
                    ['title' => 'Создание «Бригады С»', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Основал группу'],
                    ['title' => 'Альбом «Сделай мне громче»', 'date' => '1987-01-01', 'category' => 'milestone', 'description' => 'Первый альбом'],
                    ['title' => 'Создание «Неприкасаемых»', 'date' => '1993-01-01', 'category' => 'milestone', 'description' => 'Основал новую группу'],
                    ['title' => 'Альбом «Гудбай, Америка!»', 'date' => '1995-01-01', 'category' => 'milestone', 'description' => 'Культовый альбом'],
                    ['title' => 'Альбом «Крёстный папа»', 'date' => '1999-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Альбом «Песни с окраины»', 'date' => '2004-01-01', 'category' => 'milestone', 'description' => 'Возвращение к корням'],
                    ['title' => 'Сольная карьера', 'date' => '2005-01-01', 'category' => 'milestone', 'description' => 'Начало сольной карьеры'],
                    ['title' => '60-летие', 'date' => '2019-12-01', 'category' => 'milestone', 'description' => 'Юбилейный концерт'],
                ],
            ],

            // === Валерий Кипелов ===
            [
                'slug' => 'valeriy-kipelov',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1957-07-12', 'category' => 'milestone', 'description' => 'Родился в Москве'],
                    ['title' => 'Вступление в «Арию»', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Стал вокалистом группы'],
                    ['title' => 'Альбом «Мания величия»', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Первый альбом с Кипеловым'],
                    ['title' => 'Альбом «Герой асфальта»', 'date' => '1987-01-01', 'category' => 'milestone', 'description' => 'Культовый альбом'],
                    ['title' => 'Альбом «Игра с огнём»', 'date' => '1989-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Альбом «Кровь за кровь»', 'date' => '1991-01-01', 'category' => 'milestone', 'description' => 'Последний альбом перед распадом'],
                    ['title' => 'Альбом «Ночь тише дня»', 'date' => '1995-01-01', 'category' => 'milestone', 'description' => 'Возвращение группы'],
                    ['title' => 'Уход из «Арии»', 'date' => '2002-01-01', 'category' => 'milestone', 'description' => 'Покинул группу'],
                    ['title' => 'Создание «Кипелова»', 'date' => '2002-01-01', 'category' => 'milestone', 'description' => 'Основал свою группу'],
                    ['title' => 'Альбом «Смутное время»', 'date' => '2005-01-01', 'category' => 'milestone', 'description' => 'Первый альбом новой группы'],
                    ['title' => 'Альбом «Vae Victis»', 'date' => '2011-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => '30-летие «Арии»', 'date' => '2015-01-01', 'category' => 'milestone', 'description' => 'Участие в юбилейном концерте'],
                ],
            ],

            // === Земфира ===
            [
                'slug' => 'zemfira',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1976-08-26', 'category' => 'milestone', 'description' => 'Родилась в Уфе'],
                    ['title' => 'Окончание музыкальной школы', 'date' => '1993-01-01', 'category' => 'milestone', 'description' => 'Окончила по классу фортепиано'],
                    ['title' => 'Переезд в Москву', 'date' => '1997-01-01', 'category' => 'milestone', 'description' => 'Переехала для записи альбома'],
                    ['title' => 'Дебютный альбом «Земфира»', 'date' => '1999-01-01', 'category' => 'milestone', 'description' => 'Прорывной альбом'],
                    ['title' => 'Хит «Ромашки»', 'date' => '1999-01-01', 'category' => 'milestone', 'description' => 'Первый хит'],
                    ['title' => 'Альбом «Форточка»', 'date' => '2000-01-01', 'category' => 'milestone', 'description' => 'Второй альбом'],
                    ['title' => 'Альбом «Четырнадцать недель тишины»', 'date' => '2002-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Альбом «Вендетта»', 'date' => '2005-01-01', 'category' => 'milestone', 'description' => 'Четвёртый альбом'],
                    ['title' => 'Альбом «Земфира.Live»', 'date' => '2006-01-01', 'category' => 'milestone', 'description' => 'Концертный альбом'],
                    ['title' => 'Альбом «Земфира.ХХ»', 'date' => '2019-01-01', 'category' => 'milestone', 'description' => 'Юбилейный альбом'],
                ],
            ],

            // === Александр Васильев (Сплин) ===
            [
                'slug' => 'alexander-vasilyev',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1969-08-20', 'category' => 'milestone', 'description' => 'Родился в Ленинграде'],
                    ['title' => 'Окончание школы', 'date' => '1986-01-01', 'category' => 'milestone', 'description' => 'Окончил среднюю школу'],
                    ['title' => 'Создание «Сплина»', 'date' => '1994-01-01', 'category' => 'milestone', 'description' => 'Основал группу'],
                    ['title' => 'Альбом «Пыльная быль»', 'date' => '1994-01-01', 'category' => 'milestone', 'description' => 'Дебютный альбом'],
                    ['title' => 'Альбом «Коллекционер оружия»', 'date' => '1996-01-01', 'category' => 'milestone', 'description' => 'Прорывной альбом'],
                    ['title' => 'Альбом «Гранатовый альбом»', 'date' => '1998-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Альбом «25 кадр»', 'date' => '2001-01-01', 'category' => 'milestone', 'description' => 'Пятый альбом'],
                    ['title' => 'Альбом «Новые люди»', 'date' => '2003-01-01', 'category' => 'milestone', 'description' => 'Шестой альбом'],
                    ['title' => 'Альбом «Раздвоение личности»', 'date' => '2007-01-01', 'category' => 'milestone', 'description' => 'Седьмой альбом'],
                    ['title' => 'Альбом «Обман зрения»', 'date' => '2009-01-01', 'category' => 'milestone', 'description' => 'Восьмой альбом'],
                ],
            ],

            // === Илья Лагутенко ===
            [
                'slug' => 'ilya-lagutenko',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1968-10-16', 'category' => 'milestone', 'description' => 'Родился во Владивостоке'],
                    ['title' => 'Переезд в Италию', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Учился в Риме'],
                    ['title' => 'Возвращение в Россию', 'date' => '1993-01-01', 'category' => 'milestone', 'description' => 'Вернулся из Италии'],
                    ['title' => 'Создание «Мумий Тролля»', 'date' => '1993-01-01', 'category' => 'milestone', 'description' => 'Возродил группу'],
                    ['title' => 'Альбом «Морская»', 'date' => '1997-01-01', 'category' => 'milestone', 'description' => 'Прорывной альбом'],
                    ['title' => 'Хит «Утекай»', 'date' => '1997-01-01', 'category' => 'milestone', 'description' => 'Первый хит'],
                    ['title' => 'Альбом «Икра»', 'date' => '1999-01-01', 'category' => 'milestone', 'description' => 'Второй альбом'],
                    ['title' => 'Альбом «Точно Ртуть Алоэ»', 'date' => '2002-01-01', 'category' => 'milestone', 'description' => 'Третий альбом'],
                    ['title' => 'Проект «SOS Математика»', 'date' => '2010-01-01', 'category' => 'milestone', 'description' => 'Детский альбом'],
                    ['title' => '50-летие', 'date' => '2018-10-16', 'category' => 'milestone', 'description' => 'Юбилейный концерт'],
                ],
            ],

            // === Владимир Шахрин ===
            [
                'slug' => 'vladimir-shakhrin',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1959-01-18', 'category' => 'milestone', 'description' => 'Родился в Свердловске'],
                    ['title' => 'Создание «Чайфа»', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Основал группу'],
                    ['title' => 'Альбом «Время не ждёт»', 'date' => '1989-01-01', 'category' => 'milestone', 'description' => 'Первый альбом'],
                    ['title' => 'Альбом «Дети гор»', 'date' => '1991-01-01', 'category' => 'milestone', 'description' => 'Второй альбом'],
                    ['title' => 'Альбом «Оранжевое настроение»', 'date' => '1993-01-01', 'category' => 'milestone', 'description' => 'Культовый альбом'],
                    ['title' => 'Альбом «Самый лучший подарок»', 'date' => '2004-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => '60-летие', 'date' => '2019-01-18', 'category' => 'milestone', 'description' => 'Юбилейный концерт'],
                ],
            ],

            // === Эдмунд Шклярский ===
            [
                'slug' => 'edmund-shklyarsky',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1956-08-25', 'category' => 'milestone', 'description' => 'Родился в Ленинграде'],
                    ['title' => 'Создание «Пикника»', 'date' => '1978-01-01', 'category' => 'milestone', 'description' => 'Основал группу'],
                    ['title' => 'Альбом «Дым»', 'date' => '1982-01-01', 'category' => 'milestone', 'description' => 'Первый альбом'],
                    ['title' => 'Альбом «Танец на крыше»', 'date' => '1992-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Альбом «Стекло»', 'date' => '1995-01-01', 'category' => 'milestone', 'description' => 'Культовый альбом'],
                    ['title' => 'Альбом «Говори не говори»', 'date' => '2009-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => '40-летие «Пикника»', 'date' => '2018-01-01', 'category' => 'milestone', 'description' => 'Юбилейный тур'],
                ],
            ],

            // === Леонид Фёдоров ===
            [
                'slug' => 'leonid-fedorov',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1963-05-04', 'category' => 'milestone', 'description' => 'Родился в Ленинграде'],
                    ['title' => 'Создание «АукцЫона»', 'date' => '1988-01-01', 'category' => 'milestone', 'description' => 'Основал группу'],
                    ['title' => 'Альбом «Птица»', 'date' => '1990-01-01', 'category' => 'milestone', 'description' => 'Первый альбом'],
                    ['title' => 'Альбом «Жопа»', 'date' => '1990-01-01', 'category' => 'milestone', 'description' => 'Культовый альбом'],
                    ['title' => 'Альбом «Девятка»', 'date' => '2013-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Сотрудничество с Волковым', 'date' => '2000-01-01', 'category' => 'milestone', 'description' => 'Начало сотрудничества'],
                ],
            ],

            // === Лёва Би-2 ===
            [
                'slug' => 'leva-bi2',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1968-08-02', 'category' => 'milestone', 'description' => 'Родился в Минске'],
                    ['title' => 'Создание «Би-2»', 'date' => '1988-01-01', 'category' => 'milestone', 'description' => 'Основал группу с Шурой'],
                    ['title' => 'Переезд в Австралию', 'date' => '1991-01-01', 'category' => 'milestone', 'description' => 'Эмиграция'],
                    ['title' => 'Возвращение в Россию', 'date' => '1998-01-01', 'category' => 'milestone', 'description' => 'Вернулся из Австралии'],
                    ['title' => 'Альбом «Би-2»', 'date' => '1999-01-01', 'category' => 'milestone', 'description' => 'Прорывной альбом'],
                    ['title' => 'Хит «Полковнику никто не пишет»', 'date' => '1999-01-01', 'category' => 'milestone', 'description' => 'Первый хит'],
                    ['title' => 'Альбом «Мяу кисс ми»', 'date' => '2001-01-01', 'category' => 'milestone', 'description' => 'Второй альбом'],
                    ['title' => 'Альбом «Итальянец»', 'date' => '2004-01-01', 'category' => 'milestone', 'description' => 'Третий альбом'],
                    ['title' => 'Альбом «Лунапарк»', 'date' => '2009-01-01', 'category' => 'milestone', 'description' => 'Четвёртый альбом'],
                    ['title' => 'Альбом «Горизонт событий»', 'date' => '2017-01-01', 'category' => 'milestone', 'description' => 'Пятый альбом'],
                ],
            ],

            // === Анатолий Крупнов ===
            [
                'slug' => 'anatoly-krupnov',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1965-03-07', 'category' => 'milestone', 'description' => 'Родился в Москве'],
                    ['title' => 'Создание «Чёрного Обелиска»', 'date' => '1986-01-01', 'category' => 'milestone', 'description' => 'Основал группу'],
                    ['title' => 'Альбом «Стены рухнут»', 'date' => '1989-01-01', 'category' => 'milestone', 'description' => 'Первый альбом'],
                    ['title' => 'Альбом «Полёт»', 'date' => '1992-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Альбом «Всё, что было дальше»', 'date' => '1995-01-01', 'category' => 'milestone', 'description' => 'Последний альбом при жизни'],
                    ['title' => 'Смерть', 'date' => '1997-02-27', 'category' => 'milestone', 'description' => 'Умер от сердечного приступа в 32 года'],
                ],
            ],

            // === Илья Кормильцев ===
            [
                'slug' => 'ilya-kormiltsev',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1959-10-17', 'category' => 'milestone', 'description' => 'Родился в Свердловске'],
                    ['title' => 'Встреча с Бутусовым', 'date' => '1982-01-01', 'category' => 'milestone', 'description' => 'Начало сотрудничества'],
                    ['title' => 'Написание текстов для «Наутилуса»', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Стал автором текстов'],
                    ['title' => 'Альбом «Князь Тишины»', 'date' => '1988-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Переезд в Москву', 'date' => '1991-01-01', 'category' => 'milestone', 'description' => 'Переезд в столицу'],
                    ['title' => 'Издательство «Ультра.Культура»', 'date' => '2002-01-01', 'category' => 'milestone', 'description' => 'Основал издательство'],
                    ['title' => 'Смерть', 'date' => '2007-02-04', 'category' => 'milestone', 'description' => 'Умер от фиброза лёгких'],
                ],
            ],

            // === Александр Балунов ===
            [
                'slug' => 'alexander-balunov',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1971-05-07', 'category' => 'milestone', 'description' => 'Родился в Ленинграде'],
                    ['title' => 'Встреча с Горшенёвым', 'date' => '1988-01-01', 'category' => 'milestone', 'description' => 'Начало сотрудничества'],
                    ['title' => 'Создание «Короля и Шута»', 'date' => '1989-01-01', 'category' => 'milestone', 'description' => 'Сооснователь группы'],
                    ['title' => 'Альбом «Камнем по голове»', 'date' => '1996-01-01', 'category' => 'milestone', 'description' => 'Первый студийный альбом'],
                    ['title' => 'Уход из группы', 'date' => '2011-01-01', 'category' => 'milestone', 'description' => 'Покинул группу'],
                ],
            ],

            // === Вадим Самойлов ===
            [
                'slug' => 'vadim-samoylov',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1964-04-29', 'category' => 'milestone', 'description' => 'Родился в Копейске'],
                    ['title' => 'Создание «Агаты Кристи»', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Основал группу с братом'],
                    ['title' => 'Альбом «Второй фронт»', 'date' => '1989-01-01', 'category' => 'milestone', 'description' => 'Первый альбом'],
                    ['title' => 'Альбом «Ковёр-вертолёт»', 'date' => '1993-01-01', 'category' => 'milestone', 'description' => 'Прорывной альбом'],
                    ['title' => 'Альбом «Опиум»', 'date' => '1995-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Альбом «Ураган»', 'date' => '1997-01-01', 'category' => 'milestone', 'description' => 'Культовый альбом'],
                    ['title' => 'Распад группы', 'date' => '2010-01-01', 'category' => 'milestone', 'description' => 'Группа прекратила существование'],
                ],
            ],

            // === Глеб Самойлов ===
            [
                'slug' => 'gleb-samoylov',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1970-07-11', 'category' => 'milestone', 'description' => 'Родился в Копейске'],
                    ['title' => 'Создание «Агаты Кристи»', 'date' => '1985-01-01', 'category' => 'milestone', 'description' => 'Сооснователь группы'],
                    ['title' => 'Альбом «Позорная звезда»', 'date' => '1993-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Альбом «Чудесный мир»', 'date' => '2000-01-01', 'category' => 'milestone', 'description' => 'Последний альбом'],
                    ['title' => 'Распад группы', 'date' => '2010-01-01', 'category' => 'milestone', 'description' => 'Группа прекратила существование'],
                    ['title' => 'Глеб Самойлоff & The Matrixx', 'date' => '2011-01-01', 'category' => 'milestone', 'description' => 'Создание новой группы'],
                ],
            ],

            // === Сергей Бобунец ===
            [
                'slug' => 'sergey-bobunets',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1970-09-09', 'category' => 'milestone', 'description' => 'Родился в Свердловске'],
                    ['title' => 'Создание «Смысловых Галлюцинаций»', 'date' => '1993-01-01', 'category' => 'milestone', 'description' => 'Основал группу'],
                    ['title' => 'Альбом «Бесконечность»', 'date' => '1997-01-01', 'category' => 'milestone', 'description' => 'Первый альбом'],
                    ['title' => 'Альбом «Отпусти меня»', 'date' => '2001-01-01', 'category' => 'milestone', 'description' => 'Прорывной альбом'],
                    ['title' => 'Хит «Я люблю тебя до слёз»', 'date' => '2001-01-01', 'category' => 'milestone', 'description' => 'Первый хит'],
                    ['title' => 'Альбом «Вечно молодой»', 'date' => '2007-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                ],
            ],

            // === Максим Покровский ===
            [
                'slug' => 'max-pokrovsky',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1969-05-11', 'category' => 'milestone', 'description' => 'Родился в Москве'],
                    ['title' => 'Создание «Ногу Свело!»', 'date' => '1992-01-01', 'category' => 'milestone', 'description' => 'Основал группу'],
                    ['title' => 'Альбом «Хару Мамбуру»', 'date' => '1994-01-01', 'category' => 'milestone', 'description' => 'Первый альбом'],
                    ['title' => 'Хит «Московский бит»', 'date' => '1998-01-01', 'category' => 'milestone', 'description' => 'Первый хит'],
                    ['title' => 'Альбом «Икс»', 'date' => '2000-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Альбом «Сибирь»', 'date' => '2006-01-01', 'category' => 'milestone', 'description' => 'Концептуальный альбом'],
                ],
            ],

            // === Анастасия Полева ===
            [
                'slug' => 'anastasia-poleva',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1963-06-05', 'category' => 'milestone', 'description' => 'Родилась в Свердловске'],
                    ['title' => 'Создание группы «Настя»', 'date' => '1986-01-01', 'category' => 'milestone', 'description' => 'Основала группу'],
                    ['title' => 'Альбом «Кто я?»', 'date' => '1989-01-01', 'category' => 'milestone', 'description' => 'Первый альбом'],
                    ['title' => 'Альбом «Танцы»', 'date' => '1992-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Альбом «Две сестры»', 'date' => '1995-01-01', 'category' => 'milestone', 'description' => 'Культовый альбом'],
                    ['title' => '60-летие', 'date' => '2023-06-05', 'category' => 'milestone', 'description' => 'Юбилейный концерт'],
                ],
            ],

            // === Евгений Фёдоров ===
            [
                'slug' => 'evgeny-fedorov',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1969-01-01', 'category' => 'milestone', 'description' => 'Родился в Ленинграде'],
                    ['title' => 'Создание Tequilajazzz', 'date' => '1993-01-01', 'category' => 'milestone', 'description' => 'Основал группу'],
                    ['title' => 'Альбом «Высота»', 'date' => '1996-01-01', 'category' => 'milestone', 'description' => 'Первый альбом'],
                    ['title' => 'Альбом «Целлулоид»', 'date' => '1999-01-01', 'category' => 'milestone', 'description' => 'Прорывной альбом'],
                    ['title' => 'Альбом «Сердце»', 'date' => '2003-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Распад группы', 'date' => '2010-01-01', 'category' => 'milestone', 'description' => 'Группа прекратила существование'],
                ],
            ],

            // === Святослав Вакарчук ===
            [
                'slug' => 'svyatoslav-vakarchuk',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1975-05-14', 'category' => 'milestone', 'description' => 'Родился в Мукачево, Украина'],
                    ['title' => 'Создание «Океан Ельзы»', 'date' => '1994-01-01', 'category' => 'milestone', 'description' => 'Основал группу'],
                    ['title' => 'Альбом «Там, де нас нема»', 'date' => '1998-01-01', 'category' => 'milestone', 'description' => 'Прорывной альбом'],
                    ['title' => 'Альбом «Я на небі був»', 'date' => '2000-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Альбом «Суперсиметрія»', 'date' => '2003-01-01', 'category' => 'milestone', 'description' => 'Культовый альбом'],
                    ['title' => 'Альбом «Gloria»', 'date' => '2005-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Альбом «Dolce Vita»', 'date' => '2010-01-01', 'category' => 'milestone', 'description' => 'Пятый альбом'],
                    ['title' => 'Политическая карьера', 'date' => '2019-01-01', 'category' => 'political', 'description' => 'Основал партию «Голос»'],
                ],
            ],

            // === Сергей Михалок ===
            [
                'slug' => 'sergey-mikhalok',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1972-01-01', 'category' => 'milestone', 'description' => 'Родился в Минске'],
                    ['title' => 'Создание «Ляписа Трубецкого»', 'date' => '1990-01-01', 'category' => 'milestone', 'description' => 'Основал группу'],
                    ['title' => 'Альбом «Ранетое сердце»', 'date' => '1996-01-01', 'category' => 'milestone', 'description' => 'Первый альбом'],
                    ['title' => 'Альбом «Тяжкий»', 'date' => '1999-01-01', 'category' => 'milestone', 'description' => 'Прорывной альбом'],
                    ['title' => 'Альбом «Юность»', 'date' => '2004-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Альбом «Матрёшка»', 'date' => '2007-01-01', 'category' => 'milestone', 'description' => 'Культовый альбом'],
                    ['title' => 'Распад группы', 'date' => '2014-01-01', 'category' => 'milestone', 'description' => 'Группа прекратила существование'],
                    ['title' => 'Создание «Бригады»', 'date' => '2015-01-01', 'category' => 'milestone', 'description' => 'Новая группа'],
                ],
            ],

            // === Олег Скрипка ===
            [
                'slug' => 'oleg-skrypka',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1964-05-24', 'category' => 'milestone', 'description' => 'Родился в Баку'],
                    ['title' => 'Создание «Воплей Видоплясова»', 'date' => '1986-01-01', 'category' => 'milestone', 'description' => 'Основал группу'],
                    ['title' => 'Альбом «Або-або»', 'date' => '1994-01-01', 'category' => 'milestone', 'description' => 'Первый альбом'],
                    ['title' => 'Альбом «Країна мрій»', 'date' => '1997-01-01', 'category' => 'milestone', 'description' => 'Прорывной альбом'],
                    ['title' => 'Альбом «Хвилі Амура»', 'date' => '2002-01-01', 'category' => 'milestone', 'description' => 'Один из лучших альбомов'],
                    ['title' => 'Фестиваль «Країна Мрій»', 'date' => '2004-01-01', 'category' => 'milestone', 'description' => 'Основал фестиваль'],
                ],
            ],

            // === Андрей Хлывнюк ===
            [
                'slug' => 'andrei-khlyvnyuk',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1979-01-01', 'category' => 'milestone', 'description' => 'Родился в Киеве'],
                    ['title' => 'Создание «Бумбокса»', 'date' => '2004-01-01', 'category' => 'milestone', 'description' => 'Основал группу'],
                    ['title' => 'Альбом «Меломания»', 'date' => '2005-01-01', 'category' => 'milestone', 'description' => 'Первый альбом'],
                    ['title' => 'Альбом «Кантри»', 'date' => '2008-01-01', 'category' => 'milestone', 'description' => 'Прорывной альбом'],
                    ['title' => 'Хит «Вахтёрам»', 'date' => '2015-01-01', 'category' => 'milestone', 'description' => 'Вирусный хит'],
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
