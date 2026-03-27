<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\People;

use App\Models\People;
use App\MoonShine\Resources\People\Pages\PeopleDetailPage;
use App\MoonShine\Resources\People\Pages\PeopleFormPage;
use App\MoonShine\Resources\People\Pages\PeopleIndexPage;
use Illuminate\Database\Eloquent\Builder;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\Laravel\QueryTags\QueryTag;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<People, PeopleIndexPage, PeopleFormPage, PeopleDetailPage>
 */
class PeopleResource extends ModelResource
{
    protected string $model = People::class;

    public function getTitle(): string
    {
        return __('moonshine::ui.page.people');
    }

    // Eager load
    protected array $with = ['events'];

    protected string $column = 'name';

    protected ?string $alias = 'people';

    protected bool $stickyTable = true;

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            PeopleIndexPage::class,
            PeopleFormPage::class,
            PeopleDetailPage::class,
        ];
    }

    protected function search(): array
    {
        return ['name', 'slug', 'biography'];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('name'),
        ];
    }

    protected function queryTags(): array
    {
        return [
            QueryTag::make(__('moonshine::ui.button.all'), fn(Builder $query) => $query)->default(),
            QueryTag::make(__('moonshine::ui.button.living'), fn(Builder $query) => $query->whereNull('death_date')),
            QueryTag::make(__('moonshine::ui.button.dead'), fn(Builder $query) => $query->whereNotNull('death_date')),
        ];
    }
}
