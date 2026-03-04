<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\People;

use Illuminate\Database\Eloquent\Model;
use App\Models\People;
use App\MoonShine\Resources\People\Pages\PeopleIndexPage;
use App\MoonShine\Resources\People\Pages\PeopleFormPage;
use App\MoonShine\Resources\People\Pages\PeopleDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<People, PeopleIndexPage, PeopleFormPage, PeopleDetailPage>
 */
class PeopleResource extends ModelResource
{
    protected string $model = People::class;

    protected string $title = 'People';

    // Eager load
    protected array $with = ['events'];

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
}
