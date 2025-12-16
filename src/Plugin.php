<?php

namespace FriendsOfBotble\MortgageCalculator;

use Botble\PluginManagement\Abstracts\PluginOperationAbstract;
use Botble\Setting\Facades\Setting;

class Plugin extends PluginOperationAbstract
{
    public static function remove(): void
    {
        Setting::delete([
            'mortgage_calculator_default_interest_rate',
            'mortgage_calculator_default_term_years',
            'mortgage_calculator_default_down_payment_type',
            'mortgage_calculator_default_down_payment_value',
            'mortgage_calculator_show_extra_costs',
            'mortgage_calculator_term_options',
            'mortgage_calculator_currency_symbol',
        ]);
    }
}
