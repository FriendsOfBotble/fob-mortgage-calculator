<?php

return [
    'name' => 'Boliglånskalkulator',
    'years' => 'år',
    'year' => 'år',
    'month' => 'måned',
    'months' => 'måneder',

    'methods' => [
        'decreasing_balance' => 'Synkende Saldo',
        'fixed_payment' => 'Fast Betaling',
    ],

    'settings' => [
        'title' => 'Boliglånskalkulator',
        'description' => 'Konfigurer standardverdier for boliglånskalkulatoren',
        'default_interest_rate' => 'Standard Rente (%)',
        'default_term_years' => 'Standard Låneperiode (år)',
        'default_down_payment_type' => 'Standard Egenkapitaltype',
        'default_down_payment_value' => 'Standard Egenkapitalverdi',
        'show_extra_costs' => 'Vis Ekstra Kostnader',
        'show_extra_costs_helper' => 'Aktiver felt for eiendomsskatt, forsikring og sameiegebyr i kalkulatoren',
        'term_options' => 'Låneperiodealternativer',
        'term_options_helper' => 'Kommaseparert liste over tilgjengelige låneperioder i år (f.eks. 10,15,20,25,30)',
        'currency_symbol' => 'Valutasymbol',
    ],

    'down_payment_types' => [
        'percent' => 'Prosent',
        'amount' => 'Fast Beløp',
    ],

    'shortcode' => [
        'name' => 'Boliglånskalkulator',
        'description' => 'Vis en boliglånsbetalingskalkulator med tilpassbare standardverdier',
        'style' => 'Stil',
        'form_style' => 'Skjemastil',
        'form_size' => 'Skjemastørrelse',
        'form_alignment' => 'Skjemajustering',
        'form_margin' => 'Skjemamarginer',
        'form_margin_helper' => 'Plass utenfor skjemaet (f.eks. 20px, 1rem, 20px 0)',
        'form_padding' => 'Skjemapolstring',
        'form_padding_helper' => 'Plass innenfor skjemaet (f.eks. 20px, 1rem, 30px 20px)',
        'form_title' => 'Skjematittel',
        'form_description' => 'Skjemabeskrivelse',
        'default_price' => 'Standard Eiendomspris',
        'default_price_helper' => 'La stå tomt for å la brukere skrive inn sin egen pris',
        'default_term' => 'Standard Låneperiode (år)',
        'default_rate' => 'Standard Rente (%)',
        'default_down_payment_type' => 'Standard Egenkapitaltype',
        'default_down_payment_value' => 'Standard Egenkapitalverdi',
        'show_extra_costs' => 'Vis Ekstra Kostnader',
        'currency' => 'Valutasymbol',
        'price_from' => 'Priskilde',
        'price_from_helper' => 'Velg hvor eiendomsprisen skal hentes fra',
        'primary_color' => 'Primær Farge',
        'layout' => 'Oppsett',
    ],

    'layouts' => [
        'horizontal' => 'Horisontal',
        'vertical' => 'Vertikal',
    ],

    'styles' => [
        'default' => 'Standard',
        'compact' => 'Kompakt',
    ],

    'form_styles' => [
        'default' => 'Standard',
        'modern' => 'Moderne',
        'minimal' => 'Minimal',
        'bold' => 'Fet',
        'glass' => 'Glassmorfisme',
    ],

    'form_sizes' => [
        'full' => 'Full Størrelse (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Stor (992px)',
        'md' => 'Middels (768px)',
        'sm' => 'Liten (576px)',
    ],

    'form_alignments' => [
        'start' => 'Venstre (Start)',
        'center' => 'Senter',
        'end' => 'Høyre (Slutt)',
    ],

    'price_from' => [
        'none' => 'Manuell Inntasting',
        'property' => 'Fra Eiendom',
    ],

    'fields' => [
        'property_price' => 'Eiendomspris',
        'down_payment' => 'Egenkapital',
        'loan_amount' => 'Lånebeløp',
        'loan_term' => 'Låneperiode',
        'interest_rate' => 'Rente',
        'disbursement_date' => 'Utbetalingsdato',
        'extra_costs' => 'Tilleggskostnader (Valgfritt)',
        'property_tax' => 'Eiendomsskatt',
        'insurance' => 'Boligforsikring',
        'hoa' => 'Sameiegebyr',
    ],

    'help' => [
        'down_payment_percent' => 'Angi som prosent av eiendomsprisen',
        'down_payment_amount' => 'Angi som fast beløp',
        'loan_amount_hint' => 'Dra glidebryteren eller angi beløpet du ønsker å låne',
    ],

    'results' => [
        'monthly_pi' => 'Månedlig H&R',
        'monthly_payment' => 'Månedlig Betaling',
        'total_monthly' => 'Totalt Månedlig',
        'total_interest' => 'Total Rente',
        'total_paid' => 'Totalt Beløp',
        'from' => 'Fra',
        'to' => 'Til',
        'view_details' => 'Vis Detaljer',
        'empty_state_title' => 'Beregn Boliglånet Ditt',
        'empty_state_message' => 'Skriv inn eiendomsprisen og lånedetaljer ovenfor for å se estimerte månedlige betalinger og total rente.',
    ],

    'amortization' => [
        'title' => 'Nedbetalingsplan',
        'chart' => 'Diagram',
        'table' => 'Tabell',
        'period' => 'Periode',
        'payment' => 'Betaling',
        'year' => 'År',
        'principal' => 'Hovedstol',
        'interest' => 'Rente',
        'balance' => 'Saldo',
        'loan_amount' => 'Lånebeløp',
        'total_principal' => 'Total Hovedstol',
        'total_interest' => 'Total Rente',
    ],

    'widget' => [
        'name' => 'Boliglånskalkulator',
        'description' => 'Vis boliglånskalkulator i sidefeltet',
        'title' => 'Widget-tittel',
        'leave_empty_for_default' => 'La stå tomt for å bruke globale innstillinger',
        'use_default' => 'Bruk Standard',
    ],

    'errors' => [
        'property_price_required' => 'Eiendomsprisen må være større enn 0',
        'loan_amount_required' => 'Lånebeløpet må være større enn 0',
        'loan_amount_exceeds_price' => 'Lånebeløpet kan ikke overskride eiendomsprisen',
        'loan_term_required' => 'Låneperioden må være større enn 0',
        'interest_rate_negative' => 'Renten kan ikke være negativ',
    ],
];
