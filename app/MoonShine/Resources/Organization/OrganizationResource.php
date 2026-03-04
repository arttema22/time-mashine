<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Organization;

use Illuminate\Database\Eloquent\Model;
use App\Models\Organization;
use App\MoonShine\Resources\Organization\Pages\OrganizationIndexPage;
use App\MoonShine\Resources\Organization\Pages\OrganizationFormPage;
use App\MoonShine\Resources\Organization\Pages\OrganizationDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Organization, OrganizationIndexPage, OrganizationFormPage, OrganizationDetailPage>
 */
class OrganizationResource extends ModelResource
{
    protected string $model = Organization::class;

    protected string $title = 'Organizations';
    
    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            OrganizationIndexPage::class,
            OrganizationFormPage::class,
            OrganizationDetailPage::class,
        ];
    }
}
