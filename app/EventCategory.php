<?php

namespace App;

enum EventCategory: string
{
    case MILESTONE = 'milestone';
    case POLITICAL = 'political';
    case RELIGIOUS = 'religious';
    case MILITARY = 'military';
    case SCIENCE = 'science';
    case WAR = 'war';
    case PHILOSOPHY = 'philosophy';
    case TECHNOLOGY = 'technology';
    case HEALTH = 'health';

    /**
     * Человеко-читаемое название
     */
    public function toString(): ?string
    {
        return match ($this) {
            self::MILESTONE => 'Веховое событие',
            self::POLITICAL => 'Политика',
            self::RELIGIOUS => 'Религия',
            self::MILITARY => 'Военное дело',
            self::SCIENCE => 'Наука',
            self::WAR => 'Война',
            self::PHILOSOPHY => 'Философия',
            self::TECHNOLOGY => 'Технологии',
            self::HEALTH => 'Здравоохранение',
        };
    }

    /**
     * Цвет
     */
    public function getColor(): ?string
    {
        return match ($this) {
            self::MILESTONE => 'primary',
            self::POLITICAL => 'blue',
            self::RELIGIOUS => 'purple',
            self::MILITARY => 'pink',
            self::SCIENCE => 'yellow',
            self::WAR => 'red',
            self::PHILOSOPHY => 'gray',
            self::TECHNOLOGY => 'info',
            self::HEALTH => 'green',
        };
    }

    /**
     * Иконка для категории
     */
    public function getIcon(): ?string
    {
        return match ($this) {
            self::MILESTONE => 'map',
            self::POLITICAL => 'briefcase',
            self::RELIGIOUS => 'cloud',
            self::MILITARY => 'star',
            self::SCIENCE => 'academic-cap',
            self::WAR => 'rocket-launch',
            self::PHILOSOPHY => 'user-group',
            self::TECHNOLOGY => 'sparkles',
            self::HEALTH => 'heart',
        };
    }
    public function icon(): string
    {
        return match ($this) {
            self::MILESTONE => '🏆',
            self::POLITICAL => '🏛️',
            self::RELIGIOUS => '⛪',
            self::MILITARY => '🎖️',
            self::SCIENCE => '🔬',
            self::WAR => '⚔️',
            self::PHILOSOPHY => '📜',
            self::TECHNOLOGY => '💻',
            self::HEALTH => '🏥',
        };
    }

    /**
     * Все значения для select-формы
     */
    public static function options(): array
    {
        return array_combine(
            array_column(self::cases(), 'value'),
            array_map(fn($case) => $case->toString(), self::cases())
        );
    }
}
