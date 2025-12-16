<?php

namespace FriendsOfBotble\MortgageCalculator\Providers;

use Botble\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Support\ServiceProvider;

class MortgageCalculatorServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function boot(): void
    {
        $this->setNamespace('plugins/fob-mortgage-calculator')
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->publishAssets();

        $this->app->booted(function (): void {
            $this->app->register(HookServiceProvider::class);
        });
    }
}
