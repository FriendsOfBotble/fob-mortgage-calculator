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
use FriendsOfBotble\MortgageCalculator\Supports\MortgageCalculatorConfig;
use FriendsOfBotble\MortgageCalculator\Supports\MortgageCalculatorHelper;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class MortgageCalculatorWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.widget.name'),
            'description' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.widget.description'),
            'style' => 'default',
            'layout' => 'horizontal',
            'form_style' => 'default',
            'form_margin' => '',
            'form_padding' => '',
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

        $viewConfig = [
            'style' => Arr::get($config, 'style'),
            'layout' => Arr::get($config, 'layout'),
            'form_style' => Arr::get($config, 'form_style'),
            'form_size' => 'full',
            'form_alignment' => 'start',
            'form_margin' => Arr::get($config, 'form_margin'),
            'form_padding' => Arr::get($config, 'form_padding'),
            'form_title' => '',
            'form_description' => '',
            'default_price' => Arr::get($config, 'default_price'),
            'default_term' => Arr::get($config, 'default_term'),
            'default_rate' => Arr::get($config, 'default_rate'),
            'default_down_payment_type' => Arr::get($config, 'default_down_payment_type'),
            'default_down_payment_value' => Arr::get($config, 'default_down_payment_value'),
            'show_extra_costs' => Arr::get($config, 'show_extra_costs'),
            'currency' => null,
            'price_from' => 'none',
            'primary_color' => null,
        ];

        return MortgageCalculatorHelper::prepareViewData($viewConfig, 'mc-widget-' . $this->getId());
    }

    protected function settingForm(): WidgetForm|string|null
    {
        return WidgetForm::createFromArray($this->getConfig())
            ->add('name', TextField::class, TextFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.widget.title')))
            ->add('style', SelectField::class, SelectFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.style'))
                ->choices(MortgageCalculatorConfig::getStyleChoices()))
            ->add('layout', SelectField::class, SelectFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.layout'))
                ->choices(MortgageCalculatorConfig::getLayoutChoices()))
            ->add('form_style', SelectField::class, SelectFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.form_style'))
                ->choices(MortgageCalculatorConfig::getFormStyleChoices()))
            ->add('form_margin', TextField::class, TextFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.form_margin'))
                ->helperText(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.form_margin_helper')))
            ->add('form_padding', TextField::class, TextFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.form_padding'))
                ->helperText(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.form_padding_helper')))
            ->add('default_price', NumberField::class, NumberFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_price'))
                ->helperText(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_price_helper')))
            ->add('default_term', NumberField::class, NumberFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_term'))
                ->helperText(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.widget.leave_empty_for_default')))
            ->add('default_rate', NumberField::class, NumberFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_rate'))
                ->addAttribute('step', '0.01')
                ->helperText(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.widget.leave_empty_for_default')))
            ->add('default_down_payment_type', SelectField::class, SelectFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_down_payment_type'))
                ->choices(MortgageCalculatorConfig::getDownPaymentTypeChoices(includeEmpty: true)))
            ->add('default_down_payment_value', NumberField::class, NumberFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.default_down_payment_value'))
                ->addAttribute('step', '0.01')
                ->helperText(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.widget.leave_empty_for_default')))
            ->add('show_extra_costs', OnOffField::class, OnOffFieldOption::make()
                ->label(trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.shortcode.show_extra_costs')));
    }

    protected function requiredPlugins(): array
    {
        return ['fob-mortgage-calculator'];
    }
}
