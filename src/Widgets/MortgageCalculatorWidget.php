<?php

namespace FriendsOfBotble\MortgageCalculator\Widgets;

use Botble\Base\Forms\FieldOptions\NumberFieldOption;
use Botble\Base\Forms\FieldOptions\OnOffFieldOption;
use Botble\Base\Forms\FieldOptions\SelectFieldOption;
use Botble\Base\Forms\FieldOptions\TextFieldOption;
use Botble\Base\Forms\Fields\NumberField;
use Botble\Base\Forms\Fields\OnOffField;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Widget\AbstractWidget;
use Botble\Widget\Forms\WidgetForm;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class MortgageCalculatorWidget extends AbstractWidget
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

    public function __construct()
    {
        parent::__construct([
            'name' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.widget.name'),
            'description' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.widget.description'),
            'style' => 'default',
            'layout' => 'horizontal',
            'form_style' => 'default',
            'form_margin' => 'default',
            'form_padding' => 'default',
            'default_price' => null,
            'default_term' => null,
            'default_rate' => null,
            'default_down_payment_type' => null,
            'default_down_payment_value' => null,
            'show_extra_costs' => null,
        ]);

        $this->setFrontendTemplate('plugins/fob-mortgage-calculator::widgets.mortgage-calculator');
    }

    public function data(): array|Collection
    {
        $config = $this->getConfig();

        $termOptions = $this->getTermOptions();
        $currency = $this->getCurrentCurrencySymbol();

        return [
            'style' => Arr::get($config, 'style', 'default'),
            'layout' => Arr::get($config, 'layout', 'horizontal'),
            'formStyle' => Arr::get($config, 'form_style', 'default'),
            'formSize' => 'full',
            'formAlignment' => 'start',
            'formMargin' => Arr::get($config, 'form_margin', 'default'),
            'formPadding' => Arr::get($config, 'form_padding', 'default'),
            'formTitle' => '',
            'formDescription' => '',
            'defaultPrice' => Arr::get($config, 'default_price'),
            'defaultTerm' => Arr::get($config, 'default_term') ?: self::DEFAULT_TERM_YEARS,
            'defaultRate' => Arr::get($config, 'default_rate') ?: self::DEFAULT_INTEREST_RATE,
            'defaultDownPaymentType' => Arr::get($config, 'default_down_payment_type') ?: self::DEFAULT_DOWN_PAYMENT_TYPE,
            'defaultDownPaymentValue' => Arr::get($config, 'default_down_payment_value') ?: self::DEFAULT_DOWN_PAYMENT_VALUE,
            'showExtraCosts' => Arr::get($config, 'show_extra_costs') !== null
                ? (bool) Arr::get($config, 'show_extra_costs')
                : self::DEFAULT_SHOW_EXTRA_COSTS,
            'currency' => $this->getCurrentCurrencySymbol() ?: self::DEFAULT_CURRENCY,
            'priceFrom' => 'none',
            'primaryColor' => self::DEFAULT_PRIMARY_COLOR,
            'termOptions' => $termOptions,
            'uniqueId' => 'mc-widget-' . $this->getId(),
        ];
    }

    protected function settingForm(): WidgetForm|string|null
    {
        return WidgetForm::createFromArray($this->getConfig())
            ->add(
                'name',
                TextField::class,
                TextFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.widget.title'))
            )
            ->add(
                'style',
                SelectField::class,
                SelectFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.style'))
                    ->choices([
                        'default' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.styles.default'),
                        'compact' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.styles.compact'),
                    ])
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
            )
            ->add(
                'default_price',
                NumberField::class,
                NumberFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_price'))
                    ->helperText(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_price_helper'))
            )
            ->add(
                'default_term',
                NumberField::class,
                NumberFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_term'))
                    ->helperText(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.widget.leave_empty_for_default'))
            )
            ->add(
                'default_rate',
                NumberField::class,
                NumberFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_rate'))
                    ->addAttribute('step', '0.01')
                    ->helperText(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.widget.leave_empty_for_default'))
            )
            ->add(
                'default_down_payment_type',
                SelectField::class,
                SelectFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_down_payment_type'))
                    ->choices([
                        '' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.widget.use_default'),
                        'percent' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.down_payment_types.percent'),
                        'amount' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.down_payment_types.amount'),
                    ])
            )
            ->add(
                'default_down_payment_value',
                NumberField::class,
                NumberFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_down_payment_value'))
                    ->addAttribute('step', '0.01')
                    ->helperText(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.widget.leave_empty_for_default'))
            )
            ->add(
                'show_extra_costs',
                OnOffField::class,
                OnOffFieldOption::make()
                    ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.show_extra_costs'))
            );
    }

    protected function requiredPlugins(): array
    {
        return ['fob-mortgage-calculator'];
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
