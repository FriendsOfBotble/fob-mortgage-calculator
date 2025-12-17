<?php

namespace FriendsOfBotble\MortgageCalculator\Supports;

class MortgageCalculatorConfig
{
    public const DEFAULT_TERM_YEARS = 20;

    public const DEFAULT_INTEREST_RATE = 10;

    public const DEFAULT_DOWN_PAYMENT_TYPE = 'percent';

    public const DEFAULT_DOWN_PAYMENT_VALUE = 20;

    public const DEFAULT_SHOW_EXTRA_COSTS = false;

    public const DEFAULT_CURRENCY = '$';

    public const DEFAULT_TERM_OPTIONS = '10,15,20,25,30';

    public const DEFAULT_PRIMARY_COLOR = '#e31837';

    public const CURRENCY_SYMBOLS = [
        'USD' => '$',
        'EUR' => '€',
        'GBP' => '£',
        'VND' => '₫',
        'JPY' => '¥',
        'CNY' => '¥',
        'KRW' => '₩',
        'INR' => '₹',
        'THB' => '฿',
        'AUD' => 'A$',
        'CAD' => 'C$',
        'SGD' => 'S$',
        'MYR' => 'RM',
        'IDR' => 'Rp',
        'PHP' => '₱',
    ];

    public static function getStyleChoices(): array
    {
        return [
            'default' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.styles.default'),
            'compact' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.styles.compact'),
        ];
    }

    public static function getLayoutChoices(): array
    {
        return [
            'horizontal' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.layouts.horizontal'),
            'vertical' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.layouts.vertical'),
        ];
    }

    public static function getFormStyleChoices(): array
    {
        return [
            'default' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_styles.default'),
            'modern' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_styles.modern'),
            'minimal' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_styles.minimal'),
            'bold' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_styles.bold'),
            'glass' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_styles.glass'),
        ];
    }

    public static function getFormSizeChoices(): array
    {
        return [
            'full' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_sizes.full'),
            'xxl' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_sizes.xxl'),
            'xl' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_sizes.xl'),
            'lg' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_sizes.lg'),
            'md' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_sizes.md'),
            'sm' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_sizes.sm'),
        ];
    }

    public static function getFormAlignmentChoices(): array
    {
        return [
            'start' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_alignments.start'),
            'center' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_alignments.center'),
            'end' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_alignments.end'),
        ];
    }

    public static function getDownPaymentTypeChoices(bool $includeEmpty = false): array
    {
        $choices = [];

        if ($includeEmpty) {
            $choices[''] = trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.widget.use_default');
        }

        return array_merge($choices, [
            'percent' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.down_payment_types.percent'),
            'amount' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.down_payment_types.amount'),
        ]);
    }

    public static function getPriceFromChoices(): array
    {
        return [
            'none' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.price_from.none'),
            'property' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.price_from.property'),
        ];
    }
}
