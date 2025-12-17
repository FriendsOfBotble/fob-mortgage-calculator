<?php

namespace FriendsOfBotble\MortgageCalculator\Shortcodes;

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
use FriendsOfBotble\MortgageCalculator\Supports\MortgageCalculatorConfig;
use FriendsOfBotble\MortgageCalculator\Supports\MortgageCalculatorHelper;

class MortgageCalculatorShortcode
{
    public function render(Shortcode $shortcode): string
    {
        $config = [
            'style' => $shortcode->style,
            'layout' => $shortcode->layout,
            'form_style' => $shortcode->form_style,
            'form_size' => $shortcode->form_size,
            'form_alignment' => $shortcode->form_alignment,
            'form_margin' => $shortcode->form_margin,
            'form_padding' => $shortcode->form_padding,
            'form_title' => $shortcode->form_title,
            'form_description' => $shortcode->form_description,
            'default_price' => $shortcode->default_price,
            'default_term' => $shortcode->default_term,
            'default_rate' => $shortcode->default_rate,
            'default_down_payment_type' => $shortcode->default_down_payment_type,
            'default_down_payment_value' => $shortcode->default_down_payment_value,
            'show_extra_costs' => $shortcode->show_extra_costs,
            'currency' => $shortcode->currency,
            'price_from' => $shortcode->price_from,
            'primary_color' => $shortcode->primary_color,
        ];

        $data = MortgageCalculatorHelper::prepareViewData($config, 'mc-' . uniqid());
        $data['shortcode'] = $shortcode;

        return view('plugins/fob-mortgage-calculator::shortcodes.calculator', $data)->render();
    }

    public function adminConfig(array $attributes): ShortcodeForm
    {
        return ShortcodeForm::createFromArray($attributes)
            ->add('style', SelectField::class, SelectFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.style'))
                ->choices(MortgageCalculatorConfig::getStyleChoices())
                ->selected($attributes['style'] ?? 'default'))
            ->add('layout', SelectField::class, SelectFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.layout'))
                ->choices(MortgageCalculatorConfig::getLayoutChoices())
                ->selected($attributes['layout'] ?? 'horizontal'))
            ->add('form_style', SelectField::class, SelectFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.form_style'))
                ->choices(MortgageCalculatorConfig::getFormStyleChoices())
                ->selected($attributes['form_style'] ?? 'default'))
            ->add('form_size', SelectField::class, SelectFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.form_size'))
                ->choices(MortgageCalculatorConfig::getFormSizeChoices())
                ->selected($attributes['form_size'] ?? 'lg'))
            ->add('form_alignment', SelectField::class, SelectFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.form_alignment'))
                ->choices(MortgageCalculatorConfig::getFormAlignmentChoices())
                ->selected($attributes['form_alignment'] ?? 'center'))
            ->add('form_margin', TextField::class, TextFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.form_margin'))
                ->value($attributes['form_margin'] ?? '')
                ->helperText(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.form_margin_helper')))
            ->add('form_padding', TextField::class, TextFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.form_padding'))
                ->value($attributes['form_padding'] ?? '')
                ->helperText(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.form_padding_helper')))
            ->add('form_title', TextField::class, TextFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.form_title'))
                ->value($attributes['form_title'] ?? ''))
            ->add('form_description', TextField::class, TextFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.form_description'))
                ->value($attributes['form_description'] ?? ''))
            ->add('default_price', NumberField::class, NumberFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_price'))
                ->value($attributes['default_price'] ?? null)
                ->helperText(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_price_helper')))
            ->add('default_term', NumberField::class, NumberFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_term'))
                ->value($attributes['default_term'] ?? MortgageCalculatorConfig::DEFAULT_TERM_YEARS))
            ->add('default_rate', NumberField::class, NumberFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_rate'))
                ->value($attributes['default_rate'] ?? MortgageCalculatorConfig::DEFAULT_INTEREST_RATE)
                ->addAttribute('step', '0.01'))
            ->add('default_down_payment_type', SelectField::class, SelectFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_down_payment_type'))
                ->choices(MortgageCalculatorConfig::getDownPaymentTypeChoices())
                ->selected($attributes['default_down_payment_type'] ?? MortgageCalculatorConfig::DEFAULT_DOWN_PAYMENT_TYPE))
            ->add('default_down_payment_value', NumberField::class, NumberFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_down_payment_value'))
                ->value($attributes['default_down_payment_value'] ?? MortgageCalculatorConfig::DEFAULT_DOWN_PAYMENT_VALUE)
                ->addAttribute('step', '0.01'))
            ->add('show_extra_costs', OnOffField::class, OnOffFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.show_extra_costs'))
                ->value($attributes['show_extra_costs'] ?? MortgageCalculatorConfig::DEFAULT_SHOW_EXTRA_COSTS))
            ->add('currency', TextField::class, TextFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.currency'))
                ->value($attributes['currency'] ?? MortgageCalculatorConfig::DEFAULT_CURRENCY)
                ->maxLength(10))
            ->add('price_from', SelectField::class, SelectFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.price_from'))
                ->choices(MortgageCalculatorConfig::getPriceFromChoices())
                ->selected($attributes['price_from'] ?? 'none')
                ->helperText(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.price_from_helper')))
            ->add('primary_color', ColorField::class, ColorFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.primary_color'))
                ->value($attributes['primary_color'] ?? MortgageCalculatorConfig::DEFAULT_PRIMARY_COLOR));
    }
}
