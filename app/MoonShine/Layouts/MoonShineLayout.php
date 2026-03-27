<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\ColorManager\Palettes\SkyPalette;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use App\MoonShine\Resources\People\PeopleResource;
use MoonShine\MenuManager\MenuItem;
use App\MoonShine\Resources\Organization\OrganizationResource;
use App\MoonShine\Resources\Event\EventResource;

final class MoonShineLayout extends AppLayout
{
    /**
     * @var null|class-string<PaletteContract>
     */
    protected ?string $palette = SkyPalette::class;

    protected function assets(): array
    {
        return [
            ...parent::assets(),
        ];
    }

    protected function menu(): array
    {
        return [
            ...parent::menu(),
            MenuItem::make(PeopleResource::class, __('moonshine::ui.page.people')),
            MenuItem::make(OrganizationResource::class, 'Organizations'),
            MenuItem::make(EventResource::class, 'Events'),
        ];
    }

    /**
     * @param ColorManager $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);

        // $colorManager->primary('#00000');
    }
}
