<?php

namespace FriendsOfBotble\MortgageCalculator\Shortcodes;

use Botble\Base\Facades\Assets;
use Botble\Base\Forms\FieldOptions\ColorFieldOption;
use Botble\Base\Forms\FieldOptions\NumberFieldOption;
use Botble\Base\Forms\FieldOptions\OnOffFieldOption;
use Botble\Base\Forms\FieldOptions\SelectFieldOption;
use Botble\Base\Forms\FieldOptions\TextFieldOption;
use Botble\Base\Forms\Fields\ColorField;
use Botble\Base\Forms\Fields\NumberField;
use Botble\Base\Forms\Fields\OnOffField;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Shortcode\Compilers\Shortcode;
use Botble\Shortcode\Forms\ShortcodeForm;

class MortgageCalculatorShortcode
{
    // Default configuration values
    protected const DEFAULT_TERM_YEARS = 20;

    protected const DEFAULT_INTEREST_RATE = 10;

    protected const DEFAULT_DOWN_PAYMENT_TYPE = 'percent';

    protected const DEFAULT_DOWN_PAYMENT_VALUE = 20;

    protected const DEFAULT_SHOW_EXTRA_COSTS = false;

    protected const DEFAULT_CURRENCY = '$';

    protected const DEFAULT_TERM_OPTIONS = '10,15,20,25,30';

    protected const DEFAULT_PRIMARY_COLOR = '#e31837';

    public function render(Shortcode $shortcode): string
    {
        Assets::addStylesDirectly('vendor/core/plugins/fob-mortgage-calculator/css/mortgage-calculator.css')
            ->addScriptsDirectly('vendor/core/plugins/fob-mortgage-calculator/js/mortgage-calculator.js');

        $data = [
            'shortcode' => $shortcode,
            'style' => $shortcode->style ?: 'default',
            'layout' => $shortcode->layout ?: 'horizontal',
            'formStyle' => $shortcode->form_style ?: 'default',
            'formSize' => $shortcode->form_size ?: 'lg',
            'formAlignment' => $shortcode->form_alignment ?: 'center',
            'formMargin' => $shortcode->form_margin ?: 'default',
            'formPadding' => $shortcode->form_padding ?: 'default',
            'formTitle' => $shortcode->form_title ?: '',
            'formDescription' => $shortcode->form_description ?: '',
            'defaultPrice' => $shortcode->default_price ?: null,
            'defaultTerm' => $shortcode->default_term ?: self::DEFAULT_TERM_YEARS,
            'defaultRate' => $shortcode->default_rate ?: self::DEFAULT_INTEREST_RATE,
            'defaultDownPaymentType' => $shortcode->default_down_payment_type ?: self::DEFAULT_DOWN_PAYMENT_TYPE,
            'defaultDownPaymentValue' => $shortcode->default_down_payment_value ?: self::DEFAULT_DOWN_PAYMENT_VALUE,
            'showExtraCosts' => $shortcode->show_extra_costs !== null
                ? filter_var($shortcode->show_extra_costs, FILTER_VALIDATE_BOOLEAN)
                : self::DEFAULT_SHOW_EXTRA_COSTS,
            'currency' => $this->getCurrentCurrencySymbol()
                ?: ($shortcode->currency ?: self::DEFAULT_CURRENCY),
            'priceFrom' => $shortcode->price_from ?: 'none',
            'primaryColor' => $shortcode->primary_color ?: self::DEFAULT_PRIMARY_COLOR,
            'termOptions' => $this->getTermOptions(),
            'uniqueId' => 'mc-' . uniqid(),
        ];

        return view('plugins/fob-mortgage-calculator::shortcodes.calculator', $data)->render();
    }

