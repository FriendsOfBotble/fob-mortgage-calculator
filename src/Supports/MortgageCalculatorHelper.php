<?php

namespace FriendsOfBotble\MortgageCalculator\Supports;

class MortgageCalculatorHelper
{
    public static function getTermOptions(): array
    {
        $terms = array_map('trim', explode(',', MortgageCalculatorConfig::DEFAULT_TERM_OPTIONS));
        $terms = array_filter($terms, fn ($term) => is_numeric($term) && $term > 0);

        return array_combine(
            $terms,
            array_map(
                fn ($t) => $t . ' ' . trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.years'),
                $terms
            )
        );
    }

    public static function getCurrentCurrencySymbol(): ?string
    {
        $sessionCurrency = session('currency');

        if ($sessionCurrency && isset(MortgageCalculatorConfig::CURRENCY_SYMBOLS[$sessionCurrency])) {
            return MortgageCalculatorConfig::CURRENCY_SYMBOLS[$sessionCurrency];
        }

        return null;
    }

    public static function sanitizeSpacing(?string $value): string
    {
        if (empty($value)) {
            return '';
        }

        $oldSelectValues = ['none', 'sm', 'default', 'lg', 'xl'];
        if (in_array($value, $oldSelectValues, true)) {
            return '';
        }

        return $value;
    }

    public static function prepareViewData(array $config, string $uniqueId): array
    {
        $showExtraCosts = $config['show_extra_costs'] ?? null;

        if ($showExtraCosts !== null) {
            $showExtraCosts = is_bool($showExtraCosts)
                ? $showExtraCosts
                : filter_var($showExtraCosts, FILTER_VALIDATE_BOOLEAN);
        } else {
            $showExtraCosts = MortgageCalculatorConfig::DEFAULT_SHOW_EXTRA_COSTS;
        }

        return [
            'style' => $config['style'] ?? 'default',
            'layout' => $config['layout'] ?? 'horizontal',
            'formStyle' => $config['form_style'] ?? 'default',
            'formSize' => $config['form_size'] ?? 'lg',
            'formAlignment' => $config['form_alignment'] ?? 'center',
            'formMargin' => self::sanitizeSpacing($config['form_margin'] ?? ''),
            'formPadding' => self::sanitizeSpacing($config['form_padding'] ?? ''),
            'formTitle' => $config['form_title'] ?? '',
            'formDescription' => $config['form_description'] ?? '',
            'defaultPrice' => $config['default_price'] ?? null,
            'defaultTerm' => $config['default_term'] ?: MortgageCalculatorConfig::DEFAULT_TERM_YEARS,
            'defaultRate' => $config['default_rate'] ?: MortgageCalculatorConfig::DEFAULT_INTEREST_RATE,
            'defaultDownPaymentType' => $config['default_down_payment_type'] ?: MortgageCalculatorConfig::DEFAULT_DOWN_PAYMENT_TYPE,
            'defaultDownPaymentValue' => $config['default_down_payment_value'] ?: MortgageCalculatorConfig::DEFAULT_DOWN_PAYMENT_VALUE,
            'showExtraCosts' => $showExtraCosts,
            'currency' => self::getCurrentCurrencySymbol()
                ?: ($config['currency'] ?? MortgageCalculatorConfig::DEFAULT_CURRENCY),
            'priceFrom' => $config['price_from'] ?? 'none',
            'primaryColor' => $config['primary_color'] ?? MortgageCalculatorConfig::DEFAULT_PRIMARY_COLOR,
            'termOptions' => self::getTermOptions(),
            'uniqueId' => $uniqueId,
        ];
    }
}
