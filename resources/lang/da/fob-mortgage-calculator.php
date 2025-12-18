<?php

return [
    'name' => 'Boliglånsberegner',
    'years' => 'år',
    'year' => 'år',
    'month' => 'måned',
    'months' => 'måneder',

    'methods' => [
        'decreasing_balance' => 'Faldende Saldo',
        'fixed_payment' => 'Fast Betaling',
    ],

    'settings' => [
        'title' => 'Boliglånsberegner',
        'description' => 'Konfigurer standardværdier for boliglånsberegneren',
        'default_interest_rate' => 'Standard Rentesats (%)',
        'default_term_years' => 'Standard Låneperiode (år)',
        'default_down_payment_type' => 'Standard Udbetalingstype',
        'default_down_payment_value' => 'Standard Udbetalingsværdi',
        'show_extra_costs' => 'Vis Ekstra Omkostninger',
        'show_extra_costs_helper' => 'Aktiver felter for ejendomsskat, forsikring og andelsforeningsgebyrer i beregneren',
        'term_options' => 'Låneperiodemuligheder',
        'term_options_helper' => 'Kommasepareret liste over tilgængelige låneperioder i år (f.eks. 10,15,20,25,30)',
        'currency_symbol' => 'Valutasymbol',
    ],

    'down_payment_types' => [
        'percent' => 'Procent',
        'amount' => 'Fast Beløb',
    ],

    'shortcode' => [
        'name' => 'Boliglånsberegner',
        'description' => 'Vis en boliglånsbetalingsberegner med tilpasselige standardværdier',
        'style' => 'Stil',
        'form_style' => 'Formularstil',
        'form_size' => 'Formularstørrelse',
        'form_alignment' => 'Formularjustering',
        'form_margin' => 'Formularmargen',
        'form_margin_helper' => 'Plads udenfor formularen (f.eks. 20px, 1rem, 20px 0)',
        'form_padding' => 'Formularpolstring',
        'form_padding_helper' => 'Plads indenfor formularen (f.eks. 20px, 1rem, 30px 20px)',
        'form_title' => 'Formulartitel',
        'form_description' => 'Formularbeskrivelse',
        'default_price' => 'Standard Ejendomspris',
        'default_price_helper' => 'Lad stå tomt for at lade brugere indtaste deres egen pris',
        'default_term' => 'Standard Låneperiode (år)',
        'default_rate' => 'Standard Rentesats (%)',
        'default_down_payment_type' => 'Standard Udbetalingstype',
        'default_down_payment_value' => 'Standard Udbetalingsværdi',
        'show_extra_costs' => 'Vis Ekstra Omkostninger',
        'currency' => 'Valutasymbol',
        'price_from' => 'Priskilde',
        'price_from_helper' => 'Vælg hvor ejendomsprisen skal hentes fra',
        'primary_color' => 'Primær Farve',
        'layout' => 'Layout',
    ],

    'layouts' => [
        'horizontal' => 'Vandret',
        'vertical' => 'Lodret',
    ],

    'styles' => [
        'default' => 'Standard',
        'compact' => 'Kompakt',
    ],

    'form_styles' => [
        'default' => 'Standard',
        'modern' => 'Moderne',
        'minimal' => 'Minimal',
        'bold' => 'Fed',
        'glass' => 'Glasmorfisme',
    ],

    'form_sizes' => [
        'full' => 'Fuld Størrelse (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Stor (992px)',
        'md' => 'Mellem (768px)',
        'sm' => 'Lille (576px)',
    ],

    'form_alignments' => [
        'start' => 'Venstre (Start)',
        'center' => 'Center',
        'end' => 'Højre (Slut)',
    ],

    'price_from' => [
        'none' => 'Manuel Indtastning',
        'property' => 'Fra Ejendom',
    ],

    'fields' => [
        'property_price' => 'Ejendomspris',
        'down_payment' => 'Udbetaling',
        'loan_amount' => 'Lånebeløb',
        'loan_term' => 'Låneperiode',
        'interest_rate' => 'Rentesats',
        'disbursement_date' => 'Udbetalingsdato',
        'extra_costs' => 'Yderligere Omkostninger (Valgfrit)',
        'property_tax' => 'Ejendomsskat',
        'insurance' => 'Boligforsikring',
        'hoa' => 'Andelsforeningsgebyrer',
    ],

    'help' => [
        'down_payment_percent' => 'Indtast som procent af ejendomsprisen',
        'down_payment_amount' => 'Indtast som fast beløb',
        'loan_amount_hint' => 'Træk skyderen eller indtast det beløb, du ønsker at låne',
    ],

    'results' => [
        'monthly_pi' => 'Månedlig H&R',
        'monthly_payment' => 'Månedlig Betaling',
        'total_monthly' => 'Samlet Månedlig',
        'total_interest' => 'Samlet Rente',
        'total_paid' => 'Samlet Beløb',
        'from' => 'Fra',
        'to' => 'Til',
        'view_details' => 'Se Detaljer',
        'empty_state_title' => 'Beregn Dit Realkreditlån',
        'empty_state_message' => 'Indtast din ejendomspris og lånedetaljer ovenfor for at se estimerede månedlige betalinger og samlet rente.',
    ],

    'amortization' => [
        'title' => 'Afviklingsplan',
        'chart' => 'Diagram',
        'table' => 'Tabel',
        'period' => 'Periode',
        'payment' => 'Betaling',
        'year' => 'År',
        'principal' => 'Hovedstol',
        'interest' => 'Rente',
        'balance' => 'Saldo',
        'loan_amount' => 'Lånebeløb',
        'total_principal' => 'Samlet Hovedstol',
        'total_interest' => 'Samlet Rente',
    ],

    'widget' => [
        'name' => 'Boliglånsberegner',
        'description' => 'Vis boliglånsberegner i sidepanelet',
        'title' => 'Widget Titel',
        'leave_empty_for_default' => 'Lad stå tomt for at bruge globale indstillinger',
        'use_default' => 'Brug Standard',
    ],

    'errors' => [
        'property_price_required' => 'Ejendomsprisen skal være større end 0',
        'loan_amount_required' => 'Lånebeløbet skal være større end 0',
        'loan_amount_exceeds_price' => 'Lånebeløbet må ikke overstige ejendomsprisen',
        'loan_term_required' => 'Låneperioden skal være større end 0',
        'interest_rate_negative' => 'Renten kan ikke være negativ',
    ],
];