    public function adminConfig(array $attributes): ShortcodeForm
    {
        return ShortcodeForm::createFromArray($attributes)
            ->add(
                'style',
                SelectField::class,
                SelectFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.style'))
                    ->choices([
                        'default' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.styles.default'),
                        'compact' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.styles.compact'),
                    ])
                    ->selected($attributes['style'] ?? 'default')
            )
            ->add(
                'layout',
                SelectField::class,
                SelectFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.layout'))
                    ->choices([
                        'horizontal' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.layouts.horizontal'),
                        'vertical' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.layouts.vertical'),
                    ])
                    ->selected($attributes['layout'] ?? 'horizontal')
            )
            ->add(
                'form_style',
                SelectField::class,
                SelectFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.form_style'))
                    ->choices([
                        'default' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_styles.default'),
                        'modern' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_styles.modern'),
                        'minimal' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_styles.minimal'),
                        'bold' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_styles.bold'),
                        'glass' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_styles.glass'),
                    ])
                    ->selected($attributes['form_style'] ?? 'default')
            )
            ->add(
                'form_size',
                SelectField::class,
                SelectFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.form_size'))
                    ->choices([
                        'full' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_sizes.full'),
                        'xxl' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_sizes.xxl'),
                        'xl' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_sizes.xl'),
                        'lg' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_sizes.lg'),
                        'md' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_sizes.md'),
                        'sm' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_sizes.sm'),
                    ])
                    ->selected($attributes['form_size'] ?? 'lg')
            )
            ->add(
                'form_alignment',
                SelectField::class,
                SelectFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.form_alignment'))
                    ->choices([
                        'start' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_alignments.start'),
                        'center' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_alignments.center'),
                        'end' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.form_alignments.end'),
                    ])
                    ->selected($attributes['form_alignment'] ?? 'center')
            )
            ->add(
                'form_margin',
                SelectField::class,
                SelectFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.form_margin'))
                    ->choices([
                        'none' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.spacing.none'),
                        'sm' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.spacing.sm'),
                        'default' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.spacing.default'),
                        'lg' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.spacing.lg'),
                        'xl' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.spacing.xl'),
                    ])
                    ->selected($attributes['form_margin'] ?? 'default')
            )
            ->add(
                'form_padding',
                SelectField::class,
                SelectFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.form_padding'))
                    ->choices([
                        'none' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.spacing.none'),
                        'sm' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.spacing.sm'),
                        'default' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.spacing.default'),
                        'lg' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.spacing.lg'),
                        'xl' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.spacing.xl'),
                    ])
                    ->selected($attributes['form_padding'] ?? 'default')
            )
            ->add(
                'form_title',
                TextField::class,
                TextFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.form_title'))
                    ->value($attributes['form_title'] ?? '')
            )
            ->add(
                'form_description',
                TextField::class,
                TextFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.form_description'))
                    ->value($attributes['form_description'] ?? '')
            )
            ->add(
                'default_price',
                NumberField::class,
                NumberFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_price'))
                    ->value($attributes['default_price'] ?? null)
                    ->helperText(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_price_helper'))
            )
            ->add(
                'default_term',
                NumberField::class,
                NumberFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_term'))
                    ->value($attributes['default_term'] ?? self::DEFAULT_TERM_YEARS)
            )
            ->add(
                'default_rate',
                NumberField::class,
                NumberFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_rate'))
                    ->value($attributes['default_rate'] ?? self::DEFAULT_INTEREST_RATE)
                    ->addAttribute('step', '0.01')
            )
            ->add(
                'default_down_payment_type',
                SelectField::class,
                SelectFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_down_payment_type'))
                    ->choices([
                        'percent' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.down_payment_types.percent'),
                        'amount' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.down_payment_types.amount'),
                    ])
                    ->selected($attributes['default_down_payment_type'] ?? self::DEFAULT_DOWN_PAYMENT_TYPE)
            )
            ->add(
                'default_down_payment_value',
                NumberField::class,
                NumberFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_down_payment_value'))
                    ->value($attributes['default_down_payment_value'] ?? self::DEFAULT_DOWN_PAYMENT_VALUE)
                    ->addAttribute('step', '0.01')
            )
            ->add(
                'show_extra_costs',
                OnOffField::class,
                OnOffFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.show_extra_costs'))
                    ->value($attributes['show_extra_costs'] ?? self::DEFAULT_SHOW_EXTRA_COSTS)
            )
            ->add(
                'currency',
                TextField::class,
                TextFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.currency'))
                    ->value($attributes['currency'] ?? self::DEFAULT_CURRENCY)
                    ->maxLength(10)
            )
            ->add(
                'price_from',
                SelectField::class,
                SelectFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.price_from'))
                    ->choices([
                        'none' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.price_from.none'),
                        'property' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.price_from.property'),
                    ])
                    ->selected($attributes['price_from'] ?? 'none')
                    ->helperText(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.price_from_helper'))
            )
            ->add(
                'primary_color',
                ColorField::class,
                ColorFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.primary_color'))
                    ->value($attributes['primary_color'] ?? self::DEFAULT_PRIMARY_COLOR)
            );
    }

    protected function getTermOptions(): array
    {
        $terms = array_map('trim', explode(',', self::DEFAULT_TERM_OPTIONS));
        $terms = array_filter($terms, fn ($term) => is_numeric($term) && $term > 0);

        return array_combine($terms, array_map(fn ($t) => $t . ' ' . trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.years'), $terms));
    }

    protected function getCurrentCurrencySymbol(): ?string
    {
        $currencySymbols = [
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

        $sessionCurrency = session('currency');

        if ($sessionCurrency && isset($currencySymbols[$sessionCurrency])) {
            return $currencySymbols[$sessionCurrency];
        }

        return null;
    }
}
