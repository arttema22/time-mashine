<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RussianEmperorsSeeder extends Seeder
{
    public function run(): void
    {
        $emperors = [
            [
                'name' => 'Пётр I Алексеевич',
                'slug' => 'pyotr-i-alekseevich',
                'birth_date' => '1672-06-09',
                'death_date' => '1725-02-08',
                'biography' => 'Пётр Великий, первый Император Всероссийский. Основатель Санкт-Петербурга, реформатор России.',
            ],
            [
                'name' => 'Екатерина I Алексеевна',
                'slug' => 'ekaterina-i-alekseevna',
                'birth_date' => '1684-04-15',
                'death_date' => '1727-05-17',
                'biography' => 'Первая императрица России, супруга Петра I.',
            ],
            [
                'name' => 'Пётр II Алексеевич',
                'slug' => 'pyotr-ii-alekseevich',
                'birth_date' => '1715-10-23',
                'death_date' => '1730-01-30',
                'biography' => 'Внук Петра I, последний представитель прямой мужской линии Романовых.',
            ],
            [
                'name' => 'Анна I Иоанновна',
                'slug' => 'anna-i-ioannovna',
                'birth_date' => '1693-02-07',
                'death_date' => '1740-10-28',
                'biography' => 'Дочь царя Ивана V, племянница Петра I.',
            ],
            [
                'name' => 'Иван VI Антонович',
                'slug' => 'ivan-vi-antonovich',
                'birth_date' => '1740-08-23',
                'death_date' => '1764-07-16',
                'biography' => 'Император-младенец, свергнут в 1741 году. Содержался в заключении.',
            ],
            [
                'name' => 'Елизавета Петровна',
                'slug' => 'elizaveta-petrovna',
                'birth_date' => '1709-12-29',
                'death_date' => '1762-01-05',
                'biography' => 'Дочь Петра I и Екатерины I. Основательница Московского университета.',
            ],
            [
                'name' => 'Пётр III Фёдорович',
                'slug' => 'pyotr-iii-fedorovich',
                'birth_date' => '1728-02-21',
                'death_date' => '1762-07-17',
                'biography' => 'Внук Петра I. Свергнут в результате дворцового переворота.',
            ],
            [
                'name' => 'Екатерина II Алексеевна',
                'slug' => 'ekaterina-ii-alekseevna',
                'birth_date' => '1729-05-02',
                'death_date' => '1796-11-17',
                'biography' => 'Екатерина Великая. Период её правления — «золотой век» русского дворянства.',
            ],
            [
                'name' => 'Павел I Петрович',
                'slug' => 'pavel-i-petrovich',
                'birth_date' => '1754-10-01',
                'death_date' => '1801-03-23',
                'biography' => 'Сын Екатерины II и Петра III. Убит в результате заговора.',
            ],
            [
                'name' => 'Александр I Павлович',
                'slug' => 'aleksandr-i-pavlovich',
                'birth_date' => '1777-12-23',
                'death_date' => '1825-12-01',
                'biography' => 'Император эпохи наполеоновских войн. Победитель Наполеона.',
            ],
            [
                'name' => 'Николай I Павлович',
                'slug' => 'nikolai-i-pavlovich',
                'birth_date' => '1796-07-06',
                'death_date' => '1855-03-02',
                'biography' => 'Император, подавивший восстание декабристов. Период «апогея самодержавия».',
            ],
            [
                'name' => 'Александр II Николаевич',
                'slug' => 'aleksandr-ii-nikolaevich',
                'birth_date' => '1818-04-29',
                'death_date' => '1881-03-13',
                'biography' => 'Освободитель. Отменил крепостное право в 1861 году. Убит народовольцами.',
            ],
            [
                'name' => 'Александр III Александрович',
                'slug' => 'aleksandr-iii-aleksandrovich',
                'birth_date' => '1845-03-10',
                'death_date' => '1894-11-01',
                'biography' => 'Миротворец. Период консервативной стабилизации и промышленного роста.',
            ],
            [
                'name' => 'Николай II Александрович',
                'slug' => 'nikolai-ii-aleksandrovich',
                'birth_date' => '1868-05-18',
                'death_date' => '1918-07-17',
                'biography' => 'Последний Император Всероссийский. Отрёкся от престола в 1917 году. Расстрелян большевиками.',
            ],
        ];

        foreach ($emperors as $emperor) {
            DB::table('people')->updateOrInsert(
                ['slug' => $emperor['slug']],
                [
                    'name' => $emperor['name'],
                    'birth_date' => $emperor['birth_date'],
                    'death_date' => $emperor['death_date'],
                    'biography' => $emperor['biography'] ?? null,
                    'photo_path' => null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
