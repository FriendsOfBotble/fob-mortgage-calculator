<?php

namespace FriendsOfBotble\MortgageCalculator\Tests\Feature;

use Botble\Shortcode\Compilers\Shortcode;
use Botble\Shortcode\Forms\ShortcodeForm;
use FriendsOfBotble\MortgageCalculator\Shortcodes\MortgageCalculatorShortcode;
use Tests\TestCase;

class MortgageCalculatorShortcodeTest extends TestCase
{
    protected MortgageCalculatorShortcode $shortcode;

    protected function setUp(): void
    {
        parent::setUp();

        $this->shortcode = new MortgageCalculatorShortcode();
    }

    protected function createShortcode(array $attributes = []): Shortcode
    {
        return new Shortcode('mortgage_calculator', $attributes);
    }

    public function testShortcodeRendersSuccessfully(): void
    {
        $shortcode = $this->createShortcode();

        $html = $this->shortcode->render($shortcode);

        $this->assertNotEmpty($html);
        $this->assertStringContainsString('mortgage-calculator', $html);
        $this->assertStringContainsString('data-calculator', $html);
    }

    public function testShortcodeRendersWithDefaultStyle(): void
    {
        $shortcode = $this->createShortcode(['style' => 'default']);

        $html = $this->shortcode->render($shortcode);

        $this->assertStringNotContainsString('mortgage-calculator--compact', $html);
    }

    public function testShortcodeRendersWithCompactStyle(): void
    {
        $shortcode = $this->createShortcode(['style' => 'compact']);

        $html = $this->shortcode->render($shortcode);

        $this->assertStringContainsString('mortgage-calculator--compact', $html);
    }

    public function testShortcodeRendersWithCustomFormStyle(): void
    {
        $shortcode = $this->createShortcode(['form_style' => 'modern']);

        $html = $this->shortcode->render($shortcode);

        $this->assertStringContainsString('mortgage-calculator--style-modern', $html);
    }

    public function testShortcodeRendersWithFormTitle(): void
    {
        $title = 'Calculate Your Mortgage';
        $shortcode = $this->createShortcode(['form_title' => $title]);

        $html = $this->shortcode->render($shortcode);

        $this->assertStringContainsString($title, $html);
        $this->assertStringContainsString('mortgage-calculator__title', $html);
    }

    public function testShortcodeRendersWithFormDescription(): void
    {
        $description = 'Enter your details below';
        $shortcode = $this->createShortcode(['form_description' => $description]);

        $html = $this->shortcode->render($shortcode);

        $this->assertStringContainsString($description, $html);
        $this->assertStringContainsString('mortgage-calculator__description', $html);
    }

    public function testShortcodeRendersWithCustomPrimaryColor(): void
    {
        $color = '#ff5500';
        $shortcode = $this->createShortcode(['primary_color' => $color]);

        $html = $this->shortcode->render($shortcode);

        $this->assertStringContainsString('--mc-primary: ' . $color, $html);
    }

    public function testShortcodeRendersWithDefaultPrice(): void
    {
        $price = '500000';
        $shortcode = $this->createShortcode(['default_price' => $price]);

        $html = $this->shortcode->render($shortcode);

        $this->assertStringContainsString('value="' . $price . '"', $html);
    }

    public function testShortcodeRendersWithFormSize(): void
    {
        $shortcode = $this->createShortcode(['form_size' => 'md']);

        $html = $this->shortcode->render($shortcode);

        $this->assertStringContainsString('mortgage-calculator-container--md', $html);
    }

    public function testShortcodeRendersWithFormAlignment(): void
    {
        $shortcode = $this->createShortcode(['form_alignment' => 'end']);

        $html = $this->shortcode->render($shortcode);

        $this->assertStringContainsString('mortgage-calculator-container--align-end', $html);
    }

    public function testShortcodeContainsCalculatorForm(): void
    {
        $shortcode = $this->createShortcode();

        $html = $this->shortcode->render($shortcode);

        $this->assertStringContainsString('name="property_price"', $html);
        $this->assertStringContainsString('name="loan_amount"', $html);
        $this->assertStringContainsString('name="loan_term_months"', $html);
        $this->assertStringContainsString('name="interest_rate"', $html);
    }

    public function testShortcodeContainsResultsPanel(): void
    {
        $shortcode = $this->createShortcode();

        $html = $this->shortcode->render($shortcode);

        $this->assertStringContainsString('data-results', $html);
        $this->assertStringContainsString('mortgage-calculator__results-panel', $html);
    }

    public function testShortcodeContainsModal(): void
    {
        $shortcode = $this->createShortcode();

        $html = $this->shortcode->render($shortcode);

        $this->assertStringContainsString('data-modal', $html);
        $this->assertStringContainsString('mortgage-calculator__modal', $html);
    }

    public function testShortcodeIncludesJavaScriptConfig(): void
    {
        $shortcode = $this->createShortcode();

        $html = $this->shortcode->render($shortcode);

        $this->assertStringContainsString('window.mortgageCalculatorConfig', $html);
        $this->assertStringContainsString('currency:', $html);
        $this->assertStringContainsString('translations:', $html);
    }

    public function testShortcodeRendersWithCustomCurrency(): void
    {
        $currency = '€';
        $shortcode = $this->createShortcode(['currency' => $currency]);

        $html = $this->shortcode->render($shortcode);

        $this->assertStringContainsString($currency, $html);
    }

    public function testAdminConfigReturnsShortcodeForm(): void
    {
        $form = $this->shortcode->adminConfig([]);

        $this->assertInstanceOf(ShortcodeForm::class, $form);
    }

    public function testAdminConfigContainsAllFields(): void
    {
        $form = $this->shortcode->adminConfig([]);

        $this->assertTrue($form->has('style'));
        $this->assertTrue($form->has('form_style'));
        $this->assertTrue($form->has('form_size'));
        $this->assertTrue($form->has('form_alignment'));
        $this->assertTrue($form->has('form_title'));
        $this->assertTrue($form->has('default_price'));
        $this->assertTrue($form->has('default_term'));
        $this->assertTrue($form->has('default_rate'));
        $this->assertTrue($form->has('currency'));
        $this->assertTrue($form->has('primary_color'));
    }
}
