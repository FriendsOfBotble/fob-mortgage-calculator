<?php

namespace FriendsOfBotble\MortgageCalculator\Providers;

use FriendsOfBotble\MortgageCalculator\Shortcodes\MortgageCalculatorShortcode;
use FriendsOfBotble\MortgageCalculator\Widgets\MortgageCalculatorWidget;
use Illuminate\Support\ServiceProvider;

class HookServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerShortcode();
        $this->registerWidget();
    }

    protected function registerShortcode(): void
    {
        if (! function_exists('add_shortcode')) {
            return;
        }

        add_shortcode(
            'mortgage_calculator',
            trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.name'),
            trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.description'),
            [app(MortgageCalculatorShortcode::class), 'render']
        );

        shortcode()->setAdminConfig(
            'mortgage_calculator',
            [app(MortgageCalculatorShortcode::class), 'adminConfig']
        );

        shortcode()->ignoreLazyLoading(['mortgage_calculator']);
    }

    protected function registerWidget(): void
    {
        if (! function_exists('register_widget')) {
            return;
        }

        register_widget(MortgageCalculatorWidget::class);
    }
}
