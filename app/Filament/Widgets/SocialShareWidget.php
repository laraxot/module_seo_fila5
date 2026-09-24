<?php

declare(strict_types=1);

namespace Modules\Seo\Filament\Widgets;

<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Modules\Seo\Actions\GenerateSocialShareLinksAction;
use Modules\Seo\Data\SocialShareData;
use Modules\Xot\Filament\Widgets\XotBaseSchemaWidget;
=======
use Modules\Seo\Actions\GenerateSocialShareLinksAction;
use Modules\Seo\Data\SocialShareData;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])

/**
 * Filament widget for social sharing.
 */
<<<<<<< HEAD
class SocialShareWidget extends XotBaseSchemaWidget
{
    /**
     * Dati del form.
     *
     * @var array<string, mixed>
     */
    public ?array $data = [];

    /**
     * The view for the widget.
     *
     * @var view-string
     */
<<<<<<< HEAD
    protected string $view;

    public function __construct()
    {
        /** @var view-string $view */
        $view = 'seo::filament.widgets.social-share';
        $this->view = $view;

        parent::__construct();
    }
=======
    /** @phpstan-ignore property.defaultValue */
=======
class SocialShareWidget extends XotBaseWidget
{
    /**
     * The view for the widget.
     */
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
    protected string $view = 'seo::filament.widgets.social-share';
>>>>>>> 19508be (chore(release): 1.0.0-dev.3 [skip ci])

    /**
     * Get the form schema.
     *
<<<<<<< HEAD
     * @return array<int|string, Component>
=======
     * @return array<int|string, \Filament\Schemas\Components\Component>
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
     */
    public function getFormSchema(): array
    {
        return [];
    }

    /**
     * Get the data for the view.
     *
     * @return array<string, mixed>
     *
     * @SuppressWarnings("PHPMD.StaticAccess")
     */
    protected function getViewData(): array
    {
<<<<<<< HEAD
        /** @var array<string, mixed> $viewData */
        $viewData = $this->data ?? [];
=======
        $viewData = $this->data;
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])

        $shareData = SocialShareData::from([
            'url' => $viewData['url'] ?? url()->current(),
            'title' => $viewData['title'] ?? config('app.name'),
        ]);

        /** @var GenerateSocialShareLinksAction $action */
        $action = app(GenerateSocialShareLinksAction::class);

        return [
            'links' => $action->execute($shareData),
            'platforms' => $shareData->platforms,
            'data' => $shareData,
        ];
    }
}
