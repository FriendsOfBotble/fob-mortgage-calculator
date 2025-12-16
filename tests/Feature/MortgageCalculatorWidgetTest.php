<?php

namespace FriendsOfBotble\MortgageCalculator\Tests\Feature;

use FriendsOfBotble\MortgageCalculator\Widgets\MortgageCalculatorWidget;
use Tests\TestCase;

class MortgageCalculatorWidgetTest extends TestCase
{
    protected MortgageCalculatorWidget $widget;

    protected function setUp(): void
    {
        parent::setUp();

        $this->widget = new MortgageCalculatorWidget();
    }

    public function testWidgetHasCorrectName(): void
    {
        $config = $this->widget->getConfig();

        $this->assertArrayHasKey('name', $config);
        $this->assertEquals(
            trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.widget.name'),
            $config['name']
        );
    }

    public function testWidgetHasCorrectDescription(): void
    {
        $config = $this->widget->getConfig();

        $this->assertArrayHasKey('description', $config);
        $this->assertEquals(
            trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.widget.description'),
            $config['description']
        );
    }

    public function testWidgetDataReturnsRequiredKeys(): void
    {
        $data = $this->widget->data();

        $this->assertArrayHasKey('style', $data);
        $this->assertArrayHasKey('formStyle', $data);
        $this->assertArrayHasKey('defaultPrice', $data);
        $this->assertArrayHasKey('defaultTerm', $data);
        $this->assertArrayHasKey('defaultRate', $data);
        $this->assertArrayHasKey('defaultDownPaymentType', $data);
        $this->assertArrayHasKey('defaultDownPaymentValue', $data);
        $this->assertArrayHasKey('showExtraCosts', $data);
        $this->assertArrayHasKey('currency', $data);
        $this->assertArrayHasKey('termOptions', $data);
        $this->assertArrayHasKey('uniqueId', $data);
    }

    public function testWidgetDataHasDefaultStyle(): void
    {
        $data = $this->widget->data();

        $this->assertEquals('default', $data['style']);
    }

    public function testWidgetDataHasUniqueId(): void
    {
        $data = $this->widget->data();

        $this->assertStringStartsWith('mc-widget-', $data['uniqueId']);
    }

    public function testWidgetDataHasTermOptions(): void
    {
        $data = $this->widget->data();

        $this->assertIsArray($data['termOptions']);
        $this->assertNotEmpty($data['termOptions']);
    }

    public function testWidgetDataUsesDefaultSettingsWhenNotConfigured(): void
    {
        $data = $this->widget->data();

        $expectedTerm = (int) setting('mortgage_calculator_default_term_years', 20);
        $expectedRate = (float) setting('mortgage_calculator_default_interest_rate', 10);

        $this->assertEquals($expectedTerm, $data['defaultTerm']);
        $this->assertEquals($expectedRate, $data['defaultRate']);
    }

    public function testWidgetRequiresMortgageCalculatorPlugin(): void
    {
        $reflection = new \ReflectionClass($this->widget);
        $method = $reflection->getMethod('requiredPlugins');
        $method->setAccessible(true);

        $requiredPlugins = $method->invoke($this->widget);

        $this->assertContains('fob-mortgage-calculator', $requiredPlugins);
    }

    public function testWidgetConfigHasExpectedDefaults(): void
    {
        $config = $this->widget->getConfig();

        $this->assertEquals('default', $config['style']);
        $this->assertEquals('default', $config['form_style']);
        $this->assertNull($config['default_price']);
        $this->assertNull($config['default_term']);
        $this->assertNull($config['default_rate']);
    }
}
