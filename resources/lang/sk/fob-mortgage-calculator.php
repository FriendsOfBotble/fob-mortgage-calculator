<?php

return [
    'name' => 'Hypotekárna kalkulačka',
    'years' => 'rokov',
    'year' => 'rok',
    'month' => 'mesiac',
    'months' => 'mesiacov',

    'methods' => [
        'decreasing_balance' => 'Klesajúci zostatok',
        'fixed_payment' => 'Pevná splátka',
    ],

    'settings' => [
        'title' => 'Hypotekárna kalkulačka',
        'description' => 'Konfigurácia predvolených hodnôt pre hypotekárnu kalkulačku',
        'default_interest_rate' => 'Predvolená úroková sadzba (%)',
        'default_term_years' => 'Predvolená doba úveru (roky)',
        'default_down_payment_type' => 'Predvolený typ zálohy',
        'default_down_payment_value' => 'Predvolená hodnota zálohy',
        'show_extra_costs' => 'Zobraziť dodatočné náklady',
        'show_extra_costs_helper' => 'Povoliť polia dane z nehnuteľnosti, poistenia a poplatkov HOA v kalkulačke',
        'term_options' => 'Možnosti doby úveru',
        'term_options_helper' => 'Zoznam dostupných dôb úveru v rokoch oddelených čiarkami (napr. 10,15,20,25,30)',
        'currency_symbol' => 'Symbol meny',
    ],

    'down_payment_types' => [
        'percent' => 'Percento',
        'amount' => 'Pevná suma',
    ],

    'shortcode' => [
        'name' => 'Hypotekárna kalkulačka',
        'description' => 'Zobrazenie kalkulačky hypotekárnych splátok s prispôsobiteľnými predvolenými hodnotami',
        'style' => 'Štýl',
        'form_style' => 'Štýl formulára',
        'form_size' => 'Veľkosť formulára',
        'form_alignment' => 'Zarovnanie formulára',
        'form_margin' => 'Okraj formulára',
        'form_margin_helper' => 'Priestor mimo formulára (napr. 20px, 1rem, 20px 0)',
        'form_padding' => 'Vnútorný okraj formulára',
        'form_padding_helper' => 'Priestor vo vnútri formulára (napr. 20px, 1rem, 30px 20px)',
        'form_title' => 'Názov formulára',
        'form_description' => 'Popis formulára',
        'default_price' => 'Predvolená cena nehnuteľnosti',
        'default_price_helper' => 'Nechajte prázdne, aby používatelia mohli zadať vlastnú cenu',
        'default_term' => 'Predvolená doba úveru (roky)',
        'default_rate' => 'Predvolená úroková sadzba (%)',
        'default_down_payment_type' => 'Predvolený typ zálohy',
        'default_down_payment_value' => 'Predvolená hodnota zálohy',
        'show_extra_costs' => 'Zobraziť dodatočné náklady',
        'currency' => 'Symbol meny',
        'price_from' => 'Zdroj ceny',
        'price_from_helper' => 'Vyberte, odkiaľ získať cenu nehnuteľnosti',
        'primary_color' => 'Primárna farba',
        'layout' => 'Rozloženie',
    ],

    'layouts' => [
        'horizontal' => 'Horizontálne',
        'vertical' => 'Vertikálne',
    ],

    'styles' => [
        'default' => 'Predvolený',
        'compact' => 'Kompaktný',
    ],

    'form_styles' => [
        'default' => 'Predvolený',
        'modern' => 'Moderný',
        'minimal' => 'Minimálny',
        'bold' => 'Tučný',
        'glass' => 'Glassmorfizmus',
    ],

    'form_sizes' => [
        'full' => 'Plná veľkosť (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Veľký (992px)',
        'md' => 'Stredný (768px)',
        'sm' => 'Malý (576px)',
    ],

    'form_alignments' => [
        'start' => 'Vľavo (Začiatok)',
        'center' => 'Na stred',
        'end' => 'Vpravo (Koniec)',
    ],

    'price_from' => [
        'none' => 'Ručné zadanie',
        'property' => 'Z nehnuteľnosti',
    ],

    'fields' => [
        'property_price' => 'Cena nehnuteľnosti',
        'down_payment' => 'Záloha',
        'loan_amount' => 'Výška úveru',
        'loan_term' => 'Doba úveru',
        'interest_rate' => 'Úroková sadzba',
        'disbursement_date' => 'Dátum vyplatenia',
        'extra_costs' => 'Dodatočné náklady (voliteľné)',
        'property_tax' => 'Daň z nehnuteľnosti',
        'insurance' => 'Poistenie domácnosti',
        'hoa' => 'Poplatky HOA',
    ],

    'help' => [
        'down_payment_percent' => 'Zadajte ako percento z ceny nehnuteľnosti',
        'down_payment_amount' => 'Zadajte ako pevnú sumu',
        'loan_amount_hint' => 'Potiahnite posúvač alebo zadajte sumu, ktorú chcete požičať',
    ],

    'results' => [
        'monthly_pi' => 'Mesačná splátka (I&Ú)',
        'monthly_payment' => 'Mesačná splátka',
        'total_monthly' => 'Celkom mesačne',
        'total_interest' => 'Celkový úrok',
        'total_paid' => 'Celková suma',
        'from' => 'Od',
        'to' => 'Do',
        'view_details' => 'Zobraziť podrobnosti',
        'empty_state_title' => 'Vypočítajte Si Hypotéku',
        'empty_state_message' => 'Zadajte vyššie cenu nehnuteľnosti a podrobnosti o úvere, aby ste videli odhadované mesačné splátky a celkový úrok.',
    ],

    'amortization' => [
        'title' => 'Amortizačný plán',
        'chart' => 'Graf',
        'table' => 'Tabuľka',
        'period' => 'Obdobie',
        'payment' => 'Splátka',
        'year' => 'Rok',
        'principal' => 'Istina',
        'interest' => 'Úrok',
        'balance' => 'Zostatok',
        'loan_amount' => 'Výška úveru',
        'total_principal' => 'Celková istina',
        'total_interest' => 'Celkový úrok',
    ],

    'widget' => [
        'name' => 'Hypotekárna kalkulačka',
        'description' => 'Zobrazenie hypotekárnej kalkulačky v bočnom paneli',
        'title' => 'Názov widgetu',
        'leave_empty_for_default' => 'Nechajte prázdne pre použitie globálnych nastavení',
        'use_default' => 'Použiť predvolené',
    ],

    'errors' => [
        'property_price_required' => 'Cena nehnuteľnosti musí byť väčšia ako 0',
        'loan_amount_required' => 'Výška úveru musí byť väčšia ako 0',
        'loan_amount_exceeds_price' => 'Výška úveru nemôže presiahnuť cenu nehnuteľnosti',
        'loan_term_required' => 'Doba splácania musí byť väčšia ako 0',
        'interest_rate_negative' => 'Úroková sadzba nemôže byť záporná',
    ],
];
