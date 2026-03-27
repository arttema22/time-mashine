<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\People\Pages;

use App\MoonShine\Resources\People\PeopleResource;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\Laravel\Pages\Crud\IndexPage;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;

/**
 * @extends IndexPage<PeopleResource>
 */
class PeopleIndexPage extends IndexPage
{
    protected bool $isLazy = true;

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
        ];
    }
}
