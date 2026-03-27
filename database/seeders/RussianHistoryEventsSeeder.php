<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// Пример использования в Seeder
class RussianHistoryEventsSeeder extends Seeder
{
    public function run()
    {
        $events = [
            [
                'title' => 'Основание Новгорода',
                'description' => 'Традиционная дата основания Новгорода как одного из первых городов Восточной Европы, связываемого с призванием варягов.',
                'started_at' => '0857-01-01 00:00:00', // Приблизительная дата
                'ended_at' => null,
                'eventable_type' => null, // Глобальное событие
                'eventable_id' => null,
                'category' => 'milestone', // Изменено на milestone
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Крещение Руси',
                'description' => 'Принятие христианства как государственной религии под управлением князя Владимира.',
                'started_at' => '0988-01-01 00:00:00',
                'ended_at' => null,
                'eventable_type' => null,
                'eventable_id' => null,
                'category' => 'religious', // Оставляем religious
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Монгольское нашествие',
                'description' => 'Начало завоевания русских земель монголами под предводительством Батыя.',
                'started_at' => '1237-01-01 00:00:00',
                'ended_at' => '1480-01-01 00:00:00', // Условное окончание - стояние на Угре
                'eventable_type' => null,
                'eventable_id' => null,
                'category' => 'military', // Изменено на military
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Образование Московского княжества',
                'description' => 'Возвышение Москвы как центра объединения русских земель.',
                'started_at' => '1283-01-01 00:00:00', // Основание Москвы часто датируется 1147, но княжество формировалось позже
                'ended_at' => '1547-01-01 00:00:00', // Условно до царства Ивана IV
                'eventable_type' => null,
                'eventable_id' => null,
                'category' => 'political', // Изменено на political
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Иван III освобождает Русь от ордынского владычества',
                'description' => 'Стояние на Угре. Фактическое освобождение от зависимости Золотой Орды.',
                'started_at' => '1480-11-08 00:00:00',
                'ended_at' => null,
                'eventable_type' => null,
                'eventable_id' => null,
                'category' => 'military', // Изменено на military
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Образование Российского царства',
                'description' => 'Иван IV Грозный становится первым русским царем.',
                'started_at' => '1547-01-01 00:00:00',
                'ended_at' => '1721-01-01 00:00:00', // Условно до Российской империи
                'eventable_type' => null,
                'eventable_id' => null,
                'category' => 'political', // Изменено на political
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Петр I провозглашён Императором. Образование Российской империи',
                'description' => 'Россия получает статус империи, Петр I становится первым императором.',
                'started_at' => '1721-11-02 00:00:00',
                'ended_at' => '1917-03-15 00:00:00', // До падения монархии
                'eventable_type' => null,
                'eventable_id' => null,
                'category' => 'political', // Изменено на political
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Отечественная война 1812 года',
                'description' => 'Война между Российской империей и наполеоновской Францией.',
                'started_at' => '1812-06-24 00:00:00',
                'ended_at' => '1812-12-14 00:00:00',
                'eventable_type' => null,
                'eventable_id' => null,
                'category' => 'war', // Оставляем war
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Отмена крепостного права',
                'description' => 'Манифест Александра II об отмене крепостного права в Российской империи.',
                'started_at' => '1861-02-19 00:00:00',
                'ended_at' => null,
                'eventable_type' => null,
                'eventable_id' => null,
                'category' => 'political', // Изменено на political (это политическое решение)
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Первая мировая война',
                'description' => 'Участие Российской империи в Первой мировой войне.',
                'started_at' => '1914-08-01 00:00:00', // Россия вступила в войну 1 авг (ст. ст.)
                'ended_at' => '1917-02-26 00:00:00', // Выход из войны фактически начался с Февральской революции
                'eventable_type' => null,
                'eventable_id' => null,
                'category' => 'war', // Оставляем war
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Февральская революция',
                'description' => 'Свержение самодержавия и падение Российской империи.',
                'started_at' => '1917-02-23 00:00:00', // Начало массовых выступлений
                'ended_at' => '1917-03-15 00:00:00', // Отречение Николая II
                'eventable_type' => null,
                'eventable_id' => null,
                'category' => 'political', // Изменено на political
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Октябрьская революция',
                'description' => 'Большевики во главе с Лениным захватывают власть.',
                'started_at' => '1917-10-25 00:00:00', // По старому стилю
                'ended_at' => null,
                'eventable_type' => null,
                'eventable_id' => null,
                'category' => 'political', // Изменено на political
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Гражданская война в России',
                'description' => 'Вооружённый конфликт между Красными и Белыми армиями.',
                'started_at' => '1918-01-01 00:00:00', // Условное начало
                'ended_at' => '1922-10-25 00:00:00', // Падение Владивостока, окончание основных боевых действий
                'eventable_type' => null,
                'eventable_id' => null,
                'category' => 'war', // Оставляем war
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Образование СССР',
                'description' => 'Формирование Союза Советских Социалистических Республик.',
                'started_at' => '1922-12-30 00:00:00',
                'ended_at' => '1991-12-26 00:00:00', // Распад СССР
                'eventable_type' => null,
                'eventable_id' => null,
                'category' => 'political', // Изменено на political
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Великая Отечественная война',
                'description' => 'Часть Второй мировой войны - война СССР против фашистской Германиии и её союзников.',
                'started_at' => '1941-06-22 00:00:00',
                'ended_at' => '1945-05-09 00:00:00',
                'eventable_type' => null,
                'eventable_id' => null,
                'category' => 'war', // Оставляем war
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Хрущёвская оттепель',
                'description' => 'Период относительной либерализации в СССР после смерти Сталина.',
                'started_at' => '1953-03-05 00:00:00', // Смерть Сталина
                'ended_at' => '1964-10-14 00:00:00', // Смещение Хрущёва
                'eventable_type' => null,
                'eventable_id' => null,
                'category' => 'political', // Изменено на political
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Распад СССР',
                'description' => 'Официальное прекращение существования СССР, образование СНГ.',
                'started_at' => '1991-12-26 00:00:00',
                'ended_at' => null,
                'eventable_type' => null,
                'eventable_id' => null,
                'category' => 'political', // Изменено на political
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Образование Российской Федерации (современной)',
                'description' => 'Формирование новой государственности после распада СССР.',
                'started_at' => '1991-12-25 00:00:00', // Или 1993-12-12 для Конституции РФ
                'ended_at' => null, // До настоящего времени
                'eventable_type' => null,
                'eventable_id' => null,
                'category' => 'political', // Изменено на political
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Первая чеченская война',
                'description' => 'Вооружённый конфликт между Российской Федерацией и Ичкерии.',
                'started_at' => '1994-12-11 00:00:00',
                'ended_at' => '1996-08-31 00:00:00',
                'eventable_type' => null,
                'eventable_id' => null,
                'category' => 'war', // Оставляем war
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Вторая чеченская война',
                'description' => 'Второй этап вооружённого конфликта в Чечне.',
                'started_at' => '1999-08-01 00:00:00',
                'ended_at' => '2009-04-16 00:00:00', // Объявление окончания боевых действий
                'eventable_type' => null,
                'eventable_id' => null,
                'category' => 'war', // Оставляем war
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Начало правления Владимира Путина',
                'description' => 'Владимир Путин стал Президентом Российской Федерации.',
                'started_at' => '2000-05-07 00:00:00',
                'ended_at' => null, // До настоящего времени (или пока не закончится)
                'eventable_type' => 'App\Models\People', // Если модель People
                'eventable_id' => 2, // Предполагается, что Владимир Путин уже добавлен в таблицу people с id=2
                'category' => 'political', // Изменено на political
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Возвращение Крыма в состав России',
                'description' => 'Референдум в Крыму и последующее присоединение к Российской Федерации.',
                'started_at' => '2014-03-18 00:00:00',
                'ended_at' => null,
                'eventable_type' => null,
                'eventable_id' => null,
                'category' => 'political', // Изменено на political
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($events as $event) {
            DB::table('events')->updateOrInsert(
                [
                    'title' => $event['title'],
                    'started_at' => $event['started_at'],
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
