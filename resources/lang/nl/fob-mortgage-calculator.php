<?php

return [
    'name' => 'Hypotheekcalculator',
    'years' => 'jaren',
    'year' => 'jaar',
    'month' => 'maand',
    'months' => 'maanden',

    'methods' => [
        'decreasing_balance' => 'Dalend Saldo',
        'fixed_payment' => 'Vaste Betaling',
    ],

    'settings' => [
        'title' => 'Hypotheekcalculator',
        'description' => 'Configureer standaardwaarden voor de hypotheekcalculator',
        'default_interest_rate' => 'Standaard Rentepercentage (%)',
        'default_term_years' => 'Standaard Looptijd (jaren)',
        'default_down_payment_type' => 'Standaard Type Aanbetaling',
        'default_down_payment_value' => 'Standaard Waarde Aanbetaling',
        'show_extra_costs' => 'Toon Extra Kosten',
        'show_extra_costs_helper' => 'Schakel onroerendgoedbelasting, verzekering en VvE-bijdrage velden in de calculator in',
        'term_options' => 'Looptijd Opties',
        'term_options_helper' => 'Kommagescheiden lijst van beschikbare leningtermijnen in jaren (bijv. 10,15,20,25,30)',
        'currency_symbol' => 'Valutasymbool',
    ],

    'down_payment_types' => [
        'percent' => 'Percentage',
        'amount' => 'Vast Bedrag',
    ],

    'shortcode' => [
        'name' => 'Hypotheekcalculator',
        'description' => 'Toon een hypotheekbetalingscalculator met aanpasbare standaardwaarden',
        'style' => 'Stijl',
        'form_style' => 'Formulierstijl',
        'form_size' => 'Formuliergrootte',
        'form_alignment' => 'Formulieruitlijning',
        'form_margin' => 'Formuliermarge',
        'form_margin_helper' => 'Ruimte buiten het formulier (bijv. 20px, 1rem, 20px 0)',
        'form_padding' => 'Formulieropvulling',
        'form_padding_helper' => 'Ruimte binnen het formulier (bijv. 20px, 1rem, 30px 20px)',
        'form_title' => 'Formuliertitel',
        'form_description' => 'Formulierbeschrijving',
        'default_price' => 'Standaard Woningprijs',
        'default_price_helper' => 'Laat leeg om gebruikers hun eigen prijs te laten invoeren',
        'default_term' => 'Standaard Looptijd (jaren)',
        'default_rate' => 'Standaard Rentepercentage (%)',
        'default_down_payment_type' => 'Standaard Type Aanbetaling',
        'default_down_payment_value' => 'Standaard Waarde Aanbetaling',
        'show_extra_costs' => 'Toon Extra Kosten',
        'currency' => 'Valutasymbool',
        'price_from' => 'Prijsbron',
        'price_from_helper' => 'Kies waar de woningprijs vandaan moet komen',
        'primary_color' => 'Primaire Kleur',
        'layout' => 'Lay-out',
    ],

    'layouts' => [
        'horizontal' => 'Horizontaal',
        'vertical' => 'Verticaal',
    ],

    'styles' => [
        'default' => 'Standaard',
        'compact' => 'Compact',
    ],

    'form_styles' => [
        'default' => 'Standaard',
        'modern' => 'Modern',
        'minimal' => 'Minimaal',
        'bold' => 'Vet',
        'glass' => 'Glasmorfisme',
    ],

    'form_sizes' => [
        'full' => 'Volledige Grootte (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Groot (992px)',
        'md' => 'Gemiddeld (768px)',
        'sm' => 'Klein (576px)',
    ],

    'form_alignments' => [
        'start' => 'Links (Start)',
        'center' => 'Midden',
        'end' => 'Rechts (Einde)',
    ],

    'price_from' => [
        'none' => 'Handmatige Invoer',
        'property' => 'Van Woning',
    ],

    'fields' => [
        'property_price' => 'Woningprijs',
        'down_payment' => 'Aanbetaling',
        'loan_amount' => 'Leningbedrag',
        'loan_term' => 'Looptijd',
        'interest_rate' => 'Rentepercentage',
        'disbursement_date' => 'Uitkeringsdatum',
        'extra_costs' => 'Aanvullende Kosten (Optioneel)',
        'property_tax' => 'Onroerendgoedbelasting',
        'insurance' => 'Woningverzekering',
        'hoa' => 'VvE-bijdrage',
    ],

    'help' => [
        'down_payment_percent' => 'Voer in als percentage van de woningprijs',
        'down_payment_amount' => 'Voer in als vast bedrag',
        'loan_amount_hint' => 'Versleep de schuifregelaar of voer het bedrag in dat u wilt lenen',
    ],

    'results' => [
        'monthly_pi' => 'Maandelijks A&R',
        'monthly_payment' => 'Maandelijkse Betaling',
        'total_monthly' => 'Totaal Maandelijks',
        'total_interest' => 'Totale Rente',
        'total_paid' => 'Totaalbedrag',
        'from' => 'Van',
        'to' => 'Tot',
        'view_details' => 'Bekijk Details',
        'empty_state_title' => 'Bereken Uw Hypotheek',
        'empty_state_message' => 'Voer hierboven uw woningprijs en leningdetails in om geschatte maandelijkse betalingen en totale rente te zien.',
    ],

    'amortization' => [
        'title' => 'Aflossingsschema',
        'chart' => 'Grafiek',
        'table' => 'Tabel',
        'period' => 'Periode',
        'payment' => 'Betaling',
        'year' => 'Jaar',
        'principal' => 'Hoofdsom',
        'interest' => 'Rente',
        'balance' => 'Saldo',
        'loan_amount' => 'Leningbedrag',
        'total_principal' => 'Totale Hoofdsom',
        'total_interest' => 'Totale Rente',
    ],

    'widget' => [
        'name' => 'Hypotheekcalculator',
        'description' => 'Toon hypotheekcalculator in zijbalk',
        'title' => 'Widget Titel',
        'leave_empty_for_default' => 'Laat leeg om algemene instellingen te gebruiken',
        'use_default' => 'Gebruik Standaard',
    ],

    'errors' => [
        'property_price_required' => 'De woningprijs moet groter zijn dan 0',
        'loan_amount_required' => 'Het leningbedrag moet groter zijn dan 0',
        'loan_amount_exceeds_price' => 'Het leningbedrag mag de woningprijs niet overschrijden',
        'loan_term_required' => 'De looptijd moet groter zijn dan 0',
        'interest_rate_negative' => 'De rente kan niet negatief zijn',
    ],
];
