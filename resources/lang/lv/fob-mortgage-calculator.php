<?php

return [
    'name' => 'Hipotēkas Kalkulators',
    'years' => 'gadi',
    'year' => 'gads',
    'month' => 'mēnesis',
    'months' => 'mēneši',

    'methods' => [
        'decreasing_balance' => 'Samazinošais Atlikums',
        'fixed_payment' => 'Fiksēts Maksājums',
    ],

    'settings' => [
        'title' => 'Hipotēkas Kalkulators',
        'description' => 'Konfigurējiet hipotēkas kalkulatora noklusējuma vērtības',
        'default_interest_rate' => 'Noklusējuma Procentu Likme (%)',
        'default_term_years' => 'Noklusējuma Aizdevuma Termiņš (gadi)',
        'default_down_payment_type' => 'Noklusējuma Pirmās Iemaksas Veids',
        'default_down_payment_value' => 'Noklusējuma Pirmās Iemaksas Vērtība',
        'show_extra_costs' => 'Rādīt Papildu Izmaksas',
        'show_extra_costs_helper' => 'Iespējot īpašuma nodokļa, apdrošināšanas un HOA maksu laukus kalkulatorā',
        'term_options' => 'Aizdevuma Termiņa Opcijas',
        'term_options_helper' => 'Ar komatiem atdalīts pieejamo aizdevuma termiņu saraksts gados (piemēram, 10,15,20,25,30)',
        'currency_symbol' => 'Valūtas Simbols',
    ],

    'down_payment_types' => [
        'percent' => 'Procenti',
        'amount' => 'Fiksēta Summa',
    ],

    'shortcode' => [
        'name' => 'Hipotēkas Kalkulators',
        'description' => 'Parādīt hipotēkas maksājumu kalkulatoru ar pielāgojamām noklusējuma vērtībām',
        'style' => 'Stils',
        'form_style' => 'Formas Stils',
        'form_size' => 'Formas Izmērs',
        'form_alignment' => 'Formas Izlīdzināšana',
        'form_margin' => 'Formas Mala',
        'form_margin_helper' => 'Telpa ārpus formas (piemēram, 20px, 1rem, 20px 0)',
        'form_padding' => 'Formas Iekšmala',
        'form_padding_helper' => 'Telpa formas iekšpusē (piemēram, 20px, 1rem, 30px 20px)',
        'form_title' => 'Formas Nosaukums',
        'form_description' => 'Formas Apraksts',
        'default_price' => 'Noklusējuma Īpašuma Cena',
        'default_price_helper' => 'Atstājiet tukšu, lai lietotāji varētu ievadīt savu cenu',
        'default_term' => 'Noklusējuma Aizdevuma Termiņš (gadi)',
        'default_rate' => 'Noklusējuma Procentu Likme (%)',
        'default_down_payment_type' => 'Noklusējuma Pirmās Iemaksas Veids',
        'default_down_payment_value' => 'Noklusējuma Pirmās Iemaksas Vērtība',
        'show_extra_costs' => 'Rādīt Papildu Izmaksas',
        'currency' => 'Valūtas Simbols',
        'price_from' => 'Cenas Avots',
        'price_from_helper' => 'Izvēlieties, no kurienes iegūt īpašuma cenu',
        'primary_color' => 'Primārā Krāsa',
        'layout' => 'Izkārtojums',
    ],

    'layouts' => [
        'horizontal' => 'Horizontāls',
        'vertical' => 'Vertikāls',
    ],

    'styles' => [
        'default' => 'Noklusējums',
        'compact' => 'Kompakts',
    ],

    'form_styles' => [
        'default' => 'Noklusējums',
        'modern' => 'Moderns',
        'minimal' => 'Minimāls',
        'bold' => 'Treknraksts',
        'glass' => 'Stikla Efekts',
    ],

    'form_sizes' => [
        'full' => 'Pilns Izmērs (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Liels (992px)',
        'md' => 'Vidējs (768px)',
        'sm' => 'Mazs (576px)',
    ],

    'form_alignments' => [
        'start' => 'Pa Kreisi (Sākums)',
        'center' => 'Centrā',
        'end' => 'Pa Labi (Beigas)',
    ],

    'price_from' => [
        'none' => 'Manuāla Ievade',
        'property' => 'No Īpašuma',
    ],

    'fields' => [
        'property_price' => 'Īpašuma Cena',
        'down_payment' => 'Pirmā Iemaksa',
        'loan_amount' => 'Aizdevuma Summa',
        'loan_term' => 'Aizdevuma Termiņš',
        'interest_rate' => 'Procentu Likme',
        'disbursement_date' => 'Izmaksas Datums',
        'extra_costs' => 'Papildu Izmaksas (Neobligāti)',
        'property_tax' => 'Īpašuma Nodoklis',
        'insurance' => 'Mājas Apdrošināšana',
        'hoa' => 'HOA Maksas',
    ],

    'help' => [
        'down_payment_percent' => 'Ievadiet kā īpašuma cenas procentus',
        'down_payment_amount' => 'Ievadiet kā fiksētu summu',
        'loan_amount_hint' => 'Velciet slīdni vai ievadiet summu, ko vēlaties aizņemties',
    ],

    'results' => [
        'monthly_pi' => 'Ikmēneša P&I',
        'monthly_payment' => 'Ikmēneša Maksājums',
        'total_monthly' => 'Kopā Mēnesī',
        'total_interest' => 'Kopā Procenti',
        'total_paid' => 'Kopējā Summa',
        'from' => 'No',
        'to' => 'Līdz',
        'view_details' => 'Skatīt Detaļas',
        'empty_state_title' => 'Aprēķiniet Savu Hipotēku',
        'empty_state_message' => 'Ievadiet īpašuma cenu un aizdevuma informāciju augstāk, lai redzētu prognozētos ikmēneša maksājumus un kopējās procentus.',
    ],

    'amortization' => [
        'title' => 'Amortizācijas Grafiks',
        'chart' => 'Diagramma',
        'table' => 'Tabula',
        'period' => 'Periods',
        'payment' => 'Maksājums',
        'year' => 'Gads',
        'principal' => 'Pamatsumma',
        'interest' => 'Procenti',
        'balance' => 'Atlikums',
        'loan_amount' => 'Aizdevuma Summa',
        'total_principal' => 'Kopā Pamatsumma',
        'total_interest' => 'Kopā Procenti',
    ],

    'widget' => [
        'name' => 'Hipotēkas Kalkulators',
        'description' => 'Parādīt hipotēkas kalkulatoru sānjoslā',
        'title' => 'Logrīka Nosaukums',
        'leave_empty_for_default' => 'Atstājiet tukšu, lai izmantotu globālos iestatījumus',
        'use_default' => 'Lietot Noklusējumu',
    ],

    'errors' => [
        'property_price_required' => 'Īpašuma cenai jābūt lielākai par 0',
        'loan_amount_required' => 'Aizdevuma summai jābūt lielākai par 0',
        'loan_amount_exceeds_price' => 'Aizdevuma summa nedrīkst pārsniegt īpašuma cenu',
        'loan_term_required' => 'Aizdevuma termiņam jābūt lielākam par 0',
        'interest_rate_negative' => 'Procentu likme nevar būt negatīva',
    ],
];
