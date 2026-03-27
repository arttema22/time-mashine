<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\People;
use Illuminate\Database\Seeder;

class PeopleLifeEventsSeeder extends Seeder
{
    /**
     * События жизни исторических личностей
     */
    public function run(): void
    {
        $peopleEvents = [
            [
                'slug' => 'alexander-pushkin',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1799-06-06', 'category' => 'milestone', 'description' => 'Александр Сергеевич Пушкин родился в Москве'],
                    ['title' => 'Первая публикация', 'date' => '1814-07-01', 'category' => 'milestone', 'description' => 'Стихотворение «К другу-стихотворцу» в журнале «Вестник Европы»'],
                    ['title' => 'Окончание Царскосельского лицея', 'date' => '1817-06-09', 'category' => 'milestone', 'description' => 'Выпущен из Лицея в чине коллежского секретаря'],
                    ['title' => 'Ссылка в Михайловское', 'date' => '1824-08-01', 'category' => 'political', 'description' => 'Ссылка в родовое имение на 2 года'],
                    ['title' => 'Публикация «Бориса Годунова»', 'date' => '1831-01-01', 'category' => 'milestone', 'description' => 'Опубликована драма, написанная в 1825 году'],
                    ['title' => 'Публикация «Полтавы»', 'date' => '1829-01-01', 'category' => 'milestone', 'description' => 'Опубликована поэма о Петре I'],
                    ['title' => 'Женитьба на Наталье Гончаровой', 'date' => '1831-03-02', 'category' => 'milestone', 'description' => 'Венчание в церкви Большого Вознесения у Никитских ворот'],
                    ['title' => 'Публикация «Евгения Онегина»', 'date' => '1833-01-01', 'category' => 'milestone', 'description' => 'Выход полного текста романа в стихах'],
                    ['title' => 'Публикация «Капитанской дочки»', 'date' => '1836-01-01', 'category' => 'milestone', 'description' => 'Исторический роман о пугачёвском восстании'],
                    ['title' => 'Дуэль с Жоржем Дантесом', 'date' => '1837-02-08', 'category' => 'milestone', 'description' => 'Смертельная дуэль на Чёрной речке'],
                    ['title' => 'Смерть', 'date' => '1837-02-10', 'category' => 'milestone', 'description' => 'Умер от перитонита в квартире на набережной Мойки'],
                ],
            ],
            [
                'slug' => 'leo-tolstoy',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1828-09-09', 'category' => 'milestone', 'description' => 'Родился в имении Ясная Поляна Тульской губернии'],
                    ['title' => 'Военная служба на Кавказе', 'date' => '1851-10-01', 'category' => 'military', 'description' => 'Поступил юнкером в 4-ю батарею 20-й артиллерийской бригады'],
                    ['title' => 'Оборона Севастополя', 'date' => '1854-11-01', 'category' => 'war', 'description' => 'Участие в обороне Севастополя во время Крымской войны'],
                    ['title' => 'Публикация «Детства»', 'date' => '1852-01-01', 'category' => 'milestone', 'description' => 'Первая публикация в журнале «Современник»'],
                    ['title' => 'Женитьба на Софье Берс', 'date' => '1862-09-23', 'category' => 'milestone', 'description' => 'Брак с Софьей Андреевной Берс'],
                    ['title' => 'Публикация «Войны и мира»', 'date' => '1869-01-01', 'category' => 'milestone', 'description' => 'Завершение публикации романа-эпопеи'],
                    ['title' => 'Публикация «Анны Карениной»', 'date' => '1877-01-01', 'category' => 'milestone', 'description' => 'Завершение публикации романа'],
                    ['title' => 'Духовный кризис', 'date' => '1878-01-01', 'category' => 'philosophy', 'description' => 'Перелом в мировоззрении, обращение к вере'],
                    ['title' => 'Публикация «Воскресения»', 'date' => '1899-01-01', 'category' => 'milestone', 'description' => 'Последний роман Толстого'],
                    ['title' => 'Отлучение от церкви', 'date' => '1901-02-24', 'category' => 'religious', 'description' => 'Синод отлучил Толстого от православной церкви'],
                    ['title' => 'Нобелевская номинация', 'date' => '1902-01-01', 'category' => 'milestone', 'description' => 'Номинация на Нобелевскую премию по литературе'],
                    ['title' => 'Уход из Ясной Поляны', 'date' => '1910-11-10', 'category' => 'milestone', 'description' => 'Тайный уход из дома в возрасте 82 лет'],
                    ['title' => 'Смерть', 'date' => '1910-11-20', 'category' => 'milestone', 'description' => 'Умер на станции Астапово от воспаления лёгких'],
                ],
            ],
            [
                'slug' => 'fyodor-dostoevsky',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1821-11-11', 'category' => 'milestone', 'description' => 'Родился в Москве'],
                    ['title' => 'Окончание инженерного училища', 'date' => '1843-01-01', 'category' => 'milestone', 'description' => 'Выпущен полевым инженером-поручиком'],
                    ['title' => 'Публикация «Бедных людей»', 'date' => '1846-01-01', 'category' => 'milestone', 'description' => 'Первый роман, принесший известность'],
                    ['title' => 'Арест', 'date' => '1849-04-23', 'category' => 'political', 'description' => 'Арестован по делу петрашевцев'],
                    ['title' => 'Инсценировка казни', 'date' => '1849-12-22', 'category' => 'political', 'description' => 'На Семёновском плацу приговор заменён каторгой'],
                    ['title' => 'Каторга в Омске', 'date' => '1850-01-01', 'category' => 'milestone', 'description' => 'Начало четырёхлетней каторги в Омском остроге'],
                    ['title' => 'Первая женитьба', 'date' => '1857-02-06', 'category' => 'milestone', 'description' => 'Брак с Марией Дмитриевной Исаевой'],
                    ['title' => 'Поездка в Европу', 'date' => '1862-01-01', 'category' => 'milestone', 'description' => 'Первая поездка за границу, игра в рулетку'],
                    ['title' => 'Публикация «Преступления и наказания»', 'date' => '1866-01-01', 'category' => 'milestone', 'description' => 'Опубликован роман о Раскольникове'],
                    ['title' => 'Вторая женитьба', 'date' => '1867-02-15', 'category' => 'milestone', 'description' => 'Брак с Анной Григорьевной Сниткиной'],
                    ['title' => 'Публикация «Идиота»', 'date' => '1869-01-01', 'category' => 'milestone', 'description' => 'Завершение публикации романа'],
                    ['title' => 'Публикация «Бесов»', 'date' => '1872-01-01', 'category' => 'milestone', 'description' => 'Завершение публикации политического романа'],
                    ['title' => 'Публикация «Братьев Карамазовых»', 'date' => '1880-01-01', 'category' => 'milestone', 'description' => 'Завершение публикации последнего романа'],
                    ['title' => 'Пушкинская речь', 'date' => '1880-06-08', 'category' => 'philosophy', 'description' => 'Речь на открытии памятника Пушкину в Москве'],
                    ['title' => 'Смерть', 'date' => '1881-02-09', 'category' => 'milestone', 'description' => 'Умер в Санкт-Петербурге от эмфиземы лёгких'],
                ],
            ],
            [
                'slug' => 'anton-chekhov',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1860-01-29', 'category' => 'milestone', 'description' => 'Родился в Таганроге в семье купца'],
                    ['title' => 'Окончание гимназии', 'date' => '1879-01-01', 'category' => 'milestone', 'description' => 'Окончил Таганрогскую мужскую гимназию'],
                    ['title' => 'Окончание медицинского факультета', 'date' => '1884-01-01', 'category' => 'milestone', 'description' => 'Окончил медицинский факультет Московского университета'],
                    ['title' => 'Поездка на Сахалин', 'date' => '1890-01-01', 'category' => 'milestone', 'description' => 'Путешествие для изучения быта каторжан'],
                    ['title' => 'Публикация «Острова Сахалин»', 'date' => '1893-01-01', 'category' => 'milestone', 'description' => 'Документальная книга о каторге'],
                    ['title' => 'Премьера «Чайки»', 'date' => '1898-01-01', 'category' => 'milestone', 'description' => 'Успешная постановка в МХТ после провала 1896 года'],
                    ['title' => 'Премьера «Дяди Вани»', 'date' => '1899-01-01', 'category' => 'milestone', 'description' => 'Первая постановка пьесы в МХТ'],
                    ['title' => 'Премьера «Трёх сестёр»', 'date' => '1901-01-01', 'category' => 'milestone', 'description' => 'Первая постановка пьесы в МХТ'],
                    ['title' => 'Женитьба на Ольге Книппер', 'date' => '1901-06-03', 'category' => 'milestone', 'description' => 'Брак с актрисой МХТ'],
                    ['title' => 'Премьера «Вишнёвого сада»', 'date' => '1904-01-17', 'category' => 'milestone', 'description' => 'Последняя пьеса поставлена в МХТ'],
                    ['title' => 'Смерть', 'date' => '1904-07-15', 'category' => 'milestone', 'description' => 'Умер от туберкулёза в Баденвайлере, Германия'],
                ],
            ],
            [
                'slug' => 'pyotr-i-alekseevich',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1672-06-09', 'category' => 'milestone', 'description' => 'Родился в Москве, сын царя Алексея Михайловича'],
                    ['title' => 'Начало единоличного правления', 'date' => '1689-08-01', 'category' => 'political', 'description' => 'Свержение царевны Софьи'],
                    ['title' => 'Великое посольство', 'date' => '1697-03-01', 'category' => 'political', 'description' => 'Поездка в Европу для изучения кораблестроения'],
                    ['title' => 'Основание Санкт-Петербурга', 'date' => '1703-05-27', 'category' => 'milestone', 'description' => 'Основание новой столицы России'],
                    ['title' => 'Полтавская битва', 'date' => '1709-06-27', 'category' => 'war', 'description' => 'Разгром шведской армии Карла XII'],
                    ['title' => 'Учреждение Сената', 'date' => '1711-01-01', 'category' => 'political', 'description' => 'Создан Правительствующий сенат'],
                    ['title' => 'Провозглашение императором', 'date' => '1721-11-02', 'category' => 'political', 'description' => 'Принят титул Императора Всероссийского'],
                    ['title' => 'Учреждение Синода', 'date' => '1721-01-01', 'category' => 'religious', 'description' => 'Создан Святейший Синод'],
                    ['title' => 'Табель о рангах', 'date' => '1722-02-05', 'category' => 'political', 'description' => 'Введён закон о порядке государственной службы'],
                    ['title' => 'Каспийский поход', 'date' => '1722-01-01', 'category' => 'military', 'description' => 'Военный поход в Персию'],
                    ['title' => 'Смерть', 'date' => '1725-02-08', 'category' => 'milestone', 'description' => 'Умер в Санкт-Петербурге от болезни мочевого пузыря'],
                ],
            ],
            [
                'slug' => 'ekaterina-ii-alekseevna',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1729-05-02', 'category' => 'milestone', 'description' => 'Родилась в Штеттине, Пруссия'],
                    ['title' => 'Приезд в Россию', 'date' => '1744-02-09', 'category' => 'milestone', 'description' => 'Прибыла в Москву для брака с Петром Фёдоровичем'],
                    ['title' => 'Брак с Петром III', 'date' => '1745-09-01', 'category' => 'milestone', 'description' => 'Венчание с будущим императором'],
                    ['title' => 'Дворцовый переворот', 'date' => '1762-07-09', 'category' => 'political', 'description' => 'Взошла на престол, свергнув мужа'],
                    ['title' => 'Первый раздел Польши', 'date' => '1772-01-01', 'category' => 'political', 'description' => 'Участие в разделе Речи Посполитой'],
                    ['title' => 'Присоединение Крыма', 'date' => '1783-01-01', 'category' => 'political', 'description' => 'Крымское ханство присоединено к России'],
                    ['title' => 'Второй раздел Польши', 'date' => '1793-01-01', 'category' => 'political', 'description' => 'Участие во втором разделе'],
                    ['title' => 'Третий раздел Польши', 'date' => '1795-01-01', 'category' => 'political', 'description' => 'Ликвидация Речи Посполитой'],
                    ['title' => 'Восстание Пугачёва', 'date' => '1773-09-01', 'category' => 'war', 'description' => 'Крестьянская война под предводительством Пугачёва'],
                    ['title' => 'Смерть', 'date' => '1796-11-17', 'category' => 'milestone', 'description' => 'Умерла в Санкт-Петербурге от инсульта'],
                ],
            ],
            [
                'slug' => 'aleksandr-ii-nikolaevich',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1818-04-29', 'category' => 'milestone', 'description' => 'Родился в Москве, сын Николая I'],
                    ['title' => 'Восшествие на престол', 'date' => '1855-03-02', 'category' => 'political', 'description' => 'Вступил на престол после смерти отца'],
                    ['title' => 'Окончание Крымской войны', 'date' => '1856-01-01', 'category' => 'war', 'description' => 'Парижский мирный договор'],
                    ['title' => 'Отмена крепостного права', 'date' => '1861-03-03', 'category' => 'political', 'description' => 'Манифест об освобождении крестьян'],
                    ['title' => 'Земская реформа', 'date' => '1864-01-01', 'category' => 'political', 'description' => 'Введено земское самоуправление'],
                    ['title' => 'Судебная реформа', 'date' => '1864-01-01', 'category' => 'political', 'description' => 'Введена новая судебная система'],
                    ['title' => 'Военная реформа', 'date' => '1874-01-01', 'category' => 'military', 'description' => 'Введена всеобщая воинская повинность'],
                    ['title' => 'Покушение Каракозова', 'date' => '1866-04-16', 'category' => 'political', 'description' => 'Первое покушение Дмитрия Каракозова'],
                    ['title' => 'Покушение Соловьёва', 'date' => '1879-04-26', 'category' => 'political', 'description' => 'Покушение Александра Соловьёва'],
                    ['title' => 'Взрыв в Зимнем дворце', 'date' => '1880-02-29', 'category' => 'political', 'description' => 'Взрыв, организованный Халтуриным'],
                    ['title' => 'Смертельное покушение', 'date' => '1881-03-13', 'category' => 'political', 'description' => 'Покушение народовольца Гриневицкого'],
                    ['title' => 'Смерть', 'date' => '1881-03-13', 'category' => 'milestone', 'description' => 'Умер от ран на набережной Екатерининского канала'],
                ],
            ],
            [
                'slug' => 'nikolai-ii-aleksandrovich',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1868-05-18', 'category' => 'milestone', 'description' => 'Родился в Царском Селе'],
                    ['title' => 'Восшествие на престол', 'date' => '1894-11-01', 'category' => 'political', 'description' => 'Вступил на престол после смерти отца'],
                    ['title' => 'Женитьба на Александре Фёдоровне', 'date' => '1894-11-26', 'category' => 'milestone', 'description' => 'Брак с принцессой Алисой Гессен-Дармштадтской'],
                    ['title' => 'Коронация', 'date' => '1896-05-26', 'category' => 'milestone', 'description' => 'Коронация в Успенском соборе Московского Кремля'],
                    ['title' => 'Ходынская катастрофа', 'date' => '1896-05-30', 'category' => 'milestone', 'description' => 'Гибель 1389 человек на народном гулянии'],
                    ['title' => 'Начало русско-японской войны', 'date' => '1904-02-08', 'category' => 'war', 'description' => 'Япония напала на Порт-Артур'],
                    ['title' => 'Манифест 17 октября', 'date' => '1905-10-30', 'category' => 'political', 'description' => 'Дарованы гражданские свободы и Госдума'],
                    ['title' => 'Окончание русско-японской войны', 'date' => '1905-09-05', 'category' => 'war', 'description' => 'Портсмутский мир'],
                    ['title' => 'Рождение Алексея', 'date' => '1904-08-12', 'category' => 'milestone', 'description' => 'Рождение наследника цесаревича Алексея'],
                    ['title' => 'Начало Первой мировой войны', 'date' => '1914-08-01', 'category' => 'war', 'description' => 'Россия вступила в войну'],
                    ['title' => 'Отречение от престола', 'date' => '1917-03-15', 'category' => 'political', 'description' => 'Отрёкся от престола в Пскове'],
                    ['title' => 'Ссылка в Тобольск', 'date' => '1917-08-01', 'category' => 'political', 'description' => 'Семья отправлена в ссылку'],
                    ['title' => 'Расстрел', 'date' => '1918-07-17', 'category' => 'political', 'description' => 'Расстрелян с семьёй в доме Ипатьева'],
                ],
            ],
            [
                'slug' => 'albert-einstein',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1879-03-14', 'category' => 'milestone', 'description' => 'Родился в Ульме, Германская империя'],
                    ['title' => 'Окончание Политехникума', 'date' => '1900-01-01', 'category' => 'milestone', 'description' => 'Окончил Цюрихский политехникум'],
                    ['title' => 'Работа в патентном бюро', 'date' => '1902-01-01', 'category' => 'milestone', 'description' => 'Поступил на работу в Бернское патентное бюро'],
                    ['title' => 'Annus mirabilis — СТО', 'date' => '1905-06-30', 'category' => 'science', 'description' => 'Опубликована специальная теория относительности'],
                    ['title' => 'Annus mirabilis — Фотоэффект', 'date' => '1905-03-17', 'category' => 'science', 'description' => 'Статья об эвристической точке зрения на свет'],
                    ['title' => 'Annus mirabilis — E=mc²', 'date' => '1905-11-21', 'category' => 'science', 'description' => 'Статья о зависимости массы от энергии'],
                    ['title' => 'Профессор в Цюрихе', 'date' => '1909-01-01', 'category' => 'milestone', 'description' => 'Назначен профессором Цюрихского университета'],
                    ['title' => 'Переезд в Берлин', 'date' => '1914-01-01', 'category' => 'milestone', 'description' => 'Переехал в Берлин, директор института'],
                    ['title' => 'Общая теория относительности', 'date' => '1915-11-25', 'category' => 'science', 'description' => 'Завершение создания ОТО'],
                    ['title' => 'Нобелевская премия', 'date' => '1922-11-10', 'category' => 'science', 'description' => 'Премия за 1921 год за объяснение фотоэффекта'],
                    ['title' => 'Эмиграция в США', 'date' => '1933-01-01', 'category' => 'political', 'description' => 'Эмигрировал в США, работа в Принстоне'],
                    ['title' => 'Письмо Рузвельту', 'date' => '1939-08-02', 'category' => 'political', 'description' => 'Письмо о возможности создания атомной бомбы'],
                    ['title' => 'Смерть', 'date' => '1955-04-18', 'category' => 'milestone', 'description' => 'Умер в Принстоне, штат Нью-Джерси'],
                ],
            ],
            [
                'slug' => 'isaac-newton',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1643-01-04', 'category' => 'milestone', 'description' => 'Родился в усадьбе Вулсторп, Англия'],
                    ['title' => 'Поступление в Тринити-колледж', 'date' => '1661-06-01', 'category' => 'milestone', 'description' => 'Поступил в Кембриджский университет'],
                    ['title' => 'Окончание университета', 'date' => '1665-01-01', 'category' => 'milestone', 'description' => 'Получил степень магистра искусств'],
                    ['title' => 'Annus mirabilis — тяготение', 'date' => '1665-01-01', 'category' => 'science', 'description' => 'Открыл закон всемирного тяготения'],
                    ['title' => 'Annus mirabilis — исчисление', 'date' => '1665-11-01', 'category' => 'science', 'description' => 'Разработал метод флюксий'],
                    ['title' => 'Annus mirabilis — оптика', 'date' => '1666-01-01', 'category' => 'science', 'description' => 'Открыл дисперсию света'],
                    ['title' => 'Профессор математики', 'date' => '1669-01-01', 'category' => 'milestone', 'description' => 'Назначен профессором в Кембридже'],
                    ['title' => 'Член Королевского общества', 'date' => '1672-01-01', 'category' => 'milestone', 'description' => 'Избран членом Королевского общества'],
                    ['title' => 'Публикация Principia', 'date' => '1687-07-05', 'category' => 'science', 'description' => '«Математические начала натуральной философии»'],
                    ['title' => 'Директор Монетного двора', 'date' => '1699-01-01', 'category' => 'milestone', 'description' => 'Назначен директором Королевского монетного двора'],
                    ['title' => 'Президент Королевского общества', 'date' => '1703-01-01', 'category' => 'milestone', 'description' => 'Избран президентом Королевского общества'],
                    ['title' => 'Рыцарское звание', 'date' => '1705-01-01', 'category' => 'milestone', 'description' => 'Посвящён в рыцари королевой Анной'],
                    ['title' => 'Смерть', 'date' => '1727-03-31', 'category' => 'milestone', 'description' => 'Умер в Лондоне, похоронен в Вестминстерском аббатстве'],
                ],
            ],
            [
                'slug' => 'marie-curie',
                'events' => [
                    ['title' => 'Рождение', 'date' => '1867-11-07', 'category' => 'milestone', 'description' => 'Родилась в Варшаве, Российская империя'],
                    ['title' => 'Переезд в Париж', 'date' => '1891-11-01', 'category' => 'milestone', 'description' => 'Переехала для учёбы в Сорбонне'],
                    ['title' => 'Встреча с Пьером Кюри', 'date' => '1894-01-01', 'category' => 'milestone', 'description' => 'Познакомилась с будущим мужем'],
                    ['title' => 'Брак с Пьером Кюри', 'date' => '1895-07-26', 'category' => 'milestone', 'description' => 'Свадьба в Со'],
                    ['title' => 'Открытие полония', 'date' => '1898-07-18', 'category' => 'science', 'description' => 'Открыла новый элемент, названный в честь Польши'],
                    ['title' => 'Открытие радия', 'date' => '1898-12-19', 'category' => 'science', 'description' => 'Открыла радий вместе с мужем'],
                    ['title' => 'Нобелевская премия по физике', 'date' => '1903-01-01', 'category' => 'science', 'description' => 'Первая женщина-лауреат за исследования радиоактивности'],
                    ['title' => 'Смерть Пьера Кюри', 'date' => '1906-04-19', 'category' => 'milestone', 'description' => 'Муж погиб в уличной катастрофе'],
                    ['title' => 'Профессор Сорбонны', 'date' => '1906-01-01', 'category' => 'milestone', 'description' => 'Первая женщина-профессор в Сорбонне'],
                    ['title' => 'Нобелевская премия по химии', 'date' => '1911-01-01', 'category' => 'science', 'description' => 'Вторая премия за выделение чистого радия'],
                    ['title' => 'Основание Института Кюри', 'date' => '1914-01-01', 'category' => 'science', 'description' => 'Открытие Института радия в Париже'],
                    ['title' => 'Мобильные рентген-установки', 'date' => '1914-01-01', 'category' => 'health', 'description' => 'Создание «маленьких Кюри» для фронта'],
                    ['title' => 'Смерть', 'date' => '1934-07-04', 'category' => 'health', 'description' => 'Умерла от апластической анемии, вызванной радиацией'],
                ],
            ],
            [
                'slug' => 'yuri-gagarin',
                'events' => [
                    ['title' => 'Начало военной службы', 'date' => '1955-10-27', 'category' => 'military', 'description' => 'Поступил в 1-е военное авиационное училище лётчиков'],
                    ['title' => 'Окончание лётного училища', 'date' => '1957-01-01', 'category' => 'milestone', 'description' => 'Окончил Чкаловское военное авиационное училище'],
                    ['title' => 'Зачисление в отряд космонавтов', 'date' => '1960-03-03', 'category' => 'milestone', 'description' => 'Зачислен в первый отряд космонавтов СССР'],
                    ['title' => 'Полёт в космос', 'date' => '1961-04-12', 'category' => 'science', 'description' => 'Первый полёт в космос на «Востоке-1», 108 минут'],
                    ['title' => 'Звание Героя Советского Союза', 'date' => '1961-04-14', 'category' => 'milestone', 'description' => 'Присвоено звание Героя Советского Союза'],
                    ['title' => 'Мировое турне', 'date' => '1961-07-01', 'category' => 'milestone', 'description' => 'Поездка по странам мира с миссией мира'],
                    ['title' => 'Начало учёбы в академии', 'date' => '1961-09-01', 'category' => 'milestone', 'description' => 'Поступил в Военно-воздушную инженерную академику'],
                    ['title' => 'Дублёр для «Союза-1»', 'date' => '1967-01-01', 'category' => 'milestone', 'description' => 'Был дублёром Комарова'],
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
                $slug = \Illuminate\Support\Str::slug($eventData['title'] . '-' . $eventData['date'] . '-' . $person->slug);
                Event::updateOrCreate(
                    [
                        'slug' => $slug,
                    ],
                    [
                        'title' => $eventData['title'],
                        'eventable_type' => People::class,
                        'eventable_id' => $person->id,
                        'description' => $eventData['description'],
                        'started_at' => $eventData['date'],
                        'ended_at' => null,
                        'category' => $eventData['category'],
                        'cover_image' => null,
                    ]
                );
            }

            $this->command->info("Добавлено событий для {$person->name}: " . count($personData['events']));
        }
    }
}
