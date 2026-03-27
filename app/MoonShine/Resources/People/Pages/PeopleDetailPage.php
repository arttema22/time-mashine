<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\People\Pages;

use App\MoonShine\Resources\People\PeopleResource;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Pages\Crud\DetailPage;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\Table\TableBuilder;
use MoonShine\UI\Fields\Date;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use MoonShine\Laravel\Fields\Relationships\MorphMany;
use App\MoonShine\Resources\Event\EventResource;
use Throwable;

/**
 * @extends DetailPage<PeopleResource>
 */
class PeopleDetailPage extends DetailPage
{
    /**
     * @return list<FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Text::make(__('moonshine::ui.col.name'), 'name'),
            Slug::make(__('moonshine::ui.col.slug'), 'slug'),
            Date::make(__('moonshine::ui.col.birth_date'), 'birth_date')->format('d.m.Y'),
            Date::make(__('moonshine::ui.col.death_date'), 'death_date')->format('d.m.Y'),
            Textarea::make(__('moonshine::ui.col.biography'), 'biography'),
            MorphMany::make(__('moonshine::ui.col.events'), 'events', resource: EventResource::class),
        ];
    }

    protected function buttons(): ListOf
    {
        return parent::buttons();
    }

    /**
     * @param  TableBuilder  $component
     *
     * @return TableBuilder
     */
    protected function modifyDetailComponent(ComponentContract $component): ComponentContract
    {
        return $component;
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer()
        ];
    }
}
