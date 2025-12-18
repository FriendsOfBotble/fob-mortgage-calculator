<?php

return [
    'name' => 'Mortgage Calculator',
    'years' => 'taon',
    'year' => 'taon',
    'month' => 'buwan',
    'months' => 'buwan',

    'methods' => [
        'decreasing_balance' => 'Bumababang Balanse',
        'fixed_payment' => 'Nakapirming Bayad',
    ],

    'settings' => [
        'title' => 'Mortgage Calculator',
        'description' => 'I-configure ang mga default na halaga para sa mortgage calculator',
        'default_interest_rate' => 'Default na interest rate (%)',
        'default_term_years' => 'Default na loan term (taon)',
        'default_down_payment_type' => 'Default na uri ng down payment',
        'default_down_payment_value' => 'Default na halaga ng down payment',
        'show_extra_costs' => 'Ipakita ang mga karagdagang gastos',
        'show_extra_costs_helper' => 'I-enable ang property tax, insurance, at HOA fees fields sa calculator',
        'term_options' => 'Mga opsyon ng loan term',
        'term_options_helper' => 'Listahan ng mga available na loan term sa taon, pinaghihiwalay ng comma (hal: 10,15,20,25,30)',
        'currency_symbol' => 'Simbolo ng pera',
    ],

    'down_payment_types' => [
        'percent' => 'Porsyento',
        'amount' => 'Nakapirming Halaga',
    ],

    'shortcode' => [
        'name' => 'Mortgage Calculator',
        'description' => 'Ipakita ang mortgage payment calculator na may mga maadjust na default',
        'style' => 'Estilo',
        'form_style' => 'Estilo ng Form',
        'form_size' => 'Laki ng Form',
        'form_alignment' => 'Alignment ng Form',
        'form_margin' => 'Margin ng Form',
        'form_margin_helper' => 'Espasyo sa labas ng form (hal: 20px, 1rem, 20px 0)',
        'form_padding' => 'Padding ng Form',
        'form_padding_helper' => 'Espasyo sa loob ng form (hal: 20px, 1rem, 30px 20px)',
        'form_title' => 'Pamagat ng Form',
        'form_description' => 'Paglalarawan ng Form',
        'default_price' => 'Default na presyo ng property',
        'default_price_helper' => 'Iwanang blangko para payagan ang mga user na mag-enter ng sariling presyo',
        'default_term' => 'Default na loan term (taon)',
        'default_rate' => 'Default na interest rate (%)',
        'default_down_payment_type' => 'Default na uri ng down payment',
        'default_down_payment_value' => 'Default na halaga ng down payment',
        'show_extra_costs' => 'Ipakita ang mga karagdagang gastos',
        'currency' => 'Simbolo ng pera',
        'price_from' => 'Pinagmulan ng presyo',
        'price_from_helper' => 'Piliin kung saan kukunin ang presyo ng property',
        'primary_color' => 'Pangunahing Kulay',
        'layout' => 'Layout',
    ],

    'layouts' => [
        'horizontal' => 'Pahalang',
        'vertical' => 'Patayo',
    ],

    'styles' => [
        'default' => 'Default',
        'compact' => 'Compact',
    ],

    'form_styles' => [
        'default' => 'Default',
        'modern' => 'Modernong',
        'minimal' => 'Minimal',
        'bold' => 'Makapal',
        'glass' => 'Glassmorphism',
    ],

    'form_sizes' => [
        'full' => 'Buong Laki (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Malaki (992px)',
        'md' => 'Katamtaman (768px)',
        'sm' => 'Maliit (576px)',
    ],

    'form_alignments' => [
        'start' => 'Kaliwa (Simula)',
        'center' => 'Gitna',
        'end' => 'Kanan (Dulo)',
    ],

    'price_from' => [
        'none' => 'Manual na Input',
        'property' => 'Mula sa Property',
    ],

    'fields' => [
        'property_price' => 'Presyo ng Property',
        'down_payment' => 'Down Payment',
        'loan_amount' => 'Halaga ng Loan',
        'loan_term' => 'Loan Term',
        'interest_rate' => 'Interest Rate',
        'disbursement_date' => 'Petsa ng Disbursement',
        'extra_costs' => 'Karagdagang Gastos (Opsyonal)',
        'property_tax' => 'Property Tax',
        'insurance' => 'Home Insurance',
        'hoa' => 'HOA Fees',
    ],

    'help' => [
        'down_payment_percent' => 'I-enter bilang porsyento ng presyo ng property',
        'down_payment_amount' => 'I-enter bilang nakapirming halaga',
        'loan_amount_hint' => 'I-drag ang slider o i-enter ang halaga na gusto mong hiramin',
    ],

    'results' => [
        'monthly_pi' => 'Buwanang P&I',
        'monthly_payment' => 'Buwanang Bayad',
        'total_monthly' => 'Kabuuang Buwanan',
        'total_interest' => 'Kabuuang Interest',
        'total_paid' => 'Kabuuang Halaga',
        'from' => 'Mula',
        'to' => 'Hanggang',
        'view_details' => 'Tingnan ang Detalye',
        'empty_state_title' => 'Kalkulahin ang Iyong Mortgage',
        'empty_state_message' => 'Ilagay ang presyo ng ari-arian at mga detalye ng pautang sa itaas upang makita ang tinantyang buwanang bayad at kabuuang interes.',
    ],

    'amortization' => [
        'title' => 'Iskedyul ng Amortization',
        'chart' => 'Chart',
        'table' => 'Talahanayan',
        'period' => 'Panahon',
        'payment' => 'Bayad',
        'year' => 'Taon',
        'principal' => 'Principal',
        'interest' => 'Interest',
        'balance' => 'Balanse',
        'loan_amount' => 'Halaga ng Loan',
        'total_principal' => 'Kabuuang Principal',
        'total_interest' => 'Kabuuang Interest',
    ],

    'widget' => [
        'name' => 'Mortgage Calculator',
        'description' => 'Ipakita ang mortgage calculator sa sidebar',
        'title' => 'Pamagat ng Widget',
        'leave_empty_for_default' => 'Iwanang blangko para gumamit ng global settings',
        'use_default' => 'Gamitin ang Default',
    ],

    'errors' => [
        'property_price_required' => 'Ang presyo ng ari-arian ay dapat mas malaki sa 0',
        'loan_amount_required' => 'Ang halaga ng pautang ay dapat mas malaki sa 0',
        'loan_amount_exceeds_price' => 'Ang halaga ng pautang ay hindi maaaring lumampas sa presyo ng ari-arian',
        'loan_term_required' => 'Ang termino ng pautang ay dapat mas malaki sa 0',
        'interest_rate_negative' => 'Ang rate ng interes ay hindi maaaring negatibo',
    ],
];
